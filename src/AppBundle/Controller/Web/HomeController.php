<?php

namespace AppBundle\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class HomeController
 *
 * @package AppBundle\Controller\Web
 */
class HomeController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        return $this->render(':Home:index.html.twig', array(
            'controller' => 'home'
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function blogAction()
    {
        return $this->render(':Home:blog.html.twig', array(
            'controller' => 'blog'
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function creationsAction()
    {
        return $this->render(':Home:creations.html.twig', array(
            'controller' => 'creations'
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function aboutAction()
    {
        return $this->render(':Home:about.html.twig', array(
            'controller' => 'about'
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function formationAction()
    {
        return $this->render(':Home:formations.html.twig', array(
            'controller' => 'formations'
        ));
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function contactAction()
    {
        return $this->render(':Home:contact.html.twig', array(
            'controller'
        ));
    }
}
