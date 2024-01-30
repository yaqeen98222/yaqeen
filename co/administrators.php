
<!DOCTYPE html>
<html lang="ar">
<head> 
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js" integrity="sha256-+C0A5Ilqmu4QcSPxrlGpaZxJ04VjsRjKu+G82kl5UJk=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css" integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Administrators</title>
 </head>
 <body>
<p class="pNot">*This section is for administrators only*</p>
  <?php
require_once('database/dbconnection.php');
if(!$conn){
    echo 'Error:'  . mysqli_connect_error();
    }
    ?> 
    
    <?php
      $admincmnt = $_POST['admincmnt'];
      $Pnumber= $_POST['Patientnumber'];
     
      if(isset($_POST['submit'])){
    
          $ss=mysqli_query($conn,"UPDATE patients
        SET Admin_comment = '$admincmnt' WHERE Patient_number = '$Pnumber'");
    ?>
<script>
var toastMixin = Swal.mixin({
    toast: true,
    icon: 'success',
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
title: 'The report has been sent'
  });

if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php


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
  width: 100%; 
  
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

.pNot{ 
  color: red;
  font-family: 'Amiri', serif;
  text-align: center;
  background-color: black;
  border-radius: 25px;
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

input[type=text]{
  display: inline-block;
  width: 300px;
  text-align: center;
}

input[type=text]{ 
  width: 100%; 
  margin-bottom: 10px; 
  outline: none;
  padding: 100px;
  font-size: 13px;
  color: black;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  resize: vertical;
  text-align:right;
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

  button.issa2:hover{
    background-color:#000;
}
  button.issa22:hover{
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


}
  label {
  display: inline-block;
  width: 300px;
  text-align: left;
}


h4 {
  text-align: center;
}

.styled-table {
    width: 100%;
    border-collapse: collapse;
    font-size: 0.8em;
    font-family: 'Amiri', serif;
    min-width: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
    text-align: center;
    margin: 0 auto;

}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;    
}

.styled-table th,
.styled-table td {
    padding: 0px 5px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #00b300;
}
.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}


    .modal2-body {
        display: flex;
        padding: 5px;
        border-radius: 5px;
        flex-direction: column;
        gap: 5px;
        margin: 10px;
        max-height: 150px;

        /* Control snap from here */
        overflow-y: auto;
        overscroll-behavior-y: contain;
        scroll-snap-type: y mandatory;
    }

    .modal2-body > div:last-child {
        scroll-snap-align: start;
    }

</style>

<div class= "ordersite">

<button class="issa22" id="myBtn22">Patients record</button>
 <!-- The Modal -->
<div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <div class="modal-header">
      <span class="close">&times;</span>
<h2>Send a report</h2>
    </div>
    <div class="modal-body">
  <form  method="POST">
<b><label class="l1">Patient phone number:</label><br></b>

<input class ="cstmrcmnt"type="number" name="Patientnumber" id="Patientnumber" placeholder="Phone number here" required><br>

<b><label class="l1">Administrator's report:</label><br></b>
  <textarea id="admincmnt" name="admincmnt" rows="8" cols="36" required></textarea>

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
<h2>Patients record</h2>
    </div>
    <div class="modal2-body">
<?php
$result = mysqli_query($conn,"SELECT * FROM patients");

    if(mysqli_num_rows($result)) {
?>
<table class="styled-table" style="resize:both;">

  <tr>
  <tr>
    <th>Patient_name</th>
    <th>Patient_number</th>
    <th>Patient_age</th>
    <th>Type_disease</th>
    <th>Special_need</th>
    <th>Patient_comment</th>
    <th>Date_registration</th>
  </tr>
<?php
 while($row = mysqli_fetch_array($result)){
 $datetime = $row['order_time'];
?>
    <tr>
      <td><?php echo $row['Patient_name']; ?></td>
      <td><?php echo $row['Patient_number'];  ?></td>
      <td><?php echo $row['Patient_age']; ?></td>
      <td><?php echo $row['Type_disease']; ?></td>
      <td><?php echo $row['Special_need']; ?></td>
      <td><?php echo $row['Patient_comment']; ?></td>
      <td><?php echo $row['Date_registration']; ?></td>
    </tr>
    <?php
    }    
    }
    ?>
    </table>
    </div>

  </div>

</div>

<button class="issa2" id="myBtn">Send a report</button>


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

</body>
</html>


