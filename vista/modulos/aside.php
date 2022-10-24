<aside class="main-sidebar sidebar-white-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="vista/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Administracion Optical</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="vista/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="cargarContenido('vista/dashboard.php','content-wrapper')">Escritorio</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="cargarContenido('vista/consultas.php','content-wrapper')">Consultas</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="cargarContenido('vista/laboratorios.php','content-wrapper')">Laboratorios</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="cargarContenido('vista/optometras.php','content-wrapper')">Optometras</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="cargarContenido('vista/ordenes.php','content-wrapper')">Ordenes de Trabajo</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="cargarContenido('vista/pacientes.php','content-wrapper')">Pacientes</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="cargarContenido('vista/usuarios.php','content-wrapper')">Usuarios</a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>