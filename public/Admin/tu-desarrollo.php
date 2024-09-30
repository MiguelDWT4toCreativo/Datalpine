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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_vivienda_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataViviendaValor2022" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_vivienda_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataViviendaValor2023" style="display: none; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_vivienda_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataViviendaValor2024" style="display: none; min-height: 430px; border: 0;"></iframe>
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
                <p>La gráfica muestra una clara tendencia hacia la adquisición de viviendas de valor medio, concentrando el <strong>37.7%</strong> de los créditos hipotecarios. Esto sugiere que la clase media es el motor principal del mercado inmobiliario. Si bien existe una demanda por viviendas de diferentes rangos de precios, como las residenciales <strong>21.1%</strong> y tradicionales <strong>23%</strong>, la categoría de "vivienda media" domina el mercado. Las viviendas económicas, popular y de lujo, con un <strong>4%</strong>, <strong>4%</strong> y <strong>7%</strong> de los créditos respectivamente, representan segmentos más pequeños. Factores como el poder adquisitivo, las políticas gubernamentales y la disponibilidad de oferta influyen en esta distribución.
                </p>
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
                <p>La gráfica muestra una clara tendencia hacia la adquisición de viviendas de valor medio, concentrando el <strong>38%</strong> de los créditos hipotecarios. Esto sugiere que la clase media es el motor principal del mercado inmobiliario. Si bien existe una demanda por viviendas de diferentes rangos de precios, como las residenciales <strong>21%</strong> y tradicionales <strong>22%</strong>, la categoría de "vivienda media" domina el mercado. Las viviendas económicas, popular y residencial plus, con un <strong>2%</strong>, <strong>4%</strong> y <strong>6%</strong> de los créditos respectivamente, representan segmentos más pequeños. Factores como el poder adquisitivo, las políticas gubernamentales y la disponibilidad de oferta influyen en esta distribución.</p>
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
                <p>La gráfica muestra una clara tendencia hacia la adquisición de viviendas de valor medio, concentrando el <strong>37%</strong> de los créditos hipotecarios. Esto sugiere que la clase media es el motor principal del mercado inmobiliario. Si bien existe una demanda por viviendas de diferentes rangos de precios, como las residenciales <strong>20%</strong> y tradicionales <strong>23%</strong>, la categoría de "vivienda media" domina el mercado. Las viviendas económicas, popular y residencial plus, con un <strong>0%</strong>, <strong>4%</strong> y <strong>6%</strong> de los créditos respectivamente, representan segmentos más pequeños. Factores como el poder adquisitivo, las políticas gubernamentales y la disponibilidad de oferta influyen en esta distribución.</p>
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_organismo_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataOrganismo2022" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_organismo_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataOrganismo2023" style="display: none; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_organismo_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataOrganismo2024" style="display: none; min-height: 430px; border: 0;"></iframe>
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
                <p>Esta gráfica muestra la distribución porcentual de créditos otorgados por organismo según el año seleccionado.</p>
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
                <p>                <p>Al observar la gráfica podemos deducir que:</p>
                <ul>
                    <li><strong>INFONAVIT y CNBV:</strong> Dominan el mercado de créditos con un 38% y 55% respectivamente, son las instituciones que otorgaron la mayor cantidad de créditos en el periodo analizado. Esto sugiere que estas dos instituciones tienen una mayor participación en el mercado de créditos y son las preferidas por los solicitantes.</li>
                    <li><strong>FOVISSTE:</strong> Tiene una participación menor pero significativa con un 6%, el FOVISSTE también otorgó una cantidad considerable de créditos, aunque en menor proporción que las dos instituciones anteriores. Esto indica que el FOVISSTE tiene una presencia importante en el mercado, pero en menor escala.</li>
                    <li><strong>BANJERCITO, INSUS y CONAVI:</strong> Tienen una participación mínima o nula, estas tres últimas instituciones muestran un porcentaje de 0.00%, lo que sugiere que su participación en el otorgamiento de créditos es prácticamente inexistente en el periodo analizado.</li>
                </ul></p>
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
                <p><strong>Interpretación:</strong></p>
                <p>Al observar la gráfica podemos deducir que:</p>
                <ul>
                    <li><strong>INFONAVIT y CNBV:</strong> Dominan el mercado de créditos con un 45% y 50% respectivamente, son las instituciones que otorgaron la mayor cantidad de créditos en el período analizado. Esto sugiere que estas dos instituciones tienen una mayor participación en el mercado de créditos y son las preferidas por los solicitantes.</li>
                    <li><strong>FOVISSTE:</strong> Tiene una participación menor pero significativa con un 5%, el FOVISSTE también otorgó una cantidad considerable de créditos, aunque en menor proporción que las dos instituciones anteriores. Esto indica que el FOVISSTE tiene una presencia importante en el mercado, pero en menor escala.</li>
                    <li><strong>BANJERCITO, INSUS y CONAVI:</strong> Tienen una participación mínima o nula, estas tres últimas instituciones muestran un porcentaje de 0.00%, lo que sugiere que su participación en el otorgamiento de créditos es prácticamente inexistente en el período analizado.</li>
                </ul>
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
                <p><strong>Interpretación:</strong></p>
                <p>Al observar la gráfica podemos deducir que:</p>
                <ul>
                    <li><strong>INFONAVIT y CNBV:</strong> Existe dominancia de INFONAVIT y CNBV, es evidente que el INFONAVIT y la CNBV son las instituciones que concentran la mayor parte de porcentajes de créditos otorgados con un 51% y 42% respectivamente, estas dos entidades son las principales proveedoras de financiamiento a la población.</li>
                    <li><strong>FOVISSTE:</strong> Menor participación de FOVISSTE, aunque con una participación menor, también tiene una presencia significativa en el otorgamiento de créditos, alrededor del 5%.</li>
                    <li><strong>BANJERCITO y CONAVI:</strong> Mínima participación de BANJERCITO y CONAVI, muestran una participación prácticamente nula con el 0% o casi nula a excepción de CONAVI con el 1%  en el otorgamiento de créditos.</li>
                </ul>
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
<div class="col-md-6">
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_estacionamientos.html" width="100%" height="400" frameborder="0" id="segmentDataEstacionamientosGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets\graficas/g_pie_estacionamientos.html" width="100%" height="400" frameborder="0" id="segmentDataEstacionamientosSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>
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
                <p>Es notorio que el segmento S es el que mayor concentración de propiedades con 5 estacionamientos, lo que que es congruente con la categoría, ya que las casas de este segmento se encuentran en un rango de precio de alto, de 4 millones a 12 millones. Por su parte, los segmentos A y B son los que poseen una cantidad importante en casas con 1 o 2 estacionamientos, estas casas son consideradas de un precio medio, donde las familias de Santiago de Querétaro pueden acceder a ellas. Finalmente, el resto de las categorías presentan una distribución de estacionamientos más equilibrada.</p>
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
                <p><strong>En el mercado inmobiliario de Santiago de Querétaro un porcentaje importante de viviendas cuenta con con 2 estacionamientos, con el 54.6% de participación, lo que sugiere que este número de estacionamientos es una media en la ciudad. Las viviendas que poseen un estacionamiento representan un 23.7%, hay que tener en cuenta que este número es estándar, todas las viviendas deben tener al menos un estacionamiento. Por otra parte, las propiedades que tienen espacio 3 lugares de estacionamiento representan 10.8%. Finalmente, para el resto de las categorías el porcentaje de participación es mucho menor, lo que implica que hay exclusividad para las propiedades más de 3 estacionamientos, estas pueden ser las que tienen más espacio.</p>
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
                <p><strong>En el mercado inmobiliario de Santiago de Querétaro un porcentaje importante de viviendas cuenta con con 2 estacionamientos, con el 54.6% de participación, lo que sugiere que este número de estacionamientos es una media en la ciudad. Las viviendas que poseen un estacionamiento representan un 23.7%, hay que tener en cuenta que este número es estándar, todas las viviendas deben tener al menos un estacionamiento. Por otra parte, las propiedades que tienen espacio 3 lugares de estacionamiento representan 10.8%. Finalmente, para el resto de las categorías el porcentaje de participación es mucho menor, lo que implica que hay exclusividad para las propiedades más de 3 estacionamientos, estas pueden ser las que tienen más espacio.</strong></p>
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
<div class="col-md-6">
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_baños.html" width="100%" height="400" frameborder="0" id="segmentDataBanosGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_baños.html" width="100%" height="400" frameborder="0" id="segmentDataBanosSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

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
                <p><strong>Interpretación:</strong> Para las primeras cantidades de baños (1, 2, y 3) es notorio que las abarcan los segmentos E, D y C, lo que es correspondiente al rango de precios que tienen estos segmentos, donde el número de baños está relacionado al precio de las propiedades. Por su parte, a medida que aumentan los baños también lo hace la concentración de propiedades de los segmentos más altos, a partir 4, 5, 6 los segmentos mayor participación tienen son el B, A y S, los precios de estas propiedades son considerados de medio-alto.</p>
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
                <p>Es notorio que la mayor parte de las propiedades de Santiago de Querétaro poseen <strong>1</strong> baño, este representa el <strong>48.4%</strong> de todo el mercado inmobiliario. En menor proporción pero igual de representativos están las propiedades que poseen <strong>2</strong> (<strong>22.3%</strong>), <strong>3</strong> (<strong>13.6%</strong>), <strong>4</strong> (<strong>10.1%</strong>), esto implica que la propiedades con menor número de baños predominan lo que corresponde a las propiedades que tienen un precio asequible. Por otro lado, existe un grupo limitado y exclusivo para las propiedades de <strong>5</strong> (<strong>4.41%</strong>), <strong>6</strong> (<strong>0.83%</strong>), <strong>7</strong> (<strong>0.21%</strong>) y <strong>8</strong> (<strong>0.25%</strong>), dada esta cantidad se puede intuir que son propiedades con un valor alto.</p>
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


<!-- Gráfica: Recámaras -->
<div class="col-md-6">
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
                        <option value="general">General</option>
                        <option value="segmentos">Segmentos</option>
                    </select>
                </div>
                <div>
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalRecamaras">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" id="interpretationButtonRecamaras" data-bs-toggle="modal" data-bs-target="#interpretationModalRecamarasGeneral">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_recamaras.html" width="100%" height="400" frameborder="0" id="segmentDataRecamarasGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_recamaras.html" width="100%" height="400" frameborder="0" id="segmentDataRecamarasSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>
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
                <p>En el gráfico se muestra la distribución de la cantidad de casas que tienen un determinado número de recámaras, agrupadas por segmentos. Cada barra representa la cantidad de casas que tienen un número específico de recámaras para un segmento determinado.</p>
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
                <p><strong>Interpretación:</strong> El segmento S es el que presenta la mayor cantidad de casas con 3 o 4 recámaras, al ser considerado un segmento con un rango de precios de entre 4 millones a 12 millones, las propiedades corresponden a zonas residenciales con gran tamaño. Para el segmento L sucede algo muy similar, y es que, aunque poca representación es notorio que las propiedades de lujo tienen de 3 a 4 recámaras. </p>
                <p>Para segmentos de un valor menor (E, D, C, B, A) es posible notar que predominan propiedades con 2 recámaras, lo que sugiere que la mayoría de las familias que adquieren este tipo de propiedades son familias pequeñas. Además que el precio de estos segmentos las hace asequibles.</p>
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
                <p>Con un <strong>64.6%</strong> y <strong>20.4%</strong> de la participación, la distribución de <strong>3</strong> y <strong>2</strong> recámaras, respectivamente, es la más frecuente. Lo que sugiere que es común encontrar propiedades con este número de recámaras correspondiente al tamaño de las familias de la ciudad de Santiago de Querétaro. En menor proporción se encuentran las propiedades con <strong>4</strong> (<strong>12%</strong>), <strong>1</strong> (<strong>1.99%</strong>), <strong>5</strong> (<strong>.93%</strong>) y <strong>6</strong> (<strong>0.18%</strong>) recámaras, esto sugiere que hay una oferta menor en propiedades con un número tan alto y tan mínimo de recámaras. </p>
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
<!-- Gráfica: Distribución m2 construidos -->
<div class="col-md-6">
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_dist_m2_construidos.html" width="100%" height="400" frameborder="0" id="segmentDataM2ConstruidosGeneral" style="display: block; min-height: 430px; border: 0;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_dist_m2_construidos.html" width="100%" height="400" frameborder="0" id="segmentDataM2ConstruidosSegmentos" style="display: none; min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalM2Construidos" tabindex="-1" aria-labelledby="descriptionModalLabelM2Construidos" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelM2Construidos">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Esta gráfica muestra la distribución de metros cuadrados construidos según la opción seleccionada: General o Segmentos.</p>
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
                <p>El grafico de barras muestra el precio promedio por metro cuadrado total para diferentes rangos de metros cuadrados construidos. Cada barra representa el precio promedio para un rango específico de metros cuadrados.</p>
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
                <p>Los segmentos más pequeños (0-100 m² y 100-150 m²) presentan los valores más altos, de $28,173.12 y $31,324.74 respectivamente, lo cual sugiere que las propiedades de tamaño reducido son más caras por metro cuadrado. Seguido, el precio promedio disminuye en los rangos medios: 150-200 m² con $21,217.37, y 200-250 m² con $20,856.11. El precio se eleva nuevamente en propiedades de 250 a 300 m² y más de 300 m² , con  promedios de $21,249.50 y $27,577.05 respectivamente.

La diferencia en los precios puede estar influenciada por la demanda de propiedades más pequeñas en áreas urbanas, donde los espacios más reducidos suelen ser más costosos. Por otro lado, las propiedades más grandes pueden ofrecer un precio menor por m² debido a economías de escala y a la disponibilidad de terrenos más amplios en las zonas periféricas de la ciudad, donde la competencia por espacio es menor.</p>
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

        <!-- Gráfica 12: g_bar_PrecioPromedio_m2 -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Precio Promedio por m2</h5>
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
                        <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_PrecioPromedio_m2.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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