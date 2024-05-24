<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Pachuca | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>

    <!-- glightbox css -->
    <link rel="stylesheet" href="assets/libs/glightbox/css/glightbox.min.css">

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
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                2.
                                Tiempo estimado de venta<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <!-- 1.1 Tiempo estimado de venta -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>2.1 Tiempo estimado de venta</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Segmentos</h5>
                                        <iframe
                                            src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_seg_pachuca.html"
                                            width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">General</h5>
                                        <iframe
                                            src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_total_pachuca.html"
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
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Distribución
                                    de las viviendas en función de la cantidad de meses que han estado en
                                    existencia
                                    para venta por segmentos (S, A, B, C, D, E). De acuerdo al tiempo de
                                    venta
                                    estimado
                                    se puede identificar que segmentos tienen una demanda más alta y tienden
                                    a
                                    venderse
                                    un poco más rápido y cuales requieren un poco más de tiempo para
                                    encontrar
                                    compradores.</p>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    La mayoría de las viviendas en <strong>todos los segmentos</strong> tienden
                                    a tener una
                                    antigüedad <strong>mayor a los 13 meses</strong> antes de ser
                                    <strong>vendidas</strong>. Esto indica que
                                    las
                                    viviendas para dicho mercado requieren de más tiempo para encontrar
                                    comprador.
                                </p>
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
                                3.
                                Créditos<span class="text-muted fw-normal ms-2"></span></h5>
                        </div>
                    </div>
                    <!-- 2.1. Distribución de créditos por género -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>3.1. Distribución de créditos por género</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_pie_creditosgenero_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                    </div> <!-- Explicación de la gráfica -->
                    <div
                        style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                        <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                            <strong>Descripción:</strong>
                        </p>
                        <div style="text-align: left;">
                            <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                Distribución de créditos por género. Distingue la diferencia en la porporción de
                                prestamos entre hombres y mujeres en el mercado inmobiliario, esto puede ser
                                útil para comprender las tendencias de financiamiento y su participación en
                                terminos de acesso a créditos por grupo de género.</p>
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
                                    mercado
                                    inmobiliario. Los hombres tienen el <strong>54.4%</strong> de los créditos.
                                </li>
                                <li>Las mujeres tienen el <strong>45.6%</strong> de los créditos. Esto indica
                                    que un
                                    <strong>menor
                                        porcentaje
                                        de préstamos se otorga a mujeres</strong>.
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- 2.2. Destino del crédito-->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>3.2. Destino del crédito</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_creditosdestino_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                    </div> <!-- Explicación de la gráfica -->
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
                                <li>La tabla proporciona una clasificación del mercado salarial por persona,
                                    dividida en diferentes categorías desde “G” hasta “S”. Cada categoría
                                    representa un rango de salario específico. </li>
                                <li>La mayoría de las personas se encuentran en la <strong>categoría “F”
                                        (30.03%)</strong>, que representa salarios entre <strong>$5000 y $7,999
                                        pesos</strong>, seguida por la <strong>categoría “F1”(25.56%)</strong>,
                                    que incluye salarios entre <strong>$8,000 y $11,999 pesos</strong>, y en
                                    tercer lugar la <strong>categoría “G” (23.32%)</strong> que representa
                                    salarios que ronda los <strong>$10 y $4,999 pesos</strong> indicando que una
                                    gran proporción de individuos tiene ingresos dentro de esos rangos.
                                    <strong>A partir</strong> de la <strong>clasificación “E” y”E1”</strong>,
                                    los <strong>porcentajes disminuyen</strong> significativamente. Las demás
                                    categorías tienen una menor proporción de personas.
                                </li>
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
                                Mercado salario por persona<span class="text-muted fw-normal ms-2"></span>
                            </h5>
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
                    </div> <!-- Explicación de la gráfica -->
                    <div
                        style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                        <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                            <strong>Descripción:</strong>
                        </p>
                        <div style="text-align: left;">
                            <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">Esta
                                clasificación se basa en rangos de valores que representan diferentes
                                niveles en
                                el
                                mercado salarial promedio por persona. Lo que nos permite entender y
                                comunicar
                                de manera
                                efectiva dónde se encuentra un determinado elemento en el mercado.</p>
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
                                <li>La tabla proporciona una clasificación del mercado salarial por persona,
                                    dividida en diferentes categorías desde “G” hasta “S”. Cada categoría
                                    representa un rango de salario específico. </li>
                                <li>La mayoría de las personas se encuentran en la <strong>categoría “F”
                                        (30.03%)</strong>, que representa salarios entre <strong>$5000 y $7,999
                                        pesos</strong>, seguida por la <strong>categoría “F1”(25.56%)</strong>,
                                    que incluye salarios entre <strong>$8,000 y $11,999 pesos</strong>, y en
                                    tercer lugar la <strong>categoría “G” (23.32%)</strong> que representa
                                    salarios que ronda los <strong>$10 y $4,999 pesos</strong> indicando que una
                                    gran proporción de individuos tiene ingresos dentro de esos rangos.
                                    <strong>A partir</strong> de la <strong>clasificación “E” y”E1”</strong>,
                                    los <strong>porcentajes disminuyen</strong> significativamente. Las demás
                                    categorías tienen una menor proporción de personas.
                                </li>
                            </ul>
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
                        <!-- Link de la gráfica -->
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
                    </div> <!-- Explicación de la gráfica -->
                    <div
                        style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                        <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                            <strong>Descripción:</strong>
                        </p>
                        <div style="text-align: left;">
                            <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">Esta
                                clasificación se basa en rangos de valores que representan diferentes
                                niveles en
                                el
                                mercado salarial promedio por pareja. Lo que nos permite entender y
                                comunicar de
                                manera
                                efectiva dónde se encuentra un determinado elemento en el mercado.</p>
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
                                <li>La tabla proporciona una clasificación del mercado salarial por pareja,
                                    dividida en diferentes categorías desde “G” hasta “S”. Cada categoría
                                    representa un rango de salario específico y el porcentaje de parejas que
                                    caen dentro de ese rango.</li>
                                <li>La mayoría de las parejas se encuentran en la <strong>categoría “F1”
                                        (24.00%)</strong>, que representa salarios entre <strong>$8000 y $11,999
                                        pesos</strong>, seguida por la <strong>categoría “E” (18.46%)</strong>,
                                    que incluye salarios entre <strong>$12000 y $15,999 pesos</strong>, y en
                                    tercer lugar la <strong>categoría “F”(14.46%)</strong> que incluye a parejas
                                    que ganan entre <strong>$5000 y $7,999 pesos</strong>. Dichos segmentos
                                    representan la proporción de parejas con mayor participación del total
                                    dentro de los rangos salariales. Las demás categorías tienen una menor
                                    proporción.</li>
                                <li>Esta gráfica nos permite comprender de manera efectiva cómo se distribuyen
                                    los salarios en el mercado laboral y dónde se encuentra un elemento
                                    específico dentro de este mercado. Es una herramienta útil para analizar la
                                    estructura salarial de la población.
                                </li>
                            </ul>
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
                        <!-- Link de la gráfica -->
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_bar_volmercadosalarial_parejas_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Esta
                                    gráfica
                                    es una representación visual del volumen total de salarios por pareja
                                    anuales,
                                    segmentados por categorías. En otras palabras, nos muestra cómo se
                                    divide el
                                    dinero
                                    ganado neto entre diferentes tipos de trabajos y ocupaciones. De un
                                    vistazo,
                                    podemos
                                    comprender cómo se distribuye este volumen salarial en diferentes
                                    niveles de
                                    ingresos, lo que proporciona una visión completa de la estructura
                                    salarial
                                    en
                                    nuestro mercado laboral.</p>
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
                                    <li>Las barras están coloreadas para representar visualmente cada rango de
                                        ingreso; hay una barra verde, una amarilla y café que son prominentes
                                        porque representan los volúmenes salariales netos más altos. Los valores
                                        exactos del volumen salarial están indicados en cada barra para
                                        proporcionar detalles precisos.</li>
                                    <li>Se observa que la categoría color verde de ingresos de
                                        <strong>$8000-$11999(F1)</strong> tiene el volumen salarial más alto,
                                        seguido por la categoría de <strong>$5000-$8999 (F)</strong>. Las
                                        categorías con ingresos superiores a 25K(D1) en adelante tienen un
                                        volumen salarial significativamente menor.
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
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/tablas/tabla_profsalarioindv_pachuca.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->

                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Explora
                                    nuestra plataforma para conocer las profesiones que lideran los
                                    ingresos
                                    y
                                    aquellas
                                    que presentan retos económicos. Obtén información detallada sobre
                                    los
                                    salarios,
                                    tendencias y perspectivas profesionales, brindándote una visión
                                    clara de
                                    las
                                    carreras más y menos lucrativas en el mercado laboral actual..</p>
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

<!-- glightbox js -->
<script src="assets/libs/glightbox/js/glightbox.min.js"></script>

<!-- lightbox init -->
<script src="assets/js/pages/lightbox.init.js"></script>

<script src="assets/js/app.js"></script>
</body>

</html>