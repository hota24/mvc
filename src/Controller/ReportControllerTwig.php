<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ReportControllerTwig extends AbstractController
{
    #[Route('/report', 'report')]
    public function show(): Response
    {
        return $this->render('report.html.twig');
    }
}