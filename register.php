<?php
$s="localhost";
$u="root";
$p="";
$n="hotel";
$q1="CREATE DATABASE IF NOT EXISTS hotel";
$q2="CREATE TABLE IF NOT EXISTS register(Full_Name varchar(100),Email varchar(200) PRIMARY KEY,Phone int,Username varchar(200),Password varchar(20),Country varchar(50))";
$q3="CREATE TABLE IF NOT EXISTS login(Username varchar(200) PRIMARY KEY,Password varchar(20))";
$q4="CREATE TABLE IF NOT EXISTS hoteli(hotel varchar(6) PRIMARY KEY,cost int)";
$q5="CREATE TABLE IF NOT EXISTS feedback(Username varchar(200),rate int,query varchar(1000))";
$q6="CREATE TABLE IF NOT EXISTS pay(Username varchar(200),hotel varchar(6),days int,rooms int,adults int,children int,cost int)";
$q7="INSERT IGNORE INTO hoteli values('hotel1',2659)";
$q8="INSERT IGNORE INTO hoteli values('hotel2',1746)";
$q9="INSERT IGNORE INTO hoteli values('hotel3',10619)";
$q10="INSERT IGNORE INTO hoteli values('hotel4',10867)";
$q11="INSERT IGNORE INTO hoteli values('hotel5',12137)";
$q12="INSERT IGNORE INTO hoteli values('hotel6',10089)";
$q13="INSERT IGNORE INTO hoteli values('hotel7',9344)";
$q14="INSERT IGNORE INTO hoteli values('hotel8',6896)";
$k=mysqli_connect($s,$u,$p);
mysqli_query($k,$q1);
$k=mysqli_connect($s,$u,$p,$n);
mysqli_query($k,$q2);
mysqli_query($k,$q3);
mysqli_query($k,$q4);
mysqli_query($k,$q5);
mysqli_query($k,$q6);
mysqli_query($k,$q7);
mysqli_query($k,$q8);
mysqli_query($k,$q9);
mysqli_query($k,$q10);
mysqli_query($k,$q11);
mysqli_query($k,$q12);
mysqli_query($k,$q13);
mysqli_query($k,$q14);
$x1=$_POST["full"];
$x2=$_POST["email"];
$x3=(int)$_POST["phone"];
$x4=$_POST["user"];
$x5=$_POST["pass"];
$x6=$_POST["cou"];
if($x1&&$x2&&$x3&&$x4&&$x5&&$x6&&$x2==$x4)
{$k0="SELECT Email from REGISTER";
$w=mysqli_query($k,$k0);
if(mysqli_num_rows($w)==0){
$k1="INSERT INTO REGISTER VALUES('$x1','$x2',$x3,'$x4','$x5','$x6')";
mysqli_query($k,$k1);
mysqli_close($k);
echo'<script>document.location="login.html";</script>';}
else echo'<script>alert("User already exists");document.location="register.html";</script>';}
else{
echo'<script>alert("Enter details correctly");document.location="register.html";</script>';
}
?>