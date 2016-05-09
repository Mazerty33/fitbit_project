<?php

namespace Fitbit\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FitbitFitappbundle:Default:index.html.twig');
    }
}
