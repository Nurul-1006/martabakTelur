<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <title>Bootstrap 4</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico" />

        <!-- DataTables -->
        <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap4.min.css" />
        <link rel="stylesheet" href="plugins/datatables/buttons.bootstrap4.min.css" />

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="assets/js/modernizr.min.js"></script>
        <style>
            .footer {
                border-top: 1px solid rgba(152, 166, 173, 0.2);
                bottom: 0;
                text-align: left !important;
                padding: 19px 30px 20px;
                position: absolute;
                right: 0;
                color: #98a6ad;
                left: 0;
            }
            @media (min-width:768px) {
                .wrapper > .container-fluid > .container-fluid > .row > .col-md-4.konyol {
                    -ms-flex: 40%;
                    flex: 40%;
                    max-width: 40%;
                }
                .wrapper > .container-fluid > .container-fluid > .row > .col-md-8.koplak {
                    -ms-flex: 60%;
                    flex: 60%;
                    max-width: 60%;
                }
            }
        </style>

</head>
<body>
    <header id="topnav">
        <div class="topbar-main">
            <div class="container-fluid">

                <div class="logo">
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo_sm.png" alt="" height="26" class="logo-small">
                        <img src="assets/images/logo.png" alt="" height="22" class="logo-large">
                    </a>
                </div>

                <div class="menu-extras topbar-custom">
                    <ul class="list-unstyled topbar-right-menu float-right mb-0">
                        <li class="menu-item">
                        <a href="#" class="navbar-toggle nav-link">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        </li>

                        <li class="dropdown notification-list">
                            <a href="#" class="nav-link dropdown-toggle waves-effect nav-user" data-toggle="dropdown" role="button" aria-haspopup="false" aria-expanded="false">
                                <img src="assets/images/users/Bale_Tani.jpg" alt="user" class="rounded-circle"> <span class="ml-1 pro-user-name">Ajwidatun Nurul Khofi <i class="mdi mdi-chevron-down"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                                <div class="dropdown-item noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
                                <a href="profile" class="dropdown-item notify-item">
                                    <i class="fi-head"></i> <span>Profile</span>
                                </a>
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <i class="fi-power"></i> <span>Logout</span>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>

        <div class="navbar-custom">
            <div class="container-fluid">
                <div id="navigation">
                    <ul class="navigation-menu">
                        <li class="has-submenu">
                            <a href="home"><i class="icon-speedometer"></i>Dashboard</a>
                        </li>
                        <li class="has-submenu">
                            <a href="data"><i class="icon-layers"></i>Data Barang</a>
                        </li>
                        <li class="has-submenu">
                            <a href="about"><i class="icon-briefcase"></i>Tentang</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
</body>
</html>