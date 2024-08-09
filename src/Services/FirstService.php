<?php

namespace App\Services;

use Psr\Log\LoggerInterface;

class FirstService
{

    public $logger;
    public function __construct( LoggerInterface $logger)
    {
        $this->logger=$logger;
    }
}