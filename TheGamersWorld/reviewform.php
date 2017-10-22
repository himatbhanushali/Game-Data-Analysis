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
	<title>Games - Game Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
    <script type="text/javascript">
	
	function validation()
	{
		var gn,gg,ratings,lg,dlg,sugges;
		
		gn = document.getElementById('gn');
		gg = document.getElementById('gg');
		ratings = document.getElementById('ratings');
		hplay = document.getElementById('hplay');
		sprefered = document.getElementById('sprefered');
		infu = document.getElementById('influ');
		lg = document.getElementById('wlike');
		dlg = document.getElementById('wdlike');
		sugges = document.getElementById('sugg');
		
		if(gn.value=="")
		{
			alert("Please select game name");
			return false;	
		}
		else if(gg.value=="")
		{
			alert("Please provide game genre");
			return false;	
		}
		else if(ratings.value=="")
		{
			alert("Please provide ratings");
			return false;	
		}
		else if(hplay.value=="")
		{
			alert("Please provide Number of hours played");
			return false;		
		}
		else if(sprefered.value=="")
		{
			alert("Please provide System Prefered");
			return false;		
		}
		else if(infu.value=="")
		{
			alert("Please select influence suggestion");
			return false;		
		}
		else if(lg.value=="")
		{
			alert("Please provide you review on likes about game");
			return false;	
		}
		else if(dlg.value=="")
		{
			alert("Please provide you review on dis-likes about game");
			return false;	
		}
		else if(sugges.value=="")
		{
			alert("Please provide your suggestion");
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
							<a href="login.php" id="menu5">Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div id="body">
			<div>
				<div>
					<div class="games">
                    <form action="review.php" method="post" onSubmit="return validation()">
                    <font size="+1" face="Palatino Linotype, Book Antiqua, Palatino, serif">
                    <center> Review Game </center>
					  <table width="60%" border="1" cellspacing="15" cellpadding="1" align="center" bordercolor="#000000">
					    <tr>
					      <td>Game Name</td>
					      <td>
                          <select name="gn" id="gn" >
                          <option value=""></option>
                          <option value="Counter Strike">Counter Strike</option>
                          <option value="Need For Speed">Need for Speed</option>
                          <option value="Grand Theft Auto">Grand Theft Auto</option>
                          <option value="Dead Island">Dead Island</option>
                          <option value="BattleField">BattleField</option>
                          <option value="SupremeCommander">SupremeCommander</option>
                          <option value="Game of Thrones">Game of Thrones</option>
                          <option value="CrazyMan2">CrazyMan2</option>
                          <option value="Killer's Dream">Killer's Dream</option>
                          <option value="Golden Wake">Golden Wake</option>
                          <option value="Christmas Carol">Christmas Carol</option>
                          <option value="Bird Story">Bird Story</option>
                          <option value="Bug's Life">Bug's Life</option>
                          </select>
                         </td>
				        </tr>
					    <tr>
					      <td>Game Genre</td>
					      <td>
                           <select name="gg" id="gg" >
                           <option value=""></option>
                          <option value="Action">Action</option>
                          <option value="Racing">Racing</option>
                          <option value="Quiz">Quiz</option>
                          <option value="Puzzle">Puzzle</option>
                          <option value="Adventure">Adventure</option>
                          <option value="Strategy">Strategy</option>
                          <option value="Comedy">Comedy</option>
                          <option value="Suspense">Suspense</option>
                          </select>
                         </td>
				        </tr>
					    <tr>
					      <td>Ratings</td>
					      <td><select name="ratings" id="ratings">
                          <option value=""></option>
                          <option value="1-4">1-4</option>
                          <option value="4-7">4-7</option>
                         <option value="8-10">8-10</option>
                          </select>
                          </td>
				        </tr>
                         <tr>
					      <td>Hours Played Weekly</td>
					      <td><select name="hplay" id="hplay">
                          <option value=""></option>
                          <option value="0-5">0-5</option>
                          <option value="6-11">6-11</option>
                         <option value="12-18">12-18</option>
                         <option value="19-24">19-24</option>
                         <option value="Above 24">Above 24</option>
                          </select>
                          </td>
				        </tr>
                         <tr>
					      <td>System Prefered By User</td>
					      <td><select name="sprefered" id="sprefered">
                          <option value=""></option>
                          <option value="Desktop">Desktop</option>
                          <option value="Laptop">Laptop</option>
                         <option value="Xbox">Xbox</option>
                         <option value="Playstation">Playstation</option>
                          </select>
                          </td>
				        </tr>

						<tr>
					      <td>Age Group</td>
					      <td><select name="agegroup" id="sprefered">
                          <option value=""></option>
                          <option value="5 to 10">5 to 10</option>
                          <option value="11 to 15">11 to 15</option>
                         <option value="16 to 20">16 to 20</option>
                         <option value="21 to 25">21 to 25</option>
                         <option value="26 to 30">26 to 30</option>
                         
                          </select>
                          </td>
				        </tr>

                         <tr>
					      <td>Do Games Influence users actions in reality</td>
					      <td><select name="influ" id="influ">
                          <option value=""></option>
                          <option value="Yes">Yes</option>
                          <option value="No">No</option>
                          </select>
                          </td>
				        </tr>
					    <tr>
					      <td>What you liked about Game</td>
					      <td><textarea rows="5" cols="45" name="wlike" id="wlike"></textarea></td>
				        </tr>
					    <tr>
					     <td>What you dis-liked about Game</td>
					      <td><textarea rows="5" cols="45" name="wdlike" id="wdlike"></textarea></td>
				        </tr>
					    <tr>
					      <td>Suggestion</td>
					      <td><textarea rows="5" cols="45" name="sugg" id="sugg"></textarea></td>
				        </tr>
					    <tr>
					      <td align="right"><input type="submit" value="Post"></td>
					      <td align="center"><input type="reset" value="Cancel"></td>
				        </tr>
				      </table>
                      </font>
                      </form>
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