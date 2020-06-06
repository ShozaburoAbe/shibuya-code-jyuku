<?php
namespace Showtime {
  
  class showStars {

    function randomFunction() {
      $randNum = rand(1, 10);
      $randStars;
      for ($i = 1; $i <= $randNum; $i++) {
         $randStars .= "*";
      }
      return $randStars;
    }

    function showstar($elem) {
      for ($i = 0; $i <= $elem; $i++) {
        $randStars = showStars::randomFunction();
        echo "{$i}| {$randStars}\n";
      }
    }

    function readElement() {
      echo "要素数：";
      $elem = trim(fgets(STDIN));
      showStars::showstar($elem);
    }
  }

  showStars::readElement();
}


  

?>