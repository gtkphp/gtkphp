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
print_r((array)$array);
