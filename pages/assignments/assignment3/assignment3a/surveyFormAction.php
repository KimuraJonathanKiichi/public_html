<FONT color=black size=4>
<center>
<H2>
Survey Result
</h2>
</center>
<HR>
<?php
	$prefer = $_POST["prefer"];	

print "Here is the debug info <P>{";
foreach ($prefer as $i)
	print "$i, ";
print "}<P>Done the debug <HR>";


	$menu = array("A", "B", "C",
		"D", "E");
	if(count($prefer) == 0){
		print "No Selection Made";
		print "<a href = \"surveyForm.html\"> Go Back </a>";
	}
	else{
		$check = false;
		for($i = 0; $i < count($prefer); $i++){
			if($prefer[$i] == 4)
				$check = true;	
		}
		if($check){
			print "None of the above was selected. No other choices will be displayed.";
		}
		else{
			print "<P>Your selections were <UL>";
			foreach ($prefer as $i)
				print "<LI>$menu[$i]";
			print "</UL>";
		}
	}
?>
</FONT>
