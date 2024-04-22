<?php

    $course = $_POST['course'];
    $gender = $_POST['gender'];
	$status = $_POST['status'];
    $lecturePrep = $_POST['lecturePrep'];
    $studentPar = $_POST['studentPar'];
	$score = $_POST['overallSat'];

	$host = 'localhost';
	$user = 'jkpicard';
	$passwd = 'cs389';
	$database = 'jkpicard';
	$connect = mysql_connect($host, $user, $passwd);
	$query = "insert into EVALUATION values
			('$gender', '$status', '$course', '$lecturePrep', '$studentPar', '$score')";
	mysql_select_db($database);

	if(mysql_query($query, $connect))
	{
        	include ("display.php");
	}
	else
		print "<P>Insert fail.<p>";
	mysql_close($connect);
?>