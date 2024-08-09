<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NewController extends AbstractController
{

    public function index(): Response
    {
        return new Response("Welcome to the first page ");
    }

    public function indexx(Request $request): Response
    {
        return new Response(sprintf("Welcom %s",$request->get('name')));
    }

    public function save(Request $request): Response
    {
        return new Response(sprintf("Welcom %s",$request->get('name')));
    }

    public function show(Request $request)
    {

        return $this->render('trainee/showProduct.html.twig',[
            'products'=>"products"
        ]);

    }
}
