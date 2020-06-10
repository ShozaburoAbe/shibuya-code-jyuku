<?php
  class Human {

    public function showId($name, $height, $weight) {
      echo "名前：{$name}\n";
      echo "身長：{$height}cm\n";
      echo "体重：{$weight}kg\n";
    }
  }
  $sato = new Human;
  $sato->showId("佐藤二郎", 170, 60);
  echo "\n";
  $takada = new Human;
  $takada->showId("高田龍一", 166, 72)

?>