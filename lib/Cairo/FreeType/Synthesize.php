<?php

namepsace Cairo\FreeType ;

enum Synthesize extends \cairo_ft_synthesize_t {
  case Bold = CAIRO_FT_SYNTHESIZE_BOLD;
  case Oblique = CAIRO_FT_SYNTHESIZE_OBLIQUE;
}
