<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProgramRepository;
use App\Repository\CategoryRepository;
use App\Entity\Program;

/**
 * @Route("/wild", name="wild_")
 */
class WildController extends AbstractController
{
    /**
    * Correspond à la route /wild et au name "wild_index"
    * Show all rows from Program’s entity
    * @Route("", name="index")
    * @return Response A response instance
    */
    public function index() : Response
    {
        $programs = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findAll();

        if (!$programs) {
            throw $this->createNotFoundException(
                'No program found in program\'s table.'
            );
        }
        return $this->render('wild/index.html.twig', [
            'programs' => $programs,
        ]);
    }
    /**
     * Getting a program with a formatted slug for title
     *
     * @param string $slug The slugger
     * @Route("/show/{slug<^[a-z0-9-]+$>}", defaults={"slug" = null}, name="show")
     * @return Response
     */
    public function show(?string $slug):Response
    {
        if (!$slug) {
            throw $this
                ->createNotFoundException('No slug has been sent to find a program in program\'s table.');
        }
        $slug = preg_replace(
            '/-/',
            ' ', ucwords(trim(strip_tags($slug)), "-")
        );
        $program = $this->getDoctrine()
            ->getRepository(Program::class)
            ->findOneBy(['title' => mb_strtolower($slug)]);
        if (!$program) {
            throw $this->createNotFoundException(
                'No program with '.$slug.' title, found in program\'s table.'
            );
        }

        return $this->render('wild/show.html.twig', [
            'program' => $program,
            'slug'  => $slug,
        ]);
    }

    /**
     * Getting programs within a category
     *
     * @param string $categoryName
     * @param CategoryRepository $categoryRepository
     * @param ProgramRepository $programRepository
     * @return Response
     * @Route("/category/{categoryName<^[a-z0-9-]+$>}", defaults={"categoryName" = null}, name="show_category")
     */
    public function showByCategory(?string $categoryName, CategoryRepository $categoryRepository, ProgramRepository $programRepository):Response
    {
        $category = $categoryRepository->findBy(['name' => mb_strtolower($categoryName)]);
        $programs = $programRepository->findBy(
                ['category' => $category],
                ['id'=>'DESC'],
                3
            );
        if (!$programs) {
            throw $this->createNotFoundException(
                'No program with '.$categoryName.' category, found in program\'s table.'
            );
        }
        return $this->render('wild/category.html.twig', [
            'programs' => $programs,
            'categoryName'  => ucwords($categoryName),
        ]);
    }
}
