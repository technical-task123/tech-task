<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class AnimalController
 * @package AppBundle\Controller
 */
class AnimalController extends Controller
{
    /**
     * Get everything a cat can do
     *
     * @Route("/cat", name="catpage")
     *
     * @return Response
     */
    public function viewCat()
    {
        $animalFactory = $this->container->get('animal_factory.service');
        $cat = $animalFactory->getAnimal('cat');
        $cat->walk();
        $cat->eat('food');
        $cat->makeSounds();
        $response = new Response();

        return $response;
    }

    /**
     * Get everything a dog can do
     *
     * @Route("/dog", name="dogpage")
     *
     * @return Response
     */
    public function viewDog()
    {
        $animalFactory = $this->get('animal_factory.service');
        $dog = $animalFactory->getAnimal('dog');
        $dog->walk();
        $dog->run();
        $dog->eat('food');
        $dog->makeSounds();
        $dog->byte('man');
        $response = new Response();

        return $response;
    }

    /**
     * Get everything a rat can do
     *
     * @Route("/rat", name="ratpage")
     *
     * @return Response
     */
    public function viewRat()
    {
        $animalFactory = $this->get('animal_factory.service');
        $rat = $animalFactory->getAnimal('rat');
        $rat->eat('food');
        $rat->makeSounds();
        $response = new Response();

        return $response;
    }

    /**
     * Get everything a sparrow can do
     *
     * @Route("/sparrow", name="sparrowpage")
     *
     * @return Response
     */
    public function viewSparrow()
    {
        $animalFactory = $this->get('animal_factory.service');
        $sparrow = $animalFactory->getAnimal('sparrow');
        $sparrow->walk();
        $sparrow->eat('food');
        $sparrow->makeSounds();
        $sparrow->fly();
        $response = new Response();

        return $response;
    }
}