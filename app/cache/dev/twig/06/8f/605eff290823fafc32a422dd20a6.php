<?php

/* bccQuizzBundle::layout.html.twig */
class __TwigTemplate_068f605eff290823fafc32a422dd20a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

<<<<<<< HEAD
        $this->parent = $this->env->loadTemplate("::layout.html.twig");
=======
        $this->parent = false;
>>>>>>> b7704d4d5bdb96a86b524ea86bbe73181c538f7c

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
<<<<<<< HEAD
            'bccQuizz_body' => array($this, 'block_bccQuizz_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Quiz - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo " 
  ";
        // line 10
        echo "  <h1>Quiz</h1>
 
  <hr>
 
  ";
        // line 15
        echo "  ";
        $this->displayBlock('bccQuizz_body', $context, $blocks);
        // line 17
        echo " 
";
    }

    // line 15
    public function block_bccQuizz_body($context, array $blocks = array())
    {
        // line 16
        echo "  ";
=======
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
>>>>>>> b7704d4d5bdb96a86b524ea86bbe73181c538f7c
    }

    public function getTemplateName()
    {
        return "bccQuizzBundle::layout.html.twig";
    }

<<<<<<< HEAD
    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 16,  60 => 15,  55 => 17,  52 => 15,  46 => 10,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  81 => 21,  74 => 19,  66 => 16,  62 => 15,  56 => 14,  53 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
=======
    public function getDebugInfo()
    {
        return array (  51 => 10,  48 => 9,  42 => 5,  34 => 9,  27 => 5,  21 => 1,  39 => 6,  36 => 11,  29 => 3,);
>>>>>>> b7704d4d5bdb96a86b524ea86bbe73181c538f7c
    }
}
