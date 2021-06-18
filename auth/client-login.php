
<head>
    <title>Flow Digital || Admin Panel</title>
    <?php include '../layouts/head.php'; ?>
    <!-- Bootstrap Css -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
<link href="../assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/custom.css" rel="stylesheet" type="text/css" />
<link href="../assets/css/responsive.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="../assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,100;1,400;1,700;1,900&family=Poppins:ital,wght@0,200;0,400;0,500;1,100;1,200;1,300;1,400&display=swap" rel="stylesheet">
</head>

<?php include '../layouts/body.php'; ?>
<body class="auth-body-bg">
    <div>
        <div class="container-fluid p-0">
            <div class="row g-0">
               <div class="col-xl-4 col-md-12 col-sm-12">
               <div class="left_side h-100">
                  <div class="login">
                  <div class="logo p-5  d-flex gap-3 align-items-center">
                       <div>
                       <img src="../assets/images/img/login-logo@2x.png">
                       </div>
                       <div>
                       <img src="../assets/images/img/client@2x.png">
                       </div>
 
                   </div>
                  </div>
                   <div class="bottom_img">
                   <img src="../assets/images/img/banner-hand@2x.png" class="">
                   </div>
               </div>

               </div>

               <div class="col-xl-8 col-md-12 col-sm-12">
               <div class="right_side_login h-100">
                   <div class="back">
                       <p>  <a href="start.php"> <i class="mdi mdi-arrow-left"></i> &nbsp; Back</a></p>
                   </div>
                   <div class="login_title">
                       <h1 class="">Welcome Back</h1>
                       <p>Don't have an account? &nbsp;<span><a href="#">Sign Up Now</a></span></p>
                    </div>
                    <div class="select_role">
                        <div class="login-form">
                        <div class="mt-4">
                                        <form action="#" autocomplete="off">

                                            <div class="input_bottom">
                                                <input type="text" class="form-control" id="username" placeholder="Username" autocomplete="off">
                                            </div>

                                            <div class="input_bottom">
                                                <div class="input-group auth-pass-inputgroup">
                                                    <input type="password" class="form-control" placeholder="Password" aria-label="Password" autocomplete="off">
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="remember-check" value="Remember me">
                                                <label class="form-check-label" for="remember-check">
                                                    Remember me
                                                </label>
                                                <div class="float-end">
                                                    <a href="forgot-password.php">Forgot password?</a>
                                                </div>
                                            </div>

                                            <div class="mt-3 d-grid">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit">Log In</button>
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
               </div>
               </div>

</body>
</html>