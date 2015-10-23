<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProjectController extends Controller
{
    /**
     * @Route("/project/list", name="project_list")
     */
    public function listAction(Request $request){
        $projects = $this->getDoctrine()->getRepository('AppBundle:Project')->findBy(['enabled' => true]);
        return ['projects' => $projects];
    }


}