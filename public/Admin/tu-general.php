<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Tulancingo | DatAlpine</title>
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hidalgo</a></li>
                                    <li class="breadcrumb-item active">Tulancingo</li>
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
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

<!-- Sección Proyección y Forecast -->
<div class="container-fluid">
    <div class="row">

<!-- Gráfica: Distribución de créditos por segmento -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución por segmento</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalSegmento">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalSegmento">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_dist_segmentos.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalSegmento" tabindex="-1" aria-labelledby="descriptionModalLabelSegmento" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelSegmento">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Distribución de segmentos. Conoce la participación en el mercado inmobiliario por segmentos <strong>(E, D, C, B, A, S, L)</strong>. Cada sección representa el porcentaje o proporción en ese segmento específico en relación con el total.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModalSegmento" tabindex="-1" aria-labelledby="interpretationModalLabelSegmento" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelSegmento">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En Tulancingo de Bravo, el segmento inmobiliario con mayor presencia es el E, que abarca más del <strong>35%</strong> del mercado. Dentro de este, el segmento E2 destaca con una participación del <strong>18.44%</strong>, lo que sugiere que es un mercado amplio para una parte de la población.</p>
                <p>El segundo segmento más relevante es el D, con poco más del <strong>25%</strong> del mercado, donde la segmento D3 tiene un <strong>10.42%</strong>. Esto refleja la existencia de un mercado inmobiliario más accesible en el estado, indicando la presencia de un sector de la población con un poder adquisitivo menor.</p>
                <p>En conjunto, estos datos demuestran la diversidad del mercado inmobiliario en Querétaro que cubre diferentes segmentos poblacionales.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Proyección Poblacional</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalPoblacion">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalPoblacion">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/compartidas/assets/graficas/g_bar_proy_poblacion_hgo.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalPoblacion" tabindex="-1" aria-labelledby="descriptionModalLabelPoblacion" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelPoblacion">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                El gráfico de barras muestra una estimación del crecimiento de la población en la ciudad para los próximos años. Cada barra representa un año y su altura indica el numero de personas que se esperan vivan en determinada región cada año. Las barras que se extienden hacia arriba indican un aumento en el número de personas, mientras que las que se extienden hacia abajo indican una disminución de las mismas. 
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModalPoblacion" tabindex="-1" aria-labelledby="interpretationModalLabelPoblacion" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelPoblacion">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    A lo largo de los años que se analizan se revela un crecimiento progresivo en Hidalgo para los próximos años. En 2021 Hidalgo contaba con una población total aproximada de <strong>3,144,514</strong>, y para 2027 se proyecta que esta población aumentará a <strong>3,350,825</strong>. Este crecimiento de la población propone un escenario favorecedor para Hidalgo, ya que influye directamente en la demanda de viviendas, lo que podría ser una oportunidad para la construcción de nuevos proyectos inmobiliarios. Además de que, la dinámica económica que hay en la zona también tiene impacto debido a la distribución de edades, ingresos y estilo de vida que trae el crecimiento demográfico.
                </p>
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
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalSegmento">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonSegmento" data-bs-toggle="modal" data-bs-target="#interpretationModal2022">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_dist_creditos_segmento_2022.html" width="100%" height="400" frameborder="0" id="segmentoData2022" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_dist_creditos_segmento_2023.html" width="100%" height="400" frameborder="0" id="segmentoData2023" style="display: none; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_dist_creditos_segmento_2024.html" width="100%" height="400" frameborder="0" id="segmentoData2024" style="display: none; min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalSegmento" tabindex="-1" aria-labelledby="descriptionModalLabelSegmento" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelSegmento">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Se muestra la distribución de créditos en segmentos de precios de inmuebles. Esta gráfica permite identificar las tendencias en la concesión de créditos según el valor de las propiedades. Una mayor concentración de créditos en un segmento indica una preferencia por inmuebles de ese rango de precio.</p>
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
                <h5 class="modal-title" id="interpretationModalLabel2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El predominio de los créditos en el segmento <strong>E</strong> (<strong>68.7%</strong>) refleja una alta demanda por propiedades de menor precio, donde hay una oferta considerable de inmuebles más accesibles; lo cual puede estar relacionado con el nivel adquisitivo de la mayoría de la población en <strong>Tulancingo de Bravo</strong> y la estructura del mercado inmobiliario. Esto puede explicarse también por la composición económica de la ciudad, que cuenta con una fuerte participación de sectores como la industria manufacturera, comercio, servicios y construcción; lo que genera una clase trabajadora enfocada en propiedades de bajo a mediano costo. El segmento <strong>S</strong>, a pesar de ser más costoso, representa un <strong>0.63%</strong> de los créditos, lo cual indica un nicho de mercado de alta gama, probablemente impulsado por una pequeña élite económica.</p>
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
                <h5 class="modal-title" id="interpretationModalLabel2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El segmento <strong>E</strong> continúa siendo el mayor receptor de créditos en <strong>2023</strong>, con un <strong>65.1%</strong>, lo que sugiere que sigue existiendo una fuerte demanda por propiedades más económicas. Esto puede estar relacionado con los niveles de ingresos predominantes en la región y una oferta inmobiliaria enfocada en propiedades accesibles para la clase trabajadora de <strong>Pachuca de Soto</strong>. Sin embargo, la estabilidad del segmento <strong>S</strong>, que recibe el <strong>0.96%</strong> de los créditos, indica la persistencia de un mercado de alta gama, probablemente dirigido a inversionistas o un grupo que percibe mayores ingresos.</p>
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
                <p>El segmento <strong>E</strong> sigue siendo el más demandado con el <strong>73.6%</strong> de los créditos, pero muestra una tendencia a la baja en comparación con años anteriores. Este descenso podría estar relacionado con un aumento en los precios inmobiliarios, lo que empuja la demanda hacia propiedades de mayor valor. El crecimiento del segmento <strong>D</strong> (<strong>16.2%</strong>) y <strong>C</strong> (<strong>4.57%</strong>) refleja una posible mejora en el poder adquisitivo o un incremento en las inversiones en propiedades de rango medio. El segmento <strong>S</strong> (<strong>1.02%</strong>) mantiene un mercado estable para propiedades de lujo, sugiriendo una demanda sostenida en el nicho de alto valor.</p>
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
        // Ocultar todas las gráficas
        document.getElementById('segmentoData2022').style.display = 'none';
        document.getElementById('segmentoData2023').style.display = 'none';
        document.getElementById('segmentoData2024').style.display = 'none';

        // Mostrar la gráfica correspondiente al año seleccionado
        document.getElementById(`segmentoData${year}`).style.display = 'block';

        // Cambiar el modal de interpretación según el año seleccionado
        document.getElementById('interpretationButtonSegmento').setAttribute('data-bs-target', `#interpretationModal${year}`);
    }

    // Mostrar la gráfica de 2022 por defecto al cargar la página
    window.onload = function() {
        showSegmentoData('2022');
    };
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_precio_segmento_tendencia.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>El gráfico de barras muestra las tendencias de precios para diferentes segmentos (<strong>A</strong>, <strong>B</strong>, <strong>C</strong>, <strong>D</strong>, <strong>E</strong>, <strong>S</strong> y <strong>L</strong>). Cada barra representa un segmento y su altura indica el <strong>porcentaje de cambio</strong> en el precio de ese segmento. Las barras que se extienden hacia arriba indican un <strong>aumento</strong> en el precio, mientras que las que se extienden hacia abajo indican una <strong>disminución</strong>.</p>
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
            <p>
                <strong>Variabilidad en los segmentos:</strong> Los diferentes segmentos muestran comportamientos de precios bastante distintos. La mayoría de los segmentos presentan una reducción en sus precios, lo que sugiere una tendencia general a la baja.
            </p>
            <p>
                El <strong>segmento A</strong> experimenta una disminución mínima en el precio (<strong>-0.32%</strong>), siendo la menor de todas. El <strong>segmento B</strong> presenta un decrecimiento ligeramente mayor (<strong>-0.73%</strong>) en comparación con el segmento A. El <strong>segmento C</strong> muestra una disminución superior en el precio (<strong>-2.18%</strong>), lo que indica una baja significativa.
            </p>
            <p>
                El <strong>segmento S</strong> presenta un aumento modesto en su precio (<strong>0.77%</strong>), destacándose como el primero con una tendencia al alza. El <strong>segmento E</strong> muestra un aumento en el precio (<strong>2.96%</strong>), aunque no tan pronunciado como el del <strong>segmento D</strong> (<strong>4.08%</strong>), siendo este último el que muestra el mayor aumento de todos.
            </p>
            <p>
                El <strong>segmento L</strong> no presenta cambio en sus precios.
            </p>

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
                        <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_profesiones.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_creditos_genero.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>El gráfico de pastel muestra los créditos otorgados según el género del solicitante. Se divide en dos secciones principales:</p>
                <ul>
                    <li><strong>Hombres:</strong> Representado por el color morado, abarca el <strong>53.7%</strong> del total de créditos otorgados.</li>
                    <li><strong>Mujeres:</strong> Representado por el color rojo, corresponde al <strong>46.3%</strong> del total de créditos otorgados.</li>
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
                <p>De acuerdo con el gráfico, las <strong>mujeres</strong> representan una menor proporción de los solicitantes de créditos en comparación con los <strong>hombres</strong>. Esto significa que los <strong>hombres</strong> tienden a solicitar y obtener créditos con mayor frecuencia. Esto podría ser gracias a que los factores socioeconómicos, como los <strong>ingresos</strong>, el <strong>empleo</strong> y la <strong>educación</strong>, pueden influir en la capacidad de las <strong>mujeres</strong> para acceder al crédito. Históricamente, las <strong>mujeres</strong> han tenido menores <strong>ingresos</strong> y menos oportunidades laborales, lo que podría limitar su acceso a productos financieros.</p>
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
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalCategoria">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonCategoria" data-bs-toggle="modal" data-bs-target="#creditSegmentationModal2022">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_dist_creditos_segmento_percent_2022.html" width="100%" height="400" frameborder="0" id="categoriaData2022" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_dist_creditos_segmento_percent_2023.html" width="100%" height="400" frameborder="0" id="categoriaData2023" style="display: none; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_dist_creditos_segmento_percent_2024.html" width="100%" height="400" frameborder="0" id="categoriaData2024" style="display: none; min-height: 430px; border: 0;"></iframe>
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
                <p>El gráfico de barras muestra el <strong>porcentaje</strong> de créditos otorgados por diferentes categorías (<strong>A</strong>, <strong>B</strong>, <strong>C</strong>, <strong>D</strong>, <strong>E</strong>, <strong>L</strong>, <strong>S</strong>, <strong>Elite</strong>) a lo largo de <strong>cuatro trimestres</strong>. Cada barra representa una categoría, y las diferentes secciones de cada barra corresponden a los <strong>porcentajes</strong> de créditos otorgados en cada trimestre.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2022 -->
<div class="modal fade" id="creditSegmentationModal2022" tabindex="-1" aria-labelledby="creditSegmentationModalLabel2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="creditSegmentationModalLabel2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Dominancia de la categoría E:</strong> A lo largo de los cuatro trimestres, la categoría E concentra la mayor proporción de créditos otorgados. Esto sugiere que esta categoría representa un segmento de mercado o tipo de crédito particularmente relevante para la entidad financiera.</p>
                <p><strong>Categoría E:</strong> Como se mencionó anteriormente, esta categoría es la más relevante en términos de volumen de créditos otorgados. Su participación relativamente estable a lo largo del tiempo sugiere una demanda constante por este tipo de crédito.</p>
                <p><strong>Categoría D:</strong> La categoría D también presenta una participación significativa y relativamente estable. Esto podría indicar que representa un segmento de mercado complementario al de la categoría E.</p>
                <p><strong>Categorías A, B, L, C y S:</strong> Estas categorías presentan una participación menor y más variable en comparación con las categorías E y D. Las fluctuaciones en sus porcentajes podrían estar relacionadas con factores específicos de cada categoría, como cambios en las políticas de crédito, condiciones económicas o preferencias de los clientes.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2023 -->
<div class="modal fade" id="creditSegmentationModal2023" tabindex="-1" aria-labelledby="creditSegmentationModalLabel2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="creditSegmentationModalLabel2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En este año, se observó un aumento en la participación de las categorías <strong>C</strong> y <strong>B</strong>, lo que sugiere un crecimiento en la demanda por propiedades de rango medio. La categoría <strong>E</strong> sigue siendo importante, pero con una leve disminución en comparación con <strong>2022</strong>. Este cambio puede reflejar una mayor capacidad adquisitiva de los compradores o una recuperación económica más marcada.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation 2024 -->
<div class="modal fade" id="creditSegmentationModal2024" tabindex="-1" aria-labelledby="creditSegmentationModalLabel2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="creditSegmentationModalLabel2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Para <strong>2024</strong>, la tendencia muestra un aumento notable en los créditos otorgados en la categoría <strong>A</strong>, lo que sugiere una mayor demanda por propiedades de lujo. Esto puede estar relacionado con un crecimiento económico más sostenido y una mayor inversión en inmuebles de alto valor. Las categorías <strong>E</strong> y <strong>D</strong> han disminuido su participación, lo que podría indicar un cambio en las preferencias del mercado hacia propiedades más exclusivas.</p>
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
        // Ocultar todas las gráficas
        document.getElementById('categoriaData2022').style.display = 'none';
        document.getElementById('categoriaData2023').style.display = 'none';
        document.getElementById('categoriaData2024').style.display = 'none';

        // Mostrar la gráfica correspondiente al año seleccionado
        document.getElementById(`categoriaData${year}`).style.display = 'block';

        // Actualizar el botón de interpretación según el año seleccionado
        const interpretationButton = document.getElementById('interpretationButtonCategoria');
        interpretationButton.setAttribute('data-bs-target', `#creditSegmentationModal${year}`);
    }

    // Mostrar la gráfica de 2022 por defecto al cargar la página
    window.onload = function() {
        showCategoriaData('2022');
    };
</script>




<!-- Columna completa: g_bar_tiempoventa_total -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Tiempo estimado total de venta</h5>
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_tiempoventa_total.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>El gráfico de barras representa el tiempo estimado de venta de propiedades en función de su antigüedad. Cada barra corresponde a un rango de antigüedad (medido en meses) y su altura indica el número de casas vendidas dentro de ese rango.</p>
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
                <p>Las propiedades que han estado menos tiempo en el mercado (de 7 a 10 meses) representan la mayor cantidad, con <strong>75</strong>, <strong>76</strong>, <strong>88</strong> y <strong>67</strong> viviendas, respectivamente. Esto puede deberse a la alta demanda inmobiliaria en <strong>Tulancingo</strong>, que ha crecido gracias a la expansión industrial.</p>
                <p>Las propiedades con antigüedad media (11 a 15 meses) muestran una caída progresiva, con <strong>35</strong>, <strong>39</strong>, <strong>26</strong> y <strong>17</strong> viviendas, lo que podría indicar que las viviendas que no se venden en el primer año tienden a perder atractivo debido a la oferta continua de opciones más nuevas y mejor ubicadas.</p>
                <p>Por último, las viviendas que han permanecido más tiempo en el mercado (de 16 meses a más de 24 meses) muestran los valores más bajos, con solo <strong>7</strong>, <strong>13</strong> y <strong>29</strong> propiedades, respectivamente. Esta baja absorción puede ser reflejo de una saturación del mercado o de precios por encima de la capacidad adquisitiva de los compradores locales, una ciudad donde el crecimiento acelerado ha generado un mercado inmobiliario con segmentos de difícil acceso para ciertas poblaciones.</p>
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
            <h5 class="card-title subtitle mb-3 text-center">Meses de Antigüedad</h5>
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_tiempoventa.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>El gráfico de barras muestra el tiempo estimado de venta de propiedades en diferentes segmentos (<strong>A</strong>, <strong>B</strong>, <strong>C</strong>, <strong>D</strong>, <strong>E</strong> y <strong>S</strong>). Cada grupo de barras representa un segmento y las barras individuales dentro de cada grupo corresponden a diferentes <strong>meses</strong> de antigüedad de las propiedades. La altura de cada barra indica el <strong>número</strong> de casas vendidas en ese segmento y con ese tiempo de antigüedad.</p>
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
                <p>Los segmentos de menor valor, como el segmento <strong>"E"</strong> (económico) y el <strong>"D"</strong> (popular), concentran la mayor cantidad de propiedades con tiempos de venta entre <strong>7</strong> y <strong>10</strong> <strong>meses</strong>, principalmente <strong>9</strong> <strong>meses</strong> para el segmento <strong>D</strong>, lo que sugiere una alta demanda por viviendas más accesibles, en parte impulsada por la disponibilidad de créditos y la composición sociodemográfica local, que incluye una población mayormente de ingresos medios y bajos. Por otro lado, segmentos de precio intermedio, como <strong>"C"</strong> y <strong>"B"</strong>, presentan tiempos de venta más variables, con picos en antigüedad de <strong>10</strong> a <strong>12</strong> <strong>meses</strong>, reflejando una menor estabilidad en la demanda de propiedades de este rango de precio.</p>
                <p>Para los segmentos de mayor valor, como <strong>"S"</strong> y <strong>"L"</strong>, el tiempo de venta tiende a prolongarse debido a la baja proporción de compradores con suficiente capacidad económica para adquirir propiedades de alta gama en <strong>Tulancingo</strong>. Además, factores como la falta de infraestructura de lujo en la ciudad y la concentración de personas con altos ingresos en municipios vecinos como <strong>Pachuca</strong> podrían estar limitando la absorción de propiedades residenciales premium en estos segmentos.</p>
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
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Tulancingo">Tulancingo</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalPiramid">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonPiramid" data-bs-toggle="modal">Interpretación</button>
                </div>
            </div>

            <!-- Espacios para los dos iframes -->
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/compartidas/assets/graficas/g_piramid_poblacion_hgo.html" width="100%" height="400" frameborder="0" id="iframeHidalgo" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_piramid_poblacion.html" width="100%" height="400" frameborder="0" id="iframeTulancingo" style="display: none; min-height: 430px; border: 0;"></iframe>
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
                <h5 class="modal-title" id="interpretationModalLabelHidalgo">Interpretación Hidalgo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En la pirámide poblacional de <strong>Hidalgo</strong>, se observa una distribución mayoritaria en los rangos de <strong>20 a 49 años</strong>, lo que indica una población en edad productiva. Este grupo es clave para la demanda de viviendas y desarrollo inmobiliario en la región.</p>
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
                <h5 class="modal-title" id="interpretationModalLabelTulancingo">Interpretación Tulancingo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En la pirámide poblacional de <strong>Tulancingo de Bravo</strong>, se observa una mayor concentración en el rango de <strong>15 a 19 años</strong>, pero también una fuerte presencia en el rango de <strong>20 a 49 años</strong>, lo que representa una alta demanda potencial de viviendas en la región.</p>
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