<?php

  interface Wearable {
    public function putOn();
    public function putOff();
  }

  interface Skinnable {
    const BLACK = 0;
    const RED = 1;
    const GREEN = 2;
    const BLUE = 3;
    const LEOPARD = 4;
    public function changeSkin($skin);
  }

  class HeadMountedDisplay implements Wearable, Skinnable {

    private $skin = "BLACK";

    public function putOn() {
      echo "ディスプレイを付けました。\n";
    }

    public function putOff() {
      echo "ディスプレイを外しました。\n";
    }

    public function changeSkin($skin) {
      $this->skin = $skin;
    }

    public function putSkin() {
      switch ($this->skin) {
        case "BLACK": echo "BLACK DISPLAY\n"; break;
        case "RED": echo "RED DISPLAY\n"; break;
        case "GREEN": echo "GREEN DISPLAY\n"; break;
        case "BLUE": echo "BLUE DISPLAY\n"; break;
        case "LEOPARD": echo "LEOPARD DISPLAY\n"; break;
      }
    }
  }
  $leo = new HeadMountedDisplay;
  $leo->putOn();
  $leo->putOff();
  $leo->changeSkin("LEOPARD");
  $leo->putSkin();
  $black = new HeadMountedDisplay;
  $black->putOn();
  $black->putOff();
  $black->putSkin();
?>