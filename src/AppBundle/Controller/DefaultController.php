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
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function indexAction()
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

        $articles = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->getArticles();

        return $this->render("default/index.html.twig", [
            'categories' => $categories,
            "articleIndex" => $articleTop,
            "lastArticles" => $lastArticles,
            "articles" => $articles,
        ]);
    }
}
