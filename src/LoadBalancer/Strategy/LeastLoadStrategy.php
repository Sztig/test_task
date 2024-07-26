<?php

namespace App\LoadBalancer\Strategy;

use App\LoadBalancer\Host\HostInterface;

class LeastLoadStrategy implements LoadBalancingStrategyInterface
{
    public function selectHost(array $hosts): HostInterface
    {
        $selectedHost = null;
        $lowestLoad = PHP_FLOAT_MAX;

        foreach ($hosts as $host) {
            assert($host instanceof HostInterface);
            $load = $host->getLoad();

            if ($load < 0.75) {
                return $host;
            }

            if ($load < $lowestLoad) {
                $selectedHost = $host;
                $lowestLoad = $load;
            }
        }

        return $selectedHost;
    }
}
