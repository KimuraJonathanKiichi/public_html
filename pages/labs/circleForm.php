<!-- circleForm.php -->
<center>
  <h2>
    Area of the Circle
  </h2>
  <hr>
  <?php
    $r = $_POST['r'];
    $area = M_PI * $r * $r;
    $area = number_format($area, 2);
    print("Area: $area");
  ?>
</center>
