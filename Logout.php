<?php
$s="localhost";
$u="root";
$p="";
$n="hotel";
$k=mysqli_connect($s,$u,$p,$n);
$x="SELECT Username FROM LOGIN";
$f=mysqli_query($k,$x);
if(mysqli_num_rows($f)>0){
 $res=mysqli_fetch_assoc($f);
 $res1=$res["Username"];
 $f1="DELETE FROM LOGIN WHERE Username='$res1'";
 mysqli_query($k,$f1);
 echo'<script>document.location="Home.html"</script>';
 mysqli_close($k);
}