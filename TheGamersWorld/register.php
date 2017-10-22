<?php
session_start();
$fn=$_POST['fn'];
$ln=$_POST['ln'];

$db= $_POST['age'];
$g=$_POST['gen'];

$ei=$_POST['email'];
$cno = $_POST['phone'];
$li=$_POST['loginid'];
$pwd=$_POST['pwd'];
mysql_connect("localhost","root","");
mysql_select_db("gamecentre");
$ins="insert into user_details values('".$fn."','".$ln."','".$db."','".$g."','".$ei."','".$cno."','".$li."','".$pwd."')";

mysql_query($ins);

header("Location: http://localhost/TheGamersWorld/registrationsuccess.html"); 


// dekh isme b same cheez hai tarun

?>