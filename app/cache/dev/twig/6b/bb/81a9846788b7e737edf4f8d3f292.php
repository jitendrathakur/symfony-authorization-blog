<?php

/* AcmeBlogBundle:Page:sidebar.html.twig */
class __TwigTemplate_6bbb81a9846788b7e737edf4f8d3f292 extends Twig_Template
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
<section class=\"section\">
    <header>
        <h3>Tag Cloud</h3>
    </header>
    <p class=\"tags\">
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "tags"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["tag"] => $context["weight"]) {
            // line 9
            echo "            <span class=\"weight-";
            echo twig_escape_filter($this->env, $this->getContext($context, "weight"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getContext($context, "tag"), "html", null, true);
            echo "</span>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 11
            echo "            <p>There are no tags</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['tag'], $context['weight'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "    </p>
     <header>
        <h3>Latest Comments</h3>
    </header>
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "latestComments"));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 18
            echo "        <article class=\"comment\">
            <header>
                <p class=\"small\"><span class=\"highlight\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "user"), "html", null, true);
            echo "</span> commented on
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeBlogBundle_blog_show", array("id" => $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "blog"), "id"), "slug" => $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "blog"), "slug"))), "html", null, true);
            echo "#comment-";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "id"), "html", null, true);
            echo "\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "comment"), "blog"), "title"), "html", null, true);
            echo "
                    </a>
                    [<em><time datetime=\"";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "created"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "created"), "Y-m-d h:iA"), "html", null, true);
            echo "</time></em>]
                </p>
            </header>
            <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "comment"), "comment"), "html", null, true);
            echo "</p>
            </p>
       
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "        <p>There are no recent comments</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "    
</section>";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Page:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 34,  97 => 32,  79 => 24,  74 => 22,  42 => 11,  32 => 9,  27 => 8,  19 => 2,  299 => 93,  294 => 88,  291 => 87,  287 => 83,  284 => 82,  281 => 81,  276 => 78,  270 => 68,  264 => 67,  253 => 57,  249 => 56,  245 => 55,  242 => 54,  237 => 53,  232 => 52,  227 => 50,  223 => 49,  218 => 48,  216 => 47,  210 => 43,  207 => 42,  202 => 30,  188 => 28,  184 => 27,  181 => 26,  161 => 24,  157 => 23,  150 => 19,  145 => 17,  141 => 16,  137 => 15,  133 => 13,  130 => 12,  124 => 8,  119 => 94,  117 => 93,  112 => 90,  110 => 87,  105 => 84,  103 => 81,  99 => 79,  96 => 78,  87 => 27,  84 => 74,  80 => 73,  72 => 68,  68 => 21,  63 => 64,  61 => 42,  49 => 13,  45 => 31,  43 => 12,  36 => 8,  94 => 28,  83 => 22,  77 => 21,  71 => 20,  64 => 20,  60 => 18,  55 => 17,  47 => 10,  40 => 8,  37 => 7,  31 => 6,  28 => 2,);
    }
}
