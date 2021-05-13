
<?php

namespace Cairo\Surface;

use Cairo\Surface;

class Pdf extends Surface {
  /**
   * Creates a PDF surface of the specified size in points to be written to filename .
   * @param string $filename
   * @param float $width_in_points
   * @param float $height_in_points
   */
  static public function Create(string $filename, float $width_in_points, float $height_in_points):Surface {
    return \cairo_pdf_surface_create ($filename, $width_in_points, $height_in_points);
  }
}
