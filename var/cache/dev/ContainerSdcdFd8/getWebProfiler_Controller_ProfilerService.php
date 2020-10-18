<?php

namespace ContainerSdcdFd8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getWebProfiler_Controller_ProfilerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'web_profiler.controller.profiler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/web-profiler-bundle/Controller/ProfilerController.php';

        return $container->services['web_profiler.controller.profiler'] = new \Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController(($container->services['router'] ?? $container->getRouterService()), ($container->services['profiler'] ?? $container->getProfilerService()), ($container->services['twig'] ?? $container->getTwigService()), $container->parameters['data_collector.templates'], ($container->privates['web_profiler.csp.handler'] ?? $container->getWebProfiler_Csp_HandlerService()), \dirname(__DIR__, 4));
    }
}
