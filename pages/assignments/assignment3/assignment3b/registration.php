<html>
<center>

<?php
     	session_start();

        $name = $_SESSION['name'];
        $gender = $_SESSION['gender'];
        $year = $_SESSION['year'];
        $csCourses = $_POST["csCourses"];
        $csCoursesArr = array("CS112", "CS212", "CS310", "CS311", "CS380", "CS389", "CS440");
        $mathCourses = $_POST["mathCourses"];
        $mathCoursesArr = array("Math135", "Math136", "Math171", "Math172", "Math271");
        print "Name: $name <p>Gender: $gender<p>Year: $year<p><hr>CS Courses: ";
        foreach ($csCourses as $i)
                print "<li>$csCoursesArr[$i]";
        print "</UL><HR>Math Courses: ";
        foreach ($mathCourses as $i)
                print "<li>$mathCoursesArr[$i]";
        print "</UL>";
?>
