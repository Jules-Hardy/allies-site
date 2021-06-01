<?php

namespace App\Controller;

use App\Core\AbstractController;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class PagesController extends AbstractController
{
  
  public function index($a, $b)
  {
    $this->render('index', [
      'nom' => 'ok',
      'test' => 'test'
    ]);
  }

  public function accueil(){
    $this->load_model("User");
    $currentU = $this->User->get_logged_user_if_exists();

    $this->render('vitrine', 'accueil', array($currentU));
  }

  public function faq(){
    $this->load_model("Faq");
    $this->load_model("User");

    $faq = $this->Faq->get_all_informations();
    $u = $this->User->get_all_informations();
    $currentU = $this->User->get_logged_user_if_exists();

    $this->render('vitrine', 'faq', array($currentU, $faq, $u));
  }

  public function apropos(){
    $this->load_model("User");
    $currentU = $this->User->get_logged_user_if_exists();

    $this->render('vitrine', 'apropos', array($currentU));
  }

  public function mentions(){
    $this->load_model("User");
    $currentU = $this->User->get_logged_user_if_exists();

    $this->render('vitrine', 'mentions', array($currentU));
  }

  public function contact(){
    $this->load_model("User");
    $currentU = $this->User->get_logged_user_if_exists();
    if(isset($_POST["firstname"]) && isset($_POST["email"]) && isset($_POST["service"]) && isset($_POST["subject"])){
      $firstname = $_POST["firstname"];
      $email = $_POST["email"];
      $service = $_POST["service"];
      $subject = $_POST["subject"];

      require 'src/PHPMailer.php';
      require 'src/SMTP.php';
      require 'src/Exception.php';

      $mail = new PHPMailer(True);
      $mail->isSMTP();
      $mail->Host = 'in-v3.mailjet.com'; // Spécifier le serveur SMTP
      $mail->SMTPAuth = true; // Activer authentication SMTP
      $mail->Username = '66d0037233b14c7089ecd534e9f11b13'; // Votre adresse email d'envoi
      $mail->Password = '1517885c5dfccf0cffb7ca5b16206eb8'; // Le mot de passe de cette adresse email
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Accepter SSL
      $mail->CharSet = 'UTF-8';
      $mail->Port = 587;
      
      $mail->setFrom('app-isep@ooeo.fr', 'Mailer'); // Personnaliser l'envoyeur
      $mail->addAddress($email); // Ajouter le destinataire
      $mail->addReplyTo('contact@ooeo.fr', 'Contact'); // L'adresse de réponse

      $mail->isHTML(true); // Paramétrer le format des emails en HTML ou non
      
      $mail->Subject = 'Votre demande de contact a été prise en compte';
      $mail->Body = '<b>Résumé de votre demande</b><br><b>Identité:</b> ' . $firstname . "<br><b>Service concerné:</b> " . $service . "<br><b>Contenu:</b>" . $subject;
      $mail->AltBody = '<b>Résumé de votre demande<b><br><b>Identité:</b> ' . $firstname . "<br><b>Service concerné:</b> " . $service . "<br><b>Contenu:</b>" . $subject;

      if($mail->send()){
        $this->render('vitrine', 'contact', array($currentU, "success"));
        return;
      }
    }
    $this->render('vitrine', 'contact', array($currentU));
  }
}
