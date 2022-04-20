<?php

$name=$_POST['name'];
$pass=$_POST['pass'];
if($name == "fernando" and $pass == "espiral22"){ //rever isso daqui
    include("home2.php");
}
else{
    include("index.php");
}
?>