<?php

namespace Autourdujeu\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AutourdujeuUserBundle:Default:index.html.twig');
    }
}
