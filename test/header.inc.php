<?php

/**
 * Header Include Script
 * Loads the correct header from the server at $basePath
 *
 * @date 29-01-2016
 * @author  Dion de Boer <dion@dweazelmedia.nl>
 */

//echo grabHeader($product, $basePath);
error_reporting(E_ALL);
class BrainHeader
{

	private $basePath = "http://header.brainstud.com/index.php";
	private $product  = "brainstud";

	function getStart($menu = null) 
	{
		echo $this->grabHeader($this->product, $this->basePath, $menu);
		//return $this->grabHeader();
	}

	function getEnd()
	{
		echo "</div>
	        </div>
	    </div>
	</div>

	<script src=\"http://header.brainstud.com/js/modernizr.custom.js\"></script>
	<script src=\"http://header.brainstud.com/js/classie.js\"></script>
	<script src=\"http://header.brainstud.com/js/sidebarEffects.js\"></script>
		";
	}

	function grabHeader($theProduct, $theBaseUrl, $menu = null) 
	{
		// Set the post params data
		if($menu == null)
		{
			$postParams = "product=" . $theProduct;
		}
		else
		{
			$postParams = "product=" . $theProduct . "&sidemenu=" . base64_encode($menu);
		}

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



}
