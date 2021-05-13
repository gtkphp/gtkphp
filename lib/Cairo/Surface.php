<?php

namespace Cairo;

use Cairo\Content;

class Surface extends \cairo_surface_t {
  /**
   * Create a new surface that is a rectangle within the target surface.
   * @param Surface $target
   * @param float $width
   * @param float $height
   * @param float $x
   * @param float $y
   */
  public function __construct(Surface $target, float $width, float $height, float $x=0.0, float $y=0.0) {
    parent::__construct(\cairo_surface_create_for_rectangle($target, $x, $y, $width, $height));
  }
  
  /**
   * Create a new surface that is as compatible as possible with an existing surface.
   * @param Surface $other
   * @param Content $content
   * @param int $width
   * @param int $height
   * @return Surface
   */
  static public function Create (Surface $other, Format|Content $content, int $width, int $height) {
    if ($content instanceof Format) {
      return \cairo_surface_create_similar_image($other, $content, $width, $height);
    } else {
      return \cairo_surface_create_similar($other, $content, $width, $height);
    }
  }
  
}
