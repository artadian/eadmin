<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/distassets/images/favicon.png">
    <title>Materialart Admin Template</title>
    <link href="<?php echo base_url(); ?>assets/dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/pages/authentication.css" rel="stylesheet">
    <!-- This page CSS -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Material Admin</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center" style="background:url(<?php echo base_url(); ?>assets/images/big/auth-bg2.jpg) no-repeat left center;">
            <div class="container">
                <div class="row">
                    <div class="col s12 l8 m6 demo-text">
                        <span class="db"><img src="<?php echo base_url(); ?>assets/images/logo-icon.png" alt="logo" /></span>
                        <span class="db"><img src="<?php echo base_url(); ?>assets/images/logo-text.png" alt="logo" /></span>
                        <h1 class="font-light m-t-40">Welcome to the <span class="font-medium black-text">Material Admin</span></h1>
                        <p>This is just a demo text which you can change as per your requeirment, so change once you get chance. this is default text.</p>
                        <a class="btn btn-round red m-t-5">Know more</a>
                    </div>
                </div>
                <div class="auth-box auth-sidebar">
                    <div id="loginform">
                        <div class="p-l-10">
                            <h4 class="font-medium m-b-0 m-t-40">Sign In to Admin</h4>
                            <h6>Just login to your account</h6>
                        </div><br/>
                        <!-- Form -->
                        <div class="row ">
                            <form class="col s12" action="index.html">
                                <!-- email -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="username" type="text" class="validate" required>
                                        <label for="username"><h6>Username</h6></label>
                                    </div>
                                </div>
                                <!-- pwd -->
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" required>
                                        <label for="password"><h6>Password</h6></label>
                                    </div>
                                </div>
                                <!-- pwd -->
                                <!-- <div class="row m-t-5">
                                    <div class="col s7">
                                        <label>
                                            <input type="checkbox" />
                                            <span>Remember Me?</span>
                                        </label>
                                    </div>
                                     <div class="col s5 right-align"><a href="#" class="link" id="to-recover">Forgot Pwd?</a></div> 
                                </div> -->
                                <!-- pwd -->
                                <div class="row m-t-40">
                                    <div class="col s12">
                                        <button class="btn-large w100 blue accent-4" type="submit">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="center-align m-t-20 db">
                            <a href="#" class="btn indigo darken-1 tooltipped m-r-5" data-position="top" data-tooltip="Login with Facebook"><i class="fab fa-facebook-f"></i></a> <a href="#" class="btn orange darken-4 tooltipped" data-position="top" data-tooltip="Login with Facebook"><i class="fab fa-google-plus-g"></i></a>
                        </div>
                        <div class="center-align m-t-20 db">
                            Don't have an account? <a href="authentication-register2.html">Sign Up!</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Login box.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Right Sidebar -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script  src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/js/materialize.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
    $('.tooltipped').tooltip();
    // ============================================================== 
    // Login and Recover Password 
    // ============================================================== 
    $('#to-recover').on("click", function() {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
    });
    $(function() {
        $(".preloader").fadeOut();
    });
    </script>
</body>

</html>