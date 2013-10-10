<?php

/* bccQuizzBundle:Quizz:menu.html.twig */
class __TwigTemplate_7fe2a950dd5b1ebf4f0ef25fb8512ea5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h3>Les dernières questions</h3>
 
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liste_articles"]) ? $context["liste_articles"] : $this->getContext($context, "liste_articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 5
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bcc_quizz_see", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "titre"), "html", null, true);
            echo "</a></li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "bccQuizzBundle:Quizz:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  24 => 4,  19 => 1,  125 => 50,  122 => 49,  120 => 48,  117 => 47,  113 => 36,  110 => 35,  103 => 9,  100 => 8,  94 => 6,  88 => 52,  86 => 47,  72 => 35,  59 => 28,  37 => 11,  35 => 8,  23 => 1,  63 => 16,  60 => 15,  55 => 27,  52 => 15,  46 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 6,  81 => 21,  74 => 37,  66 => 32,  62 => 15,  56 => 14,  53 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
