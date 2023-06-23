<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form Validations</title>
  <style>
    .required-field::after {
      content: "*";
      color: red;

    }
  </style>
</head>

<body>
  <div class="wrapper col-12 ">
    <div class='header bg-danger'>
      <h1 class='text-center text-white'>Order/Delivery Tracking</h1>
      <h3 class='text-center text-white'>Trace Your Order</h3>
    </div>

    <form action="validate.php" method="post">
      <!-- personal info -->
      <div class="personalInfo">
        <h4 class='text-danger mt-5 ml-5'>Personal Info</h4>
        <hr>
        <div class="form-group col-6">
          <!-- name -->
          <div class="required-field mx-sm-3 mb-2 row"> Name</div>
          <input type="text" class="form-control" name='name' required>
          <br>
          <!-- e-mail -->
          <div class="required-field mx-sm-3 mb-2 row"> Email</div>
          <input type="text" class="form-control" name='email' required>
          <br>
          <!-- contact-number -->
          <div class="required-field mx-sm-3 mb-2 row"> Contact Number</div>
          <input type="text" class="form-control" name='contact' required>
        </div>
        <p class="text-left">As per your order </p>
      </div>

      <!-- order info -->
      <div class="personalInfo">
        <h4 class='text-danger mt-5 ml-5'>Order Information</h4>
        <hr>
        <div class="form-group col-6">
          <!-- order id -->
          <div class="required-field mx-sm-3 mb-2 row"> Order ID </div>
          <input type="text" class="form-control" name='oid' required>
          <br>
          <!-- address -->
          <div class="required-field mx-sm-3 mb-2 row">Delivery Destination </div>
          <input type="text" class="form-control" name='address' required>
          <br>
          <!-- contact-number -->
          <div class="required-field mx-sm-3 mb-2 row">When did you place your order?</div>
          <input type="date" class="form-control" name='date' required>
        </div>
      </div>
  </div>
  </div>

  <button type="submit" class="btn btn-danger align-center m-4">Submit</button>
  </form>
  </div>
</body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</html>