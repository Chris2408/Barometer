<?php

/* bccQuizzBundle:Quizz:delete.html.twig */
class __TwigTemplate_d735cd800842201a6d8c18803ab97e69 extends Twig_Template
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
Here we delete the question ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "!
</body>

</html>
";
    }

    public function getTemplateName()
    {
        return "bccQuizzBundle:Quizz:delete.html.twig";
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
