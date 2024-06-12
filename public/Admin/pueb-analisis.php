<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Puebla | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>
    <link rel="stylesheet" href="/datalpine/public/Admin/assets/css/iframe-styles.css"> <!-- Estilos tables-iframe -->
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
            background-color: #495057;
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
                            <h4 class="mb-sm-0 font-size-18">Puebla</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Estados</a></li>
                                    <li class="breadcrumb-item active">Puebla</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->
                <!-- Análisis de Segmentos y Precios -->
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
                    <h1>Análisis de Segmentos y Precios</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>
                <!--1. Segmentos -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                1. Segmentos<span class="text-muted fw-normal ms-2"></span></h5>
                        </div>
                    </div>
                    <!--1.1 Distribución de segmentos -->
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <?php
                        echo "<li style='font-size: 20px;'>1.1 Distribución de segmentos</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_distsegmentos_puebla.html" width="1000"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->

                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description2')">Descripción</button>
                        </div>
                        <div class="description" id="description2" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                            Distribución de segmentos. Conoce la participación en el mercado
                                    inmobiliario por segmentos (S, A, B, C, D, E). Cada sección representa el
                                    porcentaje o proporción en ese segmento específico en relación con el total.
                            </p>
                        </div>
                        <!--
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    La gráfica revela una distribución variada de propiedades en diferentes
                                    rangos de precios en el mercado inmobiliario. El análisis del comportamiento
                                    de cada segmento y sus subsegmentos revela patrones interesantes en el
                                    mercado inmobiliario.</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li><strong>Segmento E:</strong> El subsegmento <strong>E1</strong> es el
                                        más destacado, mientras que <strong>E2 y E3</strong>
                                        tienen una menor representación, indicando una demanda más limitada en
                                        los rangos de precios más altos.</li>
                                    <li><strong>Segmento B:</strong> Los subsegmentos <strong>B1, B2 y
                                            B3</strong> ofrecen una variedad de
                                        opciones para compradores con presupuestos variados, mostrando una
                                        distribución equilibrada de propiedades en diferentes rangos de precios.
                                    </li>
                                    <li><strong>Segmento D:</strong> Aunque <strong>D1</strong> muestra una
                                        presencia notable, <strong>D2 y D3</strong> tienen una
                                        representación más baja, sugiriendo una demanda relativamente menor en
                                        los rangos de precios más altos.</li>
                                    <li><strong>Segmento C:</strong> Los subsegmentos <strong>C1, C2 y
                                            C3</strong> muestran una distribución
                                        uniforme, reflejando estabilidad en la demanda en la gama media del
                                        mercado.</li>
                                    <li><strong>Segmento A:</strong> <strong>A1, A2 y A3</strong> tienen una
                                        representación similar, indicando una
                                        demanda estable en los rangos de precios más altos..</li>
                                    <li><strong>Segmento S:</strong> Este segmento no está dividido en
                                        subsegmentos, siendo <strong>S1</strong> el
                                        más prominente.</li>
                                </ul>
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Mientras que los segmentos S y B muestran una fuerte presencia en los
                                    extremos de la escala de precios, los segmentos D, C, A y E muestran una
                                    distribución más equilibrada en sus respectivos subsegmentos. Esta
                                    información nos permite entender las tendencias de demanda y adaptar
                                    estrategias de comercialización y desarrollo de propiedades en consecuencia.
                                </p>
                            </div>-->
                    </div>

                    <!--1.2 Distribución por M2 construcción por rango-->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>1.2 Distribución por M2 construcción por rango</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido1')"
                                    value="Segmentos">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido2')"
                                    value="General">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/grafica_m2_Total_puebla.html"
                                    id="contenido1"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/grafica_pastel_m2_Terreno_puebla.html"
                                    id="contenido2" style="display: none;"></iframe>
                            </div>
                        </div> 
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description1')">Descripción</button>
                        </div>
                         <div class="description" id="description1" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                    Distribución por M2 de construcción por rango para las
                                    propiedades
                                    en
                                    diferentes segmentos (S, A, B, C, D, E).
                                    En función de la cantidad de metros cuadrados de construcción,
                                    observa cómo
                                    se agrupan las viviendas según su tamaño disponible permitiendo
                                    una
                                    visión
                                    rápida y clara de cómo se distribuyen y cuales son más
                                    predominantes
                                    en un
                                    cierto mercado inmobiliario.
                            </p>
                            <ul class="text">
                                <li>Si una barra es alta, significa que hay muchas propiedades que tienen un tamaño de construcción dentro de ese rango específico.</li>
                                <li>Si una barra es baja, existen menos propiedades en ese rango en particular.</li>
                            </ul>
                        </div>
                         <!-- 
                            <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                    Distribución por M2 de construcción por rango para las
                                    propiedades
                                    en
                                    diferentes segmentos (S, A, B, C, D, E).
                                    En función de la cantidad de metros cuadrados de construcción,
                                    observa cómo
                                    se agrupan las viviendas según su tamaño disponible permitiendo
                                    una
                                    visión
                                    rápida y clara de cómo se distribuyen y cuales son más
                                    predominantes
                                    en un
                                    cierto mercado inmobiliario.
                                </p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Si una barra es alta, significa que hay muchas propiedades
                                        que
                                        tienen un
                                        tamaño de construcción dentro de ese rango específico.</li>
                                    <li>Si una barra es baja, existen menos propiedades en ese rango
                                        en
                                        particular.</li>
                                </ul>
                            </div>
                        </div>
                         -->
                         <!-- Interpretación -->
                    <div class="interpretation">
                        <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                        <ul class="text">
                        <li><strong>Segmento S:</strong> Posee una concentración de propiedades con un
                                        tamaño de construcción de <strong>0-100m2</strong> y mayor a los <strong>300
                                            m2</strong>.</li>
                                    <li><strong>Segmento A:</strong> Tiene una cantidad significativa de propiedades de
                                        <strong>0-100m2</strong> seguido de <strong>100-150m2</strong>.
                                    </li>
                                    <li><strong>Segmento B:</strong> Destaca <strong>0-100m2</strong>, seguido de mayor
                                        a los 300m2.
                                    </li>
                                    <li><strong>Segmento C:</strong> destaca las mayores a los <strong>300m2</strong>.
                                    </li>
                                    <li><strong>Segmento D:</strong> Posee los valores más cercanos a la media
                                        presupuestal y tiene una distribución equitativa.
                                    </li>
                                    <li><strong>Segmento E:</strong> Debido a su poco valor en el mercado este segmento
                                        tiene una oferta limitada de terrenos.</li>
                        </ul>
                    </div>                      
                    </div>
                </div> <!--Final Segmentos-->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    +
                   
                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                    Distribución M2 de terreno por rango para las propiedades en diferentes segmentos
                                    (S, A, B, C, D, E). En base a los metros cuadrados de terreno, visualiza la
                                    agrupación según su tamaño disponible permitiendo una visión rápida y clara de cómo
                                    se distribuyen los terrenos en términos de tamaño y cuales son más predominantes en
                                    un cierto mercado inmobiliario.
                                    cierto mercado inmobiliario.
                                </p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Si una barra es alta, significa que hay muchas propiedades
                                        que
                                        tienen un
                                        tamaño de construcción dentro de ese rango específico.</li>
                                    <li>Si una barra es baja, existen menos propiedades en ese rango
                                        en
                                        particular.</li>
                                </ul>
                            </div>
                        </div>
                        <!-- Interpretación -->
                    <div class="interpretation">
                        <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <ul class="text">
                                <li><strong>Segmento S:</strong> Predominan los terrenos con <strong>150-200
                                            M2.</strong> Esto significa que en este segmento hay una gran cantidad de
                                        terrenos construidos de tamaño medio-amplio.</li>
                                    <li><strong>Segmento A:</strong> Tiene una concentración de terrenos en el rango de
                                        <strong>100-150 M2.</strong> Esto indica que los terrenos de tamaño amplio son
                                        comunes en este segmento.
                                    </li>
                                    <li><strong>Segmento B, C y D:</strong> Muestran una distribución más acentuada
                                        entre los terrenos con <strong>100-150 M2</strong>de tamaño. Esto implica que
                                        este segmento es más adecuado para aquellos que buscan terrenos de tamaño medio.
                                    </li>
                                    <li><strong>Segmento E: </strong> Tiene mayor terrenos disponibles en todos los
                                        rangos. Esto podría indicar que este segmento tiene una oferta mayor de
                                        terrenos.
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- 4. Precio promedio por M2 totales -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                2. Precio promedio por M2 totales<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_PrecioPromedioM2_puebla.html"
                            width="800" height="520" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>


                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description3')">Descripción</button>
                        </div>
                        <div class="description" id="description3" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                    Este análisis visual presenta la variación en costos por metro cuadrado
                                    en distintos segmentos inmobiliarios. Se observa un aumento progresivo
                                    de los valores a medida que se avanza de un rango a otro, proporcionando
                                    una representación concisa de las tendencias de precios en diferentes
                                    dimensiones de propiedades.
                            </p>                            
                        </div>
                       
                        <!-- Interpretación -->
                        <div class="interpretation">
                            <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <p class="text">
                            La gráfica presenta los precios promedio por metro cuadrado en diferentes rangos,
                                    ofreciendo una perspectiva clara de la variación de costos en el mercado
                                    inmobiliario.
                                    Desde <strong>$25,298</strong> en el rango de <strong>0-100 metros</strong>
                                    cuadrados
                                    hasta <strong>$16,755</strong> para propiedades que
                                    superan los <strong>300 metros</strong> cuadrados, la visualización destaca la
                                    evolución
                                    de los precios a
                                    medida que aumenta la dimensión de las propiedades.</p>
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

<!-- echarts js -->
<script src="assets/libs/echarts/echarts.min.js"></script>
<!-- echarts init -->
<script src="assets/js/pages/echarts.init.js"></script>

<script src="assets/js/app.js"></script>
<script>
        function injectCSSIntoIframe(iframe) {
            var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
            var link = iframeDocument.createElement('link');
            link.rel = 'stylesheet';
            link.type = 'text/css';
            link.href = '/datalpine/public/Admin/assets/css/iframe-styles.css'; // Ruta al archivo CSS
            iframeDocument.head.appendChild(link);
        }

        function injectCSSIntoAllIframes() {
            var iframes = document.querySelectorAll('iframe.table-iframe');
            iframes.forEach(function(iframe) {
                iframe.onload = function() {
                    injectCSSIntoIframe(iframe);
                };
                // Si el iframe ya está cargado, inyecta el CSS inmediatamente
                if (iframe.contentDocument.readyState === 'complete') {
                    injectCSSIntoIframe(iframe);
                }
            });
        }

        // Inyectar CSS a todos los iframes al cargar la página
        window.onload = injectCSSIntoAllIframes;
    </script>
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