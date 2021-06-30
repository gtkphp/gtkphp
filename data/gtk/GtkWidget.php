<?php

class GtkWidget extends GObject {
  /**
   * @signal g_signal_new("button-press-event", G_SIGNAL_RUN_LAST, GtkWidgetClass.button_press_event, ...)
   */
  const SIGNAL_BUTTON_PRESS_EVENT;
  
  /**
   * @override GtkWidgetClass.button_press_event
   */
  function button_press_event(GtkWidget $widget, GdkEvent $event, $user_data):bool {
    die("Include path ... ");
    return false;
  }
  
  /**
   * @property g_param_spec_string ("name",
   *                                "Widget name",
   *                                "The name of the widget",
   *                                NULL,
   *                                GTK_PARAM_READWRITE);
   */
  const PROP_NAME = 0x01;

}
