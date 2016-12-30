<?php

namespace EC\easyCloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RepertoireController extends Controller
{
    public function afficherRepertoireAction(Request $request)
    {
        $pseudo = $request->getSession()->get('pseudo');
        return $this->render('ECeasyCloudBundle:User:repertoire.html.twig', array( 'info' => 'Bienvenue sur votre répertoire '. $pseudo));
    }
}
