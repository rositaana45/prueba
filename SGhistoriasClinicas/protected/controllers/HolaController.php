<?php   
#http://localhost:8080/yii/practica1/hola/index

class HolaController extends Controller
{
  public function  actionIndex(){
    $model=CActiveRecord::model("Users")->findAll();  
    $twitter="@codigofacilito";
    $this->render("index",array("model"=>$model,"twitter"=>$twitter)); 
  }

} 