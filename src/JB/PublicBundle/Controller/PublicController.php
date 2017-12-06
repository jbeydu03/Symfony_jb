<?php

namespace JB\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('JBPublicBundle:Public:index.html.twig');
    }
    
    public function contactAction()
    {
        return $this->render('JBPublicBundle:Public:contact.html.twig');
    }
}
