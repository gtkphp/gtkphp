<?php

namespace Psr\Cairo;

trait PathTrait {
  public function closePath() {
    \cairo_close_path($this);
  }
}
