<?php
namespace Models;

class Session
{
    public $ciphering       = "AES-128-CTR"; 
    public $encryption_iv   = '1234567891011121';
    public $encryption_key  = "something";
    public $options         = 0;

    public function __construct()
    {
        session_start();
        $this->setSession('userId', 0);
    }

    public function setSession(string $key, string $value)
    {
        $simple_string = json_encode([$key => $value]); 

        // Use OpenSSl Encryption method 
        $iv_length = openssl_cipher_iv_length($this->ciphering); 
        
        // Use openssl_encrypt() function to encrypt the data 
        $encryption = openssl_encrypt($simple_string, $this->ciphering, $this->encryption_key, $this->options, $this->encryption_iv); 

        $_SESSION['web'] = $encryption;
        
    }

    public static function getSession(string $key = null)
    {   
        $encryption = $_SESSION['web'];

        // Use openssl_decrypt() function to decrypt the data 
        $decryption = openssl_decrypt ($encryption, self::$ciphering, self::$encryption_key, self::$options, self::$encryption_iv); 

        $data = (array) json_decode($decryption);

        if(isset($key)){
            return $data[$key] ?? '';
        }

        return $data;

    }

    public static function checkLogin()
    {
        $user = self::getSession('userId');

        if($user == 0){
            return false;
        }

        return true;

    }
}

?>