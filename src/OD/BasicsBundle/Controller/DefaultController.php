<?php

namespace OD\BasicsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ODBasicsBundle:Default:index.html.twig');
    }
    
    /**
     * 
     * @Route("/menu")
     */
    public function menuAction()
    {
        $navigation = array(
            array('link' => '#', 'title' => 'Overview'),
            array('link' => '#', 'title' => 'Document storage'),
            array('link' => '#', 'title' => 'History'),
            array('link' => '#', 'title' => 'About')
        );
        return $this->render('ODBasicsBundle:Default:menu-top.html.twig', array('navigation' => $navigation));
    }
}
