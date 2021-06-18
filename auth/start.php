
<head>
    <title>Flow Digital || Admin Panel</title>
    <?php include '../layouts/head.php'; ?>
    <link rel="shortcut icon" href="../assets/images/favicon.ico">
    <!-- Bootstrap Css -->
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
               <div class="col-xl-4 col-lg-4 col-md-12">
               <div class="left_side h-100">
                   <div class="logo p-5">
                       <img src="../assets/images/img/logo@2x.png">
                   </div>
                   <div class="bottom_img">
                   <img src="../assets/images/img/banner-hand@2x.png">
                   </div>
               </div>

               </div>

               <div class="col-xl-8 col-lg-8 col-md-12">
               <div class="right_side h-100">
                   <div class="start">
                       <h1 class="pb-2">Hi there!</h1>
                       <p>Select your role to continiue</p>
                    </div>
                    <div class="select_role">
                        <ul>
                            <li>
                                <a href="client-login.php">
                                <div class="d-sm-flex gap-3 align-items-center">
                                        <div class=""> <i class="mdi mdi-account-multiple"></i> </div>
                                        <div class="i_am">
                                        <span class="fw-bold font-size-20">I'm a Client</span></br>
                                        <span>I need to hire talents and manage projects.</span>
                                        </div>

                                    </div>
                            </a></li>
                            <li>
                                <a href="talent-login.php">
                                    <div class="d-sm-flex gap-3 align-items-center">
                                        <div class=""> <i class="bx bx-smile align-middle "></i> </div>
                                        <div class="i_am">
                                        <span class="fw-bold font-size-20">I'm a Talent</span></br>
                                    <span>I need a freelancer, fullfull timer, part timer that wants to earn</span>
                                        </div>

                                    </div>
                               
                                
                            </a></li>
                        </ul>
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