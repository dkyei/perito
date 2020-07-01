<?php include 'controllers/authController.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Skill Update</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/checkout/">

    <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
    font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
    .bd-placeholder-img-lg {
        font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
    <h2>Skills Details</h2>

  </div>


    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Skills Update</h4>
      <form  mehtod="post" action="index.php" class="needs-validation" novalidate>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="skill1">Skill 1</label>
            <input type="text" class="form-control" id="skill1" placeholder="Full Stack Web developer" value="" required>
            <div class="invalid-feedback">
Valid skill 1 is required.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="skill2">Skill 2</label>
            <input type="text" class="form-control" id="skill2" placeholder="UI/UX designer" value="" required>
            <div class="invalid-feedback">
Valid skill 2 is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="skill3">skill3</label>
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"></span>
            </div>
            <input type="text" class="form-control" id="skill3" placeholder="Motion/Still Graphics" required>
            <div class="invalid-feedback" style="width: 100%;">
    Your skill 3 is required.
            </div>
          </div>
        </div>



        <div class="mb-3">
          <label for="education">Education</label>
          <input type="text" class="form-control" id="education" placeholder="University Graduate" required>
          <div class="invalid-feedback">
Please enter your education level.
          </div>
        </div>

        <div class="mb-3">
          <label for="certification">Other certifications<span class="text-muted">(Optional)</span></label>
          <input type="text" class="form-control" id="certification" placeholder="">
        </div>

          <div class="mb-3">
              <label for="link1">Link to past projects</label>
              <input type="text" name="link1" class="form-control" id="link1" placeholder="">
          </div>

          <div class="mb-3">
              <label for="link2">Link to past projects</label>
              <input type="text" name="link2" class="form-control" id="link2" placeholder="">
          </div>
          <div class="mb-3">
              <label for="link1">Interest</label>
              <input type="text" name="link1" class="form-control" id="link1" placeholder="">
          </div>



          <hr class="mb-4">
        <button name="submit-btn" class="btn btn-primary btn-lg btn-block" type="submit">Submit</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2017-2020 Company Name</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="../assets/dist/js/bootstrap.bundle.js"></script>
        <script src="form-validation.js"></script></body>
</html>
