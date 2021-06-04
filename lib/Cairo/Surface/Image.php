<?php

namespace Cairo\Surface;

use Cairo\Surface;
use Cairo\Format;

class Image extends Surface {
  /**
   * Creates an image surface of the specified format and dimensions.
   * @param Format $format
   * @param int $width
   * @param int $height
   * @param int $stride
   * @param mixed $data
   */
  static public function Create(Format $format, int $width, int $height, int $stride=0, $data=null):Surface {
    if (empty($data)) {
      return \cairo_image_surface_create ($format, $width, $height);
    } else {
      return \cairo_image_surface_create_for_data ($data, $format, $width, $height, $stride);
    }
  }
  
}
