<?php

namespace App\Controller;

use app\Entity\Announces;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * @Route("/announces", name="announces_")
 */
class AnnouncesController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index(): Response
    {   
        $announces = $this->getDoctrine()->getRepository(Announces::class)->findAll();
        dd($announces);

        return $this->render('announces/index.html.twig', [
            'announces' =>  $announces
        ]);
    }
}
