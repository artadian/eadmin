<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicon.png">
    <title>E-Administrasi GKJW</title>
    <!-- chartist CSS -->
    <link href="<?php echo base_url(); ?>assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/dist/css/style.css" rel="stylesheet">
    <!-- This page CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/pages/dashboard1.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script  src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="loader">
                <div class="loader__figure"></div>
                <p class="loader__label">Eadministrasi GKJW</p>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <header class="topbar">
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
            <nav>
                <div class="nav-wrapper">
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <a href="javascript:void(0)" class="brand-logo">
                        <span class="icon">
                            <img class="light-logo"  src="<?php echo base_url(); ?>assets/images/logo-light-icon.png">
                            <img class="dark-logo"  src="<?php echo base_url(); ?>assets/images/logo-icon.png">
                        </span>
                        <span class="text">
                            <img class="light-logo"  src="<?php echo base_url(); ?>assets/images/logo-light-text.png">
                            <img class="dark-logo"  src="<?php echo base_url(); ?>assets/images/logo-text.png">
                        </span>
                    </a>
                    <!-- ============================================================== -->
                    <!-- Logo you can find that scss in header.scss -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Left topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <ul class="left">
                        <li class="hide-on-med-and-down">
                            <a href="javascript: void(0);" class="nav-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>
                        <li class="hide-on-large-only">
                            <a href="javascript: void(0);" class="sidebar-toggle">
                                <span class="bars bar1"></span>
                                <span class="bars bar2"></span>
                                <span class="bars bar3"></span>
                            </a>
                        </li>

                    </ul>
                    <!-- ============================================================== -->
                    <!-- Left topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Right topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                    <ul class="right">
                        <!-- ============================================================== -->
                        <!-- Profile icon scss in header.scss -->
                        <!-- ============================================================== -->
                        <li><a class="dropdown-trigger" href="javascript: void(0);" data-target="user_dropdown"><img  src="<?php echo base_url(); ?>assets/images/users/2.jpg" alt="user" class="circle profile-pic"></a>
                            <ul id="user_dropdown" class="mailbox dropdown-content dropdown-user">
                                <li>
                                    <div class="dw-user-box">
                                        <div class="u-img"><img  src="<?php echo base_url(); ?>assets/images/users/2.jpg" alt="user"></div>
                                        <div class="u-text">
                                            <h4>Steve Harvey</h4>
                                            <p>steve@gmail.com</p>
                                        </div>
                                    </div>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?php echo base_url(); ?>Main/logout"><i class="material-icons">power_settings_new</i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right topbar icon scss in header.scss -->
                    <!-- ============================================================== -->
                </div>
            </nav>
            <!-- ============================================================== -->
            <!-- Navbar scss in header.scss -->
            <!-- ============================================================== -->
        </header>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <ul id="slide-out" class="sidenav">
                <li>
                    <ul class="collapsible">
                        <?php 
                        $id = 0;
                        $group  = 1;
                        $menus  = $this->mmaster->getMenuSistem(0, $group);
                        $class  = $this->router->fetch_class();
                        $method = $this->router->fetch_method();
                        $uri    = "$class/$method";
                        //looping menu untuk parentid 0
                        foreach ($menus as $mkey => $m) {
                            // echo $m["name"]."<br/>";
                            $link = $m["alias"] == "" ? "javascript: void(0);" : base_url().$m["alias"];
                            $submenu1      = $this->mmaster->getMenuSistem($m["id"], $group);
                            $submenu1Count = count($submenu1);
                            //jika ada submenu yang lebih dari 1 memunculkan panah untuk bisa dropdown
                            $strClass    = ($submenu1Count>0)?" collapsible-header has-arrow":"collapsible-header";
                            $ralias = (empty($m["alias"])?$ralias="-":$m["alias"]);
                            $selected    = "";
                            //cek untuk url yang active
                            if (strstr($uri,$ralias))
                            {
                                
                                $selected = "class = 'active'";
                            }
                            else
                            {
                                $childSelected = false;
                                foreach ($submenu1 as $s) {
                                    $childalias = (empty($s["alias"])?$childalias="-":$s["alias"]);
                                    if (strstr($uri,$childalias)){
                                        $childSelected = true;
                                      }
                                  }
                                if ($childSelected==true){
                                        $selected = " class = 'active'";
                                }
                            }
                            //tampilkan data menu
                            echo '<li '.$selected.'>
                            <a href="'.$link.'" class="'.$strClass.'"><i class="material-icons">dashboard</i><span class="hide-menu"> '.$m["name"].'</span></a>';
                            //cek apakah menu tersebut punya child, jika ada dilooping seperti diatas
                            if ($submenu1Count>0) {
                               echo '<div class="collapsible-body">
                               <ul>';
                               foreach ($submenu1 as $sm1) {
                                $submenu2 = $this->mmaster->getMenuSistem($sm1["id"], $group);
                                $submenu2Count = count($submenu2);
                                $strClass    = ($submenu2Count>0)?" collapsible-header has-arrow":"collapsible-header";
                                echo'<li><a href="'.base_url().$sm1["alias"].'"><i class="material-icons">adjust</i><span class="hide-menu">'. $sm1["name"].'</span></a></li>';
                               }
                               echo '</ul></div>';
                            }

                        }
                        ?>
            </ul>
        </aside>
        <!-- ============================================================== -->
        <!-- Sidebar scss in sidebar.scss -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Title and breadcrumb -->
            <!-- ============================================================== -->
            <div class="page-titles">
                <div class="d-flex align-items-center">
                    <h5 class="font-medium m-b-0"><?php echo $title; ?></h5>
                    <!-- <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Dashboard</a>
                    </div> -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <!-- ============================================================== -->
                <!-- Start Container fluid -->
                <!-- ============================================================== -->
                <?php
                        $this->load->view($content);
                ?>
                <!-- ============================================================== -->
                <!-- End Container fluid -->
                <!-- ============================================================== -->
                <footer class="center-align m-b-30">All Rights Reserved by GKJW - 2022.</footer>
            </div>
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->

    </div>

    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    
    <script  src="<?php echo base_url(); ?>assets/dist/js/materialize.min.js"></script>
    <script  src="<?php echo base_url(); ?>assets/libs/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!-- ============================================================== -->
    <!-- Apps -->
    <!-- ============================================================== -->
    <script  src="<?php echo base_url(); ?>assets/dist/js/app.js"></script>
    <script  src="<?php echo base_url(); ?>assets/dist/js/app.init.light-sidebar.js"></script>
    <script  src="<?php echo base_url(); ?>assets/dist/js/app-style-switcher.js"></script>
    <!-- ============================================================== -->
    <!-- Custom js -->
    <!-- ============================================================== -->
    <script  src="<?php echo base_url(); ?>assets/dist/js/custom.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script  src="<?php echo base_url(); ?>assets/libs/chartist/dist/chartist.min.js"></script>
    <script  src="<?php echo base_url(); ?>assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script  src="<?php echo base_url(); ?>assets/extra-libs/sparkline/sparkline.js"></script>
    <script  src="<?php echo base_url(); ?>assets/dist/js/pages/dashboards/dashboard1.js"></script>
</body>

</html>