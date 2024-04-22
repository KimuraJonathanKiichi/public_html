<?php
	/* 	insert.php
		p.62
	*/

	$ID = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$gender = $_POST['gender'];

	$host = 'localhost';
	$user = 'jkpicard';
	$passwd = 'cs389';
	$database = 'jkpicard';
	$connect = mysql_connect($host, $user, $passwd);
	$query = "insert into STUDENT values 
			($ID, '$fname', '$lname', '$gender')";
//	print "The query is <i> $query </i> ";
	mysql_select_db($database);

	if(mysql_query($query, $connect))
	{
//		print "<P>Insert successful.<P>";
		// use include for showing the table content
        	include ("display.php");
	}
	else
		print "<P>Insert fail.<p>";
	mysql_close($connect);
?>
<HR>
<P>

<center> <A HREF=index.html> HOME </A> | <A HREF=insertForm.html> FORM </A>
</center>
