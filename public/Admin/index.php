<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title><?php echo $language["Dashboard"]; ?> | Minia - Admin & Dashboard Template</title>

    <?php include 'layouts/head.php'; ?>

    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />

    <?php include 'layouts/head-style.php'; ?>
</head>

<?php include 'layouts/body.php'; ?>

<!-- Begin page -->
<div id="layout-wrapper">

    <?php include 'layouts/menu.php'; ?>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Inicio</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">DatAlpine</a></li>
                                    <li class="breadcrumb-item active">Inicio</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                

                <div class="mdk-header-layout__content">
                <div class="mdk-drawer-layout js-mdk-drawer-layout"
                    data-push
                    data-responsive-width="992px">
                    <div class="mdk-drawer-layout__content page">
                        <div class="container-fluid page__heading-container" style="background-color: #f0f0f0;">
                            <div class="page__heading d-flex align-items-end" style="height: 30px;">
                                <!-- Contenido del div -->
                            </div>
                        </div>
                        <div class="container-fluid page__container" style="background-color: #f0f0f0;">
                            <div class="row justify-content-center">
                                <div class="col-lg-9">
                                    <div class="card" style="margin-bottom: 60px;">
                                        <div class="card-header bg-white d-flex align-items-center">
                                            <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons"></i>
                                            <h4 class="card-header__title flex m-0">Busca la ubicacion de interés </h4>
                                        </div>
                                        <div class="card-body align-items-center justify-content-center">
                                            <form id="searchForm" novalidate>
                                                <div class="row align-items-center">
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="estado">Estados</label>
                                                            <select id="estado" class="custom-select">
                                                                <option value="">Seleccionar</option>
                                                                <option value="hidalgo">Hidalgo</option>
                                                                <option value="puebla">Puebla</option>
                                                                <option value="queretaro">Querétaro</option>
                                                                <option value="jalisco">Jalisco</option>
                                                                <!--<option value="queretaro">Querétaro</option>-->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="form-group">
                                                            <label for="ciudad">Ciudad</label>
                                                            <select id="ciudad" class="custom-select mb-2 mr-sm-2 mb-sm-0">
                                                                <option value="">Seleccionar</option>
                                                                <option value="pachuca" data-estado="hidalgo">Pachuca</option>
                                                                <option value="tulancingo" data-estado="hidalgo">Tulancingo</option>
                                                                <option value="puebla" data-estado="puebla">Puebla</option>
                                                                <option value="queretaro" data-estado="queretaro">Santiago de Querétaro</option>
                                                                <option value="puertov" data-estado="jalisco">Puerto Vallarta</option>

                                                        <!-- <option value="queretaro">Querétaro</option> -->
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-lg-4 mt-2 align-items-center" > <!-- Coloca el botón en una fila nueva -->
                                                        <button class="btn btn-primary mb-0 align-items-center justify-content-center" type="button" onclick="buscar()">Buscar</button>
                                                    </div>
                                                </div>
                                                <div class="row align-items-center px-2">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div> <br> <br>

                        <div class="col-lg-12">
                                            <div class="card" style="background-color: #EAECFF;">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center">
                                                        <i class="sidebar-menu-icon sidebar-menu-icon--left material-icons" style="color: #6773DF;"></i>
                                                        <h4 class="text m-0"><strong>Desbloquea todo el potencial</strong></h4>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <div class="text">Obtén todos los beneficios que tenemos para ti.</div>
                                                        <div class="text">
                                                            <div style="margin-top: -30px;"> <!-- Ajusta el valor del margen superior según sea necesario -->
                                                                <a href="https://datalpine.mx/#pricing" class="btn btn-primary">Ver planes</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                


                <div class="row">
                <div class="container-fluid page__container">
                            <div class="row">
                                <div class="col-lg">
                                    <div class="card">
                                        <div class="card-header card-header-large bg-white d-flex align-items-center">
                                            <h4 class="card-header__title flex m-0">Estados</h4>
                                        </div>
                                    
                                        <div class="list-group tab-content list-group-flush">
                                            <div class="tab-pane active show fade"
                                                id="activity_all">

                                                <div class="list-group-item list-group-item-action d-flex align-items-center" onclick="redirigirAPagina()">
                                                    <div class="avatar avatar-xs" style="width: 32px; height: 32px;">
                                                        <span class="avatar-title rounded-circle">H</span>
                                                    </div>
                                                
                                                    <div class="flex px-3">
                                                        <div class="d-flex align-items-middle">
                                                            <div style="color: #6773DF;" class="text-15pt">Hidalgo</div>
                                                            <div class="text px-1"></div>
                                                        </div>
                                                        <small class="text-muted">Ya disponible</small>
                                                    </div>
                                                    <i class="material-icons icon-muted ml-3"></i>
                                                </div>
                                                
                                                <script>
                                                    function redirigirAPagina() {
                                                        // Cambiar 'nuevaPagina.html' por la URL de la página a la que deseas redirigir
                                                        window.location.href = 'prueba.php';
                                                    }
                                                </script>

                                                <div class="list-group-item list-group-item-action d-flex align-items-center" onclick="redirigirAPaginaPuebla()">
                                                    <div class="avatar avatar-xs"
                                            style="width: 32px; height: 32px;">
                                            <span class="avatar-title rounded-circle">P</span>
                                                    </div>

                                                    <div class="flex px-3">
                                                        <div class="d-flex align-items-middle">
                                                            <div style="color: #6773DF;" class="text-15pt" >Puebla</div> <div class="text px-1" ></div>
                                                        </div>
                                                        <small class="text-muted">Ya disponible</small>
                                                    </div>
                                                    <i class="material-icons icon-muted ml-3"></i>
                                                </div>
                                                <script>
                                                    function redirigirAPaginaPuebla() {
                                                        // Cambiar 'nuevaPagina.html' por la URL de la página a la que deseas redirigir
                                                        window.location.href = 'ppam.php';
                                                    }
                                                </script>

                                                <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                    <div class="avatar avatar-xs"
                                            style="width: 32px; height: 32px;">
                                            <span class="avatar-title rounded-circle">Q</span>
                                                    </div>

                                                    <div class="flex px-3">
                                                        <div class="d-flex align-items-middle">
                                                            <div style="color: #6773DF;" class="text-15pt" >Queretaro</div> <div class="text px-1" ></div>
                                                        </div>
                                                        <small class="text-muted">Ya disponible</small>
                                                    </div>
                                                    <i class="material-icons icon-muted ml-3"></i>
                                                </div>
                                                <script>
                                                    function redirigirAPaginaPuebla() {
                                                        // Cambiar 'nuevaPagina.html' por la URL de la página a la que deseas redirigir
                                                        window.location.href = 'qqam.php';
                                                    }
                                                </script>

                                                <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                    <div class="avatar avatar-xs"
                                            style="width: 32px; height: 32px;">
                                            <span class="avatar-title rounded-circle">V</span>
                                                    </div>

                                                    <div class="flex px-3">
                                                        <div class="d-flex align-items-middle">
                                                            <div style="color: #6773DF;" class="text-15pt" >Veracruz</div> <div class="text px-1" ></div>
                                                        </div>
                                                        <small class="text-muted">Próximamente</small>
                                                    </div>
                                                    <i class="material-icons icon-muted ml-3"></i>
                                                </div>

                                                <div class="list-group-item list-group-item-action d-flex align-items-center ">
                                                    <div class="avatar avatar-xs"
                                                    style="width: 32px; height: 32px;">
                                                    <span class="avatar-title rounded-circle">J</span>
                                                    </div>

                                                    <div class="flex px-3">
                                                        <div class="d-flex align-items-middle">
                                                            <div style="color: #6773DF;" class="text-15pt" >Jalisco</div> <div class="text px-1" ></div>
                                                        </div>
                                                        <small class="text-muted">Ya disponible</small>
                                                    </div>
                                                    <i class="material-icons icon-muted ml-3"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row card-group-row">
                                <div class="col-lg-4 col-md-6 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                            <div class="flex">
                                                <div class="card-header__title mb-2">Top </div>
                                                <div class="card-header__title mb-1"> <strong> Ciudades para invertir</strong></div>
                                                <div class="text" style="color: #6773DF;"> En el último año</div>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center" style="margin-bottom: 20px;">
                                            <small class="text-muted text-uppercase mb-2 d-block font-weight-bold">Top 5</small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Pachuca</span>
                                                <span class="mx-3">643</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 5.00%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Durango</span>
                                                <span class="mx-3">322</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 4.70%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Veracruz</span>
                                                <span class="mx-3">234</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 60.6%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">San Luis Potosí</span>
                                                <span class="mx-3">78</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 11.1%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted">
                                                <span class="flex text-body">Tlaxcala</span>
                                                <span class="mx-3">45</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 15.8%</span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom" >
                                            <div class="flex">
                                                <div class="card-header__title mb-2">Top </div>
                                                <div class="card-header__title mb-1"> <strong> Crecimiento en poblacíon</strong></div>
                                                <div class="text" style="color: #6773DF;"> En el último año</div>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center" style="margin-bottom: 20px;">
                                            <small class="text-muted text-uppercase mb-2 d-block font-weight-bold">Top 5</small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Pachuca</span>
                                                <span class="mx-3">686,708</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 54.61%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Durango</span>
                                                <span class="mx-3">720,626</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 23.76%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Veracruz</span>
                                                <span class="mx-3">939,046</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 12.60%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">San Luis Potosí</span>
                                                <span class="mx-3">1,317,239</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 26.41%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted">
                                                <span class="flex text-body">Tlaxcala</span>
                                                <span class="mx-3">1,411,572</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 14.80%</span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 card-group-row__col">
                                    <div class="card card-group-row__card">
                                        <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                            <div class="flex">
                                                <div class="card-header__title mb-2">Top </div>
                                                <div class="card-header__title mb-1"> <strong> Crecimiento en vivienda </strong></div>
                                                <div class="text" style="color: #6773DF;"> En el último año</div>
                                            </div>
                                        </div>
                                        <div class="card-body d-flex flex-column justify-content-center" style="margin-bottom: 20px;">
                                            <small class="text-muted text-uppercase mb-2 d-block font-weight-bold">Top 5</small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Pachuca</span>
                                                <span class="mx-3">199,376</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 45.00%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Durango</span>
                                                <span class="mx-3">493 698</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 21.10%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">Veracruz</span>
                                                <span class="mx-3">423,759</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 10.53%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted mb-1">
                                                <span class="flex text-body">San Luis Potosí</span>
                                                <span class="mx-3">774,658</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 21.00%</span>
                                            </small>
                                            <small class="d-flex align-items-center font-weight-bold text-muted">
                                                <span class="flex text-body">Tlaxcala</span>
                                                <span class="mx-3">341,577</span>
                                                <span class="d-flex align-items-center"><i class="material-icons text-success icon-16pt mr-1"></i> 24.57%</span>
                                            </small>
                                        </div>
                                    </div>
                                </div>
                            </div> <br> <br>

                </div><!-- end row -->

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <?php include 'layouts/footer.php'; ?>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- Right Sidebar -->
<?php include 'layouts/right-sidebar.php'; ?>
<!-- /Right-bar -->

<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>

<!-- apexcharts -->
<script src="assets/libs/apexcharts/apexcharts.min.js"></script>

<!-- Plugins js-->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>

<!-- dashboard init -->
<script src="assets/js/pages/dashboard.init.js"></script>

<!-- App js -->
<script src="assets/js/app.js"></script>

</body>

</html>