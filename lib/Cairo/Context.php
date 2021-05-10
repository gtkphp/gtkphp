<?php

namespace Cairo;

use Cairo\Surface;
use Cairo\Path;

class Context extends \cairo_t {
  
  static public function Create(Surface $surface) {
    return \cairo_create($surface);
  }
  
  public function status():int {
    return \cairo_status($this);
  }
  
  // 1 Drawing
  // 1-1 Transforms
  public function scale(float $sx, float $sy) {
    return \cairo_scale($this, $x, $sy);
  }
  // 1-2 Paths
  public function copyPath():Path {
    return \cairo_copy_path($this);
  }
  public function appendPath(Path $path) {
    \cairo_append_path($this, $path);
  }
  
  // 2 Fonts
  // 3 Surfaces
  // 4 Utilities
}
