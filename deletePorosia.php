<?php 



session_start();

$servername = "localhost";
$username = "root";
$password = "Password";

 


try {

 $conn = new PDO("mysql:host=$servername;dbname=fitnessWeb",$username,$password);

 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 
    $id = $_GET['id'];
    
   $query = "DELETE From porosia where porosia_id = :id";
   $statement = $conn->prepare($query);
   $statement ->execute(

     array( 'id'=> $id)

    );




header("Location: dashboard.php");



}catch(PDOException $e){

    echo $e->getMessage();

}



?>
