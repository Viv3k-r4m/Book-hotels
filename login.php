<?php
$s="localhost";
$u="root";
$p="";
$n="hotel";
try{
    $k=mysqli_connect($s,$u,$p,$n);
}
catch(mysqli_sql_exception){
    echo'<script>alert("Register first");document.location="Register.html";</script>';
}
if($k){
    $x1=$_POST["un"];
    $x2=$_POST["pa"];
    if($x1&&$x2){
        $k1="SELECT Username,Password FROM REGISTER WHERE Username='$x1'&&Password='$x2'";
        $result=mysqli_query($k,$k1);
        if(mysqli_num_rows($result)>0){
              $k3="INSERT INTO LOGIN VALUES('$x1','$x2')";
              mysqli_query($k,$k3);
            mysqli_close($k);
            echo'<script>alert("Welcome");document.location="Hotel.html";</script>';}
    else echo'<script>alert("Enter details correctly");document.location="Login.html";</script>';}
   else echo'<script>alert("Enter details correctly");document.location="Login.html";</script>';}
?>