<?php

namespace App\DataFixtures\ORM;

use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadCategoryData extends Fixture implements OrderedFixtureInterface
{
	public function load(ObjectManager $manager): void
	{

		$category = new Category();
		$category->setName('Abstract');
		$this->addReference('category.abstract', $category);
		$manager->persist($category);

		$category = new Category();
		$category->setName('Summer');
		$this->addReference('category.summer', $category);
		$manager->persist($category);

		$category = new Category();
		$category->setName('Winter');
		$this->addReference('category.winter', $category);
		$manager->persist($category);

		$manager->flush();
	}

	/**
	 * Get the order of this fixture
	 *
	 * @return integer
	 */

	public function getOrder() {
		// TODO: Implement getOrder() method.

		return 100;
	}


}