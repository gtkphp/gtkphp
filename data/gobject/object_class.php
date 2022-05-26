<?php

see : https://github.com/gtkphp/gtkphp/discussions/2

class GObjectClass extends GTypeClass
{
  static public function list_properties(object $o, int &$n_properties): GParamSpec[] {
  }
}

/*
$object = new GObject();
$array = get_object_vars($object);

GObjectClass::list_properties(GObject::class, $n_properties);
*/
