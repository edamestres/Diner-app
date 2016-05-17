<?php

namespace PlatsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PlatsBundle:Default:index.html.twig');
    }
}
