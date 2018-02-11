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
		$wallpaper->setFilename('abstract-background-pink.jpg');
		$wallpaper->setSlug('abstract-background-pink');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.abstract')
		);
		$manager->persist($wallpaper);



		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('abstract-black-and-white-wave.jpg');
		$wallpaper->setSlug('abstract-black-and-white-wave');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.abstract')
		);
		$manager->persist($wallpaper);


		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('abstract-black-multi-color-wave.jpg');
		$wallpaper->setSlug('abstract-black-multi-color-wave');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.abstract')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('abstract-blue-green.jpg');
		$wallpaper->setSlug('abstract-blue-green');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.abstract')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('abstract-blue-line-background.jpg');
		$wallpaper->setSlug('abstract-blue-line-background');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.abstract')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('abstract-red-background-pattern.jpg');
		$wallpaper->setSlug('abstract-red-background-pattern');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.abstract')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('abstract-shards.jpeg');
		$wallpaper->setSlug('abstract-shards');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.abstract')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('abstract-swirls.jpeg');
		$wallpaper->setSlug('abstract-swirls');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.abstract')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('landscape-summer-beach.jpg');
		$wallpaper->setSlug('landscape-summer-beach');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.summer')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('landscape-summer-field.jpg');
		$wallpaper->setSlug('landscape-summer-field');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.summer')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('landscape-summer-flowers.jpg');
		$wallpaper->setSlug('landscape-summer-flowers');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.summer')
		);
		$manager->persist($wallpaper);


		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('landscape-summer-hill.jpg');
		$wallpaper->setSlug('landscape-summer-hill');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.summer')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('landscape-summer-mountain.png');
		$wallpaper->setSlug('landscape-summer-mountain');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.summer')
		);
		$manager->persist($wallpaper);


		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('landscape-summer-sea.jpg');
		$wallpaper->setSlug('landscape-summer-sea');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.summer')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('landscape-summer-sky.jpg');
		$wallpaper->setSlug('landscape-summer-sky');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.summer')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('landscape-winter-canada-lake.jpg');
		$wallpaper->setSlug('landscape-winter-canada-lake');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.winter')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('landscape-winter-high-tatras.jpg');
		$wallpaper->setSlug('landscape-winter-high-tatras');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.winter')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('landscape-winter-snow-lake.jpg');
		$wallpaper->setSlug('landscape-winter-snow-lake');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.winter')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('landscape-winter-snow-mountain.jpeg');
		$wallpaper->setSlug('landscape-winter-snow-mountain');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.winter')
		);
		$manager->persist($wallpaper);



		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('landscape-winter-snow-trees.jpg');
		$wallpaper->setSlug('landscape-winter-snow-trees');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.winter')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('landscape-winter-snowboard-jump.jpg');
		$wallpaper->setSlug('landscape-winter-snowboard-jump');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.winter')
		);
		$manager->persist($wallpaper);

		$wallpaper = new Wallpaper();
		$wallpaper->setFilename('landscape-winter-snowy-fisheye.png');
		$wallpaper->setSlug('landscape-winter-snowy-fisheye');
		$wallpaper->setWidth(1920);
		$wallpaper->setHeight(1080);
		$wallpaper->setDescription("");
		$wallpaper->setCategory(
			$this->getReference('category.winter')
		);
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