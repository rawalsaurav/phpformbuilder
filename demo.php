<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// error_reporting( E_ALL );
 //exit();
include("system/core.php");

$xtender=new Msdata();

require_once 'system/components/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('system/templates/'.template.'/');

 // Instantiate our Twig
$twigs = new Twig_Environment($loader);
$formdata=$xtender->create_form($name="myform",$fields= array($field1=array("name"=>"mydata","type"=>"text"),$field2=array("name"=>"mydata2","type"=>"text")),$val="Doned",$task="HEERE");



//echo $fos;

//$data_before="Hello I am good,I eat apple";

//$data_new=$xtender->Xrender($data_before,array('good'=>'bad','apple'=>$formdata));
//echo $data_new;

$data= $twigs->render('index.html', array('named' => 'Fabien','red'=>'<h1>HEAD</h1>','form2'=>$formdata));


echo $data;







//$selectdata=array("name1"=>"value1","name2"=>"value2","name3"=>"value2");
//$dataselect=array("type"=>"select","datas"=>$selectdata);












/*
echo "<h1> Form Examples </h1><br />";
 

create_form($name="adas",$fields=array($field3=array("name"=>"mero","type"=>"text")),$val="Create");
create_form($name="meroform",$fields=array($fieldab=array("name"=>"merof","type"=>"select",'datas'=>$selectdata),$field2=array("name"=>"merosf","type"=>"text")),$val="Create");

create_form($name="meroform",

	$fields=array(
		$fieldab=array("name"=>"merof","type"=>"checkbox",'datas'=>$selectdata),
		$field2=array("name"=>"email","type"=>"text")),


	$val="Send",


	$task="mail");

//create_form($name="meroform",
//$fields=array($fieldab=array("name"=>"gender","type"=>"radio",'datas'=>$selectdata),$field2=array("name"=>"merosf","type"=>"text")),$val="Create",$MStask="mail");

?>