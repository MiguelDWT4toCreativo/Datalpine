<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Puebla | DatAlpine</title>
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
                    Análisis de Segmentos y Precios
                </div>
                <p style="font-size: 16px; line-height: 1.5; color: #666;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>
                <!--1. Segmentos -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                1.
                                Segmentos<span class="text-muted fw-normal ms-2"></span></h5>
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
                        <!--
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_distsegmentos_pachuca.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                -->

                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Distribución de segmentos. Conoce la participación en el mercado
                                    inmobiliario por segmentos (S, A, B, C, D, E). Cada sección representa el
                                    porcentaje o proporción en ese segmento específico en relación con el total.
                                </p>
                            </div>
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
                            </div>
                -->
                    </div>

                    <!--1.2 Distribución por M2 construcción por rango -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>1.2 Distribución por M2 construcción por rango</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Segmentos</h5>
                                            <iframe
                                                src="/datalpine/resources/jupyter/graficas/grafica_barras_m2_construido_pachuca.html"
                                                width="100%" height="300" frameborder="0"
                                                style="border: none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">General</h5>
                                            <iframe
                                                src="/datalpine/resources/jupyter/graficas/grafica_pastel_m2_construido_pachuca.html"
                                                width="100%" height="300" frameborder="0"
                                                style="border: none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                -->
                        <!-- Explicación de la gráfica -->
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

                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
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
                    </div>
                </div>
            </div>
            <!-- 2. Precio promedio por M2 totales -->
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
                    <!--
                    <iframe src="/datalpine/resources/jupyter/graficas/g_bar_PrecioPromedioM2_pachuca.html" width="800"
                        height="400" frameborder="0" id="contenido01" style="display: block; margin: 0 auto;"></iframe>
                -->
                
                    <!-- Explicación de la gráfica -->
                    <div
                        style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                        <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                            <strong>Descripción:</strong>
                        </p>
                        <div style="text-align: left;">
                            <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                Este análisis visual presenta la variación en costos por metro cuadrado
                                en distintos segmentos inmobiliarios. Se observa un aumento progresivo
                                de los valores a medida que se avanza de un rango a otro, proporcionando
                                una representación concisa de las tendencias de precios en diferentes
                                dimensiones de propiedades.
                            </p>
                        </div>
                    </div>
                    <div
                        style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                        <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                            <strong>Interpretación:</strong>
                        </p>
                        <div style="text-align: left;">
                            <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                La gráfica presenta los precios promedio por metro cuadrado en diferentes rangos,
                                ofreciendo una perspectiva clara de la variación de costos en el mercado inmobiliario.
                                Desde <strong>$25,298</strong> en el rango de <strong>0-100 metros</strong> cuadrados hasta <strong>$16,755</strong> para propiedades que
                                superan los <strong>300 metros</strong> cuadrados, la visualización destaca la evolución de los precios a
                                medida que aumenta la dimensión de las propiedades.</p>
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

<!-- echarts js -->
<script src="assets/libs/echarts/echarts.min.js"></script>
<!-- echarts init -->
<script src="assets/js/pages/echarts.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>