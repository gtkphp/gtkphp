<?php

<?php

/**
 * All the fields in the GObject structure are private to the GObject implementation
 * and should never be accessed directly.
 */
class GObject extends GType
{
  /* seldom overidden */
  public function __construct() {
    // Internal implementation
    //g_object_class_install_property();
  }
  
  public function __destruct() {
  }
  
  /* overridable methods */
  public function __set(string $name, mixed $value) {
  }
  
  public function __get(string $name):mixed {
  }
  
  /* seldom overidden */
  public function dispatch_properties_changed(int	         $n_pspecs,
					                                    GParamSpec[] $pspecs){
  }
  
  /* signals */
  public function notify(GParamSpec $pspec) {
  }

}
