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

			<div class="content_buttons">
				<form action="insert_course.php" method="post">
					Missing a Course, add it here:
					<input type="submit" name="add_course_btn" value="Add Course"/>
				</form>
			</div>
			
			<div>
				<p> Select a course from below to view the Wiki Page. </p>
			</div>
			<?php
				$host = "localhost";
				$usr = "carrol17_Admin";
				$password = "joshsmells";
				$dbconn = mysql_connect($host, $usr, $password) or die ('Could not
				connect to database: ' .mysql_error());
				mysql_select_db("carrol17_CS_Wiki", $dbconn);
				$query = "SELECT course_name FROM Course_List";
				$result = mysql_query($query, $dbconn);
				while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
				         foreach ($line as $col_value) {
				               echo "<a href=content.php?course_name=$col_value>$col_value</a><br/>";
				       }
				}
				mysql_free_result($result);
				
				mysql_close($dbconn);
			?>
			
		</div>
	</body>
</div>
</html>