<?php 
include './pdo.php';
$m = isset($_POST['DH51802544_masach'])?$_POST['DH51802544_masach']:'';
$t = isset($_POST['DH51802544_tensach'])?$_POST['DH51802544_tensach']:'';
$g = isset($_POST['DH51802544_gia'])?$_POST['DH51802544_gia']:0;
$mt = isset($_POST['DH51802544_mota'])?$_POST['DH51802544_mota']:'';
$maloai =  isset($_POST['DH51802544_maloai'])?$_POST['DH51802544_maloai']:'th';
$manxb =  isset($_POST['DH51802544_manxb'])?$_POST['DH51802544_manxb']:'gd';

$sql="update sach set tensach=?, gia=?, mota=?, manxb=?, maloai=? 
                    where masach=?  ";
$a =[ $t, $g,  $mt, $manxb, $maloai, $m];
$objStatement= $objPDO->prepare($sql);//return B
$objStatement->execute($a);//ket qua truy van
$n = $objStatement->rowCount();
// echo "<pre>Da them $n dong";
// echo $sql ;
// print_r($a);
header('location:index');