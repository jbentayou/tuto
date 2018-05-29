<?php

namespace HelloWorldBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($id)
    {
        return $this->render('@HelloWorld/Default/index.html.twig', array('id' => $id));
    }
}
