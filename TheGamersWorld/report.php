<?php

//session_start();
// Database Connection

$host="localhost";
$uname="root";
$pass="";
$database = "gamecentre"; 

$connection=mysql_connect($host,$uname,$pass); 

echo mysql_error();

//or die("Database Connection Failed");
$selectdb=mysql_select_db($database) or 
die("Database could not be selected"); 
$result=mysql_select_db($database)
or die("database cannot be selected <br>");

// Fetch Record from Database

$output = "";
$table = "game_review"; // Enter Your Table Name 
$path="SELECT * INTO OUTFILE \"c:/mydata.csv\"
FIELDS TERMINATED BY ',' OPTIONALLY ENCLOSED BY '\"'
LINES TERMINATED BY \"\\n\"
FROM game_review";
$sql = mysql_query($path);
echo "File Downloaded and saved in C:";
//$columns_total = mysql_num_fields($sql);

// Get The Field Name

?>