<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>User List | Minia - Admin & Dashboard Template</title>

    <?php include 'layouts/head.php'; ?>

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

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
                            <h4 class="mb-sm-0 font-size-18">User List</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                    <li class="breadcrumb-item active">User List</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!--Clientes potenciales foráneos -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Clientes potenciales foráneos<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <!-- Link de la gráfica -->
                        <?php
                        // Ruta de la imagen
                        $ruta_imagen = "/datalpine/resources/jupyter/mapas/map_ClientesPotencialesForaneos_pachuca.png";
                        $ancho_imagen = 800; // Ancho deseado para la imagen
                        $alto_imagen = 400; // Alto deseado para la imagen
                        ?>

                        <!-- Contenedor para centrar la imagen -->
                        <div style="display: flex; justify-content: center;">
                            <!-- Insertar la imagen en el contenedor -->
                            <img src="<?php echo $ruta_imagen; ?>" width="<?php echo $ancho_imagen; ?>"
                                height="<?php echo $alto_imagen; ?>" alt="Imagen">
                        </div>

                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">El mapa
                                proporciona una representación de la distribución de compradores foráneos
                                interesados en adquirir propiedades en la zona metropolitana de Pachuca. Estos
                                compradores están clasificados por su región de origen y se ponderan según la
                                importancia relativa asignada basada en un meticuloso análisis de variables
                                clave,
                                como el tamaño del mercado, la demanda del producto o servicio y la
                                accesibilidad
                                logística. Con esta información, se puede comprender la procedencia geográfica
                                de
                                los interesados en el mercado inmobiliario local, lo que facilita la
                                identificación
                                de tendencias y preferencias de compra. </p>
                        </div>
                    </div>
                    <div
                        style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                        <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                            <strong>Interpretación:</strong>
                        </p>
                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                            El mapa proporciona datos sobre la distribución de compradores foráneos interesados
                            en
                            adquirir propiedades en la ciudad de Pachuca. Estos compradores están clasificados
                            por
                            región de origen y se muestran sus respectivas ponderaciones, reflejando el
                            porcentaje
                            de contribución relativa de cada región al total de compradores foráneos.
                            Según los datos, la región de Ciudad de México representa el mayor porcentaje, con
                            un
                            33%, seguida por el Estado de México con un 27%, Nuevo León con un 20%, Jalisco con
                            un
                            13%, y finalmente Puebla con un 7%.
                            Este análisis revela la procedencia geográfica de los compradores foráneos y su
                            importancia relativa en el mercado inmobiliario de Pachuca, lo que puede ser
                            esencial
                            para comprender y atender las necesidades de estos grupos de compradores en
                            particular.
                        </p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title">Contact List <span class="text-muted fw-normal ms-2">(834)</span>
                            </h5>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                            <div>
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="apps-contacts-list.php"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="List"><i
                                                class="bx bx-list-ul"></i></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="apps-contacts-grid.php" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Grid"><i class="bx bx-grid-alt"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <a href="#" class="btn btn-light"><i class="bx bx-plus me-1"></i> Add New</a>
                            </div>

                            <div class="dropdown">
                                <a class="btn btn-link text-muted py-1 font-size-16 shadow-none dropdown-toggle"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-horizontal-rounded"></i>
                                </a>

                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end row -->

                <div class="table-responsive mb-4">
                    <table class="table align-middle datatable dt-responsive table-check nowrap"
                        style="border-collapse: collapse; border-spacing: 0 8px; width: 100%;">
                        <thead>
                            <tr>
                                <th scope="col" style="width: 50px;">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="checkAll">
                                        <label class="form-check-label" for="checkAll"></label>
                                    </div>
                                </th>
                                <th scope="col">Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Email</th>
                                <th scope="col">Tags</th>
                                <th style="width: 80px; min-width: 80px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck1">
                                        <label class="form-check-label" for="contacusercheck1"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                        class="avatar-sm rounded-circle me-2">
                                    <a href="#" class="text-body">Phyllis Gatlin</a>
                                </td>
                                <td>UI/UX Designer</td>
                                <td>phyllisgatlin@minia.com</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge bg-primary-subtle text-primary">Photoshop</a>
                                        <a href="#" class="badge bg-primary-subtle text-primary">illustrator</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck2">
                                        <label class="form-check-label" for="contacusercheck2"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="assets/images/users/avatar-1.jpg" alt=""
                                        class="avatar-sm rounded-circle me-2">
                                    <a href="#" class="text-body">James Nix</a>
                                </td>
                                <td>Frontend Developer</td>
                                <td>jamesnix@minia.com</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">Html</a>
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">Css</a>
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">2 +
                                            more</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck3">
                                        <label class="form-check-label" for="contacusercheck3"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="assets/images/users/avatar-3.jpg" alt=""
                                        class="avatar-sm rounded-circle me-2">
                                    <a href="#" class="text-body">Darlene Smith</a>
                                </td>
                                <td>Backend Developer</td>
                                <td>darlenesmith@minia.com</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">Php</a>
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">Java</a>
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">Python</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck4">
                                        <label class="form-check-label" for="contacusercheck4"></label>
                                    </div>
                                </th>
                                <td>
                                    <div class="avatar-sm d-inline-block align-middle me-2">
                                        <div
                                            class="avatar-title bg-light-subtle text-light font-size-24 m-0 rounded-circle">
                                            <i class="bx bxs-user-circle"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="text-body">William Swift</a>
                                </td>
                                <td>Full Stack Developer</td>
                                <td>williamswift@minia.com</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">Ruby</a>
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">Php</a>
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">2 +
                                            more</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck5">
                                        <label class="form-check-label" for="contacusercheck5"></label>
                                    </div>
                                </th>
                                <td>
                                    <div class="avatar-sm d-inline-block align-middle me-2">
                                        <div
                                            class="avatar-title bg-light-subtle text-light font-size-24 m-0 rounded-circle">
                                            <i class="bx bxs-user-circle"></i>
                                        </div>
                                    </div>
                                    <a href="#" class="text-body">Kevin West</a>
                                </td>
                                <td>Frontend Developer</td>
                                <td>kevinwest@minia.com</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">Html</a>
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">Css</a>
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">2 +
                                            more</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck6">
                                        <label class="form-check-label" for="contacusercheck6"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="assets/images/users/avatar-6.jpg" alt=""
                                        class="avatar-sm rounded-circle me-2">
                                    <a href="#" class="text-body">Tommy Hayes</a>
                                </td>
                                <td>UI/UX Designer</td>
                                <td>tommyhayes@minia.com</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#"
                                            class="badge bg-primary-subtle text-primary font-size-11">Photoshop</a>
                                        <a href="#"
                                            class="badge bg-primary-subtle text-primary font-size-11">illustrator</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck7">
                                        <label class="form-check-label" for="contacusercheck7"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="assets/images/users/avatar-8.jpg" alt=""
                                        class="avatar-sm rounded-circle me-2">
                                    <a href="#" class="text-body">Diana Owens</a>
                                </td>
                                <td>Graphic Designer</td>
                                <td>dianaowens@minia.com</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#"
                                            class="badge bg-primary-subtle text-primary font-size-11">Photoshop</a>
                                        <a href="#"
                                            class="badge bg-primary-subtle text-primary font-size-11">illustrator</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck8">
                                        <label class="form-check-label" for="contacusercheck8"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="assets/images/users/avatar-9.jpg" alt=""
                                        class="avatar-sm rounded-circle me-2">
                                    <a href="#" class="text-body">Paul Sanchez</a>
                                </td>
                                <td>Angular Developer</td>
                                <td>paulsanchez@minia.com</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">Php</a>
                                        <a href="#"
                                            class="badge bg-primary-subtle text-primary font-size-11">Javascript</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck9">
                                        <label class="form-check-label" for="contacusercheck9"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="assets/images/users/avatar-9.jpg" alt=""
                                        class="avatar-sm rounded-circle me-2">
                                    <a href="#" class="text-body">Peter Dryer</a>
                                </td>
                                <td>Web Designer</td>
                                <td>peterdryer@minia.com</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">Html</a>
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">Css</a>
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">2 +
                                            more</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck10">
                                        <label class="form-check-label" for="contacusercheck10"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="assets/images/users/avatar-4.jpg" alt=""
                                        class="avatar-sm rounded-circle me-2">
                                    <a href="#" class="text-body">Gerald Moyer</a>
                                </td>
                                <td>Backend Developer</td>
                                <td>geraldmoyer@minia.com</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">Php</a>
                                        <a href="#"
                                            class="badge bg-primary-subtle text-primary font-size-11">Javascript</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="form-check font-size-16">
                                        <input type="checkbox" class="form-check-input" id="contacusercheck11">
                                        <label class="form-check-label" for="contacusercheck11"></label>
                                    </div>
                                </th>
                                <td>
                                    <img src="assets/images/users/avatar-2.jpg" alt=""
                                        class="avatar-sm rounded-circle me-2">
                                    <a href="#" class="text-body">Gail McGuire</a>
                                </td>
                                <td>Backend Developer</td>
                                <td>gailmcGuire@minia.com</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">Php</a>
                                        <a href="#"
                                            class="badge bg-primary-subtle text-primary font-size-11">Javascript</a>
                                        <a href="#" class="badge bg-primary-subtle text-primary font-size-11">2+
                                            more</a>
                                    </div>
                                </td>
                                <td>
                                    <div class="dropdown">
                                        <button
                                            class="btn btn-link font-size-16 shadow-none py-0 text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- end table -->
                </div>
                <!-- end table responsive -->

            </div> <!-- container-fluid -->
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

<!-- Required datatable js -->
<script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

<!-- Responsive examples -->
<script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- init js -->
<script src="assets/js/pages/datatable-pages.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>