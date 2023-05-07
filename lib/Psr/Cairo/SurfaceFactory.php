<?php

namespace Psr\Cairo;

use Psr\Cairo\Surface\PdfSurface;
use Psr\Cairo\Surface\QuartzSurface;
use Psr\Cairo\Format;

class SurfaceFactory {
  public function createImage(Format $format,
                            int $width,
                            int $height):ImageSurface {}
  public function createPng(Format $format,
                            int $width,
                            int $height):PngSurface {}
  public function createPdf(Format $format,
                            int $width,
                            int $height):PdfSurface {}
  public function createQuartz(Format $format,
                               int $width,
                               int $height):QuartzSurface {}
  //...
}
