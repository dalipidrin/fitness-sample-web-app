
<?php 



session_start();

$servername = "localhost";
$username = "root";
$password = "Password";

 


try {

 $conn = new PDO("mysql:host=$servername;dbname=fitnessWeb",$username,$password);

 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 

     if($_SESSION['is_admin'] == 0){   
   

     $query = "SELECT * FROM porosia WHERE personi_id = :idpersoni";
     $statement = $conn->prepare($query);
     $statement->execute(

          array(
   
                  'idpersoni'=> $_SESSION['id']
                  )


      );

     $porosite = $statement->fetchAll();

}else {

     $query = "SELECT * FROM porosia";
     $statement = $conn->prepare($query);
     $statement->execute();

     $porosite = $statement->fetchAll();



}


}catch(PDOException $e){

    echo $e->getMessage();

}


$date = date('Y/m/d H:i:s');

?>







<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
#porosite {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  margin-top: 80px;
}

#porosite td, #porosite th {
  border: 1px solid #ddd;
  padding: 8px;
}

#porosite tr:nth-child(even){background-color: #f2f2f2;}

#porosite tr:hover {background-color: #ddd;}

#porosite th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #343a40;
  color: #ff5100;
}
</style>

</head>
<body>

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



      <h3 style="color:green; margin-top:70px;">Products Bought History</h3>

            
<?php  if($_SESSION['is_admin'] == 1)  {              ?>



<table id="porosite">
   <tr>
    <th>Emri</th>
    <th>Mbiemri</th>
    <th>Adresa</th>
    <th>Sasia</th>
    <th>Email</th>
    <th>Produkti</th>
    <th>Cmimi</th>
    <th>Totali</th>
    <th>Data</th>
    <th>Delete</th>
    <th>Update</th>
  </tr>
  
    <?php 

        foreach ($porosite as $porosia) {     ?>

    <tr>

    <td><?php echo $porosia['emri']?></td>
    <td><?php echo $porosia['mbiemri']?></td>
    <td><?php echo $porosia['adresa']?></td>
    <td><?php echo $porosia['sasia']?></td>
    <td><?php echo $porosia['email']?></td>
    <td><?php echo $porosia['produkti']?></td>
     <td><?php echo $porosia['cmimi']?></td>
    <td><?php echo $porosia['shuma']?></td>
    <td><?php echo $porosia['data']?></td>
    <td><a href="deletePorosia.php?id=<?php echo $porosia['porosia_id']?>">Delete</a></td>
    <td><a href="updateGUI.php?id=<?php echo $porosia['porosia_id']?>">Update</a></td>

    </tr>

  <?php } ?>

  
<?php   }else { ?>

     
    <table id="porosite">
      <tr>
     
      <th>Adresa</th>
      <th>Sasia</th>
      <th>Cmimi</th>
      <th>Totali</th>
      <th>Produkti</th>
      <th>Data</th>
     
   </tr>



    <?php 

        foreach ($porosite as $porosia) {     ?>

    <tr>

    
    <td><?php echo $porosia['adresa']?></td>
    <td><?php echo $porosia['sasia']?></td>
     <td><?php echo $porosia['cmimi']?></td>
    <td><?php echo $porosia['shuma']?></td>
    <td><?php echo $porosia['produkti']?></td>
    <td><?php echo $porosia['data']?></td>
    

    </tr>

  <?php } }?>





</table>




      
     


      
    </main>
 

</div>
  






</div>


<?php }else{   header("Location: login.php");  ?>
     


  <?php  }   ?>



	</body>






</html>