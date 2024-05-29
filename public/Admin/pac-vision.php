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

                <!-- Visión General del Mercado -->
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
                    <h1>Visión General del Mercado</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>
                <!--Mapa de calor -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="subtitle-container">
                            <h5 class="card-title subtitle">
                                Mapa de Calor<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <div style="flex: 1; margin-right: 20px;">
                                <iframe src="/datalpine/resources/jupyter/mapas/map_2_pachuca.html" width="800"
                                    height="400" frameborder="0" id="contenido01"
                                    style="display: block; margin: 0 auto;"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="mostrar-container">
                        <button class="mostrar" onclick="toggleDescription('description')">Descripción</button>
                    </div>

                    <!-- Descripción -->
                    <div class="description" id="description" style="display: none;">
                        <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                        <p class="text">Este mapa interactivo despliega una representación visual de las colonias
                            locales junto con información clave sobre el mercado inmobiliario como el el precio
                            promedio tanto de propiedades como de m2 de terreno y m2 construido, de
                            igual forma, engloba información sobre el promedio de recamaras, baños,
                            cajones de estacionamiento y precios promedio de m2 de terreno y de
                            construcción. Cada colonia se clasifica en un segmento específico, desde E
                            (menor precio) hasta S (mayor precio), según el rango de precios de las
                            propiedades y están representados de la siguiente manera:</p>
                        <ul class="text">
                            <li>SEGMENTO E: Menor a <strong>1M</strong> (Verde)</li>
                            <li>SEGMENTO D: <strong>1M - 1.75M</strong> (Amarillo)</li>
                            <li>SEGMENTO C: <strong>1.75M-2.5M</strong> (Azul)</li>
                            <li>SEGMENTO B: <strong>2.5M-3.25</strong> (Morado)</li>
                            <li>SEGMENTO A: <strong>3.25M-4M</strong> (Naranja)</li>
                            <li>SEGMENTO S: <strong>4KK+</strong> (Rojo)</li>
                        </ul>
                    </div>
                    <!-- Interpretación -->
                    <div class="interpretation">
                        <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                        <p class="text">Analizando el mapa, se destaca que en Pachuca, varias colonias se encuentran
                            principalmente en el segmento de precios más alto, identificado como S.
                            Entre
                            ellas se incluyen:</p>
                        <ul class="text">
                            <li>Valle de San Javier</li>
                            <li>Club de Golf</li>
                            <li>La Moraleja</li>
                            <li>Periodista</li>
                        </ul>
                        <p class="text">
                            Por otro lado, se observa que entre las colonias con precios más accesibles
                            se
                            encuentra:</p>
                        <ul class="text">
                            <li>La Palma</li>
                        </ul>
                        <p class="text">
                            Además, se identifican colonias cuyos precios se sitúan en un rango
                            promedio, como:</p>
                        <ul class="text">
                            <li>Santa Julia</li>
                            <li>Piracantos</li>
                            <li>Pitahayas</li>
                        </ul>
                        <p class="text">
                            Este mapa nos proporciona una visión clara de la diversidad de precios en
                            las
                            diferentes colonias de Pachuca.</p>
                    </div>
                </div>
                <!--Mapa de calor Propiedades -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="subtitle-container">
                            <h5 class="card-title subtitle">
                                Mapa
                                de calor Propiedades<span class="text-muted fw-normal ms-2"></span></h5>
                        </div>
                    </div>
                    <!-- Link de la gráfica -->
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <div style="flex: 1; margin-right: 20px;">
                                <iframe src="/datalpine/resources/jupyter/mapas/hidalgo_heat_map.html" width="800"
                                    height="400" frameborder="0" id="contenido01"
                                    style="display: block; margin: 0 auto;"></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="mostrar-container">
                        <button class="mostrar" onclick="toggleDescription('description2')">Descripción</button>
                    </div>
                    <!-- Explicación de la gráfica -->
                    <div class="description" id="description2" style="display: none;">
                        <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                        <p class="text">El mapa de calor presentado ofrece una visualización de la densidad de
                            propiedades
                            disponibles en la ciudad. La representación utiliza una escala de colores que va desde
                            el rojo intenso, indicando una alta concentración de propiedades en una zona
                            específica, hasta el azul más claro, denotando una menor oferta de propiedades en esa
                            área, donde cada propiedad está geolocalizada mediante sus coordenadas de latitud
                            y longitud. </p>
                        <p class="text">Esta representación permite identificar fácilmente áreas con alta demanda y
                            concentración de propiedades, así como áreas con menor competencia y potencial para el
                            desarrollo inmobiliario.</p>
                    </div>
                    <div class="interpretation">
                        <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                        <p class="text">El análisis de la distribución de la oferta de propiedades revela que algunas
                            colonias destacan por su alta densidad de disponibilidad, como <strong>La Providencia,
                                Miguel
                                Hidalgo, Lomas Residencial, Real Toledo Fase 4 y Lomas de Nueva Airosa. </strong></p>
                        <p class="text">
                            Por otro lado, existen colonias donde la oferta es notablemente más limitada,
                            como <strong>La Misión, Ex-Hacienda de Pitahayas, Carlos Rovirosa, Hacienda la Herradura y
                                Privada
                                Rinconadas del Sur.</strong>
                        </p>
                        <p class="text">
                            Este panorama ofrece una visión clara de las áreas con mayor y menor
                            disponibilidad de propiedades. </p>
                    </div>
                </div>
                <!--Clientes potenciales foráneos -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="subtitle-container">
                            <h5 class="card-title subtitle">Clientes potenciales foráneos<span
                                    class="text-muted fw-normal ms-2"></span>
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

                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description3')">Descripción</button>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="description" id="description3" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">El mapa
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
                        <div class="interpretation">
                            <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <p class="text">
                                El mapa proporciona datos sobre la distribución de compradores foráneos interesados
                                en
                                adquirir propiedades en la ciudad de Pachuca. Estos compradores están clasificados
                                por
                                región de origen y se muestran sus respectivas ponderaciones, reflejando el
                                porcentaje
                                de contribución relativa de cada región al total de compradores foráneos.
                                Según los datos, la región de Ciudad de México representa el mayor porcentaje, con
                                un
                                <strong>33%</strong>, seguida por el Estado de México con un <strong>27%</strong>,
                                Nuevo León con un <strong>20%</strong>, Jalisco con
                                un
                                <strong>13%</strong>, y finalmente Puebla con un <strong>7%</strong>.
                                Este análisis revela la procedencia geográfica de los compradores foráneos y su
                                importancia relativa en el mercado inmobiliario de Pachuca, lo que puede ser
                                esencial
                                para comprender y atender las necesidades de estos grupos de compradores en
                                particular.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <!-- PRECIO MERCADO -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                    <div class="flex">
                                        <div class="card-header__title mb-2" style="color: #FF5722; font-size: 24px;">
                                            PRECIO MERCADO</div>
                                        <a class="info-link" data-toggle="tooltip" data-placement="bottom"
                                            title="Información relevante sobre los precios de mercado, relacionada con las propiedades existentes en el mercado.">
                                            Información <i class="material-icons icon-14pt text-success">❗</i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column justify-content-center"
                                    style="margin-bottom: 20px;">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Minimo</strong></td>
                                                    <td class="text-right">$240,600</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Maximo</strong></td>
                                                    <td class="text-right">$28,500,000</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Promedio</strong></td>
                                                    <td class="text-right">$2,968,023</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Mediana</strong></td>
                                                    <td class="text-right">$2,540,000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- M2 TERRENO -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                    <div class="flex">
                                        <div class="card-header__title mb-2" style="color: #FF5722; font-size: 24px;">M2
                                            TERRENO</div>
                                        <a class="info-link" data-toggle="tooltip" data-placement="bottom"
                                            title="Muestra la variabilidad en los tamaños de M2 de terrenos en la muestra, desde los más pequeños hasta los más grandes, proporcionando una visión general de la distribución.">
                                            Información <i class="material-icons icon-14pt text-success">❗</i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column justify-content-center"
                                    style="margin-bottom: 20px;">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Minimo</strong></td>
                                                    <td class="text-right">45</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Maximo</strong></td>
                                                    <td class="text-right">1,609</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Promedio</strong></td>
                                                    <td class="text-right">149</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Mediana</strong></td>
                                                    <td class="text-right">128</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- M2 CONSTRUCCIÓN -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                    <div class="flex">
                                        <div class="card-header__title mb-2" style="color: #FF5722; font-size: 24px;">M2
                                            CONSTRUCCIÓN</div>
                                        <a class="info-link" data-toggle="tooltip" data-placement="bottom"
                                            title="Aquí te presentamos la variedad en el tamaño de M2 de construcciones en nuestra muestra. Desde las más pequeñas hasta las más grandes.">
                                            Información <i class="material-icons icon-14pt text-success">❗</i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column justify-content-center"
                                    style="margin-bottom: 20px;">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Minimo</strong></td>
                                                    <td class="text-right">47</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Maximo</strong></td>
                                                    <td class="text-right">1,100</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Promedio</strong></td>
                                                    <td class="text-right">194</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Mediana</strong></td>
                                                    <td class="text-right">179</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <!-- PRECIO M2 CONSTRUCCIÓN -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                    <div class="flex">
                                        <div class="card-header__title mb-2" style="color: #FF5722; font-size: 24px;">
                                            PRECIO M2 CONSTRUCCIÓN</div>
                                        <a class="info-link" data-toggle="tooltip" data-placement="bottom"
                                            title="Estos valores reflejan la variabilidad en los precios de construcción por metro cuadrado, desde muy bajos hasta muy altos.">
                                            Información <i class="material-icons icon-14pt text-success">❗</i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column justify-content-center"
                                    style="margin-bottom: 20px;">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Minimo</strong></td>
                                                    <td class="text-right">$1,544</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Maximo</strong></td>
                                                    <td class="text-right">$200,600</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Promedio</strong></td>
                                                    <td class="text-right">$15,227</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Mediana</strong></td>
                                                    <td class="text-right">$14,088</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CASA PROMEDIO -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                    <div class="flex">
                                        <div class="card-header__title mb-2" style="color: #FF5722; font-size: 24px;">
                                            CASA PROMEDIO</div>
                                        <a class="info-link" data-toggle="tooltip" data-placement="bottom"
                                            title="Comparación de datos de propiedades, resaltando las estadísticas promedio.">
                                            Información <i class="material-icons icon-14pt text-success">❗</i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column justify-content-center"
                                    style="margin-bottom: 20px;">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Recámaras</strong></td>
                                                    <td class="text-right">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Baños</strong></td>
                                                    <td class="text-right">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Estacionamientos</strong></td>
                                                    <td class="text-right">2.0</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Terreno</strong></td>
                                                    <td class="text-right">149</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>M2 Construido</strong></td>
                                                    <td class="text-right">194</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Precio</strong></td>
                                                    <td class="text-right">$2,968,023</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Precio M2 Construido</strong></td>
                                                    <td class="text-right">$15,227</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- CASA MEDIA -->
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                    <div class="flex">
                                        <div class="card-header__title mb-2" style="color: #FF5722; font-size: 24px;">
                                            CASA MEDIA</div>
                                        <a class="info-link" data-toggle="tooltip" data-placement="bottom"
                                            title="Comparación de datos de propiedades, resaltando las estadísticas medias.">
                                            Información <i class="material-icons icon-14pt text-success">❗</i>
                                        </a>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column justify-content-center"
                                    style="margin-bottom: 20px;">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td><strong>Recámaras</strong></td>
                                                    <td class="text-right">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Baños</strong></td>
                                                    <td class="text-right">3.0</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Estacionamientos</strong></td>
                                                    <td class="text-right">2.0</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Terreno</strong></td>
                                                    <td class="text-right">128</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>M2 Construido</strong></td>
                                                    <td class="text-right">179</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Precio</strong></td>
                                                    <td class="text-right">$2,540,000</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Precio M2 Construido</strong></td>
                                                    <td class="text-right">$14,088</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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

<!-- Chart JS -->
<script src="assets/libs/chart.js/chart.umd.js"></script>
<!-- chartjs init -->
<script src="assets/js/pages/chartjs.init.js"></script>

<script src="assets/js/app.js"></script>

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