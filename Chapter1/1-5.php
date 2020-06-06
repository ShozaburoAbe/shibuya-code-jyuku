<?php
  // print "阿" . "\n" . "部" . "\n" . " " . "\n" . "祥" . "\n" . "三" . "\n" . "郎";

  class Name {
    public function outputname($n) {
      $pieces = preg_split("//u", $n);
      $pieces = array_slice($pieces, 1, -1);
      foreach($pieces as $piece) {
        print $piece."\n";
      }
    }
  }
  $abe = new Name();
  $abe->outputname("阿部　祥三郎");
?>