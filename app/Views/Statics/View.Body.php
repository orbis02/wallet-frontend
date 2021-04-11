<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-minimize">
                    <button id="minimizeSidebar" class="btn btn-just-icon btn-white btn-fab btn-round">
                        <i class="material-icons text_align-center visible-on-sidebar-regular">more_vert</i>
                        <i class="material-icons design_bullet-list-67 visible-on-sidebar-mini">view_list</i>
                    </button>
                </div>
                <a class="navbar-brand" href="javascript:;">Dashboard</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
                <span class="navbar-toggler-icon icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end">
                <form class="navbar-form">
                    <div class="input-group no-border">
                        <input type="text" value="" class="form-control" placeholder="Search...">
                        <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="material-icons">search</i>
                            <div class="ripple-container"></div>
                        </button>
                    </div>
                </form>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:;">
                            <i class="material-icons">dashboard</i>
                            <p class="d-lg-none d-md-block">
                                Stats
                            </p>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">notifications</i>
                            <span class="notification">5</span>
                            <p class="d-lg-none d-md-block">
                                Some Actions
                            </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Mike John responded to your email</a>
                            <a class="dropdown-item" href="#">You have 5 new tasks</a>
                            <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                            <a class="dropdown-item" href="#">Another Notification</a>
                            <a class="dropdown-item" href="#">Another One</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <i class="material-icons">person</i>
                            <p class="d-lg-none d-md-block">
                                Account
                            </p>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Log out</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="card-header card-header-rose card-header-icon">
                                <div class="card-icon">
                                    <i class="material-icons">$</i>
                                </div>
                                <h4 class="card-title"></h4>
                            </div>
                            <div class="card-body ">
                                <form id="staticForm" method="post" action="{{Host}}">
                                    <label class="bmd-label-floating">Desde</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control datepicker" name="from" value="">
                                    </div>
                                    <label class="bmd-label-floating">Hasta</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control datepicker" name="to"  value="">
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer ">
                                <button type="submit" id="generateReport" class="btn btn-fill btn-rose">Enviar</button>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>


    </div>

    <footer class="footer">
        <div class="container-fluid">
            <nav class="float-left">
                <ul>
                    <li>
                        <a href="">
                            AFIP
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Acerca de nosotros
                        </a>
                    </li>

                </ul>
            </nav>
            <div class="copyright float-right">
                &copy;
                <script>
                    document.write(new Date().getFullYear())
                </script>
                , Hecho con <i class="material-icons">favorite</i> por
                <a href="" target="">AFIP</a>
            </div>
        </div>
    </footer>
</div>
</div>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="javascript:void(0);" class="addFund">
            <i class="material-icons" style="color:white; font-size: 48px;">add_circle</i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Filters</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                    <div class="badge-colors ml-auto mr-auto">
                        <span class="badge filter badge-purple" data-color="purple"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-warning" data-color="orange"></span>
                        <span class="badge filter badge-danger" data-color="danger"></span>
                        <span class="badge filter badge-rose active" data-color="rose"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Background</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <div class="ml-auto mr-auto">
                        <span class="badge filter badge-black active" data-background-color="black"></span>
                        <span class="badge filter badge-white" data-background-color="white"></span>
                        <span class="badge filter badge-red" data-background-color="red"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Mini</p>
                    <label class="ml-auto">
                        <div class="togglebutton switch-sidebar-mini">
                            <label>
                                <input type="checkbox">
                                <span class="toggle"></span>
                            </label>
                        </div>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Images</p>
                    <label class="switch-mini ml-auto">
                        <div class="togglebutton switch-sidebar-image">
                            <label>
                                <input type="checkbox" checked="">
                                <span class="toggle"></span>
                            </label>
                        </div>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Images</li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{Host}}public/img/sidebar-1.jpg" alt="">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{Host}}public/img/sidebar-2.jpg" alt="">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{Host}}public/img/sidebar-3.jpg" alt="">
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{Host}}public/img/sidebar-4.jpg" alt="">
                </a>
            </li>
            <li class="button-container">
                <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank"
                   class="btn btn-rose btn-block btn-fill">Hecho con</a>
                <a href="https://demos.creative-tim.com/material-dashboard-pro/docs/2.1/getting-started/introduction.html"
                   target="_blank" class="btn btn-default btn-block">
                    Documentation
                </a>
                <a href="https://www.creative-tim.com/product/material-dashboard" target="_blank"
                   class="btn btn-info btn-block">
                    Get Free Demo!
                </a>
            </li>
            <li class="button-container github-star">
                <a class="github-button" href="https://github.com/creativetimofficial/ct-material-dashboard-pro"
                   data-icon="octicon-star" data-size="large" data-show-count="true"
                   aria-label="Star ntkme/github-buttons on GitHub">Star</a>
            </li>
            <li class="header-title">Thank you for 95 shares!</li>
            <li class="button-container text-center">
                <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45
                </button>
                <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50
                </button>
                <br>
                <br>
            </li>
        </ul>
    </div>
</div>


<!-- notice modal -->
<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-lg  wizard-container ">
        <div class="modal-content card card-wizard" data-color="green" id="wizardProfile">
            <div class="modal-header">
                <!-- <h5 class="modal-title" id="myModalLabel">How Do You Become an Affiliate?</h5> -->

            </div>

            <div class="modal-body">

                <form action="" method="">
                    <!--        You can switch " data-color="primary" "  with one of the next bright colors: "green", "orange", "red", "blue"       -->
                    <div class="card-header text-center">
                        <h3 class="card-title">
                            ADMINISTRA TU CARTERA
                        </h3>

                    </div>
                    <div class="wizard-navigation">
                        <ul class="nav nav-pills">
                            <li class="nav-item">
                                <a class="nav-link" href="#Income" data-toggle="tab" role="tab">
                                    INGRESOS
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#Bill" data-toggle="tab" role="tab">
                                    GASTOS
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content ">

                        <div class="tab-pane " id="Income">
                            <h5 class="info-text">Registre sus ingresos:</h5>
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-4 col-sm-3">
                                                    <select class="selectpicker" id="userAccountInc" data-size="7"
                                                            data-style="btn btn-success btn-round"
                                                            title="Single Select">
                                                        {{userAccount}}
                                                    </select>
                                                </div>

                                                <div class="col-lg-6 col-md-4 col-sm-3">
                                                    <select class="selectpicker" id="combCategoriesInc" data-size="7"
                                                            data-style="btn btn-success btn-round"
                                                            title="Single Select">
                                                        {{combCategoriesInc}}
                                                    </select>
                                                </div>


                                            </div>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Monto: (+)</label>
                                                <div class="col-sm-10">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group bmd-form-group">
                                                                <input id="amountInc" name="amountInc" type="number"
                                                                       style="width: 100%;
  height: 100px; font-family: Arial; font-size: 42pt;" class="form-control" placeholder="">
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
                        <div class="tab-pane" id="Bill">
                            <h5 class="info-text">Registre sus gastos:</h5>
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-4 col-sm-3">
                                                    <select class="selectpicker" id="userAccountBill" data-size="7"
                                                            data-style="btn btn-success btn-round"
                                                            title="Single Select">
                                                        {{userAccount}}
                                                    </select>
                                                </div>

                                                <div class="col-lg-6 col-md-4 col-sm-3">
                                                    <select class="selectpicker" id="combCategoriesBill" data-size="7"
                                                            data-style="btn btn-success btn-round"
                                                            title="Single Select">
                                                        {{combCategoriesBil}}
                                                    </select>
                                                </div>


                                            </div>
                                            <br>
                                            <br>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Monto: (-)</label>
                                                <div class="col-sm-10">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group bmd-form-group">
                                                                <input id="amountBill" name="amountBill" type="number"
                                                                       style="width: 100%;
  height: 100px; font-family: Arial; font-size: 42pt;" class="form-control" placeholder="">
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
                    </div>
            </div>
            </form>
            <div class="modal-footer">
                <div class="row">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-success btn-round" data-dismiss="modal" aria-hidden="true">
                            Close
                        </button>
                    </div>
                    <div class="col-md-6">
                        <button type="button" id="AddRecord" class="btn btn-success btn-round" data-dismiss="modal">
                            Registrar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>