<?php

namespace InstitutAshariteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    public function indexAction()
    {
        return $this->render('InstitutAshariteBundle:Home:index.html.twig');
    }

    public function programmeAction()
    {
        return $this->render('InstitutAshariteBundle:Home:programme.html.twig');
    }

    public function planningAction()
    {
        return $this->render('InstitutAshariteBundle:Home:planning.html.twig');
    }

    public function tarifsAction()
    {
        return $this->render('InstitutAshariteBundle:Home:tarifs.html.twig');
    }

    public function contactAction()
    {
        return $this->render('InstitutAshariteBundle:Home:contact.html.twig');
    }

    public function inscriptionAction()
    {
        return $this->render('InstitutAshariteBundle:Home:inscription.html.twig');
    }

    public function jurisprudenceAction()
    {
        return $this->render('InstitutAshariteBundle:Home:jurisprudence.html.twig');
    }

    public function forumsAction()
    {
        return $this->render('InstitutAshariteBundle:Home:forums.html.twig');
    }

    public function faqAction()
    {
        return $this->render('InstitutAshariteBundle:Home:faq.html.twig');
    }

    public function assistanceAction()
    {
        return $this->render('InstitutAshariteBundle:Home:assistance.html.twig');
    }

}
