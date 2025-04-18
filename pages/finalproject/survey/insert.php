<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../../styles.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <div class="centered">
        <?php   session_start();

            $game = $_SESSION['game'];
            $rating = $_SESSION['rating'];
            $comments = $_SESSION['comments'];

            $host = 'localhost';
            $user = 'jkpicard';
            $passwd = 'cs389';
            $database = 'jkpicard';
            $connect = mysql_connect($host, $user, $passwd);
            $query = "insert into REVIEWS values
                    ('$game', '$rating', '$comments')";
            //print "The query is <i> $query </i>";
            mysql_select_db($database);

            if(mysql_query($query, $connect))
            {
                //print "<P>Insert successful.<P>";
                //use include for showing the table content
                include ("../display.php");
            }
            else
                print "<P>Insert fail.<p>";
            mysql_close($connect);
        ?>
    </div>
</body>
</html>
