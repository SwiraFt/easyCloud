<?php
namespace EC\easyCloudBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class repertoireController extends Controller
{
  $dossier = 'repertoire/';
  $fichier = basename($_FILES['fichier']['name']);
  $taille_maxi = 100000;
  $taille = filesize($_FILES['fichier']['tmp_name']);
  $extensions = array('.png', '.gif', '.jpg', '.jpeg');
  $extension = strrchr($_FILES['fichier']['name'], '.');

  //Début des vérifications de sécurité d'extension et de taille
  if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
  {
       $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, txt ou doc...';
  }
  if($taille>$taille_maxi)
  {
       $erreur = 'Le fichier est trop gros...';
  }
  if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
  {
       if(move_uploaded_file($_FILES['fichier']['tmp_name'], $dossier . $fichier)) //Si True ça fonctionne
       {
            echo 'Upload effectué avec succès !';
       }
       else //Sinon la fonction renvoie FALSE.
       {
            echo 'Echec de l\'upload !';
       }
  }
  else
  {
       echo $erreur;
  }
}
?>
