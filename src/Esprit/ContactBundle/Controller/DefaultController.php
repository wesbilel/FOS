<?php

namespace Esprit\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('EspritContactBundle:Default:index.html.twig');
    }
}
