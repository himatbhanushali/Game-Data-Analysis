<?php
session_start();
$lid = $_POST['lid'];
$pass = $_POST['pass'];

$ltype = $_POST['ltype'];

if($ltype=="admin")
{
mysql_connect("localhost","root","");
mysql_select_db("gamecentre");

$result = mysql_query("SELECT *FROM admin_login");
 $f=0;
 
    while ($row = mysql_fetch_array($result)) {
        
        	$l = $row["Login_Id"];
        	$p = $row["password"];
      	
     	
	if($l==$lid && $p==$pass)
	{
		$f=1;
		break;
	}
	
    }
if($f==1)
{
header("Location: http://localhost/TheGamersWorld/adminreport.php");
$_SESSION['lid']=$lid;


}
else
{
header("Location: http://localhost/TheGamersWorld/login.php");
}
}
else
{
mysql_connect("localhost","root","");
mysql_select_db("gamecentre");

$result = mysql_query("SELECT *FROM user_details");
 $f=0;
 
    while ($row = mysql_fetch_array($result)) {
        
        	$l = $row["Login_Id"];
        	$p = $row["Password"];
      	
     	
	if($l==$lid && $p==$pass)
	{
		$f=1;
		break;
	}
	
    }
if($f==1)
{
header("Location: http://localhost/TheGamersWorld/reviewform.php");
$_SESSION['lid']=$lid;
}
else
{
header("Location: http://localhost/TheGamersWorld/login.php");
//echo "Access Denied";
}

}
?>