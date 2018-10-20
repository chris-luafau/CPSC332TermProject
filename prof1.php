<html>
<head>
<title>CPSC 332 Summer 2018 Project</title>
<h3>Query 1</h3>
</head>
<body>

<?php
$link = mysql_connect("ecsmysql","cs332b21","shatheto");
if (!$link):
	die("Could not connect." .mysql_error());
endif;

echo "Connection Successful.";
echo "<br>";
echo "<br>";

$ssn = $_POST["ssn"];
mysql_select_db("cs332b21", $link);
$result = mysql_query("SELECT Title, Classroom, Meet_days, Start_time, End_time FROM Professor, Section WHERE Section.Prof_ssn=$ssn AND Professor.Ssn=Section.Prof_ssn", $link);

echo "<h4>SSN: " . $ssn . "</h4>";

while($data = mysql_fetch_array($result)) {
	echo "Title: " . $data["Title"] . "<br>";
	echo "Classroom: " . $data["Classroom"] . "<br>";
	echo "Meet days: " . $data["Meet_days"] . "<br>";
	echo "Start time: " . $data["Start_time"] . "<br>";
	echo "End time: " . $data["End_time"] . "<br><br>";
};

mysql_close($link);
?>
</body>
</html>
