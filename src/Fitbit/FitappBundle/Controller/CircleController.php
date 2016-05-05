<?php

namespace Fitbit\FitappBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Fitbit\FitappBundle\Entity\Data;

class CircleController extends Controller
{
    public function circleAction()
    {
        $em = $this->getDoctrine()->getManager();

        $data = $em->getRepository('FitbitFitappBundle:Data')->getLast();
        $circles = array (
            array('name'=>'steps', 'value'=>$data->getSteps(), 'color'=>'green'),
            array('name'=>'calories', 'value'=>$data->getCalories(), 'color'=>'red'),
            array('name'=>'weight', 'value'=>$data->getWeight(), 'color'=>'green'),
        );
        return $this->render('FitbitFitappBundle:Circle:circle.html.twig', array('circles'=>$circles));
    }
}

