<?php
class KMP {
  function KMPSearch($p, $t) {
      $hasil = array();
      $pattern = str_split($p);
      $text = str_split($t);

      $lompat = $this->preKMP($pattern);

      $i = $j = 0;
      $num = 0;
      while ($j < count($text)) {
          if (isset($pattern[$i]) && isset($lompat[$i])) {
              while ($i > -1 && $pattern[$i] != $text[$j]) {
                  $i = $lompat[$i];
              }
          } else {
              $i = 0;
          }

          $i++;
          $j++;
          if ($i >= count($pattern)) {
              $hasil[$num++] = $j - count($pattern);
              if (isset($lompat[$i])) {
                  $i = $lompat[$i];
              }
          }
      }
      return $hasil;
  }

  function preKMP($pattern) {
      $i = 0;
      $j = $lompat[0] = -1;
      while ($i < count($pattern)) {
          while ($j > -1 && $pattern[$i] != $pattern[$j]) {
              $j = $lompat[$j];
          }
          $i++;
          $j++;
          if (isset($pattern[$i]) && isset($pattern[$j])) {
              if ($pattern[$i] == $pattern[$j]) {
                  $lompat[$i] = $lompat[$j];
              } else {
                  $lompat[$i] = $j;
              }
          }
      }
      return $lompat;
  }

  function KMPReplace($str1, $str2, $text) {
      $num = 0;
      $location = $this->KMPSearch($str1, $text);
      $t = '';
      $n = 0;
      $nn = 0;
      foreach ($location as $in) {
          $t .= substr($text, $n + $nn, $in - $n - $nn) . $str2;
          $nn = strlen($str1);
          $n = $in;
      }
      $t .= substr($text, $n + $nn);
      return $t;
  }
}
?>