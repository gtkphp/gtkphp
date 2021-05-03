<?php

namespace Gtk;

//define('Gtk\ORIENTATION_HORIZONTAL', \GTK_ORIENTATION_HORIZONTAL);
const ORIENTATION_HORIZONTAL = \GTK_ORIENTATION_HORIZONTAL;

function Init(&$argc, &$argv) {
    \gtk_init($argc, $argv);
}

function Main() {
    \gtk_main();
}

function MainQuit() {
    \gtk_main_quit();
}

