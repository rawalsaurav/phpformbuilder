<?php
include_once("../config/settings.php");
include("core.php");
class MStodoask extends MSdata{

public function MSlistentask($task,$data=array()){

switch($task){

case "mail":
$emaildata=$this->formatemail($prefix="Dear Admin, following information has been received :", $data);
//echo $emaildata;
//exit();
$this->MSmail(email,email,$subject="Mail from Website",$emaildata);



//print_r($data);

echo "Email Sent";


break;




}





}

public function MSmail($to,$from,$subject,$data){

$to = $to;
$subject = $subject;


// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <'.$from.'>' . "\r\n";
$headers .= 'Cc: '.$to. "\r\n";

mail($to,$subject,$data,$headers);



}



public function formatemail($prefix="",$data=array()){
$htmldata="";
if($prefix==""){
$prefix="Hi, Following information has been received from the form :";
}
$message="<table border=\"0\">";

foreach($data as $key=> $val){
	if($key=="task"){}else{
$htmldata.="<tr><td><b>$key</b> &nbsp;</td><td>$val</td></tr>";
}
}

$output= $prefix.$message.$htmldata."</table>";
return($output);

}

}





?>