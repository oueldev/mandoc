<?php

namespace OD\BasicsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ODBasicsBundle:Default:index.html.twig');
    }
}
