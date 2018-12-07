<?php
include("mstask.php");

if(!empty($_POST)){

	echo "<h1>Posted values in array</h1><br />";
	echo "<pre>";
print_r($_POST);



$handle=new MStodoask();
$handle->MSlistentask($_POST['task'],$_POST);

} else{

echo "No direct access";



}
?>