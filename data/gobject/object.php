<?php

/**
 * All the fields in the GObject structure are private to the GObject implementation
 * and should never be accessed directly.
 */
class GObject extends GTypeInstance
{
  /* seldom overidden */
  public function constructor(GType                 $type,
                              guint                 $n_construct_properties,
                              GObjectConstructParam $construct_properties): GObject;
  
  /* overridable methods */
  public function set_property(int           $property_id,
                               GValue        $value,
                               GParamSpec    $pspec) {
  }
  
  public function get_property(int           $property_id,
                               GValue        $value,
                               GParamSpec    $pspec) {
  }
  public function dispose(){
  }
  public function finalize(){
  }
  
  /* seldom overidden */
  public function dispatch_properties_changed(int	         $n_pspecs,
					                                    GParamSpec[] $pspecs){
  }
  
  /* signals */
  public function notify(GParamSpec $pspec) {
  }

  /* called when done constructing */
  public function constructed() {
  }

}


/**
 * Sets a property on an object.
 * @param GObject $object a GObject
 * @param string $property_name the name of the property to set
 * @param GValue $value the value
 */
function g_object_set_property (GObject $object, string $property_name, GValue $value) {}
