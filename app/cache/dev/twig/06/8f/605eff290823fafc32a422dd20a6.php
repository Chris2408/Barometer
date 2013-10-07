<?php

/* bccQuizzBundle::layout.html.twig */
class __TwigTemplate_068f605eff290823fafc32a422dd20a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  </head>
  <body>
 
    ";
        // line 9
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo " 
  </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "bccQuizz";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "    ";
    }

    public function getTemplateName()
    {
        return "bccQuizzBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  51 => 10,  48 => 9,  42 => 5,  34 => 9,  27 => 5,  21 => 1,  39 => 6,  36 => 11,  29 => 3,);
    }
}
