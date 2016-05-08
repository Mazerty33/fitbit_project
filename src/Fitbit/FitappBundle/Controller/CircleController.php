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
        $user = $this->getUser();

        $data = $em->getRepository('FitbitFitappBundle:Data')->getLast();
        if($user->getObjectives() !== null){
            $stepsPercentage = $this->getPercentage($data->getSteps(),$user->getObjectives()->getSteps());
            $floorsPercentage = $this->getPercentage($data->getFloors(), $user->getObjectives()->getFloors());
            $activePercentage = $this->getPercentage($data->getActive(), $user->getObjectives()->getActive());

            $circles = array (
                array('name'=>'Steps', 'value'=>$stepsPercentage),
                array('name'=>'Floors', 'value'=>$floorsPercentage),
                array('name'=>'Active', 'value'=>$activePercentage),
            );
        }
        else {
            $circles = array (
                array('name'=>'Steps', 'value'=>0),
                array('name'=>'Floors', 'value'=>0),
                array('name'=>'Active', 'value'=>0),
            );
        }

        return $this->render('FitbitFitappBundle:Circle:circle.html.twig', array('circles'=>$circles));
    }

    public function getPercentage($current, $max){
        $value = ceil($current/$max*100);

        if($value >= 100)
            $value = 100;

        return $value;
    }
}

