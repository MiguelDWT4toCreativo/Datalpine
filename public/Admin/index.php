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
                        
                        </div> <br> <br>
                        <div class="row align-items-center justify-content-center text-center">
        <div class="col-xl-8">
            <h1 class="display-4 mt-5 mb-3">¡Bienvenido a DatAlpine!</h1>
            <p class="lead mb-4">Tu socio en la toma de decisiones inteligentes en el mercado inmobiliario mexicano.</p>
            <p class="text-muted">En DatAlpine, ofrecemos análisis detallados y personalizados del mercado inmobiliario en México. Desde tendencias de precios hasta segmentación de mercado, te proporcionamos la información precisa que necesitas para tomar decisiones estratégicas con confianza.</p>
        </div>
    </div>
    <div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <!-- card -->
            <div class="card bg-primary text-center shadow-primary card-h-100">
                <!-- card body -->
                <div class="card-body p-0">
                    <div id="carouselExampleCaptions" class="carousel slide text-center widget-carousel" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="text-center p-4">
                                    <i class="mdi mdi-bitcoin widget-box-1-icon"></i>
                                    <h4 class="mt-3 lh-base fw-normal text-white"><b>Inteligencia de Mercado Personalizada</b></h4>
                                    <p class="text-white-50 font-size-13">DatAlpine ofrece un análisis detallado y personalizado de 
                                        tendencias, precios y segmentación del mercado inmobiliario en México, proporcionando a los 
                                        usuarios información precisa para tomar decisiones estratégicas. </p>
                                </div>
                            </div>
                            <!-- end carousel-item -->
                            <div class="carousel-item">
                                <div class="text-center p-4">
                                    <i class="mdi mdi-ethereum widget-box-1-icon"></i>
                                    <h4 class="mt-3 lh-base fw-normal text-white"><b>Toma de Decisiones Estratégicas</b></h4>
                                    <p class="text-white-50 font-size-13">Con datos actualizados y análisis profundos, los usuarios 
                                        pueden anticiparse a los cambios del mercado, identificar oportunidades de inversión y 
                                        mitigar riesgos, lo que les otorga una ventaja competitiva significativa. </p>
                                </div>
                            </div>
                            <!-- end carousel-item -->
                            <div class="carousel-item">
                                <div class="text-center p-4">
                                    <i class="mdi mdi-litecoin widget-box-1-icon"></i>
                                    <h4 class="mt-3 lh-base fw-normal text-white"><b>Visión Completa del Panorama Inmobiliario</b></h4>
                                    <p class="text-white-50 font-size-13">La plataforma proporciona una visión completa y actualizada del 
                                        mercado inmobiliario en México, permitiendo a los usuarios acceder a investigaciones detalladas y 
                                        proyecciones de tendencias específicas para diversas ciudades del país, lo que les permite tomar 
                                        decisiones informadas con un alto grado de certeza. </p>
                                </div>
                            </div>
                            <!-- end carousel-item -->
                        </div>
                        <!-- end carousel-inner -->

                        <div class="carousel-indicators carousel-indicators-rounded">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <!-- end carousel-indicators -->
                    </div>
                    <!-- end carousel -->
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

    <div class="row">
        <div class="col-xl-12">
            <!-- card -->
            <div class="card">
                <!-- card body -->
                <div class="card-body">
                    <div class="d-flex flex-wrap align-items-center mb-4">
                        <h5 class="card-title me-2">Sales by Locations</h5>
                        <div class="ms-auto">
                            <div class="dropdown">
                                <a class="dropdown-toggle text-reset" href="#" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="text-muted font-size-12">Sort By:</span> <span class="fw-medium">World<i class="mdi mdi-chevron-down ms-1"></i></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
                                    <a class="dropdown-item" href="#">Pachuca</a>
                                    <a class="dropdown-item" href="#">Tulancingo</a>
                                    <a class="dropdown-item" href="#">Queretaro</a>
                                    <a class="dropdown-item" href="#">Puebla</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div id="sales-by-locations" data-colors='["#5156be"]' style="height: 250px"></div>

                    <div class="px-2 py-2">
                        <p class="mb-1">Pachuca <span class="float-end">75%</span></p>
                        <div class="progress mt-2" style="height: 6px;">
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
                            </div>
                        </div>

                        <p class="mt-3 mb-1">Tulancingo <span class="float-end">55%</span></p>
                        <div class="progress mt-2" style="height: 6px;">
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
                            </div>
                        </div>

                        <p class="mt-3 mb-1">Puebla <span class="float-end">85%</span></p>
                        <div class="progress mt-2" style="height: 6px;">
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                            </div>
                        </div>
                        <p class="mt-3 mb-1">Queretaro <span class="float-end">85%</span></p>
                        <div class="progress mt-2" style="height: 6px;">
                            <div class="progress-bar progress-bar-striped bg-primary" role="progressbar"
                                style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->
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