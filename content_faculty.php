<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" 
type="text/css" href="default.css" />
<title>CS UIUC Wiki</title>
</head>
<div class="top">
	<div class="logo">
		<p> INSERT COOL IMAGE HERE</p>
	</div>
	<div class="header1">
		<h1>CS UIUC - Wiki</h1>
	</div>
	<div class="login">
		<a href="login.html">LOG IN / Make New User</a>
	</div>
</div>
<div class="main">
	<body>
		<div class="menu">
		<UL> 
		<LI> <a href="default.html">Home</a> 
		<LI> <a href="courses.php">Courses</a> 
		<LI> <a href="faculty.php">Faculty</a> 
		<LI> <a href="advising.html">Advising</a> 
		<LI> <a href="about.html">About</a> 
		</UL> 
		</div>
		<div class="centerbody">
			<?php
				echo "<h1>";
				echo $_GET[faculty_name];
				echo "</h1></br></br>";
			?>
			<div class="content_buttons">
				<! This is the code for the update and delete forms>
				<?php
					$faculty_name = $_GET[faculty_name];
					echo "<form id='update' action='update_faculty.php?faculty_name=" . $faculty_name . "' method='post' accept-charset='UTF-8'>";
				?>
				<input type="submit" name='Update' value='Update' />
				</form>
				<?php
					$faculty_name = $_GET[faculty_name];
					echo "<form id='delete' action='delete_faculty.php?faculty_name=" . $faculty_name . "' method='post' accept-charset='UTF-8'>";
				?>
				<input type='submit' name='Delete' value='Delete' />
				</form>
			</div>
			<?php				
				$usr = "carrol17_Admin";
				$password = "joshsmells";
				$host = "localhost";
				$faculty_name = $_GET[faculty_name];
				$query = "SELECT content FROM Faculty_List WHERE '" .$faculty_name . "' = faculty_name";
				$dbconn = mysql_connect($host, $usr, $password) or die ('Could not connect to database: ' .mysql_error());
				mysql_select_db("carrol17_CS_Wiki", $dbconn);
				$result = mysql_query($query, $dbconn);
				while($line = mysql_fetch_array($result))
					echo $line[0] . "</br>";
			?>
		</div>
	</body>
</div>
</html>