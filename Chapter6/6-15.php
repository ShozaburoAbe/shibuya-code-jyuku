<?php
  class MonthsInEnglish {

    protected function showRules() {
      echo "英語の月名を入力してください。\nなお、先頭は大文字で、２文字目以降は小文字とします。\n";
    }

    private function showQuestionAnswer() {
      $months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
      $randNum = rand(1, 12);
      for ($i = 0; ; $i++) {
        echo "{$randNum}月：";
        $stdin = trim(fgets(STDIN));
        if ($months[$randNum - 1] === $stdin) {
          echo "正解です。";
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
      $answer == 1 && $this->showQuestionAnswer();
    }

    public function getAnswerHandler() {
      $this->showRules();
      $this->showQuestionAnswer();
    }

  }
  $inst = new MonthsInEnglish;
  $inst->getAnswerHandler();

?>