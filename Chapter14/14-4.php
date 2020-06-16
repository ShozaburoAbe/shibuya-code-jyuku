<?php

  interface Skinnable {
    const BLACK = 0;
    const RED = 1;
    const GREEN = 2;
    const BLUE = 3;
    const LEOPARD = 4;
    public function changeSkin($skin);
  }

  class Pet {
    private $name;
    private $mastername;

    public function __construct($name, $mastername) {
      $this->name = $name; $this->mastername = $mastername;
    }

    public function getName() {return $this->name; }

    public function getMasterName() {return $this->mastername; }

    public function introduce() {
      echo "僕の名前は{$this->name}です！\n";
      echo "ご主人の名前は{$this->mastername}です！\n\n";
    }
  }

  class RobotPet extends Pet {

    public function __construct($name, $mastername) {
      // parent::__construct($name, $mastername);
      $this->name = $name; $this->mastername = $mastername;
    }

    public function introduce() {
      echo "私はロボット。名前は{$this->name}。\n";
      echo "ご主人は{$this->mastername}。\n\n";
    }

    public function work($sw) {
      switch ($sw) {
        case 0: echo "掃除します。\n";
        case 1: echo "洗濯します。\n";
        case 2: echo "炊事します。\n";
      }
    }
  } 

  class SkinnableRobotPet extends RobotPet implements Skinnable {
    private $skin;

    public function __construct($name, $mastername) {
      parent::__construct($name, $mastername);
      $this->skin = "BLACK";
    }

    public function changeSkin($skin) {
      $this->skin = $skin;
    }

    public function getSkinString() {
      switch ($this->skin) {
        case "BLACK": return "黒";
        case "RED": return "赤";
        case "GREEN": return "緑";
        case "BLUE": return "青";
        case "LEOPARD": return "豹柄";
      }
    }
  }
  
  $pet = new Pet("Kurt", "アイ");
  $roboPet = new RobotPet("R2D2", "ルーク");
  $skroboPet = new SkinnableRobotPet("OSX5", "Apple");
  $pet2 = new Pet("マイケル", "英男");
  $skroboPet->changeSkin("LEOPARD");
  $pet->introduce();
  $roboPet->introduce();
  $skroboPet->introduce();
  echo "スキンは" . $skroboPet->getSkinString() . "です。\n";
  $pet2->introduce();

?>