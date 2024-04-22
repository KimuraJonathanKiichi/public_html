<?php

	$status = $_POST['status'];
	$course = $_POST['course'];
	$score = $_POST['score'];

	$host = 'localhost';
	$user = 'jkpicard';
	$passwd = 'cs389';
	$database = 'jkpicard';
	$connect = mysql_connect($host, $user, $passwd);
	$query = "insert into EVAL values
			('$status', '$course', '$score')";
	//print "The query is <i> $query </i>";
	mysql_select_db($database);

	if(mysql_query($query, $connect))
	{
		//print "<P>Insert successful.<P>";
		//use include for showing the table content
        	include ("displayEval.php");
	}
	else
		print "<P>Insert fail.<p>";
	mysql_close($connect);
?>