<?php
  class Scaner {

    private static $stdin;

    public function getNum() {
      echo "実数：";
      $stdin1 = trim(fgets(STDIN));
      self::$stdin = $stdin1;
    }

    public function Caluc() {
      $absNum = abs(self::$stdin);
      echo "絶対値：{$absNum}\n";
      $sqrt = sqrt(self::$stdin);
      echo "平方根：{$sqrt}\n";
      $area = pi() * pow(self::$stdin, 2);
      echo "面　積：{$area}";
    }

  }
  Scaner::getNum();
  Scaner::Caluc();

?>