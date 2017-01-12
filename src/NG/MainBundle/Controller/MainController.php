<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 1/6/17
 * Time: 9:23 PM
 */

namespace NG\MainBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController  extends Controller{

    public function indexAction(){

        return $this->render('NGMainBundle::index.html.twig');
    }

    public function aboutAction(){

        return $this->render('NGMainBundle::about.html.twig');
    }
    public function contactAction(){

        return $this->render('NGMainBundle::contact.html.twig');
    }

}