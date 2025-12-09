<?php

echo "<script>console.log('form.php is running');</script>";

include './includes/connection.php'; 

if (isset($_POST["btn_submit"])) {

    $fullname = $_POST['form_fullname'] ?? '';
    $email    = $_POST['form_email'] ?? '';
    $city     = $_POST['form_city'] ?? '';
    $country  = $_POST['form_country'] ?? '';

    $sql = "INSERT INTO tbl_form (full_name, email, city, country)
            VALUES ('$fullname', '$email', '$city', '$country')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("New record added");</script>';
    } else {
        echo '<script>alert("Error inserting data");</script>';
    }
}

if (isset($_POST["btn_reset"])) {
    echo '<script>alert("Form reset");</script>';
}

$conn->close();

?>

<style>
    /* From Uiverse.io by Spacious74 */ 
.container {
  border: solid 1px #ffffffff;
  padding: 20px;
  border-radius: 20px;
  background-color: #fff;
} 

.container .heading {
  font-size: 1.3rem;
  margin-bottom: 20px;
  font-weight: bolder;
}

.form {
  max-width: 300px;
  display: flex;
  flex-direction: column;
  gap: 20px;
}

.form .btn-container {
  width: 100%;
  display: flex;
  align-items: center;
  gap: 20px;
}

.form .btn {
  padding: 10px 20px;
  font-size: 1rem;
  text-transform: uppercase;
  letter-spacing: 3px;
  border-radius: 10px;
  border: solid 1px #000105ff;
  border-bottom: solid 1px #00070fff;
 
  color: #0a0808ff;
  font-weight: bolder;
  transition: all 0.2s ease;

    inset 0px -4px 5px #002cbb;
}

.form .btn:active {
  box-shadow: inset 0px 4px 5px #0070f0, inset 0px -4px 5px #002cbb;
  transform: scale(0.995);
}

.input-field {
  position: relative;
}

.input-field label {
  position: absolute;
  color: #8d8d8d;
  pointer-events: none;
  background-color: transparent;
  left: 15px;
  transform: translateY(0.6rem);
  transition: all 0.3s ease;
}

.input-field input {
  padding: 10px 15px;
  font-size: 1rem;
  border-radius: 8px;
  border: solid 1px #8d8d8d;
  letter-spacing: 1px;
  width: 100%;
}

.input-field input:focus,
.input-field input:valid {
  outline: none;
  border: solid 1px #0034de;
}

.input-field input:focus ~ label,
.input-field input:valid ~ label {
  transform: translateY(-51%) translateX(-10px) scale(0.8);
  background-color: #fff;
  padding: 0px 5px;
  color: #0034de;
  font-weight: bold;
  letter-spacing: 1px;
  border: none;
  border-radius: 100px;
}

.form .passicon {
  cursor: pointer;
  font-size: 1.3rem;
  position: absolute;
  top: 6px;
  right: 8px;
}

.form .close {
  display: none;
}


</style>

   <h5 class="card-title">Form</h5>

   <!-- Floating Labels Form -->
      <form class="row g-3" method="POST" action="index.php?page=form">
         <div class="col-md-12">
           <div class="form-floating">
                    <input type="text" class="form-control" id="floatingName" placeholder="Your Name" name="form_fullname">
                    <label for="floatingName">Your Name</label>
                  </div>
                </div>

        <div class="col-md-6">
         <div class="form-floating">
            <input type="text" class="form-control" id="floatingEmail"
                placeholder="Your Email" name="form_email" autocomplete="off">
                <label for="floatingEmail">Your Email</label>
         </div>
       </div>
                  
        <div class="col-md-6">
         <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword"
                   placeholder="Password" 
                   autocomplete="new-password">
            <label for="floatingPassword">Password</label>
         </div>
       </div>
              
        <div class="col-md-6">
         <div class="col-md-12">
           <div class="form-floating">
                      <input type="text" class="form-control" id="floatingCity" placeholder="City" name="form_city">
                      <label for="floatingCity">City</label>
          </div>
       </div>
     </div>
                
     
        <div class="col-md-4">
          <div class="form-floating mb-3">
                    <select class="form-select" id="floatingSelect" aria-label="Country" name="form_country">
                      <option value="London" selected>London</option>
                      <option value="Tokyo" selected>Tokyo</option>
                      <option value="Paris" selected>Paris</option>
                    </select>
                    <label for="floatingSelect">Country</label>
          </div>
         </div>
              
         <div class="col-md-2">
           <div class="form-floating">
                    <input type="text" class="form-control" id="floatingZip" placeholder="Zip">
                    <label for="floatingZip">Zip</label>
            </div>
        </div>
               
        <div class="text-center">
                  <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button>
                  <button type="submit" class="btn btn-secondary" name="btn_reset">Reset</button>
          </div>

 </form><!-- End floating Labels Form -->

       