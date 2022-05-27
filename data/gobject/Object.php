<?php

/**
 * 
 */
class GObject extends GType
{
  /* seldom overidden */
  public function __construct() {
    // Internal implementation
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
}
