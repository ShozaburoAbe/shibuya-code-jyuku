<?php //逆にwhileで書きました。
  function showstars() {
    echo "何個*を表示しますか？";
    $num = trim(fgets(STDIN));
    $i = 0;
    while($i < $num) {
      echo "*";
      $i++;
    }
  }
  showstars();
?>