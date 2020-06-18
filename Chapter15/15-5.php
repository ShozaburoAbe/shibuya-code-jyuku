<?php
  // echo "文字列s：";
  // $stdin = trim(fgets(STDIN));
  // $s = str_split($stdin);
  // foreach ($s as $key => $value) {



  //   $chr = mb_chr($value);
  //   echo "s[{$key}] = {$value} {$chr}\n";
  // }

  function strToHex($string){
    $hex='';
    for ($i=0; $i < strlen($string); $i++){
        $hex .= dechex(ord($string[$i]));
    }
    echo $hex;
  }
  strToHex("漢字");
?>