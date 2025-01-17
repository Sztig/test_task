<?php

namespace App\LoadBalancer;

use Symfony\Component\HttpFoundation\Request;

interface LoadBalancerInterface
{
    public function handleRequest(Request $request): void;
}
