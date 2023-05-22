<?php

use Psr\Cairo\Context;
use Psr\Cairo\Pattern\SolidPattern;
use Psr\Cairo\Surface\ImageSurface;

$pattern = new SolidPattern(0.0, 0.0, 1.0);
$surface = new ImageSurface(Format::ARGB32, 120, 120);
$cr = new Context($surface);

$cr->line_width = 0.1;
$cr->source = $pattern;

$cr->rectangle (0.25, 0.25, 0.5, 0.5);
$cr->stroke ();

try {
  Png::write($surface, "/path/image.png");
  
  /*Jpeg::write($surface, "/path/image.jpg");
  Svg::write($surface, "/path/image.svg");// cairo_show_page
  Pdf::write($surface, "/path/image.pdf");// cairo_show_page
  Ps::write($surface, "/path/image.ps");// cairo_show_page
  
  $surface = Jpeg::read("/path/image.jpg");
  cairo_image_surface_create_from_png ("data/romedalen.png");
  */
  
} catch (Exception $ex) {
  
}
