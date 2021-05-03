<?php

namespace Gtk;

use Bin;

trait __Button {
    use __Bin;
    public function setLabel(string $label) {
        \gtk_button_set_label($this, $widget);
    }
}

class Button extends \GtkButton {
    use __Button;
}

