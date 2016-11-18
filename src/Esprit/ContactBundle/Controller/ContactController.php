<?php

namespace Esprit\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function contacterAction()
    {
        return $this->render('EspritContactBundle:Contact:Contact.html.twig', array());
    }
}
