<?php   session_start();
    $pw = $_POST['pw'];
    $_SESSION['psw'] = $pw;
    if($pw != "N4c2g2Bs5L!"){
        print "Wrong Password..<P>";
        print "<a href = '../../index.html'> Try Again.. </a>";
    }
	else{
?>
<html lang="en">
    <link rel="stylesheet" href="../../styles.css">
    <div class="centered">
        <h2>
            ACCESS GRANTED
        </h2>
        <a href="./src_text/login.text"></a>
    </div>
</html>
<?php
	}
?>
