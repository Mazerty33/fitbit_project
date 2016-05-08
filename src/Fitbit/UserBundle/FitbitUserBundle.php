<?php

namespace Fitbit\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class FitbitUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
