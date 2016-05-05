<?php
namespace Fitbit\FitappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FitbitFitappBundle:Default:index.html.twig');
    }
}
