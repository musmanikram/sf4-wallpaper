<?php

namespace App\Service;

interface FileMover {
	public function move( $existingFilePath, $newFilePath ): bool;
}