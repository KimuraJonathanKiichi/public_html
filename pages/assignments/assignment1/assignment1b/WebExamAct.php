<!--  WebExamAct.php  -->

<font color="true">
<center>
<?php
     	$a1 = $_POST['q1']; // 1, 2, 3, 4
        $a2 = $_POST['q2']; // 1, 2, 3, 4
        $a3 = $_POST['q3']; // 1, 2, 3, 4
        $a4 = $_POST['q4']; // 1, 2, 3, 4

        $score = 0;

// DEBUG
print ("Q1 answer: $a1. <P>");
print ("Q2 answer: $a2. <P>");
print ("Q3 answer: $a3. <P>");
print ("Q4 answer: $a4. <P> <HR>");

        if($a1 == "1"){
                $score += 1;
                print "Answer right for Q1!<P>";
        } else {
            	print "Wrong answer for Q1! The answer should be 'Tokyo'<P>";
        }

        if($a2 == "2"){
                $score += 1;
                print "Answer is right for Q2!<P>";
        } else {
             	print "Answer Wrong for Q2. There are 4 bytes in the EAX register<P>";
        }

        if($a3 == "3") {
                $score += 1;
                print "Answer right for Q3! <P>";
        } else {
            	print "Wrong. The right answer is 3...";
        }

        if($a4 == "4") {
                $score += 1;
                print "Answer right for Q4! <P>";
        } else {
            	print "Wrong. The answer is 4...";
        }

        $score = $score / 4;
	$score = $score * 100;
        print "<P>Total score: $score%";

?>
</center>
</font>

<!-- add a link for going back the form -->
<HR>
<A HREF="WebExam.html"> Back to Form </A> |
<A HREF="index.html"> Course Home </A>
</HR>

