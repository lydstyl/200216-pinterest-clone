<?php

namespace App\Controller;

use App\Entity\Pin;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PinsController extends AbstractController
{
    private $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/")
     */
    public function index(): Response
    {
        $pin = new Pin;
        $pin->setTitle('Title 3');
        $pin->setDescription('Description 3');

        //$em = $this->getDoctrine()->getManager(); // entity manager
        $this->em->persist($pin);
        $this->em->flush();

        // var_dump($pin);
        // dump($pin);
        // die;
        // dd($pin);

        return $this->render('pins/index.html.twig');
    }
}
