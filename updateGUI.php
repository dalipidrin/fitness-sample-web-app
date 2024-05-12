

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
  <style>

#submit_update:hover{
     
     background-color:#ff5100;
     color:white;
     font-size: 15px;
}



  </style>

    

        


    




    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow" style="height:45px;">
       
  <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#" style="color:#ff5100;">
       
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
            <a class="nav-link" href="#" style="color:#ff5100;">
              <span data-feather="shopping-cart"></span>
              Orders
            </a>
          </li>



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



<style>

     #adminlink {
      display: none;
     }

     #adminlink2{
      display: none;
     }

</style>




         
        </ul>

        </div>
      </nav>

          
          

    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">



      
   	<?php $id = $_GET['id']; ?>

    <h4 style="color:#ff5100;font-weight:bold;margin-top:60px;">Edit Order:</h4>

	<form action="updatePorosia.php?id=<?php echo $id ?>" method="POST" style="margin-top:60px;margin-left:100px;">
		


<input type="text" name="emri" placeholder="emri" style="width:200px;margin-bottom:20px;border-radius:25px;border-color:bisque;"><br>
<input type="text" name="mbiemri" placeholder="mbiemri" style="width:200px;margin-bottom:20px;border-radius:25px;border-color:bisque;"><br>
<input type="text" name="adresa" placeholder="adresa" style="width:200px;margin-bottom:20px;border-radius:25px;border-color:bisque;"><br>
<input type="number" name="sasia" placeholder="sasia" style="width:200px;margin-bottom:20px;border-radius:25px;border-color:bisque;"><br>
<input type="email" name="email" placeholder="email" style="width:200px;margin-bottom:20px;border-radius:25px;border-color:bisque;"><br>
<input type="text" name="produkti" placeholder="produkti" style="width:200px;margin-bottom:20px;border-radius:25px;border-color:bisque;"><br>
<input type="date" name="data" placeholder="data" style="width:200px;margin-bottom:20px;border-radius:25px;border-color:bisque;"><br>
<input type="number" name="cmimi" placeholder="cmimi" style="width:200px;margin-bottom:20px;border-radius:25px;border-color:bisque;"><br>
<input type="number" name="shuma" placeholder="shuma" style="width:200px;margin-bottom:20px;border-radius:25px;border-color:bisque;"><br>

<input type="submit" name="submit" value="update" style="border-radius:25px;width:200px;" id="submit_update"><br>



	</form>
            


     
 








      
     


      
    </main>
 

</div>
  






</div>



     





	</body>






</html>










	




















