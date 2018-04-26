<?php
/**
 * Created by PhpStorm.
 * User: fred
 * Date: 24/04/18
 * Time: 10:14
 */

namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class SuiviController
 * @package AppBundle\Controller
 * @Route("suivi")
 */
class SuiviController extends Controller
{
    /**
     * @Route("/", name="suivi")
     *
     */
    public function ShowData(){

        return $this->render('suivi/index.html.twig');
    }


}