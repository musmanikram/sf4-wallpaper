<?php

namespace App\DataFixtures\ORM;

use App\Entity\Wallpaper;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadWallpaperData extends Fixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager): void
	{

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('1-nature.jpg');
		$wallpaper->setSlug('1-nature');
		$wallpaper->setDescription("");
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setCategory($this->getReference('category.abstract'));
		$manager->persist($wallpaper);


		$manager->flush();
	}


	/**
	 * Get the order of this fixture
	 *
	 * @return integer
	 */
	public function getOrder() {
		return 200;
	}
}