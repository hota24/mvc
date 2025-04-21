<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class AboutControllerTwig extends AbstractController
{
    #[Route('/about', 'about')]
    public function show(): Response
    {
        return $this->render('about.html.twig');
    }
}