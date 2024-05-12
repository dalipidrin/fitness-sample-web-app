
<html>
<head>
	<link rel="stylesheet" href="css/styles.css">


 
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

<div class="wrapper">
  
    <div class="div_image_contact">
    <!-- <div class="container_menu_contactPage"> -->
 
     
      <div class="div_header_contact">

       
    
      
        <a href="index.php" id="div_header_contact__contact">HOME</a>
        <a href="aboutUs.php" id="div_header_contact__aboutus">ABOUT US</a>
        <a href="#training" id="div_header_contact__training">TRAINING</a>
        <a href="#club-life" id="div_header_contact__clublife">CLUB-LIFE</a>
        <a href="index.php" id="id_home_contactPage" class="div_header_contact__home">HOME</a>
        

       </div>
       <div class="contact_tony_text">
          <h1>Contact Tony</h1>
        </div>
     </div>


  
</div>

   


  <div class="wrapper"> 

  <div class="contactpage_div">
    <div class="div_map_contactpage"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.77029833233!2d-118.4615747845349!3d34.04976288060665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bb66cd5a3efd%3A0x5c685e7853410dae!2sDunn+Pellier+Media+Health+and+Wellness+PR!5e0!3m2!1sen!2s!4v1559037311067!5m2!1sen!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
      <div class="div_form_contactpage">

    <form onsubmit="return validimi();" action="insertMessage.php" method="POST" >
      <div class="div_name_surname_input">
        <div class="div_input_name">
          <h5 id="h5_label_name">Name:</h5>
          <input type="text" name="name" id="emri_input">
          <h5 id="h5_emri_validation">Emri juaj nuk eshte valid</h5>
        </div>
        <div class="div_surname_input">
          <h5 id="h5_label_surname">Surname:</h5>
          <input type="text" name="surname" id="mbiemri_input">
          <h5 id="h5_mbiemri_validation">Mbiemri juaj nuk eshte valid</h5>
        </div>
     </div>

     <div class="div_email_input">
    <h5 id="h5_label_email">Email:</h5>
     <input type="text" name="email" id="email_input">
     <h5 id="h5_email_validation">Email i juaj nuk eshte valid</h5>
     </div>

     <div class="div_numri_input">
      <h5 id="h5_label_phone">Phone:</h5>
     <input type="text" name="phone" id="numri_input">
     <h5 id="h5_numri_validation">Numri juaj nuk eshte valid</h5>
     </div>

      <div class="div_select_input">
        <h5 id="h5_label_city">City:</h5>
     <select name="city" id="select_qyteti">
     <option value="" selected="selected"></option>
     <option value="Prishtine">Prishtine</option>
     <option value="Prizren">Prizren</option>
     <option value="Gjilan">Gjilan</option>
     <option value="Ferizaj">Ferizaj</option>
     </select>
     <h5 id="h5_select_validation">Ju lutem selektoni nje qytet</h5>
     <br>
     </div>

     <div class="div_textarea_input">
     <h5 id="h5_label_message">Message:</h5>
     <textarea rows="8" cols="100" name="message" id="textarea_input"></textarea>
     <h5 id="h5_textarea_validation">Mesazhi juaj duhet te permbaje me shume se 4 karaktere</h5>
     </div>

    <button type="submit" name="submit" id="valid_button">Send</button>

   </form>



   <!--onclick="validimi()"      duhet me qene te butoni -->

<h5 id="green_message">Faleminderit per mesazhin tuaj</h5>




    </form>
  </div>


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

  




  

<div class="wrapper">
  
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
<p>Copyright &copy; 2015 ASH22 LLC. All rights reserved.</p>


  </footer>



</div>
  





	 


	 <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
    $.validate({
      errorMessageClass: "error",
    });
  </script>
</body>

<script type="text/javascript" src="javascript/js-file.js"></script>


</html>