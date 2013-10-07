<?php

namespace bcc\QuizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('bccQuizzBundle:Default:index.html.twig', array('name' => $name));
    }
	
	public function voirAction($id)
  	{
    // Ici, on récupérera l'article correspondant à l'id $id
     
    return $this->render('bccQuizzBundle:Quizz:see.html.twig', array(
      'id' => $id
    ));
  	}
}
