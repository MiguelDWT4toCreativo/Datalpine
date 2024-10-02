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
                <p>La gráfica muestra la distribución porcentual de los créditos otorgados por tipo de vivienda. Las variables representadas son el porcentaje de créditos (eje y) y los tipos de vivienda (eje x), que se desglosan en seis categorías: Económica, Popular, Tradicional, Media, Residencial y Residencial Plus. Cada barra refleja el porcentaje de participación de cada categoría en el total de créditos otorgados, permitiendo visualizar qué tipos de vivienda concentraron la mayor cantidad de créditos. La utilidad de la gráfica es comparar la proporción de cada tipo de vivienda y entender la preferencia del mercado por diferentes segmentos.</p>
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
                <p>La gráfica muestra que la mayor parte de los créditos se concentró en las viviendas de tipo Tradicional (<strong>37.63%</strong>) y Media (<strong>35.19%</strong>), lo que indica una preferencia del mercado por viviendas con características intermedias en tamaño y valor. Esto puede deberse a que el segmento Tradicional se adapta mejor a las necesidades de la clase media, que representa una parte significativa de la población de Tulancingo. En cambio, la vivienda Económica y Residencial Plus tienes participaciones marginales (<strong>4.88%</strong> y <strong>0.35%</strong> respectivamente), lo que refleja una baja demanda para propiedades en los extremos del espectro de valor respecto a los tipos popular y residencial, podemos observar que tienen participaciones relativamente pequeñas y similares. Lo cual se puede deber a  que cada uno atiende un mercado más pequeño: el Popular por capacidad adquisitiva y el Residencial por preferencia hacia viviendas de mayor valor. La alta preferencia por viviendas Tradicionales y Medias podría estar influenciada por factores como el nivel de ingresos y las políticas locales de financiamiento de vivienda, que tienden a favorecer propiedades de estos segmentos debido a su mayor accesibilidad para la población.
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
                <p>En 2023, el segmento Tradicional (<strong>35.19%</strong>) y el Media (<strong>35.19%</strong>) dominan el mercado, sugiriendo una preferencia por viviendas de valor intermedio. La categoría Popular crece a <strong>17.07%</strong>, lo que indica una mayor demanda en este tipo de vivienda debido posiblemente a políticas de financiamiento accesibles y aumento en la construcción de vivienda asequible. La categoría Económica y Residencial muestran el mismo porcentaje (<strong>5.23%</strong>). Estos dos segmentos serían entonces nichos de mercado pequeños, lo cual es indicativo de menor disponibilidad o preferencia por estos segmentos en comparación con otros tipos de vivienda. Por último, esta la categoría residencial Plus, con la menor participación, este sería un nicho aún más pequeño, debido a que está dirigido a personas de altos ingresos y que buscan el mayor lujo.</p>
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
                <p>En 2024, las categorías de vivienda Media (<strong>35.33%</strong>) y Tradicional (<strong>34.67%</strong>) concentraron nuevamente la mayor parte de los créditos, indicando una preferencia por viviendas de costo intermedio, posiblemente debido a la combinación de características accesibles y mayores prestaciones. La vivienda Popular continúa creciendo, ahora representa el <strong>20%</strong> del total, siendo esto indicativo de una creciente demanda significativa por propiedades de menor costo. La categoría Económica muestra un valor mínimo (<strong>0.67%</strong>), lo que podría deberse a crecientes limitaciones de financiamiento este rango. El segmento Residencial (<strong>7.33%</strong>) y Residencial Plus (<strong>2%</strong>) tienen baja participación, lo que podría explicarse por la menor proporción de consumidores que optan por propiedades de alto valor, un fenómeno que se ve influenciado por el contexto económico, como la inflación y las tasas de interés, que tienden a afectar más a los segmentos de lujo y reducir la demanda en estos sectores.</p>
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
                <p>La gráfica muestra el porcentaje de créditos hipotecarios otorgados por diferentes organismos en Tulancingo. Las variables que se representan son los organismos financieros en el eje horizontal y el porcentaje de créditos otorgados en el eje vertical. Está organizada de manera que cada barra corresponde a un organismo: INFONAVIT, CNBV, FOVISSSTE y BANJERCITO. La altura de las barras refleja el porcentaje relativo de participación de cada entidad en el total de créditos otorgados. Esta estructura permite visualizar fácilmente cuáles organismos tienen mayor o menor participación en la oferta de crédito.</p>
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
                <p>El organismo con mayor porcentaje de créditos otorgados es INFONAVIT, con un <strong>44.44%</strong>, destacando como la principal fuente de financiamiento. Los siguientes en importancia son CNBV y FOVISSSTE, cada uno con un <strong>27.61%</strong> de participación, lo que indica que tienen una contribución equilibrada. Finalmente, BANJERCITO representa solo el <strong>0.34%</strong>, reflejando su nicho específico en el mercado de crédito. La diferencia en participación podría explicarse por el tipo de población atendida por cada organismo: INFONAVIT cubre a la mayor parte de los trabajadores asalariados, mientras que FOVISSSTE está dirigido a empleados del sector público y BANJERCITO a miembros de las fuerzas armadas, estos últimos siendo una minoría.   
                </p>
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
                <p>Durante 2023. Los tres organismos principales son Infonavit, CNBV y Fovissste, con Infonavit ocupando el mayor porcentaje (<strong>54.72%</strong>), seguido de CNBV (<strong>23.78%</strong>) y Fovissste (<strong>21.50%</strong>). El hecho de que Infonavit tenga un porcentaje significativamente mayor se debe a su orientación hacia trabajadores de menores ingresos, lo que lo hace más accesible y una opción predominante en la región. Mientras tanto, CNBV y Fovissste atienden a un perfil de trabajadores con mayores ingresos o características específicas, como empleados del sector público (Fovissste). La concentración en Infonavit sugiere una prevalencia de créditos destinados a vivienda popular o media en la zona.
                </p>
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
                <p>En 2024 se observa que el INFONAVIT concentra <strong>63.87%</strong> del total de créditos, una proporción significativamente mayor en comparación con los demás organismos. Esto puede deberse a la accesibilidad de sus programas de financiamiento, destinados principalmente a trabajadores con ingresos bajos y medios, lo que lo hace la opción preferida en esta región. Por otro lado, FOVISSSTE cubre un <strong>19.37%</strong>, siendo relevante para empleados del sector público, mientras que la CNBV representa el <strong>16.75%</strong>, orientándose hacia un perfil más diversificado. La tendencia refleja cómo las características de empleo y la dinámica laboral de la región influencian las decisiones de financiamiento.
                </p>
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
                <p>Esta gráfica  muestra la distribución del número de estacionamientos de los inmuebles en Tulancingo, clasificados por segmentos de precio. Las barras representan el número de casas distribuidas en siete segmentos: E, D, C, B, A, S y L, que reflejan el rango de precios de las propiedades de las más económicas a las más cara. El color de las barras indica el número de estacionamientos, variando de 1 a 6 y con una diferencia notable entre los distintos segmentos. Este gráfico es útil para entender cómo la oferta de estacionamientos varía según el rango de precios y qué segmentos están mejor equipados en términos de infraestructura para vehículos.</p>
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
                <p>El gráfico muestra que el <strong>48.9%</strong> de los inmuebles en Tulancingo cuentan con un solo estacionamiento, seguido de un <strong>46.9%</strong> que tiene dos estacionamientos, lo que sugiere que la mayoría de las propiedades en la ciudad están orientadas hacia familias o individuos que poseen uno o dos vehículos. Las opciones con tres o más estacionamientos son significativamente menos comunes, con porcentajes que no superan el <strong>3%</strong>. Este patrón puede explicarse por el contexto económico y socio-cultural de la región, donde la mayoría de las familias tienen un nivel adquisitivo que les permite poseer uno o dos vehículos, pero las propiedades más grandes o lujosas, con más espacios de estacionamiento, son más escasas y, generalmente, están dirigidas a una pequeña porción de la población con mayor capacidad económica.</p>
                <p>Además, la falta de propiedades con más de <strong>3</strong> estacionamientos podría indicar una tendencia hacia viviendas más compactas, lo cual es común en zonas urbanas o semiurbanas donde el espacio puede ser limitado. Contextualmente, esto coincide con el hecho de que Tulancingo es una ciudad en crecimiento, pero aún no ha alcanzado el nivel de urbanización de ciudades más grandes donde las propiedades más amplias son más comunes y los segmentos más altos de la población tienen mayor acceso a viviendas con múltiples estacionamientos.</p>
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
                <p>La distribución de estacionamientos parece estar influenciada por el tamaño de las propiedades y el precio, ya que los segmentos de mayor valor suelen ofrecer más espacio para vehículos, una tendencia común en zonas con un nivel socioeconómico más alto.</p>
                <p>Factores económicos como el crecimiento de la clase media y la expansión urbana en Tulancingo probablemente están afectando esta distribución, ya que el aumento en la demanda de viviendas de precio medio también incrementa la necesidad de propiedades con más estacionamientos. Por otro lado, los segmentos más bajos reflejan una mayor densidad de viviendas con menos espacio, lo que se ve en la prevalencia de 1 estacionamiento en esos rangos.</p>
                <p>Con estos datos, es posible identificar tendencias sobre cómo se distribuye el espacio destinado a estacionamientos según el valor de la propiedad, lo cual puede tener implicaciones en términos de planeación urbana, necesidades de movilidad  e inversión inmobiliaria en Tulancingo.</p>
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
                <p>En esta gráfica, los inmuebles con un baño representan el <strong>38.9%</strong> del total, lo que sugiere que una gran parte de las propiedades en Tulancingo están construidas para cubrir necesidades básicas, ya sea por una tendencia a viviendas más accesibles o destinadas a familias más pequeñas. Los inmuebles con dos baños constituyen el <strong>37.8%</strong>, lo que también es considerable y refleja una preferencia por viviendas que ofrecen un mayor grado de comodidad, sin llegar a ser lujosas. Los inmuebles con tres baños tienen una presencia del <strong>17.8%</strong>, lo cual ya podría indicar viviendas más grandes y con mayor nivel adquisitivo. A partir de los <strong>cuatro</strong> baños, el porcentaje comienza a descender drásticamente, reflejando que las propiedades con más de <strong>cuatro</strong> baños son mucho menos comunes en el mercado de Tulancingo.</p>
                <p>Este comportamiento refleja cómo el contexto económico y sociocultural en Tulancingo influye en la construcción de viviendas más accesibles para el grueso de la población, con predominancia de <strong>uno</strong> a <strong>dos</strong> baños en la mayoría de los casos, adaptándose a la demanda de las clases media y baja que busca una distribución eficiente en un menor espacio.</p>
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
                <p>En los segmentos E y D, la mayoría de las propiedades tienen  principalmente entre 1 y 3 baños, lo que es coherente con el tipo de viviendas más económicas o de interés social, donde se suelen encontrar servicios más básicos. A medida que se sube en el segmento de precios, especialmente en el A y S, es mayor la proporción de propiedades de estos segmentos propiedades con 4 o más baños, lo que refleja la mayor amplitud y lujo de estas viviendas. El bajo número de casas con más de 5 baños indica que estas características están restringidas a propiedades de muy alto costo o de lujo, como se puede observar en el segmento L o S.</p>
                <p>Este comportamiento puede explicarse por el contexto socioeconómico de Tulancingo, donde una gran parte de la población puede estar orientada hacia la compra de viviendas más accesibles, pero también existe un mercado, aunque reducido, para propiedades de alta gama. La diferencia en el número de baños es un indicador de la amplitud y el tipo de vivienda disponible en cada rango de precios.</p>    
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
            <p>La mayor concentración de propiedades se encuentra en las viviendas de <strong>tres</strong> recámaras. Esto podría estar relacionado con el tamaño promedio de las familias en la región, donde es común que las familias nucleares busquen espacios que acomoden a padres e hijos cómodamente. Las casas de <strong>dos</strong> recámaras también tienen una presencia significativa, indicando una oferta considerable para familias pequeñas o quizás también para parejas jóvenes.</p>
            <p>Las propiedades con <strong>cuatro</strong> recámaras o más son menos numerosas, lo que puede deberse a una menor demanda de viviendas más grandes, posiblemente por el costo asociado a ellas o porque la mayoría de las familias no requieren espacios tan amplios. Las viviendas de <strong>una</strong> recámara representan la menor proporción, lo que podría indicar una oferta limitada para personas solteras, o bien, una menor preferencia por este tipo de inmuebles en el mercado local.</p>
            <p>El contexto económico y sociocultural de Tulancingo de Bravo influye en esta distribución. La ciudad cuenta con una población mayoritariamente de clase media, donde las familias, nucleares predominantemente, buscan viviendas que equilibren espacio y costo. Las políticas de desarrollo urbano y los programas de vivienda también pueden incentivar la construcción de este tipo de propiedades para satisfacer las necesidades habitacionales de la mayoría de la población.</p>
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
            <p>Se observa que los inmuebles del segmento <strong>E</strong> son predominantemente de tres recámaras, lo que sugiere una tendencia clara en el mercado de vivienda más económica, donde las familias promedio buscan un equilibrio entre espacio y precio. A medida que avanzamos a segmentos de precios más altos, como los segmentos <strong>D</strong>, <strong>C</strong> y <strong>B</strong>, las casas de dos y tres recámaras siguen siendo predominantes, pero también comienzan a aparecer opciones con cuatro recámaras, lo que podría reflejar una mayor demanda de espacio entre los compradores de estos segmentos.</p>
            <p>Es interesante notar que en los segmentos de mayor valor, como <strong>A</strong> y <strong>S</strong>, la distribución es más variada, con una mayor proporción del total del los segmentos de casas que tienen más de cuatro recámaras. Esto podría estar relacionado con el hecho de que los compradores en estos segmentos tienden a buscar propiedades más grandes y con mayor número de habitaciones, probablemente motivados por ingresos más altos o el deseo de mayor confort y espacio.</p>
            <p>Finalmente, el hecho de que haya muy pocas propiedades con más de cinco recámaras en todos los segmentos sugiere que la mayoría de las viviendas en Tulancingo están diseñadas para satisfacer las necesidades de familias medianas, lo que está en línea con el promedio demográfico de la región.</p>
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
                <p>El gráfico revela que la mayoría de las viviendas en Tulancingo están en el rango de 0-100 M2 (<strong>26.6%</strong>), seguido por aquellas de 100-150 M2 (<strong>25.4%</strong>). Esto sugiere que el mercado inmobiliario en esta ciudad tiende a ofrecer viviendas más pequeñas, lo que puede reflejar  el acceso a financiamiento limitado para propiedades más grandes.</p>
                <p>Las casas en el rango de 150-200 M2 representan el <strong>14.9%</strong> del total, mientras que las casas en el rango de 200-250 M2 comprenden el <strong>14.8%</strong>. Las viviendas de entre 250 y 300 M2 constituyen el <strong>5.98%</strong>. Estos valores indican que, aunque hay una oferta considerable de viviendas del rango de 250 a 300 tiene una participación marginal, a comparación del rango superior, lo que indica que en el mercado de las propiedades de mayor tamaño, las relativamente pequeñas en este sector son las menos preferidas.</p>
                <p>Las casas más grandes, como las de más de 300 M2, representan un porcentaje menor (<strong>12.3%</strong>), lo que podría estar vinculado a un menor número de compradores con capacidad económica para adquirir propiedades más amplias. El contexto socioeconómico y el nivel de ingreso medio de los habitantes de Tulancingo podrían explicar esta tendencia, con una mayor demanda de viviendas más accesibles en términos de tamaño.</p>
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
                <p>En Tulancingo, los segmentos <strong>E</strong> y <strong>D</strong> concentran la mayor cantidad de viviendas con menos de <strong>150</strong> m², lo que indica que estos segmentos están orientados a compradores con menores ingresos, probablemente familias que buscan viviendas más accesibles. Este fenómeno puede ser un reflejo de la realidad económica local, donde la demanda de casas más pequeñas prevalece en las clases baja y media-baja.</p>
                <p>En contraste, los segmentos más altos como <strong>A</strong> y <strong>S</strong> tienen una mayor representación de casas con más de <strong>250</strong> m², lo cual sugiere que hay un nicho de mercado para viviendas más grandes y exclusivas, orientado a compradores con mayor poder adquisitivo. Aunque estas propiedades son menos comunes, su presencia muestra un interés en opciones residenciales más amplias y costosas, posiblemente para familias con mayor estabilidad económica o inversores interesados en propiedades de lujo.</p>
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