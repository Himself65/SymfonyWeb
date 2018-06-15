<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function helloWorld()
    {
        return new Response(
            '<html>
<body>
<p>Hello,world</p>
</body>
</html>'
        );
    }
}