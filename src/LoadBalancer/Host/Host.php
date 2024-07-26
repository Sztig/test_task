<?php

namespace App\LoadBalancer\Host;

use Symfony\Component\HttpFoundation\Request;

class Host implements HostInterface
{
    public function getLoad(): float
    {
        return random_int(0, 100) / 100;
    }

    public function handleRequest(Request $request): void
    {
    }
}
