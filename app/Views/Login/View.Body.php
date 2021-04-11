
<body class="off-canvas-sidebar">
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <div class="container">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:;">Login Page</a>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a href="" class="nav-link">
                        <i class="material-icons">person_add</i>
                        Register
                    </a>
                </li>
                <li class="nav-item  active ">
                    <a href="" class="nav-link">
                        <i class="material-icons">fingerprint</i>
                        Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
<div class="wrapper wrapper-full-page">
    <div class="page-header login-page header-filter" filter-color="black" style="background-image: url('{{Host}}public/img/login.jpg'); background-size: cover; background-position: top center;">
        <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-8 ml-auto mr-auto">
                    <form class="form" method="POST" action="{{Host}}Index/Login">
                        <div class="card card-login card-hidden">
                            <div class="card-header card-header-rose text-center">
                                <h4 class="card-title">Login</h4>
                                <div class="social-line">
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a href="#pablo" class="btn btn-just-icon btn-link btn-white">
                                        <i class="fa fa-google-plus"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body ">
                                <p class="card-description text-center">Or Be Classical</p>
                                <span class="bmd-form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">face</i>
                                </span>
                              </div>
                              <input type="text" name="user" class="form-control" placeholder="Username...">
                            </div>
                          </span>
                          <span class="bmd-form-group">
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="material-icons">lock_outline</i>
                                </span>
                              </div>
                              <input type="password" name="pass" class="form-control" placeholder="Password...">
                            </div>
                          </span>
                            </div>
                            <div class="card-footer justify-content-center">
                                <input type="submit" class="btn btn-rose btn-link btn-lg" value="Lets Go">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <div class="copyright float-right">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>, Made from @Developer
                </div>
            </div>
        </footer>
    </div>
</div>