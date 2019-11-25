<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/wild", name="wild_")
 */
class WildController extends AbstractController
{
    /**
    * Correspond à la route /wild et au name "wild_index"
    * @Route("", name="index")
    */
    public function index() : Response
    {
        return $this->render('wild/index.html.twig', [
            'website' => 'Wild Séries',
        ]);
    }
    /**
     * Correspond à la route /wild/show/{slug} et au name "wild_show"
     * @Route("/show/{slug}", name="show",  requirements={"slug" = "[a-z0-9-]+"}, defaults={"slug"="Aucune série sélectionnée, veuillez choisir une série"})
     */
    public function show($slug) : Response
    {
        $slugModif = ucwords(str_replace("-", " ", "$slug"));
        // return $this->redirectToRoute('wild_show', ['slug' => $slugModif]);
        return $this->render('wild/show.html.twig', ['slug' => $slugModif]);

    }
}
