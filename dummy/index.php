<?php
/*
  Template Name: dummy
*/
 
$uniqueLoad = array(
  array("type" => "css", "src" => get_template_directory_uri() . "/dummy/css/index.css"),
  array("type" => "js", "src" => get_template_directory_uri() . "/dummy/js/index.js"),
);

$CONTENT = __DIR__ . "/content/index.html";
 
include_once(get_template_directory() . "/basicTemplate/basic.php");