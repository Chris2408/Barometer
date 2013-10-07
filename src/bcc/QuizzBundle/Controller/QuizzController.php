<?php

namespace bcc\QuizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuizzController extends Controller
{
    public function indexAction()
    {
        return $this->render('bccQuizzBundle:Quizz:index.html.twig');
    }
	
	public function seeAction($id)
  	{
    // Ici, on récupérera l'article correspondant à l'id $id
     
    return $this->render('bccQuizzBundle:Quizz:see.html.twig', array(
      'id' => $id
    ));
  	}
	
	
}