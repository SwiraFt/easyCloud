<?php
namespace EC\easyCloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use EC\easyCloudBundle\Entity\User;

class UserController extends Controller
{
  public function AjoutUtilisateurAction($request){
    $user = new User();
    $user->setPseudo($request->getParam('inputUserName'));
    $user->setPass($request->getParam('inputPassword'));
    $user->setDerniereCo(getdate());

    $em = $this->getDoctrine()->getManager();

    $em->persist($user);

    $em->flush();

    return new Response('L\'utilisateur à été enregistré avec l\'id : '. $user->getId());

  }

}
 ?>
