<?php 
$host ="localhost:3306";
$dbName="bansach";
$userName="root";
$password="";
$objPDO = new PDO("mysql:host=$host; dbname=$dbName", $userName, $password);
$objPDO->query('set names utf8');