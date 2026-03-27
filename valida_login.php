<?php

$userMaster = "admin@blog.com";
$passMaster = "123456";


$email = $_POST['email'];
$senha = $_POST['senha'];


if ($email ==  $userMaster && $senha == $passMaster){

header("location: trabalho2.php");



}else{

header("location: login.php?erro=1");
}
exit();
?>


