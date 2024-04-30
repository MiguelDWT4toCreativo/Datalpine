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

    <?php include 'layouts/head-style.php'; ?>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
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
                    Dinámicas de Venta y Financiamiento
                </div>
                <p style="font-size: 16px; line-height: 1.5; color: #666;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>
                <!--1. Tiempo estimado de venta -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                1.
                                Tiempo estimado de venta<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <!-- 1.1 Tiempo estimado de venta -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>1.1 Tiempo estimado de venta</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica PENDIENTE-->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Segmentos</h5>
                                        <iframe
                                            src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_seg_tulgo.html"
                                            width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">General</h5>
                                        <iframe
                                            src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_total_tulgo.html"
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
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Distribución de las viviendas en función de la cantidad de meses que han estado en
                                    existencia para venta por segmentos (S, A, B, C, D, E). De acuerdo al tiempo de
                                    venta estimado se puede identificar que segmentos tienen una demanda más alta y
                                    tienden a venderse un poco más rápido y cuales requieren un poco más de tiempo para
                                    encontrar compradores.</p>
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
                    </div>
                </div>
                <!--2. Créditos -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                2.
                                Créditos<span class="text-muted fw-normal ms-2"></span></h5>
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
                        <iframe src="/datalpine/resources/jupyter/graficas/g_pie_creditosgenero_tulancingo.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                    </div> 

                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Distribución de créditos por género. Distingue la diferencia en la porporción de
                                    prestamos entre hombres y mujeres en el mercado inmobiliario, esto puede ser útil
                                    para comprender las tendencias de financiamiento y su participación en terminos de
                                    acesso a créditos por grupo de género.</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    <li>Si la sección de hombres es más grande, significa que un mayor porcentaje de
                                        préstamos se otorga a hombres.</li>
                                    <li>Si la sección de mujeres es más grande, indica que un mayor porcentaje de
                                        préstamos se otorga a mujeres.</li>
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
                        </div>
                        <!-- 2.2. Destino del crédito-->
                        <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                            <?php
                            echo "<li style='font-size: 20px;'>2.2. Destino del crédito</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <!-- Link de la gráfica PENDIENTE-->
                            <!--
                            <iframe src="/datalpine/resources/jupyter/graficas/g_bar_creditosdestino_pachuca.html"
                                width="800" height="400" frameborder="0" id="contenido01"
                                style="display: block; margin: 0 auto;"></iframe>
                        </div> 
                -->

                            <!-- Explicación de la gráfica -->
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Descripción:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
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
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                        <li>Si una sección es grande, significa que una parte significativa de
                                            los
                                            créditos
                                            se utiliza para dicho destino.</li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Interpretación:</strong>
                                <div style="text-align: left;">
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
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
                    </div>
                </div>
                <!-- Mercado salario por persona -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Mercado salario por persona<span class="text-muted fw-normal ms-2"></span>
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
                                            src="/datalpine/resources/jupyter/graficas/g_bar_mercadosalarial_persona_pachuca.html"
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
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">Esta
                                    Grafica mercado salario por persona. Dicha tabla se clasifica en rangos de valores
                                    que simbolizan diversos estratos en el mercado salarial promedio por persona. Esta
                                    disposición nos facilita la comprensión efectiva de la posición que ocupa un
                                    elemento específico dentro del mercado laboral.</p>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">Esta
                                    clasificación se basa en rangos de valores que representan diferentes niveles en el
                                    mercado salarial promedio por persona. Lo que nos permite entender y comunicar de
                                    manera
                                    efectiva dónde se encuentra un determinado elemento en el mercado.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Mercado salario por pareja -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Mercado salario por pareja<span class="text-muted fw-normal ms-2"></span>
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
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Tabla mercado salario por pareja. Esta tabla se clasifica en rangos de valores que
                                    simbolizan diversos estratos en el mercado salarial promedio por pareja. Esta
                                    disposición nos facilita la comprensión efectiva de la posición que ocupa un
                                    elemento específico dentro del mercado laboral.</p>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">Esta
                                    clasificación se basa en rangos de valores que representan diferentes niveles en el
                                    mercado salarial promedio por pareja. Lo que nos permite entender y comunicar de
                                    manera
                                    efectiva dónde se encuentra un determinado elemento en el mercado.</p>
                            </div>
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
                                Volumen del mercado salarial de parejas<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_bar_volmercadosalarial_parejas_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
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
                                    Representación visual del volumen total de salarios por pareja anuales, segmentados
                                    por categorías. En esencia, ilustra la distribución del ingreso neto ganado entre
                                    diversas profesiones y ocupaciones. A través de un análisis visual, somos capaces de
                                    discernir cómo se distribuye el volumen salarial en distintos estratos de ingresos.
                                    Esto nos brinda una perspectiva integral de la estructura salarial en nuestro
                                    mercado laboral.</p>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">Esta gráfica
                                    es una representación visual del volumen total de salarios por pareja
                                    anuales, segmentados por categorías. En otras palabras, nos muestra cómo se divide
                                    el
                                    dinero ganado neto entre diferentes tipos de trabajos y ocupaciones. De un vistazo,
                                    podemos comprender cómo se distribuye este volumen salarial en diferentes niveles de
                                    ingresos, lo que proporciona una visión completa de la estructura salarial en
                                    nuestro
                                    mercado laboral.</p>
                            </div>
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
                                Profesiones<span class="text-muted fw-normal ms-2"></span></h5>
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
                        <iframe src="/datalpine/resources/jupyter/tablas/tabla_profsalarioindv_pachuca.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                -->
                        <!-- Explicación de la gráfica -->

                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Explora nuestra plataforma para conocer las profesiones que lideran los ingresos y
                                    aquellas que presentan retos económicos. Obtén información detallada sobre los
                                    salarios, tendencias y perspectivas profesionales, brindándote una visión clara de
                                    las carreras más y menos lucrativas en el mercado laboral actual.
                                </p>
                            </div>
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

</body>

</html>