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
	
	 public function addAction()
  {
    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :
     
    if( $this->get('request')->getMethod() == 'POST' )
    {
      // Ici, on s'occupera de la création et de la gestion du formulaire
       
      $this->get('session')->getFlashBag()->add('notice', 'Question is save');
     
      // Puis on redirige vers la page de visualisation de cet article
      return $this->redirect( $this->generateUrl('bcc_quizz_voir', array('id' => 5)) );
    }
 
    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('bccQuizzBundle:Quizz:add.html.twig');
  }
   
  public function modifieAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id
 
    // Ici, on s'occupera de la création et de la gestion du formulaire
 
    return $this->render('bccQuizzBundle:Quizz:modifie.html.twig', array(
      'id' => $id
    ));
  }
 
  public function deleteAction($id)
  {
    // Ici, on récupérera l'article correspondant à $id
 
    // Ici, on gérera la suppression de l'article en question
 
    return $this->render('bccQuizzBundle:Quizz:delete.html.twig', array(
      'id' => $id
    ));
  }
}