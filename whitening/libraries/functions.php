<?php

/*-----------------------------------------------------------------------------------*/
/* CONVERT JPG TO WEBP */
/*-----------------------------------------------------------------------------------*/

function convert_img($source_file, $destination_file, $compression_quality = 100) {
  $image = imagecreatefromjpeg($source_file);
  $result = imagewebp($image, $destination_file, $compression_quality);
  if (false === $result) {
    return false;
  }
  imagedestroy($image);
  return $destination_file;
}

?>