<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Pachuca | DatAlpine</title>

    <?php include 'layouts/head.php'; ?>

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

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

                <!-- Investigación de Mercado -->
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
                    Investigación de Mercado
                </div>
                <p style="font-size: 16px; line-height: 1.5; color: #666;">En este informe, exploramos el proceso de
                    investigación de mercado, que incluye la recopilación, el análisis y la
                    interpretación de datos, evaluar la competencia y encontrar oportunidades de crecimiento.</p>

                <!--Clientes potenciales foráneos -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Clientes potenciales foráneos<span class="text-muted fw-normal ms-2"></span>
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

                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">El mapa
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
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    El mapa proporciona datos sobre la distribución de compradores foráneos interesados
                                    en
                                    adquirir propiedades en la ciudad de Pachuca. Estos compradores están clasificados
                                    por
                                    región de origen y se muestran sus respectivas ponderaciones, reflejando el
                                    porcentaje
                                    de contribución relativa de cada región al total de compradores foráneos.
                                    Según los datos, la región de Ciudad de México representa el mayor porcentaje, con
                                    un
                                    33%, seguida por el Estado de México con un 27%, Nuevo León con un 20%, Jalisco con
                                    un
                                    13%, y finalmente Puebla con un 7%.
                                    Este análisis revela la procedencia geográfica de los compradores foráneos y su
                                    importancia relativa en el mercado inmobiliario de Pachuca, lo que puede ser
                                    esencial
                                    para comprender y atender las necesidades de estos grupos de compradores en
                                    particular.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

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
                        <!-- Link de la gráfica PENDIENTE -->
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
                                    En la pirámide poblacional de Hidalgo se tiene registro de 3,082,841
                                    habitantes de los cuales 2,907,688 pertenecen a la población ocupada, 28.3%
                                    se encuentra en un empleo formal y 71.1% en informal. Y de la población de
                                    menores de 29 años representan 30.5%, personas de 30 a 60 años con 36.9%, y
                                    mayores de 64 años con 8.6%.</p>
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
                                        Distribución demográfica por rango de edad y género. La gráfica
                                        proporciona una representación visual de la población de la Zona
                                        Metropolitana de Pachuca para 2023, segmentada por rangos de edad y
                                        género para observar cómo se distribuye la población en la zona.
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
                                        Distribución de la estructura demográfica de la población de la Zona
                                        Metropolitana de Pachuca por grupos de edad y género, se tiene un
                                        registro de 314,331 habitantes de los cuales los menores de 29 años
                                        representan 28.0%, personas de 30 a 60 años con 32.8%, y mayores de 64
                                        años con 4.3%.
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
                                    <iframe
                                        src="/datalpine/resources/jupyter/graficas/g_bar_PrecioPromedioM2_pachuca.html"
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
                                        La gráfica de pastel revela que en Pachuca de Soto el 76.6% de los
                                        titulares de créditos tienen entre 30 y 59 años, destacando la actividad
                                        crediticia de este grupo. Asimismo, el 14.3% de personas menores de 29
                                        años muestra cierta inclusión financiera en este segmento más joven,
                                        mientras que el 9.1% de personas mayores de 60 años con créditos sugiere
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
                                    promedio. Desde Octubre de 2022 hasta Septiembre de 2023, ha habido un
                                    aumento acumulado del 6.8% en el precio promedio de las propiedades. Este
                                    incremento se traduce en un valor promedio de $227,650, indicando un cambio
                                    significativo en la tendencia alcista de los precios a partir de Marzo de
                                    2023.</p>
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
                                    octubre de 2022 a septiembre de 2023.</p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Se observa que los precios fueron subiendo de forma constante hasta junio de
                                    2023, cuando alcanzaron su punto más alto. Esto nos muestra un mercado muy
                                    activo y una gran demanda de propiedades. </p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    A partir de julio, los precios empezaron a bajar ligeramente en agosto y
                                    septiembre. Aunque aún son altos en comparación con el inicio del período,
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
                                    durante los años 2022 y 2023. .</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>La mayoría de las viviendas ofertadas, el 85%, tienen entre 0 y 5 años
                                        de antigüedad. Esto nos da una alta concentración de propiedades nuevas
                                        en el mercado durante este período que muestra un aumento en la oferta
                                        de viviendas recientes. </li>
                                    <li>Por otro lado, hay una proporción menor de viviendas con antigüedad
                                        entre 6 y 15 años (11%), y una presencia aún menor de viviendas con más
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
                        <?php
                        echo "<li style='font-size: 20px;'>3.1 Distribución de propiedades por segmento</li>";
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
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_seg_pachuca.html"
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
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_total_pachuca.html"
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
                                    del 28% y 29.1% respectivamente en casas del segmento S con un valor
                                    promedio del  $6.681,071, seguidas de viviendas del segmento C con 
                                    26.9% y  25.1% de forma respectiva con un precio medio de  $1,916,723 y
                                    finalmente del segmento D con  23% y  22.9% en el orden dado con un valor
                                    medio de  $1,322,676.</p>
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
                                    <li>El segmento S tiene el precio promedio más alto, con $6,590,148.53.
                                    </li>
                                    <li>Le sigue el segmento A, con un precio promedio de $3,384,341.67 mientras
                                        que el segmento B tiene un precio promedio de $2,604,431.68. </li>
                                    <li>En el segmento C, el precio promedio es de $1,909,157.39, y en el
                                        segmento D, es de $1,304,533.43.
                                    </li>
                                    <li>Finalmente, el segmento E tiene el precio promedio más bajo, con
                                        $634,980.59.
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
                                    El Segmento S experimentó la mayor variación positiva, con un aumento del
                                    9.30%, un incremento significativo en los precios de las viviendas en este
                                    segmento durante el período de estudio, indicando un mercado inmobiliario en
                                    alza. </p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Por otro lado, los segmentos D, C y B mostraron variaciones negativas, con
                                    disminuciones del 7.20%, 3.20% y 1.90% respectivamente interpretándose como
                                    un mercado más accesible durante el período analizado. </p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Por último, el segmento A registró una variación positiva del 1%, indicando
                                    un ligero aumento en los precios de las viviendas en este segmento.</p>
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
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_seg_pachuca.html"
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
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_total_pachuca.html"
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
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Distribución de créditos para viviendas adquiridos para cada segmento del mercado.
                                    Contempla que tipo de propiedades son más populares entre los compradores que
                                    utilizan financiamiento.</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Si se tiene una concentración alta, significa que se han otorgado muchos
                                        créditos para este sector. Esto puede indicar que son una opción popular para
                                        los clientes que buscan financiamiento.</li>
                                    <li>Si se tiene una concentración menor, implica que se han otorgado menos créditos
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
                                    En el año 2023, la distribución de créditos presenta algunas variaciones con
                                    respecto a 2022. </p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    El segmento E sigue siendo el más solicitado, representa el 50% de los créditos,
                                    aunque con una ligera disminución en comparación con el 50.40% del año anterior.
                                </p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Por otro lado, el segmento D experimenta un aumento en su proporción, pasando del
                                    18.67% en 2022 al 19.23% en 2023.
                                </p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Se observa un incremento en la proporción de créditos para el segmento C, que pasa a
                                    12.31%
                                </p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Los segmentos B, A y S muestran una disminución en sus proporciones de créditos en
                                    2023 en comparación con el año anterior. Estas variaciones indican posibles cambios
                                    en las preferencias de financiamiento para diferentes rangos de precios de
                                    propiedades durante el año 2023.
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <!-- 
                            <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">2022</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_seg_pachuca.html"
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
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_total_pachuca.html"
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
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Distribución de créditos otorgados para las propiedades en diferentes segmentos (S,
                                    A, B, C, D, E) por trimestre. En función del porcentaje, observa cómo se agrupan los
                                    créditos para viviendas según su segmento en el mercado durante 2022-2023,
                                    permitiendo una visión clara y rápida de cómo se distribuyen y cuales son más
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
                                    <li>En el año 2022, el cuarto trimestre registró la mayor cantidad de crédito, donde
                                        el segmento E tuvo la mayor proporción de créditos en todos los trimestres.
                                    </li>
                                    <li>En el año 2023, el segundo trimestre destacó con el mayor número de créditos,
                                        experimentando un aumento en comparación con el mismo trimestre del año
                                        anterior. Nuevamente el segmento E lideró en términos de proporción de créditos.
                                    </li>
                                </ul>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Comparando los dos años, notamos un aumento en la actividad crediticia en el mercado
                                    inmobiliario durante el segundo trimestre del 2023.</p>
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
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_seg_pachuca.html"
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
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_total_pachuca.html"
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
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Distribución de créditos otorgados para cada rango de monto entre el 2022 y el 2023.
                                    Explora una visión de los créditos para viviendas en términos de cantidad de dinero
                                    y observa el alcance de los préstamos en el mercado inmobiliario</p>
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
                                    En el año 2022, se observa una mayor cantidad de créditos otorgados en los
                                    rangos de monto más bajos, especialmente en el intervalo de $0 a $1,000,000, con
                                    un total de 637 créditos. Sin embargo, a medida que aumenta el monto, la
                                    cantidad de créditos disminuye gradualmente, con números significativamente
                                    menores en los rangos superiores, como el intervalo de $4,000,001 a $20,000,000,
                                    que registró solo 103 créditos.</p>
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Por otro lado, en el año 2023, se observa una disminución general en la cantidad
                                    de créditos otorgados en todos los rangos de monto en comparación con el año
                                    anterior. Es notable la reducción en el intervalo de $0 a $1,000,000, que pasó
                                    de 637 créditos en 2022 a 320 créditos en 2023. Además, se observa una
                                    disminución en los rangos de monto más altos, mostrando menor actividad en el
                                    segmento de propiedades de mayor valor.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 4.4. Promedio de valor de Créditos para casas nueva y para vivienda usada -->
                <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                    <?php
                    echo "<li style='font-size: 20px;'>4.4. Promedio de valor de Créditos para casas nueva y para vivienda usada</li>";
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
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_seg_pachuca.html"
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
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_total_pachuca.html"
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
                            <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                Tendencia del valor promedio de los créditos para viviendas nuevas y de uso a lo
                                largo de 2022 en el mercado inmobiliario.</p>
                            <ul
                                style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                <li>Si se observa una tendencia ascendente, significa que el valor promedio de los
                                    créditos ha ido aumentando a lo largo del año.
                                </li>
                                <li>Si muestra una tendencia descendente, señala que la media de los precios ha
                                    disminuido.
                                </li>
                                <li>Si se observan picos en la tendencia puede indicar momentos en el que el mercado
                                    experimentó un aumento significativo en el valor de los créditos , por el
                                    contrario, si se observan caídas podrían representar periodos de disminución.
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
                                En la gráfica podemos ver el comportamiento del promedio de valor de crédito
                                para viviendas nuevas y usadas a lo largo de los últimos años.</p>
                            <ul
                                style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                <li>En 2019 el tercer trimestre fue el que obtuvo mayor valor en créditos, sin
                                    embargo para vivienda nueva el trimestre uno destacó con un valor promedio
                                    de $1,822,819.15.
                                </li>
                                <li>En 2020 al igual que en 2019, el primer trimestre de vivienda nueva fue el
                                    que tuvo mayor valor promedio con un monto de $1,649,837.68.
                                </li>
                                <li>Para 2021 el trimestre cuatro obtuvo el mayor valor promedio de créditos,
                                    sin embargo el trimestre 3 predomina con con un valor de $1,805,033.07 en
                                    vivienda usada, siendo este el monto mayo en todo el año.
                                </li>
                                <li>En 2022 el promedio de valor para viviendas nuevas fue mayor que el de
                                    vivienda usada, siendo el Tercer trimestre el que tuvo mayor valor con
                                    $2,107,348.
                                </li>
                                <li>En 2023 el primer trimestre fue el que reflejó mayor valor promedio en
                                    viviendas usadas con un monto total de $1,872,784.
                                </li>
                            </ul>
                        </div>
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
                            Número de créditos para vivienda adquiridos por trimestre en los años 2022 y 2023.
                            Proporciona una representación visual de cómo ha variado la adquisición de créditos
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
                            La gráfica nos permite observar la variación de créditos en los trimestres de
                            2022 y 2023, en donde podemos observar. En general, podemos observar que el
                            trimestre cuatro del 2022 fue el que tuvo un mayor número de créditos otorgados
                            con un total de 395.</p>
                        <ul
                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                            <li>En 2022 el trimestre cuatro fue el más alto, seguido del trimestre 3 con un
                                total de 341 créditos.
                            </li>
                            <li>En 2023,en base a la información que se tiene, el trimestre dos fue el que
                                obtuvo un mayor número de créditos con un total de 310.
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
                <!-- Link de la gráfica PENDIENTE-->
                <!-- 
                            <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">2022</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_seg_pachuca.html"
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
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_total_pachuca.html"
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
                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                            Visualiza la distribución de créditos según el porcentaje de Unidades de Medida y
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
                            La distribución de créditos por porcentaje de (UMAS) muestra cambios significativos entre
                            los años 2022 y 2023. </p>
                        <p
                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                            En el año 2022, los segmentos de ingresos más bajos (menor o igual a 2.60), tuvieron una
                            participación relativamente baja en la obtención de créditos, con un porcentaje del 5.51%.
                            Sin embargo, en el año 2023, este segmento experimentó un aumento significativo en su
                            participación, alcanzando el 12.33%.</p>
                        <p
                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                            Por otro lado, los segmentos de ingresos más altos (más de 12.00) tuvieron una alta
                            participación en la obtención de créditos en ambos años, con un porcentaje del 8.82% en 2022
                            y un aumento notable al 17.89% en 2023. </p>
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
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_seg_pachuca.html"
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
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_total_pachuca.html"
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
                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                            La distribución porcentual de créditos por organismo muestra la participación de diferentes
                            entidades financieras en el otorgamiento de préstamos hipotecarios durante los años 2022 y
                            2023.</p>
                        <ul
                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                            <li>Si se observan barras elevadas significa que se tiene una gran concentración de créditos
                                otorgados por dicha entidad.
                            </li>
                            <li>Si se presentan variaciones entre las barras , podría señalar una temporada en la cual
                                se otorgaron más créditos.
                            </li>
                            <li>Si se visualiza barras uniformes podría indicar una distribución constante a lo largo
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
                            En el año 2022, el INFONAVIT representó el mayor porcentaje de créditos, con un 35.0%,
                            seguido por la CNBV con un 42.9% y el FOVISSSTE con un 21.6%. Otros organismos, como
                            BANJERCITO, contribuyeron con un porcentaje menor al 1% del total de créditos otorgados.
                        </p>
                        <p
                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                            En 2023, la distribución porcentual de créditos por organismo experimentó algunos cambios.
                            El INFONAVIT mantuvo su posición como el principal otorgante de créditos, con un 36.7%,
                            seguido por la CNBV con un 39.1% y el FOVISSSTE con un 21.3%. Además, se observó la
                            participación de otros organismos como CONAVI, BANJERCITO e INSUS, aunque en menor medida en
                            comparación con los principales otorgantes.</p>
                    </div>
                </div>
            </div>
            <!-- 4.8 Distribución % de créditos por vivienda valor -->
            <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                <?php
                echo "<li style='font-size: 20px;'>4.8 Distribución % de créditos por vivienda valor</li>";
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
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_seg_pachuca.html"
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
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_total_pachuca.html"
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
                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                            Distribución de créditos por vivienda valor 2022-2023. Visualiza los porcentajes que
                            representan las proporciones de los créditos otorgados al valor de la vivienda clasificado
                            en: Economía, Popular, Tradicional, Media, Residencial y Residencial plus.</p>
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
                            <li>En 2022, la vivienda tradicional representó el mayor porcentaje de créditos, con un
                                41.0%, seguida por la vivienda residencial con un 33.4%. Las viviendas económicas y
                                populares también tuvieron una participación significativa, con un 7.3% y un 10.4%,
                                respectivamente. Las viviendas residenciales plus representaron el menor porcentaje de
                                créditos, con un 7.9% del total.
                            </li>
                            <li>En 2023, hubo cambios en la distribución porcentual de créditos por valor de vivienda.
                                La categoría de vivienda tradicional continuó siendo la más demandada, representando el
                                43.5% de los créditos. Sin embargo, se observó un aumento notable en la participación de
                                las viviendas económicas y populares, que pasaron a representar el 12.3% y el 16.2%,
                                respectivamente. Por otro lado, la participación de las viviendas residenciales y
                                residenciales plus disminuyó en comparación con el año anterior.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end table responsive -->


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

<script src="assets/js/app.js"></script>

</body>

</html>