<html>
<center>

<?php session_start();

        $name = $_POST['name'];
        $last_name = $_POST['gender'];
        $course_name = $_POST['year'];

        $_SESSION['name'] = $name;
        $_SESSION['gender'] = $last_name;
        $_SESSION['year'] = $course_name;
        print "Courses: ";
?>
<HR>

<form action="registration.php" method="post">

        CS courses:
        <P>
	<input type="checkbox" name="csCourses[]" value=0> CS112
        <br>
	<input type="checkbox" name="csCourses[]" value=1> CS212
        <br>
	<input type="checkbox" name="csCourses[]" value=2> CS310
        <br>
	<input type="checkbox" name="csCourses[]" value=3> CS311
        <br>
	<input type="checkbox" name="csCourses[]" value=4> CS380
        <br>
	<input type="checkbox" name="csCourses[]" value=5> CS389
        <br>
	<input type="checkbox" name="csCourses[]" value=6> CS440
        <br>

	<hr>
	Math courses:
        <P>
	<input type="checkbox" name="mathCourses[]" value=0> Math135
        <br>
	<input type="checkbox" name="mathCourses[]" value=1> Math136
        <br>
	<input type="checkbox" name="mathCourses[]" value=2> Math171
        <br>
	<input type="checkbox" name="mathCourses[]" value=3> Math172
        <br>
	<input type="checkbox" name="mathCourses[]" value=4> Math271
        <br>
	<p>
	<input type="submit" value="Submit">
</form>
</center>
</html>


