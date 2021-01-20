<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-light">ANALISIS CLINICOS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!-- <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div> -->
            <div class="info">
                <a href="#" class="d-block">Dr. ENRIQUE EID</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-users"></i>
                        <p>
                            Administrar Usuario
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-user-circle"></i>
                                <p>Gestion De Usuario</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-user-circle"></i>
                                <p>Gestion De Bitacora</p>
                            </a>
                        </li>
                        <button type="button" class="btn btn-outline-danger btn-block btn-sm"><i class="fas fa-user-circle"></i> CERRAR SESION</button>
                    </ul>
                </li> <br>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-vials"></i>
                        <p>
                            Administrar Muestra
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-vial"></i>
                                <p>Gestionar Muestras</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-vial"></i>
                                <p>Gestion Examenes</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-vial"></i>
                                <p>Entrega de Resultado</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-vial"></i>
                                <p>Control de Agenda</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-vial"></i>
                                <p>Gestinar Factura</p>
                            </a>
                        </li>

                    </ul> <br>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-handshake"></i>
                        <p>
                            Administrar Reactivos
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-cart-plus"></i>
                                <p>Reporte de inventarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-cart-plus"></i>
                                <p>Gestionar proveedores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-cart-plus"></i>
                                <p>Gestionar compra reactivos</p>
                            </a>
                        </li>
                    </ul> <br>
                </li>

                <li class="nav-item menu-open">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-address-card"></i>
                        <p>
                            Administrar Trabajadores
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-user-circle"></i>
                                <p>Reporte de inventarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-user-circle"></i>
                                <p>Gestionar proveedores</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-user-circle"></i>
                                <p>Gestionar compra reactivos</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">
                                <i class="fas fa-user-circle"></i>
                                <p>Gestionar Administrador</p>
                            </a>
                        </li>
                    </ul> 
                            <a href="{{url('/medicos/index')}}" class="nav-link ">
                                <i class="fas fa-user-circle"></i>
                                <p>Gestionar Medicos</p>
                            </a>
                        </li>
                    </ul>
                </li> <br>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link ">
                        <i class="fas fa-user-cog"></i>
                        <p>
                            Administrar Cliente
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview ">
                        <li class="nav-item ">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-user-check"></i>
                                <p>Registrar Cliente</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link ">
                                <i class="fas fa-user-check"></i>
                                <p>Gestionar Historial</p>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>