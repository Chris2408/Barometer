<?php

/* bccQuizzBundle:Quizz:add.html.twig */
class __TwigTemplate_dcee0c985d34fda7f1525609fec730b5 extends Twig_Template
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
        echo "  Ajouter une question - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_bccQuizz_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Ajouter une question</h2>
 
  ";
        // line 11
        $this->env->loadTemplate("bccQuizzBundle:Quizz:formulaire.html.twig")->display($context);
        // line 12
        echo " 
  <p>
    Vous ajouter une question.
  </p>
 
  <p>
    <a href=\"";
        // line 18
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
        return "bccQuizzBundle:Quizz:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 18,  49 => 12,  47 => 11,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
