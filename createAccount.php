<?php 

session_start();

$servername = "localhost";
$username = "root";
$password = "Password";
//$dbname = "loginDB";

try {

     $conn = new PDO("mysql:host=$servername;dbname=fitnessWeb",$username,$password);

     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

     if(isset($_POST['submit'])) 
     {
     
          if(empty($_POST["email"]) || empty($_POST["password"]))
          {
              echo "ploteso te gjitha fushat";
          }
          else 
          {

            
            $is_admin = 0;

            if(isset($_POST['is_admin'])){
              $is_admin = 1;
            }
               
        $query = "INSERT into users(emri,mbiemri,email,pass,is_admin) VALUES(:emri, :mbiemri, :email, :password, :is_admin)"; 

               $statement = $conn->prepare($query);
               $statement->execute(
                        array(
                             'emri' => $_POST["emri"],
                             'mbiemri' => $_POST["mbiemri"],
                             'email' => $_POST["email"],
                             'password' => $_POST["password"],
                             'is_admin' => $is_admin

                        	)

               	);

         

              
              
                  echo "Account created successfully";
          

               	header("Location: login.php");

               }

     


 }else{
  echo "ju lutem mbushni te gjitha fushat";
  
      header("Location: login.php");

}


} catch(PDOException $e) 

     {
 
      echo "Connection failed: " . $e->getMessage();

     }





?>