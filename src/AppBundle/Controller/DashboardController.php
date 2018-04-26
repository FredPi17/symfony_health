<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 26/04/18
 * Time: 07:32
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Article;
use AppBundle\Entity\Comments;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class DashboardController
 * @package AppBundle\Controller
 * @Route("Dashboard")
 */
class DashboardController extends Controller
{
    /**
     * @Route("/", name="dash_index")
     * @throws \Doctrine\ORM\ORMException
     */
    public function IndexDash()
    {
        $comments = $this->getDoctrine()->getRepository(Comments::class)->getDashComments();
        $articles = $this->getDoctrine()->getRepository(Article::class)->getDashArticles();
        return $this->render('dashboard/index.html.twig',[
            "comments" => $comments,
            "articles" => $articles,
        ]);
    }

    /**
     * @Route("/article",  name="dash_article")
     */
    public function ArticleDash(){
        return $this->render("dashboard/article/index.html.twig");
    }

    /**
     * @Route("/commentaire", name="dash_commentaire")
     */
    public function CommentaireDash(){
        return $this->render("dashboard/commentaire/index.html.twig");
    }

    /**
     * @Route("/utilisateur", name="dash_utilisateur")
     */
    public function UtilisateurDash(){
        return $this->render("dashboard/user/index.html.twig");
    }

    /**
     * @Route("/error", name="dash_error")
     */
    public function ErrorDash(){
        return $this->render("dashboard/error/index.html.twig");
    }
}