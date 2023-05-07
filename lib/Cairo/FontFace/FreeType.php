<?php

namespace Cairo\FontFace;

use Cairo\FreeType\Synthesize;

class FreeType extends \cairo_font_face_t {
  
  public function getSynthesize():Synthesize {
    $synth_flags = \cairo_ft_font_face_get_synthesize ($this);
    return match($synth_flags) {
      \CAIRO_FT_SYNTHESIZE_BOLD => Synthesize::Bold,
      \CAIRO_FT_SYNTHESIZE_OBLIQUE => Synthesize::Oblique,
    };
  }
  public function setSynthesize(Synthesize $synth_flags) {
    \cairo_ft_font_face_set_synthesize ($this, $synth_flags->value);
  }
  public function unsetSynthesize(Synthesize $synth_flags) {
    \cairo_ft_font_face_unset_synthesize ($this, $synth_flags->value);
  }
}
