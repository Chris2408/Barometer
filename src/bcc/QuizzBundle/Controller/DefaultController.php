<?php

namespace bcc\QuizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('bccQuizzBundle:Default:index.html.twig', array('name' => $name));
    }
}
