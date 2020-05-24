<?php 
namespace Controllers;

use Controllers\BaseController;
use Models\Request;
use Models\Session;

class LoginController extends BaseController
{
    public function index(Request $request)
    {
        $login = Session::checkLogin();
    }

    public function login()
    {
        
    }
}

?>