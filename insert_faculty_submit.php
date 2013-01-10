<?php
	$faculty_name = $_POST[faculty_name];
	$content = $_POST[content];
	$rating = 5;
	$host = "localhost";
	$usr = "carrol17_Admin";
	$password = "joshsmells";
	$dbconn = mysql_connect($host, $usr, $password) or die ('Could not
	connect to database: ' .mysql_error());
	mysql_select_db("carrol17_CS_Wiki", $dbconn);
	$query = "INSERT INTO Faculty_List VALUES ('" . $faculty_name . "', '" . $content . "', '" . $rating . "')"; // add ratings here... else it won't update?
	$result = mysql_query($query, $dbconn);
	
	if($result)
		header("Location:faculty.php");
	else{
		echo "Error has occured <br>" . mysql_error();
		echo "<br><br><a href=\"faculty_names.php\">Home</a>";
	}
?>