<?php
  class Id {
    private static $counter;

    public function printNum($s) {
      $number = self::$counter += 1;
      echo "{$s}の識別番号：{$number}\n";
    }
    public function getCount() {
      $number = self::$counter;
      echo "最後に与えた識別番号：{$number}\n";
    }
  }

  $a = new Id();
  $a->printNum("a");
  $b = new Id();
  $b->printNum("b");
  $b->getCount();
  $b->getCount();
  $b->getCount();
?>