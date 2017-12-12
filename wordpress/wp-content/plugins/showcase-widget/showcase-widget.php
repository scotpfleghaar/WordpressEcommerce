<?php
/*
    Plugin Name: Showcase Widget
    Description: Simple showcase area
    Version: 1.0
    Author: Scot Pfleghaar
*/

// Include class file
include('class.showcase-widget.php');

//Register widget
function register_showcase_widget() {
    register_widget('Showcase_Widget'); //Needs to be class name
}

add_action("widgets_init", "register_showcase_widget");