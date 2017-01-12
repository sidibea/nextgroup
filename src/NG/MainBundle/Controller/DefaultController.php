<?php

namespace NG\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NGMainBundle:Default:index.html.twig');
    }
}
