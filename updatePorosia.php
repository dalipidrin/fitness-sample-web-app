<?php 



session_start();

$servername = "localhost";
$username = "root";
$password = "";

 


try {

 $conn = new PDO("mysql:host=$servername;dbname=fitnessWeb",$username,$password);

 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 
    $id = $_GET['id'];

   
    $emri = $_POST['emri'];
    $mbiemri = $_POST['mbiemri'];
    $adresa= $_POST['adresa'];
    $sasia = $_POST['sasia'];
    $email = $_POST['email'];
    $produkti = $_POST['produkti'];
    $data = $_POST['data'];
    $cmimi = $_POST['cmimi'];
    $shuma = $_POST['shuma'];





    
   $query = "UPDATE porosia SET emri = :emri, mbiemri = :mbiemri, adresa = :adresa, sasia = :sasia, email = :email, produkti = :produkti, data = :data, cmimi = :cmimi, shuma = :shuma where porosia_id = :id";
   $statement = $conn->prepare($query);
   $statement ->execute(

     array( 

     	'id'=> $id,
     	'emri'=> $emri,
     	'mbiemri'=> $mbiemri,
     	'adresa'=> $adresa,
     	'sasia'=> $sasia,
     	'email'=> $email,
     	'produkti'=> $produkti,
     	'data'=> $data,
     	'cmimi'=> $cmimi,
     	'shuma'=> $shuma





     	)

    );




header("Location: dashboard.php");



}catch(PDOException $e){

    echo $e->getMessage();

}



?>
