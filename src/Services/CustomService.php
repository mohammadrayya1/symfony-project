<?php

namespace App\Services;

use Psr\Log\LoggerInterface;

class CustomService
{

     public  $logger;
    public function __construct(LoggerInterface $logger)
    {
        $this->logger=$logger;
    }

    public function getData()
    {

        $this->logger->info("New Custom Services");
        return true;
    }
}