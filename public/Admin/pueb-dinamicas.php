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
                            <!--<h4 class="mb-sm-0 font-size-18">Puebla</h4>-->
                            <div class="page-title-right">
                                <ol class="breadcrumb mb-sm-0 font-size-18">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Puebla</a></li>
                                    <li class="breadcrumb-item active">Puebla</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- 4. Dinámicas de Venta y Financiamiento -->
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
                    <h1>Dinámicas de Venta y Financiamiento</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre las ventas y financiamineto de Puebla, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>
              
                <!--1. Tiempo estimado de venta -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px; padding: 12px; margin-bottom: 20px;">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <div class="col-md-6">
                            <div class="subtitle-container">
                                <h5 class="card-title subtitle">
                                    1. Tiempo estimado de venta<span class="text-muted fw-normal ms-2"></span>
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
                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoXventa_seg_puebla.html"
                                    id="contenido1"></iframe>
                                <iframe width="700" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoXXventa_total_puebla.html"
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
                            <p class="text">
                            Distribución de las viviendas en función de la cantidad de meses que han estado en
                                    existencia para venta por segmentos (S, A, B, C, D, E). De acuerdo al tiempo de
                                    venta estimado se puede identificar que segmentos tienen una demanda más alta y
                                    tienden a venderse un poco más rápido y cuales requieren un poco más de tiempo para
                                    encontrar compradores.
                            </p>
                        </div>
                    </div>
                    <!-- Interpretación -->
                    <div class="interpretation">
                        <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                        <ul class="text">
                                <li><strong>Segmento S:</strong> Su distribución es sesgada hacia la derecha puesto
                                        que posee una
                                        alta concentración de propiedades con una <strong>antigüedad</strong> de oferta
                                        entre los <strong>11 y 12
                                            meses</strong>. Esto indica que las viviendas en estos segmentos requieren
                                        más tiempo
                                        para encontrar comprador en comparación a otros segmentos.</li>
                                    <li><strong>Segmento A y B:</strong> Tiene una cantidad significativa de propiedades
                                        que duran en
                                        disponibilidad alrededor de <strong>7 y 11 meses</strong>.</li>
                                    <li><strong>Segmento C y D:</strong> Poseen una distribución sesgada hacia la
                                        izquierda con una
                                        concentración de disponibilidad que ronda los <strong>8 meses de
                                            antigüedad</strong>.</li>
                                    <li><strong>Segmento E:</strong> Debido a su poco valor en el mercado este segmento
                                        tiene una oferta
                                        limitada de terrenos.</li>
                        </ul>
                    </div>
                </div>
                <!--2. Créditos -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px; padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="subtitle-container">
                            <h5 class="card-title subtitle">
                                2. Créditos<span class="text-muted fw-normal ms-2"></span></h5>
                        </div>
                    </div>
                    <!-- 2.1. Distribución de créditos por género -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>2.1. Distribución de créditos por género</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_pie_creditosXgenero_puebla.html"
                            width="600" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                    </div>

                    <!-- Explicación de la gráfica -->
                    <div class="mostrar-container">
                        <button class="mostrar" onclick="toggleDescription('description2')">Descripción</button>
                    </div>

                    <!-- Descripción -->
                    <div class="description" id="description2" style="display: none;">
                        <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                        <p class="text">
                        Distribución de créditos por género. Distingue la diferencia en la porporción de
                                prestamos entre hombres y mujeres en el mercado inmobiliario, esto puede ser útil
                                para comprender las tendencias de financiamiento y su participación en terminos de
                                acesso a créditos por grupo de género.
                        </p>
                        <ul class="text">
                            <li>Si la sección de hombres es más grande, significa que un mayor porcentaje de
                                    préstamos se otorga a hombres.</li>
                                <li>Si la sección de mujeres es más grande, indica que un mayor porcentaje de
                                    préstamos se otorga a mujeres.</li>                            
                        </ul>
                    </div>

                    <!-- Interpretación -->
                    <div class="interpretation">
                        <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                        <ul class="text">
                            <li>Un <strong>mayor porcentaje de préstamos se otorga a hombres</strong> en el
                                    mercado
                                    inmobiliario. Los hombres tienen el <strong>55.3%</strong> de los créditos.
                                </li>
                                <li>Las mujeres tienen el <strong>44.7%</strong> de los créditos. Esto indica
                                    que un
                                    <strong>menor
                                        porcentaje
                                        de préstamos se otorga a mujeres</strong>.
                                </li>
                        </ul>
                    </div>
                    <!-- 2.2. Destino del crédito-->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>2.2. Destino del crédito</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_creditosXdestino_puebla.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description3')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description3" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                            Número de créditos por tipo de vivienda. Descubre como se distribuyen los
                                créditos de acuerdo al tipo de vivienda: nueva, con mejoras, usada y otros
                                programas. Cada sección del gráfico representa la proporción del número de
                                créditos que se destina a un propósito específico en relación con el total de
                                créditos otorgados para viviendas. Explora hacia donde se dirige el dinero
                                prestado y comprende las preferencias y necesidades de las personas que
                                invierten en este sector inmobiliario.
                            </p>
                            <ul style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                <li>Si una sección es grande, significa que una parte significativa de los
                                    créditos se utiliza para dicho destino.</li>
                            </ul>
                        </div>
                        <!-- Interpretación -->
                        <div class="interpretation">
                            <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <ul class="text">
                            <li>La mayoría de los créditos se destinan a <strong>viviendas nuevas</strong>
                                    (2075) y <strong>viviendas
                                        usadas</strong> (1985). Esto se puede observar en la barra más alta en
                                    el gráfico
                                    para viviendas nuevas.</li>
                                <li>Los créditos para <strong>mejoramientos</strong> son significativamente
                                    menores (688).</li>
                                <li><strong>Otros programas</strong> reciben la menor cantidad de créditos
                                    (421).</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Mercado salario por persona -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                3. Mercado salario por persona<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_mercadosalarial_Xpersona_puebla.html"
                            width="1000" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                    </div>
                     <!-- Explicación de la gráfica -->
                     <div class="mostrar-container">
                        <button class="mostrar" onclick="toggleDescription('description5')">Descripción</button>
                    </div>
                        <!-- Descripción -->
                    <div class="description" id="description5" style="display: none;">
                        <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                        <p class="text">
                        Grafica
                            mercado salario por persona. Dicha tabla se clasifica en rangos de valores que
                                simbolizan diversos estratos en el mercado salarial promedio por persona. Esta
                                disposición nos facilita la comprensión efectiva de la posición que ocupa un
                                elemento específico dentro del mercado laboral.</p>
                    </div>
                    <!-- Interpretación -->
                    <div class="interpretation">
                        <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                        <ul class="text">
                            <li>La tabla proporciona una clasificación del mercado salarial por persona,
                                    dividida en diferentes categorías desde “G” hasta “S”. Cada categoría representa
                                    un rango de salario específico.</li>
                                <li>La mayoría de las personas se encuentran en la <strong>categoría “G”
                                        (46.55%)</strong>, que representa salarios entre <strong>$10 y $4,999
                                        pesos</strong>, seguida por la <strong>categoría “F”</strong>,
                                    que incluye salarios entre <strong>$5,000 y $7,999 pesos</strong>, y en
                                    tercer lugar la <strong>categoría “F1” (14.41%)</strong> que representa
                                    salarios que ronda los <strong>$8000 a $11,999 pesos</strong> indicando que una
                                    gran proporción de individuos tiene ingresos dentro de esos rangos.
                                    A partir de la <stron>clasificación ‘E’</strong>, los
                                        <strong>porcentajes</strong> disminuyen significativamente.
                                        Las demás categorías tienen una menor proporción de personas.
                                </li>
                                <li>Esta tabla nos permite comprender de manera efectiva cómo se distribuyen los
                                    salarios en el mercado laboral y dónde se encuentra un elemento específico
                                    dentro de este mercado. Es una herramienta útil para analizar la estructura
                                    salarial de la población.</li>
                        </ul>
                    </div>
                </div>
                <!-- Mercado salario por pareja -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                4. Mercado salario por pareja<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_mercadoXsalarial_parejas_puebla.html"
                            width="1000" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                    </div>                    
                    <!-- Explicación de la gráfica -->
                    <div class="mostrar-container">
                        <button class="mostrar" onclick="toggleDescription('descriptio6')">Descripción</button>
                    </div>
                        <!-- Descripción -->
                    <div class="description" id="descriptio6" style="display: none;">
                        <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                        <p class="text">
                        Tabla
                                mercado salario por pareja. Esta tabla se clasifica en rangos de valores que
                                simbolizan diversos estratos en el mercado salarial promedio por pareja. Esta
                                disposición nos facilita la comprensión efectiva de la posición que ocupa un
                                elemento específico dentro del mercado laboral.</p>
                    </div>
                    <!-- Interpretación -->
                    <div class="interpretation">
                        <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                        <ul class="text">
                        <li>La tabla proporciona una clasificación del mercado salarial por pareja,
                                    dividida en diferentes categorías desde “G” hasta “S”. Cada categoría
                                    representa un rango de salario específico y el porcentaje de parejas que
                                    caen dentro de ese rango.</li>
                                <li>La mayoría de las personas se encuentran en la <strong>categoría “F1”
                                        (28.83%)</strong>, que
                                    representa salarios entre <strong>$8000 y $11,999 pesos</strong>, seguida por la
                                    <strong>categoría
                                        “F”</strong>, que incluye salarios entre <strong>$5,000 y $7,999
                                        pesos</strong>, y en tercer lugar la
                                    categoría <strong>“G”(16.82%)</strong> que incluye a parejas que ganan entre
                                    <strong>$10 y $4,999
                                        pesos</strong>. En cuarto lugar tenemos la <strong>categoría
                                        “E”(10.81%)</strong>, que representa a
                                    parejas con salarios entre <strong>$12000 y $15999</strong> lo que indica la
                                    proporción de
                                    parejas con mayor participación del total dentro de los rangos salariales. A
                                    partir de la <strong>clasificación ‘E’</strong>, los porcentajes disminuyen
                                    significativamente. Las demás categorías tienen una menor proporción de
                                    personas a medida que los rangos salariales aumentan.
                                </li>
                                <li>Esta tabla nos permite comprender de manera efectiva cómo se distribuyen los
                                    salarios en el mercado laboral y dónde se encuentra un elemento específico
                                    dentro de este mercado. Es una herramienta útil para analizar la estructura
                                    salarial de la población.</li>
                        </ul>
                    </div>
                </div>
                <!-- Volumen del mercado salarial de parejas -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                5. Volumen del mercado salarial de parejas<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_volmercadoXXsalarial_parejas_puebla.html"
                            width="1000" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                    
                        <!-- Explicación de la gráfica -->
                    <div class="mostrar-container">
                        <button class="mostrar" onclick="toggleDescription('description7')">Descripción</button>
                    </div>
                        <!-- Descripción -->
                    <div class="description" id="description7" style="display: none;">
                        <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                        <p class="text">
                        Representación visual del volumen total de salarios por pareja anuales, segmentados
                                    por categorías. En esencia, ilustra la distribución del ingreso neto ganado entre
                                    diversas profesiones y ocupaciones. A través de un análisis visual, somos capaces de
                                    discernir cómo se distribuye el volumen salarial en distintos estratos de ingresos.
                                    Esto nos brinda una perspectiva integral de la estructura salarial en nuestro
                                    mercado laboral.</p>
                    </div>
                    <!-- Interpretación -->
                    <div class="interpretation">
                        <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <ul class="text">
                                <li>Las barras están coloreadas para representar visualmente cada rango de
                                        ingreso; hay una barra verde, una amarilla y café que son prominentes
                                        porque representan los volúmenes salariales netos más altos. Los valores
                                        exactos del volumen salarial están indicados en cada barra para
                                        proporcionar detalles precisos.</li>
                                    <li>Se observa que la categoría color naranja de ingresos de
                                        <strong>$5000-$7999(F)</strong> tiene el
                                        volumen salarial más alto, seguido por la categoría de <strong>$8000-$11999
                                            (F1)</strong>. Las
                                        categorías con ingresos superiores a <strong>30K(C)</strong> en adelante tienen
                                        un volumen
                                        salarial significativamente menor.
                                    </li>
                                    <li>Este gráfico nos permite comprender de manera efectiva cómo se
                                        distribuyen los salarios en el mercado laboral y dónde se encuentra un
                                        elemento específico dentro de este mercado. Es una herramienta útil para
                                        analizar la estructura salarial de la población.
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Profesiones -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                6. Profesiones<span class="text-muted fw-normal ms-2"></span></h5>
                        </div>
                    </div>
                    <!-- Salario Individual -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>6.1 Salario Individual</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <div class="tables-plotly">
                            <iframe class="table-iframe"  src="/datalpine/resources/jupyter/tablas/tabla_profsalarioindv_puebla.html" width="800"
                                height="400" frameborder="0" id="contenido01" onload="resizeIframe(this)"
                                style="display: block;margin: 0px auto;min-height: 410px;"></iframe>
                                <script>
                                    function resizeIframe(iframe) {
                                        iframe.contentWindow.document.body.style.margin = '0'; // Elimina el margen del cuerpo del documento en el iframe
                                        iframe.style.height = iframe.contentWindow.document.documentElement.scrollHeight + 'px'; // Ajusta la altura del iframe según el contenido
                                    }
                                    // Escucha el evento 'resize' del contenido del iframe
                                    window.addEventListener('message', function(event) {
                                        if (event.data && event.data.type === 'resizeIframe') {
                                            var iframe = document.getElementById('contenido01');
                                            iframe.style.height = event.data.height + 'px';
                                        }
                                    }, false);
                                </script>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <!-- Interpretación -->
                        <div class="interpretation">
                            <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <p class="text">
                                    Explora nuestra plataforma para conocer las profesiones que lideran los ingresos y
                                    aquellas que presentan retos económicos. Obtén información detallada sobre los
                                    salarios, tendencias y perspectivas profesionales, brindándote una visión clara de
                                    las carreras más y menos lucrativas en el mercado laboral actual.
                            </p>
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

<!-- google maps api -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyCtSAR45TFgZjOs4nBFFZnII-6mMHLfSYI"></script>

<!-- Gmaps file -->
<script src="assets/libs/gmaps/gmaps.min.js"></script>

<!-- demo codes -->
<script src="assets/js/pages/gmaps.init.js"></script>

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