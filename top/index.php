<?php
/*
  Template Name: top
*/
 
$uniqueLoad = array(
  array("type" => "css", "src" => get_template_directory_uri() . "/top/css/index.css"),
  array("type" => "js", "src" => get_template_directory_uri() . "/top/js/index.js"),
);

$CONTENT = __DIR__ . "/content/index.html";
 
include_once(get_template_directory() . "/basicTemplate/basic.php");