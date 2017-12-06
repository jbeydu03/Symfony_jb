<?php

namespace JB\PublicBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use JB\PublicBundle\Form\FormulaireContact\ContactFormulaireType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use JB\PublicBundle\Entity\Contact;
use JB\PublicBundle\Entity\User;

class PublicController extends Controller
{
    public function indexAction()
    {
        return $this->render('JBPublicBundle:Public:index.html.twig');
    }
    
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->get('form.factory')->create(ContactFormulaireType::class, $contact);
        
        // Si la requête est en POST
        
        return $this->render('JBPublicBundle:Public:contact.html.twig', array(
            'form' => $form->createView(),
      ));
        
        
    }
}




