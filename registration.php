
<?php 



session_start();

$servername = "localhost";
$username = "root";
$password = "";

 


try {

 $conn = new PDO("mysql:host=$servername;dbname=fitnessWeb",$username,$password);

 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 

     if($_SESSION['is_admin'] == 0){   
   

     $query = "SELECT * FROM registration WHERE id_personi = :idpersoni";
     $statement = $conn->prepare($query);
     $statement->execute(

          array(
   
                  'idpersoni'=> $_SESSION['id']
                  )


      );



    $registration = $statement->fetch();

}else {

  

   //query per mi shfaq regjistrimet te admini


    $queryEmrat = "SELECT emri,mbiemri,data_fillimit,data_mbarimit,subscription_type From registration AS r INNER JOIN users as u on r.id_personi = u.user_id ";
    $statement = $conn->prepare($queryEmrat);
    $statement->execute();

    $regjistrimetKlientave = $statement->fetchAll();

}






}catch(PDOException $e){

    echo $e->getMessage();

}


$date = date('Y/m/d');

?>







<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
#regjistrimet {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 80px;
}

#regjistrimet td, #regjistrimet th {
  border: 1px solid #ddd;
  padding: 8px;
}

#regjistrimet tr:nth-child(even){background-color: #f2f2f2;}

#regjistrimet tr:hover {background-color: #ddd;}

#regjistrimet th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #343a40;
  color: #ff5100;
}
</style>

</head>
<body>

  <!--  Perme check a eshte bere llogin, per mos me lon me hi ne dashboar dikush vetem permes pathit te linkut nalt   -->

    <?php if(isset($_SESSION['id'])){  ?>

        


    




    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow" style="height:45px;">
       <?php if(isset($_SESSION['name'])): ?>
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#" style="color:#ff5100;">Welcome <?php echo $_SESSION['name']; ?>
       <?php endif; ?>
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap" style="margin-bottom:28px;">
      <a class="nav-link" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>




<div class="container-fluid">
    <div class="row">
    <nav class="col-md-2 d-none d-md-block bg-light sidebar" style="height:1000px">
      <div class="sidebar-sticky">
        <ul class="nav flex-column">
          <li class="nav-item" style="margin-top:56px;">
            <a class="nav-link active" href="registration.php" style="color:#ff5100;">
              <span data-feather="home"></span>
              Registration <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="products.php" style="color:#ff5100;" >
              <span data-feather="file"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php" style="color:#ff5100;">
              <span data-feather="shopping-cart"></span>
              Orders
            </a>
          </li>

<?php  if($_SESSION['is_admin'] == 1)  {              ?>

          <li class="nav-item">
            <a class="nav-link" id="adminlink" href="#" style="color:#ff5100;">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>


           <li class="nav-item">
            <a class="nav-link" id="adminlink2" href="#" style="color:#ff5100;">
              <span data-feather="bar-chart-2"></span>
              Messages
            </a>
          </li>

<?php   }else {  ?>

<style>

     #adminlink {
      display: none;
     }

     #adminlink2{
      display: none;
     }

</style>


<?php           }              ?>

         
        </ul>

        </div>
      </nav>

          
          

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">

            
     <?php  if($_SESSION['is_admin'] == 0)   {   ?>

 

       <?php     

              $data_mbarimit = $registration['data_mbarimit'];

              if ($date == $data_mbarimit) {   ?>
                
             
 <h4 id="abonimih4" style="display:block; margin-top:70px; color:red;">abonimi juaj ka mbaruar</h4>


    <?php          }           


                      ?>





     

     <Form action="insertRegistration.php" method="POST" id="registrationform">

      <input type="text" name="name" style="margin-top:70px;">
      <input type="text" name="surname" style="margin-top:70px;">

     <select name="subscription">
    
     <option value="1month">1 month Subscripton</option>
     <option value="6month">6 month Subscripton</option>
     <option value="12month">1 year Subscripton</option>
     
     </select>

     <input type="submit" name="submit" value="Register">

     </form>




      <table id="regjistrimet">
      <tr>
     
      
      <th>Data e Fillimit</th>
      <th>Data e Mbarimit</th>
      <th>Tipi i Abonimit</th>  
      </tr>
      <tr>  
      
      <td><?php echo $registration['data_fillimit']?></td>
      <td><?php echo $registration['data_mbarimit']?></td>
      <td><?php echo $registration['subscription_type']?></td> 
      </tr>

   



  
   </table>

    





    
    

  <?php   }else {  ?>

<style>
  
#registrationform {

  display: none;
}


</style>

       
      <table id="regjistrimet">
      <tr>
     
      <th>Emri</th>
      <th>Mbiemri</th>
      <th>Data e Fillimit</th>
      <th>Data Mbarimit</th>
      <th>Tipi i Abonimit</th>  
      </tr>

    <?php     foreach ($regjistrimetKlientave as $regjistrimi) { ?>
     
                     


      <tr>  
     
      <td><?php echo $regjistrimi['emri']?></td>
       <td><?php echo $regjistrimi['mbiemri']?></td>
      <td><?php echo $regjistrimi['data_fillimit']?></td>
      <td><?php echo $regjistrimi['data_mbarimit']?></td>
      <td><?php echo $regjistrimi['subscription_type']?></td> 
      </tr>

   <?php     } ?>

      </table>

  







   <?php   }   ?>   
     


      
    </main>
 

</div>
  






</div>


<?php }else{   header("Location: login.php");  ?>
     


  <?php  }   ?>



	</body>






</html>