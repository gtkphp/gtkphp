<?php

namespace G;

class Object extends GObject
{
  /**
   * Sets a property on an object.
   * @param GObject $object a GObject
   * @param string $property_name the name of the property to set
   * @param GValue $value the value
   */
  function setProperty (string $property_name, GValue $value) {
    g_object_set_property($this, $property_name, $value);
  }
  
}
