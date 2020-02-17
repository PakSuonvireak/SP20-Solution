<?php

    session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = $_POST['username'];
      $password = $_POST['password'];
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($username == 'admin' && $password == 'admin') {
         $_SESSION['login_user'] = $username;
         
         header("location: admin/");
      }else {
         $error = "Your Username or Password is incorrect. Try again";
      }
   }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mannat Themes">
    <meta name="keyword" content="">

    <title>SYNTRA | Responsive Web App Kit</title>

    <!-- Theme icon -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.ico">

    <!-- Theme Css -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.css">
    <link href="admin/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="admin/assets/css/slidebars.min.css" rel="stylesheet">
    <link href="admin/assets/css/icons.css" rel="stylesheet">
    <link href="admin/assets/css/menu.css" rel="stylesheet" type="text/css">
    <link href="admin/assets/css/style.css" rel="stylesheet">
</head>

<body class="sticky-header">
    <section class="bg-login">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="wrapper-page">
                        <div class="account-pages">
                            <div class="account-box">
                                <div class="card m-b-30">
                                    <div class="card-body">
                                        <div class="card-title text-center">
                                            <img src="admin/assets/images/logo_sm_2.png" alt="" class="">
                                            <h5 class="mt-3"><b>SP20 Solution Super Admin</b></h5>
                                        </div>
                                        <form class="form mt-5 contact-form" action="" method="post">
                                            <div class="form-group ">
                                                <div class="col-sm-12">
                                                    <input class="form-control form-control-line" type="text" name="username" placeholder="Username" required>
                                                </div>
                                            </div>
                                            <div class="form-group ">
                                                <div class="col-sm-12">
                                                    <input class="form-control form-control-line" type="password" name="password" placeholder="Password" required>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12 mt-4">
                                                    <button class="btn btn-primary btn-block" type="submit">Log In</button>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12 mt-4">
                                                    <small class="text-danger">
                                                        <?php if(isset($error)){echo $error;} ?></small>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-sm-12 mt-4 text-center">
                                                    <a href="/sp20_solution">Go To Home <i class="fas fa-arrow-right"></i></a>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="admin/assets/js/jquery-3.2.1.min.js"></script>
    <script src="admin/assets/js/popper.min.js"></script>
    <script src="admin/assets/js/bootstrap.min.js"></script>
    <script src="admin/assets/js/jquery-migrate.js"></script>
    <script src="admin/assets/js/modernizr.min.js"></script>
    <script src="admin/assets/js/jquery.slimscroll.min.js"></script>
    <script src="admin/assets/js/slidebars.min.js"></script>
    <!-- Parsley js -->
    <script type="text/javascript" src="admin/assets/plugins/parsleyjs/dist/parsley.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('form').parsley();
    });
    </script>

    <!--app js-->
    <script src="admin/assets/js/jquery.app.js"></script>
</body>

</html>