<?php

namespace App\Service;

use App\Service\FileMover;
use Symfony\Component\Filesystem\Filesystem;

class LocalFileSystemFileMover implements FileMover {
	/**
	 * @var Filesystem
	 */
	private $filesystem;

	public function __construct(Filesystem $filesystem)
	{
		$this->filesystem = $filesystem;
	}

    public function move($existingFilePath, $newFilePath): bool
    {
	    $this->filesystem->rename($existingFilePath, $newFilePath);
	    return true;
    }


}
