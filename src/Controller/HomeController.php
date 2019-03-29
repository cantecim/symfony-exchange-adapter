<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class HomeController
{

    /**
     * @return Response
     */
    public function index()
    {
        return new Response(
            '<html><body>Home</body></html>'
        );
    }

}