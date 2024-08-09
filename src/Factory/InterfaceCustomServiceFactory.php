<?php

namespace App\Factory;

use Psr\Log\LoggerInterface;

interface InterfaceCustomServiceFactory
{
    public static function createNewCustomServices(LoggerInterface $logger);
}