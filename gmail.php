<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FARMACIA LA BENDICION</title>
    <link href="assets/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
   <link href="assets/css/style.css" rel="stylesheet" />
      <link href="assets/css/main-style.css" rel="stylesheet" />
</head>

<body>
     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

<?php session_start();
 
 //echo $_GET["id"];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

   require 'PHPMailer/Exception.php';
   require 'PHPMailer/PHPMailer.php';
   require 'PHPMailer/SMTP.php';
 

 $mail = new PHPMailer(true);

  $d=mt_rand(163735,983876);

$_SESSION['CORREO']=$d;

$message  = "<html><body>";
   
$message .= "<P>hola</p>";

$message .= "<a href='http://localhost/farmacia/index.php'>Regregar a Inicio de Secion</a>";
   
$message .= "</body></html>";

$cuerpo = '
    <!DOCTYPE html>
    <html lang="es">
    <head>
    <title>Recuperar Clave de Usuario</title>';
$cuerpo .= ' 
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: "Roboto", sans-serif;
        font-size: 16px;
        font-weight: 300;
        color: #888;
        background-color:rgba(230, 225, 225, 0.5);
        line-height: 30px;
        text-align: center;
    }
    .contenedor{
        width: 80%;
        min-height:auto;
        text-align: center;
        margin: 0 auto;
        background: #ececec;
        border-top: 3px solid #E64A19;
    }
    .btnlink{
        padding:15px 30px;
        text-align:center;
        background-color:#cecece;
        color: crimson !important;
        font-weight: 600;
        text-decoration: blue;
    }
    .btnlink:hover{
        color: #fff !important;
    }
    .imgBanner{
        width:100%;
        margin-left: auto;
        margin-right: auto;
        display: block;
        padding:0px;
    }
    .misection{
        color: #34495e;
        margin: 4% 10% 2%;
        text-align: center;
        font-family: sans-serif;
    }
    .mt-5{
        margin-top:50px;
    }
    .mb-5{
        margin-bottom:50px;
    }
    </style>
';

$cuerpo .= '
</head>
<body>
    <div class="contenedor" style="background-color: rgb(100,100,100);">
   <!-- <img class="imgBanner" src="https://permutasalcuadrado.com/Como-recuperar-clave-de-usuario-usando-PHP-y-MYSQL/assets/images/banner2.png">-->
        <p>&nbsp;</p>
        <p>&nbsp;</p>
    <table style="max-width: 600px; padding: 10px; margin:0 auto; border-collapse: collapse; background-color: rgb(225,225,225);">
    <tr>
        <td style="padding: 0">
           <!-- <img style="padding: 0; display: block" src="http://localhost/farmacia/imagenes/banner.jpg" width="100%">-->
        </td>
    </tr>
    
    <tr>
        <td style="background-color: #ffffff;">
            <div class="misection">
                <h2 style="color: rgb(100, 0, 0);; margin: 0 0 7px">Hola, </h2>
                <p style="margin: 2px; font-size: 18px; color: rgb(1,1,1);">te hemos creado una nueva clave temporal para que puedas iniciar sesión, la clave temporal es: <strong></strong> </p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <h2 style="color: red; margin: 0 0 7px; color: rgb(142, 2, 2);">Verifica tu Clave:</h2>
                 <p>&nbsp;</p>
                  <p>&nbsp;</p>
                   <h2 style="color: red; margin: 0 0 7px; color: rgb(220, 59, 12);">'.$d.'</h2>
                   <p>&nbsp;</p>
                   <p>&nbsp;</p>
                <a href="http://localhost/farmacia/index.php" class="btnlink">Iniciar Sesión </a>
                <p>&nbsp;</p>
                 <p>&nbsp;</p>
                <!--<img style="padding: 0;" src="imagenes/welltow.gif" width="50%">-->
                <p>&nbsp;</p>
            </div>
        </td>
    </tr>
    <tr>
        <td style="background-color: #ffffff;">
        <div class="misection">
            <!--<img style="padding: 0; display: block" src="imagenes/canal.png" width="100%">-->
        </div>
        
        <div class="mb-5 misection">  
          <p>&nbsp;</p>
           <!-- <a href="https://www.youtube.com/channel/UCodSpPp_r_QnYIQYCjlyVGA" class="btnlink">Visitar Canal </a>-->
        </div>
        </td>
    </tr>
    <tr>
        <td style="padding: 0;">
            <!--<img style="padding: 0; display: block" src="https://permutasalcuadrado.com/Como-recuperar-clave-de-usuario-usando-PHP-y-MYSQL/assets/images/footer.png" width="100%">-->
        </td>
    </tr>
</table>'; 

$cuerpo .= '
      </div>
    </body>
  </html>';

try {
    //Server settings
    $mail->SMTPOptions = array(
		    'ssl' => array(
		        'verify_peer' => false,
		        'verify_peer_name' => false,
		        'allow_self_signed' => true
		    )
		);
    $mail->SMTPAuth = false;
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP(); 
    $mail->SMTPSecure = 'tls';                                           //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'floresmanriqueerik1998@gmail.com';                     //SMTP username
    $mail->Password   = 'Pentium11Hola1234';                               //SMTP password            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('floresmanriqueerik1998@gmail.com', 'Farmacia La Bendicion');
    $mail->addAddress($_GET["id"]);     //Add a recipient  

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperacion de contraseña';
    $mail->Body    = $cuerpo;
  //  $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo "<script type='text/javascript'>";
    echo " Swal.fire({
    title: 'SyS-Farmacia',
    icon: 'success',
    text: 'El correo se a enviado',
    showConfirmButton: true,
    timer: 15000
    });";
    echo "location.href='index.php'";
    echo "</script>";
    } catch (Exception $e) {
        echo "<script type='text/javascript'>";
    echo " Swal.fire({
    title: 'SyS-Farmacia',
    icon: 'error',
    text: 'Hubo un error al enviar correo: {$mail->ErrorInfo},
    showConfirmButton: true,
    timer: 15000
    });";
    echo "location.href='index.php'";
    echo "</script>";
     }

/*if(mail('floresmenjivarerik@gmail.com', 'recuperacion', 'hola como estas', 'From: floresmenjivarerik@gmail.com')){
echo "enviado";
}else{
 echo "error";
}*/
?>