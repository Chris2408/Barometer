<?php

namespace bcc\QuizzBundle\Controller;

// Pensez à rajouter ce use pour l'exception qu'on utilise
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
// Plus besoin de rajouter le use de l'exception dans ce cas
// Mais par contre il faut le use pour les annotations du bundle :
//use JMS\SecurityExtraBundle\Annotation\Secure;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class QuizzController extends Controller
{
    public function indexAction()
    {
    	
		// Les articles :
  $questions = array(
    array(
      'titre'   => 'Comment vous senter-vous ?',
      'id'      => 1,
      'auteur'  => 'Dr. X',
      'contenu' => 'Super bien',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Quel est votre état mental ?',
      'id'      => 2,
      'auteur' => 'Dr. Y',
      'contenu' => 'Fatigué',
      'date'    => new \Datetime()),
    array(
      'titre'   => 'Comment persevez-vous votre journée ?',
      'id'      => 3, 
      'auteur' => 'Dr. Z',
      'contenu' => 'triste',
      'date'    => new \Datetime())
  );
  
        // Dans l'action indexAction() :
return $this->render('bccQuizzBundle:Quizz:index.html.twig', array(
  'questions' => $questions
));
    }
	
	public function seeAction($id)
  	{
  		$question = array(
    'id'      => 1,
    'titre'   => 'Ca va ?',
    'auteur'  => 'chris',
    'contenu' => 'Ce weekend était trop bien. Blabla…',
    'date'    => new \Datetime()
  );
		
    // Ici, on récupérera l'article correspondant à l'id $id
     
    return $this->render('bccQuizzBundle:Quizz:see.html.twig', array(
      'question' => $question
    ));
  	}
	
	//**
    // * @Secure(roles="ROLE_AUTEUR")
    // */
	 public function addAction()
  {
  	// On teste que l'utilisateur dispose bien du rôle ROLE_AUTEUR
    if (!$this->get('security.context')->isGranted('ROLE_AUTEUR')) {
      // Sinon on déclenche une exception « Accès interdit »
      throw new AccessDeniedHttpException('Cet accès est limité aux auteurs des questions uniquement !');
    }
	
  	$question = array(
      'id'      => 1,
      'titre'   => 'Ca-t-il bien ?',
      'auteur'  => 'Chris2',
      'contenu' => 'Ce weekend était trop bien2. Blabla…',
      'date'    => new \Datetime()
    );
	
    // La gestion d'un formulaire est particulière, mais l'idée est la suivante :
     
    if( $this->get('request')->getMethod() == 'POST' )
    {
      // Ici, on s'occupera de la création et de la gestion du formulaire
       
      $this->get('session')->getFlashBag()->add('notice', 'Question is save');
     
      // Puis on redirige vers la page de visualisation de cet article
      return $this->redirect( $this->generateUrl('bcc_quizz_see', array('id' => 5)) );
    }
 
    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('bccQuizzBundle:Quizz:add.html.twig', array(
      'question' => $question
    ));
  }
   
  public function modifieAction($id)
  {	
	// Ici, on récupérera l'article correspondant à $id
 
    // Ici, on s'occupera de la création et de la gestion du formulaire
 
    $question = array(
      'id'      => 1,
      'titre'   => 'Ca-t-il bien ?',
      'auteur'  => 'Chris2',
      'contenu' => 'Ce weekend était trop bien2. Blabla…',
      'date'    => new \Datetime()
    );
         
    // Puis modifiez la ligne du render comme ceci, pour prendre en compte l'article :
    return $this->render('bccQuizzBundle:Quizz:modifie.html.twig', array(
      'question' => $question
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
  
  public function menuAction($nombre) // Ici, nouvel argument $nombre, on l'a transmis via le render() depuis la vue
  {
    // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
    // On pourra récupérer $nombre articles depuis la BDD,
    // avec $nombre un paramètre qu'on peut changer lorsqu'on appelle cette action
    $liste = array(
      array('id' => 2, 'titre' => 'question sur la vie'),
      array('id' => 5, 'titre' => 'question sur le psychisme'),
      array('id' => 9, 'titre' => 'question sur la santé')
    );
     
    return $this->render('bccQuizzBundle:Quizz:menu.html.twig', array(
      'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
    ));
  }
}