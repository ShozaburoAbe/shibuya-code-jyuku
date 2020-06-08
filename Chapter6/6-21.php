<?php
  class getPoints {

    private function calcPoints($clasNum, $stuNum, $point) {
      echo "  組  |     合計    平均\n";
      echo "------+--------------------\n";
      for ($i = 1; $i <= $clasNum; $i++) {
        $totalP = array_sum($point[$i]);
        $averP = ($totalP / $stuNum[$i]); 
        echo " {$i}組  |     {$totalP}     {$averP}\n";
        $allTotalP[$i] = $totalP;
        $allStuNum[$i] = $stuNum[$i];
      }
      $overallP = array_sum($allTotalP);
      $overallStuNum = array_sum($allStuNum);
      $r = $overallP / $overallStuNum;
      echo "------+--------------------\n";
      echo "  計  |     {$overallP}     {$r}";
    }

    public function getPointsHandler() {
      echo "クラス数：";
      $clasNum = trim(fgets(STDIN));
      for ($i = 1; $i <= $clasNum; $i++) {
        echo "{$i}組の人数：";
        $stuNum[$i] = trim(fgets(STDIN));
        for ($j = 1; $j <= $stuNum[$i]; $j++) {
          echo "{$i}組{$j}番の点数：";
          $point[$i][$j] = trim(fgets(STDIN));
        }
        echo "\n";
      }
      $this->calcPoints($clasNum, $stuNum, $point);
    }

    
  }

  $int = new getPoints;
  $int->getPointsHandler();
?>