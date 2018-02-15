<?php

namespace spec\Event\Listener;

use App\Entity\Category;
use App\Model\FileInterface;
use App\Event\Listener\WallpaperUploadListener;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use App\Service\LocalFileSystemFileMover;

class WallpaperUploadListenerSpec extends ObjectBehavior
{
	private $fileMover;

	function let(LocalFileSystemFileMover $fileMover): void
	{
		$this->beConstructedWith($fileMover);
		$this->fileMover = $fileMover;
	}

    function it_is_initializable(): void
    {
        $this->shouldHaveType(WallpaperUploadListener::class);
    }

	function it_returns_early_if_prePersist_LifecycleEventArgs_entity_is_not_a_Wallpaper_instance(LifecycleEventArgs $eventArgs)
	{

		$eventArgs->getEntity()->willReturn(new Category());

		$this->prePersist($eventArgs)->shouldReturn(false);

		$this->fileMover->move(
			Argument::any(),
			Argument::any()
		)->shouldNotHaveCalled();

		/*$this->fileMover->move(
			Argument::any(),
			Argument::any()
		)->shouldNotHaveBeenCalled();*/
	}

    function it_can_prePersist(LifecycleEventArgs $eventArgs, FileInterface $file): void
    {
	    $fakeTempPath = '/tmp/some.file';
	    $fakeRealPath = '/path/to/my/project/some.file';

	    $wallpaper = new Wallpaper();
	    $wallpaper->setFile($file);
	    $eventArgs->getEntity()->willReturn($wallpaper);
	    $this->prePersist($eventArgs);
	    $this->fileMover->move($fakeTempPath, $fakeRealPath)->shouldHaveBeenCalled();
    }

	public function it_can_preUpdate(PreUpdateEventArgs $eventArgs): void
	{
		$this->preUpdate();
	}
}
