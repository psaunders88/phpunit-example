<?php

/* TestTestBundle:Default:index.html.twig */
class __TwigTemplate_51a1e9c6b72a881c8b01153a87d65dc27a0a71001f0b067a1f295614c194957c extends Twig_Template
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
        echo "<p>Hello!</p>
<p>The sum of the values is: <em>";
        // line 2
        echo twig_escape_filter($this->env, $this->getContext($context, "total"), "html", null, true);
        echo "</em></p>
";
    }

    public function getTemplateName()
    {
        return "TestTestBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 2,  19 => 1,);
    }
}
