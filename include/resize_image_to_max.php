<?php
//	$source_pic = 'test0.bmp';
//	$destination_pic = 'test1.bmp';
//	$max_width = 20;
//	$max_height = 30;
//  resize_to_max($source_pic, $destination_pic, $max_width ,$max_height);

    function file_extension ($filename)
    {
        $filename = strtolower($filename) ;
        $exts = split("[/\\.]", $filename) ;
        $n = count($exts)-1;
        $exts = $exts[$n];
        return $exts;
    }

    function resize_to_max($source_pic, $destination_pic, $max_width ,$max_height)
    {
        if(strtoupper(file_extension($source_pic)) == "JPG" || strtoupper(file_extension($source_pic)) == "JPEG")
            $src = imagecreatefromjpeg($source_pic);	// GD Support... should be enabled...
        elseif(strtoupper(file_extension($source_pic)) == "GIF")
        $src = imagecreatefromgif($source_pic);	// GD Support... should be enabled...
        elseif(strtoupper(file_extension($source_pic)) == "BMP")
            $src = imagecreatefromwbmp($source_pic);	// GD Support... should be enabled...
        elseif(strtoupper(file_extension($source_pic)) == "PNG")
            $src = imagecreatefrompng($source_pic);	// GD Support... should be enabled...

        list($width,$height)=getimagesize($source_pic);

        $x_ratio = $max_width / $width;
        $y_ratio = $max_height / $height;

        if( ($width <= $max_width) && ($height <= $max_height) )
        {
            $tn_width = $width;
            $tn_height = $height;
        }
        elseif(($x_ratio * $height) < $max_height)
        {
                $tn_height = ceil($x_ratio * $height);
                $tn_width = $max_width;
        }
        else
        {
                $tn_width = ceil($y_ratio * $width);
                $tn_height = $max_height;
        }

        $tmp=imagecreatetruecolor($tn_width,$tn_height);
        imagecopyresampled($tmp,$src,0,0,0,0,$tn_width, $tn_height,$width,$height);

        imagejpeg($tmp,$destination_pic,100);
        imagedestroy($src);
        imagedestroy($tmp);
    }
	
	//---------------------------------------image resize function---------------------------
	function watermark_funpast($imagename,$folder,$folder_thumb,$height_argu,$width_argu){
	if (!isset($imagename)){
		echo 'Error: no image was specified';
		exit();
	}
	$memoryToAllocate	= '100M';
	$currentDir			= dirname(__FILE__);
	$docRoot=$folder."/";
// Images must be local files, so for convenience we strip the domain if it's there
// Strip the possible trailing slash off the document root
	if (!file_exists($docRoot . $imagename)){
		echo 'Error: image does not exist: ' . $docRoot . $imagename;
		exit();
	}
	// Get the size and MIME type of the requested image
	$size	= GetImageSize($docRoot . $imagename);
	$mime	= $size['mime'];
	// Make sure that the requested file is actually an image
	if (substr($mime, 0, 6) != 'image/'){
		echo 'Error: requested file is not an accepted type: ' . $docRoot . $imagename;
		exit();
	}
	$width			= $size[0];
	$height			= $size[1];
	$maxWidth		= (isset($width_argu)) ? (int) $width_argu : 0;
	$maxHeight		= (isset($height_argu)) ? (int) $height_argu : 0;
	
	// If either a max width or max height are not specified, we default to something

	// large so the unspecified dimension isn't a constraint on our resized image.

	// If neither are specified but the color is, we aren't going to be resizing at

	// all, just coloring.
	if (!$maxWidth && $maxHeight){
		$maxWidth	= 99999999999999;
	}
	elseif ($maxWidth && !$maxHeight){
		$maxHeight	= 99999999999999;
	}
	elseif ($color && !$maxWidth && !$maxHeight){
		$maxWidth	= $width;
		$maxHeight	= $height;
	}
	// If we don't have a max width or max height, OR the image is smaller than both

	// we do not want to resize it, so we simply output the original image and exit

	// Ratio cropping
	$offsetX	= 0;
	$offsetY	= 0;
	if($height_argu>$height)
		$maxHeight=$height;
	if($width_argu>$width)
		$maxHeight=$width;

	// Setting up the ratios needed for resizing. We will compare these below to determine how to

	// resize the image (based on height or based on width)
	$xRatio		= $maxWidth / $width;
	$yRatio		= $maxHeight / $height;
	if ($xRatio * $height < $maxHeight){ 
		// Resize the image based on width
		$tnHeight	= ceil($xRatio * $height);
		$tnWidth	= $maxWidth;
	}else // Resize the image based on height
	{
		$tnWidth	= ceil($yRatio * $width);
	 	$tnHeight	= $maxHeight;
	}
	// Before we actually do any crazy resizing of the image, we want to make sure that we

	// haven't already done this one at these dimensions. To the cache!

	// Note, cache must be world-readable
	// We store our cached image filenames as a hash of the dimensions and the original filename

	$resizedImageSource		= $tnWidth . 'x' . $tnHeight;
	if ($color)
		$resizedImageSource	.= 'x' . $color;
	if (isset($_GET['cropratio']))
		$resizedImageSource	.= 'x' . (string) $_GET['cropratio'];
	$resizedImageSource		.= '-' . $imagename;
	$resizedImage	= md5($resizedImageSource);
	$resized		= $cacheDir . $resizedImage;
	// Check the modified times of the cached file and the original file.

	// If the original file is older than the cached file, then we simply serve up the cached file

	// We don't want to run out of memory

	// Set up a blank canvas for our resized image (destination)
	$dst	= imagecreatetruecolor($tnWidth, $tnHeight);
	// Set up the appropriate image handling functions based on the original image's mime type
	switch ($size['mime']){
		case 'image/gif':
			// We will be converting GIFs to PNGs to avoid transparency issues when resizing GIFs
			// This is maybe not the ideal solution, but IE6 can suck it
			$creationFunction	= 'ImageCreateFromGif';
			$outputFunction		= 'ImagePng';
			$mime				= 'image/png'; // We need to convert GIFs to PNGs
			$doSharpen			= FALSE;
		break;
		case 'image/png':
			$creationFunction	= 'ImageCreateFromPng';
			$outputFunction		= 'ImagePng';
			$doSharpen			= FALSE;
		break;
		default:
			$creationFunction	= 'ImageCreateFromJpeg';
			$outputFunction	 	= 'ImageJpeg';
			$doSharpen			= TRUE;
		break;
	}
	// Read in the original image
	$src	= $creationFunction($docRoot . $imagename);
	if (in_array($size['mime'], array('image/gif', 'image/png'))){
		if (!$color){
			// If this is a GIF or a PNG, we need to set up transparency
			imagealphablending($dst, false);
			imagesavealpha($dst, true);
		}else{
			// Fill the background with the specified color for matting purposes
			if ($color[0] == '#')
				$color = substr($color, 1);
			$background	= FALSE;
			if (strlen($color) == 6)
				$background	= imagecolorallocate($dst, hexdec($color[0].$color[1]), hexdec($color[2].$color[3]), hexdec($color[4].$color[5]));
			else if (strlen($color) == 3)
				$background	= imagecolorallocate($dst, hexdec($color[0].$color[0]), hexdec($color[1].$color[1]), hexdec($color[2].$color[2]));
			if ($background)
				imagefill($dst, 0, 0, $background);
			}
		}
		// Resample the original image into the resized canvas we set up earlier
		ImageCopyResampled($dst, $src, 0, 0, $offsetX, $offsetY, $tnWidth, $tnHeight, $width, $height);
		if ($doSharpen){
			// Sharpen the image based on two things:
			//	(1) the difference between the original size and the final size
			//	(2) the final size
			//$sharpness	= findSharp($width, $tnWidth);
			$sharpenMatrix	= array(
			array(-1, -2, -1),
			array(-2, $sharpness + 12, -2),
			array(-1, -2, -1)
		);
		$divisor		= $sharpness;
		$offset			= 0;
		//imageconvolution($dst, $sharpenMatrix, $divisor, $offset);
	}
	// Write the resized image to the cache
	$resized=$folder_thumb."/".$imagename;
	$outputFunction($dst, $resized, -1);
	
	// Send the new image to the browser
	
	// Clean up the memory
	ImageDestroy($src);
	ImageDestroy($dst);
}
?>