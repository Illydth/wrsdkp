<?php
/**
 * CT_RaidTracker URL Handler
 *
 * @category Plugins
 * @package CT_RaidTrackerImport
 * @copyright (c) 2006, EQdkp <http://www.edqkp.com>
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 *
 * @author Garrett Hunter <loganfive@blacktower.com>
 * $Rev: 163 $ $Date: 2008-02-17 18:50:36 -0800 (Sun, 17 Feb 2008) $
 */

if ( !defined('EQDKP_INC') )
{
    die('Hacking attempt');
}

/**
 * URL Handler handles URL input / output operations
 * @subpackage CTRTAdmin
 */
class CTRT_URLHandler
{
    function CTRT_URLHandler() {}

	/**
	 * [code pulled from ItemStats by Yahourt (http://itemstats.free.fr/)
	 * Attempts to read the specified url and returns it as a string.
	 */ 
	function read($url)
	{        
		// Try cURL first. If that isn't available, check if we're allowed to
		// use fopen on URLs.  If that doesn't work, just die.
		if (function_exists('curl_init'))
		{
			$ch = @curl_init($url);
			@curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			@curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			@curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
			$html_data = curl_exec($ch);
			@curl_close($ch);
		}
		else if (ini_get('allow_url_fopen') == 1)
		{
			$html_data = @file_get_contents($url);
		}
		else
		{
			// Thanks to Aki Uusitalo
			$url_array = parse_url($url);
	
			$fp = fsockopen($url_array['host'], 80, $errno, $errstr, 5); 
	
			if (!fp)
			{
				die("cURL isn't installed, 'allow_url_fopen' isn't set and socket opening failed. Socket failed because: <br /><br /> $errstr ($errno)");
	
			}
			else
			{
				$out = "GET " . $url_array[path] . "?" . $url_array[query] ." HTTP/1.0\r\n";
				$out .= "Host: " . $url_array[host] . " \r\n";
				$out .= "Connection: Close\r\n\r\n";
	
				fwrite($fp, $out);
	
				// Get rid of the HTTP headers
				while ($fp && !feof($fp))
				{
					$headerbuffer = fgets($fp, 1024);
					if (urlencode($headerbuffer) == "%0D%0A")
					{
						// We've reached the end of the headers
						break;
					}
				}
	
				$html_data = '';
				// Read the raw data from the socket in 1kb chunks
				// Hopefully, it's just HTML.
				
				while (!feof($fp))
				{
					$html_data .= fgets($fp, 1024);
				}
				fclose($fp);
			}        
		}
		return $html_data;
	}
}
?>
