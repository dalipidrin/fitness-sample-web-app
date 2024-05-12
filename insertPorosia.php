<?php 



session_start();

$servername = "localhost";
$username = "root";
$password = "Password";

 $produkti = $_SESSION['emri'];
 $idpersoni = $_SESSION['id'];




$date = date('Y/m/d H:i:s');

try {

 $conn = new PDO("mysql:host=$servername;dbname=fitnessWeb",$username,$password);

 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 

       $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
         $adresa = $_POST['adresa'];
          $sasia = $_POST['sasia'];
           $email = $_POST['email'];

           $shuma = $sasia * $_SESSION['cmimi'];
          

           


     $query = "INSERT into porosia (emri,mbiemri,adresa,sasia,email,produkti,personi_id,data,cmimi,shuma) values (:emri,:mbiemri,:adresa,:sasia,:email,:produkti,:personi_id,:data,:cmimi,:shuma)";
     $statement = $conn->prepare($query);
     $statement->execute(

                    array(
                           
                           'emri' => $emri,
                           'mbiemri'=> $mbiemri,
                           'adresa'=> $adresa,
                           'sasia'=> $sasia,
                           'email'=> $email,
                           'produkti'=> $produkti,
                           'personi_id'=> $idpersoni,
                           'data'=> $date,
                           'cmimi'=> $_SESSION['cmimi'],
                           'shuma'=> $shuma





                    	)




     	);

  

     header("Location: dashboard.php");








}catch(PDOException $e){

    echo $e->getMessage();

}








?>