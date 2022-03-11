<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class BaseRoutesController extends AbstractController
{
    public function game()
    {
        return $this->render("webs/game.html.twig");
    }
}