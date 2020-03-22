<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     * @return Response
     */
    public function homepage()
    {
        return new Response('Hello world haha');
    }

    /**
     * @Route("/questions/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            "This shows the question '%s'!",
            ucwords(str_replace('-', ' ', $slug))
        ));
    }
}