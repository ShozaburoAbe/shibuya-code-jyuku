<?php
  // class Coordinate {
  //   private $x;
  //   private $y;

  //   public function getX() {
  //     echo "x座標：";
  //     $x = trim(fgets(STDIN));
  //     return $x;
  //   }
    
  //   public function getY() {
  //     echo "y座標：";
  //     $y = trim(fgets(STDIN));
  //     return $y;
  //   }

  //   protected function showP($x, $y) {
  //     echo "p = ({$x}, {$y})\n";
  //     $p = [9.9, 9.9];
  //     echo "p = ({$p[0]}, {$p[1]})\n";
  //     $q = $p;
  //     echo "q = ({$q[0]}, {$q[1]})";
  //   } 
    
  //   public function getPHandler() {
  //     echo "座標pを入力せよ。\n";
  //     $x = $this->getX();
  //     $y = $this->getY();
  //     $this->showP($x, $y);
  //   }
  // }

  // $inst = new Coordinate;
  // $inst->getPHandler();

  // class Coordinate {
  //   private $p;
  //   private $q;

  //   public function getX() {
  //     echo "x座標：";
  //     $x = trim(fgets(STDIN));
  //     return $x;
  //   }
    
  //   public function getY() {
  //     echo "y座標：";
  //     $y = trim(fgets(STDIN));
  //     return $y;
  //   }
    
  //   public function getPHandler() {
  //     echo "座標pを入力せよ。\n";
  //     $x = $this->getX();
  //     $y = $this->getY();
  //     $this->p = [$x, $y];
  //   }

  //   public function getQHandler() {
  //     echo "座標qを入力せよ。\n";
  //     $x = $this->getX();
  //     $y = $this->getY();
  //     $this->q = [$x, $y];
  //   }

  //   public function compare() {
  //     echo "p != qです。\n";
  //     if ($this->p === $this->q) {
  //       echo "pとqは等しいです。";
  //     } else {
  //       echo "pとqは等しくありません。";
  //     }
  //   }
  // }

  // $inst = new Coordinate;
  // $inst->getPHandler();
  // $inst->getQHandler();
  // $inst->compare();


  class CoordinateTester3 {

    public function getCoordinate() {
      echo "座標は何個：";
      $n = trim(fgets(STDIN));
      for ($i = 0; $i < $n; $i++) {
        echo "a[$i] = (5.5, 7.7)\n";
      }
    }
  }

  $inst = new CoordinateTester3;
  $inst->getCoordinate();
  
  
  
  
?>