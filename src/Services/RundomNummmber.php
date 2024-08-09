<?php

namespace App\Services;

use Psr\Log\LoggerInterface;

class RundomNummmber
{


    private $logger;

    public function __construct( LoggerInterface $logger )
    {


        $this->logger=$logger;

    }

    public function getNumber()
    {
        $this->logger->info("First Services");

    }


}