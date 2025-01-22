<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Pto. Vallarta | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>

    
    <style>
        .subtitle-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .subtitle {
            font-size: 1.5em;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .subtitles {
            font-size: 1.3em;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .description {
            display: none;
            margin-top: 5px;
            padding: 5px;
            background-color: #FOFOFO;
            /*border-left: 8px solid #007BFF;
            border-radius: 10px;*/
        }

        .interpretation {
            /*margin-bottom: 10px;*/
            /*padding: 10px;*/
            padding-right: 20px;
            padding-left: 20px;
            background-color: #FOFOFO; /*FOFOFO*/ 
            /*border-left: 8px solid #FFA500;
            border-radius: 10px;*/
            margin-top: 3px;
            /*box-shadow: 0 0 20px 0 rgba(169, 169, 169, 0.5);*/
        }

        .text {
            font-size: 1.1em;
            line-height: 1.8;
            color: #555;
            text-align: justify;
        }

        .icon {
            margin-right: 10px;
            font-size: 1.5em;
            display: inline-block;
        }

        .mostrar {
            padding: 5px 20px;
            font-size: 1em;
            color: #fff;
            background-color: #BEBEBE;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .mostrar-container {
            text-align: center;
            margin-top: 20px;
        }

        .mostrar:hover {
            background-color: #4225CF;
        }

        .actives {
            background-color: #9500ff;
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
                            <div class="page-title-right">
                                <ol class="breadcrumb mb-sm-0 font-size-18">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Jalisco</a></li>
                                    <li class="breadcrumb-item active">Puerto Vallarta</li>
                                </ol>
                            </div>                            
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- Características y Distribución de Propiedades -->
                <style>
                    .titulo {
                        text-align: center;
                        color: #333;
                        font-size: 24px;
                        font-weight: bold;
                        font-family: Arial, sans-serif;
                    }
                </style>
                <div class="titulo">
                    <h1>General</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Puerto Vallarta, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

<!-- Sección Proyección y Forecast -->
<div class="container-fluid">
    <div class="row">

<!-- Columna completa: Distribución de segmentos -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de segmentos</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalSegment">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalSegment">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_bar_dist_segmentos.html" width="100%" height="400" frameborder="0" id="segmentData" style="display: block; min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalSegment" tabindex="-1" aria-labelledby="descriptionModalLabelSegment" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelSegment">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica muestra una variedad de propiedades en diferentes rangos de precios en el mercado inmobiliario. El análisis de cada segmento y subsegmento revela patrones interesantes en el comportamiento del mercado.</p>
                <ul>
                    <li>El color azul muestra el subsegmento 1</li>
                    <li>El color rojo muestra el subsegmento 2</li>
                    <li>El color amarillo muestra el subsegmento 3</li>
                </ul>
                <p>Para <strong>Segmento L+</strong> y <strong>ELITE</strong> </p>
                <ul>
                    <li>El colo azul es el elemento completo</li>                    
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModalSegment" tabindex="-1" aria-labelledby="interpretationModalLabelSegment" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelSegment">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="overflow-y: auto; max-height: 90vh;">
                <p>La gráfica revela una distribución variada de propiedades en diferentes rangos de precios en el mercado inmobiliario de Puerto Vallarta. El análisis del comportamiento de cada segmento y sus subsegmentos revela patrones interesantes en el mercado inmobiliario.</p>
                <p>Podemos observar que el segmento predominante es el segmento <strong>S</strong> en todos sus subsegmentos, con <strong>S1</strong> representando el <strong>23.16%</strong> (azul), <strong>S2</strong> el <strong>15.87%</strong> (rojo) y <strong>S3</strong> el <strong>16%</strong> (amarillo). Esto indica que las propiedades en Puerto Vallarta son costosas, situándose principalmente en el rango de precios de <strong>4 a 12 millones de pesos</strong>. El segundo segmento más común es el segmento <strong>B</strong>, mientras que el segmento <strong>E</strong> es el menos representado, indicando que hay pocas propiedades con precios menores a <strong>1 millón de pesos</strong>.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Gráfica: Distribución de créditos por segmento -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de créditos por segmento</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="segmentoSelect" onchange="showSegmentoData(this.value)">
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <!--<option value="2024">2024</option>-->
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalSegmentooo">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonSegmento" data-bs-toggle="modal" data-bs-target="#interpretationModal2022">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="segmentoDataContainer"></div>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalSegmentooo" tabindex="-1" aria-labelledby="descriptionModalLabelSegmento" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelSegmento">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Distribución de créditos para viviendas adquiridos para cada segmento del mercado.</p>
                <p>Contempla qué tipo de propiedades son más populares entre los compradores que utilizan financiamiento.</p>
                <ul>
                    <li>Si se tiene una concentración <strong>alta</strong>, significa que se han otorgado muchos créditos para este sector. Esto puede indicar que son una opción popular para los clientes que buscan financiamiento.</li>
                    <li>Si se tiene una concentración <strong>menor</strong>, implica que se han otorgado menos créditos para este tipo de viviendas en comparación con otras.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2022 -->
<div class="modal fade" id="interpretationModal2022" tabindex="-1" aria-labelledby="interpretationModalLabel2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2022">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En el año <strong>2023</strong>, la distribución de créditos presenta algunas variaciones con respecto a <strong>2022</strong>.</p>
                <ul>
                    <li>El <strong>segmento E</strong> es el más solicitado, representando el <strong>41.0%</strong> de los créditos, aunque con un ligero aumento en comparación con el año anterior <strong>31.35%</strong>. Esto nos revela que el segmento de menor precio es el segmento en el que más se solicitan créditos.</li>
                    <li>Por otro lado, el <strong>segmento L</strong> es el segmento en el que más se solicitan créditos con <strong>22.3%</strong>, en comparación con el año anterior su presencia fue más notoria.</li>
                    <li>Los <strong>segmentos D</strong> y <strong>S</strong> son los siguientes con mayor solicitud de créditos con <strong>16.8%</strong> y <strong>7.8%</strong>, respectivamente.</li>
                    <li>Los <strong>segmentos A</strong>, <strong>B</strong> y <strong>C</strong> muestran una participación mínima con <strong>2.6%</strong>, <strong>4.6%</strong> y <strong>7.8%</strong>, respectivamente.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2023 -->
<div class="modal fade" id="interpretationModal2023" tabindex="-1" aria-labelledby="interpretationModalLabel2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2023">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En el año <strong>2023</strong>, la distribución de créditos presenta algunas variaciones con respecto a <strong>2022</strong>.</p>
                <ul>
                    <li>El <strong>segmento E</strong> es el más solicitado, representando el <strong>41.0%</strong> de los créditos, aunque con un ligero aumento en comparación con el año anterior <strong>31.35%</strong>. Esto nos revela que el segmento de menor precio es el segmento en el que más se solicitan créditos.</li>
                    <li>Por otro lado, el <strong>segmento L</strong> es el segmento en el que más se solicitan créditos con <strong>22.3%</strong>, en comparación con el año anterior su presencia fue más notoria.</li>
                    <li>Los <strong>segmentos D</strong> y <strong>S</strong> son los siguientes con mayor solicitud de créditos con <strong>16.8%</strong> y <strong>7.8%</strong>, respectivamente.</li>
                    <li>Los <strong>segmentos A</strong>, <strong>B</strong> y <strong>C</strong> muestran una participación mínima con <strong>2.6%</strong>, <strong>4.6%</strong> y <strong>7.8%</strong>, respectivamente.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2024 -->
<div class="modal fade" id="interpretationModal2024" tabindex="-1" aria-labelledby="interpretationModalLabel2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En 2024, Puebla destinó el <strong>59.2%</strong> de los créditos otorgados a la compra de propiedades en el segmento inmobiliario S, lo que refleja que una gran parte de la población busca inmuebles de bajo valor y opta por financiamiento moderado.</p>

                <p>El segundo segmento con mayor participación fue el D, con un <strong>18.9%</strong>, siguiendo la misma tendencia de créditos de menor valor.</p>

                <p>Por otro lado, el segmento inmobiliario Elite recibió menos del <strong>0.5%</strong> de los créditos, debido al alto valor de las propiedades en esta categoría, lo que implicaría financiamientos significativamente elevados.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showSegmentoData(year) {
        // Crear el iframe dinámicamente
        const iframe = document.createElement('iframe');
        iframe.src = `/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_pie_dist_creditos_segmento_${year}.html`;
        iframe.width = '100%';
        iframe.height = '400';
        iframe.frameborder = '0';
        iframe.style.minHeight = '430px';
        iframe.style.border = '0';

        // Reemplazar el contenido del contenedor
        document.getElementById('segmentoDataContainer').innerHTML = '';
        document.getElementById('segmentoDataContainer').appendChild(iframe);

        // Cambiar el modal de interpretación según el año seleccionado
        document.getElementById('interpretationButtonSegmento').setAttribute('data-bs-target', `#interpretationModal${year}`);
    }

    // Mostrar la gráfica de 2022 por defecto al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        showSegmentoData('2022');
    });
</script>


<!-- Columna completa: Segmentación de mercado: Tendencias de precios por segmento -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Segmentación de mercado: Tendencias de precios por segmento</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal2">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal2">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_bar_precio_segmento_tendencias.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal2" tabindex="-1" aria-labelledby="descriptionModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel2">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Variación y cambio de precios que se han presentado en cada trimestre entre el <strong>2023</strong> y <strong>2024</strong>, correspondientes a las diferentes clasificaciones y/o segmentos de mercado.</p>
            <li>Si la variación <strong>sube</strong>, indica un aumento en los precios de las viviendas, lo que puede sugerir que el mercado inmobiliario está en alza durante el periodo de estudio.</li>
            <li>Si la variación <strong>baja</strong>, significa que los precios de las viviendas han disminuido, lo que podría indicar un mercado más asequible en el período de estudio.</li>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModal2" tabindex="-1" aria-labelledby="interpretationModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica representa la variación y cambio de precios que se han presentado en cada trimestre entre 2023 y 2024, correspondientes a los diferentes segmentos de mercado.</p>

                <p>El Segmento <strong>ELITE</strong> experimentó la mayor variación positiva, con un aumento del <strong>20.27%</strong>, un incremento significativo en los precios de las viviendas en este segmento durante el período de estudio, indicando un mercado inmobiliario en alza.</p>

                <p>Por otro lado, los segmentos <strong>A</strong>, <strong>B</strong>, y <strong>C</strong> mostraron variaciones positivas, con disminuciones del <strong>0.87%</strong>, <strong>2.22%</strong>, y <strong>1.16%</strong> respectivamente, interpretándose como un mercado más accesible durante el período analizado.</p>

                <p>Por último, los segmentos <strong>E</strong>, <strong>S</strong>, <strong>L</strong>, <strong>D</strong> registraron una variación negativa del <strong>2.39%</strong>, <strong>0.74%</strong>, <strong>0.79%</strong>, y <strong>0.46%</strong>.</p>

                <p>Todo lo anterior nos brinda un panorama completo sobre el comportamiento de los precios que tendrán en los próximos meses en cada segmento.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


        <!-- Columna completa: Profesiones -->
        <!-- <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Profesiones</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal3">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal3">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Puebla/assets/graficas/g_bar_profesiones.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- Columna completa: g_bar_mercadosalario_parejas_vol -->
        <!-- <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Mercado salario parejas (Volumen)</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal4">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal4">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Columna completa: g_bar_mercadosalario_parejas -->
        <!-- <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Mercado salario parejas</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal5">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal5">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Columna completa: g_bar_mercadosalario_persona -->
        <!-- <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Mercado salario por persona</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal6">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal6">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div> -->


        <!-- Columna completa: g_pie_creditos_genero -->
        <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de créditos por género</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal7">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal7">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_pie_creditos_genero.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal7" tabindex="-1" aria-labelledby="descriptionModalLabel7" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel7">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Distingue la diferencia en la porporción de prestamos entre hombres y mujeres en el mercado inmobiliario, esto puede ser útil para comprender las tendencias de financiamiento y su participación en terminos de acesso a créditos por grupo de género.</p>
                <ul>
                    <li>Si la sección de hombres es más grande, significa que un mayor porcentaje de préstamos se otorga a hombres.</li>
                    <li>Si la sección de mujeres es más grande, indica que un mayor porcentaje de préstamos se otorga a mujeres.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModal7" tabindex="-1" aria-labelledby="interpretationModalLabel7" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel7">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li>Un mayor porcentaje de préstamos se otorga a <strong>hombres</strong> en el mercado inmobiliario. Los hombres tienen el <strong>53.9%</strong> de los créditos.</li>
                    <li>Las <strong>mujeres</strong> tienen el <strong>46.1%</strong> de los créditos. Esto indica que un menor porcentaje de préstamos se otorga a mujeres.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Gráfica: Distribución % de créditos por categoría (trimestre) -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución % de créditos por categoría (trimestre)</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="categoriaSelect" onchange="showCategoriaData(this.value)">
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <!--<option value="2024">2024</option>-->
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalCategoria">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonCategoria" data-bs-toggle="modal" data-bs-target="#interpretationModalTrimestre2022">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <div id="segmentoTrimestreDataContainer"></div>    
                <!--                                
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_dist_creditos_segmento_percent_2022.html" width="100%" height="400" frameborder="0" id="categoriaData2022" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_dist_creditos_segmento_percent_2023.html" width="100%" height="400" frameborder="0" id="categoriaData2023" style="display: none; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_dist_creditos_segmento_percent_2024.html" width="100%" height="400" frameborder="0" id="categoriaData2024" style="display: none; min-height: 430px; border: 0;"></iframe>
                -->
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalCategoria" tabindex="-1" aria-labelledby="descriptionModalLabelCategoria" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelCategoria">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica muestra la distribución porcentual de créditos otorgados para propiedades en diferentes segmentos del mercado inmobiliario (<strong>S</strong>, <strong>A</strong>, <strong>B</strong>, <strong>C</strong>, <strong>D</strong>, <strong>E</strong>, <strong>L</strong>) por trimestre durante <strong>2022</strong> - <strong>2023</strong>.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2022 -->
<div class="modal fade" id="interpretationModalTrimestre2022" tabindex="-1" aria-labelledby="interpretationModalLabel2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2022">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li><strong>Segmento E:</strong> Es el segmento más predominante, con un aumento significativo en el tercer trimestre, alcanzando alrededor del <strong>22%</strong>. Esto sugiere que la mayoría de los créditos otorgados en 2023 se concentran en este rango de monto, especialmente en la segunda mitad del año. Esto podría indicar una mayor demanda o aprobación de créditos en este rango, posiblemente debido a cambios en las políticas de préstamos o condiciones económicas favorables.</li>
                    <li><strong>Segmento D:</strong> Representa un <strong>3-6%</strong> de los créditos otorgados. Aunque su proporción es menor que la del segmento E, muestra un ligero incremento a lo largo del año, sugiriendo una moderada estabilidad en la demanda de créditos dentro de este rango de monto.</li>
                    <li><strong>Segmento C:</strong> Oscila entre el <strong>2%</strong> y el <strong>3%</strong> de los créditos. La consistencia de estos valores indica que los préstamos en este rango de monto se mantuvieron estables, sin grandes fluctuaciones durante el año.</li>
                    <li><strong>Segmentos B y A:</strong> Estos segmentos tienen una proporción muy baja, alrededor del <strong>1-2%</strong>. La baja representación sugiere que menos personas o entidades solicitan o califican para créditos en estos rangos de monto.</li>
                    <li><strong>Segmentos S y L:</strong> Apenas visibles en el gráfico, con una representación mínima. Esto podría indicar que los créditos en estos rangos son muy poco comunes, posiblemente debido a que representan montos extremadamente altos o bajos, que no son típicamente solicitados o aprobados.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2023 -->
<div class="modal fade" id="interpretationModalTrimestre2023" tabindex="-1" aria-labelledby="interpretationModalLabel2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2023">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li><strong>Segmento E:</strong> Es el segmento más predominante, con un aumento significativo en el tercer trimestre, alcanzando alrededor del <strong>22%</strong>. Esto sugiere que la mayoría de los créditos otorgados en 2023 se concentran en este rango de monto, especialmente en la segunda mitad del año. Esto podría indicar una mayor demanda o aprobación de créditos en este rango, posiblemente debido a cambios en las políticas de préstamos o condiciones económicas favorables.</li>
                    <li><strong>Segmento D:</strong> Representa un <strong>3-6%</strong> de los créditos otorgados. Aunque su proporción es menor que la del segmento E, muestra un ligero incremento a lo largo del año, sugiriendo una moderada estabilidad en la demanda de créditos dentro de este rango de monto.</li>
                    <li><strong>Segmento C:</strong> Oscila entre el <strong>2%</strong> y el <strong>3%</strong> de los créditos. La consistencia de estos valores indica que los préstamos en este rango de monto se mantuvieron estables, sin grandes fluctuaciones durante el año.</li>
                    <li><strong>Segmentos B y A:</strong> Estos segmentos tienen una proporción muy baja, alrededor del <strong>1-2%</strong>. La baja representación sugiere que menos personas o entidades solicitan o califican para créditos en estos rangos de monto.</li>
                    <li><strong>Segmentos S y L:</strong> Apenas visibles en el gráfico, con una representación mínima. Esto podría indicar que los créditos en estos rangos son muy poco comunes, posiblemente debido a que representan montos extremadamente altos o bajos, que no son típicamente solicitados o aprobados.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2024 -->
<div class="modal fade" id="interpretationModalTrimestre2024" tabindex="-1" aria-labelledby="interpretationModalLabel2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Para los primeros 2 trimestres del 2024, el segmento E (menos de <strong>500</strong> mil a <strong>1</strong> millón) sigue dominando de manera significativa en ambos trimestres, lo que refuerza la preferencia por propiedades más accesibles, probablemente impulsado por la demanda de jóvenes compradores y familias locales en busca de vivienda económica.</p>

                <p>El segmento D (<strong>1</strong> millón a <strong>1.75</strong> millones) también muestra una participación considerable, lo que puede estar relacionado con el crecimiento económico de Pachuca de Soto, este atrayendo a compradores con mayor poder adquisitivo.</p>

                <p>Mientras que el resto de los segmentos presentan porcentajes de participación menores.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showCategoriaData(year) {
        // Crear el iframe dinámicamente
        const iframe = document.createElement('iframe');
        iframe.src = `/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_bar_dist_creditos_segmento_percent_${year}.html`;        
        iframe.width = '100%';
        iframe.height = '400';
        iframe.frameborder = '0';
        iframe.style.minHeight = '430px';
        iframe.style.border = '0';
        // Reemplazar el contenido del contenedor
        document.getElementById('segmentoTrimestreDataContainer').innerHTML = '';
        document.getElementById('segmentoTrimestreDataContainer').appendChild(iframe);
        // Cambiar el modal de interpretación según el año seleccionado
        document.getElementById('interpretationModalTrimestre').setAttribute('data-bs-target', `#interpretationModal${year}`);
    }
    
    // Mostrar la gráfica de 2022 por defecto al cargar la página
    document.addEventListener('DOMContentLoaded', function() {
        showCategoriaData('2022');
    });      
</script>



<!-- Columna completa: g_bar_tiempoventa_total -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Tiempo general de venta</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal8">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal8">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_bar_tiempoventa_total.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal8" tabindex="-1" aria-labelledby="descriptionModalLabel8" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel8">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Los datos consisten en una tabla que resume la distribución de un conjunto de segmentos ("S", "A", "B", "C", "D", "E", "L") según diferentes categorías de antigüedad.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModal8" tabindex="-1" aria-labelledby="interpretationModalLabel8" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel8">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Categoría <strong>7</strong>: Con 1007 observaciones, es la categoría más representativa, lo que sugiere que la mayoría de los segmentos están en esta etapa.</p>
                <p>Categoría <strong>11</strong>: Tiene 151 observaciones, lo que indica una presencia significativa de segmentos en esta antigüedad.</p>
                <p>Categorías <strong>8, 9 y 10</strong>: Tienen menos observaciones (106, 76 y 69 respectivamente), lo que podría indicar que estos segmentos están en una fase de transición o son menos comunes.</p>
                <p>Categoría <strong>13-19</strong>: Con solo 20 observaciones, sugiere que los segmentos en esta antigüedad son menos frecuentes o están en declive.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- Columna completa: g_bar_tiempo_venta -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Tiempo total de venta (por segmento)</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal9">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal9">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_bar_tiempoventa.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal9" tabindex="-1" aria-labelledby="descriptionModalLabel9" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel9">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La distribución de las viviendas en función de la cantidad de meses que han estado en existencia para venta por segmentos (S, A, B, C, D, E) revela patrones interesantes. Según el tiempo de venta estimado, se puede identificar que segmentos tienen una demanda más alta y tienden a venderse un poco más rápido, mientras que otros requieren un poco más de tiempo para encontrar compradores.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModal9" tabindex="-1" aria-labelledby="interpretationModalLabel9" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel9">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul>
                    <li><strong>Segmento S:</strong> Su distribución es sesgada hacia la derecha puesto que posee una alta concentración de propiedades con una antigüedad de oferta de <strong>7 meses</strong>.</li>
                    <li><strong>Segmento A y B:</strong> Tiene una cantidad significativa de propiedades que duran en disponibilidad alrededor de <strong>7</strong> y <strong>11</strong> meses.</li>
                    <li><strong>Segmento C Y D:</strong> Poseen una distribución sesgada hacia la izquierda con una concentración de disponibilidad que ronda los <strong>7</strong> meses de antigüedad.</li>
                    <li><strong>Segmento E:</strong> Tiene una cantidad significativa de propiedades que duran en disponibilidad alrededor de <strong>7</strong> meses.</li>
                    <li><strong>Segmento L:</strong> Tiene una cantidad significativa de propiedades que duran en disponibilidad alrededor de <strong>7</strong> meses.</li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


<!-- g_piramid_poblacion con un solo desplegable y dos iframes para Hidalgo y Tulancingo -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Demográfico: Distribución de la población por género y rango de edad</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select me-2" id="locationSelect" onchange="updateGraphs()">
                        <option value="Hidalgo">Jalisco</option>
                        <option value="Tulancingo">Pto. Vallarta</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalPiramid">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonPiramid" data-bs-toggle="modal">Interpretación</button>
                </div>
            </div>

            <!-- Espacios para los dos iframes -->
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/compartidas/assets/graficas/g_piramid_poblacion_jalisco.html" width="100%" height="400" frameborder="0" id="iframeHidalgo" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Vallarta/assets/graficas/g_piramid_poblacion.html" width="100%" height="400" frameborder="0" id="iframeTulancingo" style="display: none; min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalPiramid" tabindex="-1" aria-labelledby="descriptionModalLabelPiramid" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelPiramid">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica proporciona una representación visual de la población segmentada por rangos de edad y género en la ubicación seleccionada para observar cómo se distribuye la población en la región.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation Hidalgo -->
<div class="modal fade" id="interpretationModalPiramidHidalgo" tabindex="-1" aria-labelledby="interpretationModalLabelHidalgo" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelHidalgo">Interpretación Jalisco</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En la pirámide poblacional de <strong>Jalisco</strong>, la base amplia en el rango de <strong>0 a 19 años</strong> indica una población joven y en crecimiento. Esto sugiere un futuro aumento en la demanda de viviendas familiares y espacios residenciales adecuados para familias con hijos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation Tulancingo -->
<div class="modal fade" id="interpretationModalPiramidTulancingo" tabindex="-1" aria-labelledby="interpretationModalLabelTulancingo" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelTulancingo">Interpretación Pto. Vallarta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En la pirámide poblacional de <strong>Puerto Vallarta</strong>, se observa una base significativa en el rango de <strong>0 a 19 años</strong>, lo que indica una población joven y en crecimiento. Sin embargo, el rango de <strong>20 a 34 años</strong> también es considerable, sugiriendo una población activa y con potencial para el mercado laboral.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Script para actualizar los iframes y modales según la ubicación seleccionada -->
<script>
    function updateGraphs() {
        const location = document.getElementById('locationSelect').value;

        // Mostrar/ocultar iframes según la ubicación seleccionada
        if (location === 'Hidalgo') {
            document.getElementById('iframeHidalgo').style.display = 'block';
            document.getElementById('iframeTulancingo').style.display = 'none';
        } else if (location === 'Tulancingo') {
            document.getElementById('iframeHidalgo').style.display = 'none';
            document.getElementById('iframeTulancingo').style.display = 'block';
        }

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonPiramid');
        if (location === 'Hidalgo') {
            interpretationButton.setAttribute('data-bs-target', '#interpretationModalPiramidHidalgo');
        } else if (location === 'Tulancingo') {
            interpretationButton.setAttribute('data-bs-target', '#interpretationModalPiramidTulancingo');
        }
    }

    // Cargar las gráficas de Hidalgo por defecto al iniciar la página
    window.onload = function() {
        updateGraphs();
    };
</script>









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
<!-- jquery-sparkline js -->
<script src="assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- sparkline init -->
<script src="assets/js/pages/sparklines.init.js"></script>

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
        function toggleDescription(showId, hideId, button) {
            var showElement = document.getElementById(showId);
            var hideElement = document.getElementById(hideId);
            var buttons = document.querySelectorAll('.mostrar');
            
            // Hide the other section
            hideElement.style.display = 'none';

            // Remove 'active' class from all buttons
            buttons.forEach(function(btn) {
                btn.classList.remove('actives');
            });
            
            // Toggle display of the selected section
            if (showElement.style.display === 'none' || showElement.style.display === '') {
                showElement.style.display = 'block';
                button.classList.add('actives'); // Add 'active' class to the clicked button
            } else {
                showElement.style.display = 'none';
                button.classList.remove('actives'); // Remove 'active' class if section is hidden
            }
        }
    </script>

</body>

</html>