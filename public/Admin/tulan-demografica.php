<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Tulancingo | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>

    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="assets/libs/nouislider/nouislider.min.css">

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
                    Demografía y Tendencias de Mercado
                </div>
                <p style="font-size: 16px; line-height: 1.5; color: #666;">En este informe, exploramos el proceso de
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
                        <p style="text-align: center;">
                            <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                src="/datalpine/resources/jupyter/graficas/distribucion_poblacion_edad_genero_estado_2022_2023.html"></iframe>
                        </p>
                -->
                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                    En la pirámide poblacional de Tulancingo se tiene registro de
                                    <strong>3,082,841</strong> habitantes
                                    de los cuales <strong>2,907,688</strong> pertenecen a la población ocupada,
                                    <strong>28.3%</strong> se encuentra en un
                                    empleo formal y <strong>71.1%</strong> en informal. Y de la población de menores de
                                    29 años
                                    representan <strong>30.5%</strong>, personas de <strong>30 a 60 años</strong> con
                                    <strong>36.9%</strong>, y mayores de 64 años con
                                    <strong>8.6%</strong>.
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
                            <!-- Link de la gráfica PENDIENTE-->
                            <!--
                            <iframe
                                src="/datalpine/resources/jupyter/graficas/distribucion_poblacion_edad_genero_pachuca.html"
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
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                        Distribución de la estructura demográfica de la población de Tulancingo por
                                        grupos de edad y género, se tiene un registro de <strong>168,282</strong>
                                        habitantes de los
                                        cuales los menores de <strong>29 años</strong> representan
                                        <strong>23.2%</strong>, personas de <strong>30 a 60 años</strong> con
                                        <strong>34.8%</strong>, y mayores de <strong>64 años</strong> con
                                        <strong>7.6%</strong>.
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
                            <!-- Link de la gráfica PENDIENTE-->
                            <!--
                            <iframe src="/datalpine/resources/jupyter/graficas/distribucion_creditos_grupos_edad.html"
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
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                        Distribución de créditos por grupos de edad. Identifica como se distribuyen los
                                        préstamos en función de un grupo demográfico que devela que grupos etarios están
                                        accediendo más a los prestamos y cuales pueden tener una menor participación en
                                        este aspecto.
                                    </p>
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                        <li>Si una barra es alta, significa que la cantidad de préstamos otorgados a
                                            personas de esa edad es significativa</li>
                                        <li>Si una barra es menor, indica que existen menos créditos otorgados en ese
                                            rango de edad.
                                        </li>
                                    </ul>
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                        La gráfica de pastel revela que:

                                        <strong>77.9%</strong> de los titulares de créditos tienen entre <strong>30 y 59
                                            años</strong>, destacando la
                                        actividad crediticia de este grupo. Asimismo, el <strong>18.4%</strong> de
                                        personas menores de <strong>29
                                            años</strong> muestra cierta inclusión financiera en este segmento más
                                        joven, mientras
                                        que el <strong>3.8%</strong> de personas mayores de <strong>60 años</strong> con
                                        créditos sugiere su participación
                                        en actividades financieras.
                                    </p>
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
                        <iframe src="/datalpine/resources/jupyter/graficas/Precio_oferta_2022_2023.html" width="800"
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
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                    Precios de oferta para viviendas desde Mayo de 2022 hasta Noviembre de 2023. Explora
                                    la tendencia de los precios de las casas en este periodo de tiempo para la toma de
                                    decisiones inteligentes.</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Si se observa una tendencia ascendente, significa que los precios están
                                        aumentando, lo cual puede indicar una demanda alta en el mercado de viviendas.
                                    </li>
                                    <li>Si muestra una tendencia a la baja, indica que los precios están disminuyendo.
                                        Esto podría ser una señal para los vendedores de que podrían obtener un precio
                                        mejor si esperan un poco más.</li>
                                    <li>Si se mantiene relativamente plana sugiere que los precios están bastante
                                        firmes, señal de un mercado inmobiliario estable y predecible.
                                    </li>
                                </ul>
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
                        <iframe src="/datalpine/resources/jupyter/graficas/mediana_precio_oferta.html" width="800"
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
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                    Representación de la mediana de precios en el mercado durante el período de
                                    2022-2023. Observa una vista general en la tendencia de precios medianos en el
                                    mercado de viviendas durante el periodo considerado.</p>
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
                    </div>
                    <!-- 2.3 Porcentaje de vivienda ofertadas por antigüedad -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>2.3 Porcentaje de vivienda ofertadas por antigüedad</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
                        <p style="text-align: center;">
                            <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                src="/datalpine/resources/jupyter/graficas/Porcentaje_vivienda_ofertadas_antigüedad.html"></iframe>
                        </p>
                -->
                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                    Proporción de las viviendas ofertadas por años de antigüedad de 2022-2023. Visualiza
                                    el panorama y la dinámica de la concentración en función de las propiedades
                                    construidas en un rango especifico de años.</p>
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>3.1 Distribución de propiedades por segmento</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>

                            <!--
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
                -->

                            <!-- Explicación de la gráfica -->
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Descripción:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                        Concentración y distribución de propiedades por segmento de mercado, durante
                                        2022-2023.</p>
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                        <li>Si las etiquetas están agrupadas en una zona específica esto puede ser
                                            indicativo de un mercado inmobiliario particularmente activo o demandado en
                                            ese lugar.</li>
                                        <li>Si las etiquetas están más uniformes esto puede indicar un mercado más
                                            diversificado o una demanda más equitativa en distintos tipos de
                                            propiedades.</li>
                                    </ul>
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
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                        Clasificación de mercados por segmento e índice de precio asociados a cada uno
                                        de ellos.</p>
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                        <li>Esta representación es útil para indicar qué tipos de propiedades están
                                            más valoradas y cuáles son más accesibles para los compradores.</li>
                                    </ul>
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
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
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
                -->

                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
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
                    </div>
                    <!-- 4.2 Distribución % de créditos por categoría (trimestre)  -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>4.2 Distribución % de créditos por categoría (trimestre)</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
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
                -->

                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
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
                    </div>
                    <!-- 4.3 Distribución de créditos por monto -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>4.3 Distribución de créditos por monto</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
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
                -->

                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                    Distribución de créditos otorgados para cada rango de monto entre el
                                    <strong>2022 y el 2023</strong>.
                                    Explora una visión de los créditos para viviendas en términos de
                                    cantidad de dinero
                                    y observa el alcance de los préstamos en el mercado inmobiliario
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 4.4. Promedio de valor de Créditos para casas nueva y para vivienda usada -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>4.4. Promedio de valor de Créditos para casas nueva y para vivienda usada</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <!-- Link de la gráfica PENDIENTE-->
                            <!--
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
                -->

                            <!-- Explicación de la gráfica -->
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Descripción:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
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
                        </div>

                        <!-- 4.5 Estacionalidad -->
                        <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                            <?php
                            echo "<li style='font-size: 20px;'>4.5 Estacionalidad</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <!-- Link de la gráfica PENDIENTE-->
                            <!--
                            <iframe src="/datalpine/resources/jupyter/graficas/g_bar_estacionalidad_pachuca.html"
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
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                        Número de créditos para vivienda adquiridos por trimestre en los años
                                        2022 y 2023.
                                        Proporciona una representación visual de cómo ha variado la adquisición
                                        de créditos
                                        hipotecarios en diferentes trimestres.</p>
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
                            <!-- Link de la gráfica PENDIENTE-->
                            <!--
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
                -->
                            <!-- Explicación de la gráfica -->
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Descripción:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                        Visualiza la distribución de créditos según el porcentaje de
                                        Unidades de Medida y
                                        Actualización (UMAS)</p>
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
                            <!-- Link de la gráfica PENDIENTE-->
                            <!--
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
                -->
                            <!-- Explicación de la gráfica -->
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Descripción:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end table responsive -->
    </div>
    <!-- End Page-content -->
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

<!-- nouisliderribute js -->
<script src="assets/libs/nouislider/nouislider.min.js"></script>
<script src="assets/libs/wnumb/wNumb.min.js"></script>

<!-- range slider init -->
<script src="assets/js/pages/rangeslider.init.js"></script>

<script src="assets/js/app.js"></script>

</body>

</html>