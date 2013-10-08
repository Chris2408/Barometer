<?php

/* bccQuizzBundle:Quizz:index.html.twig */
class __TwigTemplate_662c1ea49ab83d2ffac2ef968f63e208 extends Twig_Template
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
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_bccQuizz_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  <h2>Liste des questions</h2>
 
  <ul>
    ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 13
            echo "      <li>
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bcc_quizz_see", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "titre"), "html", null, true);
            echo "</a>
        par ";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "auteur"), "html", null, true);
            echo ",
        le ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "date"), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 19
            echo "      <li>Pas (encore !) de questions</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "  </ul>
 
";
    }

    public function getTemplateName()
    {
        return "bccQuizzBundle:Quizz:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 21,  74 => 19,  66 => 16,  62 => 15,  56 => 14,  53 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
