<?php

namespace bcc\QuizzBundle\Controller;

// Attention à bien ajouter ce use en début de contrôleur
use bcc\QuizzBundle\Entity\Article;

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
  		// On récupère le repository
  $repository = $this->getDoctrine()
                     ->getManager()
                     ->getRepository('bccQuizzBundle:Article');
 
  // On récupère l'entité correspondant à l'id $id
  $question = $repository->find($id);
 
  // $article est donc une instance de Sdz\BlogBundle\Entity\Article
 
  // Ou null si aucun article n'a été trouvé avec l'id $id
  if($question === null)
  {
    throw $this->createNotFoundException('Article[id='.$id.'] inexistant.');
  }
     
  return $this->render('bccQuizzBundle:Quizz:see.html.twig', array(
    'question' => $question
  ));
		
		
		
		
		
		/*
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
    ));*/
  	}
	
	//**
    // * @Secure(roles="ROLE_AUTEUR")
    // */
	 public function addAction()
  {
  	$article = new Article;
 
    // J'ai raccourci cette partie, car c'est plus rapide à écrire !
    $form = $this->createFormBuilder($article)
                 ->add('date',        'date')
                 ->add('titre',       'text')
                 ->add('contenu',     'textarea')
                 ->add('auteur',      'text')
                 ->add('publication', 'checkbox')
                 ->getForm();
 
    // On récupère la requête
    $request = $this->get('request');
 
    // On vérifie qu'elle est de type POST
    if ($request->getMethod() == 'POST') {
      // On fait le lien Requête <-> Formulaire
      // À partir de maintenant, la variable $article contient les valeurs entrées dans le formulaire par le visiteur
      $form->bind($request);
 
      // On vérifie que les valeurs entrées sont correctes
      // (Nous verrons la validation des objets en détail dans le prochain chapitre)
      if ($form->isValid()) {
        // On l'enregistre notre objet $article dans la base de données
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();
 
        // On redirige vers la page de visualisation de l'article nouvellement créé
        return $this->redirect($this->generateUrl('bcc_quizz_see', array('id' => $article->getId())));
      }
    }
 
    // À ce stade :
    // - Soit la requête est de type GET, donc le visiteur vient d'arriver sur la page et veut voir le formulaire
    // - Soit la requête est de type POST, mais le formulaire n'est pas valide, donc on l'affiche de nouveau
 
    return $this->render('bccQuizzBundle:Quizz:add.html.twig', array(
      'form' => $form->createView(),
    ));
	
	
  	/*
	// On crée un objet Article
  $article = new Article();
 
  // On crée le FormBuilder grâce à la méthode du contrôleur
  $formBuilder = $this->createFormBuilder($article);
 
  // On ajoute les champs de l'entité que l'on veut à notre formulaire
  $formBuilder
    ->add('date',        'date')
    ->add('titre',       'text')
    ->add('contenu',     'textarea')
    ->add('auteur',      'text')
    ->add('publication', 'checkbox');
  // Pour l'instant, pas de commentaires, catégories, etc., on les gérera plus tard
 
  // À partir du formBuilder, on génère le formulaire
  $form = $formBuilder->getForm();
 
  // On passe la méthode createView() du formulaire à la vue afin qu'elle puisse afficher le formulaire toute seule
  return $this->render('bccQuizzBundle:Quizz:add.html.twig', array(
    'form' => $form->createView(),
  ));*/
	
	
  	/*
  	// La gestion d'un formulaire est particulière, mais l'idée est la suivante :
   
    if ($this->get('request')->getMethod() == 'POST') {
      // Ici, on s'occupera de la création et de la gestion du formulaire
   
      $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
   
      // Puis on redirige vers la page de visualisation de cet article
      return $this->redirect( $this->generateUrl('sdzblog_voir', array('id' => 1)) );
    }
   
    // Si on n'est pas en POST, alors on affiche le formulaire
    return $this->render('SdzBlogBundle:Blog:ajouter.html.twig');
	*/
	
	
	/*
  	// Création de l'entité
    $question = new Article();
    $question->setTitre('Mon dernier weekend');
    $question->setAuteur('Bibi');
    $question->setContenu("C'était vraiment super et on s'est bien amusé.");
    // On peut ne pas définir ni la date ni la publication,
    // car ces attributs sont définis automatiquement dans le constructeur
 
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();
 
    // Étape 1 : On « persiste » l'entité
    $em->persist($question);
 
    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();
     
    // Reste de la méthode qu'on avait déjà écrit
    if ($this->getRequest()->getMethod() == 'POST') {
      $this->get('session')->getFlashBag()->add('info', 'Article bien enregistré');
      return $this->redirect( $this->generateUrl('bcc_quizz_see', array('id' => $question->getId())) );
    }
 
    return $this->render('bccQuizzBundle:Quizz:add.html.twig');
	*/
	
	
	
	
	
	/*
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
    ));*/
  }
   
  public function modifieAction($id)
  {
  	throw $this->createNotFoundException('Fonction pas encore développée !');	
	// Ici, on récupérera l'article correspondant à $id
 
    // Ici, on s'occupera de la création et de la gestion du formulaire
 /*
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
    ));*/
  }
 
  public function deleteAction($id)
  {
  	throw $this->createNotFoundException('Fonction pas encore développée !');	
	/*
    // Ici, on récupérera l'article correspondant à $id
 
    // Ici, on gérera la suppression de l'article en question
 
    return $this->render('bccQuizzBundle:Quizz:delete.html.twig', array(
      'id' => $id
    ));*/
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