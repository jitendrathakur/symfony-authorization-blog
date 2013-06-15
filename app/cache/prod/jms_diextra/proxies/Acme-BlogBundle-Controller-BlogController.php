<?php

namespace EnhancedProxy_c7b864ff3a0a19b035af6dad9e233c12d3af5290\__CG__\Acme\BlogBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class BlogController extends \Acme\BlogBundle\Controller\BlogController
{
    private $__CGInterception__loader;

    public function newAction()
    {
        $ref = new \ReflectionMethod('Acme\\BlogBundle\\Controller\\BlogController', 'newAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function editAction($id, $slug)
    {
        $ref = new \ReflectionMethod('Acme\\BlogBundle\\Controller\\BlogController', 'editAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id, $slug));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id, $slug), $interceptors);

        return $invocation->proceed();
    }

    public function deleteAction($id)
    {
        $ref = new \ReflectionMethod('Acme\\BlogBundle\\Controller\\BlogController', 'deleteAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array($id));
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array($id), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}