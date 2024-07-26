<?php

namespace App\LoadBalancer;

use App\LoadBalancer\Strategy\LoadBalancingStrategyInterface;
use Symfony\Component\HttpFoundation\Request;

class LoadBalancer implements LoadBalancerInterface
{
    public function __construct(
        private array $hosts,
        private LoadBalancingStrategyInterface $strategy)
    {
    }

    public function handleRequest(Request $request): void
    {
        $host = $this->strategy->selectHost($this->hosts);
        $host->handleRequest($request);
    }
}
