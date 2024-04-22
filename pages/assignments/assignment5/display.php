<!--     
	P.61 display.php

-->

<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="../../styles.css">
        <meta charset="UTF-8">
		<title>
			Evaluation Table
		</title>
	</head>
	<body>
		<div class="centered">
			<h2>Display Table</h2>
			<hr>
<?php
	$host = 'localhost';
	$user = 'jkpicard';
	$passwd = 'cs389';
	$database = 'jkpicard';
	$connect = mysql_connect($host, $user, $passwd);
	$query = "select * from EVALUATION";
    print "The query is <i> $query </i> ";
	mysql_select_db($database);
	$result_id = mysql_query($query, $connect);
	if($result_id)
	{	
		print '<table border=1>';
		print '<TH> Gender <TH> Year <TH> Course <TH> Prep <TH> Participation <TH> Overall';
		while($row = mysql_fetch_row($result_id))
		{	print '<TR>';
			foreach ($row as $field)
				print "<TD> $field </TD> ";
			print '</TR>';
		}
		print '</table>';
	}
	else
		print "Fail.<p>";

	mysql_close($connect);
?>
		</div>
	</body>
</html>
