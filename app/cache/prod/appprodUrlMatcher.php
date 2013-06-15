<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/css/bbfdbe2')) {
            // _assetic_bbfdbe2
            if ($pathinfo === '/css/bbfdbe2.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bbfdbe2',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bbfdbe2',);
            }

            if (0 === strpos($pathinfo, '/css/bbfdbe2_part_1_')) {
                // _assetic_bbfdbe2_0
                if ($pathinfo === '/css/bbfdbe2_part_1_blog_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bbfdbe2',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bbfdbe2_0',);
                }

                // _assetic_bbfdbe2_1
                if ($pathinfo === '/css/bbfdbe2_part_1_sidebar_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bbfdbe2',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bbfdbe2_1',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/js/6dfb32f')) {
            // _assetic_6dfb32f
            if ($pathinfo === '/js/6dfb32f.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6dfb32f',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_6dfb32f',);
            }

            // _assetic_6dfb32f_0
            if ($pathinfo === '/js/6dfb32f_part_1_custom_1.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '6dfb32f',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_6dfb32f_0',);
            }

        }

        // _post
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not__post;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_post');
            }

            return array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PageController::indexAction',  '_route' => '_post',);
        }
        not__post:

        // AcmeBlogBundle_about
        if ($pathinfo === '/about') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_AcmeBlogBundle_about;
            }

            return array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PageController::aboutAction',  '_route' => 'AcmeBlogBundle_about',);
        }
        not_AcmeBlogBundle_about:

        // AcmeBlogBundle_contact
        if ($pathinfo === '/contact') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_AcmeBlogBundle_contact;
            }

            return array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PageController::contactAction',  '_route' => 'AcmeBlogBundle_contact',);
        }
        not_AcmeBlogBundle_contact:

        // AcmeBlogBundle_blog_show
        if (0 === strpos($pathinfo, '/blog/show') && preg_match('#^/blog/show/(?P<id>\\d+)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_AcmeBlogBundle_blog_show;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'AcmeBlogBundle_blog_show')), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\BlogController::showAction',));
        }
        not_AcmeBlogBundle_blog_show:

        if (0 === strpos($pathinfo, '/comment')) {
            // AcmeBlogBundle_comment_create
            if (preg_match('#^/comment/(?P<blog_id>\\d+)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_AcmeBlogBundle_comment_create;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'AcmeBlogBundle_comment_create')), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\CommentController::createAction',));
            }
            not_AcmeBlogBundle_comment_create:

            // AcmeBlogBundle_comment_new
            if (0 === strpos($pathinfo, '/comment/new') && preg_match('#^/comment/new/(?P<blog_id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_AcmeBlogBundle_comment_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'AcmeBlogBundle_comment_new')), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\CommentController::newAction',));
            }
            not_AcmeBlogBundle_comment_new:

        }

        // AcmeBlogBundle_page_sidebar
        if ($pathinfo === '/page/sidebar') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_AcmeBlogBundle_page_sidebar;
            }

            return array (  '_controller' => 'Acme\\BlogBundle\\Controller\\PageController::sidebarAction',  '_route' => 'AcmeBlogBundle_page_sidebar',);
        }
        not_AcmeBlogBundle_page_sidebar:

        if (0 === strpos($pathinfo, '/user')) {
            // AcmeUserBundle_user_register
            if ($pathinfo === '/user/register') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_AcmeUserBundle_user_register;
                }

                return array (  '_controller' => 'Acme\\UserBundle\\Controller\\UserController::registerAction',  '_route' => 'AcmeUserBundle_user_register',);
            }
            not_AcmeUserBundle_user_register:

            // AcmeUserBundle_user_create
            if ($pathinfo === '/user/create') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_AcmeUserBundle_user_create;
                }

                return array (  '_controller' => 'Acme\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'AcmeUserBundle_user_create',);
            }
            not_AcmeUserBundle_user_create:

        }

        if (0 === strpos($pathinfo, '/blogs')) {
            // AcmeBlogBundle_blog_new
            if ($pathinfo === '/blogs/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_AcmeBlogBundle_blog_new;
                }

                return array (  '_controller' => 'Acme\\BlogBundle\\Controller\\BlogController::newAction',  '_route' => 'AcmeBlogBundle_blog_new',);
            }
            not_AcmeBlogBundle_blog_new:

            // AcmeBlogBundle_blog_delete
            if (0 === strpos($pathinfo, '/blogs/delete') && preg_match('#^/blogs/delete/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_AcmeBlogBundle_blog_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'AcmeBlogBundle_blog_delete')), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\BlogController::deleteAction',));
            }
            not_AcmeBlogBundle_blog_delete:

            // AcmeBlogBundle_blog_edit
            if (0 === strpos($pathinfo, '/blogs/edit') && preg_match('#^/blogs/edit/(?P<id>\\d+)/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_AcmeBlogBundle_blog_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'AcmeBlogBundle_blog_edit')), array (  '_controller' => 'Acme\\BlogBundle\\Controller\\BlogController::editAction',));
            }
            not_AcmeBlogBundle_blog_edit:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Acme\\UserBundle\\Controller\\UserController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'Acme\\UserBundle\\Controller\\UserController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Acme\\UserBundle\\Controller\\UserController::logoutAction',  '_route' => 'logout',);
            }

        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
