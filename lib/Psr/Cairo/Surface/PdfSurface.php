<?php

namespace Psr\Cairo\Surface;

class PdfSurface extends AbstractSurface {
  /**
   * @internal cairo_pdf_surface_create
   */
  public function __construct(string $filename,
                              float $width_in_points,
                              float $height_in_points) {
    parent::__construct(\cairo_pdf_surface_create($filename, $width_in_points, $height_in_points));
  }
}
