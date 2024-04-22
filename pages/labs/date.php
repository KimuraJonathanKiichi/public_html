<!--

File: date.php
P.41

-->

<FONT color=blue size=2>

<?php

// P.41.   NOTE: time zone setting is NEEDED!!!

	date_default_timezone_set("America/New_York");

	$today = date("H:i:s l, F d Y");
	print "Current time and date:  $today";

?>
<P>
<HR>
<P>
<A HREF="http://php.net/manual/en/timezones.america.php">List of Supported 
Timezones </A>
</FONT>
