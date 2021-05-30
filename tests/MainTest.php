<?php
/**
 * Php7 bindings for Gtk+ Wrapper
 */

if (!extension_loaded("gtk")) die("Gtk+ not loaded");
require(__DIR__."/../lib/Gtk/3.php");//  die("Gtk+3 unsupported, you use : %s");
//require(__DIR__."/../lib/Gtk/4.php");

require_once(__DIR__."/../lib/Gtk.php");
require_once(__DIR__."/../lib/Gtk/Window.php");


use Gtk\{function Init, function Main, const ORIENTATION_HORIZONTAL};
use Gtk\Window;
use Gtk\Box;
use Gtk\Button;


Init($argc, $argv);

$window = new Window();

$box = new Box(ORIENTATION_HORIZONTAL);

$box->add(new Button("Accept"));
$box->add(new Button("Cancel"));

$window->add($box);

$window->showAll();

Main();

