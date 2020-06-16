<?php
  interface Wearable {

    public function putOn();
    public function putOff();
  }

  class Headphone implements Wearable {
    public function putOn() {
      echo "ヘッドホンを付けました。\n";
    }
    public function putOff() {
      echo "ヘッドホンを外しました。\n";
    }
    public function setVolume($volume) {
      $this->volume = $volume;
    }
  }

  class WearableComputer implements Wearable {
    public function putOn() {
      echo "コンピューターを起動しました。\n";
    }
    public function putOff() {
      echo "コンピューターをシャットダウンしました。\n";
    }
    public function reset() {
      echo "コンピューターを再起動しました。\n";
    }
  }

  $headphone = new Headphone;
  $computer = new WearableComputer;
  $headphone->putOn();
  $computer->putOn();
  $headphone->putOff();
  $computer->putOff();
?>