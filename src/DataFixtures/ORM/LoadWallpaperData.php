<?php

namespace App\DataFixtures\ORM;

use App\Entity\Wallpaper;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadWallpaperData extends Fixture
{
	public function load(ObjectManager $manager): void
	{

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('1-nature.jpg');
		$wallpaper->setSlug('1-nature');
		$wallpaper->setDescription("");
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$manager->persist($wallpaper);


		$manager->flush();
	}
}