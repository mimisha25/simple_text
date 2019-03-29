<?php
/**
*Plugin Name: Text Example
*Description: This is just an example plugin
**/

function simple_show_function()
{

$content = "♥ İ belong to Ben ♥ ";
$content .= "<div> ♥ İ belong to Ben ♥ </div>";
$content .= "<div> ♥ İ belong to Ben ♥ </div>";
$content .= "<div> ♥ İ belong to Ben ♥ </div>";
$content .= "<p> ♥ İ belong to Ben ♥ </p>";
return $content;
}
add_shortcode('show', 'simple_show_function');

?>