<?php

use Psr\Cairo\Context;
use Psr\Cairo\PatternFactory;
use Psr\Cairo\SurfaceFactory;

$surface = SurfaceFactory::createImage(Format::ARGB32, 120, 120);
$cr = new Context($surface);

$cr->setLineWidth (0.1);
$cr->setSourceRgb (0, 0, 0);
$cr->rectangle (0.25, 0.25, 0.5, 0.5);
$cr->stroke ();

try {
  $surface->write ("/path/image.png");
} catch (Exception $ex) {
  
}
