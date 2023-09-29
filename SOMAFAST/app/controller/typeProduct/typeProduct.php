<?php
require('../../model/typeProduct/typeProduct.php');
 class Controller_typeProduct {
  protected $model;
  protected $result;
  
  public function __construct() {
    $this->model = new typeProduct();
    $this->result = 
    [];
  }

  public function show (){
    $data['typeProduct']=$this->result = $this->model->getTypeProductAll();
    $data['css']="../../view/assets/css/css.php";
    $data['js']="../../view/assets/js/js.php";


    return $data;

   }

 }


?>