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
     * @Template("Home/index.html.twig")
     * @Method("GET")
     *
     * @return array
     */
    public function indexAction()
    {
        return array('controller' => 'home');
    }

    /**
     * @Route("/about", name="about")
     * @Template("Home/about.html.twig")
     * @Method("GET")
     *
     * @return array
     */
    public function aboutAction()
    {
        return array('controller' => 'contact');
    }

    /**
     * @Route("/formations", name="formations")
     * @Template("Home/formations.html.twig")
     * @Method("GET")
     *
     * @return array
     */
    public function formationAction()
    {
        return array('controller' => 'formation');
    }

    /**
     * @Route("/contact", name="contact")
     * @Template("Home/contact.html.twig")
     * @Method("GET")
     *
     * @return array
     */
    public function contactAction()
    {
        return array('controller' => 'contact');
    }
}
