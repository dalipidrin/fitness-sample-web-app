 <?php

  session_start();

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
               $idpersoni = $_SESSION['id'];
               $subscription = $_POST['subscription'];
               $data_fillimit = date('Y/m/d');


               if ($subscription == '1month') {

                $d = strtotime("+1 Month");
                $data_mbarimit = date('Y/m/d',$d);
                 
               }elseif ($subscription == '6month') {

                $d = strtotime("+6 Months");
                $data_mbarimit = date('Y/m/d',$d);
              
               }else {

                $d = strtotime("+12 Months");
                $data_mbarimit = strtotime('Y/m/d',$d);


               }
               

               
               $query = "INSERT INTO registration (id_personi,data_fillimit,data_mbarimit,subscription_type) VALUES (:id_personi,:data_fillimit,:data_mbarimit,:subscription_type )"; 
               /* $query->bindParam(':name', $_POST['name']);
                $query->bindParam(':surname', $_POST['surname']);
                $query->bindParam(':email', $_POST['email']);
                $query->bindParam(':phone', $_POST['phone']);
                $query->bindParam(':city', $_POST['city']);
                $query->bindParam(':message', $_POST['message']); */
               $statement = $conn->prepare($query);
               $statement->execute(
                            array(

                                 'id_personi' => $idpersoni,
                                 
                                 'data_fillimit'=> $data_fillimit,
                                  'data_mbarimit'=> $data_mbarimit,
                                 'subscription_type'=> $subscription
                                 
                                 



                              )


                );

              header("Location: Registration.php");
                     

          }

     





} catch(PDOException $e) 

     {
 
      echo "Connection failed: " . $e->getMessage();

     }





?>