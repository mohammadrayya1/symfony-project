<?php

namespace App\Traits;

use App\Services\SecondeActionService;

trait SecondeActionAware
{

    private function secondeAction(): SecondeActionService
    {

        return $this->container->get(__CLASS__."::".__FUNCTION__);

    }
}