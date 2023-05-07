<?php

namespace Psr\Cairo;

class Png {
  /**
   * @internal cairo_surface_write_to_png
   * 
   * @throws NoMemoryException if memory could not be allocated for the operation
   * @throws MismatchSurfaceException if the surface does not have pixel contents
   * @throws WriteErrorException if an I/O error occurs while attempting to write the file
   * @throws PngErrorException if libpng returned an error
   */
  public function write(AbstractSurface $surface, string $filename);
}
