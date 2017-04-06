<?php

class MSdata{

public function sum($a1,$b1)

{

$sum=$a1+$b1;

return $sum;
}

public function MSformopen($name){

$data="<form action=\"handler.php?formname=$name\"  method=\"post\">";
return($data);

}








public function MSform($name,$data=array()){
	if($data){

	
	 
if($data['type']=="text"){ $data="text";
$ele="$name : <input type=\"text\" name=\"form-1-$name-text\"> <br /> <br />";


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

else{


}


}

	
$markup= $ele;










return($markup);

}

public function MSformclose($value){

$data="<input type=\"submit\" value=\"$value\"></form>";
return($data);

}
}

$ss= new MSdata();

$selectdata=array("name1"=>"value1","name2"=>"value2","name3"=>"value2");
$dataselect=array("type"=>"select","datas"=>$selectdata);


function create_form($name,$fields=array(),$val){
$ss= new MSdata();
 echo $ss->MSformopen($name);
foreach($fields as $key =>$eld){
	
$name=$eld['name'];

echo $ss->MSform($name,$eld);


}
 echo $ss->MSformclose($val);

}




?>





