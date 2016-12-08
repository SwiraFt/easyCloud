<?php
namespace EC\easyCloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class inscriptionController extends Controller
{
    public function indexAction()
    {
        return $this->render('ECeasyCloudBundle:Default:inscription.html.twig');
    }
}
