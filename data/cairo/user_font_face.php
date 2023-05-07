<?php

/**
 * @param cairo_status_t cairo_user_scaled_font_init_func_t(cairo_scaled_font_t $scaled_font, cairo_t $cr, cairo_font_extents_t $extents) $init_func
 */
public function cairo_user_font_face_set_init_func(cairo_font_face_t $font_face, callable $init_func);
