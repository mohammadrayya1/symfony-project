<?php

namespace App\Traits;

use App\Services\FirstActionService;

trait FirstActionAware
{

    private  function firstAction(): FirstActionService
    {

        return $this->container->get(__CLASS__."::".__FUNCTION__);

    }

}