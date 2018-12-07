<?php
$q1="How do you find the present government of Nepal ? ";
$option1="Good";
$option2="Well";
$option3="Bad";
$q2="Who will become present of Nepal ? ";
$option1="Ram";
$option2="Shyam";
$option3="Bad2";

$poll=new Msdata();
$poll=$poll->create_form($name="myform",$fields= array($field1=array("name"=>"mydata","type"=>"text"),$field2=array("name"=>"Poll","type"=>"text")),$val="Submit",$task="HEERE");

$menulinks['poll']=$poll;


?>