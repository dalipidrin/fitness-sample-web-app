<?php 


session_start();

$servername = "localhost";
$username = "root";
$password = "";




try {

 $conn = new PDO("mysql:host=$servername;dbname=fitnessWeb",$username,$password);

 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);








}catch(PDOException $e){

    echo $e->getMessage();

}








?>




<html> 

<head>
	
<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>

<div class="div_products_image"><img src="images/products_images.jpg" style="width:100%;height:400px;"></div>
<div class="products" style="width:100%; flex-wrap:wrap; display:flex; background-color:white; height:800px; margin-top:100px;  ">


	<?php  

            

              $query = "SELECT * From produktet";

              $statement = $conn->prepare($query);
              $statement->execute();


              $produktet = $statement->fetchAll();

             
               
               

            //  $i = 0;

	        // for($produkti = $produktet[$i]; $i < 4; $i++) {   
              foreach ($produktet as $produkti) { ?>
              	
              

	      <div class="produkti_div" style="display:inline;margin-bottom:40px; margin-left:60px; margin-right:60px; width:270px; height:400px;">
	      <div class="image_div" style=" width:270px;margin-top:40px; height:325px;"><img src="<?php echo $produkti['image']?>" style="width:250px;"/></div>
          <p style="margin-left:100px; color:green;"><?php echo $produkti['emri'];?></p>

          <button style="margin-left:76px; padding-top:10px; padding-bottom:10px; 
          padding-left:15px; padding-right:15px; color:white; background-color:#ff5100; 
          border-radius:6px; font-size:12px;"><a href="porosia.php?id=<?php echo $produkti['produkti_id']?>" style="text-decoration:none; color:white;">Order Now</a> </button>

      

              </div>


	<?php     }





	


         ?> 











</div>














</body>


</html>





























