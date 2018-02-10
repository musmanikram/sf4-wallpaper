<?php
/**
 * Created by PhpStorm.
 * User: usman
 * Date: 31/01/2018
 * Time: 3:34 PM
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class GalleryController extends Controller {

	/**
	 * @Route("/gallery", name="gallery")
	 * @param Request $request
	 * @return Response
	 */

	public function index(Request $request): Response
	{
		$images = [
			"1-nature.jpg",
			"2-nature.jpg",
			"3-nature.jpg",
			"4-nature.jpg",
			"5-nature.jpg",
			"6-nature.jpg",
			"7-nature.jpg",
			"11-nature.jpg",
			"12-nature.jpg",
			"13-nature.jpg",
			"14-nature.jpg",
			"15-nature.jpg",
			"16-nature.jpg"
		];

		$paginator  = $this->get('knp_paginator');
		$pagination = $paginator->paginate(
			$images,
			$request->query->getInt('page', 1)/*page number*/,
			4/*limit per page*/
		);

		return $this->render("gallery/index.html.twig",[
			'images' => $pagination
		]);
	}

	/**
	 * @Route("/view", name="view")
	 */

	public function details(): Response
	{
		$image = "1-nature.jpg";

		return $this->render("gallery/details.html.twig",compact('image'));

	}

}