

  <?php  
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require_once("header.php");

require_once 'vendor/autoload.php';

function PHPMailer(){

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host       = 'localhost';    
$mail->SMTPAuth   = false;    
$mail->Port       = 1025;                                   
$mail->setFrom('from@thedistrict.com', 'The District Company');
$mail->addAddress("client1@example.com", "Mr Brise");
$mail->addAddress("client2@example.com", "Mme Cointreau"); 
$mail->addReplyTo("reply@thedistrict.com", "Reply");
$mail->addCC("cc@example.com");
$mail->addBCC("bcc@example.com");
$mail->isHTML(true);
$mail->addAttachment('assets/img/menu-burger.jpg');
$mail->Subject = 'Test PHPMailer';
$mail->Body = "Voici le mail de confirmation de votre commande";
             "Recapitulatif: 1 quantite,libelle.";

if ($mail){
    try {
        $mail->send();
        echo 'Email envoyé avec succès';
        } catch (Exception $e) {
        echo "L'envoi de mail a échoué. L'erreur suivante s'est produite : ", $mail->ErrorInfo;
        }
    } 
  }

?>






