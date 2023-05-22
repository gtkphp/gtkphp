<?php

namespace Psr\Cairo;

use Psr\Cairo\PathTrait;

/**
 * @property Surface $target
 * @property Pattern $source
 */
class Context extends \cairo_t {
  use PathTrait;

  protected function __get($name) {
    switch ($name) {
      case 'target':
        return cairo_get_target($this);
      case 'source':
        return cairo_get_source($this);
      default:
        // Error
        break;
    }
  }
  protected function __set($name, $value) {
    switch ($name) {
      case 'target':
        // Readonly
      case 'source':
        return cairo_set_source($this, $value);
      default:
        // Error
        break;
    }
  }
}
