<?php
  class StringConstructor {

    private $a = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J"];

    function getStr() { return "ABC"; }

    function EmpStr() { return "";}
    
    function showArr() {
      foreach($this->a as $s) {
        echo $s;
      }
      // return $this->a;
    }

    function getNums() {
      array_splice($this->a, 5, 3);
      foreach($this->a as $s) {
        echo $s;
      }
    }

    function getLast() { return "XYZ"; }

  }
  echo "文字列：";
  $s6 = (string)trim(fgets(STDIN));
  $inst = new StringConstructor;
  echo "s1 = " . $inst->getStr() . PHP_EOL;
  echo "s2 = " . $inst->EmpStr() . PHP_EOL;
  echo "s3 = " ; $inst->showArr() . PHP_EOL;
  echo "\ns4 = "; $inst->getNums() . PHP_EOL;
  echo "\ns5 = " . $inst->getLast() . PHP_EOL;
  echo "s6 = " . $s6;


  
?>