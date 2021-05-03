<?php

namespace Gtk;

use Widget;

trait __Container {
    use __Widget;
    public function add($widget) {
        \gtk_container_add($this, $widget);
    }
}

class Container extends \GtkContainer {
    use __Container;
}


