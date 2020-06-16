<?php
  class Account {
    private $name;
    private $number;
    private static $balance = 0;
    private $year;
    private $month;
    private $day;
    private static $num = 1;

    public static $count;

    public function __construct() {
      $this->selection();
      self::$num += 1;
    }
    
    public function __destruct() {
    }

    public function numofAcc() {
      echo "口座開設数：";
      self::$count = trim(fgets(STDIN));
    }

    protected function selection() {
      echo "[0]…簡易  [1]…詳細：";
      $choice = trim(fgets(STDIN));
      if ($choice == 0) {
        $this->inputBriefInfo();
      } elseif ($choice == 1) {
        $this->inputInfo();
      } else {
        $this->selection();
      }
    }

    private function sayThanks() {
      echo "明解銀行での口座登録ありがとうございます。\n";
    }

    private function inputBriefInfo() {
      echo "口座情報を入力せよ。\n";
      echo "名　義：";
      $this->name = trim(fgets(STDIN));
      echo "番　号：";
      $this->number = trim(fgets(STDIN));
      $this->sayThanks();
      $c = self::$num;
       echo "口座基本情報：[{$this->name}, {$this->number}, {$this->balance}]\n";
      echo "識別番号：{$c}\n";
      date_default_timezone_set("UTC");
      $Y = date("Y");
      $m = date("m");
      $d = date("d");
      $w = date("w");
      $week = array("日", "月", "火", "水", "木", "金", "土");
      echo "開設日：{$Y}年{$m}月{$d}日({$week[$w]})\n";
    }


    function inputInfo() {
      echo "口座情報を入力せよ。\n";
      echo "名　義：";
      $this->name = trim(fgets(STDIN));
      echo "番　号：";
      $this->number = trim(fgets(STDIN));
      echo "残　高：";
      $this->balance = trim(fgets(STDIN));
      echo "開設年：";
      $this->year = trim(fgets(STDIN));
      echo "開設月：";
      $this->month = trim(fgets(STDIN));
      echo "開設日：";
      $this->day = trim(fgets(STDIN));
      $this->sayThanks();
      $this->showInfo();
    }

    public function showInfo() {
      echo "口座基本情報：[{$this->name}, {$this->number}, {$this->balance}]\n";
      $c = self::$num;
      echo "識別番号：{$c}\n";
      $datetime = new DateTime();
      $datetime->setDate($this->year, $this->month, $this->day);
      $week = array("日", "月", "火", "水", "木", "金", "土");
      $w = (int)$datetime->format('w');
      echo "開設日：{$this->year}年{$this->month}月{$this->day}日({$week[$w]})\n";
    }

  }
  Account::numofAcc();
  for ($i = 0; $i < Account::$count; $i++) {
    $inst[$i] = new Account;
  }
?>