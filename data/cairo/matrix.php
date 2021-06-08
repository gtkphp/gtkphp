<?php

class cairo_matrix_t {
  /**
   * @var double
   */
  public $xx;
  /**
   * @var double
   */
  public $yx;
  /**
   * @var double
   */
  public $xy;
  /**
   * @var double
   */
  public $yy;
  /**
   * @var double
   */
  public $x0;
  /**
   * @var double
   */
  public $y0;
}

function cairo_matrix_init(float $xx, float $yx, float $xy, float $yy, float $x0, float $y0) {
  die('Error : Forbiden include_path "'.__DIR__.'"');
}
//...
