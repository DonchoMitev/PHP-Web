<?php

namespace SoftUniBlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('security/login.html.twig');
    }
}
