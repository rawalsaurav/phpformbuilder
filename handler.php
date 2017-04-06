<?php


if(!empty($_POST)){

	echo "<h1>Posted values in array</h1><br />";
	echo "<pre>";
print_r($_POST);

} else{

echo "No direct access";



}
?>