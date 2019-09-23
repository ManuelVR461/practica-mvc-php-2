<?php
require_once ROOT.PATH_MODELS."Home/HomeModel.php";

class HomeController extends Controller
{
    protected $model;

    public function __construct()
    {
        $this->model = new HomeModel();
    }

    public function show($param)
    {
        $params=array('nombre'=>'juan','canal'=>'developer','parametros'=>$param);
        $this->render(__CLASS__,$params);
    }

    public function exec($param)
    {
        $this->show($param);
        
    }
    
}