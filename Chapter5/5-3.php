<?php
  function output() {
    echo "変数xはfloat型で、変数yはdouble型です。\n";
    echo "x：";
    $float = (float)trim(fgets(STDIN));
    echo "y：";
    $double = (double)trim(fgets(STDIN));
    echo "x = {$float}\n";
    echo "y = {$double}";
  }
  output();
?>