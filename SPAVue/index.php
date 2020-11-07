<?php
/*
  Template Name: SPA VUEJS
*/
 
$uniqueLoad = array(
  array("type" => "css", "src" => get_template_directory_uri() . "/SPAVue/css/index.css"),
  array("type" => "js", "src" => get_template_directory_uri() . "/SPAVue/js/index.js"),
  array("type" => "js", "src" => "https://cdn.jsdelivr.net/npm/vue/dist/vue.js"),
);

$CONTENT = __DIR__ . "/content/index.html";
include_once(get_template_directory() . "/basicTemplate/basic.php");