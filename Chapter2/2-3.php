<?php

  class Calucnum {
    public function avergnsum($n1, $n2) {
      print "xの値は".$n1."です。" ."\n". "yの値は".$n2."です。"."\n";
      print "合計は". ($n1 + $n2)."です。" ."\n";
      print "平均は".floor(($n1 + $n2) / 2) ."です。";
    }
    // public function __construct($n1, $n2) {
    //   $n1 = $this->$n1;
    //   $n2 = $this->$n2;
    // }
  }
  $i = new Calucnum();
  $i->avergnsum(63.4, 18.5);

?>