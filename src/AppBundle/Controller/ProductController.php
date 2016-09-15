<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProductController extends Controller
{
    /**
     * @Route("/product", name="product")
     */
    public function pageAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('AppBundle::product/page.html.twig');
    }
}
