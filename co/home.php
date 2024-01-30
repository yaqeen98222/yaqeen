
<!DOCTYPE html>
<html lang="ar">
<head> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Welcome</title>
<button class="issa22" id="myBtn22">Sign in</button>
 </head>
 <body>
 <?php
require_once('database/dbconnection.php');
if(!$conn){
    echo 'Error:'  . mysqli_connect_error();
    }

$pname1= $_POST['adminnumber'];
$num11 =   $_POST['adminpass'];

if(isset($_POST['enter'])){
    
     $checkadmin = mysqli_query($conn,"SELECT * FROM administrators WHERE admin_number='".$_POST['adminnumber']."'AND admin_pass='".$_POST['adminpass']."'"); 
    
    if(mysqli_num_rows($checkadmin)) {
    header('Location: administrators.php');
    }


        if(!mysqli_num_rows($checkadmin)) {
        ?>    
<script>
var toastMixin = Swal.mixin({
    toast: true,
    icon: 'error',
    title: 'General Title',
    animation: false,
    position: 'center',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  });

  toastMixin.fire({
  animation: true,
title: 'Error in entered data'
  });

if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
    <?php  
    }
    
    
}
    ?>    
     
<?php
$randomNumber = rand();
$test= $_POST['number1'];

$timecheck22=mysqli_query($conn,"SELECT Admin_comment FROM patients WHERE Patient_number='".$_POST['number1']."'"); 
?>
  <div class="popup-card">
  <button id="close-btn" class="close-btn">
<span class="material-symbols-rounded close-icon"> Close </span>
  </button>
  <div class="content" >
<table class="styled-table" style="resize:both;"  style="max-width: 400px">
  <tr>
  <tr>
  </tr>
<?php
 while($row = mysqli_fetch_array($timecheck22)){
 $datetime = $row['Admin_comment'];
?>
    <tr>
      <td><?php echo $row['Admin_comment']; ?></td>
    </tr>
    <?php
    
    if($row['Admin_comment']==null) {
echo "<p>There is no data recorded</p>";
    }
    }    
    ?>
    </table>
  </div>
</div>

  <div class="popup-card1">
  <button id="close-btn1" class="close-btn1">
<span class="material-symbols-rounded close-icon"> Close </span>
  </button>
  <div class="content">
<h5>Dear owner of the number: <?php echo $_POST['number'];?></h5>
    <p>
Your request has been registered Access code to your file <?php echo $randomNumber;?> Screenshot or copy the code
    </p>
  </div>
</div>
<?php

$pname= $_POST['name'];
$num =   $_POST['number'];
$page =   $_POST['age'];
$pdisease = $_POST['disease-names'];
$pyn = $_POST['yes-no'];
$cmnt = $_POST['cstmrcmnt'];


date_default_timezone_set('Asia/Muscat');
$date = date('d-m-y h:i:s');

    
if(isset($_POST['submit'])){
    
    $timecheck = mysqli_query($conn,"SELECT * FROM patients WHERE Patient_number='".$_POST['number']."'"); 
    
    if(mysqli_num_rows($timecheck)) {
    ?>
 <script>
var toastMixin = Swal.mixin({
    toast: true,
    icon: 'error',
    title: 'General Title',
    animation: false,
    position: 'center',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  });

  toastMixin.fire({
  animation: true,
title: 'This user already exists'
  });

if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    
      }


</script>

<?php
}
 
   
    if(!mysqli_num_rows($timecheck)){
        
        $sql = "INSERT INTO patients(Patient_name,Patient_number,Patient_age,Type_disease,Special_need,Patient_comment,Patient_pass,Date_registration) VALUES ('$pname', '$num','$page','$pdisease','$pyn','$cmnt','$randomNumber','$date')"; 
        mysqli_query($conn, $sql);
        ?>

 <script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
let popup = document.getElementsByClassName("popup-card1")[0];
let closeBtn = document.getElementById("close-btn1");

function showPopup() {
  setTimeout(() => {
    popup.style.transform = "translateY(0)";
  }, 50);
}

closeBtn.addEventListener("click", (e) => {
  popup.style.transform = "translateY(-70vh)";
});

window.onload = showPopup();


if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php
}
}

?>

 <style> 
@import url(https://fonts.googleapis.com/earlyaccess/amiri.css);

.ordersite{
  font-family: 'Amiri', serif;
}
  
  .number {
  padding-left: 25px;
  background-size: 15px;
  
}


  .cstmrcmnt{
  padding-left: 25px;
  background-size: 20px;
  
}

  .form-control{
  padding-left: 25px;
  background-size: 20px;
  
}
 
.ordersite{ 
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -150px 0 0 -150px;
  width:300px;
  height:300px;
}



input[type=submit]{ 
  width: 100%; 
  margin-bottom: 10px; 
  outline: none;
  padding: 10px;
  font-size: 13px;
  color: black;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  resize: vertical;
  font-family: 'Amiri', serif;
}

.pNot{ 
  color: red;
  font-family: 'Amiri', serif;
  text-align: center;
}

h2 {
  text-align: center;
}

  input[type=submit] {
  background-color: #0066cc;
  color: white;
}

body {
      background-color: #3399ff;

}

 .l1 {
 width: 100%;
  display: inline-block;
  text-align: left;
}
 .l2 {
 width: 100%;
  display: inline-block;
  text-align: left;
}
input[type=text]{
  display: inline-block;
  width: 300px;
  text-align: center;
}

input[type=text]{ 
  width: 100%; 
  margin-bottom: 10px; 
  outline: none;
  padding: 10px;
  font-size: 13px;
  color: black;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  resize: vertical;
}

input[type=number]{ 
  width: 100%; 
  margin-bottom: 10px; 
  outline: none;
  padding: 10px;
  font-size: 13px;
  color: black;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  resize: vertical;
  text-align: center;
}



select{ 
  width: 100%; 
  margin-bottom: 10px; 
  outline: none;
  padding: 10px;
  font-size: 13px;
  color: black;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  resize: vertical;
}



button.issa2{
  width: 100%; 
  margin-bottom: 10px; 
  outline: none;
  padding: 10px;
  font-size: 15px;
  color: black;
  border-radius: 10px;
  box-sizing: border-box;
  margin-top: 6px;
  resize: vertical;
  background-color: #0066cc;
  color: white;
  border-top: 3px solid orange;
  font-family: 'Amiri', serif;
    
}
button.issa22{
  width: 15%; 
  margin-bottom: 3px; 
  outline: none;
  padding: 5px;
  font-size: 15px;
  color: black;
  border-radius: 10px;
  box-sizing: border-box;
  margin-top: 6px;
  resize: vertical;
  background-color: #0066cc;
  color: white;
  border-top: 3px solid orange;
  font-family: 'Amiri', serif;
    
}

  button.issa2:hover{
    background-color:#000;
}

button.cnsl{
  width: 100%; 
  margin-bottom: 10px; 
  outline: none;
  padding: 10px;
  font-size: 15px;
  color: black;
  border-radius: 10px;
  box-sizing: border-box;
  margin-top: 6px;
  resize: vertical;
  background-color: #0066cc;
  border-top: 3px solid orange;
  color: white;
  font-family: 'Amiri', serif;
    
}

  button.cnsl:hover{
    background-color:#000;
}

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 25px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #3399ff;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 10px;
  background-color: #3399ff;
  color: white;
}



/* The Modal2 */
.modal2 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 25px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}
.modal2-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close22 {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close22:hover,
.close22:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal2-header {
  padding: 2px 16px;
  background-color: #3399ff;
  color: white;
}

.modal2-body {padding: 2px 16px;}

.modal2-footer {
  padding: 2px 10px;
  background-color: #3399ff;
  color: white;
}




/* The Modal3 (background) */
.modal3 {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  -webkit-animation-name: fadeIn; /* Fade in the background */
  -webkit-animation-duration: 0.4s;
  animation-name: fadeIn;
  animation-duration: 0.4s
}

/* Modal3 Content */
.modal3-content {
  position: fixed;
  bottom: 0;
  background-color: #fefefe;
  width: 100%;
  -webkit-animation-name: slideIn;
  -webkit-animation-duration: 0.4s;
  animation-name: slideIn;
  animation-duration: 0.4s
}

/* The Close Button */
.close3 {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close3:hover,
.close3:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal3-header {
  padding: 2px 16px;
  background-color: #3399ff;
  color: white;
  text-align: center;
}

.modal3-body {padding: 2px 16px;}

.modal3-footer {
  padding: 2px 16px;
  background-color: #3399ff;
  color: white;
}

/* Add Animation */
@-webkit-keyframes slideIn {
  from {bottom: -300px; opacity: 0} 
  to {bottom: 0; opacity: 1}
}

@keyframes slideIn {
  from {bottom: -300px; opacity: 0}
  to {bottom: 0; opacity: 1}
}

@-webkit-keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

@keyframes fadeIn {
  from {opacity: 0} 
  to {opacity: 1}
}

img{
    display: flex;
    justify-content: center;
    border-radius: 40%;
    margin-left: auto;
    margin-right: auto;
    height: 20vh;
    opacity: 0.8;
    border-top: 3px solid orange;
    background-color: coral;
    box-shadow: 10px 10px 100px 10px lightblue;
}


.popup-card {
  width: auto;
  height: auto;
  position: absolute;
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  background-color: #ffffff;
  border-radius: 0.5rem;
  padding: 2rem 1.5rem;
  transition: all 0.8s ease;
  transform: translateY(-70vh);
  top: 15px;
}

.popup-card1 {
  width: auto;
  position: absolute;
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  background-color: #ffffff;
  border-radius: 0.5rem;
  padding: 2rem 1.5rem;
  transition: all 0.8s ease;
  transform: translateY(-70vh);
  top: 15px;
}


.icon {
  width: 2.8rem;
  height: 2.8rem;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #FFDDDE;
  color: #e6153d;
  border-radius: 50%;
}

.content > h5 {
  font-size: 1.1rem;
  font-weight: 600;
  color: #404656;
  font-family: 'Amiri', serif;
}

.content > p {
  font-size: 0.8rem;
  font-weight: 500;
  line-height: 1.2rem;
  color: #666b78;
  margin-top: 0.5rem;
  font-family: 'Amiri', serif;
}

.close-btn {
  width: 1.5rem;
  height: 1.5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #ffffff;
  background-color: #e6153d;
  cursor: pointer;
  border: none;
  border-radius: 50%;
  position: absolute;
  right: 1rem;
  top: 1rem;
}

.close-icon {
  font-size: 0.5rem;
}


.logo{
  border: none;
  border-radius: 0 0 0.2em 0.2em;
  color: #fff;
  font-size: 1em;
  transform-origin: 50% 5em;
}

.close-btn1 {
  width: 1.5rem;
  height: 1.5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #ffffff;
  background-color: #e6153d;
  cursor: pointer;
  border: none;
  border-radius: 50%;
  position: absolute;
  right: 1rem;
  top: 1rem;
}





button.submit1{
    background-color:#000;
}

button.sub{
    background-color:#000;
}

.styled-table {
    font-family: 'Amiri', serif;
    text-align: left;
}


.popup-cardw {
  width: 22rem;
  display: flex;
  align-items: flex-start;
  gap: 1rem;
  background-color: #ffffff;
  border-radius: 0.2rem;
  padding: 2rem 1.5rem;
  position: relative;
  transition: all 0.8s ease;
  transform: translateY(-70vh);
}




.contentw > h3 {
  font-size: 1.1rem;
  font-weight: 600;
  color: #404656;
}

.contentw > p {
  font-size: 0.8rem;
  font-weight: 500;
  line-height: 1.2rem;
  color: #666b78;
  margin-top: 0.5rem;
}

.close-btnw{
  width: 1.5rem;
  height: 1.5rem;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #ffffff;
  background-color: #e6153d;
  cursor: pointer;
  border: none;
  border-radius: 50%;
  position: absolute;
  right: 1rem;
  top: 1rem;
}

.close-iconw {
  font-size: 0.5rem;
}
</style>

<div class= "ordersite">
    <div class="logo">
    <img src="logo.jpg" style="width:90px;height:100px;" align="center">
    </div>
    
<br>
<button class="issa2" id="myBtn">New registration</button>
 <!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
    <h2>Register a new patient</h2>
    </div>
    <div class="modal-body">
  <form  method="POST" id="Register-patient" onsubmit="submitFormReturn();return false;">
  <b><label class="l1">Patient's full name:</label><br></b>
<input class ="text"type="text" name="name" id="name" required><br>
      
 <b><label class="l1">Phone number:</label><br></b>
<input class ="number"type="number" name="number" id="number"  min="8" required><br>

<b><label class="l1">Patient age:</label><br></b>
<input class ="age"type="number" name="age" id="age" required><br>

<b><label class="l1">Type or name of the disease:</label><br></b>
<select name="disease-names" id="disease-names">
<option value="Hypertension">Hypertension</option>
<option value="Diabetes">Diabetes</option>
<option value="Obesity">Obesity</option>
<option value="Hypertension,Diabetes">Hypertension,Diabetes</option>
<option value="All">All</option>
</select

<label class="l1">People with special needs?</label><br>
<select name="yes-no" id="yes-no">
<option value="No">NO</option><option value="Yes">YES</option></select>

<b><label class="l1">Describe the situation (optional):</label><br></b>
<input class ="cstmrcmnt"type="text" name="cstmrcmnt" id="cstmrcmnt" placeholder="Case description here"><br>
<input class="first" type="submit"  name="submit" id="submit" value="Send report"><br>
  </form>
      
    </div>

  </div>

</div>
 <!-- The Modal2 -->
<div id="myModal2" class="modal2">
  <!-- Modal2 content -->
  <div class="modal2-content">
    <div class="modal2-header">
      <span class="close22">&times;</span>
<h2>Sign in</h2>
    </div>
    <div class="modal2-body">
  <form  method="POST">  
<p class="pNot">*This section is for administrators only*</p>
<b><label class="l1">Employee phone number:</label><br></b>
<input class ="number" type="number" name="adminnumber" id="adminnumber"  min="8" placeholder="Phone number" required><br>

<b><label class="l1">Password:</label><br></b>
<input class ="cstmrcmnt"type="text" name="adminpass" id="adminpass" placeholder="Password" required><br>

<input class="first" type="submit"  name="enter" id="enter" value="Signe in"><br>
  </form>
      
    </div>

  </div>

</div>

<button id="cnsl" class="cnsl">Review my order</button>


<!-- The Modal -->
<div id="myModal3" class="modal3">
  <!-- Modal content -->
  <div class="modal3-content">
    <div class="modal3-header">
      <span class="close3">&times;</span>
     <h3>Review the request</h3>
 
    </div>
    <div class="modal3-body">
    <?php  
$num22 =   $_POST['number1'];
$code22 =   $_POST['code'];

    $timenumbercheck = mysqli_query($conn,"SELECT * FROM patients WHERE Patient_number='$num22'AND Patient_pass='$code22'"); 
      
    if(isset($_POST['submit1'])){
    
if(mysqli_num_rows($timenumbercheck)){


?>
<script>
let popup = document.getElementsByClassName("popup-card")[0];
let closeBtn = document.getElementById("close-btn");

function showPopup() {
  setTimeout(() => {
    popup.style.transform = "translateY(0)";
  }, 50);
}

closeBtn.addEventListener("click", (e) => {
  popup.style.transform = "translateY(-70vh)";
});

window.onload = showPopup();


if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php
}
?>
<?php
if(!mysqli_num_rows($timenumbercheck)){
?>
<script>
var toastMixin = Swal.mixin({
    toast: true,
    icon: 'error',
    title: 'General Title',
    animation: false,
    position: 'center',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  });

  toastMixin.fire({
  animation: true,
title: 'Unregistered'
  });

if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php
}
    }
  
    
    ?>
       <form  method="POST">
<b><label class="l2">Your phone number:</label><br></b>
     <input class ="number1"type="number" name="number1" id="number1"  min="8" required><br>
    
<b><label class="l2">Access code:</label><br></b>
    <input class ="code"type="number" name="code" id="code" required>
<input class="sub" type="submit"  name="submit1" id="submit1" value="Inquire about"><br>
  </form>
    </div>
    <div class="modal3-footer">
    
    </div>
  </div>

</div>
</div>

     <div class="popup-cardw">
  <button id="close-btnw" class="close-btnw">
    <span class="close-iconw"> close </span>
  </button>

  <div class="contentw">
    <h3>Welcome to <b>*Fb health*</b>!</h3>
    <p>
     We are very happy that you chose to visit us.
    </p>
  </div>
</div>
</div>  
 <script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>


 <script>
// Get the modal2
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal2
var btn = document.getElementById("myBtn22");

// Get the <span> element that closes the modal2
var span = document.getElementsByClassName("close22")[0];

// When the user clicks the button, open the modal2 
btn.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal2
span.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal2, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
</script>


<script>
// Get the modal3
var modal3 = document.getElementById("myModal3");

// Get the button that opens the modal3
var btn = document.getElementById("cnsl");

// Get the <span> element that closes the modal3
var span = document.getElementsByClassName("close3")[0];

// When the user clicks the button, open the modal3 
btn.onclick = function() {
  modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal3
span.onclick = function() {
  modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}
</script>

<script>
 let popup = document.getElementsByClassName("popup-cardw")[0];
let closeBtn = document.getElementById("close-btnw");

function showPopup() {
  setTimeout(() => {
    popup.style.transform = "translateY(0)";
  }, 1000);
}

closeBtn.addEventListener("click", (e) => {
  popup.style.transform = "translateY(-70vh)";
});
</script>

</body>
</html>


