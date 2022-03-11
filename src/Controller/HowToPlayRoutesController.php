<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HowToPlayRoutesController extends AbstractController
{
    public function how_to_play()
    {
        return $this->render("webs/htp.html.twig");
    }
}