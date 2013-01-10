<?php
	$faculty_name = $_GET[faculty_name];
	$content = $_POST[content];
	$usr = "carrol17_Admin";
	$password = "joshsmells";
	$host = "localhost";
	$query = "UPDATE Faculty_List SET content = '" . $content . "' WHERE faculty_name = '" . $faculty_name . "'";
	$dbconn = mysql_connect($host, $usr, $password) or die ('Could not
			connect to database: ' .mysql_error());
	mysql_select_db("carrol17_CS_Wiki", $dbconn);
	$result = mysql_query($query, $dbconn);
	if($result){
		header("location:content_faculty.php?faculty_name=". $faculty_name);
		//echo $query . "<br>";
		//echo $result . "<br>";
		//echo $faculty_name . "<br>";
		//echo $content . "<br>";
		//echo "<a href \"default.html\"> Home </a>";
	}
	else{
		echo "We are sorry an error seems to have occured.</br> Please let us know what happened so we can attempt to fix the issue, so give us as much information as possible. </br>";
		echo mysql_error() . "</br>";
		echo $query . "</br> </br>";
		echo "<a href=\"default.html\"> Home </a>";
	}
?>