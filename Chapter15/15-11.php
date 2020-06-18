<?php
  class RockScissorsPaper {

    private function choice($num) {
      switch ($num) {
        case 0: return "グー";
        case 1: return "チョキ";
        case 2: return "パー";
      }
    }

    public function winner($num1, $num2, $choice) {
      $r1 = ($choice - $num1 + 3) % 3;
      $r2 = ($choice - $num2 + 3) % 3;

      if ($r1 == 2 && $r2 == 2) {
        echo "あなたの勝ちです。\n";
      } elseif ($r1 == 1 && $r2 == 0) {
        echo "コンピューター１の勝ちです。\n";
      } elseif ($r1 == 0 && $r2 == 1) {
        echo "コンピューター２の勝ちです。\n";
      } elseif ($r1 == 0 && $r2 == 2) {
        echo "あなたとコンピューター１の勝ちです。\n";
      } elseif ($r1 == 2 && $r2 == 0) {
        echo "あなたとコンピューター２の勝ちです。\n";
      } elseif ($r1 == 1 && $r2 == 1) {
        echo "コンピューター１とコンピューター２の勝ちです。\n";
      } else {
        echo "引き分けです。\n";
      }
      echo "もう一度？ (0)いいえ(1)はい：";
      $again = (int)trim(fgets(STDIN));
      $again === 1 && $this->startPlaying();
    }
    
    protected function fight($choice) {
      $num1 = rand(0, 2);
      $com1 = $this->choice($num1);
      $num2 = rand(0, 2);
      $com2 = $this->choice($num2);
      $myChoice = $this->choice($choice);
      echo "コンピューター１は{$com1}で、コンピューター２は{$com2}で、あなたは{$myChoice}です。\n";
      $this->winner($num1, $num2, $choice);
    }


    public function startPlaying() {
      echo "じゃんけんぽん！！ 0...グー／1...チョキ／2...パー：";
      $choice = trim(fgets(STDIN));
      $this->fight($choice);
    }
  }

  $inst = new RockScissorsPaper;
  $inst->startPlaying();

?>