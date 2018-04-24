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
use AppBundle\Entity\Comments;
use Symfony\Component\HttpFoundation\Request;
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

        $categories = $this
            ->getDoctrine()
            ->getRepository(categories::class)
            ->findAll();

        return $this->render("articles/index.html.twig", [
            'articles' => $articles,
            'categories' => $categories,

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

    /**
     * @Route("/show/{id}", name="article_show")
     * @param $id
     * @return Response
     */
    public function showArticleById($id, Request $request){
        $em = $this->getDoctrine()->getManager();

        $newComment = new Comments();
        $form = $this->createForm('AppBundle\Form\CommentsForm', $newComment, array(
            'method' => 'get'
        ));

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $newComment->setArticleId($id);
            $newComment->setContent($newComment->getContent());
            $newComment->setUserId(1);
            $newComment->setUsername('fred');
            $newComment->setIsActive(0);
            $newComment->setDate(new \DateTime());
            $em->persist($newComment);
            $em->flush();

            return $this->redirectToRoute('article_show', array('id' => $id));
        }

        $article = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->getArticleById($id);

        $comments = $this
            ->getDoctrine()
            ->getRepository(Comments::class)
            ->getCommentsByArticle($id);

        $categories = $this
            ->getDoctrine()
            ->getRepository(categories::class)
            ->findAll();

        return $this->render("articles/show.html.twig", [
            "article" => $article,
            "comments" => $comments,
            "form" => $form->createView(),
            "categories" => $categories,
        ]);
    }
}