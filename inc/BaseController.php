<?php

namespace Homework\Inc;

class BaseController
{
    function __construct()
    {
        $action = $_REQUEST['action'];
        $action = strtolower($action);
        $action .= 'Action';
        $this->$action();
    }
}
