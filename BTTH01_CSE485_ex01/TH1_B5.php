<?php
$a = [
    'a' => ['b' => 0,'c' => 1],
    'b' => ['e' => 2,'o' => ['b' => 3]]
   ];

   //Lấy giá trị = 3 từ key = b
   $key1 = $a['b']['o']['b'];
   echo "Key 1:" .$key1. "<br>";

   $key2 = $a['a']['c'];
   echo "Key 2:". $key2. "<br>";

   $key3 = $a['a'];
   print_r($key3);
?>