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
					$cno = $_POST['cno'];
					mysql_connect("localhost","root","");
					mysql_select_db("gamecentre");
					$result = mysql_query("SELECT * FROM user_details where Contact_No ='".$cno."'");
					if(mysql_num_rows($result)>=1)
   {
    echo '<table align="center" border="1">';
					echo '<tr>
						
						<th>Password</th>
					</tr>';
 
    while ($row = mysql_fetch_array($result)) {
        
				echo '<tr>'.
						
						'<td>'.$row["Password"].'</td>'
					.'</tr>';
					}
					echo '</table>';
   }
 else
    {
   //insert query goes here
   echo "User Does not Exits";
    }
					
					
					 
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