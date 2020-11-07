<?php

define('CACHE_CLEAR', '?20201108');


//Hàm để load css & javascript
function loadUniqueFile($uniqueLoad)
{
	$files = "";
	if (!is_array($uniqueLoad) || empty($uniqueLoad)) {
		return $files;
	}
 
	foreach ($uniqueLoad as $file) {
		if ($file["type"] == "css") {
			$files .= "<link rel='stylesheet' href='" . $file["src"] . CACHE_CLEAR . "' type='text/css'>\n";
		} else if ($file["type"] == "js") {
			$files .= "<script type='text/javascript' src='" . $file["src"] . CACHE_CLEAR . "'></script>\n";
		}
	}
 
	return $files;
}


// Chuyển qua trang 404 nếu khi không tìm thấy trang phù hợp
add_action('template_redirect', 'is404_redirect_home');
function is404_redirect_home()
{
	if (is_404()) {
		wp_safe_redirect(home_url('/'), 301);
		exit();
	}
}