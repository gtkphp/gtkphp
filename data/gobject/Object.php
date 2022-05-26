<?php

/**
 * 
 */
class GObject extends GType
{
  /* seldom overidden */
  public function __construct() {
    // Internal implementation
    //g_object_class_install_property();
    g_signal_new();
  }
  
  public function __destruct() {
  }
  
  /* overridable methods */
  public function __set(string $name, mixed $value) {
  }
  
  public function __get(string $name):mixed {
  }

  /** @signal */
  public function __notify(GParamSpec $pspec) {
  }

  /* seldom overidden */
  public function dispatch_properties_changed(int	   $n_pspecs,
					      GParamSpec[] $pspecs){
  }

}
