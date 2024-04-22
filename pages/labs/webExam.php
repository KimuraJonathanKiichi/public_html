<!-- webExam.php -->
<center>
  <?php
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $score = 0;
    print("Question 1 Answer: $q1<p>Question 2 Answer: $q2<hr>");
    if($q1 == "t"){
      $score++;
      print("Answer right for Q1!<p>");
    } 
    else
      print("Answer wrong for Q1...<p>Answer should be true..<p>");
    if($q2 == "f"){
      $score++;
      print("Answer right for Q2!<p>");
    }
    else
      print("Answer wrong for Q2...<p>Answer should be false..<p>");
    $score = ($score / 2) * 100;
    print("Score: $score%");
  ?>    
</center>
<hr>
<p>
<a href="webExam.html">Back to form </a>
| 
<a href="index.html"> Home</a>
</p>

