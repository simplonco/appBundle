<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/forum", name="forum")
     */
    public function forumAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/forum.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/categorie/{laCategorieDemandee}", requirements={"laCategorieDemandee" = "\d+"},  name="categorie")
     */
    public function categorieAction(Request $request, $laCategorieDemandee)
    {

        // replace this example code with whatever you need
        return $this->render('AppBundle:forum:categorie.html.twig', array( 'cat' => $laCategorieDemandee)
        );
    }






    /**
     * @Route("/categorie/{cat}", name="categorie2")
     */
    public function categorie2Action(Request $request, $cat)
    {
        // replace this example code with whatever you need
        return $this->render('forum/categorie.html.twig', array( 'cat' => $cat)
        );
    }








    /**
     * @Route("/exemple/{celaEstVariable}", name="exemple")
     */
    public function exempleAction(Request $request, $celaEstVariable)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle:forum:exemple.html.twig', array( 'variablePasserAtwig' => $celaEstVariable)
        );
    }
















}
