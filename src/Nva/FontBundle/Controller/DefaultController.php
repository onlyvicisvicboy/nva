<?php

namespace Nva\FontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NvaFontBundle:Default:index.html.twig', array());
    }
	public function metroAction($name)
    {
        return $this->render('NvaFontBundle:Default:test.html.twig', array('name' => $name));
    }
	public function welcomeAction()
    { 	
        return $this->render('NvaFontBundle:Default:intro.html.twig', array('name' => 'asdasd'));
    }
	public function homeAction()
    {    	    	
        return $this->render('NvaFontBundle:Default:index.html.twig', array());
    }
}
