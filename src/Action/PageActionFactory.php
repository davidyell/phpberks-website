<?php

namespace App\Action;

use App\Model\RepositoryManagerInterface;
use Interop\Container\ContainerInterface;
use Zend\Expressive\Template\TemplateRendererInterface;

class PageActionFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $templateRenderer = $container->get(TemplateRendererInterface::class);
        $repositoryManager = $container->get(RepositoryManagerInterface::class);
        $site = $container->get('config')->site;

        return new PageAction($templateRenderer, $repositoryManager, $site);
    }
}
