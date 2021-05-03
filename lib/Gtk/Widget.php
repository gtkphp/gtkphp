<?php

namespace Gtk;

trait __Widget {
    public function showAll() {
        \gtk_widget_show_all($this);
    }
    public function getPreferredWidth(int &$minimum_width, int &$natural_width):void {
        \gtk_widget_get_preferred_width($this, $minimum_width, $natural_width);
    }
}

class Widget extends \GtkWidget {
	use __Widget;
}

