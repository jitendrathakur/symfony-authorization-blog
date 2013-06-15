<?php

/* AcmeBlogBundle:Comment:form.html.twig */
class __TwigTemplate_4977f3e4f408dd2691658e772461bac5 extends Twig_Template
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
        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeBlogBundle_comment_create", array("blog_id" => $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "blog"), "id"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'enctype');
        echo " class=\"blogger\">
    ";
        // line 4
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Submit\">
    </p>
</form>";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Comment:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 4,  57 => 8,  48 => 6,  40 => 4,  22 => 3,  19 => 2,  133 => 43,  115 => 38,  110 => 36,  92 => 21,  87 => 19,  79 => 16,  73 => 11,  69 => 12,  63 => 11,  59 => 9,  41 => 8,  38 => 7,  35 => 6,  29 => 4,);
    }
}
