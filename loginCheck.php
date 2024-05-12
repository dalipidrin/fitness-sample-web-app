<?php 

session_start();

$servername = "localhost";
$username = "root";
$password = "";
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
               
               $query = "SELECT * FROM users WHERE email = :email AND pass = :password"; 
               $statement = $conn->prepare($query);
               $statement->execute(

                        array(
                             'email' => $_POST["email"],
                             'password' => $_POST["password"]

                        	)

               	);


              

               $user = $statement->fetch();

               $count = $statement->rowCount();

               if($count > 0) 
               {

                 $_SESSION['id'] = $user['user_id'];
                 $_SESSION['name'] = $user['emri'];
                  $_SESSION['password'] = $user['pass'];
                  $_SESSION['is_admin'] = $user['is_admin'];


                 // var_dump($_SESSION);

               	header("Location: dashboard.php");

               }else {

                echo "Ju lutem kontrolloni email ose passwordin tuaj";

               	header("Location: login.php");

                


               }

          }

     }





} catch(PDOException $e) 

     {
 
      echo "Connection failed: " . $e->getMessage();

     }





?>