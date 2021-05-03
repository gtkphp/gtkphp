<?php

$app = new Gtk\Application('org.gtk.ExampleApp');

$app->connect('activate', function ($app) {
    $win = new Gtk\ApplicationWindow($app);
    $btn = new Gtk\Button(label: 'Hello, World!');
    $btn->connect('clicked', function () use ($win) { $win->close(); });
    $win->add(btn);
    $win->showAll();
});

$app->run();
