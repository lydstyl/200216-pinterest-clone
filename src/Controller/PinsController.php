<?php

namespace App\Controller;

use App\Entity\Pin;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PinsController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function index(): Response
    {
        $pin = new Pin;
        $pin->setTitle('Title 2');
        $pin->setDescription('Description 2');

        $em = $this->getDoctrine()->getManager(); // entity manager
        $em->persist($pin);
        $em->flush();

        // var_dump($pin);
        // dump($pin);
        // die;
        // dd($pin);

        return $this->render('pins/index.html.twig');
    }
}
