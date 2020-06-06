<?php
namespace Showtime { //namespace 使ってみたかっただけです。

  // //縦に＊を表示するやつ wrong 
  // class showStars {

  //   function randomFunction() {
  //     $randNum = rand(1, 10);
  //     $randStars;
  //     for ($i = 1; $i <= $randNum; $i++) {
  //        $randStars .= "*";
  //     }
  //     return $randStars;
  //   }

  //   function showstar($elem) {
  //     for ($i = 0; $i <= $elem; $i++) {
  //       $randStars = showStars::randomFunction();
  //       echo "{$i}| {$randStars}\n";
  //     }
  //   }

  //   function readElement() {
  //     echo "要素数：";
  //     $elem = trim(fgets(STDIN));
  //     showStars::showstar($elem);
  //   }
  // }

  // showStars::readElement();

  class showChartStars {
    
    function printStars($n, $a) {
      for ($i = 10; $i >= 1; $i--) {
        for ($j = 0; $j < $n; $j++) {
          if ($a[$j] >= $i) {
            echo "* ";
          } else {
            echo "  ";
          }
        }
        echo "\n";
      }
      for ($i = 0; $i <= $n * 2; $i++) {
        echo "-";
      }
        echo "\n";
      for ($i = 0; $i < $n; $i++) {
        echo $i % 10 . " "; 
      }
    }
    function assignRandNum($n) {
      $a = [];
      for ($i = 0; $i < $n; $i++) {
        $randNum = rand(1, 10);
        array_push($a ,$randNum);
      }
      return $a;
    } 
    function getElemNum() {
      echo "要素数：";
      $n = trim(fgets(STDIN));
      return $n;
    }
    function showRandomStars() {
      $n = showChartStars::getElemNum();
      $a = showChartStars::assignRandNum($n);
      showChartStars::printStars($n, $a);
    }
  }
  showChartStars::showRandomStars();


  function ColumCharts() {
    echo "要素：";
    $n = trim(fgets(STDIN));
    $a = [];
    for ($i = 0; $i <= $n; $i++) {
      $randNum = rand(1, 10);
      $a[$i] = $randNum;
      // echo $a[$i] . "\n";
    }
    for ($i = 10; $i >= 1; $i--) {
      for ($j = 0; $j < $n; $j++) {
        if ($a[$j] >= $i) {
          echo "* ";
        } else {
          echo "  ";
        }
      }
      echo "\n";
    }
    for ($i = 0; $i < 2 * $n; $i++) {
      echo "-";
    }
    echo "\n";
    for ($i = 0; $i < $n; $i++) {
      echo $i % 10 . " ";
    }
  }
  ColumCharts();
    
}

?>