<?php
	$course = $_POST[course_name];
	$content = $_POST[content];
	$host = "localhost";
	$usr = "carrol17_Admin";
	$password = "joshsmells";
	$dbconn = mysql_connect($host, $usr, $password) or die ('Could not
	connect to database: ' .mysql_error());
	mysql_select_db("carrol17_CS_Wiki", $dbconn);
	$query = "INSERT INTO Course_List VALUES ('" . $course . "', '" . $content . "')";
	$result = mysql_query($query, $dbconn);
	
	if($result)
		header("Location:courses.php");
	else{
		echo "Error has occured <br>" . mysql_error();
		echo "<br><br><a href=\"courses.php\">Home</a>";
	}
?>