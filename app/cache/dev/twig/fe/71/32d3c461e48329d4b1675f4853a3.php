<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_fe7132d3c461e48329d4b1675f4853a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAMAAABEpIrGAAABDlBMVEU/Pz////////////////////////////////////////////////////////////////////+qqqr///////////+kpKT///////////////////////////////////+Kior///////////+Ghob///////9kZGT///////////////////////9bW1v///9aWlpZWVn////t7e3////m5ub///9cXFxZWVn////////////////////KysrNzc3///9tbW1WVlZTU1NwcHCnp6dgYGCBgYGZmZl3d3dLS0tMTEyNjY2Tk5NJSUlFRUVERERZWVlCQkJVVVVAQEBCQkJUVFRVVVU/Pz9ERER+LwjMAAAAWHRSTlMAAQIDBQYHCAkLDQ4VFhscHyAiIiMlJjAyNDY3ODk9P0BAREpMTlBdXl9rb3BzdHl6gICChIyPlaOmqKuusLm6v8HFzM3X2tzd4ePn6Onq8vb5+vv9/f3+EYS6xwAAAQFJREFUeNrN0dlSwkAQBdAbA2FTQIIsAmJEA5qIiIoim8oibigI0vz/jygFZEwIw4sP3reeOtVTdRt/G6kwHBYkDvC/EL0HOCBGP4lzwN4UHJGRrMMClOmrzsDH/oYNKBLLc0gA4MwvZtUK6MELiIeDxagvgY4MIdIzxqIVfF6F4WvSSjBpZHyQW6tBO7clIHjRNwO9dDdP5UQWAc9BfWICalSZZzfgBCBsHndNQIEl4o5Wna0s6UYZROcSO3IwMVsZVX9Xfe0CAF7VN+414N7PB68aH7xdxm2+YEXVzmJuLANWVHLbBXvAivqnID0iGqU5IPU0/npMckD49LasyTDlG31Ah7wRFiUBAAAAAElFTkSuQmCC\" alt=\"Routing\" /></span>
    <strong>Routing</strong>
</span>
";
    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  51 => 13,  34 => 5,  31 => 4,  28 => 3,  353 => 121,  344 => 119,  332 => 116,  321 => 112,  318 => 111,  315 => 110,  309 => 108,  306 => 107,  300 => 105,  297 => 104,  291 => 102,  283 => 100,  278 => 98,  274 => 97,  263 => 95,  258 => 94,  224 => 81,  161 => 63,  136 => 48,  125 => 42,  122 => 41,  117 => 39,  112 => 36,  109 => 35,  104 => 32,  85 => 24,  75 => 19,  58 => 14,  49 => 14,  46 => 13,  44 => 10,  27 => 3,  91 => 33,  63 => 18,  385 => 160,  382 => 159,  374 => 157,  367 => 156,  363 => 126,  359 => 153,  357 => 123,  354 => 151,  351 => 120,  349 => 149,  339 => 146,  336 => 145,  330 => 141,  324 => 113,  322 => 138,  317 => 135,  311 => 131,  308 => 130,  303 => 106,  292 => 121,  289 => 120,  286 => 119,  284 => 118,  279 => 115,  277 => 114,  272 => 111,  270 => 110,  265 => 96,  261 => 105,  255 => 93,  249 => 100,  244 => 97,  242 => 96,  237 => 93,  231 => 83,  228 => 88,  225 => 87,  223 => 86,  218 => 83,  212 => 78,  206 => 77,  204 => 76,  199 => 73,  193 => 69,  190 => 76,  187 => 75,  180 => 63,  174 => 65,  171 => 58,  166 => 56,  159 => 53,  151 => 47,  148 => 46,  143 => 51,  140 => 42,  107 => 27,  103 => 25,  100 => 24,  97 => 23,  88 => 25,  82 => 28,  76 => 25,  61 => 15,  39 => 6,  36 => 5,  79 => 21,  72 => 18,  69 => 17,  54 => 22,  47 => 11,  42 => 7,  40 => 11,  37 => 10,  22 => 1,  246 => 32,  164 => 58,  157 => 56,  145 => 52,  139 => 49,  131 => 45,  120 => 40,  115 => 39,  111 => 38,  108 => 37,  106 => 36,  101 => 31,  98 => 30,  92 => 27,  83 => 25,  80 => 27,  74 => 14,  66 => 11,  60 => 6,  55 => 13,  52 => 12,  50 => 14,  41 => 8,  32 => 5,  29 => 6,  409 => 183,  400 => 180,  396 => 179,  393 => 178,  388 => 177,  386 => 176,  378 => 170,  376 => 158,  369 => 165,  362 => 161,  355 => 157,  348 => 153,  341 => 118,  334 => 145,  327 => 114,  312 => 109,  305 => 129,  298 => 125,  293 => 118,  288 => 101,  285 => 115,  276 => 113,  273 => 112,  271 => 111,  262 => 104,  259 => 103,  251 => 101,  248 => 96,  243 => 92,  240 => 92,  235 => 85,  229 => 87,  221 => 85,  219 => 84,  209 => 78,  202 => 77,  195 => 71,  191 => 69,  188 => 68,  185 => 74,  177 => 64,  172 => 62,  168 => 57,  165 => 60,  162 => 54,  156 => 62,  153 => 56,  150 => 55,  147 => 54,  141 => 51,  134 => 47,  130 => 39,  123 => 35,  119 => 40,  116 => 31,  113 => 38,  105 => 34,  102 => 33,  99 => 31,  96 => 31,  90 => 27,  84 => 24,  81 => 23,  73 => 24,  70 => 15,  67 => 20,  64 => 19,  59 => 14,  53 => 12,  45 => 9,  43 => 9,  38 => 7,  35 => 6,  33 => 4,  30 => 3,);
    }
}
