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
use EC\easyCloudBundle\Repository\UserRepository;

class UserController extends Controller
{
  public function AjoutUtilisateurAction(Request $request){

    $requete = $request->request->all();

    //return new Response ('NB param: ' .count($requete). ' '. $request);

    $User= new User();
    $User->setPseudo($requete['pseudo']);
    $User->setPass($requete['pass']);
    $User->setMail($requete['mail']);
    $User->setDerniereCo(DateTime::createFromFormat('j-M-Y', date('j-M-Y')));

    $em = $this->getDoctrine()->getManager();
    $em->persist($User);
    $em->flush();

    return new Response('L\'utilisateur à été enregistré avec l\'id : '. $User->getId());

  }
  public function AuthentificationAction (Request $request){
    $repository = $this
    ->getDoctrine()
    ->getManager()
    ->getRepository('easyCloudBundle:User')
    ;

    $requete = $request->request->all();
    $pseudo->$requete['pseudo'];
    $mdp->$requete['pass'];

    $listUser = $repository->findByPseudoAndPass($pseudo, $pass);
      if($listUser != null){

        session_start();
        $_SESSION['pseudo'] = $pseudo
        $_SESSION['pass'] = $mdp;

        return new Response(
         '<html>
            <head>
                <meta http-equiv="refresh" content="3; url=/authentification" />
            </head>
            <body>
                <p style=align="center">
                Vous avez bien été enregistré, vous aller être redirigé sur la page d\'authentification.
                </p>
            </body>
         </html>'
        );
      }
      else{
        return new Response(
          '<html>
            <head>
              <meta http-equiv="refresh" content="3; url=/inscription" />
              </head>
            <body>
                <p style=align="center">
                Certaines informations sont éronnées, merci de remplir correctement le formulaire.
                </p>
            </body>
          </html>'
        );
      }

  }

  public function DeconnexionAction (Request $request){
    session_start();

    // Suppression des variables de session et de la session
    $_SESSION = array();
    session_destroy();

    // Suppression des cookies de connexion automatique
    setcookie('login', '');
    setcookie('pass_hache', '');
  }

}
 ?>
