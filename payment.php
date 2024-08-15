<?php
$s="localhost";
$u="root";
$p="";
$n="hotel";
$k=mysqli_connect($s,$u,$p,$n);
$x1=$_POST["hotel"];
$x2=(int)$_POST["days"];
$x3=(int)$_POST["rooms"];
$x4=(int)$_POST["adult"];
$x5=(int)$_POST["child"];
if($x1&&$x2&&$x3&&$x4&&$x5){
    $k0="SELECT Username FROM LOGIN";
    $result1=mysqli_query($k,$k0);
    $x1a=strtolower($x1);
    $k2="SELECT cost FROM HOTELI WHERE hotel='$x1a'";
    $res=mysqli_query($k,$k2);
    if(mysqli_num_rows($result1)>0&&mysqli_num_rows($res)>0){
        $res1=mysqli_fetch_assoc($result1);
        $res2=mysqli_fetch_assoc($res);
        $m=$res1["Username"];
        $t=(int)$res2["cost"];
        $k1="INSERT INTO PAY VALUES('$m','$x1a',$x2,$x3,$x4,$x5,$t)";
        mysqli_query($k,$k1);
        echo'<script>var msg="Payment done";alert(msg);</script>';
        echo'<script>document.location="Hotel.html";</script>';
        mysqli_close($k);
        }
    else{
        echo'<script>alert("Enter details correctly");document.location="payment.html";</script>';
    }
}
else{
    echo'<script>alert("Enter details correctly");document.location="payment.html";</script>';
}
?>