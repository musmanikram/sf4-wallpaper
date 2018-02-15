<?php

namespace spec\Service;

use Service\LocalFileSystemFileMover;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Symfony\Component\Filesystem\Filesystem;

class FileMoverSpec extends ObjectBehavior
{
	private $fileSystem;

	function let(Filesystem $fs): void
	{
		$this->fileSystem = $fs;
		$this->beConstructedWith($fs);
	}

	function it_is_initializable(): void
	{
		$this->shouldHaveType(LocalFileSystemFileMover::class);
	}

	function it_can_move_a_file_from_temporary_to_controlled_storage(): void
	{

		$currentLocation = "c location";
		$newLocation = "N Location";
		$this->move($currentLocation, $newLocation)->shouldReturn(true);
		$this->fileSystem->rename($currentLocation, $newLocation)->shouldHaveBeenCalled();

	}
}
