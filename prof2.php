<html>
<h1>Query 2</h2>
<body>
<?php

$link = mysql_connect('ecsmysql','cs332b21','shatheto');

if (!$link):
	die('Could not connect.' . mysql_error());
endif;

echo 'Connection successful.', '<br>';
mysql_select_db("cs332b21",$link);
$course_num = $_POST["course_num"];
$sec_num = $_POST["sec_num"]; 

echo "<h4>Course number: " . $course_num . " Section number: " . $sec_num . "</h4>";

$result = mysql_query("SELECT Grade,COUNT(Grade) AS Z FROM Enrolls WHERE Enrolls.Sec_num=$sec_num GROUP BY Grade", $link);

while($data = mysql_fetch_array($result)) {
	echo "Grade: " . $data["Grade"] . " | Count: " . $data["Z"] . "<br>";
}

mysql_close($link);
?>
</body
</html>
