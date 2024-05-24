<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Tulancingo | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>
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
                            <h4 class="mb-sm-0 font-size-18">Tulancingo</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hidalgo</a></li>
                                    <li class="breadcrumb-item active">Tulancingo</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- Características y Distribución de Propiedades -->
                <style>
                    /* Estilos CSS para el título */
                    .titulo {
                        text-align: center;
                        /* Centrar el texto */
                        color: #333;
                        /* Color llamativo (en este caso, naranja) */
                        font-size: 24px;
                        /* Tamaño del texto */
                        font-weight: bold;
                        /* Negrita */
                        font-family: Arial, sans-serif;
                        /* Fuente del texto */
                    }
                </style>
                <div class="titulo">
                    <h1>Características y Distribución de Propiedades</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

                <!-- 1. Distribución recámaras -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                1. Distribución recámaras<span class="text-muted fw-normal ms-2"></span></h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                        <!-- Link de la gráfica -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Segmentos</h5>
                                        <iframe
                                            src="/datalpine/resources/jupyter/graficas/grafica_recamaras_tulancingo.html"
                                            width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">General</h5>
                                        <iframe
                                            src="/datalpine/resources/jupyter/graficas/grafica_pastel_recamaras_tulancingo.html"
                                            width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Explicación de la gráfica -->

                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                    Distribución del número de recamaras para las propiedades en diferentes segmentos
                                    (S, A,
                                    B, C, D, E). Explora una visión concisa sobre los rangos de recamaras más comunes y
                                    menos comunes en las preferencias de un sector inmobiliario.
                                </p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Si una barra es alta, significa que hay muchas propiedades con ese número de
                                        recámaras dentro de ese rango en especifico.</li>
                                    <li>Si una barra es baja, indica que hay menos propiedades con ese número de
                                        recámaras.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    <li><strong>General:</strong> La mayoría de las propiedades presentan 3 recámaras
                                        <strong>(56.2%)</strong>, lo que representa la parte más significativa del
                                        mercado.
                                        Le siguen las
                                        propiedades con 2 recámaras <strong>(27%)</strong> , que también son comunes en
                                        la
                                        región. Por otro
                                        lado, las propiedades con 1 sola recámara <strong>(1.1%)</strong> son menos
                                        comunes
                                        en comparación
                                        con aquellas con dos o tres recámaras.
                                    </li>
                                    <li><strong>Segmentos:</strong> Las propiedades con <strong>3 recámaras</strong> son
                                        las
                                        más comunes en todos los segmentos, esto se
                                        puede observar en las barras altas, con una cantidad significativa para el
                                        <strong>segmento
                                            D.</strong> Subsiguiente, las propiedades con <strong>2 recámaras</strong>
                                        también son populares en los
                                        segmentos.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 2. Distribución de baños -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                2. Distribución de baños<span class="text-muted fw-normal ms-2"></span></h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                        <!-- Link de la gráfica -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Segmentos</h5>
                                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_baños_tulancingo.html"
                                            width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">General</h5>
                                        <iframe src="/datalpine/resources/jupyter/graficas/g_pie_baños_tulancingo.html"
                                            width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Explicación de la gráfica -->

                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                    Distribución del número de baños para las propiedades en diferentes segmentos (S, A,
                                    B,
                                    C, D, E). Conoce un panorama claro sobre los rangos de baños predominantes y menos
                                    predominantes.
                                </p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Si una barra es alta, significa que hay muchas propiedades con ese número de
                                        baños
                                        dentro de ese rango en particular.</li>
                                    <li>Si una barra es baja, indica que hay menos propiedades con ese número de baños
                                        en
                                        específico.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    <li>En el <strong>segmento S</strong>, la mayoría de las propiedades tienen
                                        <strong>2 y
                                            3 baños</strong>. Esto se puede
                                        observar en las barras altas en este segmento para las propiedades con estos
                                        números
                                        de baños.
                                    </li>
                                    <li>Para el <strong>segmento A</strong>, hay una distribución predominante entre
                                        propiedades con 2 baños,
                                        seguido de <strong>3 baños</strong>.</li>
                                    <li>El <strong>segmento B</strong> muestra una predominancia de propiedades con
                                        <strong>3 baños</strong>. Esto se puede
                                        observar en la barra alta en este segmento para las propiedades, seguido de 3
                                        baños.
                                    </li>
                                    <li>En los <strong>segmentos C y D</strong>, la mayoría de las propiedades es común
                                        encontrar entre <strong>3 y 2
                                            baños</strong>.</li>
                                    <li>El <strong>segmento E</strong> tiene mayor propiedades en cada categoría de
                                        número
                                        de baños. En las
                                        que predominan <strong>2 y 3 baños</strong>.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 3. Distribución de estacionamientos -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                3. Distribución de estacionamientos<span class="text-muted fw-normal ms-2"></span></h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                        <!-- Link de la gráfica -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Segmentos</h5>
                                        <iframe
                                            src="/datalpine/resources/jupyter/graficas/grafica_estacionamiento_tulancingo.html"
                                            width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">General</h5>
                                        <iframe
                                            src="/datalpine/resources/jupyter/graficas/grafica_pastel_estacionamiento_tulancingo.html"
                                            width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                    Distribución del número de estacionamientos para las propiedades en diferentes
                                    segmentos
                                    (S, A, B, C, D, E). Observa como se distribuyen los números de lugares de
                                    estacionamiento para comprender las preferencias del mercado en cuanto a este
                                    aspecto.
                                </p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Si una barra es alta, significa que hay muchas propiedades con esa cantidad de
                                        estacionamientos</li>
                                    <li>Si una barra es baja, indica que hay menos propiedades con esa cantidad de
                                        espacios
                                        para estacionamientos.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    <li>Los <strong>segmentos S, A, B, C, D</strong> muestran una preferencia marcada
                                        por
                                        <strong>1 estacionamiento</strong>.
                                        Esto se puede observar en las barras altas en estos segmentos para las
                                        propiedades
                                        con estos números de estacionamientos.
                                    </li>
                                    <li>El <strong>segmento D</strong> tiene una notable cantidad de propiedades con 1
                                        estacionamiento.</li>
                                    <li>El <strong>segmento E</strong> destaca con propiedades con 1 estacionamiento
                                        seguido de 2. Esto se
                                        puede observar en las barras altas para dicho segmento.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear())
                        </script> © DatAlpine.
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->

<!-- /Right-bar -->

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="assets/libs/jquery/jquery.min.js"></script>
<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/metismenu/metisMenu.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/node-waves/waves.min.js"></script>
<script src="assets/libs/feather-icons/feather.min.js"></script>
<!-- pace js -->
<script src="assets/libs/pace-js/pace.min.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>