<?php session_start();
    $_SESSION['game'] = $_POST['game'];
    $_SESSION['rating'] = $_POST['rating'];
    $_SESSION['comments'] = $_POST['comments'];
    $game = $_SESSION['game'];
    $rating = $_SESSION['rating'];
    $comments = $_SESSION['comments'];
    //print "debug: game = $game rating = $rating comments = $comments";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
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
        
            <?php
                print "
                    <p>Your game was: $game</p>
                    <p>Your rating was: $rating</p>
                    <p>Your comments were: $comments</p>
                ";
            ?>
            <a href="./insert.php"><button>Submit</button></a>
            <a href="./survey.html"><button>Back</button></a>
        </div>
    </div>
</body>