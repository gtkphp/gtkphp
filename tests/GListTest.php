<?php

$list = GList('guest', 'member');

$list->append('admin');// g_list_append()

var_dump($list);

?>
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
