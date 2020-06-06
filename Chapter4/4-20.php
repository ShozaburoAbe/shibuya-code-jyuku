<?php
  function checkSeason() {
    echo "季節を求めます。\n";
    do {
      do {
        echo "何月ですか；";
        $m = trim(fgets(STDIN)); 
      } while (!($m >= 1 && $m <= 12));
      if ($m >= 3 && $m <= 5) {
        print "それは春です。";
      } elseif ($m >= 6 && $m <= 8) {
        print "それは夏です。";
      } elseif($m >= 9 && $m <= 11) {
        print "それは秋です。";
      } else{
        print "それは冬です。";
      }
      echo "\nもう一度？ 1...Yes／2...No：";
      $again = trim(fgets(STDIN));
    } while ($again == 1); 
  }
  checkSeason();
?>