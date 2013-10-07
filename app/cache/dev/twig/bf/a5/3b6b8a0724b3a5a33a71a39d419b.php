<?php

/* bccQuizzBundle:Quizz:modifie.html.twig */
class __TwigTemplate_bfa53b6b8a0724b3a5a33a71a39d419b extends Twig_Template
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
        echo "<html>
<head>

</head>

<body>
Here we modifie the question ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "!
</body>

</html>
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
        return array (  27 => 7,  19 => 1,);
    }
}
