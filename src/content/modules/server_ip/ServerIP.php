<?php

class ServerIP extends Controller
{

    private $moduleName = "server_ip";

    public function accordionLayout()
    {
        return Template::executeModuleTemplate($this->moduleName, "ip.php");
    }

    public function render()
    {
        return $_SERVER['SERVER_ADDR'];
    }
}