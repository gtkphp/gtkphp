<?php

$array = GArray('a', 'b', 3);// Error: Expected string @2
$array = GArray(1, 2, '3');// Error: Expected int @2

$array = new GArray();
$array = GArray(1, 2, 3);
$array = GArray('a', 'b', '3');

$array->append('d');
$array->prepend('z');
$array->insert('e', 2);

var_dump($array);
var_dump((array)$array);

?>
object(GArray)#1 {
  len: 6,
  data: SplFixedArray(6)#2 {
    0 => string(1) "z",
    1 => string(1) "a",
    2 => string(1) "e",
    3 => string(1) "b",
    4 => string(1) "3",
    5 => string(1) "d",
  },
}
array(6)#1 {
  0 => string(1) "z",
  1 => string(1) "a",
  2 => string(1) "e",
  3 => string(1) "b",
  4 => string(1) "3",
  5 => string(1) "d",
}

