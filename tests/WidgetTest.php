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
  public function getPreferredSize(Gtk\Requisition &$minimum_size, Gtk\Requisition &$natural_size) {
    $minimum_size = 100;
    $natural_size = 160;
  }
}

Gtk\Init($argc, $argv);
$window = new Gtk\Window();
$window->add(new Gtk\Button())
       ->add(new WidgetTest())
       ->add(new Gtk\Button())
       ->showAll();
$status = Gtk\Main();
