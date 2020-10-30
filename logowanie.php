<?php
$servername = "remotemysql.com";
$username ="i1g6dVaV2H";
$password = "FLyEk1xoGO";
$dbname = "i1g6dVaV2H";

$conn= new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}
?>
