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
        

        if ($request->isMethod('POST')) 
        {
            $form->handleRequest($request);
            
            if ($form->isValid()) 
            {
               $em = $this->getDoctrine()->getManager();
               $em->persist($contact);
               $em->flush();
            //   $message = \Swift_Message::newInstance()
            //    ->setCharset('utf-8')
            //    ->setContentType('text/html')
            //    ->setSubject('Nouvelle demande de contact')
            //    ->setFrom('jbblanc.pro@gmail.com')
            //    ->setTo('jbblanc.pro@gmail.com')
            //    ->setBody($contact->getMessage(),'text/html');
            //    $this->get('mailer')->send($message);
            // On redirige vers la page de visualisation de l'annonce nouvellement créée 

                $request->getSession()->getFlashBag()->add('notice', 'Merci. Votre message a bien été transmis.');
            // On redirige vers la page de visualisation de l'annonce nouvellement créée
            return $this->redirectToRoute('jb_public_contact');
            }
            
        }
   
        
        return $this->render('JBPublicBundle:Public:contact.html.twig', array(
            'form' => $form->createView(),
      ));
        
        
    }
}




