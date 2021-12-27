<?php

#include <glib>

try {
  throw new GError('HTTP', 404, "Not Found: %s", '...');
} catch (Error $e){
  // GError implements Error
}
