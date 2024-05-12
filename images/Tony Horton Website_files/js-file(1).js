
var hi1 = document.getElementsByClassName("hide_info_1");
var i;

for (i = 0; i < hi1.length; i++) {
  hi1[i].addEventListener("click", function() {
    this.classList.toggle("active1");
    var show_info_1 = this.nextElementSibling;
    if (show_info_1.style.display === "block") {
      show_info_1.style.display = "none";
    } else {
      show_info_1.style.display = "block";
    }
  });
}

var hi2 = document.getElementsByClassName("hide_info_2");
var j;


for (j = 0; j < hi2.length; j++) {
  hi2[j].addEventListener("click", function() {
    this.classList.toggle("active2");
    var show_info_2 = this.nextElementSibling;
    if (show_info_2.style.display === "block") {
      show_info_2.style.display = "none";
    } else {
      show_info_2.style.display = "block";
    }
  });
}


var hi3 = document.getElementsByClassName("hide_info_3");
var k;


for (k = 0; k < hi3.length; k++) {
  hi3[k].addEventListener("click", function() {
    this.classList.toggle("active3");
    var show_info_3 = this.nextElementSibling;
    if (show_info_3.style.display === "block") {
      show_info_3.style.display = "none";
    } else {
      show_info_3.style.display = "block";
    }
  });
}




function openProgram(programName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(programName).style.display = "block";
  elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();



//VALIDIMI I CONTACT FORMES


function validimi(){
   var emri = document.getElementById("emri_input").value;
   var mbiemri = document.getElementById("mbiemri_input").value;
   var email = document.getElementById("email_input").value;
   var numri = document.getElementById("numri_input").value;
   var textarea = document.getElementById("textarea_input").value;
   var selecti = document.getElementById("select_qyteti").value;
  
   

   var emriValid = RegExp('[a-zA-Z]+');
   var mbiemriValid = RegExp('[a-zA-Z]+');
   var emailValid = RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
   var numriValid = RegExp('[0-9]{9,14}');
   var textareaValid = RegExp('[a-zA-Z ]{4,500}$');
  
  

   if((emriValid.test(emri) == false) || (mbiemriValid.test(mbiemri) == false) || (emailValid.test(email) == false) 
    || (numriValid.test(numri) == false) || (textareaValid.test(textarea) == false) || selecti == "")

     {

      if(emriValid.test(emri) == false){

         document.getElementById("h5_emri_validation").style.display = "block";
         document.getElementById("h5_emri_validation").style.color = "red";
         document.getElementById("emri_input").style.borderColor = "red";
         return false;


      }else {

            document.getElementById("h5_emri_validation").style.display = "none";
             document.getElementById("emri_input").style.borderColor = "black";

      }


      if(mbiemriValid.test(mbiemri) == false){

         document.getElementById("h5_mbiemri_validation").style.display = "block";
         document.getElementById("h5_mbiemri_validation").style.color = "red";
         document.getElementById("mbiemri_input").style.borderColor = "red";
         return false;


      } else {
 
              document.getElementById("h5_mbiemri_validation").style.display = "none";
             document.getElementById("mbiemri_input").style.borderColor = "black";


      }



      if(emailValid.test(email) == false){

         document.getElementById("h5_email_validation").style.display = "block";
         document.getElementById("h5_email_validation").style.color = "red";
         document.getElementById("email_input").style.borderColor = "red";
         return false;


      } else {
 

             document.getElementById("h5_email_validation").style.display = "none";
             document.getElementById("email_input").style.borderColor = "black";


      }

       if(numriValid.test(numri) == false){

         document.getElementById("h5_numri_validation").style.display = "block";
         document.getElementById("h5_numri_validation").style.color = "red";
         document.getElementById("numri_input").style.borderColor = "red";
         return false;


      } else {
 

             document.getElementById("h5_numri_validation").style.display = "none";
             document.getElementById("numri_input").style.borderColor = "black";


      }
       if(textareaValid.test(textarea) == false){

         document.getElementById("h5_textarea_validation").style.display = "block";
         document.getElementById("h5_textarea_validation").style.color = "red";
         document.getElementById("textarea_input").style.borderColor = "red";
         return false;


      } else {
 

             document.getElementById("h5_textarea_validation").style.display = "none";
             document.getElementById("textarea_input").style.borderColor = "black";


      }

        if(selecti == ""){

         document.getElementById("h5_select_validation").style.display = "block";
         document.getElementById("h5_select_validation").style.color = "red";
         document.getElementById("select_qyteti").style.borderColor = "red";
         return false;


      } else {
 

             document.getElementById("h5_select_validation").style.display = "none";
             document.getElementById("select_qyteti").style.borderColor = "black";


      }








   }else if((emriValid.test(emri) == true) && (mbiemriValid.test(mbiemri) == true) && (emailValid.test(email) == true) && (numriValid.test(numri) == true) 
             && (textareaValid.test(textarea) == true) && selecti !== ""

            ){

       
        document.getElementById("green_message").style.display = "block";
         document.getElementById("green_message").style.color = "green";
            document.getElementById("emri_input").style.borderColor = "black";
               document.getElementById("mbiemri_input").style.borderColor = "black";
                  document.getElementById("email_input").style.borderColor = "black";
                    document.getElementById("numri_input").style.borderColor = "black";
                      document.getElementById("textarea_input").style.borderColor = "black";
                        document.getElementById("select_qyteti").style.borderColor = "black";



            document.getElementById("h5_emri_validation").style.display = "none";
            document.getElementById("h5_mbiemri_validation").style.display = "none";
            document.getElementById("h5_email_validation").style.display = "none";
            document.getElementById("h5_numri_validation").style.display = "none";
            document.getElementById("h5_textarea_validation").style.display = "none";
            document.getElementById("h5_select_validation").style.display = "none";
            return true;

         

            
     




   }



















}


