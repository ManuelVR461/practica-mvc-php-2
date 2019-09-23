<?php

abstract class Controller{
    protected $view;
    public function __construct()
    {
        echo __CLASS__." instanciada </br>";
    }

    protected function render($controller_name='',$params=array()){
        $this->view = new View($controller_name,$params);
    }
    abstract public function exec($param);

}