<?php

namespace App\Factory;

use App\Services\CustomService;
use Psr\Log\LoggerInterface;

class CustomServiceFactory implements InterfaceCustomServiceFactory
{
    public static function createNewCustomServices(LoggerInterface $logger)
    {
        return new CustomService($logger);
    }

}