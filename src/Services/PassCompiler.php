<?php

namespace App\Services;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class PassCompiler implements CompilerPassInterface
{

    public function process(ContainerBuilder $container)
    {

        $container->getDefinition(RundomNummmber::class)->setPublic(true);

            $firstClassService=$container->findDefinition(FirstClassService::class);
            $services=$container->findTaggedServiceIds('app.Resha');


            foreach ($services as $id => $service){
                foreach ($service as $attribute){
                    $firstClassService->addMethodCall('addServices',[new Reference($id),$attribute['alias']]);
                }

            }


    }
}