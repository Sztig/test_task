<?php

namespace App\LoadBalancer\Strategy;

use App\LoadBalancer\Host\HostInterface;

interface LoadBalancingStrategyInterface
{
    public function selectHost(array $hosts): HostInterface;
}
