<!--  QuaEqu.php  -->
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../../../styles.css">
        <title>Quadratic Equation</title>
    </head>
	<body>
        <header>
            <div class="together">
                <a href="/~jkpicard//index.html"><img src="/~jkpicard//images/home.png" alt="Home"></a>
                <nav>
                    <ul class="navBar">
                        <li><a href="/~jkpicard//pages/labs/labsList.html">Labs</a></li>
                        <li><a href="/~jkpicard//pages/assignments/assignmentsList.html">Assignments</a></li>
                        <li><a href="/~jkpicard//pages/sql_stuff/DBList.html">Database</a></li>
                    </ul>
                </nav>
            </div>
        </header>
<?php

	$a = $_POST['a'];
	$b = $_POST['b'];
 	$c = $_POST['c'];

	$d = $b*$b - 4*$a*$c; 

	if($d < 0) 

		print "No Real Root (solution)."; 

	else if ($d == 0) { 

		$x = -$b/(2*$a); 

		print "The soluton is: $x<br>"; 

	} 

	else { 

		$x1 = (-$b + sqrt($d))/(2.0 * $a); 

		$x2 = (-$b - sqrt($d))/(2.0 * $a); 

		print "The soluton1 is: $x1<br>"; 

		print "The soluton2 is: $x2<br>"; 

	} 
?>
	</body>
</html>