<?php

namespace Parsec\Kernel;
use DI\ContainerBuilder;
use Parsec\Controller\ContentController;
use Symfony\Component\HttpFoundation\Request;
use function DI\create;

class Kernel{
    private $dependencyContainer;

    public function __construct(){
        $containerBuilder = new ContainerBuilder();
//        $containerBuilder->useAutowiring(false);
//        $containerBuilder->useAnnotations(false);
        $request = Request::createFromGlobals();
        $containerBuilder->addDefinitions(
            [
                //Request::class => $request,
                ContentController::class => create(ContentController::class),
            ]
        );
        $this->dependencyContainer = $containerBuilder->build();
        dd($this->dependencyContainer->get(ContentController::class));
    }

    public function getContainer(){
        return $this->dependencyContainer;
    }
}