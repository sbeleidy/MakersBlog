<?php

/**
 * Return size of file and
 * readable by humans
 */
 
 function human_filesizes($bytes, $decimals = 2)
 {
 	$size = ['B', 'kB', 'MB'];
 	$factor = floor((strlen($bytes) - 1) / 3);

 	return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)).@$size[$factor];
 }

 /**
  * Discover the mime type
  */
 function is_image($mimeType)
 {
 	return starts_with($mimeType, 'image/');
 }

 /**
  * Return "checked" if true
  */
 function checked($value)
 {
 	return $value ? 'checked' : '';
 }

 /**
  * Return img url for headers
  */
function page_image($value = null)
{
	if (empty($value)) {
		$value = config('blog.page_image');
	}
	if (! starts_with($value, 'http') && $value[0] !== '/') {
		$value = config('blog.uploads.webpath') . '/' . $value;
	} 

	return $value;
}