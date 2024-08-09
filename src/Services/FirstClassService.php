<?php

namespace App\Services;

use Psr\Log\LoggerInterface;

class FirstClassService
{

    public  $services=[];
    public  $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger=$logger;
    }

    public function getServices($alias): array
    {
        return $this->services[$alias];
    }

    public function addServices($service,$alias): void
    {
        $this->services[$alias] =$service ;
    }




}