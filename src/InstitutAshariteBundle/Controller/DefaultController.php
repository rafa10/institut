<?php

namespace InstitutAshariteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{


    public function indexAction()
    {
        return $this->render('InstitutAshariteBundle:Home:index.html.twig');
    }
}
