<?php

namespace App\Traits;

use App\Services\ThirdActionService;

trait ThirdActionAware
{

    private function thirdAction(): ThirdActionService
    {

        return $this->container->get(__CLASS__."::".__FUNCTION__);

    }

}