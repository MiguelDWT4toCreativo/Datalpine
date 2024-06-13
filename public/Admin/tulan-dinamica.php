<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Tulancingo | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />
            <link rel="stylesheet" href="/datalpine/public/Admin/assets/css/iframe-styles.css"> <!-- Estilos tables-iframe -->


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
                            <!--<h4 class="mb-sm-0 font-size-18">Tulancingo</h4>-->
                            <div class="page-title-right">
                                <ol class="breadcrumb mb-sm-0 font-size-18">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hidalgo</a></li>
                                    <li class="breadcrumb-item active">Tulancingo</li>
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
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

                <!--1. Tiempo estimado de venta -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px; padding: 12px; margin-bottom: 20px;">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <div class="col-md-6">
                            <div class="subtitle-container">
                                <h5 class="card-title subtitle">
                                    1.
                                    Tiempo estimado de venta<span class="text-muted fw-normal ms-2"></span>
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
                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoXventa_seg_tulgo.html"
                                    id="contenido1"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoXventa_total_tulgo.html"
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
                                encontrar compradores.</p>
                        </div>
                    </div>
                    <!-- Interpretación -->
                    <div class="interpretation">
                        <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                        <ul class="text">
                            <li><strong>Segmento S:</strong> Su distribución es sesgada hacia la derecha puesto
                                que posee una
                                alta concentración de propiedades con una <strong>antigüedad</strong> de oferta
                                entre los <strong>7
                                    meses</strong>. Esto indica que las viviendas en estos segmentos requieren
                                más tiempo
                                para encontrar comprador en comparación a otros segmentos.
                            </li>
                            <li><strong>Segmento A y B:</strong> Tiene una cantidad significativa de propiedades
                                que duran en
                                disponibilidad alrededor de <strong>7 y 11 meses</strong>.</li>
                            <li><strong>Segmento C y D:</strong> Poseen una distribución sesgada hacia la
                                izquierda con una
                                concentración de disponibilidad que ronda los <strong>7 meses de
                                    antigüedad</strong>.</li>
                            <li><strong>Segmento E y B:</strong> Tiene una cantidad significativa de propiedades
                                que duran en
                                disponibilidad alrededor de <strong>7 meses</strong>.</li>
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
                        <iframe src="/datalpine/resources/jupyter/graficas/g_pie_creditosXgenero_tulancingo.html"
                            width="600" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                    </div>

                    <!-- Explicación de la gráfica -->
                    <div class="mostrar-container">
                        <button class="mostrar" onclick="toggleDescription('description1')">Descripción</button>
                    </div>

                    <!-- Descripción -->
                    <div class="description" id="description1" style="display: none;">
                        <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                        <p class="text">
                            Distribución de créditos por género. Distingue la diferencia en la porporción de
                            prestamos entre hombres y mujeres en el mercado inmobiliario, esto puede ser útil
                            para comprender las tendencias de financiamiento y su participación en terminos de
                            acesso a créditos por grupo de género.</p>
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
                                mercado inmobiliario.
                                Los hombres tienen el <strong>56.6%</strong> de los créditos.
                            </li>
                            <li>Las mujeres tienen el <strong>43.4%</strong> de los créditos. Esto indica que un
                                <strong>menor porcentaje
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
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_creditosXdestino_tulancingo.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>


                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description2')">Descripción</button>
                        </div>

                        <!-- Descripción -->
                        <div class="description" id="description2" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Número de
                                créditos por tipo de vivienda. Descubre como se distribuyen los créditos
                                de
                                acuerdo
                                al
                                tipo de vivienda: nueva, con mejoras, usada y otros programas. Cada
                                sección
                                del
                                gráfico
                                representa la proporción del número de créditos que se destina a un
                                propósito
                                específico
                                en relación con el total de créditos otorgados para viviendas. Explora
                                hacia
                                donde
                                se
                                dirige el dinero prestado y comprende las preferencias y necesidades de
                                las
                                personas
                                que
                                invierten en este sector inmobiliario.</p>
                            <ul
                                style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                <li>Si una sección es grande, significa que una parte significativa de
                                    los
                                    créditos
                                    se utiliza para dicho destino.</li>
                            </ul>
                        </div>
                        <!-- Interpretación -->
                        <div class="interpretation">
                            <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <ul class="text">
                                <li>La mayoría de los créditos se destinan a viviendas nuevas
                                    <strong>(143)</strong> y viviendas
                                    usadas <strong>(290)</strong>. Esto se puede observar en la barra más alta
                                    en el gráfico para
                                    viviendas nuevas.
                                </li>
                                <li>Los créditos para mejoramientos son significativamente menores
                                    <strong>(69)</strong>.
                                </li>
                                <li>Otros programas reciben la menor cantidad de créditos <strong>(35)</strong>.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Mercado salario por persona -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px; padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="subtitle-container">
                            <h5 class="card-title subtitle">
                                3. Mercado salario por persona<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                    
                    <!--
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_mercadosalarial_persona_pachuca.html" width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                    -->                        
                
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description3')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description3" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Esta
                                Grafica mercado salario por persona. Dicha tabla se clasifica en rangos de
                                valores
                                que simbolizan diversos estratos en el mercado salarial promedio por persona.
                                Esta
                                disposición nos facilita la comprensión efectiva de la posición que ocupa un
                                elemento específico dentro del mercado laboral.</p>
                        </div>
                    </div>
                    <!-- Interpretación -->
                    <div class="interpretation">
                        <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                        <p class="text">Esta
                            clasificación se basa en rangos de valores que representan diferentes niveles en
                            el
                            mercado salarial promedio por persona. Lo que nos permite entender y comunicar
                            de
                            manera
                            efectiva dónde se encuentra un determinado elemento en el mercado.</p>
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
                        <!--
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Segmentos</h5>
                                        <iframe
                                            src="/datalpine/resources/jupyter/graficas/g_bar_mercadosalarial_parejas_pachuca.html"
                                            width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Rango en $</h5>
                                        <iframe src="/datalpine/resources/jupyter/graficas/mercadosalarial.png"
                                            width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                -->                        
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description4')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description4" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                            Tabla mercado salario por pareja. Esta tabla se clasifica en rangos de valores
                                    que
                                    simbolizan diversos estratos en el mercado salarial promedio por pareja. Esta
                                    disposición nos facilita la comprensión efectiva de la posición que ocupa un
                                    elemento específico dentro del mercado laboral.</p>
                        </div>                        
                       
                        <!-- Interpretación -->
                        <div class="interpretation">
                            <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <p class="text">Esta
                                    clasificación se basa en rangos de valores que representan diferentes niveles en
                                    el
                                    mercado salarial promedio por pareja. Lo que nos permite entender y comunicar de
                                    manera
                                    efectiva dónde se encuentra un determinado elemento en el mercado.</p>
                        </div>
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
                        <!-- Link de la gráfica PENDIENTE-->
                        
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/.html"
                            width="1000" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                
                <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description6')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description6" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                            Representación visual del volumen total de salarios por pareja anuales,
                                    segmentados
                                    por categorías. En esencia, ilustra la distribución del ingreso neto ganado
                                    entre
                                    diversas profesiones y ocupaciones. A través de un análisis visual, somos
                                    capaces de
                                    discernir cómo se distribuye el volumen salarial en distintos estratos de
                                    ingresos.
                                    Esto nos brinda una perspectiva integral de la estructura salarial en nuestro
                                    mercado laboral.</p>
                        </div>   
                        <!-- Interpretación -->
                        <div class="interpretation">
                            <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <p class="text">Esta
                                    gráfica
                                    es una representación visual del volumen total de salarios por pareja
                                    anuales, segmentados por categorías. En otras palabras, nos muestra cómo se
                                    divide
                                    el
                                    dinero ganado neto entre diferentes tipos de trabajos y ocupaciones. De un
                                    vistazo,
                                    podemos comprender cómo se distribuye este volumen salarial en diferentes
                                    niveles de
                                    ingresos, lo que proporciona una visión completa de la estructura salarial en
                                    nuestro
                                    mercado laboral.</p>
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
                        echo "<li style='font-size: 20px;'>Salario Individual</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--                    
                            <div class="tables-plotly">
                                <iframe class="table-iframe" src="/datalpine/resources/jupyter/tablas/tabla_profsalarioindv_pachuca.html" frameborder="0" id="contenido01" style="display: block; margin: 0 auto;"></iframe>
                            </div>
                        -->
                        <!-- Explicación de la gráfica -->
                            <!-- Interpretación -->
                            <div class="interpretation">
                                <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                                <p class="text">
                                Explora nuestra plataforma para conocer las profesiones que lideran los ingresos
                                    y
                                    aquellas que presentan retos económicos. Obtén información detallada sobre los
                                    salarios, tendencias y perspectivas profesionales, brindándote una visión clara
                                    de
                                    las carreras más y menos lucrativas en el mercado laboral actual.</p>
                            </div>                       
                    </div>
                </div>
                <!-- end row -->
            </div> <!-- container-fluid -->
        </div>
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

<!-- App js -->
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