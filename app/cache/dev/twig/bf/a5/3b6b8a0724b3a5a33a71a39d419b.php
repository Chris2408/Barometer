<?php

/* bccQuizzBundle:Quizz:modifie.html.twig */
class __TwigTemplate_bfa53b6b8a0724b3a5a33a71a39d419b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("bccQuizzBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'bccQuizz_body' => array($this, 'block_bccQuizz_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "bccQuizzBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Modifier une question - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_bccQuizz_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Modifier une question</h2>
 
  ";
        // line 11
        $this->env->loadTemplate("bccQuizzBundle:Quizz:formulaire.html.twig")->display($context);
        // line 12
        echo " 
  <p>
    Vous éditez une question déjà existante,
    ne le changez pas trop pour éviter
    aux membres de ne pas comprendre
    ce qu'il se passe.
  </p>
 
  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bcc_quizz_see", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
        echo "\" class=\"btn\">
      <i class=\"icon-chevron-left\"></i>
      Retour à liste de questions
    </a>
  </p>
 
";
    }

    public function getTemplateName()
    {
        return "bccQuizzBundle:Quizz:modifie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 21,  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
