<?php
include("core.php");

echo "<h1> Form Examples </h1><br />";
 create_form($name="myform",$fields= array($field1=array("name"=>"mydata","type"=>"text"),$field2=array("name"=>"mydata2","type"=>"text")),$val="Done");

create_form($name="adas",$fields=array($field3=array("name"=>"mero","type"=>"text")),$val="Create");
create_form($name="meroform",$fields=array($fieldab=array("name"=>"merof","type"=>"select",'datas'=>$selectdata),$field2=array("name"=>"merosf","type"=>"text")),$val="Create");

create_form($name="meroform",$fields=array($fieldab=array("name"=>"merof","type"=>"checkbox",'datas'=>$selectdata),$field2=array("name"=>"merosf","type"=>"text")),$val="Create");

create_form($name="meroform",$fields=array($fieldab=array("name"=>"gender","type"=>"radio",'datas'=>$selectdata),$field2=array("name"=>"merosf","type"=>"text")),$val="Create");


?>