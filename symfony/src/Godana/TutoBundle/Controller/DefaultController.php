<?php

namespace Godana\TutoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GodanaTutoBundle:Default:index.html.twig', array('name' => $name));
    }
}
