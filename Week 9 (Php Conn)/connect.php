<?php
$user = "root";
$pass = "";
$db = "mydb";
$server = "localhost";

$link = mysqli_connect($server,$user,$pass);
if(!$link){
echo ("connection is established");
}
if(!mysqli_select_db($link,$db)){
echo ("DB is selected");
}

?>