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