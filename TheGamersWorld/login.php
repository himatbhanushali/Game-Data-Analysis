<?php
session_start();

?>

<!DOCTYPE HTML>
<!-- Website Template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Blog - Game Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="text/javascript">
	
	function validate()
	{
		
		var id = document.getElementById('lid');
		var pass = document.getElementById('pass');
		
		
		
		if(id.value=="" && pass.value=="")
		{
				alert("Please provide login id and password");
				return false;
		}
		else if(id.value=="")
		{
				alert("Please provide login id");	
				return false;
		}
		else if(pass.value=="")
		{
				alert("Please provide password");
				return false;
		}
		
		var radios = document.getElementsByName("ltype");
   
    	var radiosChecked = false;
    

   		 var i = 0;
    while (!radiosChecked && i < radios.length) {
        if (radios[i].checked) radiosChecked = true;
        i++;
    }
		 if (radiosChecked) {
        	return true;
    } else {
        alert("Please Select Login Type!")
		return false;
    }
	}
	</script>
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
                     <center> Login Form </center>
                     <form action="validatelogin.php" method="post" onSubmit="return validate()">
                      <table width="70%" border="1" cellspacing="15" cellpadding="1" align="center" bordercolor="#000000">
					   
					    <tr>
					      <td width="33%" rowspan="4"><img src="images/loginlogo.png"></td>
					      
				        </tr>
					    <tr>
					      <td width="10%">&nbsp;</td>
					      <td width="20%">Login Id</td>
					      <td width="37%"><input type="text" id = "lid" name="lid" size="30"></td>
				        </tr>
					    <tr>
					      <td height="77">&nbsp;</td>
					      <td>Password</td>
					      <td><input type="password" name="pass" id="pass" size="30"></td>
				        </tr>
					    <tr>
					      <td>&nbsp;</td>
                          <td><input type="radio" name="ltype" id="ltype" value="user">User</td>
					      <td><input type="radio" name="ltype" id="ltype" value="admin">Admin</td>
					      
				        </tr>
                        <tr>
					      <td><a href="forgot.html">Forgot Passoword!</a></td>
					      <td align="right"><input type="submit" value="Login"></td>
					      <td align="right"><input type="reset" value="Cancel"></td>
				        </tr>
                        
				      </table>
                      </form>
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