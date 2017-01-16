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
    public function solutionsAction(){

        return $this->render('NGMainBundle::solutions.html.twig');
    }



    public function solutions_webAction(){

        return $this->render('NGMainBundle::solutions_web.html.twig');
    }


     public function solutions_mobilesAction(){

        return $this->render('NGMainBundle::solutions_mobiles.html.twig');
     }



    public function service_audit_conseilAction(){

        return $this->render('NGMainBundle::service_audit_conseil.html.twig');
    }


    public function service_suivi_formationAction(){

        return $this->render('NGMainBundle::service_suivi_formation.html.twig');
    }
}