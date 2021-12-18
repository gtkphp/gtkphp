<?php

class WidgetSvgTest extends Gtk\Widget {
  public SVGDocument $doc;
  public function draw(Cairo\Context $cr) {
    $this->doc?->paint($cr);
  }
}

$app = new Gtk\Application('net.php.gtk.ExampleWidget');

$app->connect('activate', function ($app) {
    $window = new Gtk\ApplicationWindow($app);
    $window->add(new WidgetSvgTest())
           ->showAll();
    $url = 'https://gtk.php.net/animate.svg';
    $window[0]->doc = SVGDocument::load($url);
});

$app->run();
