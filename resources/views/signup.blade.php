<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Checkout example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>

  <body class="bg-light">

  <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <div class="container-fluid">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>หอพักบ้านภูวรินทร์</h2>
        
      </div>

      <div class="row" >
        
      <div class="col-md-2 order-md-1">
</div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">SIGN UP FORM</h4>
          
          <form action="/signup" method="post">
          {{csrf_field()}}

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">ชื่อ</label>
                <input type="text" class="form-control" name="first_name" id="firstName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">นามสกุล</label>
                <input type="text" class="form-control" name="last_name" id="lastName" placeholder="" value="" required>
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username ไม่เกิน 9 ตัวอักษร" required>
                <div class="invalid-feedback" style="width: 100%;">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Password</label>
              <input type="text" class="form-control" name="pass" id="password" placeholder="Password ไม่เกิน 9 ตัวเลข" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <div class="col-xs-12 text-center">
            <hr class="mb-4">
            <button type="submit" class="btn btn-primary">สมัค account ผู้ใช้</button>
            <a href="/login" class="btn btn-secondary">กลับ</a>
            </div>
          </form>
        </div>
        <div class="col-md-2 order-md-1">
</div>
      </div>

      <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2018 หอพักบ้านภูวรินทร์</p>
        
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
    <script src="../../../../assets/js/vendor/holder.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      // (function() {
      //   'use strict';

      //   window.addEventListener('load', function() {
      //     // Fetch all the forms we want to apply custom Bootstrap validation styles to
      //     var forms = document.getElementsByClassName('needs-validation');

      //     // Loop over them and prevent submission
      //     var validation = Array.prototype.filter.call(forms, function(form) {
      //       form.addEventListener('submit', function(event) {
              
      //         form.classList.add('was-validated');
      //       }, false);
      //     });
      //   }, false);
      // })();

      
    </script>
</html>
