<?php

namespace Cairo;

use Cairo\Surface;

class PngSurface extends Surface {
  /**
   * Creates a new image surface and initializes the contents to the given PNG file.
   * @param string $filename name of PNG file to load.
   */
  static public function Create(string $filename):Surface {
    return \cairo_image_surface_create_from_png ($filename);
  }
}
