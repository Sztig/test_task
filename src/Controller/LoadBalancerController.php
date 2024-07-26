<?php

namespace App\Controller;

use App\LoadBalancer\LoadBalancerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LoadBalancerController extends AbstractController
{
    public function __construct(
        private LoadBalancerInterface $loadBalancer
    ) {
    }

    #[Route('/load-balance', name: 'load_balance')]
    public function index(Request $request): Response
    {
        $this->loadBalancer->handleRequest($request);
        $this->loadBalancer->handleRequest($request);
        $this->loadBalancer->handleRequest($request);

        return new Response('Request handled');
    }
}
