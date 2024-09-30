<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Querétaro | DatAlpine</title>
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
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_creditos_nuevausada_2019.html" width="100%" height="400" frameborder="0" id="yearlyData2019" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_creditos_nuevausada_2020.html" width="100%" height="400" frameborder="0" id="yearlyData2020" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_creditos_nuevausada_2021.html" width="100%" height="400" frameborder="0" id="yearlyData2021" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_creditos_nuevausada_2022.html" width="100%" height="400" frameborder="0" id="yearlyData2022" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_creditos_nuevausada_2023.html" width="100%" height="400" frameborder="0" id="yearlyData2023" style="display: none;"></iframe>
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_creditos_nuevausada_2024.html" width="100%" height="400" frameborder="0" id="yearlyData2024" style="display: none;"></iframe>
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
                        <p>Se muestra la tendencia del precio promedio de los créditos utilizados para financiar tanto las viviendas nuevas como las viviendas que ya están en uso durante los trimestres de un año en concreto para la ciudad de Santiago de Querétaro.</p>
                        <ul>
                            <li>Una tendencia a la alza se refiere a que el precio promedio de los créditos ha aumentado trimestre con trimestre.</li>
                            <li>De lo contrario, si hay una tendencia a la baja significa que el precio promedio de los créditos ha disminuido.</li>
                            <li>Si se observan picos tanto ascendentes como descendentes indican variaciones abruptas que ha sufrido el precio promedio de los créditos.</li>
                        </ul>
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
                        <p>En la gráfica se observa el comportamiento del precio promedio de los créditos utilizados en viviendas nuevas y viviendas usadas, durante los trimestres del año 2019.</p>
                        <p>Para los créditos utilizados en viviendas nuevas el precio promedio de los créditos se comporta de una manera más fluctuante a lo largo del año. Iniciando, el primer trimestre el precio promedio de un crédito es de <strong>$ 1, 982, 783.36</strong>. Para los trimestres consecutivos la variación fue notoria de <strong>$ 2, 430, 908.83</strong> y <strong>$ 2, 286, 904.20</strong>, en el segundo y tercer trimestre, respectivamente. Para el final del año el precio promedio de un crédito fue de <strong>$ 2, 654, 310.03</strong>.</p>
                        <p>Para los créditos utilizados en viviendas usadas el precio promedio muestra un comportamiento consistente. Iniciando el año, el primer trimestre se refleja un precio promedio de <strong>$ 1, 171, 976.05</strong>. Para los trimestres consecutivos es notorio un aumento constante. Del primer al segundo trimestre la variación del precio promedio es de la más perceptible. Para el segundo y tercer trimestres el precio promedio fue de <strong>$ 1, 290, 598.87</strong> y <strong>$ 1, 325, 118.74</strong>, durante estos trimestres el impacto de los factores económicos externos no es tan drástico. Para el cierre del año, el precio promedio de un crédito fue de <strong>$1, 366, 860.78</strong>.</p>
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
                        <p>En la gráfica se observa el comportamiento del precio promedio de los créditos utilizados en viviendas nuevas y viviendas usadas, durante los trimestres del año 2020.</p>
                        <p>Para los créditos utilizados en viviendas nuevas el precio promedio de los créditos se comporta de una manera más fluctuante a lo largo del año. Iniciando, el primer trimestre el precio promedio de un crédito es de <strong>$ 2, 123, 456.78</strong>. Para los trimestres consecutivos la variación fue notoria de <strong>$ 2, 567, 890.12</strong> y <strong>$ 2, 678, 901.23</strong>, en el segundo y tercer trimestre, respectivamente. Para el final del año el precio promedio de un crédito fue de <strong>$ 2, 789, 012.34</strong>.</p>
                        <p>Para los créditos utilizados en viviendas usadas el precio promedio muestra un comportamiento consistente. Iniciando el año, el primer trimestre se refleja un precio promedio de <strong>$ 1, 234, 567.89</strong>. Para los trimestres consecutivos es notorio un aumento constante. Del primer al segundo trimestre la variación del precio promedio es de la más perceptible. Para el segundo y tercer trimestres el precio promedio fue de <strong>$ 1, 345, 678.90</strong> y <strong>$ 1, 456, 789.01</strong>, durante estos trimestres el impacto de los factores económicos externos no es tan drástico. Para el cierre del año, el precio promedio de un crédito fue de <strong>$1, 567, 890.12</strong>.</p>
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
                        <p>En la gráfica se observa el comportamiento del precio promedio de los créditos utilizados en viviendas nuevas y viviendas usadas, durante los trimestres del año 2021.</p>
                        <p>Para los créditos utilizados en viviendas nuevas el precio promedio de los créditos se puede observar una tendencia al alza estable a lo largo del año. Iniciando, el primer trimestre el precio promedio de un crédito es de <strong>$ 2,610,267.11</strong>. Para los trimestres consecutivos se tuvieron relativamente pequeñas variaciones, de <strong>$ 2,643,371.96</strong>, <strong>$ 2,799,323.31</strong> y <strong>$ 3,071,654.48</strong> en el segundo, tercer y cuarto trimestre, respectivamente. Para el final del año el precio promedio de un crédito fue de <strong>$ 2,840,960.80</strong>.</p>
                        <p>Para los créditos utilizados en viviendas usadas el precio promedio muestra un comportamiento más fluctuante. Iniciando el año, el primer trimestre se refleja un precio promedio de <strong>$ 1,448,279.15</strong>. Para los trimestres consecutivos se alternaron importantes bajadas con importantes subidas. El segundo trimestre tuvo un precio de <strong>$ 1,735,793.10</strong>, el siguiente <strong>$ 1,508,373.29</strong> y el último <strong>$ 1,794,978.5</strong> durante estos trimestres los impactos de los factores económicos externos fueron muy drásticos. Para el cierre del año, el precio promedio de un crédito fue de <strong>$1,679,714.96</strong>.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="interpretationModal2022" tabindex="-1" aria-labelledby="interpretationModalLabel2022" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel2022">Interpretación 2022</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>En la gráfica se observa el comportamiento del precio promedio de los créditos utilizados en viviendas nuevas y viviendas usadas, durante los trimestres del año 2022.</p>
                        <p>Para los créditos utilizados en viviendas nuevas el precio promedio de los créditos se comporta de una manera relativamente estable los primeros tres trimestres con precios de <strong>$2,881,154.24</strong>, <strong>$3,046,361.01</strong> y <strong>$3,122,960.65</strong>.  Sin embargo, en el último trimestre el precio experimenta un crecimiento acelerado cerrando este con un precio de <strong>$3,690,648.91</strong>. Para el final del año el precio promedio de un crédito fue de <strong>$ 3,185,281.20</strong>.</p>
                        <p>Para los créditos utilizados en viviendas usadas el precio promedio muestra un comportamiento fluctuante. Iniciando el año, el primer trimestre se refleja un precio promedio de <strong>$ 1,681,729.55</strong>. Para el segundo trimestre el precio aumentó a <strong>$1,910,429.65</strong>. Para el cierre del tercer trimestre el precio disminuyó ligeramente a <strong>$ 1,852,206.83</strong>. En el último trimestre el precio volvió a aumentar el precio hasta <strong>$2,088,024.64</strong>. promedio de un crédito fue de <strong>$1, 366, 860.78</strong>. Al final del año, el precio medio de un crédito fue de <strong>$ 1,883,097.67</strong>.</p>
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
                        <p>En la gráfica se observa el comportamiento del precio promedio de los créditos utilizados en viviendas nuevas y viviendas usadas, durante los trimestres del año 2023.</p>
                        <p>Para los créditos utilizados en viviendas nuevas el precio promedio de los créditos comienza el año con una tendencia a la baja, pasando de <strong>$3,077,496.74</strong> en el primer trimestre a <strong>$3,010,307.26</strong> en el segundo. A partir de ahí comienza una considerable tendencia al alza, ya que, para el tercer trimestre, el precio aumenta a <strong>$3,234,390.47</strong> y para el cuarto vuelve a aumentar, ahora hasta <strong>$3,533,271.69</strong>. Para el final del año el precio promedio de un crédito fue de <strong>$ 3,213,866.54</strong>.</p>
                        <p>Para los créditos utilizados en viviendas usadas el precio promedio de los créditos comienza el año con una tendencia a la baja, pasando de <strong>$2,278,309.81</strong> en el primer trimestre a <strong>$2,205,514.30</strong> en el segundo. A partir de ahí comienza una leve tendencia al alza, ya que, para el tercer trimestre, el precio aumenta a <strong>$2,314,549.12</strong> y para el cuarto vuelve a aumentar, ahora hasta <strong>$2,381,237.88</strong>. Para el final del año el precio promedio de un crédito fue de <strong>$ 2,294,902.78</strong>.</p>
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
                        <p>En la gráfica se observa el comportamiento del precio promedio de los créditos utilizados en viviendas nuevas y viviendas usadas, durante los trimestres del año 2024.</p>
                        <p>Para los créditos utilizados en viviendas nuevas el precio promedio muestra una tendencia al alza en los dos trimestres analizados hasta el momento. Iniciando, el primer trimestre el precio promedio de un crédito es de <strong>$ 2,763,881.63</strong>. El segundo trimestre promedió un precio de <strong>$ 2,839,760.09</strong>. Para el final del año el precio promedio de un crédito fue de <strong>$ 2,801,820.86</strong>.</p>
                        <p>Para los créditos utilizados en viviendas usadas el precio promedio muestra una tendencia al alza en los dos trimestres analizados hasta el momento. Iniciando, el primer trimestre el precio promedio de un crédito es de <strong>$ 2,155,148.65</strong>. El segundo trimestre promedió un precio de <strong>$ 2,305,487.31</strong>. Para el final del año el precio promedio de un crédito fue de <strong>$ 2,230,317.98</strong>.</p>
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
            // Mostrar la gráfica de 2022 por defecto al cargar la página
            window.onload = function() {
                showYearlyData('2019');
            };
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
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalEstacionalidad">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalEstacionalidad">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_estacionalidad.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Description -->
        <div class="modal fade" id="descriptionModalEstacionalidad" tabindex="-1" aria-labelledby="descriptionModalLabelEstacionalidad" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descriptionModalLabelEstacionalidad">Descripción</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Representación del comportamiento de la concesión de de créditos durante los trimestres de 2022, 2023 y 2024 en la ciudad de Santiago de Querétaro.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Interpretation -->
        <div class="modal fade" id="interpretationModalEstacionalidad" tabindex="-1" aria-labelledby="interpretationModalLabelEstacionalidad" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabelEstacionalidad">Interpretación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Durante los trimestres de 2022 y 2023, se otorgó un número similar de créditos, donde <strong>2,250</strong> fue el número máximo de créditos otorgados en Querétaro.</p>
                        <p>En 2024, los dos primeros trimestres, el panorama crediticio es diferente a los años anteriores, ya que durante estos trimestres el número otorgado fue mayor, aproximadamente <strong>2,700</strong> créditos.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>



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
                            <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_dist_propiedades_segmento_2023.html" width="100%" height="400" frameborder="0"></iframe>
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
                            <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_dist_propiedades_segmento_2023.html" width="100%" height="400" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Description -->
        <div class="modal fade" id="descriptionModal5" tabindex="-1" aria-labelledby="descriptionModalLabel5" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descriptionModalLabel5">Descripción</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Se muestra la segmentación del mercado inmobiliario en Querétaro para el año 2023, representando la distribución de propiedades por segmento de precio. Cada segmento está clasificado en función del valor de las propiedades, desde el segmento D (1 millón a 1.75 millones) hasta el segmento S (4 millones a 12 millones). La gráfica permite identificar la concentración del mercado en cada rango de precios, lo que es útil para entender las tendencias de compra y venta en la región.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Interpretation -->
        <div class="modal fade" id="interpretationModal5" tabindex="-1" aria-labelledby="interpretationModalLabel5" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel5">Interpretación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>La mayor concentración de propiedades se encuentra en el segmento S (4 a 12 millones) con un 33.4%. Esto indica una fuerte presencia de propiedades de alto valor en el mercado inmobiliario de Querétaro, reflejando el crecimiento económico de la región y la demanda por inmuebles de lujo o de mayor valor. En segundo lugar, está el segmento B (2.5 a 3.25 millones) con un 26.3%, seguido por el segmento A (3.25 a 4 millones), lo que sugiere un interés sostenido en propiedades de rango medio-alto. Por otro lado, los segmentos D (1 millón a 1.75 millones) y C (1.75 millones a 2.5 millones) tienen una menor participación, lo que puede estar relacionado con una menor oferta o una preferencia de los compradores por inmuebles de mayor valor en la zona. Esta distribución puede estar influenciada por la atracción de inversionistas y compradores con mayor poder adquisitivo, así como por el desarrollo de proyectos inmobiliarios exclusivos en la región.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalSegmento">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalSegmento">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_precio_promedio_segmento.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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
                <p>La gráfica muestra el promedio de precios por segmento en el mercado inmobiliario. Cada barra representa el valor promedio de las propiedades dentro de cada segmento, desde el segmento S, hasta el segmento E. Este gráfico es útil para visualizar cómo varían los precios promedio de las propiedades en cada categoría.</p>
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
                <p>La interpretación de esta gráfica proporciona información clave sobre cómo varían los precios promedio en distintos segmentos de mercado, ayudando a entender las tendencias y diferencias entre ellos.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
                    <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModalPrecioOferta">Descripción</button>
                    <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModalPrecioOferta">Interpretación</button>
                </div>
            </div>
            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_precio_oferta_mediana.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Description -->
<div class="modal fade" id="descriptionModalPrecioOferta" tabindex="-1" aria-labelledby="descriptionModalLabelPrecioOferta" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionModalLabelPrecioOferta">Descripción</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Se muestra el histórico de la mediana del precio de oferta de los inmuebles en Querétaro durante el año <strong>2024</strong>. La gráfica permite observar la evolución del precio de oferta a lo largo de los meses, desde <strong>marzo</strong> hasta <strong>agosto</strong> de <strong>2024</strong>. Este tipo de gráfico es útil para identificar tendencias en el mercado inmobiliario, tales como aumentos o disminuciones en los precios de oferta, lo que puede estar influenciado por diversos factores económicos, estacionales o de demanda.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal for Interpretation -->
<div class="modal fade" id="interpretationModalPrecioOferta" tabindex="-1" aria-labelledby="interpretationModalLabelPrecioOferta" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="interpretationModalLabelPrecioOferta">Interpretación</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>La gráfica refleja primero un valor constante de <strong>4.5 millones</strong> desde <strong>marzo</strong> hasta <strong>mayo</strong>. Para posteriormente, mostrar una tendencia a la baja muy pronunciada, sobre todo durante <strong>mayo</strong>, en la mediana del precio de oferta de los inmuebles constante desde <strong>abril</strong> de <strong>2024</strong>. Este descenso puede estar relacionado con una serie de factores, como un ajuste en la oferta y demanda del mercado, cambios en la economía local, o variaciones estacionales en el mercado inmobiliario. La caída en la mediana del precio de oferta podría indicar un periodo de desaceleración en el mercado inmobiliario de Querétaro durante este año.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
                        <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_scatt_precio_oferta.html" width="100%" height="400" frameborder="0"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Description -->
        <div class="modal fade" id="descriptionModal10" tabindex="-1" aria-labelledby="descriptionModalLabel10" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="descriptionModalLabel10">Descripción</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>El gráfico muestra una drástica caída en los precios de oferta en el mes de <strong>abril</strong>, seguida de un repunte constante a partir de <strong>mayo</strong>, alcanzando su punto más alto en <strong>agosto</strong>. La caída inicial en <strong>abril</strong> puede estar relacionada con una reducción temporal en la demanda o con factores estacionales que afectaron el mercado en ese periodo. La recuperación posterior y el incremento sostenido en los meses siguientes sugieren un fortalecimiento del mercado inmobiliario, posiblemente impulsado por una creciente demanda, propiciada por la expansión económica de la región y la llegada de nuevos desarrollos en Querétaro, lo que genera una presión al alza en los precios de las propiedades. </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal for Interpretation -->
        <div class="modal fade" id="interpretationModal10" tabindex="-1" aria-labelledby="interpretationModalLabel10" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="interpretationModalLabel10">Interpretación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>La gráfica refleja primero un valor constante de <strong>4.5 millones</strong> desde <strong>marzo</strong> hasta <strong>mayo</strong>. Para posteriormente, mostrar una tendencia a la baja muy pronunciada, sobre todo durante <strong>mayo</strong>, en la mediana del precio de oferta de los inmuebles constante desde <strong>abril</strong> de <strong>2024</strong>. Este descenso puede estar relacionado con una serie de factores, como un ajuste en la oferta y demanda del mercado, cambios en la economía local, o variaciones estacionales en el mercado inmobiliario. La caída en la mediana del precio de oferta podría indicar un periodo de desaceleración en el mercado inmobiliario de Querétaro durante este año.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
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
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_monto_2022.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2022" style="display: block;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_monto_2023.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2023" style="display: none;"></iframe>
                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_bar_creditos_monto_2024.html" width="100%" height="400" frameborder="0" id="yearlyDataMontos2024" style="display: none;"></iframe>
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
                <p><strong>Descripción:</strong> Se muestra la cantidad de créditos otorgados en el año <strong>2022</strong> en <strong>Querétaro</strong>, segmentados según el monto de los créditos. El eje X representa diferentes rangos de valores de los créditos otorgados, desde menos de <strong>1 millón</strong> hasta menos de <strong>20 millones de pesos</strong>, mientras que el eje Y indica la cantidad total de créditos en cada uno de esos rangos. Este tipo de gráfico permite identificar las tendencias en el otorgamiento de créditos según su valor, lo cual es útil para entender cuáles son los montos más comunes de financiamiento solicitados.</p>
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
                <p><strong>Interpretación:</strong> La mayor concentración de créditos se encuentra en el rango de menos de <strong>1 millón de pesos</strong>, lo cual puede explicarse por la mayor parte de la demanda de créditos que proviene de compradores jóvenes, ya que la edad promedio de <strong>Querétaro</strong> es de <strong>29 años</strong>, o de familias que buscan vivienda asequible. La participación significativa en el rango de menos de <strong>20 millones</strong> también sugiere un sector del mercado enfocado en créditos de alto valor, probablemente relacionado con grandes proyectos inmobiliarios o inversiones en propiedades de lujo.</p>
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
                <p><strong>Interpretación:</strong> La mayor concentración de créditos sigue estando en el rango de menos de <strong>1 millón de pesos</strong>, lo que sugiere que una gran parte de la población de <strong>Querétaro</strong> continúa solicitando créditos de montos bajos. Por otro lado, la notable participación de créditos de menos de <strong>20 millones de pesos</strong> indica una demanda creciente en proyectos de alto valor, impulsada por inversionistas o compradores con mayor capacidad adquisitiva.</p>
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
                <p><strong>Interpretación:</strong> En <strong>2024</strong>, la mayor cantidad de créditos sigue concentrándose en el rango de menos de <strong>1 millón de pesos</strong>. Este comportamiento está relacionado con la estructura económica de <strong>Querétaro</strong>. La participación constante de los créditos de mayor monto, especialmente en el rango de menos de <strong>20 millones de pesos</strong>, sugiere que existe un mercado robusto para proyectos inmobiliarios de lujo o de alto valor.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script>
    function showYearlyDataMontos(year) {
        // Ocultar todas las gráficas
        document.getElementById('yearlyDataMontos2022').style.display = 'none';
        document.getElementById('yearlyDataMontos2023').style.display = 'none';
        document.getElementById('yearlyDataMontos2024').style.display = 'none';

        // Mostrar la gráfica correspondiente al año seleccionado
        if (year) {
            document.getElementById(`yearlyDataMontos${year}`).style.display = 'block';
        }

        // Actualizar el botón de interpretación según el año
        const interpretationButton = document.getElementById('interpretationButtonMontos');
        interpretationButton.setAttribute('data-bs-target', `#interpretationModalMontos${year}`);
    }
</script>





        <!-- Perspectiva Mercado -->
        <!-- <div class="col-md-12">
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
        </div> -->

        <!-- Distribución de Colonias -->
        <!-- <div class="col-md-12">
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
        </div> -->

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
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_dist_propiedades_segmento_2023.html" width="100%" height="400" frameborder="0"></iframe>
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
                                <iframe src="/datalpine/resources/Ciudades/Tulancingo/assets/graficas/g_pie_dist_propiedades_segmento_2024.html" width="100%" height="400" frameborder="0"></iframe>
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