<?php

  class Period {
    
    private $Dayfrom;
    private $Dayto;

    public function printEra($from, $to, $era) {
      list($fyear, $fmonth, $fday) = $from;
      list($tyear, $tmonth, $tday) = $to;

      $fdatetime = new DateTime();
      $tdatetime = new DateTime();
      $fdatetime->setDate($fyear, $fmonth, $fday);
      $tdatetime->setDate($tyear, $tmonth, $tday);
      $week = array("日", "月", "火", "水", "木", "金", "土");
      $fw = (int)$fdatetime->format('w');
      $tw = (int)$tdatetime->format('w');

      echo "{$era} = {{$fyear}年{$fmonth}月{$fday}日({$week[$fw]})〜\n";
      echo "        {$tyear}年{$tmonth}月{$tday}日({$week[$tw]})}\n";
    }
  }
  
  $taisho = new Period;
  $taisho->printEra([1912, 07, 30], [1926, 12, 25], "大正");
  $shouwa = new Period;
  $shouwa->printEra([1926, 12, 25], [1989, 1, 18], "昭和");

?>