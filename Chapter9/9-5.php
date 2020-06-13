<?php

  class Account {
    private $name;
    private $number;
    private $balance;
    private $year;
    private $month;
    private $day;

    function inputInfo() {
      echo "口座情報を入力せよ。\n";
      echo "名　義：";
      $this->name = trim(fgets(STDIN));
      echo "番　号：";
      $this->number = trim(fgets(STDIN));
      echo "残　高：";
      $this->balance = trim(fgets(STDIN));
      echo "更新年：";
      $this->year = trim(fgets(STDIN));
      echo "更新月：";
      $this->month = trim(fgets(STDIN));
      echo "更新日：";
      $this->day = trim(fgets(STDIN));
    }

    public function showInfo() {
      echo "口座基本情報：[{$this->name}, {$this->number}, {$this->balance}]\n";
      $datetime = new DateTime();
      $datetime->setDate($this->year, $this->month, $this->day);
      $week = array("日", "月", "火", "水", "木", "金", "土");
      $w = (int)$datetime->format('w');
      echo "開設日：{$this->year}年{$this->month}月{$this->day}日({$week[$w]})\n";
    }

  }
  $inst = new Account;
  $inst->inputInfo();
  $inst->showInfo();
?>