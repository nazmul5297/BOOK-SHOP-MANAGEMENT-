

<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="images/icons/favicon.png"/>
  <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/themify/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <link rel="stylesheet" type="text/css" href="fonts/elegant-font/html-css/style.css">
  <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
  <link rel="stylesheet" type="text/css" href="css/util.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/login.css">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body class="animsition">
  <section >
    <div class="container">
      <div class="row">
        <div class="col-md-4 login-sec">
          <h2 class="text-center">Login Now</h2>

          <form class="login-form" action="auth-admin.php" method="POST">
            <div class="form-group">
              <label for="exampleInputEmail1" class="text-uppercase">Username</label>
              <input name="uid" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" class="text-uppercase">Password</label>
              <input name="upass" type="password" class="form-control" placeholder="">
            </div>
            <div class="form-check">
              <button type="submit" name="submit" class="btn btn-login float-right">Submit</button>
            </div>
          </form>
        </div>
    </div>
  </section>

  <script type="text/javascript" src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="vendor/animsition/js/animsition.min.js"></script>
  <script type="text/javascript" src="vendor/bootstrap/js/popper.js"></script>
  <script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="vendor/select2/select2.min.js"></script>
  <script type="text/javascript" src="vendor/daterangepicker/moment.min.js"></script>
  <script type="text/javascript" src="vendor/daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="vendor/slick/slick.min.js"></script>
  <script type="text/javascript" src="js/slick-custom.js"></script>
  <script type="text/javascript" src="vendor/sweetalert/sweetalert.min.js"></script>
  <script src="js/main.js"></script>



</body>
</html>
