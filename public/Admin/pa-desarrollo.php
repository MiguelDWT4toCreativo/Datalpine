<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Pachuca | DatAlpine</title>
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
<!-- Sección Desarrollo de Producto -->
<div class="container-fluid">
    <!-- start page title -->
    <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <div class="page-title-right">
                                <ol class="breadcrumb mb-sm-0 font-size-18">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Hidalgo</a></li>
                                    <li class="breadcrumb-item active">Pachuca</li>
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
                    <h1>Desarrollo de Producto</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>


    <div class="row">



        <!-- Gráfica 4: Distribución % de créditos por vivienda valor -->
<!-- Distribución % de créditos por vivienda valor -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución % de créditos por vivienda valor</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="yearSelectViviendaValor" onchange="showYearlyDataViviendaValor(this.value)">
                        <option value="">Seleccione un año</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalViviendaValor">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonViviendaValor" data-bs-toggle="modal" data-bs-target="#interpretationModalViviendaValor2022">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_vivienda_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataViviendaValor2022" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_vivienda_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataViviendaValor2023" style="display: none; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_vivienda_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataViviendaValor2024" style="display: none; min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalViviendaValor" tabindex="-1" aria-labelledby="descriptionModalLabelViviendaValor" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelViviendaValor">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica presenta una distribución porcentual de créditos otorgados para la adquisición de viviendas, clasificados por diferentes tipos de vivienda: Económica, Popular, Tradicional, Media, Residencial y Residencial Plus.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalViviendaValor2022" tabindex="-1" aria-labelledby="interpretationModalLabelViviendaValor2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelViviendaValor2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <p>La gráfica muestra una clara tendencia hacia la adquisición de viviendas de valor medio, concentrando el 38% de los créditos hipotecarios. Esto sugiere que la clase media es el motor principal del mercado inmobiliario. Si bien existe una demanda por viviendas de diferentes rangos de precios, como las residenciales 18% y tradicionales 22%, la categoría de "vivienda media" domina el mercado. Las viviendas económicas, popular y de lujo, con un 4%, 6% y 4% de los créditos respectivamente, representan segmentos más pequeños. Factores como el poder adquisitivo, las políticas gubernamentales y la disponibilidad de oferta influyen en esta distribución.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalViviendaValor2023" tabindex="-1" aria-labelledby="interpretationModalLabelViviendaValor2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelViviendaValor2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica muestra una clara tendencia hacia la adquisición de viviendas de valor medio, concentrando el <strong>39.97%</strong> de los créditos hipotecarios. Esto sugiere que la clase media es el motor principal del mercado inmobiliario. Si bien existe una demanda por viviendas de diferentes rangos de precios, como las residenciales (<strong>16.23%</strong>) y tradicionales (<strong>28.55%</strong>), la categoría de "vivienda media" domina el mercado.</p>

                <p>Las viviendas económicas, popular y residencial plus, con un <strong>4%</strong>, <strong>7.26%</strong> y <strong>4%</strong> de los créditos respectivamente, representan segmentos más pequeños. Factores como el poder adquisitivo, las políticas gubernamentales y la disponibilidad de oferta influyen en esta distribución.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalViviendaValor2024" tabindex="-1" aria-labelledby="interpretationModalLabelViviendaValor2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelViviendaValor2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica muestra una clara tendencia hacia la adquisición de viviendas de valor medio, concentrando el <strong>43.24%</strong> de los créditos hipotecarios. Esto sugiere que la clase media es el motor principal del mercado inmobiliario.</p>

                <p>Si bien existe una demanda por viviendas de diferentes rangos de precios, como las residenciales (<strong>22.64%</strong>) y tradicionales (<strong>21.86%</strong>), la categoría de "vivienda media" domina el mercado.</p>

                <p>Las viviendas económicas, popular y residencial plus, con un <strong>0.31%</strong>, <strong>8.49%</strong> y <strong>3.46%</strong> de los créditos respectivamente, representan segmentos más pequeños.</p>

                <p>Factores como el poder adquisitivo, las políticas gubernamentales y la disponibilidad de oferta influyen en esta distribución.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showYearlyDataViviendaValor(year) {
        // Ocultar todas las gráficas
        const years = ['2022', '2023', '2024'];
        years.forEach(y => {
            document.getElementById(`yearlyDataViviendaValor${y}`).style.display = 'none';
        });

        // Mostrar la gráfica correspondiente al año seleccionado
        if (year) {
            document.getElementById(`yearlyDataViviendaValor${year}`).style.display = 'block';
        }

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonViviendaValor');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalViviendaValor${year}`);
    }

    // Mostrar la gráfica del año 2022 por defecto al cargar la página
    window.onload = function() {
        showYearlyDataViviendaValor('2022');
    };
</script>


<!-- Gráfica 5: Distribución % de créditos por organismo -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución % de créditos por organismo</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="yearSelectOrganismo" onchange="showYearlyDataOrganismo(this.value)">
                        <option value="">Seleccione un año</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalOrganismo">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonOrganismo" data-bs-toggle="modal" data-bs-target="#interpretationModalOrganismo2022">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_organismo_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataOrganismo2022" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_organismo_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataOrganismo2023" style="display: none; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_creditos_organismo_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataOrganismo2024" style="display: none; min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalOrganismo" tabindex="-1" aria-labelledby="descriptionModalLabelOrganismo" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelOrganismo">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El diagrama de barras muestra la distribución porcentual de créditos otorgados por diferentes instituciones financieras como lo son INFONAVIT, CNBV, FOVISSTE y BANJERCITO durante un año especifico.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalOrganismo2022" tabindex="-1" aria-labelledby="interpretationModalLabelOrganismo2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelOrganismo2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Al observar la gráfica podemos deducir que INFONAVIT y CNBV dominan el mercado de créditos con un <strong>34.97%</strong> y <strong>42.91%</strong> respectivamente, son las instituciones que otorgaron la mayor cantidad de créditos en el periodo analizado. Esto sugiere que estas dos instituciones tienen una mayor participación en el mercado de créditos y son las preferidas por los solicitantes.</p>

                <p>FOVISSTE tiene una participación menor pero significativa con un <strong>21.6%</strong>, el FOVISSTE también otorgó una cantidad considerable de créditos, aunque en menor proporción que las dos instituciones anteriores. Esto indica que el FOVISSTE tiene una presencia importante en el mercado, pero en menor escala.</p>

                <p>BANJERCITO tiene una participación mínima o nula, esta última institución muestra un porcentaje de <strong>1%</strong>, lo que sugiere que su participación en el otorgamiento de créditos es prácticamente inexistente en el periodo analizado.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalOrganismo2023" tabindex="-1" aria-labelledby="interpretationModalLabelOrganismo2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelOrganismo2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Al observar la gráfica podemos deducir que INFONAVIT y CNBV dominan el mercado de créditos con un <strong>45.43%</strong> y <strong>34.42%</strong> respectivamente, son las instituciones que otorgaron la mayor cantidad de créditos en el periodo analizado. Esto sugiere que estas dos instituciones tienen una mayor participación en el mercado de créditos y son las preferidas por los solicitantes.</p>

                <p>FOVISSTE tiene una participación menor pero significativa con un <strong>18.26%</strong>, el FOVISSTE también otorgó una cantidad considerable de créditos, aunque en menor proporción que las dos instituciones anteriores. Esto indica que el FOVISSTE tiene una presencia importante en el mercado, pero en menor escala.</p>

                <p>BANJERCITO, INSUS y CONAVI tienen una participación mínima, estas tres últimas instituciones muestran un porcentaje alrededor del <strong>1%</strong>, lo que sugiere que su participación en el otorgamiento de créditos es prácticamente inexistente en el periodo analizado.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalOrganismo2024" tabindex="-1" aria-labelledby="interpretationModalLabelOrganismo2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelOrganismo2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Al observar la gráfica podemos deducir que existe dominancia de INFONAVIT y CNBV. Es evidente que el INFONAVIT y la CNBV son las instituciones que concentran la mayor parte de porcentajes de créditos otorgados con un <strong>48.77%</strong> y <strong>33.59%</strong> respectivamente. Estas dos entidades son las principales proveedoras de financiamiento a la población.</p>

                <p>FOVISSTE, aunque con una participación menor, también tiene una presencia significativa en el otorgamiento de créditos, alrededor del <strong>17.38%</strong>.</p>

                <p>BANJERCITO muestra una participación prácticamente nula con el <strong>0%</strong> en el otorgamiento de créditos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showYearlyDataOrganismo(year) {
        // Ocultar todas las gráficas
        const years = ['2022', '2023', '2024'];
        years.forEach(y => {
            document.getElementById(`yearlyDataOrganismo${y}`).style.display = 'none';
        });

        // Mostrar la gráfica correspondiente al año seleccionado
        if (year) {
            document.getElementById(`yearlyDataOrganismo${year}`).style.display = 'block';
        }

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonOrganismo');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalOrganismo${year}`);
    }

    // Mostrar la gráfica del año 2022 por defecto al cargar la página
    window.onload = function() {
        showYearlyDataOrganismo('2022');
    };
</script>


<!-- Gráfica: Estacionamientos -->
 <div class="row">
 <div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Estacionamientos</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="segmentSelectEstacionamientos" onchange="showSegmentDataEstacionamientos(this.value)">
                        <option value="general">General</option>
                        <option value="segmentos">Segmentos</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalEstacionamientos">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonEstacionamientos" data-bs-toggle="modal" data-bs-target="#interpretationModalEstacionamientosGeneral">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_estacionamientos.html" width="100%" height="400" frameborder="0" id="segmentDataEstacionamientosGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_estacionamientos.html" width="100%" height="400" frameborder="0" id="segmentDataEstacionamientosSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de baños</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="segmentSelectBanos" onchange="showSegmentDataBanos(this.value)">
                        <option value="general">General</option>
                        <option value="segmentos">Segmentos</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalBanos">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonBanos" data-bs-toggle="modal" data-bs-target="#interpretationModalBanosGeneral">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_banos.html" width="100%" height="400" frameborder="0" id="segmentDataBanosGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_banos.html" width="100%" height="400" frameborder="0" id="segmentDataBanosSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>
 </div>


<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalEstacionamientos" tabindex="-1" aria-labelledby="descriptionModalLabelEstacionamientos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelEstacionamientos">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El gráfico de pastel visualiza la distribución general de estacionamientos en el mercado inmobiliario. Cada porción del círculo representa un porcentaje correspondiente a un número específico de estacionamientos, proporcionando una visión clara de la prevalencia de diferentes configuraciones de estacionamiento en las propiedades.</p>
                <p>El gráfico de barras muestra la distribución detallada del número de casas con diferentes cantidades de estacionamientos, agrupadas por segmentos o categorías. Cada barra representa la cantidad de casas que tienen un número específico de estacionamientos dentro de un segmento determinado. Los diferentes colores se utilizan para distinguir entre los distintos números de estacionamientos, facilitando la comparación visual entre segmentos y configuraciones de estacionamiento.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalEstacionamientosGeneral" tabindex="-1" aria-labelledby="interpretationModalLabelEstacionamientosGeneral" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelEstacionamientosGeneral">Interpretación General</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En el mercado inmobiliario de Pachuca de Soto un porcentaje importante de viviendas cuenta con <strong>2</strong> estacionamientos, con el <strong>52.4%</strong> de participación, lo que sugiere que este número de estacionamientos es una media en la ciudad.</p>

                <p>Las viviendas que poseen <strong>1</strong> estacionamiento representan un <strong>32.4%</strong>, hay que tener en cuenta que este número es estándar, todas las viviendas deben tener al menos un estacionamiento.</p>

                <p>Por otra parte, las propiedades que tienen espacio para <strong>3</strong> lugares de estacionamiento representan <strong>8.29%</strong>.</p>

                <p>Finalmente, para el resto de las categorías el porcentaje de participación es mucho menor, lo que implica que hay exclusividad para las propiedades con más de <strong>3</strong> estacionamientos, estas pueden ser las que tienen más espacio.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalEstacionamientosSegmentos" tabindex="-1" aria-labelledby="interpretationModalLabelEstacionamientosSegmentos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelEstacionamientosSegmentos">Interpretación Segmentos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Es notorio que el segmento S es el que mayor concentración de propiedades con <strong>5</strong> estacionamientos, lo que es congruente con la categoría, ya que las casas de este segmento se encuentran en un rango de precio alto, de <strong>4</strong> millones a <strong>12</strong> millones.</p>

                <p>Por su parte, los segmentos A y B son los que poseen una cantidad importante en casas con <strong>1</strong> o <strong>2</strong> estacionamientos, estas casas son consideradas de un precio medio, donde las familias de Pachuca de Soto pueden acceder a ellas.</p>

                <p>Finalmente, el resto de las categorías presentan una distribución de estacionamientos más equilibrada.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showSegmentDataEstacionamientos(segment) {
        // Ocultar todas las gráficas
        document.getElementById('segmentDataEstacionamientosGeneral').style.display = 'none';
        document.getElementById('segmentDataEstacionamientosSegmentos').style.display = 'none';

        // Mostrar la gráfica correspondiente a la opción seleccionada
        if (segment) {
            document.getElementById(`segmentDataEstacionamientos${segment.charAt(0).toUpperCase() + segment.slice(1)}`).style.display = 'block';
        }

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonEstacionamientos');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalEstacionamientos${segment.charAt(0).toUpperCase() + segment.slice(1)}`);
    }

    // Mostrar la gráfica "General" por defecto al cargar la página
    window.onload = function() {
        showSegmentDataEstacionamientos('general');
    };
</script>


<!-- Gráfica: Distribución de baños [V2] -->


<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalBanos" tabindex="-1" aria-labelledby="descriptionModalLabelBanos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelBanos">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Se muestra la distribución de los segmentos de acuerdo a la cantidad de baños con la que cuenta cada uno. Cada barra representa la cantidad de casas que tienen un número específico de baños para un segmento determinado.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalBanosGeneral" tabindex="-1" aria-labelledby="interpretationModalLabelBanosGeneral" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelBanosGeneral">Interpretación General</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Interpretación:</strong> Es notorio que la mayor parte de las propiedades de <strong>Pachuca de Soto</strong> poseen principalmente entre <strong>1</strong> (<strong>27.9%</strong>), <strong>2</strong> (<strong>26.8%</strong>), <strong>3</strong> (<strong>23.3%</strong>)  baños, esto representa más de la mitad de todo el mercado inmobiliario e implica que estas propiedades con menor cantidad de baños sean las que tienen un precio asequible. . Por otro lado, en menor representación están las propiedades que poseen <strong>4</strong>(<strong>13.5%</strong>), <strong>5</strong> (<strong>6.26%</strong>), <strong>6</strong> (<strong>1.61%</strong>), <strong>7</strong> (<strong>0.39%</strong>), <strong>8</strong> (<strong>1.24%</strong>) baños,  dada estas cantidades se puede intuir que son propiedades con un valor más alto.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalBanosSegmentos" tabindex="-1" aria-labelledby="interpretationModalLabelBanosSegmentos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelBanosSegmentos">Interpretación Segmentos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Para las primeras cantidades de baños (1, 2, y 3) es notorio que las abarcan los segmentos E, D y C, lo que es correspondiente al rango de precios que tienen estos segmentos, donde el número de baños está relacionado al precio de las propiedades. Por su parte, a medida que aumentan los baños también lo hace la concentración de propiedades de los segmentos más altos, a partir 4, 5, 6 los segmentos mayor participación tienen son el B, A y S, los precios de estas propiedades son considerados de medio-alto.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showSegmentDataBanos(segment) {
        // Ocultar todas las gráficas
        document.getElementById('segmentDataBanosGeneral').style.display = 'none';
        document.getElementById('segmentDataBanosSegmentos').style.display = 'none';

        // Mostrar la gráfica correspondiente a la opción seleccionada
        if (segment) {
            document.getElementById(`segmentDataBanos${segment.charAt(0).toUpperCase() + segment.slice(1)}`).style.display = 'block';
        }

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonBanos');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalBanos${segment.charAt(0).toUpperCase() + segment.slice(1)}`);
    }

    // Mostrar la gráfica "General" por defecto al cargar la página
    window.onload = function() {
        showSegmentDataBanos('general');
    };
</script>

<div class="row">
    <!-- Gráfica: Recámaras -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Recámaras</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="segmentSelectRecamaras" onchange="showSegmentDataRecamaras(this.value)">
                    <option value="segmentos">Segmentos</option>
                    <option value="general">General</option>                        
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalRecamaras">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonRecamaras" data-bs-toggle="modal" data-bs-target="#interpretationModalRecamarasGeneral">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_recamaras.html" width="100%" height="400" frameborder="0" id="segmentDataRecamarasGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_recamaras.html" width="100%" height="400" frameborder="0" id="segmentDataRecamarasSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Gráfica: Distribución m2 construidos -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución m2 construidos</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="segmentSelectM2Construidos" onchange="showSegmentDataM2Construidos(this.value)">
                        <option value="general">General</option>
                        <option value="segmentos">Segmentos</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalM2Construidos">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonM2Construidos" data-bs-toggle="modal" data-bs-target="#interpretationModalM2ConstruidosGeneral">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_dist_m2_construidos.html" width="100%" height="400" frameborder="0" id="segmentDataM2ConstruidosGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_dist_m2_construidos.html" width="100%" height="400" frameborder="0" id="segmentDataM2ConstruidosSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

</div>


<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalRecamaras" tabindex="-1" aria-labelledby="descriptionModalLabelRecamaras" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelRecamaras">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El gráfico de pastel muestra los porcentajes del número de recámaras en un conjunto de propiedades, divididas en diferentes segmentos. Cada porción del círculo representa un porcentaje de propiedades con un número específico de recámaras, y los colores se utilizan para diferenciar cada categoría.</p>
                
                <p>El gráfico de barras muestra la distribución de la cantidad de casas que tienen un determinado número de recámaras, agrupadas por segmentos. Cada barra representa la cantidad de casas que tienen un número específico de recámaras para un segmento determinado. Los diferentes colores representan el número de recámaras.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalRecamarasGeneral" tabindex="-1" aria-labelledby="interpretationModalLabelRecamarasGeneral" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelRecamarasGeneral">Interpretación General</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Con un <strong>41.7%</strong> de participación, las viviendas con 2 recámaras representan la categoría más frecuente, lo que sugiere que es común encontrar propiedades con este número de habitaciones en este conjunto de datos. Esto podría indicar que se trata de propiedades diseñadas para familias medianas.</p>

                <p>Las categorías restantes presentan porcentajes mucho menores, lo que sugiere que son opciones menos frecuentes. Es posible que estas categorías representen propiedades más pequeñas (1 o 2 recámaras) o más grandes (4, 5 o 6 recámaras), que podrían ser adecuadas para personas solteras, parejas o familias numerosas.</p>

                <p>Esta distribución puede ser debido a que las propiedades con más recámaras suelen ser más caras. Sin embargo, esto puede variar dependiendo de otros factores como la ubicación, la antigüedad y las características de la propiedad.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalRecamarasSegmentos" tabindex="-1" aria-labelledby="interpretationModalLabelRecamarasSegmentos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelRecamarasSegmentos">Interpretación Segmentos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Los segmentos C, D y B presentan la mayor cantidad de casas con 3 recámaras, lo que sugiere que en este segmento predominan las casas de mayor tamaño y podría ser por la distribución del número de recámaras puede reflejar el tamaño promedio de las familias que habitan en cada segmento, lo cual en este segmento podría predominar las familias grandes que requieran de una casa con 3 recamaras. Los segmentos A, E y S segmentos presentan una distribución más equilibrada entre el número de recámaras, aunque se observa una tendencia hacia casas con 2 o 3 recámaras en algunos casos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showSegmentDataRecamaras(segment) {
        // Ocultar todas las gráficas
        document.getElementById('segmentDataRecamarasGeneral').style.display = 'none';
        document.getElementById('segmentDataRecamarasSegmentos').style.display = 'none';

        // Mostrar la gráfica correspondiente a la opción seleccionada
        if (segment) {
            document.getElementById(`segmentDataRecamaras${segment.charAt(0).toUpperCase() + segment.slice(1)}`).style.display = 'block';
        }

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonRecamaras');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalRecamaras${segment.charAt(0).toUpperCase() + segment.slice(1)}`);
    }

    // Mostrar la gráfica "General" por defecto al cargar la página
    window.onload = function() {
        showSegmentDataRecamaras('general');
    };
</script>


        <!-- Gráfica 9: g_bar_dist_m2_construidos -->


<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalM2Construidos" tabindex="-1" aria-labelledby="descriptionModalLabelM2Construidos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelM2Construidos">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>El gráfico de pastel muestra la distribución porcentual de diferentes rangos de metros cuadrados de construcción. Cada porción del círculo representa un porcentaje de un rango específico de metros cuadrados, y los colores se utilizan para diferenciar cada categoría.</p>
                
                <p>El grafico de barras muestra la distribución de la cantidad de casas en diferentes rangos de metros cuadrados de construcción, agrupadas por segmentos. Cada barra representa la cantidad de casas dentro de un rango específico. Los diferentes colores representan los diferentes rangos de metros cuadrados.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalM2ConstruidosGeneral" tabindex="-1" aria-labelledby="interpretationModalLabelM2ConstruidosGeneral" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelM2ConstruidosGeneral">Interpretación General</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Observamos una distribución bastante equilibrada entre los diferentes rangos de superficie. No hay un rango que domine significativamente sobre los demás. La presencia de todos los rangos, desde los más pequeños (<strong>0-100 m²</strong>) hasta los más grandes (<strong>300+ m²</strong>), indica una oferta inmobiliaria bastante diversificada. Esto sugiere que el mercado puede satisfacer las necesidades de diferentes tipos de compradores, desde aquellos que buscan viviendas pequeñas y económicas hasta quienes requieren espacios más amplios.</p>

                <p>Sin embargo, los rangos de <strong>100-150 m²</strong> (<strong>23.2%</strong>) y <strong>200-250 m²</strong> (<strong>19.1%</strong>) concentran una porción considerable del total, lo que sugiere que hay una cantidad significativa de propiedades con tamaños medios. Además, los rangos de <strong>150-200 m²</strong> concentran una distribución considerable con el <strong>19%</strong>, lo que es bastante significativo. Esto podría indicar una demanda en el mercado por inmuebles de dimensiones intermedias, que puedan adaptarse a las necesidades de familias medianas o pequeñas.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalM2ConstruidosSegmentos" tabindex="-1" aria-labelledby="interpretationModalLabelM2ConstruidosSegmentos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelM2ConstruidosSegmentos">Interpretación Segmentos</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Es notorio que el segmento S es el que concentra una cantidad significativa de propiedades en un rango de más de <strong>300</strong> metros cuadrados, esto se debe a que las propiedades que están dentro de estos segmentos tienen un rango de precio elevado, de <strong>4</strong> millones hasta <strong>12</strong> millones de pesos, es decir son consideradas de gama alta.</p>

                <p>En su contraparte, el segmento E es el que tiene propiedades con un rango de metros de construcción mayormente en el rango de <strong>0</strong> a <strong>100</strong> metros de construcción, esto muestra la relación que hay entre metros de construcción y el precio que hay en el mercado inmobiliario de Pachuca de Soto.</p>

                <p>En el segmento D se puede notar que hay una concentración propiedades de un tamaño de entre <strong>0</strong> a <strong>150</strong> metros cuadrados de construcción, esto corresponde al precio que tiene el segmento de <strong>1M</strong> a <strong>1.75M</strong> pesos.</p>

                <p>En lo que corresponde a los segmentos C, B, A la concentración de propiedades se encuentra de <strong>100</strong> a <strong>150</strong>, <strong>150</strong> a <strong>200</strong> y de <strong>200</strong> a <strong>250</strong> metros cuadrados, respectivamente.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showSegmentDataM2Construidos(segment) {
        // Ocultar todas las gráficas
        document.getElementById('segmentDataM2ConstruidosGeneral').style.display = 'none';
        document.getElementById('segmentDataM2ConstruidosSegmentos').style.display = 'none';

        // Mostrar la gráfica correspondiente a la opción seleccionada
        if (segment) {
            document.getElementById(`segmentDataM2Construidos${segment.charAt(0).toUpperCase() + segment.slice(1)}`).style.display = 'block';
        }

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonM2Construidos');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalM2Construidos${segment.charAt(0).toUpperCase() + segment.slice(1)}`);
    }

    // Mostrar la gráfica "General" por defecto al cargar la página
    window.onload = function() {
        showSegmentDataM2Construidos('general');
    };
</script>

<!-- Gráfica 12: Precio Promedio por m2 -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Precio Promedio por m²</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal12">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal12">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_PrecioPromedio_m2.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal12" tabindex="-1" aria-labelledby="descriptionModalLabel12" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel12">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica muestra el precio promedio por metro cuadrado (m²) de las propiedades en Pachuca de Soto. Esta métrica es útil para evaluar cómo varía el precio del terreno o de la construcción en diferentes zonas o segmentos del mercado inmobiliario, lo cual ayuda a compradores y desarrolladores a tomar decisiones informadas sobre inversión. Los valores presentados reflejan el costo relativo por metro cuadrado en cada periodo evaluado.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModal12" tabindex="-1" aria-labelledby="interpretationModalLabel12" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel12">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Este rango presenta el precio promedio por metro cuadrado más alto, lo que indica que las propiedades con un tamaño mayores a 300 metros cuadrados son, en promedio, las más caras por metro cuadrado, esto podría ser debido a que las propiedades más grandes suelen ubicarse en zonas más exclusivas o con mayor demanda, lo que podría justificar precios más altos por metro cuadrado. Los demás rangos presentan precios promedio ligeramente inferiores, aunque la diferencia entre ellos no es muy significativa esto podría ser por construir una propiedad más grande puede resultar en costos unitarios más bajos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>


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