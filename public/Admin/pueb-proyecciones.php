<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Puebla | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>

    <!-- jquery.vectormap css -->
    <link href="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet"
        type="text/css" />

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
                            <h4 class="mb-sm-0 font-size-18">Puebla</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Estados</a></li>
                                    <li class="breadcrumb-item active">Puebla</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- 6. Proyecciones Oportunidades de Inversión y Análisis de Colonias -->
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
                    <h1>Proyecciones Oportunidades de Inversión y Análisis de Colonias</h1>
                </div>
                <p style="font-size: 18px; line-height: 1.5; color: #444;">>Esta sección muestra un análisis exhaustivo
                    de las proyecciones y tendencias del mercado inmobiliario en los próximos años, proporcionando una
                    visión detallada de elementos cruciales como el precio promedio de la vivienda, la dinámica de los
                    créditos otorgados, el tiempo en el mercado y el crecimiento poblacional.</p>

                <!-- Proyeccion Forecast Media Anual -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Proyeccion Forecast Media Anual<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica 
                        <iframe src="/datalpine/resources/jupyter/graficas/g_scatt_preciomediaanual_direct_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>-->
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description1')">Descripción</button>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="description" id="description1" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                La gráfica presenta una proyección del precio medio de las propiedades en Pachuca
                                para los próximos años. Estos datos anticipan la dirección esperada en la evolución
                                del valor promedio de las viviendas.
                            </p>                           
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">En el año
                                    <strong>2023</strong>, el precio medio de las propiedades en Pachuca se situó en
                                    <strong>$2,039,843.00</strong>, y se anticipa que este valor mantendrá una
                                    trayectoria
                                    de crecimiento constante, alcanzando los <strong>$2,644,873.55</strong> en el año
                                    <strong>2026</strong>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Plusvalía estimada (5 años) -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">

                    <!-- Link de la gráfica -->
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="card-title"
                                    style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                    Plusvalía estimada (5 años)<span class="text-muted fw-normal ms-2"></span>
                                </h5>
                            </div>
                        </div>
                        <div>
                            <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido1')"
                                value="Estimación">
                            <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido2')"
                                value="Porcentual">
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_plusvaliaestimada_direct_pachuca.html"
                                    id="contenido1"></iframe>
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_plusvaliaestimada_porcentual_direct_pachuca.html"
                                    id="contenido2" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description2')">Descripción</button>
                        </div>
                        <div class="description" id="description2" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Los datos presentados ofrecen una vista anticipada del valor promedio de las
                                propiedades en los próximos cinco años. Reflejando la posible dirección de
                                crecimiento o reducción en el precio de las viviendas.
                            </p>                           
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Los datos revelan una proyección ascendente en la plusvalía del precio promedio de
                                    las viviendas en Pachuca para los próximos años. En el año <strong>2023</strong>, se
                                    muestra un valor de <strong>$3,534,894.07</strong>, evidenciando un crecimiento
                                    significativo que se espera continúe de manera constante hasta alcanzar
                                    <strong>$14,633,277.84</strong> en el año <strong>2026</strong>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Forecast créditos generales (cantidad) -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Forecast créditos generales (cantidad)<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_scatt_forecastcreditgral_conteo_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description3')">Descripción</button>
                        </div>
                        <div class="description" id="description3" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Estos datos representan las proyecciones de créditos generales en cantidad para los
                                años <strong> 2019 a 2026 </strong>, desglosados en dos categorías:
                                <strong>'Vivienda Nueva'</strong> y <strong>'Vivienda
                                        Usada'</strong>. A lo largo de este periodo, se proporciona información sobre el
                                    <strong>número total
                                        de créditos</strong> otorgados, así como la cantidad específica de créditos
                                    destinados a
                                    viviendas nuevas y usadas
                            </p>                           
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Entre los años <strong>2019 y 2021</strong>, se observó una variación
                                        significativa en el número total de créditos, alcanzando niveles destacados
                                        durante esos años. Sin embargo, en <strong>2022</strong>, se registra una
                                        marcada disminución en el total de créditos.</li>
                                    <li> En cuanto a las proyecciones para las categorías <strong>"Vivienda
                                            Nueva"</strong> y <strong>"Vivienda Usada"</strong>, ambas muestran patrones
                                        similares de descenso en <strong>2022</strong>, con un ligero repunte anticipado
                                        en los años que siguen a este periodo. Se espera que la categoría de
                                        <strong>"Vivienda Nueva"</strong> experimente una recuperación progresiva,
                                        alcanzando <strong>669 créditos</strong> en el año <strong>2026</strong>,
                                        mientras que la categoría de <strong>"Vivienda Usada"</strong> se proyecta a
                                        recuperarse hasta alcanzar <strong>57 créditos</strong> en el mismo año, después
                                        de la disminución observada en <strong>2022</strong>.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Forecast créditos generales (valor ) -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">

                    <!-- Link de la gráfica -->
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="card-title"
                                    style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                    Forecast créditos generales (valor )<span class="text-muted fw-normal ms-2"></span>
                                </h5>
                            </div>
                        </div>
                        <div>
                            <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido8')"
                                value="Segmentos">
                            <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido9')"
                                value="General">
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_forecastcreditgral_total_pachuca.html"
                                    id="contenido8"></iframe>
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_forecastcreditgral_promedio_pachuca.html"
                                    id="contenido9" style="display: none;"></iframe>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description4')">Descripción</button>
                        </div>
                        <div class="description" id="description4" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Se muestran las proyecciones de créditos generales en términos de valor monetario
                                    <strong>(total y promedio)</strong> para los años <strong>2019 a 2026</strong>,
                                    subdividiendose en las categorías
                                    <strong>"Vivienda Nueva"</strong> y <strong>"Vivienda Usada"</strong> ,
                                    proporcionando un análisis detallado de cómo
                                    se espera que evolucione el valor monetario de los créditos en estas dos
                                    clasificaciones a lo largo de los años proyectados.
                            </p>                           
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li><strong>Monto total</strong>: El monto total de créditos en Pachuca presenta una
                                        proyección ascendente, estimándose un aumento de
                                        <strong>$1,476,067,496.32</strong> en <strong>2019</strong> a
                                        <strong>$3,740,297,148.39</strong> en <strong>2026</strong>. Esta tendencia
                                        refleja un crecimiento constante a lo largo del periodo analizado.
                                    </li>
                                    <p>Para <strong>vivienda nueva</strong> se observa un aumento gradual de
                                        <strong>$1,030,751,267.28</strong> en <strong>2019</strong> a
                                        <strong>$2,066,886,543.92</strong> en <strong>2026</strong> evidenciando una
                                        estabilidad y crecimiento constante en los años posteriores.
                                    </p>
                                    <p>Por otro lado, los créditos destinados a la <strong>"Vivienda Usada"</strong>
                                        aunque se registran fluctuaciones, destaca un incremento progresivo de
                                        <strong>$5,098,355.41</strong> en <strong>2019</strong> a
                                        <strong>$9,964,910.88</strong> en <strong>2026</strong>.
                                    </p>
                                    <li><strong>Monto promedio</strong>: Para todas las categorías, se evidencia un
                                        crecimiento constante de <strong>$1,214,870.37</strong> en <strong>2019</strong>
                                        a <strong>$2,940,485.18</strong> en <strong>2026</strong>.</li>
                                    <p>En relación a <strong>"Vivienda Nueva"</strong> en Pachuca, se observa una
                                        trayectoria ascendente en los montos promedio por crédito a lo largo de los años
                                        proyectados. Desde <strong>$1,662,502.04</strong> en <strong>2019</strong>, se
                                        anticipa un crecimiento constante hasta alcanzar <strong>$3,399,484.45</strong>
                                        en <strong>2026</strong>.</p>
                                    <p>En cuanto a la categoría de <strong>"Vivienda Usada"</strong> en Pachuca, se
                                        observa una variación en los montos promedio por crédito a lo largo de los años
                                        proyectados. Partiendo de <strong>$67,978.07</strong> en <strong>2019</strong>,
                                        se experimenta un aumento a <strong>$191,632.90</strong> en
                                        <strong>2026</strong>.
                                    </p>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Forecast Casas y Departamentos -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Forecast Casas y Departamentos<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_scatt_casasdepart_proyecanualofert_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description5')">Descripción</button>
                        </div>
                        <div class="description" id="description5" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                    Proporciona estimaciones porcenctuales anuales sobre la tendencia en la cantidad de
                                    casas y departamentos que se anticipa serán ofertados en cada año, abarcando desde
                                    el presente hasta los próximos años.
                            </p>                           
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>La línea azul representa el porcentaje de cambio en la oferta de casas. Comienza
                                        en un <strong>75%</strong> en <strong>2023</strong>, aumenta a un
                                        <strong>135%</strong> en <strong>202</strong>4, y llega a un pico del
                                        <strong>161%</strong> tanto para los años 2025 como para el año siguiente. Esto
                                        indica un aumento significativo en la oferta de casas durante este período.
                                    </li>
                                    <li>La línea roja representa el porcentaje de cambio en la oferta de departamentos.
                                        De acuerdo a la tendencia comienza con una disminución del <strong>22%</strong>
                                        en <strong>2024</strong>, para el año siguiente, disminuye ligeramente a
                                        <strong>15%</strong> y se mantiene constante durante el próximo año. Esto
                                        sugiere que la oferta de departamentos se mantiene a la baja durante este
                                        período.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tiempo en el mercado -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Tiempo en el mercado<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_tiempomercado_pachuca.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;">
                        </iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description6')">Descripción</button>
                        </div>
                        <div class="description" id="description6" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                La distribución se presenta en cinco categorías según el número de días que las
                                    propiedades han estado disponibles, lo que proporciona información sobre la
                                    disponibilidad y el estado actual de las propiedades en el mercado inmobiliario.
                            </p>                           
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>El análisis de la información revela que la categoría con el mayor número de
                                        unidades es la de <strong>"101-365 días"</strong>, con un total de
                                        <strong>1319</strong> unidades. Este intervalo de tiempo indica que una cantidad
                                        significativa de unidades inmobiliarias permanecen en el mercado durante un
                                        periodo relativamente prolongado antes de concretar la venta.
                                    </li>
                                    <li>Por otro lado, la categoría con el menor número de unidades es la de
                                        <strong>"0-10 días"</strong>, que registra <strong>159</strong> unidades.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Proyección poblacional -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Proyección poblacional<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_bar_proyeccionpoblacional_hidalgo_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;">
                        </iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description7')">Descripción</button>
                        </div>
                        <div class="description" id="description7" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                La proyección poblacional es una estimación de cuántas personas se espera que vivan
                                    en una región o área geográfica específica a lo largo de varios años.
                            </p>                           
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    La estimación poblacional revela un crecimiento progresivo en la región a lo largo
                                    de los años <strong>2020 a 2026</strong>. Iniciando con <strong>6,583,278
                                        habitantes</strong> en <strong>2020</strong>, la población
                                    experimenta un incremento constante, alcanzando los <strong>11,556,676</strong>
                                    habitantes en <strong>2026</strong>.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Riesgo -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Riesgo<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_pie_riesgo_pachuca.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                            <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description8')">Descripción</button>
                        </div>
                        <div class="description" id="description8" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                El riesgo de stock en el mercado inmobiliario se relaciona con la cantidad de casas
                                    disponibles durante distintos lapsos de tiempo. Esta métrica es esencial para
                                    evaluar la dinámica de oferta y demanda en el sector.
                            </p>                           
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    En este contexto, las casas que llevan más de un año en stock
                                    <strong>(16.6%)</strong> representan un
                                    riesgo menor en términos de porcentaje, pero aún así indican una proporción
                                    significativa. Por otro lado, las casas que llevan menos de un año en stock
                                    representan la mayoría en términos porcentuales <strong>(84.44%)</strong> e indican
                                    una rotación más
                                    activa del inventario.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Proyección en días -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Proyección en días<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_scatt_stockdias_pachuca.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                            <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description9')">Descripción</button>
                        </div>
                        <div class="description" id="description9" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                La proyección en días permite anticipar la duración promedio que las propiedades
                                    podrían requerir para su venta, lo que resulta esencial para ajustar estrategias de
                                    comercialización, establecer precios competitivos y adaptarse a las dinámicas
                                    cambiantes del mercado.
                            </p>                           
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>En el historial de stock, se evidencia una duración de <strong>165 días</strong>
                                        en <strong>julio de 2023</strong>, seguida de una ligera reducción a <strong>155
                                            días</strong> en <strong>agosto</strong> y <strong>145 días</strong> en
                                        <strong>septiembre</strong>. La proyección para <strong>octubre, noviembre y
                                            diciembre</strong> sugiere una continuación de esta tendencia, con
                                        estimaciones de <strong>150, 148 y 149 días</strong> respectivamente.
                                    </li>
                                    <li>La tendencia descendente en los días en stock refleja un posible aumento en la
                                        demanda o una mejora en las estrategias de comercialización, factores que
                                        contribuyen a una mayor dinámica en la rotación del inventario.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Meses de oferta (Month of Supply) -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Meses de oferta (Month of Supply)<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_scatt_mesesoferta_pachuca.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description10')">Descripción</button>
                        </div>
                        <div class="description" id="description10" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                Los meses de oferta es una métrica que refleja cuantos meses pasarían antes de que
                                    todas las propiedades disponibles se agotaran si las mismas se compraran con los
                                    créditos demandados (es decir, si se usaran todos los créditos disponibles de dicho
                                    mes) . Se calcula dividiendo el total de propiedades del mes listadas en el mercado
                                    inmobiliario entre el promedio mensual del volumen de créditos demandados durante
                                    dicho año.
                            </p>                           
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Este gráfico te permite visualizar cómo es la relación entre la oferta de
                                    propiedades y la demanda de créditos a lo largo del tiempo. Un promedio de meses
                                    alto indica que se tiene un mercado más competitivo, puesto que hay más propiedades
                                    "peleando" contra los créditos otorgados para dicho mercado inmobiliario. En
                                    <strong>julio
                                        de 2023</strong>, la cifra alcanzó su punto más alto, con aproximadamente
                                    <strong>37.89 meses</strong>. Esto
                                    podría sugerir un exceso de oferta de propiedades o una disminución en la demanda de
                                    créditos. Por otra parte, el mejor punto para invertir se encontró en octubre de
                                    <strong>2023</strong>, debido a que disminuyó significativamente a aproximadamente
                                    <strong>16.72 meses</strong>. Esto
                                    podría indicar una reducción en el número de propiedades listadas o un aumento en la
                                    demanda de créditos y, por lo tanto, un mercado menos competitivo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Cambio de Precios en el Mercado Inmobiliario de Pachuca -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Cambio de Precios en el Mercado Inmobiliario de Pachuca<span
                                    class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_precioscambiomes_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description11')">Descripción</button>
                        </div>
                        <div class="description" id="description11" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                    El gráfico de Análisis de Cambio de Precios a lo largo del tiempo ilustra los
                                    cambios porcentuales en los precios promedio de las propiedades en el mercado
                                    inmobiliario de Pachuca para los meses disponibles. Aquí están las perspectivas
                                    clave.
                            </p>                           
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Hay fluctuaciones significativas en los precios de mes a mes. Por ejemplo, hubo
                                        una disminución de aproximadamente el <strong>13.34%</strong> en
                                        <strong>noviembre de 2022</strong> en comparación con <strong>octubre de
                                            2022</strong>, seguida de un aumento notable del <strong>15.43%</strong> en
                                        <strong>febrero de 2023</strong>.
                                    </li>
                                    <li>El dato más reciente, <strong>diciembre de 2023</strong>, muestra una
                                        disminución del <strong>15.44%</strong> en comparación con <strong>septiembre de
                                            2023</strong>.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tendencia de Mercado & Dinamica de Precios -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Tendencia de Mercado & Dinamica de Precios<span
                                    class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_bar_volmercadosalarial_parejas_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                -->
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description12')">Descripción</button>
                        </div>
                        <div class="description" id="description12" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">
                                
                            </p>                           
                        </div>



                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    El mercado inmobiliario de Pachuca ha experimentado una considerable variabilidad
                                    durante el período examinado, como lo demuestran los datos de transacciones y los
                                    movimientos de precios promedio. Nuestro análisis actualizado ofrece las siguientes
                                    perspectivas:</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>El precio promedio de la propiedad experimentó una notable disminución en
                                        noviembre de <strong>2022</strong>, cayendo a <strong>2.69 millones de
                                            MXN</strong>, lo que significa una disminución del <strong>13.34%</strong>
                                        desde <strong>octubre de 2022</strong>. Esto fue seguido por un aumento a
                                        <strong>3.16 millones de MXN</strong> en <strong>febrero de 2023</strong>, un
                                        significativo aumento del <strong>15.43%</strong>, reflejando la resiliencia y
                                        el potencial de recuperación del mercado.
                                    </li>
                                    <li>En los meses siguientes, observamos una disminución en <strong>marzo de
                                            2023</strong>, con precios promedio cayendo a <strong>2.72 millones de
                                            MXN</strong>, y un aumento en <strong>junio de 2023</strong>, subiendo
                                        nuevamente a <strong>3.02 millones de MXN</strong>. Los datos más recientes de
                                        <strong>diciembre de 2023</strong> muestran una disminución a <strong>2.58
                                            millones de MXN</strong>.
                                    </li>
                                    <li>Los volúmenes de transacciones fluctuaron correspondientemente, alcanzando un
                                        pico en <strong>febrero de 2023</strong>, lo que se alinea con el aumento en los
                                        precios promedio, sugiriendo una actividad de mercado incrementada durante ese
                                        período.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Precio promedio por número de baños -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Precio promedio por número de baños <span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_PrecioPromediobaños_v_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>

                        <!-- Explicación de la gráfica -->
                        <!--
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Este análisis de distribución de precios ofrece una visión clara de la composición
                                    del mercado en Pachuca, destacando la prevalencia de propiedades asequibles y de
                                    gama media. También apunta a la existencia de un mercado de gama alta más exclusivo,
                                    aunque estas propiedades son menos comunes. Esta información es crucial para
                                    comprender la dinámica del mercado y las oportunidades de inversión potenciales,
                                    especialmente para enfocarse en segmentos de precios específicos.</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li><strong>Rangos de Precios Más Comunes:</strong> La mayoría de las propiedades se
                                        encuentran en el rango de <strong>1M a 3M de pesos</strong>. Específicamente,
                                        alrededor del <strong>31.82%</strong> de las propiedades tienen precios entre
                                        <strong>1M y 2M</strong> de pesos, y aproximadamente el <strong>30.19%</strong>
                                        están en el rango de <strong>2M a 3M</strong> de pesos.
                                    </li>
                                    <li><strong>Propiedades de Gama Media:</strong> El rango de <strong>3M a 4M</strong>
                                        de pesos representa el <strong>16.50%</strong> del mercado, indicando una
                                        presencia significativa de propiedades de gama media.</li>
                                    <li><strong>Segmento de Mercado de Alto Nivel:</strong> A medida que nos movemos
                                        hacia rangos de precios más altos, el porcentaje de propiedades disminuye. El
                                        rango de <strong>4M a 5M</strong> de pesos abarca el <strong>6.90%</strong> del
                                        mercado, y el rango de <strong>5M a 6M</strong> de pesos incluye alrededor del
                                        <strong>3.46%</strong>.
                                    </li>
                                    <li><strong>Propiedades de Lujo:</strong> Las propiedades con precios superiores a
                                        9M de pesos representan una pequeña fracción del mercado, señalando un segmento
                                        limitado pero distintivo de propiedades de lujo.</li>
                                </ul>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Precio Promedio de la Propiedad por Número de Habitaciones (de 1 a 5)</strong>
                            </p>
                            <div style="text-align: left;">
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    En Pachuca, el precio promedio de la propiedad muestra una tendencia variada a
                                    medida que aumenta el número de habitaciones. Para propiedades con dos habitaciones,
                                    hay una disminución de aproximadamente el **20.34%** en comparación con aquellas de
                                    una habitación. Sin embargo, esta tendencia se invierte para propiedades de tres
                                    habitaciones, que muestran un aumento significativo del **56.98%** en comparación
                                    con las propiedades de dos habitaciones. La tendencia continúa con propiedades de
                                    cuatro habitaciones, que son **47.41%** más caras que las de tres habitaciones. El
                                    aumento es más modesto para las propiedades de cinco habitaciones, mostrando un
                                    aumento del **4.19%** sobre las propiedades de cuatro habitaciones. Estas cifras
                                    destacan una clara preferencia del mercado por propiedades de tres y cuatro
                                    habitaciones, que se consideran más valiosas, probablemente debido a su idoneidad
                                    para familias o segmentos de mercado de mayor nivel.</p>
                            </div>
                        </div>
                -->

                    </div>
                </div>
                <!-- Precio Promedio de la Propiedad por Número de Baños (de 1 a 4) -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Precio Promedio de la Propiedad por Número de Baños (de 1 a 4)<span
                                    class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_PrecioPromediobaños_14_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Este análisis de distribución de precios ofrece una visión clara de la composición
                                    del mercado en Pachuca, destacando la prevalencia de propiedades asequibles y de
                                    gama media. También apunta a la existencia de un mercado de gama alta más exclusivo,
                                    aunque estas propiedades son menos comunes. Esta información es crucial para
                                    comprender la dinámica del mercado y las oportunidades de inversión potenciales,
                                    especialmente para enfocarse en segmentos de precios específicos.</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li><strong>Rangos de Precios Más Comunes:</strong> La mayoría de las propiedades se
                                        encuentran en el rango de <strong>1M a 3M de pesos</strong>. Específicamente,
                                        alrededor del <strong>31.82%</strong> de las propiedades tienen precios entre
                                        <strong>1M y 2M</strong> de pesos, y aproximadamente el <strong>30.19%</strong>
                                        están en el rango de <strong>2M a 3M</strong> de pesos.
                                    </li>
                                    <li><strong>Propiedades de Gama Media:</strong> El rango de <strong>3M a 4M</strong>
                                        de pesos representa el <strong>16.50%</strong> del mercado, indicando una
                                        presencia significativa de propiedades de gama media.</li>
                                    <li><strong>Segmento de Mercado de Alto Nivel:</strong> A medida que nos movemos
                                        hacia rangos de precios más altos, el porcentaje de propiedades disminuye. El
                                        rango de <strong>4M a 5M</strong> de pesos abarca el <strong>6.90%</strong> del
                                        mercado, y el rango de <strong>5M a 6M</strong> de pesos incluye alrededor del
                                        <strong>3.46%</strong>.
                                    </li>
                                    <li><strong>Propiedades de Lujo:</strong> Las propiedades con precios superiores a
                                        9M de pesos representan una pequeña fracción del mercado, señalando un segmento
                                        limitado pero distintivo de propiedades de lujo.</li>
                                </ul>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Precio Promedio de la Propiedad por Número de Habitaciones (de 1 a 5)</strong>
                            </p>
                            <div style="text-align: left;">
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    En Pachuca, el precio promedio de la propiedad muestra una tendencia variada a
                                    medida que aumenta el número de habitaciones. Para propiedades con dos habitaciones,
                                    hay una disminución de aproximadamente el **20.34%** en comparación con aquellas de
                                    una habitación. Sin embargo, esta tendencia se invierte para propiedades de tres
                                    habitaciones, que muestran un aumento significativo del **56.98%** en comparación
                                    con las propiedades de dos habitaciones. La tendencia continúa con propiedades de
                                    cuatro habitaciones, que son **47.41%** más caras que las de tres habitaciones. El
                                    aumento es más modesto para las propiedades de cinco habitaciones, mostrando un
                                    aumento del **4.19%** sobre las propiedades de cuatro habitaciones. Estas cifras
                                    destacan una clara preferencia del mercado por propiedades de tres y cuatro
                                    habitaciones, que se consideran más valiosas, probablemente debido a su idoneidad
                                    para familias o segmentos de mercado de mayor nivel.</p>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Precio Promedio de la Propiedad por Número de Baños (de 1 a 4)</strong>
                            </p>
                            <div style="text-align: left;">
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    Los datos para Pachuca revelan una tendencia ascendente consistente en los precios
                                    de las propiedades con el aumento en el número de baños. Las propiedades con dos
                                    baños tienen un precio <strong>51.40%</strong> más alto en promedio que aquellas con
                                    solo uno. Esta tendencia ascendente continúa con propiedades de tres baños, que son
                                    <strong>31.52%</strong> más caras que las de dos baños. La tendencia es aún más
                                    pronunciada para las propiedades con cuatro baños, mostrando un incremento del
                                    <strong>39.80%</strong> sobre las de tres baños. Este aumento constante en el precio
                                    con baños adicionales indica una fuerte preferencia del mercado por propiedades con
                                    más comodidades, reflejando la demanda de confort y lujo.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Tendencias de Mercado en Colonias -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Tendencias de Mercado en Colonias<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_colbaratas_t5_pachuca.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <!--  
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>'Colonias' Activas en el Mercado Inmobiliario de Pachuca</li>
                                </ul>
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    El primer gráfico ofrece una imagen reveladora del paisaje inmobiliario de Pachuca,
                                    mostrando la distribución de la actividad del mercado a través de varias colonias.
                                    Al presentar los datos en términos de porcentaje del total de anuncios, obtenemos
                                    una perspectiva comparativa clara. Colonias como "centro" dominan el mercado,
                                    representando una proporción significativa de los anuncios, lo que podría indicar
                                    una alta demanda de propiedades en estas áreas. Esto también sugiere una
                                    concentración de la vitalidad del mercado en el núcleo de la ciudad, posiblemente
                                    impulsada por el atractivo de las comodidades urbanas y las oportunidades de empleo.
                                    Sin embargo, es crucial considerar que la alta actividad también puede resultar en
                                    un mercado competitivo para los compradores y podría indicar un mercado de alquiler
                                    saturado, factores que deben ser evaluados por inversores potenciales o aquellos que
                                    consideren ingresar al mercado.</p>
                            </div>
                        </div>
                        
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    El gráfico ilumina la naturaleza premium de ciertas colonias, como "club de golf" y
                                    "valle del sol", donde los precios promedio superan la marca de 5 millones de pesos.
                                    Estas cifras sugieren un segmento inmobiliario de alto nivel en estas áreas,
                                    probablemente caracterizado por amenidades de lujo, propiedades más grandes y
                                    demografías más acaudaladas. Para inversores o desarrolladores, estos son los
                                    distritos donde las estrategias de mercado de gama alta podrían ser más efectivas.
                                </p>
                            </div>
                        </div>
                -->
                    </div>
                </div>
                <!-- 'Colonias' de Alto Potencial en Pachuca -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                'Colonias' de Alto Potencial en Pachuca<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_colpred_t5_pachuca.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <!--
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>'Colonias' Activas en el Mercado Inmobiliario de Pachuca</li>
                                </ul>
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    El primer gráfico ofrece una imagen reveladora del paisaje inmobiliario de Pachuca,
                                    mostrando la distribución de la actividad del mercado a través de varias colonias.
                                    Al presentar los datos en términos de porcentaje del total de anuncios, obtenemos
                                    una perspectiva comparativa clara. Colonias como "centro" dominan el mercado,
                                    representando una proporción significativa de los anuncios, lo que podría indicar
                                    una alta demanda de propiedades en estas áreas. Esto también sugiere una
                                    concentración de la vitalidad del mercado en el núcleo de la ciudad, posiblemente
                                    impulsada por el atractivo de las comodidades urbanas y las oportunidades de empleo.
                                    Sin embargo, es crucial considerar que la alta actividad también puede resultar en
                                    un mercado competitivo para los compradores y podría indicar un mercado de alquiler
                                    saturado, factores que deben ser evaluados por inversores potenciales o aquellos que
                                    consideren ingresar al mercado.</p>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    El gráfico ilumina la naturaleza premium de ciertas colonias, como "club de golf" y
                                    "valle del sol", donde los precios promedio superan la marca de 5 millones de pesos.
                                    Estas cifras sugieren un segmento inmobiliario de alto nivel en estas áreas,
                                    probablemente caracterizado por amenidades de lujo, propiedades más grandes y
                                    demografías más acaudaladas. Para inversores o desarrolladores, estos son los
                                    distritos donde las estrategias de mercado de gama alta podrían ser más efectivas.
                                </p>
                            </div>
                        </div>
                -->
                    </div>
                </div>
                <!-- Colonias Para inversión (las que más han crecido en precio m² trimestre) -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Colonias Para inversión (las que más han crecido en precio m² trimestre)<span
                                    class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_colcaras_t5_pachuca.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>

                        <!-- Explicación de la gráfica -->
                        <!--
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>'Colonias' Activas en el Mercado Inmobiliario de Pachuca</li>
                                </ul>
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    El primer gráfico ofrece una imagen reveladora del paisaje inmobiliario de Pachuca,
                                    mostrando la distribución de la actividad del mercado a través de varias colonias.
                                    Al presentar los datos en términos de porcentaje del total de anuncios, obtenemos
                                    una perspectiva comparativa clara. Colonias como "centro" dominan el mercado,
                                    representando una proporción significativa de los anuncios, lo que podría indicar
                                    una alta demanda de propiedades en estas áreas. Esto también sugiere una
                                    concentración de la vitalidad del mercado en el núcleo de la ciudad, posiblemente
                                    impulsada por el atractivo de las comodidades urbanas y las oportunidades de empleo.
                                    Sin embargo, es crucial considerar que la alta actividad también puede resultar en
                                    un mercado competitivo para los compradores y podría indicar un mercado de alquiler
                                    saturado, factores que deben ser evaluados por inversores potenciales o aquellos que
                                    consideren ingresar al mercado.</p>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                    El gráfico ilumina la naturaleza premium de ciertas colonias, como "club de golf" y
                                    "valle del sol", donde los precios promedio superan la marca de 5 millones de pesos.
                                    Estas cifras sugieren un segmento inmobiliario de alto nivel en estas áreas,
                                    probablemente caracterizado por amenidades de lujo, propiedades más grandes y
                                    demografías más acaudaladas. Para inversores o desarrolladores, estos son los
                                    distritos donde las estrategias de mercado de gama alta podrían ser más efectivas.
                                </p>
                            </div>
                        </div>
                -->
                    </div>
                </div>

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

<!-- jquery.vectormap js-->
<script src="assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-merc-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-in-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-au-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-us-il-chicago-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-uk-mill-en.js"></script>
<script src="assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-ca-lcc-en.js"></script>

<!-- Init js-->
<script src="assets/js/pages/vector-maps.init.js"></script>

<script src="assets/js/app.js"></script>

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