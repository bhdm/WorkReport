<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TaskController extends Controller
{
    /**
     * @Route("/project/{id}", name="task_list")
     * @Template("AppBundle:Task:list.html.twig")
     */
    public function listAction(Request $request){
//        $projects = $this->getDoctrine()->getRepository('AppBundle:Project')->findBy(['enabled' => true]);
        return [];
    }

}