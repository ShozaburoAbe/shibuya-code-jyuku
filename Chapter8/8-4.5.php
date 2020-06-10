<?php
  class Car {

    private $x = 0;
    private $y = 0;
    private $tank;
    private $fuel;
    private $gasEfficiency;

    private function driveCar() {
      echo "X方向の移動距離：";
      $xMove = trim(fgets(STDIN));
      $this->x += $xMove;
      echo "Y方向の移動距離：";
      $yMove = trim(fgets(STDIN));
      $this->y += $yMove;
      $this->calucGas($xMove, $yMove);
      $this->getCurrentLocFuel();
      $this->moveCar();
    }

    protected function calucGas($xMove, $yMove) {
      $movedDistan = $xMove + $yMove;
      $usedfuel = $movedDistan / $this->gasEfficiency;
      $this->fuel -= $usedfuel;
    }

    private function moveCar() {
      if ($this->fuel <= 0) {
        echo "燃料不足！！";
        getCurrentLocFuel();
      }
      echo "移動しますか[0...No／1...Yes]：";
      $move = trim(fgets(STDIN));
      ($move == 1) && $this->driveCar();
    }

    private function getCurrentLocFuel() {
      echo "現在地：({$this->x}, {$this->y})\n";
      echo "残りの残量：{$this->fuel}\n";
    }

    protected function inputSpec() {
      echo "車のデータを入力せよ。\n";
      echo "名　　　前：";
      $this->name = trim(fgets(STDIN));
      echo "ナンバー　：";
      $this->number = trim(fgets(STDIN));
      echo "車　　　幅：";
      $this->breadth = trim(fgets(STDIN));
      echo "高　　　さ：";
      $this->height = trim(fgets(STDIN));
      echo "長　　　さ：";
      $this->length = trim(fgets(STDIN));
      echo "タンク容量：";
      $this->tank = trim(fgets(STDIN));
      echo "ガソリン量：";
      $this->fuel = trim(fgets(STDIN));
      echo "燃　　　費：";
      $this->gasEfficiency = trim(fgets(STDIN));
    }
    
    public function startCarHandler() {
      $this->inputSpec();
      $this->getCurrentLocFuel();
      $this->moveCar();
    }
  }
  $inst = new Car();
  $inst->startCarHandler();
?>