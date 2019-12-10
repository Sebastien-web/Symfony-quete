<?php


namespace App\Controller;

use App\Entity\Episode;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProgramRepository;
use App\Repository\CategoryRepository;
use App\Repository\SeasonRepository;
use App\Entity\Program;
use App\Entity\Season;


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
/*        $programNameKebabCases = $programs;
        foreach ($programNameKebabCases as $value) {
            foreach ($value as $name) {
                $programNameKebabCases['title'] = strtolower(str_replace(' ', '', $value['title']));
            }
        }*/
//        var_dump($programNameKebabCases);

/*        $hyphenizedTitles = [];
        foreach ($programs as $program) {
            $hyphenizedTitles[] = strtolower(str_replace(' ', '-', $program->getSeasons()));
        }*/

        return $this->render('wild/index.html.twig', [
            'programs' => $programs,
//          'programNameKebabCases' => $programNameKebabCases
        ]);
    }

    /**
     * Getting a program with a formatted slug for title
     *
     * @param string $slug The slugger
     * @param ProgramRepository $programRepository
     * @return Response
     * @Route("/series/{slug<[a-z0-9-]+>}", defaults={"slug" = null}, name="show")
     */
    public function show(?string $slug, ProgramRepository $programRepository):Response
    {
        if (!$slug) {
            throw $this
                ->createNotFoundException('No slug has been sent to find a program in program\'s table.');
        }
        $slug = preg_replace(
            '/-/',
            ' ', ucwords(trim(strip_tags($slug)), "-")
        );
        $program = $programRepository->findOneBy(['title' => mb_strtolower($slug)]);
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
     * Getting all seasons of a given program
     *
     * @param string $programName
     * @param ProgramRepository $programRepository
     * @return Response
     * @Route("/program/{programName}", defaults={"programName" = null}, name="show_program")
     */
    public function showByProgram(string $programName, ProgramRepository $programRepository)
    {
        $program = $programRepository->findOneBy(['title' => str_replace('-', ' ',$programName)]);
        $seasons = $program->getSeasons();

        return $this->render('wild/program.html.twig', [
            'program' => $program,
            'seasons' => $seasons
        ]);
    }

    /**
     * Getting programs within a category
     *
     * @param string $categoryName
     * @param CategoryRepository $categoryRepository
     * @param ProgramRepository $programRepository
     * @return Response
     * @Route("/category/{categoryName<[a-z0-9-]+>}", defaults={"categoryName" = null}, name="show_category")
     */
    public function showByCategory(?string $categoryName, CategoryRepository $categoryRepository, ProgramRepository $programRepository):Response
    {
        $category = $categoryRepository->findBy(['name' => ucwords(str_replace('-', ' ',$categoryName))]);
        $programs = $programRepository->findBy(
            ['category' => $category],
            ['id' => 'DESC'],
            3
        );
        if (!$programs) {
            throw $this->createNotFoundException(
                'No program with ' . $categoryName . ' category, found in program\'s table.'
            );
        }
        return $this->render('wild/category.html.twig', [
            'programs' => $programs,
            'categoryName' => ucwords($categoryName),
        ]);
    }

    /**
     * Getting program and episodes within an season
     *
     * @param int $seasonId
     * @param SeasonRepository $seasonRepository
     * @return Response
     * @Route("/season/{seasonId<[0-9]+>}", defaults={"id" = null}, name="show_season")
     */
    public function showBySeason(?int $seasonId, SeasonRepository $seasonRepository):Response
    {
        $season = $seasonRepository->findOneBy(['number' => $seasonId]);
        $program = $season->getProgram();
        $episodes = $season->getEpisodes();

        $hyphenizedTitles = [];
        foreach ($episodes as $episode) {
            $hyphenizedTitles[] = strtolower(str_replace(' ', '-', $episode->getTitle()));
        }

        return $this->render('wild/season.html.twig', [
            'season' => $season,
            'program' => $program,
            'episodes'=> $episodes,
            'hyphenizedTitles' => $hyphenizedTitles
        ]);
    }

    /**
     * @Route("/wild/episode/{id}", name="show_episode")
     * @param Episode $episode
     * @return Response
     */
    public function showByEpisode(Episode $episode):Response
    {
        $season = $episode->getSeason();
        $program = $season->getProgram();
        $hyphenizedProgramTitle = strtolower(str_replace(' ', '-', $program->getTitle()));
        return $this->render('wild/episode.html.twig', [
            'episode' => $episode,
            'season' => $season,
            'program' => $program,
            'hyphenizedProgramTitle' => $hyphenizedProgramTitle
        ]);
    }

    /**
     * Shows all categories
     * @Route("/wild/catlist", name="category_list")
     * @param CategoryRepository $categoryRepository
     * @return Response A response instance
     */
    public function categories(CategoryRepository $categoryRepository) : Response
    {
        $categories = $categoryRepository->findAll();

        if (!$categories) {
            throw $this->createNotFoundException(
                'No category found'
            );
        }

        return $this->render('wild/categories.html.twig', [
            'categories' => $categories,
        ]);
    }
}
