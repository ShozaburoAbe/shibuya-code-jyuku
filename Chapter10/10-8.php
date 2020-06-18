<?php

  class Day {

    private static $year;
    private static $month;
    private static $day;
    private $lastdays = [31,28,31,30,31,30,31,31,30,31,30,31];

    public function inputDay() {
      echo "日付を入力せよ。\n";
      echo "年：";
      $this->year = trim(fgets(STDIN));
      echo "月：";
      $this->month = trim(fgets(STDIN));
      echo "日：";
      $this->day = trim(fgets(STDIN));
    }

    protected function checkLeapYear() {
      if ($this->year % 4 == 0) {
        echo "閏年です。\n";
      } else {
        echo "閏年ではありません。\n";
      }
    }

    protected function createDatetime() {
      $this->datetime = new DateTime();
      $this->datetime->setDate($this->year, $this->month, $this->day);
      $this->week = array("日", "月", "火", "水", "木", "金", "土");
      $this->w = $this->datetime->format("w");
    }

    private function number1() {
      $this->createDatetime();
      echo "{$this->year}年{$this->month}月{$this->day}日({$this->week[$this->w]})に関する情報\n";
      $this->checkLeapYear();
      $z = $this->datetime->format("z");
      echo "年内経過日数：{$z}\n";
      $daysinY = ($this->year % 4 == 0) ? 366 : 365;
      $restD = $daysinY - $z;
      echo "年内残り日数：{$restD}\n";
      $this->showMenu();
    }

    private function number2() {
      $this->createDatetime();
      echo "[1]年月日を変更 [2]年を変更\n";
      echo "[3]月を変更　　 [4]日を変更\n";
      echo "[5]１日進める　 [6]１日戻す\n";
      echo "[7]n日進める　　[8]n日戻す：";
      $num = trim(fgets(STDIN));
      switch ($num) {
        case 1:
          $this->inputDay();
        break;
        case 2:
          echo "何年：";
          $this->year = trim(fgets(STDIN));
        break;
        case 3:
          echo "何月：";
          $this->month = trim(fgets(STDIN));
        break;
        case 4:
          echo "何日：";
          $this->day = trim(fgets(STDIN));
        break;
        case 5:
          $this->day += 1;
        break;
        case 6:
          $this->day -= 1;
        break;
        case 7:
          echo "何日：";  
          $d = trim(fgets(STDIN));
          $this->day += $d;
          while ($this->day > $endD) {
            $endD = $this->lastdays[$this->month -1];
            if ($this->day > $endD) {
              $this->month += 1;
              $this->day = $this->day - $endD;
            }
          } 
          $this->datetime->add(new DateInterval("P{$d}D"));
        break;
        case 8:
          echo "何日：";
          $d = trim(fgets(STDIN));
          $this->day -= $d;
          while ($this->day > $endD) {
            $endD = $this->lastdays[$this->month -1];
            if ($this->day > $endD) {
              $this->month += 1;
              $this->day = $this->day - $endD;
            }
          } 
          $this->datetime->add(new DateInterval("P{$d}D"));
        break;
        default:
        $this->number2();
      }
      $this->createDatetime();
      echo "{$this->year}年{$this->month}月{$this->day}日({$this->week[$this->w]})に更新されました。\n";
      $this->showMenu();
    }

    private function number3() {
      $this->createDatetime();
      echo "比較対象の日付を入力せよ。\n";
      echo "年：";
      $cYear = trim(fgets(STDIN));
      echo "月：";
      $cMonth = trim(fgets(STDIN));
      echo "日：";
      $cDay = trim(fgets(STDIN));

      $cDate = new DateTime();
      $cDate->setDate($cYear, $cMonth, $cDay);
      $cw = $cDate->format("w");   
      if ($cDate > $this->datetime) {  
        echo "{$cYear}年{$cMonth}月{$cDay}日({$this->week[$cw]})のほうが後。\n";
      } else {
        echo "{$this->year}年{$this->month}月{$this->day}日({$this->week[$this->w]})のほうが後。\n";
      }
      $this->showMenu();
    }

    private function number4() {
      $this->createDatetime();
      echo "[1]翌日[2]前日[3]n日後[4]n日前：";
      $num = trim(fgets(STDIN));
      switch ($num) {
        case 1:
          $this->day += 1;
        break;
        case 2:
          $this->day -= 1;
        break;
        case 3:
          echo "何日：";  // case3, case4 も上と同様に大きな数を足して31以上を超えると意味の分からない日付になってしまいます。
          $d = trim(fgets(STDIN));
          $this->day += $d;
        break;
        case 4:
          echo "何日：";
          $d = trim(fgets(STDIN));
          $this->day -= $d;
        break;
        default:
          $this->number4();
      }
      $this->createDatetime();
      echo "それは{$this->year}年{$this->month}月{$this->day}日({$this->week[$this->w]})です。\n";
      $this->showMenu();
    }

    protected function showMenu() {
      echo "[1]日付に関する情報を表示　[2]日付を変更\n";
      echo "[3]他の日付との比較\n";
      echo "[4]前後の日付を求める　　　[5]終了：";
      $number = trim(fgets(STDIN));
      switch ($number) {
        case 1:
          $this->number1();
          break;
        case 2:
          $this->number2();
          break;
        case 3:
          $this->number3();
          break;
        case 4:
          $this->number4();
          break;
        case 5:
          break;
        default:
          $this->showMenu();
      }
    }

    public function showDayHandler() {
      $this->inputDay();
      $this->showMenu();
    }

  }

  $inst = new Day;
  $inst->showDayHandler();
?>