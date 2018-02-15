<?php

namespace Event\Listener;

use App\Entity\Wallpaper;
use App\Service\WallpaperFilePathHelper;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Event\PreUpdateEventArgs;
use App\Service\LocalFileSystemFileMover;

class WallpaperUploadListener
{
	/**
	 * @var LocalFileSystemFileMover
	 */
	private $fileMover;
	/**
	 * @var WallpaperFilePathHelper
	 */
	private $wallpaperFilePathHelper;

	public function __construct(LocalFileSystemFileMover $fileMover, WallpaperFilePathHelper $wallpaperFilePathHelper)
	{
		$this->fileMover = $fileMover;
		$this->wallpaperFilePathHelper = $wallpaperFilePathHelper;
	}

	public function prePersist(LifecycleEventArgs $eventArgs): bool
	{
		$entity = $eventArgs->getEntity();

		/**
		 * @var $entity Wallpaper
		 */

		$file = $entity->getFile();

		$tempLocation = $file->getPathname();
		$newLocation = $this->wallpaperFilePathHelper->getNewFilePath(
			$file->getClientOriginalName()
		);

		$this->fileMover->move($tempLocation, $newLocation);

		//   - update the entity with additional info
		[
			0 => $width,
			1 => $height,
		] = getimagesize($newLocation);

		$entity
			->setFilename(
				$file->getClientOriginalName()
			)
			->setHeight($height)
			->setWidth($width)
		;



		if(false === $entity instanceof Wallpaper)
		{
			return false;
		}

		return true;
	}

	public function preUpdate(PreUpdateEventArgs $eventArgs): void
	{

	}
}
