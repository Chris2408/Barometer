<?php

namespace EnhancedProxy_04e6f6a43a7730ad304748361c6e8fbfe1d158c0\__CG__\bcc\QuizzBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class QuizzController extends \bcc\QuizzBundle\Controller\QuizzController
{
    private $__CGInterception__loader;

    public function addAction()
    {
        $ref = new \ReflectionMethod('bcc\\QuizzBundle\\Controller\\QuizzController', 'addAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}