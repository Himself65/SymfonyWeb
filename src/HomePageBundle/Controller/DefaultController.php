<?php

namespace LuoguLite\HomePageBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        $time = date('Y.m.d');
        return new Response(
            '<html><body>Today is ' . $time . '</body></html>'
        );
    }
}
