<!--     
	P.61 display.php

-->

<center>
<H2>Display Table</H2>
<HR>
<?php
	$host = 'localhost';
	$user = 'jkpicard';
	$passwd = 'cs389';
	$database = 'jkpicard';
	$connect = mysql_connect($host, $user, $passwd);
	$query = "select * from STUDENT";
//	print "The query is <i> $query </i> ";
	mysql_select_db($database);
	$result_id = mysql_query($query, $connect);
	if($result_id)
	{	
		print '<table border=1>';
		print '<TH> ID <TH> FIRSTNAME <TH> LASTNAME 
			<TH> GENDER';
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
</center>
