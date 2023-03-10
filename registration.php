<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Register - International School of Ministry</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/logo1.png" rel="icon">

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <section class="h-100 h-custom" style="background-color: #F8F5ED;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="reg-form col-lg-8 col-xl-6">
        <div class="card rounded-3">
          <img class="img-center" src="assets/img/logo1.png"
            class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
            alt="Sample photo">
          <div class="card-body p-4 p-md-5">
            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 text-center">Student Registration Form</h3>

            <form id="myForm" class="px-md-2">

              <div class="row">
                <div class="col-md-6 mb-4">
                  <label class="form-label" for="form3Example1q">Firstname</label><br/>
                  <input type="text" id="firstname" name="firstname" class="form-control" />
                  <span id="cfirstname" class="error" font-weight-bold></span>
                </div>

                <div class="col-md-6 mb-4">
                  <label class="form-label" for="form3Example1q">Lastname</label><br/>
                  <input type="text" id="lastname" name="lastname" class="form-control" />
                  <span id="clastname" class="error" font-weight-bold></span>
                </div>
              </div>

              <div class="form-outline mb-4"> 
                <label class="form-label" for="form3Example1q">Email</label><br/>
                <input type="email" id="email" name="email" class="form-control" />
                <span id="cemail" class="error" font-weight-bold></span>                
              </div>

              <div class="row">
                <div class="col-md-6 mb-4">
                  <label class="form-label" for="form3Example1q">Country of Residence</label><br/>
                  <select id="country" class="select form-control">
                    <option value="">Select</option>                    
                  </select>
                  <span id="ccountry" class="error" font-weight-bold></span>
                </div>
                <div class="col-md-6 mb-4">
                  <label class="form-label" for="form3Example1q">City of Residence</label><br/>
                  <input type="text" id="city" name="city" class="form-control" />
                  <span id="ccity" class="error" font-weight-bold></span>
                </div>                
              </div>
              <input type="text" id="countryName" name="country" class="form-control" style="display:none" />


              <div class="form-outline mb-4" id="showPhone" style="display:none"> 
                <label class="form-label" for="form3Example1q">Phone Number</label><br/>
                <div class="input-group input-group-sm mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="ccode">+234</span>
                  </div>
                  <input type="text" id="phone" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                </div>
                <span id="cphone" class="error" font-weight-bold></span>
              </div>  
              <input type="text" id="phoneNumber" name="phone_number" class="form-control" style="display:none" />


              <div class="row">                
                <div class="col-md-6 mb-4">
                  <label class="form-label" for="form3Example1q">Gender</label><br/>
                  <select id="gender" name="gender" class="select form-control">
                    <option value="1">Select</option>
                    <option value="Female">Female</option>
                    <option value="Male">Male</option>
                  </select>
                  <span id="cgender" class="error" font-weight-bold></span>
                </div>
                <div class="col-md-6 mb-4">
                  <label class="form-label" for="form3Example1q">Level of Education</label><br/>
                  <select id="education" name="level_of_education" class="select form-control">
                    <option value="1">Select</option>
                    <option value="OND">OND</option>
                    <option value="HND">HND</option>
                    <option value="BSC">BSC</option>
                    <option value="MSC">MSC</option>
                    <option value="PHD">PHD</option>
                    <option value="OTHERS">OTHERS</option>
                  </select>
                  <span id="ceducation" class="error" font-weight-bold></span>
                </div>
              </div> 

              <div class="form-outline mb-4"> 
                <label class="form-label" for="form3Example1q">Are you Baptized in The Holy Spirit with the evidence of Speaking in Tongues?</label><br/>
                <select id="baptized" name="are_you_baptized_in_the_holy_ghost" class="select form-control">
                  <option value="1">Select</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
                <span id="cbaptized" class="error" font-weight-bold></span>
              </div>
              <div class="form-outline mb-4"> 
                <label class="form-label" for="form3Example1q">Have you attended any School of Ministry before?</label><br/>
                <select id="before" name="have_you_attended_any_school_of_ministry_before" class="select form-control">
                  <option value="1">Select</option>
                  <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
                <span id="cbefore" class="error" font-weight-bold></span>
              </div>
              <div class="form-outline mb-4" id="showWhere" style="display:none">
                <label class="form-label" for="form3Example1q">Tell us Where</label><br/>
                <textarea class="form-control"  id="where" name="where" rows="6" placeholder=""></textarea>
                <span id="cwhere" class="error" font-weight-bold></span>
              </div>
              <div class="row">                
                <div class="col-md-6 mb-4">
                  <label class="form-label" for="form3Example1q">Mode of Participation</label><br/>
                  <select id="mode" name="mode_of_participation" class="select form-control">
                    <option value="1">Select</option>
                    <option value="Online">Online</option>
                    <option value="Onsite">Onsite</option>
                  </select>
                  <span id="cmode" class="error" font-weight-bold></span>
                </div>
                <div class="col-md-6 mb-4">
                  <label class="form-label" for="form3Example1q">Are you a Minister</label><br/>
                  <select id="minister" name="are_you_a_minister" class="select form-control">
                    <option value="1">Select</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                  </select>
                  <span id="cminister" class="error" font-weight-bold></span>
                </div>
              </div> 

              <div class="row" id="showMinistry" style="display:none">
                <div class="col-md-6 mb-4">
                  <label class="form-label" for="form3Example1q">Name of Ministry</label><br/>
                  <input type="text" id="ministryname" name="name_of_ministry" class="form-control" />
                  <span id="cministryname" class="error" font-weight-bold></span>
                </div>

                <div class="col-md-6 mb-4">
                  <label class="form-label" for="form3Example1q">Position in Ministry</label><br/>
                  <input type="text" id="position" name="position_in_ministry" class="form-control" />
                  <span id="cposition" class="error" font-weight-bold></span>
                </div>
              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1q">Tell us your Salvation Experience</label><br/>
                <textarea class="form-control"  id="salvation" name="salvation_experience" rows="6" placeholder="Salvation Experience"></textarea>
                <span id="csalvation" class="error" font-weight-bold></span>
              </div>

              <div class="note">
                <p>
                  Pay the tuition fee of NGN50,000 to the following account details.<br/>
                  NAIRA ACCOUNT:  BANK NAME - UBA, ACCOUNT NAME-Femi Lazarus Ministries, 
                  ACCOUNT NUMBER- 2215005289<br/><br/>
                  Or Pay a tuition fee of $67 to the following account details.<br/>
                  DOMICILIARY ACCOUNT: BANK NAME - UBA, ACCOUNT NAME - SPHERE OF LIGHT CHURCH, 
                  ACCOUNT NUMBER - 3003979764, SWIFT CODE - UNAFNGLA. <br/><br/>
                  Kindly note that an evidence of payment will be requested on the successful submission of this
                  registration form. You can also send your evidence of payment to 09030959735 via WhatsApp               
                </p>              
              </div>

              <div class="container">
                <div class="row">
                  <div class="col text-center">
                    <button id="register" class="btn btn-success btn-lg mb-1 register-btn">Submit</button>
                  </div>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- ======= Spinner ======= -->

  <div class="spin"></div>

<!-- ======= Modal ======= -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <p>Your Data has been successfully saved</p>
        <hr/>
        <p>Kindly make a Payment of NGN50,000.00 to the naira account details below.</p>
        <p>2215005289<br/>
          UBA<br/>
          Femi Lazarus  Ministries
        </p>
        <p>Or $67 to the domiciliary account details below</p>
        <p>3003979764<br/>
          UBA<br/>
          Sphere of Light Church<br/>
          Swift Code: UNAFNGLA.
        </p>        
        <p>Click on the button below to send your proof of payment.</p>
      </div>
      <div class="modal-footer">
        <button id="successBtn" style="background-color: #c28e27; border-color: #c28e27" type="button" class="btn btn-primary" data-bs-dismiss="modal">Ok</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="failureModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        Opps! your message wasn't successfuly sent, please try again.
      </div>
      <div class="modal-footer">
        <button type="button" style="text-align: center;" class="btn btn-danger" data-bs-dismiss="modal">Try Again</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->


<script src="assets/js/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/bootstrap.bundle.min.js"></script>

<script>
  var countries;
  $(document).ready(function(){
      $.ajax({
        url:'https://restcountries.com/v2/all',
        type:'get',
        success: function(response){
          countries = response
          countries.forEach(item => {
          $('#country').append(`<option value="${item.callingCodes}">${item.name}</option>`);
        });    
        },
        error: function(){
        }
      });
      
  });


  $(function() {
    $("#country").change(function() {
      var val = $(this).val();
      $("#ccode").text("+"+val);
    })
  })

  $(function() {
    $("#minister").change(function() {
      var val = $(this).val();
      if (val === "Yes"){
        $("#showMinistry").show();
      }
      else{
        $("#showMinistry").hide();
      }
    })
  })

  $(function() {
    $("#before").change(function() {
      var val = $(this).val();
      if (val === "Yes"){
        $("#showWhere").show();
      }
      else{
        $("#showWhere").hide();
      }
    })
  })

  $(function() {
    $("#country").change(function() {
      var val = $(this).val();
      if (val === ""){
        $("#showPhone").hide();
      }
      else{
        $("#showPhone").show();        
      }
    })
  })

  function ValidateForm(){
      var lastname = $("#lastname").val();
      var firstname = $("#firstname").val();  
      var visitoremail = $("#email").val(); 
      var code = $("#ccode").text();
      var digit = $("#phone").val();
      var phone = "(" + code + ")" + " "+ digit;
      var city = $("#city").val();
      var country = $("#country option:selected").text();
      var gender = $("#gender").val();
      var education = $("#education").val();
      var baptized = $("#baptized").val();
      var before = $("#before").val();
      var mode = $("#mode").val();
      var where = $("#where").val();
      var minister = $("#minister").val();
      var ministryname = $("#ministryname").val();
      var position = $("#position").val();
      var salvation = $("#salvation").val();
      var letter = /^[a-zA-Z\s]+$/;
      var email = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
      var number = /^[0-9\s]+$/;
      var valid = true;
      removeMessage();
      
      $("#countryName").val(country);
      $("#phoneNumber").val(phone);

      if(!letter.test(lastname)){
              event.preventDefault();
              document.getElementById("clastname").innerHTML="Input a valid Lastname";
              valid=false;
      }
      
      if(!letter.test(firstname)){
              event.preventDefault();
              document.getElementById("cfirstname").innerHTML="Input a valid Firstname";
              valid=false;
      }
      
      if(!email.test(visitoremail)){
              event.preventDefault();
              document.getElementById("cemail").innerHTML="Input a valid Email Address";
              valid=false;
      }

      if(!number.test(digit)){
              event.preventDefault();
              document.getElementById("cphone").innerHTML="Input a valid Phone Number";
              valid=false;
      }

      if(city == ""){
              event.preventDefault();
              document.getElementById("ccity").innerHTML="This field can't be empty";
              valid=false;
      }

      if(country == ""){
              event.preventDefault();
              document.getElementById("ccountry").innerHTML="This field can't be empty";
              valid=false;
      }

      if(!letter.test(gender)){
              event.preventDefault();
              document.getElementById("cgender").innerHTML="Select your gender";
              valid=false;
      }

      if(!letter.test(education)){
              event.preventDefault();
              document.getElementById("ceducation").innerHTML="Select your Level of Education";
              valid=false;
      }

      if(!letter.test(baptized)){
              event.preventDefault();
              document.getElementById("cbaptized").innerHTML="This field can't be empty";
              valid=false;
      }

      if(!letter.test(before)){
              event.preventDefault();
              document.getElementById("cbefore").innerHTML="Kindly Select";
              valid=false;
      }

      if(!letter.test(mode)){
              event.preventDefault();
              document.getElementById("cmode").innerHTML="Kindly Select";
              valid=false;
      }
      
      if(!letter.test(minister)){
              event.preventDefault();
              document.getElementById("cminister").innerHTML="Kindly Select";
              valid=false;
      }


      if($("#showMinistry").is(':visible')){
        if(ministryname == ""){
              event.preventDefault();
              document.getElementById("cministryname").innerHTML="This field can't be empty";
              valid=false;
        } 

        if(position == ""){
              event.preventDefault();
              document.getElementById("cposition").innerHTML="This field can't be empty";
              valid=false;
        } 
      }   
      
      if($("#showWhere").is(':visible')){
        if(where == ""){
              event.preventDefault();
              document.getElementById("cwhere").innerHTML="This field can't be empty";
              valid=false;
        } 
      }

      if(salvation == ""){
              event.preventDefault();
              document.getElementById("csalvation").innerHTML="This field can't be empty";
              valid=false;
      } 
      return valid;        
  }

  function removeMessage(){
      var eremove = document.querySelectorAll(".error");
      [].forEach.call(eremove, function(el){
          el.innerHTML="";
      });
  }

  $("#register").click(function(e){
    e.preventDefault();  
    var valid = ValidateForm();
    if (valid===true){    
      $(".spin").show(); 
      $.ajax({
        url:'https://api.apispreadsheets.com/data/BbVLiVgfP9Pbb9sS/',
        type:'post',
        data:$("#myForm").serializeArray(),
        success: function(){
          $(".spin").hide(); 
          $('#successModal').modal('show');       
        },
        error: function(){
          $('#failureModal').modal('show'); 
        }
      });   
    } 
  });     


  $('#successBtn').click(function(e){
    window.location.href = "https://wa.me/2349030959735?text=My%20name%20is%20_____________,%20I%20just%20made%20payment%20for%20ISM.";
  });

</script>

</body>

</html>