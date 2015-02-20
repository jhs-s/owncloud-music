<?php

/**
 * ownCloud - Music app
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Morris Jobke <hey@morrisjobke.de>
 * @copyright Morris Jobke 2013, 2014
 */

namespace OCA\Music\Utility;

use \OCA\Music\AppFramework\Core\Logger;

/**
 * an extractor class for getID3
 */
class ExtractorGetPHPID3 implements Extractor {

	private $logger;

	public function __construct(Logger $logger){
		$this->logger = $logger;
	}

	/**
	 * get metadata info for a media file
	 *
	 * @param $path the path to the file
	 * @return array extracted data
	 */
	public function extract($stream) {	
		$metadata = id3_get_tag ($stream, ID3_BEST);
		
		return $metadata;
	}
}
