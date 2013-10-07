<?php

namespace bcc\QuizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuizzController extends Controller
{
    public function indexAction()
    {
        return $this->render('bccQuizzBundle:Default:index.html.twig');
    }
	
	public function voirAction($id)
  	{
    // Ici, on récupérera l'article correspondant à l'id $id
     
    return $this->render('bccQuizzBundle:Quizz:see.html.twig', array(
      'id' => $id
    ));
  	}
}