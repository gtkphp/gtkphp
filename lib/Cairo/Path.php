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
 *
 * for ($i=0; $i < $path->num_data; $i += $path->data[$i]->header->length) {
 *    switch ($path->data->header->type) {
 *    case CAIRO_PATH_MOVE_TO:
 *        do_move_to_things ($path->data[$i+1]->point->x, $path->data[$i+1]->point->y);
 *        break;
 *    case CAIRO_PATH_LINE_TO:
 *        do_line_to_things ($path->data[$i+1]->point->x, $path->data[$i+1]->point->y);
 *        break;
 *    case CAIRO_PATH_CURVE_TO:
 *        do_curve_to_things ($path->data[$i+1]->point->x, $path->data[$i+1]->point->y,
 *                            $path->data[$i+2]->point->x, $path->data[$i+2]->point->y,
 *                            $path->data[$i+3]->point->x, $path->data[$i+3]->point->y);
 *        break;
 *    case CAIRO_PATH_CLOSE_PATH:
 *        do_close_path_things ();
 *        break;
 *    }
 * }
 *
 * foreach($path as $segment){
 *  match($segment) {
 *    $element instanceof PathMove => echo 'M'.$segment->x.' '.$segment->y,
 *    $element instanceof PathLine => echo 'L'.$segment->x.' '.$segment->y,
 *    $element instanceof PathCurve => echo $segment->x1.' '.$segment->y1,
 *    $element instanceof PathClose => echo $segment->toString(),
 *  }
 * }
 *
 */
class Path extends \cairo_path_t {
    const MoveToElement = 0;
    /*public function arc(float $xc, float $yc, float $radius, float $angle1, float $angle2) {
        
    }*/
  
    public function moveTo(float $x, float $y) {
      $this->data[] = new \cairo_path_data_t(CAIRO_PATH_DATA_MOVE_TO);
      $this->data[] = new \cairo_path_data_t($x, $y);
    }

    public function lineTo(float $x, float $y) {
      $this->data[] = new \cairo_path_data_t(CAIRO_PATH_DATA_LINE_TO);
      $this->data[] = new \cairo_path_data_t($x, $y);
    }

}
