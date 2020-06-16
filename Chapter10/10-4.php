<?php

  class ExId {
    private static $counter;
    public static $addNum = 1;

    public function printNum($s) {
      $number = self::$counter += self::$addNum;
      echo "{$s}の識別番号：{$number}\n";
    }
    public function getCount() {
      $number = self::$counter;
      echo "最後に与えた識別番号 = {$number}\n";
      $number = self::$counter += self::$addNum;
      echo "次回与える識別番号 = {$number}\n";
    }
  }

  ExId::printNum("a");
  ExId::printNum("b");
  ExId::printNum("c");
  ExId::$addNum = 4;
  ExId::printNum("d");
  ExId::printNum("e");
  ExId::printNum("f");
  ExId::getCount();
?>