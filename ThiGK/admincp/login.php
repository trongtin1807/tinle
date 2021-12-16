<?php
if(!isset($_SESSION)) session_start();
$u = isset($_POST['DH51802544_User'])?$_POST['DH51802544_User']:'';
$p = isset($_POST['DH51802544_Pass'])?$_POST['DH51802544_Pass']:'';


if($u == 'admin' && $p== '123456')
{
    $_SESSION['admin']=$u;
    header('location:index.php');
    exit;
}
else{
    header('location:login.html');
    exit;
}
?>

