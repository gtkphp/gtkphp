<?php

namespace Gtk;

use Bin;

trait __Window {
    use __Bin;
}

class Window extends \GtkWindow {
    use __Window;
    public function __construct() {
        parent::__construct();
        g_signal_connect($this, "destroy", "gtk_main_quit", Null);
    }
}


