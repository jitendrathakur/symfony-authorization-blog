<?php

/* AcmeBlogBundle:Blog:show.html.twig */
class __TwigTemplate_93f00bca4362ccf8d7391e99d12e4385 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeBlogBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "blogs"), 0), "title"), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
     ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "blogs"));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 9
            echo "
        <article class=\"blog\">
            <div class=\"date\"><time datetime=\"";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "created"), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "created"), "l, F j, Y"), "html", null, true);
            echo "</time>
            <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeBlogBundle_blog_delete", array("id" => $this->getAttribute($this->getContext($context, "blog"), "id"))), "html", null, true);
            echo "\">Delete</a>
            <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeBlogBundle_blog_edit", array("id" => $this->getAttribute($this->getContext($context, "blog"), "id"), "slug" => $this->getAttribute($this->getContext($context, "blog"), "slug"))), "html", null, true);
            echo "\">Edit</a>
            </div>
            <header>
                <h2><a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeBlogBundle_blog_show", array("id" => $this->getAttribute($this->getContext($context, "blog"), "id"), "slug" => $this->getAttribute($this->getContext($context, "blog"), "slug"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "title"), "html", null, true);
            echo "</a></h2>
            </header>

            <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(twig_join_filter(array(0 => "uploads/blogs/", 1 => $this->getAttribute($this->getContext($context, "blog"), "image")))), "html", null, true);
            echo "\" />
            <div class=\"snippet\">
                <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "blog"), "blog", array(0 => 500), "method"), "html", null, true);
            echo "</p>
               
            </div>

            <footer class=\"meta\">
                        
                
            </footer>
        </article>
    

        <section class=\"comments\" id=\"comments\">
            <section class=\"previous-comments\">
                <h3>Comments</h3>

                ";
            // line 36
            $this->env->loadTemplate("AcmeBlogBundle:Comment:index.html.twig")->display(array_merge($context, array("comments" => $this->getContext($context, "comments"))));
            echo " 
               <h3>Add Comment</h3>
            ";
            // line 38
            echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("AcmeBlogBundle_comment_new", array("blog_id" => $this->getAttribute($this->getContext($context, "blog"), "id"))), array());
            echo " 
            </section>
        </section>

      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 43
            echo "          <p>There are no blog entries for symblog</p>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 43,  115 => 38,  110 => 36,  92 => 21,  87 => 19,  79 => 16,  73 => 13,  69 => 12,  63 => 11,  59 => 9,  41 => 8,  38 => 7,  35 => 6,  29 => 4,);
    }
}
