<?php

/* AcmeUserBundle::layout.html.twig */
class __TwigTemplate_b0f9aa48fd7b602a31f986a458841598 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "           
   
        <link rel=\"shortcut icon\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 28
        $this->displayBlock('navigation', $context, $blocks);
        // line 48
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 51
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 52
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "            </section>
          

            <div id=\"footer\">
                ";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo "            </div>
        </section>

        ";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    </body>
</html>";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 12
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

        ";
    }

    // line 28
    public function block_navigation($context, array $blocks = array())
    {
        // line 29
        echo "                        <nav>        

                            <ul class=\"navigation\">
                             ";
        // line 32
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 33
            echo "                                Hi ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "
                                <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
            echo "\">Logout</a>
                            ";
        } else {
            // line 36
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
            echo "\">Login</a>
                                <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeUserBundle_user_register"), "html", null, true);
            echo "\">Signup</a>
                            ";
        }
        // line 38
        echo " 
                                <li><a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_post"), "html", null, true);
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeBlogBundle_about"), "html", null, true);
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeBlogBundle_contact"), "html", null, true);
        echo "\">Contact</a></li>
                                
                            </ul>

                                
                        </nav>
                    ";
    }

    // line 51
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">symblog</a>";
    }

    // line 52
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"#\">creating a blog in Symfony2</a>";
    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        // line 63
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/jitendrathakur\">Jitendra Thakur</a>
                ";
    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 68,  199 => 63,  196 => 62,  191 => 57,  185 => 52,  179 => 51,  168 => 41,  164 => 40,  160 => 39,  157 => 38,  152 => 37,  147 => 36,  142 => 34,  137 => 33,  135 => 32,  130 => 29,  127 => 28,  120 => 16,  116 => 15,  112 => 14,  108 => 12,  105 => 11,  99 => 7,  94 => 69,  92 => 68,  87 => 65,  85 => 62,  79 => 58,  77 => 57,  69 => 52,  65 => 51,  60 => 48,  58 => 28,  47 => 20,  43 => 18,  34 => 7,  27 => 2,  41 => 11,  35 => 7,  31 => 5,  28 => 4,);
    }
}
