<?php
  class MathTraining {

    public function mathRandom() {
      echo "暗算力トレーニング!!\n";
      $x = rand(100, 999);
      $y = rand(100, 999);
      $z = rand(100, 999);
      $formula = rand(1, 4);
      do {
        switch ($formula) {
          case 1:
            $answer = $x + $y + $z;
            echo "{$x} + {$y} + {$z} = ";
          break;
          case 2:
            $answer = $x + $y - $z;
            echo "{$x} + {$y} - {$z} = ";
          break;
          case 3:
            $answer = $x - $y + $z;
            echo "{$x} - {$y} + {$z} = ";
          break;
          case 4:
            $answer = $x - $y - $z;
            echo "{$x} - {$y} - {$z} = ";
          break;
        }
        $stdin = trim(fgets(STDIN));
        if ($stdin != $answer) echo "違いますよ！\n";
      } while ($stdin != $answer);
      echo "もう一度？<Yes...1／No...2>：";
      $again = trim(fgets(STDIN));
      $again == 1 && $this->mathRandom();
    }
  }
  $inst = new MathTraining;
  $inst->mathRandom();
?>