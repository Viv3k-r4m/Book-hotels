<?php
$s="localhost";
$u="root";
$p="";
$n="hotel";
$k=mysqli_connect($s,$u,$p,$n);
$x1=(int)$_POST["rate"];
$x2=$_POST["query"];
if($x1&&$x2){
$k1="SELECT Username FROM LOGIN";
$result=mysqli_query($k,$k1);
if(mysqli_num_rows($result)>0){
$res=mysqli_fetch_assoc($result);
$m=$res["Username"];
$k2="INSERT INTO FEEDBACK values('$m',$x1,'$x2')";
mysqli_query($k,$k2);
echo '<script>alert("Thank you");document.location="Help.html";</script>';}
else echo'alert("Enter details")';}
else echo'alert("Enter details")';
?>