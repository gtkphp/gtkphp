<?php

namespace Psr\Cairo\Surface;

class ImageSurface extends AbstractSurface {
  public function __construct(Format $format, float $width, float $height) {
    parent::__construct(\cairo_image_surface_create ($format->value, $width, $height));
  }
}
