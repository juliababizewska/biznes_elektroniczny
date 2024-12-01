<?php

class Testmodule extends Module{
    public function __construct()
    {
        $this->name = "testmodule1";
        $this->author = "Wojciech Derwisz";
        $this->version = "1.0.0";
        parent::__construct();
        $this->displayName = $this->l("Testmodule1");
        $this->description = $this->l("To jest testowy modul");
        $this->ps_versions_compliancy = array('min'=>'1.7.0.0', 'max'=>'1.7.99.99');
    }
}