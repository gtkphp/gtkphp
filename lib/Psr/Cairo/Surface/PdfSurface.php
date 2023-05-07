<?php

namespace Psr\Cairo\Surface;

class PdfSurface extends AbstractSurface {
  /**
   * @internal cairo_pdf_surface_create
   */
  public function __construct(string $filename,
                              double $width_in_points,
                              double $height_in_points) {
    parent::__construct(\cairo_pdf_surface_create($filename, $width_in_points, $height_in_points));
  }
}
