<html>
<h1>Query 3</h1>
<body>
<?php

$link = mysql_connect('ecsmysql','cs332b21','shatheto');
if (!$link){
	die('Could not connect'. mysql_error());
}

echo "Connection successful.<br>";

$course_no = $_POST["course_num"];
mysql_select_db("cs332b21",$link);

echo "<h4>Course Number: " . $course_no . "</h4>";

$result = mysql_query("SELECT *, COUNT(Enrolls.Sec_num) AS Z FROM Section LEFT JOIN Enrolls on Section.Course_no=Enrolls.C_num AND Section.Section_num IN (SELECT Sec_num FROM Enrolls) WHERE Section.Course_no=$course_no GROUP BY 1",$link);

while($data = mysql_fetch_array($result)) {
	echo "Section: " . $data["Section_num"] . "<br>";
	echo "Classroom: " . $data["Classroom"] . "<br>";
	echo "Meet days: " . $data["Meet_days"] . "<br>";
	echo "Start time: " . $data["Start_time"] . "<br>";
	echo "End time: " . $data["End_time"] . "<br>";
	echo "Number of enrolled students: " . $data["Z"] . "<br><br>"; 
}


?>
</body>
</html>
