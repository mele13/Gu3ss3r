<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LandingRoutesController extends AbstractController
{
    public function landing()
    {
        return $this->render("webs/landing.html.twig");
    }
}