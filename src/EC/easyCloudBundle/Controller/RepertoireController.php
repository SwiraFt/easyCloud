<?php

namespace EC\easyCloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\HttpFoundation\Response;


class RepertoireController extends Controller
{
    public function afficherRepertoireAction(Request $request)
    {
        $pseudo = $request->getSession()->get('pseudo');
        if($pseudo == NULL){
          return $this->render('ECeasyCloudBundle:Default:index.html.twig', array('info' => 'Vous devez d\'abord vous connecter.'));
        }
        $cheminDossier = $dossierUtilisateurs = $this->get('kernel')->getRootDir() . '/../web/bundles/repertoires/' . $pseudo;
        $dossier = opendir($cheminDossier);
        $fichiers = array();

        while($fichier = readdir($dossier)){
          if($fichier != "." && $fichier != ".."){
          $nom = $fichier;
          $fichier = array(
            'nom' => $nom,
            'taille' => filesize($cheminDossier . "/" . $nom),
            'date' => date("j-M-Y", filectime($cheminDossier . "/" . $nom))
          );
          array_push($fichiers, $fichier);
          }
        }

        return $this->render('ECeasyCloudBundle:User:repertoire.html.twig', array( 'repertoire' => $fichiers, 'chemin' => $cheminDossier));
    }

    public function telechargerFichierAction($fichier, Request $request)
    {
      //$requete = $this->get('request');
      $path = $this->get('kernel')->getRootDir(). "/../web/bundles/repertoires/" . $request->getSession()->get('pseudo')."/";
      $content = file_get_contents($path.$fichier . ".png");

      $response = new Response();

      $response->headers->set('Content-Type', 'mime/type');
      $response->headers->set('Content-Disposition', 'attachment;filename="'.$fichier);

      $response->setContent($content);

      return $response;
    }

    public function supprimerFichierAction($fichier, Request $request)
    {
      //$requete = $this->get('request');
      $path = $this->get('kernel')->getRootDir(). "/../web/bundles/repertoires/" . $request->getSession()->get('pseudo')."/";

      unlink($path.$fichier);

      return $this->redirect("/repertoire");
    }

    public function televerserFichierAction(Request $request)
    {
      $requete = $request->files->all();

      $pseudo = $request->getSession()->get('pseudo');
      $cheminDossier = $dossierUtilisateurs = $this->get('kernel')->getRootDir() . '/../web/bundles/repertoires/' . $pseudo;

      if($requete['file']->getClientSize() > $requete['file']->getMaxFileSize())
        return $this->redirect("/repertoire");

      $requete['file']->move($cheminDossier."/" , $requete['file']->getClientOriginalName());

      return $this->redirect("/repertoire");

    }
}
