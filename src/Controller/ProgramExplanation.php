<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProgramExplanation extends AbstractController
{
    public function pex()
    {
        return $this->render("webs/pex.html.twig");
    }
}