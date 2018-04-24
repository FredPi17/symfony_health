<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use AppBundle\Entity\categories;
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
        $categories = $this->getDoctrine()
            ->getRepository(categories::class)
            ->findAll();

        $articleTop = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->getIndexedArticle(1);

        $lastArticles = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->getLastArticles();

        return $this->render("default/index.html.twig", [
            'categories' => $categories,
            "articleIndex" => $articleTop,
            "lastArticles" => $lastArticles,
        ]);
    }
}
