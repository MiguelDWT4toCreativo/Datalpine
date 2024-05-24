<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Puebla | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>

    <!-- leaflet Css -->
    <link href="assets/libs/leaflet/leaflet.css" rel="stylesheet" type="text/css" />

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

                <!-- 5. Demografía y Tendencias de Mercado -->
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
                    <h1>Demografía y Tendencias de Mercado</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">En este informe, exploramos el proceso de
                    investigación de mercado, que incluye la recopilación, el análisis y la
                    interpretación de datos, evaluar la competencia y encontrar oportunidades de crecimiento.</p>

                <!--1. Demográfico -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                1. Demográfico<span class="text-muted fw-normal ms-2"></span></h5>
                        </div>
                    </div>
                    <!--1.1. Distribución de la población por edad y género -->
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <?php
                        echo "<li style='font-size: 20px;'>1.1. Distribución de la población por edad y género</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <p style="text-align: center;">
                            <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                src="/datalpine/resources/jupyter/graficas/distribucion_poblacion_edad_genero_estado_2022_2023.html"></iframe>
                        </p>
                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Distribución demográfica por rango de edad y género. La gráfica proporciona
                                    una
                                    representación visual de la población de Hidalgo para 2023, segmentada por
                                    rangos de
                                    edad y género para observar cómo se distribuye la población en el estado.
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
                                    En la pirámide poblacional de Hidalgo se tiene registro de
                                    <strong>3,082,841</strong>
                                    habitantes de los cuales <strong>2,907,688</strong> pertenecen a la población
                                    ocupada, <strong>28.3%</strong>
                                    se encuentra en un empleo formal y <strong>71.1%</strong> en informal. Y de la
                                    población de
                                    menores de 29 años representan <strong>30.5%</strong>, personas de <strong>30 a 60
                                        años</strong> con <strong>36.9%</strong>, y
                                    mayores de 64 años con <strong>8.6%</strong>.
                                </p>
                            </div>
                        </div>

                        <!--1.2 Distribución de la población por edad y género Pachuca -->
                        <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                            <?php
                            echo "<li style='font-size: 20px;'>1.2 Distribución de la población por edad y género Pachuca</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <!-- Link de la gráfica -->
                            <iframe
                                src="/datalpine/resources/jupyter/graficas/distribucion_poblacion_edad_genero_pachuca.html"
                                width="800" height="400" frameborder="0" id="contenido01"
                                style="display: block; margin: 0 auto;"></iframe>
                            <!-- Explicación de la gráfica -->
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Descripción:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                        Distribución de la estructura demográfica de la población de la Zona
                                        Metropolitana de Pachuca por grupos de edad y género, se tiene un
                                        registro de <strong>314,331 habitantes</strong> de los cuales los menores de
                                        <strong>29</strong>
                                        años
                                        representan <strong>28.0%</strong>, personas de <strong>30 a 60 años</strong>
                                        con <strong>32.8%</strong>, y mayores de 64
                                        años con <strong>4.3%</strong>.
                                    </p>
                                </div>
                            </div>

                            <div
                                style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Interpretación:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                        Distribución de la estructura demográfica de la población de la <strong>Zona
                                            Metropolitana de Pachuca</strong> por grupos de edad y género, se tiene un
                                        registro de <strong>314,331 habitantes</strong> de los cuales los menores de 29
                                        años
                                        representan <strong>28.0%</strong>, personas de <strong>30 a 60 años</strong>
                                        con <strong>32.8%</strong>, y mayores de 64
                                        años con <strong>4.3%</strong>.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--1.3 Distribución de créditos por grupos de edad-->
                        <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                            <?php
                            echo "<li style='font-size: 20px;'>1.3 Distribución de créditos por grupos de edad</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <!-- Link de la gráfica -->
                            <iframe src="/datalpine/resources/jupyter/graficas/distribucion_creditos_grupos_edad.html"
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
                                        Distribución de créditos por grupos de edad. Identifica cómo se
                                        distribuyen los préstamos en función de un grupo demográfico que revela
                                        que grupos etarios están accediendo más a los préstamos y cuales pueden
                                        tener una menor participación en este aspecto.
                                    </p>
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                        <li>Si una barra es alta, significa que la cantidad de préstamos
                                            otorgados a personas de esa edad es significativa.</li>
                                        <li>Si una barra es menor, indica que existen menos créditos otorgados
                                            en ese rango de edad.</li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Interpretación:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                        La gráfica de pastel revela que en Pachuca de Soto el <strong>76.6%</strong> de
                                        los
                                        titulares de créditos tienen entre <strong>30 y 59 años</strong>, destacando la
                                        actividad
                                        crediticia de este grupo. Asimismo, el <strong>14.3%</strong> de personas
                                        menores de <strong>29</strong>
                                        años muestra cierta inclusión financiera en este segmento más joven,
                                        mientras que el <strong>9.1%</strong> de personas mayores de <strong>60
                                            años</strong> con créditos sugiere
                                        su participación en actividades financieras. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--2. Precio de oferta-->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                2. Precio de oferta<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <!-- 2.1 Precio de oferta -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>2.1 Precio de oferta</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/Precio_oferta_2022_2023.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Precios de oferta para viviendas desde octubre de 2022 hasta septiembre de
                                    2023. Explora la tendencia de los precios de las casas en este periodo de
                                    tiempo para la toma de decisiones inteligentes.</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Si se observa una tendencia ascendente, significa que los precios están
                                        aumentando, lo cual puede indicar una demanda alta en el mercado de
                                        viviendas.</li>
                                    <li>Si muestra una tendencia a la baja, indica que los precios están
                                        disminuyendo. Esto podría ser una señal para los vendedores de que
                                        podrían obtener un precio mejor si esperan un poco más.</li>
                                    <li>Si se mantiene relativamente plana sugiere que los precios están
                                        bastante firmes, señal de un mercado inmobiliario estable y predecible.
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
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    En los últimos doce meses, el mercado inmobiliario en Pachuca ha
                                    experimentado fluctuaciones en los precios de las propiedades. A pesar de
                                    ciertas variaciones mensuales, se observa un crecimiento general del valor
                                    promedio. Desde <strong>Octubre de 2022</strong> hasta Septiembre de 2023, ha habido
                                    un
                                    aumento acumulado del <strong>6.8%</strong> en el precio promedio de las
                                    propiedades. Este
                                    incremento se traduce en un valor promedio de <strong>$227,650</strong>, indicando
                                    un cambio
                                    significativo en la tendencia alcista de los precios a partir de <strong>Marzo de
                                        2023</strong>.</p>
                            </div>
                        </div>
                    </div>
                    <!-- 2.2 Mediana del precio de oferta  -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>2.2 Mediana del precio de oferta </li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/mediana_precio_oferta.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Representación de la mediana de precios en el mercado durante el período de
                                    2022-2023. Observa una vista general en la tendencia de precios medianos en
                                    el mercado de viviendas durante el periodo considerado.</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Si la mediana es alta, esto sugiere que, las casas se vendieron a
                                        precios relativamente altos en ese periodo, esto indica un mercado
                                        inmobiliario robusto o alta demanda de propiedades.</li>
                                    <li>Si la mediana es baja, implica que los precios promedio fueron más
                                        asequibles. Esto podría señalar un mercado más accesible para
                                        compradores.</li>
                                </ul>
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
                                    La gráfica muestra cómo han variado los precios medios de las viviendas de
                                    <strong>octubre de 2022</strong> a <strong>septiembre de 2023</strong>.
                                </p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Se observa que los precios fueron subiendo de forma constante hasta <strong>junio de
                                        2023</strong>, cuando alcanzaron su punto más alto. Esto nos muestra un mercado
                                    muy
                                    activo y una gran demanda de propiedades. </p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    A partir de julio, los precios empezaron a bajar ligeramente en <strong>agosto y
                                        septiembre</strong>. Aunque aún son altos en comparación con el inicio del
                                    período,
                                    esta bajada nos indica una estabilización en el mercado y así mismo una
                                    disminución en la demanda.</p>
                            </div>
                        </div>
                    </div>
                    <!-- 2.3 Porcentaje de vivienda ofertadas por antigüedad -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>2.3 Porcentaje de vivienda ofertadas por antigüedad</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica PENDIENTE-->
                        <p style="text-align: center;">
                            <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                src="/datalpine/resources/jupyter/graficas/Porcentaje_vivienda_ofertadas_antigüedad.html"></iframe>
                        </p>
                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Proporción de las viviendas ofertadas por años de antigüedad de 2022-2023.
                                    Visualiza el panorama y la dinámica de la concentración en función de las
                                    propiedades construidas en un rango especifico de años.</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Si se tiene una gran concentración de casas construidas en un rango de
                                        años específico, podría indicar una alza en construcción u oferta en ese
                                        periodo de tiempo.</li>
                                    <li>Si la distribución tiene tendencia baja, podría sugerir que las casas de
                                        diferentes edades están disponibles en cantidades menores. Esto puede
                                        ser relevante para conocer la oferta específica de la vivienda.</li>
                                </ul>
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
                                    La gráfica muestra la proporción de viviendas ofertadas según su antigüedad
                                    durante los años <strong>2022 y 2023</strong>.</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>La mayoría de las viviendas ofertadas, el <strong>85%</strong>, tienen entre
                                        <strong>0 y 5 años</strong>
                                        de antigüedad. Esto nos da una alta concentración de propiedades nuevas
                                        en el mercado durante este período que muestra un aumento en la oferta
                                        de viviendas recientes.
                                    </li>
                                    <li>Por otro lado, hay una proporción menor de viviendas con antigüedad
                                        entre <strong>6 y 15</strong> años <strong>(11%)</strong>, y una presencia aún
                                        menor de viviendas con más
                                        antigüedad señalando una disponibilidad limitada de viviendas de edades
                                        intermedias o antiguas en el mercado.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--3. Segmentación de mercado -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                3. Segmentación de mercado<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <!-- 3.1 Distribución de propiedades por segmento -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>3.1 Distribución de propiedades por segmento</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido1')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido2')"
                                    value="2023">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_pie_discreditossegmento_2022_pachuca.html"
                                    id="contenido1"></iframe>
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_pie_discreditossegmento_2023_pachuca.html"
                                    id="contenido2" style="display: none;"></iframe>
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
                                    Concentración y distribución de propiedades por segmento de mercado, durante
                                    2022- 2023.</p>
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Si las etiquetas están agrupadas en una zona específica esto puede ser
                                    indicativo de un mercado inmobiliario particularmente activo o demandado en
                                    ese lugar.</p>
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Si las etiquetas están más uniformes esto puede indicar un mercado más
                                    diversificado o una demanda más equitativa en distintos tipos de
                                    propiedades.</p>
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
                                    Podemos observar concentraciones en 2022 y 2023
                                    del <strong>28% y 29.1%</strong> respectivamente en casas del segmento S con un
                                    valor
                                    promedio del  <strong>$6.681,071</strong>, seguidas de viviendas del segmento C con 
                                    <strong>26.9%</strong> y  <strong>25.1%</strong> de forma respectiva con un precio
                                    medio de  $1,916,723 y
                                    finalmente del segmento D con  <strong>23%</strong> y  <strong>22.9%</strong> en el
                                    orden dado con un valor
                                    medio de  <strong>$1,322,676</strong>.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- 3.2 Promedio de precio por segmento  -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>3.2 Promedio de precio por segmento</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica PENDIENTE-->
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
                                    Clasificación de mercados por segmento e índice de precio asociados a cada
                                    uno de ellos.</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Esta representación es útil para indicar qué tipos de propiedades están
                                        más valoradas y cuáles son más accesibles para los compradores.</li>
                                </ul>
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
                                    La gráfica presenta los precios promedio por segmento en el mercado de
                                    Pachuca. </p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Se observa que: </p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>El <strong>segmento S</strong> tiene el precio promedio más alto, con
                                        $6,590,148.53.
                                    </li>
                                    <li>Le sigue el <strong>segmento A</strong>, con un precio promedio de $3,384,341.67
                                        mientras
                                        que el segmento B tiene un precio promedio de $2,604,431.68. </li>
                                    <li>En el <strong>segmento C</strong>, el precio promedio es de
                                        <strong>$1,909,157.39</strong>, y en el
                                        segmento D, es de <strong>$1,304,533.43</strong>.
                                    </li>
                                    <li>Finalmente, el <strong>segmento E</strong> tiene el precio promedio más bajo,
                                        con
                                        <strong>$634,980.59</strong>.
                                    </li>
                                </ul>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Lo anterior permite entender la distribución de precios en el mercado
                                    inmobiliario local y puede ayudar a los asesores inmobiliarios a guiar a sus
                                    clientes en la búsqueda de propiedades que se ajusten a sus presupuestos y
                                    necesidades específicas.</p>
                            </div>
                        </div>
                    </div>
                    <!-- 3.3 Tendencias de precios por segmento -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>3.3 Tendencias de precios por segmento</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica PENDIENTE-->
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
                                    Variación y cambio precios que se han presentado en cada trimestre entre el
                                    2022 y 2023, correspondientes a las diferentes clasificaciones y/o segmentos
                                    de mercado.</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Si la variación sube, indica un aumento en los precios de las viviendas,
                                        lo que puede sugerir que el mercado inmobiliario está en alza durante el
                                        periodo de estudio.</li>
                                    <li>Si la variación baja, significa que los precios de las viviendas han
                                        disminuido, lo que podría indicar un mercado más asequible en el período
                                        de estudio.</li>
                                </ul>
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
                                    La gráfica representa la variación y cambio de precios que se han presentado
                                    en cada trimestre entre 2022 y 2023, correspondientes a los diferentes
                                    segmentos de mercado. </p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    El <strong>Segmento S</strong> experimentó la mayor variación positiva, con un
                                    aumento del
                                    <strong>9.30%</strong>, un incremento significativo en los precios de las viviendas
                                    en este
                                    segmento durante el período de estudio, indicando un mercado inmobiliario en
                                    alza.
                                </p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Por otro lado, los segmentos <strong>D, C y B</strong> mostraron variaciones
                                    negativas, con
                                    disminuciones del <strong>7.20%, 3.20% y 1.90%</strong> respectivamente
                                    interpretándose como
                                    un mercado más accesible durante el período analizado. </p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Por último, el <strong>segmento A</strong> registró una variación positiva del
                                    <strong>1%</strong>, indicando
                                    un ligero aumento en los precios de las viviendas en este segmento.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 4. Créditos -->
            <div class="row align-items-center"
                style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                <div class="col-md-6">
                    <div class="mb-3">
                        <h5 class="card-title"
                            style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                            4. Créditos<span class="text-muted fw-normal ms-2"></span>
                        </h5>
                    </div>
                </div>
                <!-- 4.1 Distribución de créditos por segmento -->
                <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                    <?php
                    echo "<li style='font-size: 20px;'>4.1 Distribución de créditos por segmento</li>";
                    echo "</ol>";
                    echo "</ol>";
                    ?>
                    <!-- Link de la gráfica -->
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">2022</h5>
                                    <iframe
                                        src="/datalpine/resources/jupyter/graficas/g_pie_discreditossegmento_2022_pachuca.html"
                                        width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">2023</h5>
                                    <iframe
                                        src="/datalpine/resources/jupyter/graficas/g_pie_discreditossegmento_2023_pachuca.html"
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
                                Distribución de créditos para viviendas adquiridos para cada segmento del
                                mercado.
                                Contempla que tipo de propiedades son más populares entre los compradores que
                                utilizan financiamiento.</p>
                            <ul
                                style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                <li>Si se tiene una concentración alta, significa que se han otorgado muchos
                                    créditos para este sector. Esto puede indicar que son una opción popular
                                    para
                                    los clientes que buscan financiamiento.</li>
                                <li>Si se tiene una concentración menor, implica que se han otorgado menos
                                    créditos
                                    para este tipo de viviendas en comparación con otras.</li>
                            </ul>
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
                                En el año <strong>2023</strong>, la distribución de créditos presenta algunas
                                variaciones con
                                respecto a <strong>2022</strong>. </p>
                            <p
                                style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                El <strong>segmento E</strong> sigue siendo el más solicitado, representa el
                                <strong>50%</strong> de los créditos,
                                aunque con una ligera disminución en comparación con el <strong>50.40%</strong> del año
                                anterior.
                            </p>
                            <p
                                style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                Por otro lado, el <strong>segmento D</strong> experimenta un aumento en su proporción,
                                pasando
                                del
                                <strong>18.67%</strong> en <strong>2022</strong> al <strong>19.23%</strong> en
                                <strong>2023</strong>.
                            </p>
                            <p
                                style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                Se observa un incremento en la proporción de créditos para el <strong>segmento
                                    C</strong>, que
                                pasa a
                                <strong>12.31%</strong>.
                            </p>
                            <p
                                style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                Los segmentos <strong>B, A y S</strong> muestran una disminución en sus proporciones de
                                créditos
                                en
                                <strong>2023</strong> en comparación con el año anterior. Estas variaciones indican
                                posibles
                                cambios
                                en las preferencias de financiamiento para diferentes rangos de precios de
                                propiedades durante el <strong>año 2023</strong>.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- 4.2 Distribución % de créditos por categoría (trimestre)  -->
                <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                    <?php
                    echo "<li style='font-size: 20px;'>4.2 Distribución % de créditos por categoría (trimestre)</li>";
                    echo "</ol>";
                    echo "</ol>";
                    ?>
                    <!-- Link de la gráfica -->
                    <div class="row">
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">2022</h5>
                                    <iframe
                                        src="/datalpine/resources/jupyter/graficas/g_bar_discreditossegmento_trimestre2022_pachuca.html"
                                        width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">2023</h5>
                                    <iframe
                                        src="/datalpine/resources/jupyter/graficas/g_bar_discreditossegmento_trimestre2023_pachuca.html"
                                        width="100%" height="300" frameborder="0" style="border: none;"></iframe>
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
                                    Distribución de créditos otorgados para las propiedades en diferentes
                                    segmentos (S,
                                    A, B, C, D, E) por trimestre. En función del porcentaje, observa cómo se
                                    agrupan los
                                    créditos para viviendas según su segmento en el mercado durante 2022-2023,
                                    permitiendo una visión clara y rápida de cómo se distribuyen y cuales son
                                    más
                                    predominantes en el mercado inmobiliario.</p>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>En el <strong>año 2022</strong>, el cuarto trimestre registró la mayor cantidad
                                        de
                                        crédito, donde
                                        el segmento E tuvo la mayor proporción de créditos en todos los
                                        trimestres.
                                    </li>
                                    <li>En el <strong>año 2023</strong>, el segundo trimestre destacó con el mayor
                                        número de
                                        créditos,
                                        experimentando un aumento en comparación con el mismo trimestre del año
                                        anterior. Nuevamente el segmento E lideró en términos de proporción de
                                        créditos.
                                    </li>
                                </ul>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Comparando los dos años, notamos un aumento en la actividad crediticia en el
                                    mercado
                                    inmobiliario durante el segundo trimestre del <strong>2023</strong>.</p>
                            </div>
                        </div>
                    </div>
                    <!-- 4.3 Distribución de créditos por monto -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>4.3 Distribución de créditos por monto</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">2022</h5>
                                        <iframe
                                            src="/datalpine/resources/jupyter/graficas/g_bar_discreditosmonto_2022_pachuca.html"
                                            width="100%" height="300" frameborder="0" style="border: none;"></iframe>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">2023</h5>
                                        <iframe
                                            src="/datalpine/resources/jupyter/graficas/g_bar_discreditosmonto_2023_pachuca.html"
                                            width="100%" height="300" frameborder="0" style="border: none;"></iframe>
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
                                        Distribución de créditos otorgados para cada rango de monto entre el
                                        <strong>2022 y el 2023</strong>.
                                        Explora una visión de los créditos para viviendas en términos de
                                        cantidad de dinero
                                        y observa el alcance de los préstamos en el mercado inmobiliario
                                    </p>
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
                                        En el año <strong>2022</strong>, se observa una mayor cantidad de créditos
                                        otorgados en
                                        los
                                        rangos de monto más bajos, especialmente en el intervalo de <strong>$0</strong>
                                        a
                                        <strong>$1,000,000</strong>, con
                                        un total de <strong>637 créditos</strong>. Sin embargo, a medida que aumenta el
                                        monto, la
                                        cantidad de créditos disminuye gradualmente, con números
                                        significativamente
                                        menores en los rangos superiores, como el intervalo de
                                        <strong>$4,000,001</strong> a
                                        <strong> $20,000,000</strong>,
                                        que registró solo <strong>103 créditos</strong>.
                                    </p>
                                    <p
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                        Por otro lado, en el <strong>año 2023</strong>, se observa una disminución
                                        general en la
                                        cantidad
                                        de créditos otorgados en todos los rangos de monto en comparación con el
                                        año
                                        anterior. Es notable la reducción en el intervalo de <strong>$0 a
                                            $1,000,000</strong>,
                                        que pasó
                                        de <strong>637 créditos</strong> en <strong>2022</strong> a <strong>320
                                            créditos</strong> en <strong>2023</strong>. Además, se observa una
                                        disminución en los rangos de monto más altos, mostrando menor actividad
                                        en el
                                        segmento de propiedades de mayor valor.</p>
                                </div>
                            </div>
                        </div>

                        <!-- 4.4. Promedio de valor de Créditos para casas nueva y para vivienda usada -->
                        <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                            <!-- Link de la gráfica -->

                            <div class="card-header bg-white d-flex justify-content-between align-items-center">
                                <?php
                                echo "<li style='font-size: 20px;'>4.4. Promedio de valor de Créditos para casas nueva y para vivienda usada</li>";
                                echo "</ol>";
                                echo "</ol>";
                                ?>
                                <div>
                                    <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido18')"
                                        value="2019">
                                    <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido19')"
                                        value="2020">
                                    <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido20')"
                                        value="2021">
                                    <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido12')"
                                        value="2022">
                                    <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido13')"
                                        value="2023">
                                </div>
                            </div>
                            <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                <div class="d-flex align-items-center">
                                    <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                        src="/datalpine/resources/jupyter/graficas/g_scatt_promcreditnewold_2019_pachuca.html"
                                        id="contenido18"></iframe>
                                    <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                        src="/datalpine/resources/jupyter/graficas/g_scatt_promcreditnewold_2020_pachuca.html"
                                        id="contenido19" style="display: none;"></iframe>
                                    <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                        src="/datalpine/resources/jupyter/graficas/g_scatt_promcreditnewold_2021_pachuca.html"
                                        id="contenido20" style="display: none;"></iframe>
                                    <iframe width="544" height="400" seamless frameborder="0" scrolling="no"
                                        src="/datalpine/resources/jupyter/graficas/g_scatt_promcreditnewold_2022_pachuca.html"
                                        id="contenido12" style="display: none;"></iframe>
                                    <iframe width="544" height="400" seamless frameborder="0" scrolling="no"
                                        src="/datalpine/resources/jupyter/graficas/g_scatt_promcreditnewold_2023_pachuca.html"
                                        id="contenido13" style="display: none;"></iframe>
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
                                        Tendencia del valor promedio de los créditos para viviendas nuevas y de
                                        uso a lo
                                        largo de 2022 en el mercado inmobiliario.</p>
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                        <li>Si se observa una tendencia ascendente, significa que el valor
                                            promedio de los
                                            créditos ha ido aumentando a lo largo del año.
                                        </li>
                                        <li>Si muestra una tendencia descendente, señala que la media de los
                                            precios ha
                                            disminuido.
                                        </li>
                                        <li>Si se observan picos en la tendencia puede indicar momentos en el
                                            que el mercado
                                            experimentó un aumento significativo en el valor de los créditos ,
                                            por el
                                            contrario, si se observan caídas podrían representar periodos de
                                            disminución.
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
                                    <p
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                        En la gráfica podemos ver el comportamiento del promedio de valor de
                                        crédito
                                        para viviendas nuevas y usadas a lo largo de los últimos años.</p>
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                        <li>En <strong>2019</strong> el tercer trimestre fue el que obtuvo mayor valor
                                            en
                                            créditos, sin
                                            embargo para vivienda nueva el trimestre uno destacó con un valor
                                            promedio
                                            de <strong>$1,822,819.15</strong>.
                                        </li>
                                        <li>En <strong>2020</strong> al igual que en <strong>2019</strong>, el primer
                                            trimestre de vivienda nueva
                                            fue el
                                            que tuvo mayor valor promedio con un monto de
                                            <strong>$1,649,837.68</strong>.
                                        </li>
                                        <li>Para <strong>2021</strong> el trimestre cuatro obtuvo el mayor valor
                                            promedio de
                                            créditos,
                                            sin embargo el <strong>trimestre 3</strong> predomina con con un valor de
                                            <strong>$1,805,033.07</strong> en
                                            vivienda usada, siendo este el monto mayo en todo el año.
                                        </li>
                                        <li>En <strong>2022</strong> el promedio de valor para viviendas nuevas fue
                                            mayor que el
                                            de
                                            vivienda usada, siendo el Tercer trimestre el que tuvo mayor valor
                                            con
                                            <strong>$2,107,348</strong>.
                                        </li>
                                        <li>En <strong>2023</strong> el primer trimestre fue el que reflejó mayor valor
                                            promedio
                                            en
                                            viviendas usadas con un monto total de <strong>$1,872,784</strong>.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- 4.5 Estacionalidad -->
                        <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                            <?php
                            echo "<li style='font-size: 20px;'>4.5 Estacionalidad</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <!-- Link de la gráfica -->
                            <iframe src="/datalpine/resources/jupyter/graficas/g_bar_estacionalidad_pachuca.html"
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
                                        Número de créditos para vivienda adquiridos por trimestre en los años
                                        2022 y 2023.
                                        Proporciona una representación visual de cómo ha variado la adquisición
                                        de créditos
                                        hipotecarios en diferentes trimestres.</p>
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
                                        La gráfica nos permite observar la variación de créditos en los
                                        trimestres de
                                        <strong>2022 y 2023</strong>, en donde podemos observar. En general, podemos
                                        observar que
                                        el
                                        trimestre cuatro del <strong>2022</strong> fue el que tuvo un mayor número de
                                        créditos
                                        otorgados
                                        con un total de <strong>395</strong>.
                                    </p>
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                        <li>En <strong>2022</strong> el trimestre cuatro fue el más alto, seguido del
                                            trimestre 3
                                            con un
                                            total de <strong>341 créditos</strong>.
                                        </li>
                                        <li>En <strong>2023</strong>,en base a la información que se tiene, el trimestre
                                            dos fue
                                            el que
                                            obtuvo un mayor número de créditos con un total de <strong>310</strong>.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- 4.6 Créditos por porcentaje de UMAS -->
                        <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                            <?php
                            echo "<li style='font-size: 20px;'>4.6 Créditos por porcentaje de UMAS</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <!-- Link de la gráfica -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">2022</h5>
                                            <iframe
                                                src="/datalpine/resources/jupyter/graficas/g_bar_creditosporumas_2022_pachuca.html"
                                                width="100%" height="300" frameborder="0"
                                                style="border: none;"></iframe>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">2023</h5>
                                            <iframe
                                                src="/datalpine/resources/jupyter/graficas/g_bar_creditosporumas_2023_pachuca.html"
                                                width="100%" height="300" frameborder="0"
                                                style="border: none;"></iframe>
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
                                            Visualiza la distribución de créditos según el porcentaje de
                                            Unidades de Medida y
                                            Actualización (UMAS)</p>
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
                                            La distribución de créditos por porcentaje de (UMAS) muestra cambios
                                            significativos
                                            entre
                                            los años <strong>2022 y 2023</strong>. </p>
                                        <p
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                            En el año 2022, los segmentos de ingresos más bajos (menor o igual a
                                            2.60), tuvieron
                                            una
                                            participación relativamente baja en la obtención de créditos, con un
                                            porcentaje del
                                            <strong>5.51%</strong>.
                                            Sin embargo, en el año <strong>2023</strong>, este segmento experimentó un
                                            aumento
                                            significativo en
                                            su
                                            participación, alcanzando el <strong>12.33%</strong>.
                                        </p>
                                        <p
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                            Por otro lado, los segmentos de ingresos más altos (más de 12.00)
                                            tuvieron una alta
                                            participación en la obtención de créditos en ambos años, con un
                                            porcentaje del <strong>8.82%</strong>
                                            en
                                            <strong>2022</strong>
                                            y un aumento notable al <strong>17.89% en 2023</strong>.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- 4.7 Distribución % de créditos por organismo -->
                            <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                <?php
                                echo "<li style='font-size: 20px;'>4.7 Distribución % de créditos por organismo</li>";
                                echo "</ol>";
                                echo "</ol>";
                                ?>
                                <!-- Link de la gráfica -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">2022</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditospororganismo_2022_pachuca.html"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">2023</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditospororganismo_2023_pachuca.html"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
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
                                                La distribución porcentual de créditos por organismo muestra la
                                                participación de
                                                diferentes
                                                entidades financieras en el otorgamiento de préstamos
                                                hipotecarios durante los años
                                                <strong>2022
                                                    y
                                                    2023</strong>.
                                            </p>
                                            <ul
                                                style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                                <li>Si se observan barras elevadas significa que se tiene una
                                                    gran concentración de
                                                    créditos
                                                    otorgados por dicha entidad.
                                                </li>
                                                <li>Si se presentan variaciones entre las barras , podría
                                                    señalar una temporada en
                                                    la
                                                    cual
                                                    se otorgaron más créditos.
                                                </li>
                                                <li>Si se visualiza barras uniformes podría indicar una
                                                    distribución constante a lo
                                                    largo
                                                    del tiempo.
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
                                            <p
                                                style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                                En el año <strong>2022</strong>, el INFONAVIT representó el mayor
                                                porcentaje de
                                                créditos, con un
                                                <strong>35.0%</strong>,
                                                seguido por la CNBV con un <strong>42.9%</strong> y el FOVISSSTE con un
                                                <strong>21.6%</strong>.
                                                Otros organismos, como
                                                BANJERCITO, contribuyeron con un porcentaje menor al <strong>1%</strong>
                                                del
                                                total de créditos
                                                otorgados.
                                            </p>
                                            <p
                                                style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                                En <strong> 2023</strong>, la distribución porcentual de créditos por
                                                organismo
                                                experimentó algunos
                                                cambios.
                                                El INFONAVIT mantuvo su posición como el principal otorgante de
                                                créditos, con un
                                                <strong>36.7%</strong>,
                                                seguido por la CNBV con un <strong>39.1%</strong> y el FOVISSSTE con un
                                                <strong>21.3%</strong>.
                                                Además, se observó la
                                                participación de otros organismos como CONAVI, BANJERCITO e
                                                INSUS, aunque en menor
                                                medida en
                                                comparación con los principales otorgantes.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end table responsive -->


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

<!-- leaflet plugin -->
<script src="assets/libs/leaflet/leaflet.js"></script>

<!-- leaflet map.init -->
<script src="assets/js/pages/leaflet-us-states.js"></script>
<script src="assets/js/pages/leaflet-map.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>