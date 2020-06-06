<?php
  // function addandsubtractnum($n1, $n2) {
  //   print $n1 + $n2."\n";
  //   print $n1 - $n2."\n";
  // }
  // addandsubtractnum(82, 17);

  function addsubnum($n3, $n4) {
    $addnum = $n3 + $n4;
    $subnum = $n3 - $n4;
    print $n3." + ".$n4." = ".$addnum."\n";
    print $n3." - ".$n4." = ".$subnum;
  }
  addsubnum(82, 17);

?>

<?php
  class CalcNums {
    public function __construct($num1, $num2) {
      $this->num1 = $num1;
      $this->num2 = $num2;
    }
    public function getResult() {
      $add = $this->num1 + $this->num2;
      $subtract = $this->num1 - $this->num2;
      echo "{$this->num1} + {$this->num2} = {$add}\n";
      echo "{$this->num1} - {$this->num2} = {$subtract}";
    }
  }
  $answer = new CalcNums(12, 25);
  $answer->getResult();
?>