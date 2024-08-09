<?php

namespace App\Services;



use App\Traits\FirstActionAware;
use App\Traits\SecondeActionAware;
use App\Traits\ThirdActionAware;
use phpDocumentor\Reflection\Types\Mixed_;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Contracts\Service\ServiceSubscriberInterface;
use Symfony\Contracts\Service\ServiceSubscriberTrait;
use \App\Services\FirstActionService;
use \App\Services\SecondeActionService;



Class CustomLocatorService implements  ServiceSubscriberInterface
{


    use ServiceSubscriberTrait ;



    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }



    public function firstAction(): FirstActionService
    {
        return $this->container->get(FirstActionService::class);
    }

    public function secondeAction(): SecondeActionService
    {
        return $this->container->get(SecondeActionService::class);
    }

    public function thirdAction(): ThirdActionService
    {
        return $this->container->get(ThirdActionService::class);
    }

    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function doAction(string $name)
    {

        switch ($name){

            case FirstActionService::class:
                return $this->firstAction();
            case  SecondeActionService::class :
                return  $this->secondeAction();
            case ThirdActionService::class:
                return $this->thirdAction();
            default:
                throw new \InvalidArgumentException("Unknown service: $name");
        }
    }

    public static function getSubscribedServices(): array
    {
        return [
            FirstActionService::class,
            SecondeActionService::class,
            ThirdActionService::class,
        ];
    }

}