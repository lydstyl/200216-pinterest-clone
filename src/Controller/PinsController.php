<?php

namespace App\Controller;

// use App\Entity\Pin;
// use Doctrine\ORM\EntityManagerInterface;
use App\Repository\PinRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PinsController extends AbstractController
{
    // private $em;

    // public function __construct(EntityManagerInterface $em)
    // {
    //     $this->em = $em;
    // }

    /**
     * @Route("/")
     */
    // public function index(EntityManagerInterface $em): Response
    public function index(PinRepository $repo): Response // injection of PinRepository working in a Controller method otherwise use __construct
    {
        // $pin = new Pin;
        // $pin->setTitle('Title 3');
        // $pin->setDescription('Description 3');

        // //$em = $this->getDoctrine()->getManager(); // entity manager
        // $this->em->persist($pin);
        // $this->em->flush();

        // // var_dump($pin);
        // // dump($pin);
        // // die;
        // // dd($pin);


        // $repo = $em->getRepository(Pin::class); // Pin::Class is same as "App\Entity\Pin" // or wit alias in doctrine.yaml "App\Pin"

        // $pins = $repo->findAll();

        // return $this->render('pins/index.html.twig', compact('pins')); // compact('pins') is ['pins' => $pins]
        return $this->render('pins/index.html.twig', ['pins' => $repo->findAll()]);
    }
}
