<?php

namespace AppBundle\Controller\Web;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
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
     * @Route("/blog", name="home_blog")
     * @Template("Home/blog.html.twig")
     * @Method("GET")
     *
     * @return array
     */
    public function blogAction()
    {
        return array('controller' => 'blog');
    }

    /**
     * @Route("/creations", name="home_creations")
     * @Template("Home/creations.html.twig")
     * @Method("GET")
     *
     * @return array
     */
    public function creationsAction()
    {
        return array('controller' => 'creations');
    }

    /**
     * @Route("/about", name="home_about")
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
     * @Route("/formations", name="home_formations")
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
     * @Route("/contact", name="home_contact")
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
