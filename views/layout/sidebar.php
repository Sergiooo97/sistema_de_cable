<aside id="sidebar-left" class="sidebar-left">
    <div class="sidebar-header">
        <div class="sidebar-title">
            Menu
        </div>
        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>

    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <div class="sidebar-title">
                    SUCURSALES
                </div>
                <ul class="nav nav-main">

                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bxs-group" aria-hidden="true"></i>
                            <span>Clientes</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="<?= url_views() ?>clientes/">
                                    Clientes
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="<?= url_views() ?>clientes/create/">
                                    Nuevo cliente
                                </a>
                            </li>

                        </ul>

                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-clipboard-list"></i>
                            <span>Control de pagos</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="<?= url_views() ?>control_de_pagos/mensualidades/">
                                    mensualidades
                                </a>
                            </li>


                        </ul>

                    </li>
                    <div class="sidebar-title">
                        ADMIN
                    </div>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="fas fa-clipboard-list"></i>
                            <span>Sucursales</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="<?= url_views() ?>sucursales/lista/">
                                    Sucursales
                                </a>
                            </li>
                            <li>
                                <a class="nav-link" href="<?= url_views() ?>sucursales/create/">
                                    Registrar sucursal
                                </a>
                            </li>

                        </ul>

                    </li>
                    <li class="nav-parent">
                        <a class="nav-link" href="#">
                            <i class="bx bxs-group" aria-hidden="true"></i>
                            <span>Usuarios</span>
                        </a>
                        <ul class="nav nav-children">
                            <li>
                                <a class="nav-link" href="<?= url_views() ?>usuarios/lista/">
                                    Usuarios
                                </a>
                            </li>

                            <li>
                                <a class="nav-link" href="<?= url_views() ?>usuarios/create/">
                                    Registrar usuario
                                </a>
                            </li>
                        </ul>

                    </li>
                </ul>
            </nav>
        </div>
    </div>
</aside>