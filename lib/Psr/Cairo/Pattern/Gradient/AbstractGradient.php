<?php

namespace Psr\Cairo\Pattern\Gradient;

use Psr\Cairo\Pattern\ColorStop;

class AbstractGradient extends cairo_pattern_t {
  /**
   * @map cairo_pattern_add_color_stop_rgb
   */
  public function addColorStopRgb (double $offset,
                                   double $red,
                                   double $green,
                                   double $blue);
  /**
   * @map cairo_pattern_add_color_stop_rgba
   */
  public function addColorStopRgb (double $offset,
                                   double $red,
                                   double $green,
                                   double $blue,
                                   double $alpha);
  public function addColorStop (ColorStop $color_stop);
}
