<html>
<h1>Query 4</h1>
<body>
<?php

$link = mysql_connect('ecsmysql','cs332b21','shatheto');
if (!$link) {
	die('Could not connect.' . mysql_error());
}
echo "Connection successful.<br>";

mysql_select_db('cs332b21',$link);

$cwid = $_POST["CWID"];

echo "<h4>CWID: " . $cwid . "</h4>";

$result = mysql_query("SELECT Title, Grade FROM Course, Enrolls WHERE Enrolls.Student_cwid=$cwid AND Enrolls.C_num=Course.Course_num",$link);

while($data = mysql_fetch_array($result)) {
	echo "Course: " . $data["Title"] . "<br>";
	echo "Grade: " . $data["Grade"] . "<br>";
}
?>
</body>
</html>
