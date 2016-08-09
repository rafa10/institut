<?php

namespace InstitutAshariteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{

    public function indexAction()
    {
        return $this->render('InstitutAshariteBundle:Front:index.html.twig');
    }

    public function programmeAction()
    {
        return $this->render('InstitutAshariteBundle:Front:programme.html.twig');
    }

    public function planningAction()
    {
        return $this->render('InstitutAshariteBundle:Front:planning.html.twig');
    }

    public function tarifsAction()
    {
        return $this->render('InstitutAshariteBundle:Front:tarifs.html.twig');
    }

    public function contactAction()
    {
        return $this->render('InstitutAshariteBundle:Front:contact.html.twig');
    }

    public function inscriptionAction()
    {
        return $this->render('InstitutAshariteBundle:Front:inscription.html.twig');
    }

    public function jurisprudenceAction()
    {
        return $this->render('InstitutAshariteBundle:Front:jurisprudence.html.twig');
    }

    public function forumsAction()
    {
        return $this->render('InstitutAshariteBundle:Front:forums.html.twig');
    }

    public function faqAction()
    {
        return $this->render('InstitutAshariteBundle:Front:faq.html.twig');
    }

    public function assistanceAction()
    {
        return $this->render('InstitutAshariteBundle:Front:assistance.html.twig');
    }

}
