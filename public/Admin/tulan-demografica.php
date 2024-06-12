<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Tulancingo | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>

    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="assets/libs/nouislider/nouislider.min.css">

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
                        <!-- Link de la gráfica-->
                        <p style="text-align: center;">
                            <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                src="/datalpine/resources/jupyter/graficas/Distribucion_población_edad_genero_tulancingo.html"></iframe>
                        </p>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description1')">Descripción</button>
                        </div>
                            <!-- Descripción -->
                        <div class="description" id="description1" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                    En la pirámide poblacional de Tulancingo se tiene registro de
                                    <strong>3,082,841</strong> habitantes
                                    de los cuales <strong>2,907,688</strong> pertenecen a la población ocupada,
                                    <strong>28.3%</strong> se encuentra en un
                                    empleo formal y <strong>71.1%</strong> en informal. Y de la población de menores de
                                    29 años
                                    representan <strong>30.5%</strong>, personas de <strong>30 a 60 años</strong> con
                                    <strong>36.9%</strong>, y mayores de 64 años con <strong>8.6%</strong>.
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
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/Distribucion_población_edad_genero_tulancingo.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;">
                        </iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description2')">Descripción</button>
                        </div>
                             <!-- Descripción -->
                        <div class="description" id="description2" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Distribución de la estructura demográfica de la población de Tulancingo por
                                grupos de edad y género, se tiene un registro de <strong>168,282</strong>
                                habitantes de los
                                cuales los menores de <strong>29 años</strong> representan
                                <strong>23.2%</strong>, personas de <strong>30 a 60 años</strong> con
                                <strong>34.8%</strong>, y mayores de <strong>64 años</strong> con <strong>7.6%</strong>.
                            </p>                                
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
                        <iframe src="/datalpine/resources/jupyter/graficas/distribucion_edades_tulancingo.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;">
                        </iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description3')">Descripción</button>
                        </div>
                            <!-- Descripción -->
                        <div class="description" id="description3" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Distribución de créditos por grupos de edad. Identifica como se distribuyen los
                                préstamos en función de un grupo demográfico que devela que grupos etarios están
                                accediendo más a los prestamos y cuales pueden tener una menor participación en
                                este aspecto.
                            </p>
                            <ul class="text">
                                <li>Si una barra es alta, significa que la cantidad de préstamos otorgados a personas de esa edad es significativa</li>
                                <li>Si una barra es menor, indica que existen menos créditos otorgados en ese rango de edad.</li>
                            </ul>
                            <p class="text">
                                La gráfica de pastel revela que:
                                <strong>77.9%</strong> de los titulares de créditos tienen entre <strong>30 y 59 años</strong>, destacando la
                                actividad crediticia de este grupo. Asimismo, el <strong>18.4%</strong> de personas menores de <strong>29
                                años</strong> muestra cierta inclusión financiera en este segmento más joven, mientras
                                que el <strong>3.8%</strong> de personas mayores de <strong>60 años</strong> con
                                créditos sugiere su participación en actividades financieras.
                            </p>
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
                        <iframe src="/datalpine/resources/jupyter/graficas/g_scatt_promedio_precio_oferta_tulancingo_2023.html" width="1000"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;">
                        </iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description4')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description4" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Precios de oferta para viviendas desde Mayo de 2022 hasta Noviembre de 2023. Explora
                                la tendencia de los precios de las casas en este periodo de tiempo para la toma de
                                decisiones inteligentes.
                            </p>
                            <ul class="text">
                                <li>Si se observa una tendencia ascendente, significa que los precios están
                                aumentando, lo cual puede indicar una demanda alta en el mercado de viviendas.</li>
                                <li>Si muestra una tendencia a la baja, indica que los precios están disminuyendo.
                                Esto podría ser una señal para los vendedores de que podrían obtener un precio mejor si esperan un poco más.</li>
                                <li>Si se mantiene relativamente plana sugiere que los precios están bastante
                                firmes, señal de un mercado inmobiliario estable y predecible.</li>
                            </ul>
                        </div>
                    </div>
                    <!-- 2.2 Mediana del precio de oferta  -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <?php
                        echo "<li style='font-size: 20px;'>2.2 Mediana del precio de oferta </li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>                        
                        <iframe src="/datalpine/resources/jupyter/graficas/g_scatt_mediana_precio_oferta_tulancingo_2023.html" width="1000"
                            height="500" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;">
                        </iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description5')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description5" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                    Representación de la mediana de precios en el mercado durante el período de
                                    2022-2023. Observa una vista general en la tendencia de precios medianos en el
                                    mercado de viviendas durante el periodo considerado.
                            </p>
                            <ul class="text">
                                <li>Si la mediana es alta, esto sugiere que, las casas se vendieron a
                                precios relativamente altos en ese periodo, esto indica un mercado
                                inmobiliario robusto o alta demanda de propiedades.</li>
                                <li>Si la mediana es baja, implica que los precios promedio fueron más
                                asequibles. Esto podría señalar un mercado más accesible para compradores.</li>
                            </ul>
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
                            <iframe width="1000" height="500" seamless frameborder="0" scrolling="no"
                                src="/datalpine/resources/jupyter/graficas/g_bar_Precio_oferta_2022_2023_tulancingo.html"></iframe>
                        </p>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description66')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description66" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                    Proporción de las viviendas ofertadas por años de antigüedad de 2022-2023. Visualiza
                                    el panorama y la dinámica de la concentración en función de las propiedades
                                    construidas en un rango especifico de años.
                            </p>
                            <ul class="text">
                                <li>Si se tiene una gran concentración de casas construidas en un rango de
                                años específico, podría indicar una alza en construcción u oferta en ese periodo de tiempo.</li>
                                <li>Si la distribución tiene tendencia baja, podría sugerir que las casas de
                                diferentes edades están disponibles en cantidades menores. Esto puede
                                ser relevante para conocer la oferta específica de la vivienda.</li>
                            </ul>
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
                                    src="/datalpine/resources/jupyter/graficas/g_pastel_distpropsegment_tulancingo_2022.html"
                                    id="contenido1"></iframe>
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_pastel_distpropsegment_tulancingo_2023.html"
                                    id="contenido2" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description7')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description7" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Concentración y distribución de propiedades por segmento de mercado, durante 2022-2023.
                            </p>
                            <ul class="text">
                                <li>Si las etiquetas están agrupadas en una zona específica esto puede ser
                                indicativo de un mercado inmobiliario particularmente activo o demandado en ese lugar.</li>
                                <li>Si las etiquetas están más uniformes esto puede indicar un mercado más
                                diversificado o una demanda más equitativa en distintos tipos de propiedades.</li>
                            </ul>
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
                            height="400" frameborder="0" id="contenido01" style="display: block; margin: 0 auto;">
                        </iframe>
                        -->
                            <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description8')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description8" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Clasificación de mercados por segmento e índice de precio asociados a cada uno de ellos.
                            </p>
                            <ul class="text">
                                <li>Esta representación es útil para indicar qué tipos de propiedades están
                                más valoradas y cuáles son más accesibles para los compradores.</li>
                            </ul>
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
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_bar_tendencia_precioXsegmento_tulancingo.html"
                            width="1000" height="400" frameborder="0" id="contenido01" style="display: block; margin: 0 auto;">
                        </iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description9')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description9" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Variación y cambio precios que se han presentado en cada trimestre entre el
                                2022 y 2023, correspondientes a las diferentes clasificaciones y/o segmentos de mercado.
                            </p>
                            <ul class="text">
                                <li>Si la variación sube, indica un aumento en los precios de las viviendas,
                                lo que puede sugerir que el mercado inmobiliario está en alza durante el periodo de estudio.</li>
                                <li>Si la variación baja, significa que los precios de las viviendas han
                                disminuido, lo que podría indicar un mercado más asequible en el período de estudio.</li>
                            </ul>
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
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>4.1 Distribución de créditos por segmento</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido111')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido22')"
                                    value="2023">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_pie_discreditosXsegmento_2022_tulgo.html"
                                    id="contenido111"></iframe>
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_pie_discreditosXsegmento_2023_tulgo.html"
                                    id="contenido22" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description10')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description10" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Distribución de créditos para viviendas adquiridos para cada segmento del
                                    mercado.
                                    Contempla que tipo de propiedades son más populares entre los compradores que
                                    utilizan financiamiento.
                            </p>
                            <ul class="text">
                                <li>Si se tiene una concentración alta, significa que se han otorgado muchos
                                créditos para este sector. Esto puede indicar que son una opción popular para
                                los clientes que buscan financiamiento.</li>
                                <li>Si se tiene una concentración menor, implica que se han otorgado menos créditos
                                para este tipo de viviendas en comparación con otras.</li>
                            </ul>
                        </div>
                    </div>
                    <!-- 4.2 Distribución % de créditos por categoría (trimestre)  -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>4.2 Distribución % de créditos por categoría (trimestre)</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido3')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido4')"
                                    value="2023">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_discreditosXsegmento_trimestre2022_tulgo.html"
                                    id="contenido3"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_discreditosXsegmento_trimestre2023_tulgo.html"
                                    id="contenido4" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description11')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description11" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Distribución de créditos otorgados para las propiedades en diferentes segmentos (S,
                                    A, B, C, D, E) por trimestre. En función del porcentaje, observa cómo se
                                    agrupan los créditos para viviendas según su segmento en el mercado durante 2022-2023,
                                    permitiendo una visión clara y rápida de cómo se distribuyen y cuales son más
                                    predominantes en el mercado inmobiliario.
                            </p>
                            <ul class="text">
                            </ul>
                        </div>
                    </div>
                    <!-- 4.3 Distribución de créditos por monto -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>4.3 Distribución de créditos por monto</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido005')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido600')"
                                    value="2023">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_discreditosXmonto_2022_tulgo.html"
                                    id="contenido005"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_discreditosXmonto_2023_tulgo.html"
                                    id="contenido600" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description12')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description12" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                 Distribución de créditos otorgados para cada rango de monto entre el
                                    <strong>2022 y el 2023</strong>.
                                    Explora una visión de los créditos para viviendas en términos de
                                    cantidad de dinero
                                    y observa el alcance de los préstamos en el mercado inmobiliario
                            </p>
                            <ul class="text">
                            </ul>
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
                            <!-- Link de la gráfica -->
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido7')"
                                    value="2019">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido8')"
                                    value="2020">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido9')"
                                    value="2021">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido10')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido11')"
                                    value="2023">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_promcreditnewold_2019_tulancingo.html"
                                    id="contenido7"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_promcreditnewold_2020_tulancingo.html"
                                    id="contenido8" style="display: none;"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_promcreditnewold_2021_tulancingo.html"
                                    id="contenido9" style="display: none;"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_promcreditnewold_2022_tulancingo.html"
                                    id="contenido10" style="display: none;"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_promcreditnewold_2023_tulancingo.html"
                                    id="contenido11" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description13')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description13" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Tendencia del valor promedio de los créditos para viviendas nuevas y de uso a lo largo de 2022 en el mercado inmobiliario.
                            </p>
                            <ul class="text">
                                <li>Si se observa una tendencia ascendente, significa que el valor promedio de los
                                créditos ha ido aumentando a lo largo del año. </li>
                            <li>Si muestra una tendencia descendente, señala que la media de los precios ha disminuido. </li>
                            <li>Si se observan picos en la tendencia puede indicar momentos en el
                                que el mercado experimentó un aumento significativo en el valor de los créditos, por el
                                contrario, si se observan caídas podrían representar periodos de disminución. </li>
                            </ul>
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
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_estacionalidad_creditos_tulgo.html"
                            width="1000" height="320" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                            <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description14')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description14" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Número de créditos para vivienda adquiridos por trimestre en los años 2022 y 2023.
                                Proporciona una representación visual de cómo ha variado la adquisición de créditos
                                hipotecarios en diferentes trimestres.
                            </p>
                            <ul class="text">
                            </ul>
                        </div>
                    </div>
                    <!-- 4.6 Créditos por porcentaje de UMAS -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>4.6 Créditos por porcentaje de UMAS</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido12')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido13')"
                                    value="2023">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditosXumas_2022_tulgo.html"
                                    id="contenido12"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditosXumas_2023_tulgo.html"
                                    id="contenido13" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description15')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description15" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Visualiza la distribución de créditos según el porcentaje de Unidades de Medida y Actualización (UMAS)
                            </p>
                            <ul class="text">
                            </ul>
                        </div>
                    </div>
                    <!-- 4.7 Distribución % de créditos por organismo -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>4.7 Distribución % de créditos por organismo</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido14')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido15')"
                                    value="2023">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditosXorganismo_2022_tulgo.html"
                                    id="contenido14"></iframe>
                                <iframe width="800" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditosXorganismo_2023_tulgo.html"
                                    id="contenido15" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description17')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description17" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                La distribución porcentual de créditos por organismo muestra la participación de diferentes
                                    entidades financieras en el otorgamiento de préstamos hipotecarios durante los años <strong>2022 y 2023</strong>.
                            </p>
                            <ul class="text">
                                <li>Si se observan barras elevadas significa que se tiene una gran concentración de créditos otorgados por dicha entidad.</li>
                                <li>Si se presentan variaciones entre las barras , podría señalar una temporada en la cual se otorgaron más créditos. </li>
                                <li>Si se visualiza barras uniformes podría indicar una distribución constante a lo largo del tiempo. </li>
                            </ul>
                        </div>
                    </div>
                    <!-- 4.8 Distribución % de créditos por vivienda valor -->
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>4.8 Distribución % de créditos por vivienda valor</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido16')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido17')"
                                    value="2023">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditosXvivienda_2022_tulancingo.html"
                                    id="contenido16"></iframe>
                                <iframe width="1000" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_bar_creditosXvivienda_2023_tulancingo.html"
                                    id="contenido17" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description18')">Descripción</button>
                        </div>
                        <!-- Descripción -->
                        <div class="description" id="description18" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Distribución de créditos por vivienda valor 2022-2023. Visualiza los porcentajes que
                                representan las proporciones de los créditos otorgados al valor de la vivienda
                                clasificado en: Economía, Popular, Tradicional, Media, Residencial y Residencial plus.
                            </p>                            
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