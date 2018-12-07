<?php


define("template","everest");
//$menulinks=array();

$menulinks=array();
class MSdata{


public function MSformopen($name){

$data="<form action=\"system/handler.php?formname=$name\"  method=\"post\">";
return($data);

}

public function parser($string, $start, $end){
    $string = ' ' . $string;
    $ini = strpos($string, $start);
    if ($ini == 0) return '';
    $ini += strlen($start);
    $len = strpos($string, $end, $ini) - $ini;
    return substr($string, $ini, $len);
}

public function replacer($old,$new,$data){

$data=str_replace($old, $new, $data);
return($data);

}



public function Xrender($input,$changes=array()){

foreach($changes as $key=>$value){
$input=$this->replacer($key,$value,$input);
	

}

return($input);




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





public function create_form($name,$fields=array(),$val,$task=""){
$html='';
//echo $task;
//exit();
 $html=$html.$this->MSformopen($name);
foreach($fields as $key =>$eld){
	
$name=$eld['name'];

$html=$html.$this->MSform($name,$task,$eld);


}
 $html= $html.$this->MSformclose($val);
 return($html);

}











}



//$ss= new MSdata();







?>





