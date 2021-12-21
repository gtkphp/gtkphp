<?php

$list = GList('guest', 'member');

$list[] = 'admin';

foreach ($list as $item) {
  echo $item->data, PHP_EOL;
}

var_dump($list);
var_dump((array)$list);

?>
guest
member
admin
object(GList)#1 {
  prev: null,
  data: string(5) "guest",
  next: object(GList)#2 {
    prev: #1,
    data: string(6) "member",
    next: object(GList)#3 {
      prev: #2,
      data: string(5) "admin",
      next: null,
    },
  },
}
array(3)#1 {
  0 => string(5) "guest",
  1 => string(6) "member",
  2 => string(5) "admin",
}
