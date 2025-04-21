<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ApiQuotesController extends AbstractController
{
    #[Route('/api/quotes', 'api-quotes')]
    public function show(): Response
    {
        $number = random_int(0, 100);

        $quotes = [
            ['Be the change that you wish to see in the world.', 'Mahatma Gandhi'],
            ['Always forgive your enemies; nothing annoys them so much.', 'Oscar Wilde'],
            ['I am so clever that sometimes I don\'t understand a single word of what I am saying.', 'Oscar Wilde, The Happy Prince and Other Stories'],
            ['Insanity is doing the same thing, over and over again, but expecting different results.', 'Narcotics Anonymous'],
            ['It is better to be hated for what you are than to be loved for what you are not.', 'Andre Gide, Autumn Leaves']
        ];

        $ran = array_rand($quotes, 1);
        $theQuote = $quotes[$ran];
        $quoteData = [
            'quote' => $theQuote[0],
            'author' => $theQuote[1],
            'dateGenerated' => date("Y/m/d h:m:s", time())
        ];

        $response = new Response();
        $response->setContent(json_encode($quoteData));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}