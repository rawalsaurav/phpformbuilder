<?php
include_once("system/core.php");







$selectdata=array("name1"=>"value1","name2"=>"value2","name3"=>"value2");
$dataselect=array("type"=>"select","datas"=>$selectdata);













echo "<h1> Form Examples </h1><br />";
 create_form($name="myform",$fields= array($field1=array("name"=>"mydata","type"=>"text"),$field2=array("name"=>"mydata2","type"=>"text")),$val="Done",$task="HEERE");

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