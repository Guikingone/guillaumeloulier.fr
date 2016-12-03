<?php

namespace AppBundle\Controller\Web;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

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
