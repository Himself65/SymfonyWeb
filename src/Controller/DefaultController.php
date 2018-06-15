<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
<<<<<<< HEAD
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @author Himself65
     * @Route("/")
     */
    public function Index()
    {
        $date = date("Y.m.d");
        return $this->render('main/main.html.twig', array(
            'date' => $date,
        ));
=======

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
>>>>>>> origin/master
    }
}