<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ProjectController extends Controller
{
    /**
     * @Route("/project/list", name="project_list")
     * @Template("AppBundle:Project:list.html.twig")
     */
    public function listAction(Request $request){
        $projects = $this->getDoctrine()->getRepository('AppBundle:Project')->findBy(['enabled' => true]);
        return ['projects' => $projects];
    }


}