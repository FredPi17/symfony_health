<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 23/04/18
 * Time: 17:14
 */

namespace AppBundle\Controller;
use AppBundle\Entity\categories;
use AppBundle\Repository\categoriesRepository;
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


}