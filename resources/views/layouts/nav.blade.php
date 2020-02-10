<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
<a class="navbar-brand" href="{{route('home')}}">SoftInvv</a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
    ><!-- Navbar Search-->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" placeholder="Buscar..." aria-label="Search" aria-describedby="basic-addon2" />
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </form>
    <!-- Navbar-->
    <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">Cuenta</a><a class="dropdown-item" href="#">Actividad</a>
                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>
             
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            {{-- <a class="dropdown-item" href="{{route('home')}}">Salir</a> --}}
            </div>
        </li>
    </ul>
</nav>
<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Principal</div>
                <a class="nav-link" href="{{route('home')}}"
                        ><div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Inicio</a>
                    <div class="sb-sidenav-menu-heading">Navegacion</div>
{{-- layout 1 start
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts"
                        ><div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Paginas
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    ></a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="layout-static.html">Productos</a><a class="nav-link" href="layout-sidenav-light.html">Resguardos</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Empleados</a><a class="nav-link" href="#">Areas</a></nav>
    layout 1 end    </div> --}}
{{-- layout 2 start --}}
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages"
                        ><div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Control
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                    ></a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseArea" aria-expanded="false" aria-controls="pagesCollapseArea"
                                >Areas
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="pagesCollapseArea" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('area.create')}}">Crear</a><a class="nav-link" href="{{route('area.index')}}">Consultar</a></nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseBoss" aria-expanded="false" aria-controls="pagesCollapseBoss"
                                >Jefe de Area
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="pagesCollapseBoss" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('boss.create')}}">Crear</a><a class="nav-link" href="#">Consultar</a></nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseEmployee" aria-expanded="false" aria-controls="pagesCollapseEmployee"
                                >Empleados
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="pagesCollapseEmployee" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('employee.create')}}">Crear</a><a class="nav-link" href="#">Consultar</a></nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseProduct" aria-expanded="false" aria-controls="pagesCollapseProduct"
                                >Productos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="pagesCollapseProduct" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('product.create')}}">Crear</a><a class="nav-link" href="#">Consultar</a></nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#pagesCollapseSafeguard" aria-expanded="false" aria-controls="pagesCollapseSafeguard"
                                >Resguardos
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div
                            ></a>
                            <div class="collapse" id="pagesCollapseSafeguard" aria-labelledby="headingOne" data-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav"><a class="nav-link" href="{{route('safeguard.create')}}">Crear</a><a class="nav-link" href="#">Consultar</a></nav>
                            </div>
                            
                        </nav>
                    </div>
{{-- layout 2 end --}}
                    <div class="sb-sidenav-menu-heading">Addons</div>
                    <a class="nav-link" href="charts.html"
                        ><div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Reportes</a
                    ><a class="nav-link" href="tables.html"
                        ><div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Control usuarios</a>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Usuario actual:</div>                
                <a>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>
            </div>
        </nav>
    </div>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid">
                <h1 class="mt-4">Velas Vallarta Resorts</h1> <!-- Page Changed name -->
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">@yield('title','Default')</li> <!-- Page changed name -->
                </ol>

                @yield('content')<!-- /////////////Start Body Page///////////// -->

        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; ferk28</div>
                    <div>
                        <a href="#">Politica de Privacidad</a>
                        &middot;
                        <a href="#">Terminos &amp; Conditiciones</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/chart-area-demo.js"></script>
<script src="assets/demo/chart-bar-demo.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="assets/demo/datatables-demo.js"></script>