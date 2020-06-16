<?php
  class Id {
    private static $counter = 0;

    public function countId($s) {
      $count = self::$counter += 1;
      echo "{$s}の識別番号：{$count}\n";
    }

    public function getCounter($str) {
      $count = self::$counter;
      echo "{$str}.counter = {$count}\n";
    }

  }

  $inst = new Id;
  $inst->countId("a");
  $inst->countId("b");
  $inst->getCounter("Id");
  $inst->getCounter("a");
  $inst->getCounter("b");

?>