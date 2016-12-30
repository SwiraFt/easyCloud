<?php

namespace EC\easyCloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RepertoireController extends Controller
{
    public function afficherRepertoireAction()
    {
        return $this->render('ECeasyCloudBundle:User:repertoire.html.twig', array( 'info' => ''));
    }
}
