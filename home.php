<?php
$x=$_POST["hotel"];
switch(strtolower($x)){
case "hotel1":
echo'<script>document.location="Hotel1.html";</script>';
break;
case "hotel2":
echo'<script>document.location="Hotel2.html";</script>';
break;
case "hotel3":
echo'<script>document.location="Hotel3.html";</script>';
break;
case "hotel4":
echo'<script>document.location="Hotel4.html";</script>';
break;
case "hotel5":
echo'<script>document.location="Hotel5.html";</script>';
break;
case "hotel6":
echo'<script>document.location="Hotel6.html";</script>';
break;
case "hotel7":
echo'<script>document.location="Hotel7.html";</script>';
break;
case "hotel8":
echo'<script>document.location="Hotel8.html";</script>';
break;
default:
echo'<script>document.location="Home.html";</script>';
}
?>