<!--  hello.php  -->

<center>
<Font color=blue>
<?php

	$firstName = $_POST['first'];
	$lastName = $_POST['last'];

// debugging
	print "first name = $firstName.<BR>";
	print "last name = $lastName. <BR>";
?>

<h2>
Name Passed to here.
</h2>
<HR>
<?php

	$name = $firstName . " " . $lastName;
	print "Hello $name";
?>
</Font>
</Center>

