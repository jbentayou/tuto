<?php

namespace HelloWBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction($id)
    {
        return $this->render('@HelloW/Default/index.html.twig', array('id' => $id));
    }
}
