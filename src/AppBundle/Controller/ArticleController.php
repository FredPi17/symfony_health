<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 24/04/18
 * Time: 09:20
 */

namespace AppBundle\Controller;
use AppBundle\Entity\Article;
use AppBundle\Entity\categories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


/**
 * Class ArticleController
 * @Route("/article")
 */
class ArticleController extends Controller
{

    /**
     * @Route("/", name="articles")
     *
     */
    public function getArticles(){
        $articles = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        return $this->render("articles/index.html.twig", [
            'articles' => $articles,
        ]);
    }

    /**
     * @route("/{id}", name="article_id")
     * @param $id
     * @return Response
     */
    public function getArticleByCategory($id)
    {
        $articles = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->getArticlesByCategory($id);

        $category = $this
            ->getDoctrine()
            ->getRepository(categories::class)
            ->getCategoryById($id);

        return $this->render("articles/articleByCategory.html.twig", [
            "articles" => $articles,
            "category" => $category,
        ]);
    }
}