<?php

namespace Models;

class Request
{
    protected $server   = [];

    public $input       = [];

    public function __construct()
    {
        $this->server   = $_SERVER;

        $this->input    =  $_POST + $_GET;
    }
}

?>