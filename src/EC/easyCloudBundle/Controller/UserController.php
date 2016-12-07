<?php
namespace EC\easyCloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use EC\easyCloudBundle\Entity\User;
use \DateTime;

class UserController extends Controller
{
  public function AjoutUtilisateurAction(Request $request){

    $requete = $request->request->all();

    //return new Response ('NB param: ' .count($requete). ' '. $request);

    $User= new User();
    $User->setPseudo($requete['pseudo']);
    $User->setPass($requete['pass']);
    $User->setDerniereCo(DateTime::createFromFormat('j-M-Y', date('j-M-Y')));

    $em = $this->getDoctrine()->getManager();
    $em->persist($User);
    $em->flush();

    return new Response('L\'utilisateur à été enregistré avec l\'id : '. $User->getId());

  /*  $param = $request->request->all();

    $User = new User();
    $User->setPseudo($param['inputUserName']);
    $User->setPass($param['inputPassword']);


    $User->setDerniereCo(DateTime::createFromFormat('j-M-Y', '15-Feb-2009'));

    $em = $this->getDoctrine()->getManager();

    $em->persist($User);

    $em->flush();

    */


  }

}
 ?>
