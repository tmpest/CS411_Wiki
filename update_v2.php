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
				$usr = "carrol17_Admin";
				$password = "joshsmells";
				$host = "localhost";
				$course = $_GET[course_name];
				if($course){
					echo "<h2>Updating: " . $course . "</h2></br></br>";
					$query = "SELECT content FROM Course_List WHERE course_name = '" . $course . "'";
					$dbconn = mysql_connect($host, $usr, $password) or die ('Could not connect to database: ' . mysql_error());
					mysql_select_db("carrol17_CS_Wiki", $dbconn);
					$result = mysql_query($query, $dbconn);
					$line = mysql_fetch_array($result);
					echo "<form method=\"post\" action=\"update_submit.php?course_name=" . $course . "\">";
					echo "Make your changes to the content here: </br> <textarea style=\"width:70%\" rows=15 name=\"content\">" . $line[0] . "</textarea>";
					echo "<input type=\"submit\" name=\"submit\" value=\"submit\"> </form>";
				}
			?>
		</div>
	</body>
</div>
</html>