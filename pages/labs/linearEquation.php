<!-- linearEquation.php -->
<center>
  <h2>
    Solution for ax + b = 0;
  </h2>
  <hr>
  <p>
  <?php
    $a = $_POST['a'];
    $b = $_POST['b'];
    $root = ($b * -1)/$a;
    print("a: $a<p> b: $b<p>root: $root<p>");
  ?>
  </p>
</center>
