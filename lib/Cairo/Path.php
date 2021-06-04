<?php

namespace Cairo;

/**
 * $path = new Cairo\Path();
 * $path->moveTo(0.0, 0.0);
 * $path->lineTo(0.0, 0.0);
 * $path->lineTo(0.0, 0.0);
 *
 * $cr->appendPath($path);
 *
 */
class Path extends \cairo_path_t {
    /*public function arc(float $xc, float $yc, float $radius, float $angle1, float $angle2) {
        
    }*/
  
    public function moveTo($x, $y) {
      $this->data[] = new \cairo_path_data_t(CAIRO_PATH_DATA_MOVE_TO);
      $this->data[] = new \cairo_path_data_t($x, $y);
    }

    public function lineTo($x, $y) {
      $this->data[] = new \cairo_path_data_t(CAIRO_PATH_DATA_LINE_TO);
      $this->data[] = new \cairo_path_data_t($x, $y);
    }

}
