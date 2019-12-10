<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\CategoryType;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */
    public function add(Request $request)
    {
        $form = $this->createForm(
            CategoryType::class,
            null,
            ['method' => Request::METHOD_GET]
        );
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $newCategory = $form->getData();
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($newCategory);
            $entityManager->flush();
            return $this->redirectToRoute('wild_index');
        }
        return $this->render('category/add.html.twig', [
            'categoryForm' => $form->createView()
        ]);
    }
}
