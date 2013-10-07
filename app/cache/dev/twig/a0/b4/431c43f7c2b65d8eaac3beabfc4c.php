<?php

/* bccQuizzBundle:Quizz:see.html.twig */
class __TwigTemplate_a0b4431c43f7c2b65d8eaac3beabfc4c extends Twig_Template
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
Here we see the question ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "!
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "bccQuizzBundle:Quizz:see.html.twig";
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
