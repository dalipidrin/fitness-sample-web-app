<?php 



session_start();

$servername = "localhost";
$username = "root";
$password = "";

$id = $_GET['id'];





try {

 $conn = new PDO("mysql:host=$servername;dbname=fitnessWeb",$username,$password);

 $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);



 $query = "SELECT * FROM produktet WHERE produkti_id = :produkti_id";

 $statement = $conn->prepare($query);
 $statement->execute(

              array(   

              	'produkti_id'=>$id

                  
              	)

              



 	);



$produkti = $statement->fetch();




}catch(PDOException $e){

    echo $e->getMessage();

}








?>



<html>

<head>
	
<link rel="stylesheet" type="text/css"href="css/styles.css">

</head>

<body>

<header>
	<div class="header_div" style="width:100%;display:flex;justify-content:space-around;height:80px;background-color:black;">
		<div style="margin-left:200px;margin-top:22px;"><a href="index.php" style="color:white;text-decoration:none;">Home</a></div>
		<div style="margin-top:22px;"><a href="dashboard.php" style="color:white;text-decoration:none;">Profile</a></div>
	    <div style="margin-top:22px;"><a href="products.php" style="color:white;text-decoration:none;">Products</a></div>
		<div style="margin-right:200px;margin-top:22px;"><a href="logout.php" style="color:white;text-decoration:none;">Log out</a></div>





	</div>





</header>
	
<div class="div_img_desc_product" style="width:100%; display:flex; justify-content:space-around; height:600px;margin-top:100px;">
	<div class="image_product" style="height:400px;margin-top:60px;"><img src="<?php echo $produkti['image'] ?>" style="height:400px"></div>
	<div class="desc_product" style="margin-top:160px;">
		<h4 style="color:blue;margin-bottom:10px;"><?php echo $produkti['emri']?></h4>
		<p style="margin-bottom:10px;"><?php echo $produkti['pershkrimi']?></p>
		<p style="color:green;margin-bottom:10px;"><strong><?php echo $produkti['cmimi'] ?> $</strong></p>

	</div>

<div class="input_customer">
	
    <?php   $_SESSION['emri'] =  $produkti['emri'] ; 
            $_SESSION['cmimi'] =  $produkti['cmimi'] ;

                  ?>

<form action="insertPorosia.php" method="post" class="form_porosia">

	<input type="text" name="emri" placeholder="emri"><br>
	<input type="text" name="mbiemri" placeholder="mbiemri"><br>
	<input type="text" name="adresa" placeholder="adresa"><br>
	<input type="number" name="sasia" placeholder="sasia"><br>
	<input type="email" name="email" placeholder="email"><br>


    <input id="submit_porosia"type="submit" name="submit" value="Buy now">





</form>




</div>








</div>


<div class="wrapper">


    <div class="div_social_media">
    <ul class="social_icons">
    <li><a href="http://www.facebook.com"><img src="images/Facebook.png" /></a></li>
    <li><a href="http://www.twitter.com"><img src="images/Twitter.png" /></a></li>
    <li><a href="http://www.youtube.com"><img src="images/Youtube.png" /></a></li>
</ul>


  </div>





</div>


  <footer>
    <img id="logo_tonyhorton"src="images/tonyhorton_logo.png">

    <div class="footer_products">
  <a href="#">Products</a>
  <a href="#">Books</a>
  <a href="#">Fitness</a>
  <a href="#">On-Demand</a>
  <a href="#">TH Care</a>
</div>
  <div class="footer_about">
  <a href="#">About</a>
  <a href="#">Blog</a>
  <a href="#">Press</a>
  <a href="#">Contact</a>
</div>

  <div class="footer_resources">
  <a href="#">Resources</a>
  <a href="#">Media Kit</a>
  <a href="#">Link 2</a>
</div>

<hr>



  </footer>








</body>

<html>




