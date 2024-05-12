<?php 


session_start();



//$dbname = "loginDB";


  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  require 'lib/PHPMailer-master/src/Exception.php';
  require 'lib/PHPMailer-master/src/PHPMailer.php';
  require 'lib/PHPMailer-master/src/SMTP.php';

    if(isset($_POST['submit'])){
      $mail = new PHPMailer;
      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->Port = 587;
      $mail->SMTPAuth = true;
      $mail->Username = 'fitnesswebdd@gmail.com';
      $mail->Password = 'fitnessweb123';
      $mail->setFrom('fitnesswebdd@gmail.com', 'Admin');
      $mail->addAddress('fitnesswebdd@gmail.com', 'Fitnessweb');
      if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
          $mail->Subject = 'Fitness Web Contact Form';
          $mail->isHTML(false);
      $mail->Body = <<<EOT
          Email: {$_POST['email']}
          Name: {$_POST['name']}
          City: {$_POST['city']}
          Message: {$_POST['message']}
EOT;
          if (!$mail->send()) {
              $msg = 'Sorry, something went wrong. Please try again later.';
          } else {
              $msg = 'Message sent! Thanks for contacting us.';
          }
      } else {
        $msg = 'Invalid email address, message ignored.';
      }
    }

    

    $servername = "localhost";
    $username = "root";
    $password = "Password";

try {

     $conn = new PDO("mysql:host=$servername;dbname=fitnessWeb",$username,$password);

     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

     if(isset($_POST['submit'])) 
     {

     

               $name = $_POST['name'];
               $surname = $_POST['surname'];
               $email = $_POST['email'];
               $phone = $_POST['phone'];
               $city = $_POST['city'];
               $message = $_POST['message'];

               
               $query = "INSERT INTO message (name, surname, email, phone, city, message) VALUES (:name, :surname, :email, :phone, :city, :message)"; 
               /* $query->bindParam(':name', $_POST['name']);
                $query->bindParam(':surname', $_POST['surname']);
                $query->bindParam(':email', $_POST['email']);
                $query->bindParam(':phone', $_POST['phone']);
                $query->bindParam(':city', $_POST['city']);
                $query->bindParam(':message', $_POST['message']); */
               $statement = $conn->prepare($query);
               $statement->execute(
                            array(

                                 'name' => $name,
                                 'surname' => $surname,
                                 'email' => $email,
                                 'phone' => $phone,
                                 'city' => $city,
                                 'message' => $message



                              )


                );

              header("Location: contactPage.php");
                     

          }

     





} catch(PDOException $e) 

     {
 
      echo "Connection failed: " . $e->getMessage();

     }





?>