<?php

namespace Cairo;

use Cairo\Surface;
use Cairo\Path;

class Context extends \cairo_t {
  
  //protected function __construct(\cairo_t $cr) {
  //  parent::__construct($cr);
  //}
  
  /**
   * Creates a new cairo_t with all graphics state parameters
   * set to default values and with target as a target surface.
   *
   * @param Surface $target target surface for the context
   * @return a new cairo context.
   */
  static public function Create(Surface $target):Context {
    return new Context(\cairo_create($target));
  }
  
  public function status():int {
    return \cairo_status($this);
  }
  
  // 1 Drawing
  
  // 1-1 Transforms
  
  /**
   * Modifies the current transformation matrix (CTM)
   * by translating the user-space origin by (tx , ty ).
   *
   * @param float $tx amount to translate in the X direction
   * @param float $ty amount to translate in the Y direction
   * @since 1.0
   */
  public function translate(float $tx, float $ty) {
    return \cairo_translate($this, $tx, $ty);
  }

  /**
   * Modifies the current transformation matrix (CTM)
   * by scaling the X and Y user-space axes by sx and sy respectively.
   *
   * @param float $sx scale factor for the X dimension
   * @param float $sy scale factor for the Y dimension
   * @since 1.0
   */
  public function scale(float $sx, float $sy) {
    return \cairo_scale($this, $sx, $sy);
  }
  
  /**
   * Modifies the current transformation matrix (CTM)
   * by rotating the user-space axes by angle radians.
   *
   * @param float $angle angle (in radians)
   * by which the user-space axes will be rotated
   * @since 1.0
   */
  public function rotate(float $angle) {
    return \cairo_rotate($this, $angle);
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
