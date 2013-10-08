<?php

/* ::layout.html.twig */
class __TwigTemplate_1e89b4542495c55c8e1d311f242f4222 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
 
    <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
 
    ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "  </head>
 
  <body>
    <div class=\"container\">
      <div id=\"header\" class=\"hero-unit\">
        <h1>Mon baromètre du bonheur</h1>
        <p>Ce projet est réalisé par Bruno Salemi, Célien Devanthéry et Christophe Nickel.</p>
        <p><a class=\"btn btn-primary btn-large\" href=\"https://docs.google.com/presentation/d/1KTfbk036AbGojFH4TQZX1ecCvSF8DIez9coihZJXa-I/edit#slide=id.p\">
          Baromètre de la Félicité par Philip Koenig »
        </a></p>
      </div>
 
      <div class=\"row\">
        <div id=\"menu\" class=\"span3\">
          <h3>Le quiz</h3>
          <ul class=\"nav nav-pills nav-stacked\">
            <li><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bcc_quizz_homepage"), "html", null, true);
        echo "\">Accueil du quizz</a></li>
            <li><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bcc_quizz_add"), "html", null, true);
        echo "\">Ajouter une question</a></li>
            <li><a href=\"http://localhost/Barometer/web/app_dev.php/login\">Log in</a></li>
          </ul>
                     
          ";
        // line 32
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("bccQuizzBundle:Quizz:menu", array("nombre" => 3)));
        echo "
        </div>
        <div id=\"content\" class=\"span9\">
          ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 37
        echo "        </div>
      </div>
 
      <hr>
 
      <footer>
        <p>septembre - novembre 2013</p>
      </footer>
    </div>
 
  ";
        // line 47
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo " 
  </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "bcc";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    ";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "          ";
    }

    // line 47
    public function block_javascripts($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        // line 49
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 50,  122 => 49,  120 => 48,  117 => 47,  113 => 36,  110 => 35,  103 => 9,  100 => 8,  94 => 6,  88 => 52,  86 => 47,  74 => 37,  72 => 35,  66 => 32,  59 => 28,  55 => 27,  37 => 11,  35 => 8,  30 => 6,  23 => 1,);
    }
}
