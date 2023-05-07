<?php

namespace Psr\Cairo\Cairo;

trait PathTrait {
  public function closePath() {
    \cairo_close_path($this);
  }
}
