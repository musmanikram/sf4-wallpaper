<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\WallpaperRepository")
 */
class Wallpaper
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

	/**
	 * @ORM\Column(type="string")
	 */
	private $filename;

	/**
	 * @ORM\Column(type="string", unique=true)
	 */
	private $slug;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $width;

	/**
	 * @ORM\Column(type="integer")
	 */
	private $height;

	/**
	* @ORM\Column(type="text")
	*/
	private $description;

}
