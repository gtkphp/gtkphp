<?php

class WidgetTest extends Gtk\Widget {
  public function draw(Cairo\Context $cr) {
    $cr->setSource(100, 100, 100)
       ->setLineWidth(2.0);
    $cr->moveTo(100, 0.0)
       ->lineTo(0.0, 100);
    $cr->moveTo(0.0, 0.0)
       ->lineTo(100, 100);
    $cr->paint();
  }
}

Gtk\Init($argc, $argv);
$window = Gtk\Window()->add(WidgetTest())->showAll();
$status = Gtk\Main();
