<?php

namespace AppBundle\Controller\Web;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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
     */
    public function indexAction()
    {
    }
}
