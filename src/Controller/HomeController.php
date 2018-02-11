<?php
/**
 * Created by PhpStorm.
 * User: usman
 * Date: 10/02/2018
 * Time: 8:40 PM
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController {

	/**
	 * @Route("/", name="home")
	 */

	public function index(): Response
	{
		$abstract = [
			"abstract-background-pink.jpg",
			"abstract-black-and-white-wave.jpg",
			"abstract-black-multi-color-wave.jpg",
			"abstract-blue-green.jpg",
			"abstract-blue-line-background.jpg",
			"abstract-red-background-pattern.jpg",
			"abstract-shards.jpeg",
			"abstract-swirls.jpeg",
		];
		$summer = [
			"landscape-summer-beach.jpg",
			"landscape-summer-field.jpg",
			"landscape-summer-flowers.jpg",
			"landscape-summer-hill.jpg",
			"landscape-summer-mountain.png",
			"landscape-summer-sea.jpg",
			"landscape-summer-sky.jpg",
		];
		$winter = [
			"landscape-winter-canada-lake.jpg",
			"landscape-winter-high-tatras.jpg",
			"landscape-winter-snow-lake.jpg",
			"landscape-winter-snow-mountain.jpeg",
			"landscape-winter-snow-trees.jpg",
			"landscape-winter-snowboard-jump.jpg",
			"landscape-winter-snowy-fisheye.png",
		];

		$images = array_merge($abstract, $summer, $winter);

		shuffle($images);

		$randomImages = array_slice($images, 0 , 8);

		return $this->render('home/index.html.twig',[
			'random_images' => $randomImages,
			'abstract'      => $abstract,
			'summer'        => $summer,
			'winter'     => $winter
		]);


	}

}