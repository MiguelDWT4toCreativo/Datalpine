<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Pachuca | DatAlpine</title>
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
                            <h4 class="mb-sm-0 font-size-18">Pachuca</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hidalgo</a></li>
                                    <li class="breadcrumb-item active">Pachuca</li>
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
                    Características y Distribución de Propiedades
                </div>
                <p style="font-size: 16px; line-height: 1.5; color: #666;">Este apartado ofrece datos históricos y
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
                                    <iframe src="/datalpine/resources/jupyter/graficas/grafica_recamaras_pachuca.html"
                                        width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">General</h5>
                                    <iframe
                                        src="/datalpine/resources/jupyter/graficas/grafica_pastel_recamaras_pachuca.html"
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
                            <ul
                                style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                <li>Explora cómo se distribuyen las propiedades por segmentos disponibles,
                                    según el número de recámaras, desde 1 hasta 6.</li>
                                <li>Distribución de propiedades por segmentos según el número de recámaras,
                                    que varía de 1 a 6</li>
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
                                <li>Las propiedades con <strong>3 recámaras</strong> son las más comunes en
                                    <strong>todos los
                                        segmentos</strong>,
                                    esto se puede observar en las barras altas, con una cantidad
                                    significativa
                                    para el <strong>segmento B</strong>.
                                </li>
                                <li>Subsiguiente, las propiedades con <strong>2 recámaras</strong> también
                                    son
                                    populares
                                    en el
                                    <strong>segmento A y B</strong>. En contraste, las propiedades con
                                    <strong>4 o más
                                        recámaras</strong>
                                    en los
                                    <strong>segmentos C y D</strong>.
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
                                <iframe src="/datalpine/resources/jupyter/graficas/g_bar_baños_pachuca.html"
                                    width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">General</h5>
                                <iframe src="/datalpine/resources/jupyter/graficas/g_pie_baños_pachuca.html"
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
                        <ul
                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                            <li>Observa la distribución de propiedades por segmentos según el número de
                                baños, que varía desde 1 hasta 8 o más.</li>
                            <li>Distribución de propiedades por segmentos según el número de baños, que
                                varía de 1 a 8 o más</li>
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
                                <strong>3 y 5
                                    baños</strong>.
                                Esto se
                                puede observar en las barras altas en este segmento para las
                                propiedades con
                                dicho números de baños.
                            </li>
                            <li>Para el <strong>segmento A</strong>, hay una distribución más uniforme
                                entre
                                propiedades con
                                2 baños seguido de <strong>1 baño</strong>.</li>
                            <li>El <strong>segmento B</strong> muestra una predominancia de propiedades
                                con <strong>3
                                    baños</strong>.
                                Esto se
                                puede observar en la barra alta en este segmento para las
                                propiedades,
                                seguido de <strong>2 baños</strong>.</li>
                            <li>En los <strong>segmentos C y D</strong>, la mayoría de las propiedades
                                es común
                                encontrar
                                entre <strong>2 a 4 baños</strong>.</li>
                            <li>El <strong>segmento E</strong> tiene muy pocas propiedades en cada
                                categoría de
                                número de
                                baños. Esto se puede observar en las barras bajas en este
                                segmento
                                para las
                                propiedades con cualquier número de baños, predominando <strong>2
                                    baños</strong>.
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
                                <iframe src="/datalpine/resources/jupyter/graficas/grafica_estacionamiento_pachuca.html"
                                    width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">General</h5>
                                <iframe
                                    src="/datalpine/resources/jupyter/graficas/grafica_pastel_estacionamientos_pachuca.html"
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
                        <ul
                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                            <li>Observa cómo se distribuyen las propiedades en diferentes segmentos en
                                función del número de lugares de estacionamiento, que varía de 0 a 6 o
                                más.</li>
                            <li>Obtén información sobre cómo se categorizan las propiedades en distintos
                                segmentos en base a la cantidad de espacios de estacionamiento
                                disponibles, con opciones que van desde 1 hasta 8 o más.</li>
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
                            <li>La mayoría de las propiedades en todos los segmentos <strong>tienen 2
                                    lugares de
                                    estacionamiento</strong> seguido de 1 estacionamiento. Esto se puede
                                observar
                                en las
                                barras altas en estos segmentos para las propiedades con estos
                                números de
                                estacionamientos.</li>
                            <li>El <strong>segmento S</strong> tiene una notable cantidad de propiedades
                                con <strong>2
                                    estacionamientos</strong>.</li>
                            <li>Los <strong>segmentos A, B, C, D Y E</strong> muestran una preferencia
                                marcada
                                por <strong>2
                                    estacionamientos</strong>. Esto se puede observar en la barra alta
                                en
                                estos
                                segmentos
                                para las propiedades seguido de 1 estacionamiento.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

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
<!-- jquery-sparkline js -->
<script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- sparkline init -->
<script src="assets/js/pages/sparklines.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>