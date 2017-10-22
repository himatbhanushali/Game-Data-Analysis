<?php

session_start();

if(isset($_SESSION['lid']))
{

}
else
{
header("Location: http://localhost/TheGamersWorld/login.php");
//echo "Access Denied";
}



?>


<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Blog - Game Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="background">
		<div id="header">
			<div>
				<div>
					<a href="index.php" class="logo"><img src="images/logo.png" alt=""></a>
					<ul>
						<li class="selected">
							<a href="index.php" id="menu1">home</a>
						</li>
						<li>
							<a href="register.html" id="menu2">Register</a>
						</li>
						<li>
							<a href="reviewform.php" id="menu3">Review</a>
						</li>
						<li>
							<a href="about.html" id="menu4">News</a>
						</li>
						<li>
							<a href="login.php" id="menu5">Login</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="body">
			<div>
				<div>
					<div class="blog">
					 <font size="+1" face="Palatino Linotype, Book Antiqua, Palatino, serif">
                    <center>
                   	<?php
					
					mysql_connect("localhost","root","admin");
					mysql_select_db("gamecenter");
					$result = mysql_query("SELECT * FROM game_review");
					
					echo '<table align="center" border="1">';
					echo '<tr>
						<th>Game Name</th>
						<th>Game Genre</th>
						<th>Ratings</th>
						<th>Hours Played Weekly</th>
						<th>System Refered By User</th>
						<th>Do Games Influnce users action</th>
						<th>What you like about Game</th>
						<th>What you dis liked about game</th>
						<th>Suggestion</th>
					</tr>';
 
    while ($row = mysql_fetch_array($result)) {
        
				echo '<tr>'.
						'<td>'.$row["Game_Name"].'</td>'.
						'<td>'.$row["Game_Genre"].'</td>'.
						'<td>'.$row["Rating"].'</td>'.
						'<td>'.$row["hplay"].'</td>'.
						'<td>'.$row["system_prefer"].'</td>'.
						'<td>'.$row["influence"].'</td>'.
						'<td>'.$row["Like"].'</td>'.
						'<td>'.$row["Dislike"].'</td>'.
						'<td>'.$row["Suggestion"].'</td>'
					.'</tr>';
					}
					echo '</table>';
					?>
                    </center>
                      </font>
					</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<ul>
					<li id="facebook">
						<a href="">facebook</a>
					</li>
					<li id="twitter">
						<a href="">twitter</a>
					</li>
					<li id="googleplus">
						<a href="">googleplus</a>
					</li>
				</ul>
				<p>&nbsp;</p>
			</div>
		</div>
	</div>
</body>
</html>