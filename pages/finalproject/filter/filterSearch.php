<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="../../../styles.css">
        <meta charset="UTF-8">
		<title>
			Evaluation Table
		</title>
	</head>
	<body>
        <header>
            <div class="together">
                <a href="/~jkpicard/index.html"><img src="/~jkpicard/images/home.png" alt="Home"></a>
                <nav>
                    <ul class="navBar">
                        <li><a href="/~jkpicard/pages/labs/labsList.html">Labs</a></li>
                        <li><a href="/~jkpicard/pages/assignments/assignmentsList.html">Assignments</a></li>
                        <li><a href="/~jkpicard/pages/sql_stuff/DBList.html">Database</a></li>
                        <li><a href="/~jkpicard/testing/testJavaScript.html">JS test</a></li>
                        <li><a href="/~jkpicard/pages/finalproject/projectindex.html">Final Project CS389</a></li>
                    </ul>
                </nav>
            </div>
        </header>
		<div class="centered">
            <div id="wrapper">
                <h2>Display Table</h2>
                <hr>
                <?php
                    $game = $_POST['game'];
                    $rating = $_POST['rating'];

                    //print "game: $game rating: $rating";
                    $host = 'localhost';
                    $user = 'jkpicard';
                    $passwd = 'cs389';
                    $database = 'jkpicard';
                    $connect = mysql_connect($host, $user, $passwd);
                    if($game && $rating)
                        $query = "SELECT * FROM REVIEWS WHERE GAME = '$game' AND RATING = '$rating'";
                    elseif($game)
                        $query = "SELECT * FROM REVIEWS WHERE GAME = '$game'";
                    elseif($rating)
                        $query = "SELECT * FROM REVIEWS WHERE RATING = '$rating'";
                    else
                        $query = "EXIT";
                    //print "The query is <i> $query </i> ";
                    mysql_select_db($database);
                    $result_id = mysql_query($query, $connect);
                    if($result_id)
                    {	
                        print '<table border=1>';
                        print '<TH> Game <TH> Rating <TH> Comments';
                        while($row = mysql_fetch_row($result_id))
                        {	
                            print '<TR>';
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
                <a href="../menu.php">Back to home!</a>
            </div>
		</div>
	</body>
</html>
