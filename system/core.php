<?php

require_once 'components/vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('system/templates/');

 // Instantiate our Twig
$twig = new Twig_Environment($loader);




class MSdata{


public function MSformopen($name){

$data="<form action=\"system/handler.php?formname=$name\"  method=\"post\">";
return($data);

}


public function MSform($name,$task="",$data=array()){
	if($data){

	//echo $task;
	//exit();

if($data['type']=="text"){ $data="text";
$ele="$name : <input type=\"text\" name=\"$name\"> <br /> <br />";


}

elseif($data['type']=="select"){ 
$ele="<select name=\"$name\">";

foreach($data['datas'] as $key=>$val){
$ele=$ele."<option value=\"$val\">$key</option>";



}
$ele=$ele."</select>";



}
elseif($data['type']=="checkbox"){

$ele="";
foreach($data['datas'] as $key=>$val){
$ele=$ele."<input type=\"checkbox\" name=\"$key\" value=\"$val\"> $key<br>";




}






}
elseif($data['type']=="radio"){
$ele="";
foreach($data['datas'] as $key=>$val){

$ele=$ele."<input type=\"radio\" name=\"$name\" value=\"$val\"> $key<br>";

}

}
//echo $task;
//exit();

else{


}


}

	
$markup= $ele;
if($task){
$markup=$markup."<input type=\"hidden\" name=\"task\" value=\"$task\"><br>";


}






return($markup);

}

public function MSformclose($value){

$data="<input type=\"submit\" value=\"$value\"></form>";
return($data);

}
}

//$ss= new MSdata();



function create_form($name,$fields=array(),$val,$task=""){
$ss= new MSdata();
//echo $task;
//exit();
 echo $ss->MSformopen($name);
foreach($fields as $key =>$eld){
	
$name=$eld['name'];

echo $ss->MSform($name,$task,$eld);


}
 echo $ss->MSformclose($val);

}




?>





