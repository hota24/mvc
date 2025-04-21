<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LuckyControllerTwig extends AbstractController
{
    #[Route('/lucky', 'lucky')]
    public function show(): Response
    {
        $diceNumber = rand(1, 6);
        return $this->render('lucky.html.twig', [ "diceNumber" => $diceNumber]);
    }
}