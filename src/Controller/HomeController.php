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
			"1-nature.jpg",
			"2-nature.jpg",
			"3-nature.jpg",
			"4-nature.jpg"
		];

		$landscape = [
			"5-nature.jpg",
			"6-nature.jpg",
			"7-nature.jpg",
			"11-nature.jpg",
			"12-nature.jpg"
		];

		$nature = [
			"13-nature.jpg",
			"14-nature.jpg",
			"15-nature.jpg",
			"16-nature.jpg"
		];

		$images = array_merge($abstract, $landscape, $nature);

		shuffle($images);

		$randomImages = array_slice($images, 0 , 8);

		return $this->render('home/index.html.twig',[
			'random_images' => $randomImages,
			'abstract'      => $abstract,
			'nature'        => $nature,
			'landscape'     => $landscape
		]);


	}

}