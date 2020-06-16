<?php

  class Account {
    private $name;
    private $number;
    private $balance;

    public function __construct($name, $number, $balance) {
      $this->name = $name; $this->number = $number; $this->balance; 
    }

    public function getBalance() {
      return $this->balance;
    }

    // function inputInfo() {
    //   echo "口座情報を入力せよ。\n";
    //   echo "名　義：";
    //   $this->name = trim(fgets(STDIN));
    //   echo "番　号：";
    //   $this->number = trim(fgets(STDIN));
    //   echo "残　高：";
    //   $this->balance = trim(fgets(STDIN));
    //   echo "更新年：";
    //   $this->year = trim(fgets(STDIN));
    //   echo "更新月：";
    //   $this->month = trim(fgets(STDIN));
    //   echo "更新日：";
    //   $this->day = trim(fgets(STDIN));
    // }

    // public function showInfo() {
    //   echo "口座基本情報：[{$this->name}, {$this->number}, {$this->balance}]\n";
    //   $datetime = new DateTime();
    //   $datetime->setDate($this->year, $this->month, $this->day);
    //   $week = array("日", "月", "火", "水", "木", "金", "土");
    //   $w = (int)$datetime->format('w');
    //   echo "開設日：{$this->year}年{$this->month}月{$this->day}日({$week[$w]})\n";
    // }

  }
  
  class TimeAccount extends Account {
    private $timeBalance;

    public function __construct($name, $number, $balance, $timeBalance) {
      parent::__construct($name, $number, $balance);
      $this->timeBalance = $timeBalance;
    }

    public function getTimeBalance() {
      return $this->timeBalance;
    }

    public function cancel() {
      deposit($this->timeBalance);
      $timeBalance = 0;
    }
  }

  Class AccountCompare {

    static function compBalance($a, $b) {
      $totalA = $a->getBalance();
      $totalB = $b->getBalance() + $b->getTimeBalance();
      echo "足立くんと中田くんの預金残高の比較結果です。\n";
      if ($totalA > $totalB) {
        echo "足立くんのほうが預金残高が多いです。\n";
      } elseif ($totalB > $totalA) {
        echo "中田くんのほうが預金残高が多いです。\n";
      } else {
        echo "二人の預金残高は同じです。\n";
      }
    }

    public static function People() {
      $adachi = new Account("足立幸一", "123456", 500);
      $nakata = new TimeAccount("中田真二", "654321", 300, 400);
      self::compBalance($adachi, $nakata);
    }

  }
  AccountCompare::People();
?>