<?php
  interface Player {
    public function play();
    public function stop();
  }

  interface ExPlayer extends Player {
    public function slow();
  }

  class DVDPlayer implements EXPlayer {
    public function play() {
      echo "DVD再生開始！\n";
    }

    public function stop() {
      echo "DVD再生終了！\n";
    }

    public function slow() {
      echo "DVDスロー再生開始！\n";
    }
  }
  $a = new DVDPlayer;
  $b = new DVDPlayer;
  $c = new DVDPlayer;

  echo "DVDPlayer型変数a\n";
  $a->play();
  $a->stop();
  $a->slow();
  echo "Player型変数b\n";
  $b->play();
  $b->stop();
  echo "ExPlayer型変数c\n";
  $c->play();
  $c->stop();
  $c->slow();

?>