<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 26/04/18
 * Time: 07:32
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Article;
use AppBundle\Entity\ArticleCategory;
use AppBundle\Entity\categories;
use AppBundle\Entity\Comments;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
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
     * @return \Symfony\Component\HttpFoundation\Response
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

    ///*** Partie articles ***///

    /**
     * @Route("/article",  name="dash_article")
     */
    public function ArticleDash(){
        $articles = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();
        $categories = $this
            ->getDoctrine()
            ->getRepository(categories::class)
            ->findAll();
        $articleCategories = $this
            ->getDoctrine()
            ->getRepository(ArticleCategory::class)
            ->findAll();

        return $this->render("dashboard/article/index.html.twig", [
            "articles" => $articles,
            "categories" => $categories,
            "articleCategories" => $articleCategories,
        ]);
    }

    /**
     * @Route("/article/new", name="new_article")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function NewArticleDash(Request $request){
        $article = new Article();
        $articleCategory = new ArticleCategory();
        $form = $this->createForm('AppBundle\Form\ArticleForm', $article);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->getDoctrine()->getManager()->flush();
            $file = $article->getImageFile();

            $fileName = md5(uniqid()) . '.' . $file->guessExtension();

            $file->move(
                __DIR__ . '/../../../web/uploads/article',
                $fileName
            );
            $article->setImage($fileName);
            $article->setDescription($article->getDescription());
            $article->setContenu($article->getContenu());
            $article->setTitre($article->getTitre());

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('dash_article');
        }

        return $this->render("dashboard/article/new.html.twig", [
            "article" => $article,
            "form" => $form->createView(),
        ]);
    }

    /**
     * @Route("/article/edit/{id}", name="edit_article")
     * @param Article $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function EditArticleDash(Article $id, Request $request){
        $article = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->getArticleByIdEdit($id);

        $deleteForm = $this->createDeleteForm($article);
        $editForm = $this->createForm('AppBundle\Form\ArticleForm', $article);
        $editForm->handleRequest($request);

        if($editForm->isSubmitted() && $editForm->isValid()){
            $this->getDoctrine()->getManager()->flush();
            $file = $article->getImageFile();

            $fileName = md5(uniqid()) . '.' . $file->guessExtension();

            $file->move(
                __DIR__ . '/../../../web/uploads/article',
                $fileName
            );
            $article->setImage($fileName);
            $article->setDescription($article->getDescription());
            $article->setContenu($article->getContenu());
            $article->setTitre($article->getTitre());

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('edit_article', array('id' => $article->getId()));

        }

        return $this->render("dashboard/article/edit.html.twig", [
            'article' => $article,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ]);
    }

    /**
     * Deletes an article entity.
     *
     * @Route("/{id}", name="article_delete")
     * @Method("DELETE")
     * @param Request $request
     * @param Article $article
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, Article $article)
    {
        $form = $this->createDeleteForm($article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($article);
            $em->flush();
        }

        return $this->redirectToRoute('categories');
    }

    /**
     * Creates a form to delete a category entity.
     *
     * @param Article $article
     * @return \Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm(Article $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('article_delete', array('id' => $article->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }

    /**
     * @Route("/article/published", name="article_published")
     *
     */
    public function GetArticlesPublished(){
        $articles = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->getArticles();
        $categories = $this
            ->getDoctrine()
            ->getRepository(categories::class)
            ->findAll();
        $articleCategories = $this
            ->getDoctrine()
            ->getRepository(ArticleCategory::class)
            ->findAll();

        return $this->render('dashboard/article/index.html.twig', [
            "articles" => $articles,
            "categories" => $categories,
            "articleCategories" => $articleCategories,
        ]);
    }

    /**
     * @Route("/article/draft", name="article_draft")
     *
     */
    public function GetArticlesDraft(){
        $articles = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->getDraftArticles();

        $categories = $this
            ->getDoctrine()
            ->getRepository(categories::class)
            ->findAll();

        $articleCategories = $this
            ->getDoctrine()
            ->getRepository(ArticleCategory::class)
            ->findAll();

        return $this->render('dashboard/article/index.html.twig', [
            "articles" => $articles,
            "categories" => $categories,
            "articleCategories" => $articleCategories,
        ]);
    }

    /**
     * @Route("/article/category/{id}", name="article_category")
     * @param categories $id
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function GetArticleByCategory(categories $id){
        $articles = $this
            ->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        $categories = $this
            ->getDoctrine()
            ->getRepository(categories::class)
            ->findAll();

        $articleCategories = $this
            ->getDoctrine()
            ->getRepository(ArticleCategory::class)
            ->getArticleCategoryById($id);

        return $this->render('dashboard/article/index.html.twig', [
            "articles" => $articles,
            "categories" => $categories,
            "articleCategories" => $articleCategories,
        ]);
    }




    ///*** Fin de partie articles ***///

    ///*** Partie commentaires ***///

    /**
     * @Route("/commentaire", name="dash_commentaire")
     */
    public function CommentaireDash(){
        $comments = $this
            ->getDoctrine()
            ->getRepository(Comments::class)
            ->getDashComments();

        return $this->render("dashboard/commentaire/index.html.twig", [
            "comments" => $comments,
        ]);
    }

    /**
     * @Route("/validate/{id}", name="comment_validate")
     */
    public function CommentaireOk($id){
        $em = $this->getDoctrine()->getManager();


        $comment = $this->getDoctrine()->getRepository(Comments::class)->find($id);
        $comment->setIsActive(1);
        $em->persist($comment);
        $em->flush();

        $comments = $this->getDoctrine()->getRepository(Comments::class)->getDashComments();


        return $this->render("dashboard/commentaire/index.html.twig", [
            "comments" => $comments,
        ]);
    }

    ///*** Fin de partie commentaires ***///


    ///*** Partie utilisateurs ***///
    /**
     * @Route("/utilisateur", name="dash_utilisateur")
     */
    public function UtilisateurDash(){
        return $this->render("dashboard/user/index.html.twig");
    }

    ///*** Fin de partie utilisateurs ***///


    ///*** Partie erreurs ***///
    /**
     * @Route("/error", name="dash_error")
     */
    public function ErrorDash(){
        return $this->render("dashboard/error/index.html.twig");
    }


    ///*** Fin de partie erreurs ***///
}