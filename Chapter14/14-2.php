<?php
  interface Skinnable {
    const BLACK = 0;
    const RED = 1;
    const GREEN = 2;
    const BLUE = 3;
    const LEOPARD = 4;
    public function changeSkin($skin);
  }

  class SkinnableSoftware implements Skinnable {
    private $skin;

    public function __construct() {
      $this->skin = "BLACK";
    }

    public function changeSkin($skin) {
      $this->skin = $skin;
    }

    public function getSkinString() {
      switch ($this->skin) {
        case "BLACK": return "BLACK";
        case "RED": return "RED";
        case "GREEN": return "GREEN";
        case "BLUE": return "BLUE";
        case "LEOPARD": return "LEOPARD";
      }
    }
  }

  $x = new SkinnableSoftware;
  $y = new SkinnableSoftware;
  $x->changeSkin("LEOPARD");
  $y->changeSkin("GREEN");
  
  echo "xのスキンは" . $x->getSkinString() . "です。\n";
  echo "yのスキンは" . $y->getSkinString() . "です。\n";

?>