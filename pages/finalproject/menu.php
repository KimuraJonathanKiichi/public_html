<?php session_start();
    if(!$_SESSION['password'])
        $_SESSION['password'] = $_POST['password'];
    $password = $_SESSION['password'];
    if($password != "password")
        print "<h2>INVALID PASSWORD</h2>";
    else{
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles.css">
    <title>Menu</title>
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
            <p>
                Welcome to our game review database!
            </p>
            <p>
                <a href="./survey/survey.html">Add a review!</a>
            </p>
            <p>
                <a href="./display.php">Game review table!</a>
            </p>
            <p>
                <a href="./filter/filter.html">Search!</a>
            </p>
        </div>
    </div>
</body>
</html>
<?php
}
?>

