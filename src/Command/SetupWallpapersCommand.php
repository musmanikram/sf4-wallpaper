<?php

namespace App\Command;

use App\Entity\Wallpaper;
use Symfony\Bundle\FrameworkBundle\Tests\Functional\app\AppKernel;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Doctrine\ORM\EntityManagerInterface;

class SetupWallpapersCommand extends Command
{
    protected static $defaultName = 'app:setup-wallpapers';
	/**
	 * @var EntityManagerInterface
	 */
	private $em;
	private $projectDir;

	public function __construct($projectDir = null, EntityManagerInterface $em ) {
	    parent::__construct( );

		$this->em = $em;
		$this->projectDir = $projectDir;
	}

	protected function configure()
    {
        $this
	        ->setName(self::$defaultName)
            ->setDescription('Grabs all local wallpapers and creates an entity for each one')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
	    $io = new SymfonyStyle($input, $output);


    	$wallpapers = glob('./public/images/*.*');
		$wallpapersCount = count($wallpapers);

		$io->title("Importing Wallpapers");
		$fileNames = [];

		$io->progressStart($wallpapersCount);


    	foreach ($wallpapers as $wallpaper){

		    [
			    'basename' => $filename,
			    'filename' => $slug,
		    ] = pathinfo($wallpaper);

		    [
			    0 => $width,
			    1 => $height
		    ] = getimagesize($wallpaper);

		    $wp = new Wallpaper();

		    $wp->setFilename($filename);
			$wp->setSlug($slug);
		    $wp->setDescription("");
			$wp->setWidth($width);
			$wp->setHeight($height);
    		$this->em->persist($wp);

		    $io->progressAdvance();

		    $fileNames[] = [$filename];
	    }


	    $this->em->flush();

		$io->progressFinish();

		$table = new Table($output);
		$table->setHeaders(['Filename'])
			->setRows($fileNames);
		$table->render();


        $io->success(sprintf('We have imported %d wallpapers', $wallpapersCount));
    }
}
