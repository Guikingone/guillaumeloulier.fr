<?php

namespace AppBundle\Controller\Web;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class BackController.
 *
 * @Route("/darkzone")
 */
class BackController extends Controller
{
    /**
     * @Route("/", name="back_index")
     * @Template("Back/index.html.twig")
     *
     * @return array
     */
    public function indexAction()
    {
        return array('controller' => 'back');
    }
}
