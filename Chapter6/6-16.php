<?php
  class WeekinEnglish {

    protected function showRule() {
      echo "英語の曜日名を小文字で入力してください。\n";
    }

    private function quetion() {
      $days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
      $daysJap = ["月", "火", "水", "木", "金", "土", "日"];
      $randNum = rand(0, 6);

      for ($i = 0; ; $i++) {
        echo "{$daysJap[$randNum]}："; 
        $stdin = trim(fgets(STDIN));
        if ($stdin == $days[$randNum]) {
          echo "正解です。";
          array_splice($days, $randNum, $randNum + 1);
          array_splice($daysJap, $randNum, $randNum + 1);
        break;
        } else {
          echo "違います。\n";
        }
      }

      $this->again();
    }

    private function again() {
      echo "もう1度？ 1...Yes／2...No：";
      $answer = trim(fgets(STDIN));
      $answer == 1 && $this->quetion();
    }

    public function getWeekHandler() {
      $this->showRule();
      $this->quetion();
    }
  }
  $int = new WeekinEnglish;
  $int->getWeekHandler();
?>