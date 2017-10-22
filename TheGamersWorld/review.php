<?php
session_start();

if(isset($_SESSION['lid']))
{
$gn=$_POST['gn'];
$gg=$_POST['gg'];
$rat=$_POST['ratings'];
$hplay = $_POST['hplay'];
$sprefered = $_POST['sprefered'];
$influ = $_POST['influ'];
$wlike = $_POST['wlike'];
$agegroup = $_POST['agegroup'];

$wdlike = $_POST['wdlike'];
$sugg = $_POST['sugg'];

mysql_connect("localhost","root","");
mysql_select_db("gamecentre");
$ins="insert into game_review values('".$_SESSION['lid']."','".$gn."','".$gg."','".$rat."','".$hplay."','".$sprefered."','".$influ."','".$wlike."','".$agegroup."','".$wdlike."','".$sugg."')";

echo $ins;
if(mysql_query($ins))
{
header("Location: http://localhost/TheGamersWorld/reviewsuccess.html"); 
}
}
else
{
header("Location: http://localhost/TheGamersWorld/login.php");
//echo "Access Denied";
}





?>