<?php
namespace EC\easyCloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use EC\easyCloudBundle\Entity\User;
use \DateTime;

class UserController extends Controller
{
  public function ajoutUtilisateurAction(Request $request){

    $requete = $request->request->all();

    if($requete['pseudo'] == NULL)
      return $this->render('ECeasyCloudBundle:Default:inscription.html.twig', array('info' => 'Merci d\'entrer un pseudo.',
                                                                                      'pseudo' => '',
                                                                                       'pass' => '',
                                                                                        'passConf' => '',
                                                                                         'mail' => $requete['mail']));

    if($requete['pass'] == NULL)
      return $this->render('ECeasyCloudBundle:Default:inscription.html.twig', array('info' => 'Merci d\'entrer un mot de passe.',
                                                                                      'pseudo' => $requete['pseudo'],
                                                                                       'pass' => '',
                                                                                        'passConf' => '',
                                                                                         'mail' => $requete['mail'],));

    if($requete['pass'] != $requete['passConf'])
      return $this->render('ECeasyCloudBundle:Default:inscription.html.twig', array('info' => 'Les mots de passes entrés ne corespondent pas.',
                                                                                        'pseudo' => $requete['pseudo'],
                                                                                         'pass' => '',
                                                                                          'passConf' => '',
                                                                                           'mail' => $requete['mail'],));

    if(!strstr($requete['mail'], '@') || !strstr($requete['mail'], '.'))
    return $this->render('ECeasyCloudBundle:Default:inscription.html.twig', array('info' => 'Merci d\'entrer une adresse Email correcte.',
                                                                                      'pseudo' => $requete['pseudo'],
                                                                                       'pass' => $requete['pass'],
                                                                                        'passConf' => $requete['passConf'],
                                                                                         'mail' => '',));


    $userSimilaire = $this->getDoctrine()->getRepository('ECeasyCloudBundle:User')->findByPseudo($requete['pseudo']);

    if($userSimilaire)
    return $this->render('ECeasyCloudBundle:Default:inscription.html.twig', array('info' => 'Le pseudo existe déja.',
                                                                                      'pseudo' => '',
                                                                                       'pass' => $requete['pass'],
                                                                                        'passConf' => $requete['passConf'],
                                                                                         'mail' => $requete['mail'],));

   $userSimilaire = $this->getDoctrine()->getRepository('ECeasyCloudBundle:User')->findByMail($requete['mail']);
   if($userSimilaire)
   return $this->render('ECeasyCloudBundle:Default:inscription.html.twig', array('info' => 'L\'adresse Email que vous avez entré est déja utilisée.',
                                                                                     'pseudo' => '',
                                                                                      'pass' => $requete['pass'],
                                                                                       'passConf' => $requete['passConf'],
                                                                                        'mail' => $requete['mail'],));

    else{
      $User= new User();
      $User->setPseudo($requete['pseudo']);
      $User->setPass(password_hash($requete['pass'], PASSWORD_BCRYPT));
      $User->setMail($requete['mail']);
      $User->setDerniereCo(DateTime::createFromFormat('j-M-Y', date('j-M-Y')));

      $em = $this->getDoctrine()->getManager();
      $em->persist($User);
      $em->flush();


      return $this->render('ECeasyCloudBundle:Default:index.html.twig', array('info' => 'Vous avez bien été enregistré, vous pouvez maintenant vous connecter.'));

    }

  }

  public function authentificationUtilisateurAction (Request $request){

    $requete = $request->request->all();

    $User = $this->getDoctrine()->getRepository('ECeasyCloudBundle:User')->findByPseudo($requete['pseudo']);


    if(password_verify( $requete['pass'] , $User[0]->getPass() )){
      $session = $request->getSession();
      $session->set('pseudo', $User[0]->getPseudo());
      return $this->redirect('/repertoire');
    }

    else{
    return $this->render('ECeasyCloudBundle:Default:index.html.twig', array('info' => 'Aucune combinaison Nom d\'utilisateur/Mot de passe trouvée.'));
    }



  }


}
 ?>
