<?php

namespace App\LoadBalancer\Host;

use Symfony\Component\HttpFoundation\Request;

interface HostInterface
{
    public function getLoad(): float;

    public function handleRequest(Request $request);
}
