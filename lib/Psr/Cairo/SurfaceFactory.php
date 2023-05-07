<?php

namespace Psr\Cairo;

use Psr\Cairo\Surface\PdfSurface;
use Psr\Cairo\Surface\QuartzSurface;

class SurfaceFactory {
  public function createPdf():PdfSurface {}
  public function createQuartz():QuartzSurface {}
  //...
}
