<?php

namespace Nva\FontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DemoController extends Controller
{
    public function indexDemoAction($name)
    {
        return $this->render('NvaFontBundle:Default:index.html.twig', array('name' => $name));
    }
	
}
