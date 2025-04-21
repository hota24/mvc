<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApiControllerTwig extends AbstractController
{
    #[Route('/api', 'api')]
    public function show(): Response
    {
        return $this->render(view: 'api.html.twig');
    }
}