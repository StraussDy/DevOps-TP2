<?php
// src/Controller/HelloWorld.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloWorld
{
    public function number()
    {
        $number = random_int(0, 1000000);

        return new Response(
            '<html><body>Nombre au hasard: '.$number.'</body></html>'
        );
    }
}
