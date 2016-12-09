<?php

namespace Tmr\JobeetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TmrJobeetBundle:Default:index.html.twig');
    }
}
