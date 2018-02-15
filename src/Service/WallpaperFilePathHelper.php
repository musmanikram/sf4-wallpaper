<?php
/**
 * Created by PhpStorm.
 * User: usman
 * Date: 13/02/2018
 * Time: 1:39 AM
 */

namespace App\Service;


class WallpaperFilePathHelper {

	/**
	 * @var string
	 */
	private $wallpaperFileDirectory;

	public function __construct(string $wallpaperFileDirectory)
	{

		$this->wallpaperFileDirectory = $wallpaperFileDirectory;
	}

	public function getNewFilePath(string $newFileName)
	{
		return $this->wallpaperFileDirectory . $newFileName;
	}

}