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
			<form action="insert_faculty_submit.php" method="post">
				Faculty Name<br>
				<input type="text" name="faculty_name">
				<br>
				Page Content<br>
				<textarea name="content" width=70% rows=15></textarea><br>
				<input type="submit" value="Finished">
			</form>
		</div>
	</body>
</div>
</html>