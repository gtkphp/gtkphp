<?php

namespace Cairo\FontFace;

class User extends \cairo_font_face_t {
  /**
   * @see data/cairo/user_font_face.php
   */
  public function init(Cairo\ScaledFont $scaled_font, Cairo\Context $cr, Cairo\FontExtents $extents) {
  }
  public function renderGlyph(Cairo\ScaledFont $scaled_font, int $glyph, Cairo\Context $cr, Cairo\TextExtents $extents) {
  }
}

