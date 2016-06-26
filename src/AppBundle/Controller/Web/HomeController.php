<?php

namespace AppBundle\Controller\Web;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="homepage")
     * @Method("GET")
     * @Template("default/index.html.twig")
     */
    public function indexAction(){}

    /**
     * @Route("/about", name="about")
     * @Method("GET")
     * @Template("default/about.html.twig")
     */
    public function aboutAction()
    {

    }
}
