<?php

/**
 * Header Include Script
 * Loads the correct header from the server at $basePath
 *
 * @date 29-01-2016
 * @author  Dion de Boer <dion@dweazelmedia.nl>
 */

$basePath = "http://footer.brainstud.com/index.php";
$product  = "brainstud";

echo grabFooter($product, $basePath);


function grabFooter($theProduct, $theBaseUrl) 
{
	// Set the post params data
	$postParams = "product=" . $theProduct;

	// Create the cUrl POST request
	$cUrl = curl_init($theBaseUrl);

	curl_setopt($cUrl, CURLOPT_POST, 1);
	curl_setopt($cUrl, CURLOPT_POSTFIELDS, $postParams);
	curl_setopt($cUrl, CURLOPT_DNS_USE_GLOBAL_CACHE, false );
	curl_setopt($cUrl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($cUrl, CURLOPT_DNS_CACHE_TIMEOUT, 2 );

	$cResult = curl_exec($cUrl);

	curl_close($cUrl);

	if( $cResult != null )
	{
		// Do magic
		return $cResult;
	}

	return "";
}
