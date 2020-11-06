<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContainershipController extends AbstractController
{
    /**
     * @Route("/containership", name="containership", methods="GET")
     */
    public function GetToutContainership(ContainershipRepository $csr): JsonResponse
    {
        return $this->json($csr->findAll());
    }
}
