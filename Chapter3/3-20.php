<?php
  function rockPaperCissor() {
    $rand = rand(0, 2);
    switch($rand) {
      case 0;
        $r = "グー";
      break;
      case 1;
        $r = "チョキ";
      break;
      case 2;
        $r = "パー";
      break;
    }
    echo "コンピューターが選んだ手：{$r}";
  }
  rockPaperCissor();
?>