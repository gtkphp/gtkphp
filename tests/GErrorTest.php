<?php

#include <gtk>

// GError need to extends/implemente Error
$gerror = new GError('HTTP', 404, "Not Found: %s", '...');
