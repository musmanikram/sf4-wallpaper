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

	/**
	 * Many Wallpapers have one Category
	 * @ORM\ManyToOne(targetEntity="App\Entity\Category", inversedBy="products")
	 * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
	 */
	private $category;

	/**
	 * @return Category|null
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * @param Category $category
	 */
	public function setCategory(Category $category = null ): void {
		$this->category = $category;
	}

	/**
	 * @return mixed
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * @param mixed $id
	 */
	public function setId( $id ): void {
		$this->id = $id;
	}

	/**
	 * @return mixed
	 */
	public function getFilename() {
		return $this->filename;
	}

	/**
	 * @param mixed $filename
	 */
	public function setFilename( $filename ): void {
		$this->filename = $filename;
	}

	/**
	 * @return mixed
	 */
	public function getSlug() {
		return $this->slug;
	}

	/**
	 * @param mixed $slug
	 */
	public function setSlug( $slug ): void {
		$this->slug = $slug;
	}

	/**
	 * @return mixed
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * @param mixed $width
	 */
	public function setWidth( $width ): void {
		$this->width = $width;
	}

	/**
	 * @return mixed
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * @param mixed $height
	 */
	public function setHeight( $height ): void {
		$this->height = $height;
	}

	/**
	 * @return mixed
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @param mixed $description
	 */
	public function setDescription( $description ): void {
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function __toString(): string {
		return $this->filename;
	}

	public function getImage(): string {
		return $this->filename;
	}




}
