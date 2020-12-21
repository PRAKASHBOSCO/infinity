<?php 
namespace Controllers;

use Controllers\BaseController;
use Digient\Framework\Request;

class LoginController extends BaseController
{
    public function index(Request $request)
    {
        // $login = Session::checkLogin();

        print_r($request);die;
        
        // return;
    }

    public function login()
    {
        
    }
}

?>