<?php

namespace Psr\Cairo;

use Psr\Cairo\Pattern\Type;

use Psr\Cairo\Pattern\SolidPattern;
use Psr\Cairo\Pattern\SurfacePattern;
use Psr\Cairo\Pattern\Gradient\LinearGradient;
use Psr\Cairo\Pattern\Gradient\RadialGradient;
use Psr\Cairo\Pattern\MeshPattern;


class PatternFactory {
  public function createRgb ():SolidPattern {}
  public function createRgba ():SolidPattern {}
  public function createSurface ():SurfacePattern {}
  public function createLinear ():LinearGradient {}
  public function createRadial ():RadialGradient {}
  public function createMesh ():MeshPattern {}
}

  
