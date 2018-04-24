<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 23/04/18
 * Time: 17:14
 */

namespace AppBundle\Controller;
use AppBundle\Entity\Article;
use AppBundle\Entity\categories;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class categoryController
 * @package AppBundle\Controller
 * @Route("category")
 */
class categoryController extends Controller
{

    /**
     * @Route("/", name="categories")
     */
    public function getCategories(){
        $categories = $this->getDoctrine()
            ->getRepository(categories::class)
            ->findAll();



        return $this->render("category/index.html.twig", [
            "categories" => $categories,

        ]);
    }

    /**
     * @Route("/{id}", name="category_id")
     * @param categories $id
     * @return Response
     */
    public function showCategory($id){

        $category = $this->getDoctrine()->getRepository(categories::class)
            ->getCategoryById($id);

        $categories = $this->getDoctrine()->getRepository(categories::class)
            ->findAll();

        return $this->render("category/show.html.twig", [
            "category" => $category,
            'categories' => $categories,
        ]);
    }

    /**
     * @Route("/edit/{id}", name="category_edit")
     * @param categories $category
     * @param Request $request
     * @return Response
     */
    public function editAction(categories $category, Request $request){
        $deleteForm = $this->createDeleteForm($category);
        $editForm = $this->createForm('AppBundle\Form\CategoryForm', $category);
        $editForm->handleRequest($request);

        if($editForm->isSubmitted() && $editForm->isValid()){
            $this->getDoctrine()->getManager()->flush();
            $file = $category->getImageFile();

            $fileName = md5(uniqid()) . '.' . $file->guessExtension();

            $file->move(
                __DIR__ . '/../../../web/uploads/category',
                $fileName
            );
            $category->setImage($fileName);
            $category->setDescriptionLong($category->getDescriptionLong());
            $category->setDescriptionShort($category->getDescriptionShort());
            $category->setNom($category->getNom());

            $em = $this->getDoctrine()->getManager();
            $em->flush();

            return $this->redirectToRoute('category_edit', array('id' => $category->getId()));

        }
        return $this->render('category/edit.html.twig',[
            'category' => $category,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ]);
    }

    /**
     * Deletes a category entity.
     *
     * @Route("/{id}", name="category_delete")
     * @Method("DELETE")
     * @param Request $request
     * @param categories $category
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, categories $category)
    {
        $form = $this->createDeleteForm($category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($category);
            $em->flush();
        }

        return $this->redirectToRoute('categories');
    }

    /**
     * Creates a form to delete a category entity.
     *
     * @param categories $category The article entity
     *
     * @return \Symfony\Component\Form\FormInterface
     */
    private function createDeleteForm(categories $category)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('category_delete', array('id' => $category->getId())))
            ->setMethod('DELETE')
            ->getForm();
    }


}