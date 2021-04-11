<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="black" data-image="{{Host}}public/img/sidebar-1.jpg">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

          Tip 2: you can also add an image using data-image tag
      -->
        <div class="logo"><a href="http://www.creative-tim.com" class="simple-text logo-mini">
                AFIP
            </a>
            <a href="http://www.creative-tim.com" class="simple-text logo-normal">
                AFIP
            </a></div>
        <div class="sidebar-wrapper">
            <div class="user">
                <div class="photo">
                    <img src="{{Host}}public/img/default-avatar.png"/>
                </div>
                <div class="user-info">
                    <a data-toggle="collapse" href="#collapseExample" class="username">
              <span>
                {{User}}
                <b class="caret"></b>
              </span>
                    </a>
                    <div class="collapse" id="collapseExample">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> MP </span>
                                    <span class="sidebar-normal"> My Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> EP </span>
                                    <span class="sidebar-normal"> Edit Profile </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="sidebar-mini"> S </span>
                                    <span class="sidebar-normal"> Settings </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="../examples/dashboard.html">
                        <i class="material-icons">dashboard</i>
                        <p> Inicio </p>
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" data-toggle="collapse" href="#componentsExamples">
                        <i class="material-icons">timeline</i>
                        <p> Estadisticas
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="componentsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="{{Host}}Statics/Balance">
                                    <span class="sidebar-mini"> S </span>
                                    <span class="sidebar-normal"> Saldo </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{Host}}Statics/Panorama">
                                    <span class="sidebar-mini"> P </span>
                                    <span class="sidebar-normal"> Panorama </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{Host}}Statics/CashFlow">
                                    <span class="sidebar-mini"> F </span>
                                    <span class="sidebar-normal"> Flujo de fondos </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{Host}}Statics/Expenses">
                                    <span class="sidebar-mini"> G </span>
                                    <span class="sidebar-normal"> Gasto </span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="{{Host}}Statics/Credit">
                                    <span class="sidebar-mini"> C </span>
                                    <span class="sidebar-normal"> Credito </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!--<li class="nav-item ">
                    <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                        <i class="material-icons">content_paste</i>
                        <p> Reportes
                            <b class="caret"></b>
                        </p>
                    </a>
                    <div class="collapse" id="formsExamples">
                        <ul class="nav">
                            <li class="nav-item ">
                                <a class="nav-link" href="../examples/forms/regular.html">
                                    <span class="sidebar-mini"> RF </span>
                                    <span class="sidebar-normal"> Regular Forms </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>-->

                <li class="nav-item ">
                    <a class="nav-link" href="../examples/widgets.html">
                        <i class="material-icons">
                            account_balance
                        </i>
                        <p> Cuentas </p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="../examples/charts.html">
                        <i class="material-icons">fact_check</i>
                        <p> Categorias </p>
                    </a>
                </li>

            </ul>
        </div>
        <div class="sidebar-background"></div>
    </div>
