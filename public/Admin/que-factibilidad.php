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
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <div class="page-title-right">
                                <ol class="breadcrumb mb-sm-0 font-size-18">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Querétaro</a></li>
                                    <li class="breadcrumb-item active">Santiago de Querétaro

                                    </li>
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
                    <h1>Factibilidad y viabilidad</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                    actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                    transformaciones, tendencias y precios a lo largo del tiempo.</p>

<!-- Sección Créditos y Viviendas -->
<div class="container-fluid">
    <div class="row">
        <!-- Columna completa: Promedio de valor de Créditos para casas nueva y para vivienda usada -->
        <div class="container-fluid">
            <div class="row">

                <!-- Distribución de créditos por monto -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title subtitle mb-3 text-center">Promedio de valor de Créditos para casas nueva y para vivienda usada</h5>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-user-tie me-2"></i>
                                    <span class="developer-label">Desarrollador</span>
                                </div>
                                <div class="mb-3">
                                    <select class="form-select" id="yearSelect" onchange="showYearlyData(this.value)">
                                        <option value="">Seleccione un año</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal1">Descripción</button>
                                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButton" data-bs-toggle="modal">Interpretación</button>
                                </div>
                            </div>
                            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_creditos_nuevausada_2019.html" width="100%" height="400" frameborder="0" id="yearlyData2019" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_creditos_nuevausada_2020.html" width="100%" height="400" frameborder="0" id="yearlyData2020" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_creditos_nuevausada_2021.html" width="100%" height="400" frameborder="0" id="yearlyData2021" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_creditos_nuevausada_2022.html" width="100%" height="400" frameborder="0" id="yearlyData2022" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_creditos_nuevausada_2023.html" width="100%" height="400" frameborder="0" id="yearlyData2023" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_creditos_nuevausada_2024.html" width="100%" height="400" frameborder="0" id="yearlyData2024" style="display: none;"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modals -->
        <div class="modal fade" id="descriptionModal1" tabindex="-1" aria-labelledby="descriptionModalLabel1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descriptionModalLabel1">Descripción</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Agregar contenido de descripción aquí -->
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="interpretationModal2019" tabindex="-1" aria-labelledby="interpretationModalLabel2019" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel2019">Interpretación 2019</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Agregar interpretación para 2019 aquí -->
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="interpretationModal2020" tabindex="-1" aria-labelledby="interpretationModalLabel2020" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel2020">Interpretación 2020</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Agregar interpretación para 2020 aquí -->
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="interpretationModal2021" tabindex="-1" aria-labelledby="interpretationModalLabel2021" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel2021">Interpretación 2021</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Agregar interpretación para 2021 aquí -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Repite el modal de interpretación para los otros años -->

        <script>
            function showYearlyData(year) {
                // Ocultar todas las gráficas
                const years = ['2019', '2020', '2021', '2022', '2023', '2024'];
                years.forEach(y => {
                    document.getElementById(`yearlyData${y}`).style.display = 'none';
                });

                // Mostrar la gráfica correspondiente al año seleccionado
                if (year) {
                    document.getElementById(`yearlyData${year}`).style.display = 'block';
                }

                // Actualizar el botón de interpretación según el año
                const interpretationButton = document.getElementById('interpretationButton');
                interpretationButton.setAttribute('data-bs-target', `#interpretationModal${year}`);
            }
        </script>




        <!-- Estacionalidad -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Estacionalidad</h5>
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
                        <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_estacionalidad.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

<!-- Distribución % de créditos por categoría (trimestre) -->
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
                    <select class="form-select" id="yearSelect" onchange="showYearlyDatas1(this.value)">
                        <option value="">Seleccione un año</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal4">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButton" data-bs-toggle="modal">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_dist_creditos_segmento_porciento_2022.html" width="100%" height="400" frameborder="0" id="yearlyData2022s1" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_dist_creditos_segmento_%_2023.html" width="100%" height="400" frameborder="0" id="yearlyData2023s1" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_dist_creditos_segmento_%_2024.html" width="100%" height="400" frameborder="0" id="yearlyData2024s1" style="display: none;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal4" tabindex="-1" aria-labelledby="descriptionModalLabel4" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel4">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Esta gráfica muestra la distribución porcentual de créditos otorgados por categoría durante cada trimestre.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModal2022" tabindex="-1" aria-labelledby="interpretationModalLabel2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En 2022, se observa una mayor concentración de créditos en la categoría de viviendas, seguida de la categoría de automóviles.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModal2023" tabindex="-1" aria-labelledby="interpretationModalLabel2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En 2023, se observa un aumento en la demanda de créditos para la categoría de educación, mientras que la categoría de viviendas mantiene una posición destacada.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModal2024" tabindex="-1" aria-labelledby="interpretationModalLabel2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>En 2024, se prevé un aumento en la demanda de créditos para la categoría de tecnología, lo que refleja el crecimiento del sector.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Función para mostrar la gráfica correspondiente al año seleccionado
    function showYearlyDatas1(year) {
        // Ocultar todas las gráficas primero
        document.getElementById('yearlyData2022s1').style.display = 'none';
        document.getElementById('yearlyData2023s1').style.display = 'none';
        document.getElementById('yearlyData2024s1').style.display = 'none';
        
        // Mostrar la gráfica correspondiente al año seleccionado
        if (year) {
            document.getElementById(`yearlyData${year}s1`).style.display = 'block';
        }
        
        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButton');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModal${year}`);
    }
</script>

        <!-- Segmentación de mercado: Promedio de precio por segmento -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title subtitle mb-3 text-center">Segmentación de mercado: Distribución de propiedades por segmento
                        </h5>
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
                            <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_pie_dist_propiedades_segmento_2023.html" width="100%" height="400" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title subtitle mb-3 text-center">Segmentación de mercado: Distribución de propiedades por segmento
                        </h5>
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
                            <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_pie_dist_propiedades_segmento_2023.html" width="100%" height="400" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Segmentación de mercado: Promedio de precio por segmento -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Segmentación de mercado: Promedio de precio por segmento</h5>
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
                        <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_precio_promedio_segmento.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Porcentaje de vivienda ofertadas por antigüedad -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Porcentaje de vivienda ofertadas por antigüedad</h5>
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
                        <iframe src="/ruta/a/grafica7.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Mediana del precio de oferta -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Mediana del precio de oferta</h5>
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
                        <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_precio_oferta_mediana.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- g_piramid_poblacion -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Demográfico: Distribución de la población de [ciudad] por género y rango de edad</h5>
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
                        <iframe src="/ruta/a/grafica9.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Precio de oferta -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Precio de oferta</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal10">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal10">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_scatt_precio_oferta.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

<!-- Distribución de créditos por monto -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de créditos por monto</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="yearSelectMontos" onchange="showYearlyDataMontos(this.value)">
                        <option value="">Seleccione un año</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal11">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonMontos" data-bs-toggle="modal">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_creditos_monto_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2022" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_creditos_monto_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2023" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_bar_creditos_monto_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2024" style="display: none;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModal11" tabindex="-1" aria-labelledby="descriptionModalLabel11" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabel11">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Esta gráfica muestra la distribución de créditos por monto según el año seleccionado.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModalMontos2022" tabindex="-1" aria-labelledby="interpretationModalLabelMontos2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelMontos2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Interpretación específica de la gráfica de 2022.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalMontos2023" tabindex="-1" aria-labelledby="interpretationModalLabelMontos2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelMontos2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Interpretación específica de la gráfica de 2023.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModalMontos2024" tabindex="-1" aria-labelledby="interpretationModalLabelMontos2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelMontos2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Interpretación específica de la gráfica de 2024.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script para controlar la visualización de gráficas -->
<script>
    function showYearlyDataMontos(year) {
        // Ocultar todas las gráficas
        const years = ['2022', '2023', '2024'];
        years.forEach(y => {
            document.getElementById(`yearlyDataMontos${y}`).style.display = 'none';
        });

        // Mostrar la gráfica correspondiente al año seleccionado
        if (year) {
            document.getElementById(`yearlyDataMontos${year}`).style.display = 'block';
        }

        // Actualizar el botón de interpretación para abrir el modal correcto
        const interpretationButton = document.getElementById('interpretationButtonMontos');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalMontos${year}`);
    }
</script>


<!-- g_bar_distribucion_segmentos -->
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title subtitle mb-3 text-center">Distribución de segmentos</h5>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="d-flex align-items-center">
                    <i class="fas fa-user-tie me-2"></i>
                    <span class="developer-label">Desarrollador</span>
                </div>
                <div class="mb-3">
                    <select class="form-select" id="yearSelect" onchange="showYearlyDataSet2(this.value)">
                        <option value="">Seleccione un año</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal12">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButton" data-bs-toggle="modal">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_pie_dist_creditos_segmento_2022.html" width="100%" height="400" frameborder="0" id="yearlyData2022s2" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_pie_dist_creditos_segmento_2023.html" width="100%" height="400" frameborder="0" id="yearlyData2023s2" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_pie_dist_creditos_segmento_2024.html" width="100%" height="400" frameborder="0" id="yearlyData2024s2" style="display: none;"></iframe>
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
                <p>Esta gráfica muestra la distribución de segmentos para cada año.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modals for Interpretation -->
<div class="modal fade" id="interpretationModal2022" tabindex="-1" aria-labelledby="interpretationModalLabel2022" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2022">Interpretación 2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Esta gráfica proporciona una visión detallada de la distribución de segmentos para el año 2022.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModal2023" tabindex="-1" aria-labelledby="interpretationModalLabel2023" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2023">Interpretación 2023</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Esta gráfica proporciona una visión detallada de la distribución de segmentos para el año 2023.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="interpretationModal2024" tabindex="-1" aria-labelledby="interpretationModalLabel2024" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabel2024">Interpretación 2024</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Esta gráfica proporciona una visión detallada de la distribución de segmentos para el año 2024.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Script -->
<script>
    function showYearlyDataSet2(year) {
        // Ocultar todas las gráficas
        const years = ['2022', '2023', '2024'];
        years.forEach(y => {
            document.getElementById(`yearlyData${y}s2`).style.display = 'none';
        });

        // Mostrar la gráfica correspondiente al año seleccionado
        if (year) {
            document.getElementById(`yearlyData${year}s2`).style.display = 'block';
        }

        // Actualizar el botón de interpretación según el año
        const interpretationButton = document.getElementById('interpretationButton');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModal${year}`);
    }
</script>

        <!-- Perspectiva Mercado -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Perspectiva Mercado</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal13">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal13">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/ruta/a/grafica13.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Distribución de Colonias -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Distribución de Colonias</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal14">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal14">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/ruta/a/grafica14.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Distribución de Propiedades -->
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title subtitle mb-3 text-center">Distribución de Propiedades 2023</h5>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-user-tie me-2"></i>
                                    <span class="developer-label">Desarrollador</span>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal15">Descripción</button>
                                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal15">Interpretación</button>
                                </div>
                            </div>
                            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_pie_dist_propiedades_segmento_2023.html" width="100%" height="400" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title subtitle mb-3 text-center">Distribución de Propiedades 2024</h5>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-user-tie me-2"></i>
                                    <span class="developer-label">Desarrollador</span>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal16">Descripción</button>
                                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal16">Interpretación</button>
                                </div>
                            </div>
                            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                <iframe src="/datalpine/resources/Ciudades/Queretaro/assets/graficas/g_pie_dist_propiedades_segmento_2024.html" width="100%" height="400" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Description 2023 -->
        <div class="modal fade" id="descriptionModal15" tabindex="-1" aria-labelledby="descriptionModalLabel15" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descriptionModalLabel15">Descripción 2023</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Esta gráfica muestra la distribución de propiedades para el año 2023.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Interpretation 2023 -->
        <div class="modal fade" id="interpretationModal15" tabindex="-1" aria-labelledby="interpretationModalLabel15" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel15">Interpretación 2023</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Esta gráfica proporciona una visión detallada de la distribución de propiedades para el año 2023.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Description 2024 -->
        <div class="modal fade" id="descriptionModal16" tabindex="-1" aria-labelledby="descriptionModalLabel16" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descriptionModalLabel16">Descripción 2024</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Esta gráfica muestra la distribución de propiedades para el año 2024.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal for Interpretation 2024 -->
        <div class="modal fade" id="interpretationModal16" tabindex="-1" aria-labelledby="interpretationModalLabel16" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel16">Interpretación 2024</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Esta gráfica proporciona una visión detallada de la distribución de propiedades para el año 2024.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


        <!-- Agrega los modals para las gráficas restantes -->

    </div>
</div>

<!-- Repite esta estructura para cada gráfica -->

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