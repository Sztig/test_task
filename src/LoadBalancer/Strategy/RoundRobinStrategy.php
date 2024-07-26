<?php

namespace App\LoadBalancer\Strategy;

use App\LoadBalancer\Host\HostInterface;

class RoundRobinStrategy implements LoadBalancingStrategyInterface
{
    private int $currentHostIndex = 0;

    public function selectHost(array $hosts): HostInterface
    {
        $host = $hosts[$this->currentHostIndex];
        $this->currentHostIndex = ($this->currentHostIndex + 1) % count($hosts);

        return $host;
    }
}
