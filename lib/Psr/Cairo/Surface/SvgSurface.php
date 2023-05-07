<?php

namespace Psr\Cairo\Surface;

class SvgSurface extends AbstractSurface {
  public function __construct(string $filename, float $width_in_points, float $height_in_points)) {
    parent::__construct(\cairo_svg_surface_create ($filename, $width_in_points, $height_in_points));
  }
}
