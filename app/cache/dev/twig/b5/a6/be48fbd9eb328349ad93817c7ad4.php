<?php

/* AcmeBlogBundle::layout.html.twig */
class __TwigTemplate_b5a6be48fbd9eb328349ad93817c7ad4 extends Twig_Template
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
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<!-- app/Resources/views/base.html.twig -->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 31
        echo "           
   
        <link rel=\"shortcut icon\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">

                <div class=\"top\">
                    ";
        // line 42
        $this->displayBlock('navigation', $context, $blocks);
        // line 64
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 67
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 68
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flashbag"), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 74
            echo "                        <div class=\"alert-success alert\">
                            ";
            // line 75
            echo twig_escape_filter($this->env, $this->getContext($context, "flashMessage"), "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 78
        echo "                ";
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 81
        $this->displayBlock('sidebar', $context, $blocks);
        // line 84
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 87
        $this->displayBlock('footer', $context, $blocks);
        // line 90
        echo "            </div>
        </section>

        ";
        // line 93
        $this->displayBlock('javascripts', $context, $blocks);
        // line 94
        echo "    </body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
             <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
             <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/custom.js"), "html", null, true);
        echo "\"></script>

         
                     
            ";
        // line 23
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bbfdbe2_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbfdbe2_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bbfdbe2_part_1_blog_1.css");
            // line 24
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
            // asset "bbfdbe2_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbfdbe2_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bbfdbe2_part_1_sidebar_2.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
        } else {
            // asset "bbfdbe2"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bbfdbe2") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/bbfdbe2.css");
            echo "                <link href=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\" rel=\"stylesheet\" media=\"screen\" />
            ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "
             ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "6dfb32f_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6dfb32f_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6dfb32f_part_1_custom_1.js");
            // line 28
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "6dfb32f"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_6dfb32f") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/6dfb32f.js");
            echo "                <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, $this->getContext($context, "asset_url"), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 30
        echo "
        ";
    }

    // line 42
    public function block_navigation($context, array $blocks = array())
    {
        // line 43
        echo "
                        <nav>        

                            <ul class=\"navigation\">
                             ";
        // line 47
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 48
            echo "                                Hi ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "user"), "username"), "html", null, true);
            echo "
                                <a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html", null, true);
            echo "\">Logout</a>
                                <li><a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeBlogBundle_blog_new"), "html", null, true);
            echo "\">New Blog</a></li>
                            ";
        } else {
            // line 52
            echo "                                <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login"), "html", null, true);
            echo "\">Login</a>
                                <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeUserBundle_user_register"), "html", null, true);
            echo "\">Signup</a>
                            ";
        }
        // line 54
        echo " 
                                <li><a href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_post"), "html", null, true);
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeBlogBundle_about"), "html", null, true);
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("AcmeBlogBundle_contact"), "html", null, true);
        echo "\">Contact</a></li>
                                
                            </ul>

                                
                        </nav>
                    ";
    }

    // line 67
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">symblog</a>";
    }

    // line 68
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"#\">creating a blog in Symfony2</a>";
    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
    }

    // line 81
    public function block_sidebar($context, array $blocks = array())
    {
        // line 82
        echo "                    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('routing')->getUrl("AcmeBlogBundle_page_sidebar"), array());
        // line 83
        echo "                ";
    }

    // line 87
    public function block_footer($context, array $blocks = array())
    {
        // line 88
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/jitendrathakur\">Jitendra Thakur</a>
                ";
    }

    // line 93
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 93,  294 => 88,  291 => 87,  287 => 83,  284 => 82,  281 => 81,  276 => 78,  270 => 68,  264 => 67,  253 => 57,  249 => 56,  245 => 55,  242 => 54,  237 => 53,  232 => 52,  227 => 50,  223 => 49,  218 => 48,  216 => 47,  210 => 43,  207 => 42,  202 => 30,  188 => 28,  184 => 27,  181 => 26,  161 => 24,  157 => 23,  150 => 19,  145 => 17,  141 => 16,  137 => 15,  133 => 13,  130 => 12,  124 => 8,  119 => 94,  117 => 93,  112 => 90,  110 => 87,  105 => 84,  103 => 81,  99 => 79,  96 => 78,  87 => 75,  84 => 74,  80 => 73,  72 => 68,  68 => 67,  63 => 64,  61 => 42,  49 => 33,  45 => 31,  43 => 12,  36 => 8,  94 => 28,  83 => 22,  77 => 21,  71 => 20,  64 => 16,  60 => 15,  55 => 13,  47 => 10,  40 => 8,  37 => 7,  31 => 6,  28 => 2,);
    }
}
