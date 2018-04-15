<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Piguet Galland : Transactions</title>
        <meta name="description" content="stomise, well commented codes and seo friendly.">
        <meta name="keywords" content="piguet, galland, banking, company, finance, money, loans">
        <meta name="author" content="AnDrexx">

        <!-- ==============================================
        Favicons
        =============================================== -->
        <link rel="shortcut icon" type="image/x-icon" href="https://www.piguetgalland.ch/app/themes/piguet-galland/images/front/favicon.ico" />
         <!-- Styles -->
        <link rel='stylesheet' id='et-googleFonts-css'  href='https://fonts.googleapis.com/css?family=Open+Sans%3A300i%2C400%2C600&amp;ver=4.8.1' type='text/css' media='all' />
        <!-- <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet"> -->        
        <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">        
        <link href="assets/plugins/icomoon/style.css" rel="stylesheet">
        <link href="assets/plugins/uniform/css/default.css" rel="stylesheet"/>        
        <link href="assets/plugins/switchery/switchery.min.css" rel="stylesheet"/>
        <link href="assets/plugins/nvd3/nv.d3.min.css" rel="stylesheet">          
        <link href="assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>   
        <link href="assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>   
        <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="assets/css/space.min.css" rel="stylesheet">
        <link href="assets/css/custom.css" rel="stylesheet">

    </head>

    <body>

    <!-- Page Container -->
        <div class="page-container">
            <!-- Page Sidebar -->
            <div class="page-sidebar">
                <a class="logo-box" href="summary">
                    <span><img width="30" height="30" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjEuMSwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPgo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkNhbHF1ZV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCIKCSB2aWV3Qm94PSIwIDAgNzAgNDAiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDcwIDQwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+CjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+Cgkuc3Qwe2ZpbGw6IzU1NTY1QTt9Cjwvc3R5bGU+CjxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik00NCwyNi44YzAuOS0wLjgsMS42LTAuNywzLjksMS4zYzIuNywyLjQsNy4xLDUsMTEuMiwzLjhjMi45LTAuOCwzLjQtMy42LDIuMy01LjJjLTEuOS0yLjYtNC4zLTQuNy00LjItNS43CgljMC4yLTEuOSwxLjktMi40LDYuMy0zLjZjMi4yLTAuNiw2LjctMi4yLDUuOC00LjhDNjgsOSw1Ny42LDEwLjgsNTYuMywxMS4xYy0xLjMsMC4zLTIsMC41LTIuNC0wLjJjLTAuNC0wLjctMC4xLTEuOSwwLjQtNC40CgljMC40LTIuMi0xLjEtNi01LjUtNC42Yy0zLjMsMS4xLTUuNSw0LjQtNy41LDkuNGMtMC45LDMuNS0yLjQsNC41LTMuNyw0LjVjLTEuMywwLTEuOC0yLTEuMy00LjJjMC41LTIuMi0xLjEtNS45LTUuNS00LjUKCWMtMy4zLDEuMS01LjIsNS4zLTYuNiwxMC4yYy0xLjYsNS42LTMsOC4zLTYuNiwxMC4zYy00LjQsMy0xMy4xLDUuMy0xNyw2LjZjMC4zLDAuNiwxLjMsMS4yLDEuNiwxLjZjMTIuMS00LjQsMjEuNy0xMC4xLDM0LjItMTUuNgoJYzEyLjUtNS41LDI1LjQtNi43LDI2LjYtNi43Yy0xMi4yLDMtMjAuMiw2LjEtMjUuNSw4LjFjLTcuOCwzLjEtMTYuMyw3LjQtMjMuMywxMi4xYzQuMS0yLjMsNS43LTMuNSw5LjktMy41CgljNC4yLDAsNi4xLDAuNSwxMC4yLDQuNWM0LjEsMy45LDkuNCw0LjYsMTEuNiwzLjFjMi0xLjMsMi41LTMuNSwwLjEtNi4xQzQzLjYsMjksNDMuMSwyNy42LDQ0LDI2LjgiLz4KPC9zdmc+Cg==" alt=""></span>
                    <i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
                    <i class="icon-close" id="sidebar-toggle-button-close"></i>
                </a>
                <div class="page-sidebar-inner">
                    <div class="page-sidebar-menu">
                        <ul class="accordion-menu">
                            @if(Session::get('user_id'))
                                @if(Session::get('account_type')=='admin')
                                     <li>
                                        <a href="summary">
                                            <i class="menu-icon icon-home4"></i><span>Maison</span>
                                        </a>
                                    </li>
                                    <li>
                                    <a href="javascript:void(0)">
                                        <i class="menu-icon icon-person"></i><span>Profile</span><i class="accordion-icon fa fa-angle-left"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="profile">View Profile</a></li>
                                        <li><a href="updatepassword">Change Password</a></li>
                                    </ul>
                                </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="menu-icon icon-users"></i><span>Users</span><i class="accordion-icon fa fa-angle-left"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="createuser">Create User</a></li>
                                            <li><a href="users">View Users</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="menu-icon icon-reorder"></i><span>Accounts</span><i class="accordion-icon fa fa-angle-left"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="createaccount">Create Account</a></li>
                                            <li><a href="accounts">View Accounts</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)">
                                            <i class="menu-icon icon-show_chart"></i><span>Transactions</span><i class="accordion-icon fa fa-angle-left"></i>
                                        </a>
                                        <ul class="sub-menu">
                                            <li><a href="createtransaction">Create Transaction</a></li>
                                            <li class="active"><a href="transactions">View Transasctions</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="log-out">
                                            <i class="menu-icon icon-exit"></i><span>Logout</span>
                                        </a>
                                    </li>
                                @endif
                            @else
                                <li class="active-page">
                                    <a href="/">
                                        <i class="menu-icon icon-home4"></i><span>Maison</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="menu-icon icon-person"></i><span>Profile</span><i class="accordion-icon fa fa-angle-left"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="ui-alerts.html">View Profile</a></li>
                                        <li><a href="ui-buttons.html">Change Password</a></li>
                                        <li><a href="ui-icons.html">Update Security Question</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="menu-icon icon-show_chart"></i><span>Transfers</span><i class="accordion-icon fa fa-angle-left"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="ui-icons.html">Own Account Transfer</a></li>
                                        <li><a href="ui-alerts.html">Transfer to Ultra Bank A/C</a></li>
                                        <li><a href="ui-buttons.html">Transfer to Other Banks</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">
                                        <i class="menu-icon icon-credit-card"></i><span>Factures</span><i class="accordion-icon fa fa-angle-left"></i>
                                    </a>
                                    <ul class="sub-menu">
                                        <li><a href="layout-blank.html">Airtime Purchase</a></li>
                                        <li><a href="layout-boxed.html">Utility Bills</a></li>
                                        <li><a href="layout-collapsed-sidebar.html">Cable TV Bills</a></li>
                                        <li><a href="layout-fixed-header.html">Phone Bills</a></li>
                                        <li><a href="layout-fixed-sidebar.html">Internet Services</a></li>
                                        <li><a href="layout-fixed-sidebar-header.html">Donations</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="menu-icon icon-phone"></i><span>Commentaires</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="menu-icon icon-exit"></i><span>Logout</span>
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div><!-- /Page Sidebar -->
            
            <!-- Page Content -->
            <div class="page-content">
                <!-- Page Header -->
                <div class="page-header">
                    <div class="search-form">
                        <form action="#" method="GET">
                            <div class="input-group">
                                <input type="text" name="search" class="form-control search-input" placeholder="Type something...">
                                <span class="input-group-btn">
                                    <button class="btn btn-default" id="close-search" type="button"><i class="icon-close"></i></button>
                                </span>
                            </div>
                        </form>
                    </div>
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                                <div class="logo-sm">
                                    <a href="javascript:void(0)" id="sidebar-toggle-button"><i class="fa fa-bars"></i></a>
                                    <a class="logo-box" href="summary"><span>Piguet Galland</span></a>
                                </div>
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                    <i class="fa fa-angle-down"></i>
                                </button>
                            </div>
                        
                            <!-- Collect the nav links, forms, and other content for toggling -->
                        
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">
                                    <li><a href="javascript:void(0)" id="collapsed-sidebar-toggle-button"><i class="fa fa-bars"></i></a></li>
                                    <li><a href="javascript:void(0)" id="toggle-fullscreen"><i class="fa fa-expand"></i></a></li>
                                    <li><a href="javascript:void(0)" id="search-button"><i class="fa fa-search"></i></a></li>
                                </ul>
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="javascript:void(0)" class="right-sidebar-toggle" data-sidebar-id="main-right-sidebar"><i class="fa fa-envelope"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i></a>
                                        <ul class="dropdown-menu dropdown-lg dropdown-content">
                                            <li class="drop-title">Notifications<a href="#" class="drop-title-link"><i class="fa fa-angle-right"></i></a></li>
                                            <li class="slimscroll dropdown-notifications">
                                                <ul class="list-unstyled dropdown-oc">
                                                    <li>
                                                        <a href="#"><span class="notification-badge bg-primary"><i class="fa fa-photo"></i></span>
                                                            <span class="notification-info">Update password for improved security.
                                                                <small class="notification-date">20:00</small>
                                                            </span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="assets/images/avatar1.jpg" alt="" class="img-circle"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="userprofile">Profile</a></li>
                                            <li><a href="createuser">Create User</a></li>
                                            <li><a href="createaccount">>Create Account</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="changepassword">Update Password</a></li>
                                            <li><a href="log-out">Log Out</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
                    </nav>
                </div><!-- /Page Header -->
                <!-- Page Inner -->
                <div class="page-inner">
                    <div class="page-title">
                        <h3 class="breadcrumb-header">Hello, {{Session::get('first_name')}}</h3>
                <p style="color: blue; margin-top: -22px;">Your Last Login was on: <span>{{Session::get('last_login')}} (GMT)</span></p>
                    </div>
                    <div>&nbsp;</div>
                    <h4>Transactions</h4><br>
                    <!-- Page Content -->
                    <div id="main-wrapper">
                        <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-white">
                                <div class="panel-heading clearfix">
                                    <h4 class="panel-title">Transactions</h4>
                                </div>
                                <div class="panel-body">
                                   <div class="table-responsive">
                                    @if(!$data->isEmpty())
                                        <table id="example" class="display table" style="width: 100%; cellspacing: 0;">
                                            <thead>
                                                <tr>
                                                    <th class="hidden-xs hidden-sm text-center" style="width: 60px;"><i class="si si-show_chart"></i></th>
                                                    <th style="width: 20%;">Date</th>
                                                    <th style="width: 15%;">Amount (EUR)</th>
                                                    <th class="hidden-xs hidden-sm" style="width: 25%;">Description</th>
                                                    <th style="width: 10%;">Charges</th>
                                                    <th class="hidden-xs hidden-sm text-center" style="width: 20%;">Email</th>
                                                    <th class="hidden-xs hidden-sm text-center"style="width: 20%;">Account Number</th>
                                                    <th class="hidden-xs" style="width: 15%;">Status</th>
                                                    <th class="text-center" style="width: 120px;">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($data as $tx)
                                                <tr>
                                                    <td class="hidden-xs hidden-sm text-center">{{$tx->id}}</td>
                                                    <td>{{date('d M h:i a',strtotime($tx->transaction_date))}}</td>
                                                    <td>{{$tx->amount}}</td>
                                                    <td class="hidden-xs hidden-sm font-w600">{{$tx->description}}</td>
                                                    <td class="font-w600">{{$tx->charges}}</td>
                                                    <td class="hidden-xs hidden-sm font-w600">{{$tx->email}}</td>
                                                    <td class="hidden-xs hidden-sm font-w600">{{$tx->account_number}}</td>
                                                    <td class="hidden-xs">
                                                         @if($tx->status == 'Enabled')
                                                        <span class="label label-success">{{$tx->status}}</span>
                                                        @endif

                                                        @if($tx->status == 'Disabled')
                                                        <span class="label label-warning">{{$tx->status}}</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <a href="transactions-{{$tx->id}}"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="View Transaction"><i class="fa fa-eye"></i></button></a>
                                                            <a href="transactions-edit-{{$tx->id}}"><button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="Edit Transaction"><i class="fa fa-pencil"></i></button></a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                           </table> 
                                           @else
                                            There are no transactions currently.
                                        @endif 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- Row -->
                    </div><!-- Main Wrapper -->      
                <!-- END Page Content -->
                    <div class="page-footer">
                        <p>2018, Piguet Galland & vous. <span>&copy;</span></p>
                    </div>
                </div>
            </div><!-- /Page Content -->
        </div><!-- /Page Container -->

    <!-- Javascripts -->
        <script src="assets/plugins/jquery/jquery-3.1.0.min.js"></script>
        <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/uniform/js/jquery.uniform.standalone.js"></script>
        <script src="assets/plugins/switchery/switchery.min.js"></script>
        <script src="assets/plugins/d3/d3.min.js"></script>
        <script src="assets/plugins/nvd3/nv.d3.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.time.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.symbol.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.resize.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/flot/jquery.flot.pie.min.js"></script>
        <script src="assets/plugins/chartjs/chart.min.js"></script>
        <script src="assets/js/space.min.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
        <script src="assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="assets/js/pages/table-data.js"></script>


    </body>
</html>