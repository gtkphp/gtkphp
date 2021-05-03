<?php

namespace Cairo;

class Context extends \cairo_t {
  static public function Create(Surface $surface) {
    return new \cairo_t($surface);
  }
  public function status():int {
    return \cairo_status($this);
  }
}
