<?php

namespace Fitbit\FitappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints\DateTime;

class GraphController extends Controller
{
    public function graphAction()
    {

        $today = $this->getParameter('today');
        $em = $this->getDoctrine()->getManager();

        $data = $em->getRepository('FitbitFitappBundle:Data')->getOneYear($today);
        return $this->render('FitbitFitappBundle:Graph:graph.html.twig', array('dataList'=>$data));
    }
}

