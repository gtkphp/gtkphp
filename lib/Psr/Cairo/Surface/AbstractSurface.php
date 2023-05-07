<?php

namespace Psr\Cairo\Surface;

class AbstractSurface extends \cairo_surface_t {
  protected function __construct(\cairo_surface_t $target) {}
}
