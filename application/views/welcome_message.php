<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/images/favicon.png">
    <title>Materialart Admin Template</title>
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
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script  src="<?php echo base_url(); ?>assets/jquery/jquery.min.js"></script>
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
</head>

<body>
    <div class="main-wrapper" id="main-wrapper">
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
                                <li><a href="#"><i class="material-icons">power_settings_new</i> Logout</a></li>
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
                        <li class="small-cap"><span class="hide-menu">PERSONAL</span></li>
                        <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">dashboard</i><span class="hide-menu"> Dashboard</span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="index.html"><i class="material-icons">adjust</i><span class="hide-menu">Dashboard-1</span></a></li>
                                    <li><a href="index2.html"><i class="material-icons">adjust</i><span class="hide-menu">Dashboard-2</span></a></li>
                                    <li><a href="index3.html"><i class="material-icons">adjust</i><span class="hide-menu">Dashboard-3</span></a></li>
                                    <li><a href="index4.html"><i class="material-icons">adjust</i><span class="hide-menu">Dashboard-4</span></a></li>
                                </ul>
                            </div>
                        </li>
                         <li>
                            <a href="javascript: void(0);" class="collapsible-header has-arrow"><i class="material-icons">equalizer</i><span class="hide-menu"> Sidebar Types </span></a>
                            <div class="collapsible-body">
                                <ul>
                                    <li><a href="sidebar-type-minisidebar.html"><i class="material-icons">photo_size_select_small</i><span class="hide-menu">Minisidebar</span></a></li>
                                    <li><a href="sidebar-type-iconbar.html"><i class="material-icons">picture_in_picture</i><span class="hide-menu">Icon Sidebar</span></a></li>
                                    <li><a href="sidebar-type-overlay.html"><i class="material-icons">low_priority</i><span class="hide-menu">Overlay Sidebar</span></a></li>
                                    <li><a href="sidebar-type-fullsidebar.html"><i class="material-icons">present_to_all</i><span class="hide-menu">Full Sidebar</span></a></li>
                                    <li><a href="../horizontal/index.html"><i class="material-icons">power_input</i><span class="hide-menu">Horizontal Sidebar</span></a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="small-cap"><span class="hide-menu">Single Link</span></li>
                        <li>
                            <a href="<?php echo base_url(); ?>docs/documentation.html" class="collapsible-header"><i class="material-icons">content_paste</i><span class="hide-menu"> Documentation </span></a>
                        </li>
                        <li>
                            <a href="logout.html" class="collapsible-header"><i class="material-icons">directions</i><span class="hide-menu"> Log Out </span></a>
                        </li>
                        <li>
                            <a href="faqs.html" class="collapsible-header"><i class="material-icons">people_outline</i><span class="hide-menu"> FAQs </span></a>
                        </li>
                    </ul>
                </li>
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
                    <h5 class="font-medium m-b-0">Dashboard</h5>
                    <!-- <div class="custom-breadcrumb ml-auto">
                        <a href="#!" class="breadcrumb">Home</a>
                        <a href="#!" class="breadcrumb">Dashboard</a>
                    </div> -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Container fluid scss in scafholding.scss -->
            <!-- ============================================================== -->
            <!-- <div class="container-fluid"> -->
                <!-- ============================================================== -->
                <!-- Sales Summary -->
                <!-- ============================================================== -->
                <!-- <div class="row">
                    <div class="col l3 m6 s12">
                        <div class="card danger-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">250</h2>
                                        <h6 class="white-text op-5 light-blue-text">Invoices</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">assignment</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col l3 m6 s12">
                        <div class="card info-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">520</h2>
                                        <h6 class="white-text op-5">News Feed</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">receipt</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col l3 m6 s12">
                        <div class="card success-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">100</h2>
                                        <h6 class="white-text op-5 text-darken-2">Sales</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">equalizer</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col l3 m6 s12">
                        <div class="card warning-gradient card-hover">
                            <div class="card-content">
                                <div class="d-flex no-block align-items-center">
                                    <div>
                                        <h2 class="white-text m-b-5">450</h2>
                                        <h6 class="white-text op-5">Revenue</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <span class="white-text display-6"><i class="material-icons">attach_money</i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- ============================================================== -->
                <!-- Sales Summary -->
                <!-- ============================================================== -->
                <!-- <div class="row">
                    <div class="col s12 l8">
                        <div class="card">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="card-title">Yearly Sales</h5>
                                    </div>
                                    <div class="ml-auto">
                                        <ul class="list-inline font-12 dl m-r-10">
                                            <li class="cyan-text"><i class="fa fa-circle"></i> Earnings</li>
                                            <li class="blue-text text-accent-4"><i class="fa fa-circle"></i> Sales</li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Sales Summery -->
                                <div class="p-t-20">
                                    <div class="row">
                                        <div class="col s12">
                                            <div id="sales" style="height: 332px;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <!-- </div>
                    <div class="col s12 l4">
                        <div class="card card-hover">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-20">
                                        <h1 class=""><i class="ti-light-bulb"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Sales Analytics</h3>
                                        <h6 class="card-subtitle">March  2017</h6> </div>
                                </div>
                                <div class="row d-flex align-items-center">
                                    <div class="col s6">
                                        <h3 class="font-light m-t-10"><sup><small><i class="ti-arrow-up"></i></small></sup>35487</h3>
                                    </div>
                                    <div class="col s6 right-align">
                                        <div class="p-t-10 p-b-10">
                                            <div class="spark-count" style="height:65px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card card-hover">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <div class="m-r-20">
                                        <h1 class=""><i class="ti-pie-chart"></i></h1></div>
                                    <div>
                                        <h3 class="card-title">Bandwidth usage</h3>
                                        <h6 class="card-subtitle">March  2017</h6>
                                    </div>
                                </div>
                                <div class="row d-flex align-items-center">
                                    <div class="col s6">
                                        <h3 class="font-light m-t-10">50 GB</h3>
                                    </div>
                                    <div class="col s6 p-t-10 p-b-20 right-align">
                                        <div class="p-t-10 p-b-10 m-r-20">
                                            <div class="spark-count2" style="height:65px"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                <!-- </div> --> 
                <!-- ============================================================== -->
                <!-- product sales and active users -->
                <!-- ============================================================== -->
                <!-- <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h5 class="card-title">Recent Sales</h5>
                                        <h6 class="card-subtitle">Sales on products we have</h6>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="input-field dl support-select">
                                            <select>
                                                <option value="0" selected>10 Mar - 10 Apr</option>
                                                <option value="1">10 Apr - 10 May</option>
                                                <option value="2">10 May - 10 Jun</option>
                                                <option value="3">10 Jun - 10 Jul</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive m-b-20">
                                    <table class="">
                                        <thead>
                                            <tr>
                                                <th>Executives</th>
                                                <th>Product</th>
                                                <th>Price</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Progress</th>
                                                <th>Sales</th>
                                                <th>Earned</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="m-r-10"><img  src="<?php echo base_url(); ?>assets/images/users/d1.jpg" alt="user" class="circle" width="45" /></div>
                                                        <div class="">
                                                            <h5 class="m-b-0 font-16 font-medium">Hanna Gover</h5><span>hgover@gmail.com</span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="">Elite Admin</p>
                                                </td>
                                                <td class="blue-grey-text text-darken-4 font-medium">$96K</td>
                                                <td>May 23, 2018</td>
                                                <td><span class="label label-info">Sale</span></td>
                                                <td class="green-text"><i class="fa fa-arrow-up"></i> 23%</td>
                                                <td>2356</td>
                                                <td class="blue-grey-text  text-darken-4 font-medium">$96K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="m-r-10"><img  src="<?php echo base_url(); ?>assets/images/users/d2.jpg" alt="user" class="circle" width="45" /></div>
                                                        <div class="">
                                                            <h5 class="m-b-0 font-16 font-medium">Daniel Kristeen</h5><span>Kristeen@gmail.com</span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="">Real Homes WP Theme</p>
                                                </td>
                                                <td class="blue-grey-text text-darken-4 font-medium">$85K</td>
                                                <td>May 23, 2018</td>
                                                <td><span class="label cyan">Extended</span></td>
                                                <td class="green-text"><i class="fa fa-arrow-up"></i> 12%</td>
                                                <td>2198</td>
                                                <td class="blue-grey-text  text-darken-4 font-medium">$85K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="m-r-10"><img  src="<?php echo base_url(); ?>assets/images/users/d3.jpg" alt="user" class="circle" width="45" /></div>
                                                        <div class="">
                                                            <h5 class="m-b-0 font-16 font-medium">Julian Josephs</h5><span>Josephs@gmail.com</span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="">MedicalPro WP Theme</p>
                                                </td>
                                                <td class="blue-grey-text text-darken-4 font-medium">$81K</td>
                                                <td>May 23, 2018</td>
                                                <td><span class="label label-primary">Multiple</span></td>
                                                <td class="orange-text"><i class="fa fa-arrow-down"></i> 07%</td>
                                                <td>1237</td>
                                                <td class="blue-grey-text  text-darken-4 font-medium">$76K</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="d-flex no-block align-items-center">
                                                        <div class="m-r-10"><img  src="<?php echo base_url(); ?>assets/images/users/2.jpg" alt="user" class="circle" width="45" /></div>
                                                        <div class="">
                                                            <h5 class="m-b-0 font-16 font-medium">Jan Petrovic</h5><span>hgover@gmail.com</span></div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <p class="">HostinPress Html</p>
                                                </td>
                                                <td class="blue-grey-text text-darken-4 font-medium">-$30K</td>
                                                <td>May 23, 2018</td>
                                                <td><span class="label label-warning">Tax</span></td>
                                                <td class="green-text"><i class="fa fa-arrow-up"></i> 25%</td>
                                                <td>1956</td>
                                                <td class="blue-grey-text  text-darken-4 font-medium">$90K</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <a href="javascript: void(0)"><i class="fas fa-angle-right"></i> View Complete Report</a>
                            </div>
                        </div>
                    </div>

                </div> -->
                <!-- ============================================================== -->
                <!-- Container fluid scss in scafholding.scss -->
                <!-- ============================================================== -->

                <!-- ============================================================== -->
                <!-- Start Container fluid -->
                <!-- ============================================================== -->
                <div class="row">
				<?php
                        $this->load->view($content);
                ?>
				</div>
                <!-- ============================================================== -->
                <!-- End Container fluid -->
                <!-- ============================================================== -->
                <footer class="center-align m-b-30">All Rights Reserved by Materialart. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.</footer>
            </div>
        <!-- ============================================================== -->
        <!-- Page wrapper scss in scafholding.scss -->
        <!-- ============================================================== -->

    </div>

    
</body>

</html>