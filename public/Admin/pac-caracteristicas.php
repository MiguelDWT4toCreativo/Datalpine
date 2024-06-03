<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Pachuca | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>

    <style>
        .subtitle-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .subtitle {
            font-size: 1.8em;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .description {
            display: none;
            margin-top: 20px;
            padding: 25px;
            background-color: #e9f5ff;
            border-left: 8px solid #007BFF;
            border-radius: 10px;
        }

        .interpretation {
            margin-bottom: 30px;
            padding: 25px;
            background-color: #fef4e9;
            border-left: 8px solid #FFA500;
            border-radius: 10px;
            margin-top: 30px;
        }

        .text {
            font-size: 1.2em;
            line-height: 1.8;
            color: #555;
        }

        .icon {
            margin-right: 10px;
            font-size: 1.5em;
            display: inline-block;
        }

        .mostrar {
            padding: 10px 20px;
            font-size: 1em;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .mostrar-container {
            text-align: center;
            margin-top: 20px;
        }

        .mostrar:hover {
            background-color: #0056b3;
        }

        .map-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 12px;
            margin-bottom: 20px;
        }
    </style>
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
                    <h1>Características y Distribución de Propiedades</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

                <!-- 1. Distribución recámaras -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px; padding: 12px; margin-bottom: 20px;">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <div class="col-md-6">
                            <div class="subtitle-container">
                                <h5 class="card-title subtitle">
                                    1. Distribución recámaras<span class="text-muted fw-normal ms-2"></span>
                                </h5>
                            </div>
                        </div>
                        <div>
                            <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido1')"
                                value="Segmentos">
                            <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido2')"
                                value="General">
                        </div>
                    </div>

                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/grafica_recamaras_pachuca.html"
                                    id="contenido1"></iframe>
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/grafica_pastel_recamaras_pachuca.html"
                                    id="contenido2" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <ul class="text">
                                <li>Explora cómo se distribuyen las propiedades por segmentos disponibles, según el
                                    número de recámaras, desde 1 hasta 6.</li>
                                <li>Distribución de propiedades por segmentos según el número de recámaras, que varía de
                                    1 a 6.</li>
                            </ul>
                        </div>
                        <!-- Interpretación -->
                        <div class="interpretation">
                            <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <ul class="text">
                                <li>Las propiedades con <strong>3 recámaras</strong> son las más comunes en
                                    <strong>todos los segmentos</strong>, esto se puede observar en las barras altas,
                                    con una cantidad significativa para el <strong>segmento B</strong>.
                                </li>
                                <li>Subsiguiente, las propiedades con <strong>2 recámaras</strong> también son populares
                                    en el <strong>segmento A y B</strong>. En contraste, las propiedades con <strong>4 o
                                        más recámaras</strong> son menos comunes en los <strong>segmentos C y
                                        D</strong>.</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- 2. Distribución de baños -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px; padding: 12px; margin-bottom: 20px;">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <div class="col-md-6">
                            <div class="subtitle-container">
                                <h5 class="card-title subtitle">
                                    2. Distribución de baños<span class="text-muted fw-normal ms-2"></span></h5>
                            </div>
                        </div>
                        <div>
                            <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido3')"
                                value="Segmentos">
                            <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido4')"
                                value="General">
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_baños_pachuca.html"
                                    id="contenido3"></iframe>
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_pie_baños_pachuca.html" id="contenido4"
                                    style="display: none;"></iframe>
                            </div>
                        </div>

                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description1')">Descripción</button>
                        </div>

                        <!-- Descripción -->
                        <div class="description" id="description1" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <ul class="text">
                                <li>Observa la distribución de propiedades por segmentos según el número de
                                    baños, que varía desde 1 hasta 8 o más.</li>
                                <li>Distribución de propiedades por segmentos según el número de baños, que
                                    varía de 1 a 8 o más</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Interpretación -->
                    <div class="interpretation">
                        <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                        <ul class="text">
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
                <!-- 3. Distribución de estacionamientos -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px; padding: 12px; margin-bottom: 20px;">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <div class="col-md-6">
                            <div class="subtitle-container">
                                <h5 class="card-title subtitle">
                                    3. Distribución de estacionamientos<span class="text-muted fw-normal ms-2"></span>
                                </h5>
                            </div>
                        </div>
                        <div>
                            <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido5')"
                                value="Segmentos">
                            <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido6')"
                                value="General">
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/grafica_estacionamiento_pachuca.html"
                                    id="contenido5"></iframe>
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/grafica_pastel_estacionamientos_pachuca.html"
                                    id="contenido6" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description2')">Descripción</button>
                        </div>

                        <!-- Descripción -->
                        <div class="description" id="description2" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <ul class="text">
                                <li>Observa cómo se distribuyen las propiedades en diferentes segmentos en
                                    función del número de lugares de estacionamiento, que varía de 0 a 6 o
                                    más.</li>
                                <li>Obtén información sobre cómo se categorizan las propiedades en distintos
                                    segmentos en base a la cantidad de espacios de estacionamiento
                                    disponibles, con opciones que van desde 1 hasta 8 o más.</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Interpretación -->
                    <div class="interpretation">
                        <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                        <ul class="text">
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

<script>
    function mostrar(id) {
        var iframes = document.getElementsByTagName('iframe');
        for (var i = 0; i < iframes.length; i++) {
            iframes[i].style.display = 'none';
        }
        document.getElementById(id).style.display = 'block';
    }
</script>

<script>
    function toggleDescription(id) {
        var description = document.getElementById(id);
        if (description.style.display === 'none' || description.style.display === '') {
            description.style.display = 'block';
        } else {
            description.style.display = 'none';
        }
    }
</script>

</body>

</html>