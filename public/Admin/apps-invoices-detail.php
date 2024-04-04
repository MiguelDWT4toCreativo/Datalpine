<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Pachuca | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>
    <?php include 'layouts/head-style.php'; ?>

</head>
<script>
    function mostrar(id) {
        var iframes = document.getElementsByTagName('iframe');
        for (var i = 0; i < iframes.length; i++) {
            iframes[i].style.display = 'none';
        }
        document.getElementById(id).style.display = 'block';
    }
</script>

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

                <!-- Proyecciones y Tendencias -->
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
                    Proyecciones y Tendencias
                </div>
                <p style="font-size: 16px; line-height: 1.5; color: #666;">Esta sección muestra un análisis exhaustivo
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_scatt_preciomediaanual_direct_pachuca.html"
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
                                    La gráfica presenta una proyección del precio medio de las propiedades en Pachuca
                                    para los próximos años. Estos datos anticipan la dirección esperada en la evolución
                                    del valor promedio de las viviendas.</p>
                            </div>
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

                    <!-- Link de la gráfica PENDIENTE-->
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
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Los datos presentados ofrecen una vista anticipada del valor promedio de las
                                    propiedades en los próximos cinco años. Reflejando la posible dirección de
                                    crecimiento o reducción en el precio de las viviendas.</p>
                            </div>
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_scatt_forecastcreditgral_conteo_pachuca.html"
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

                    <!-- Link de la gráfica PENDIENTE-->
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
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Se muestran las proyecciones de créditos generales en términos de valor monetario
                                    <strong>(total y promedio)</strong> para los años <strong>2019 a 2026</strong>,
                                    subdividiendose en las categorías
                                    <strong>"Vivienda Nueva"</strong> y <strong>"Vivienda Usada"</strong> ,
                                    proporcionando un análisis detallado de cómo
                                    se espera que evolucione el valor monetario de los créditos en estas dos
                                    clasificaciones a lo largo de los años proyectados.
                                </p>
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_scatt_casasdepart_proyecanualofert_pachuca.html"
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
                                    Proporciona estimaciones porcenctuales anuales sobre la tendencia en la cantidad de
                                    casas y departamentos que se anticipa serán ofertados en cada año, abarcando desde
                                    el presente hasta los próximos años.</p>
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_tiempomercado_pachuca.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>

                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    La distribución se presenta en cinco categorías según el número de días que las
                                    propiedades han estado disponibles, lo que proporciona información sobre la
                                    disponibilidad y el estado actual de las propiedades en el mercado inmobiliario.</p>
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_bar_proyeccionpoblacional_hidalgo_pachuca.html"
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
                                    La proyección poblacional es una estimación de cuántas personas se espera que vivan
                                    en una región o área geográfica específica a lo largo de varios años.</p>
                            </div>
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_pie_riesgo_pachuca.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>

                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    El riesgo de stock en el mercado inmobiliario se relaciona con la cantidad de casas
                                    disponibles durante distintos lapsos de tiempo. Esta métrica es esencial para
                                    evaluar la dinámica de oferta y demanda en el sector.</p>
                            </div>
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_scatt_stockdias_pachuca.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>

                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    La proyección en días permite anticipar la duración promedio que las propiedades
                                    podrían requerir para su venta, lo que resulta esencial para ajustar estrategias de
                                    comercialización, establecer precios competitivos y adaptarse a las dinámicas
                                    cambiantes del mercado.</p>
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_scatt_mesesoferta_pachuca.html" width="800"
                            height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Los meses de oferta es una métrica que refleja cuantos meses pasarían antes de que
                                    todas las propiedades disponibles se agotaran si las mismas se compraran con los
                                    créditos demandados (es decir, si se usaran todos los créditos disponibles de dicho
                                    mes) . Se calcula dividiendo el total de propiedades del mes listadas en el mercado
                                    inmobiliario entre el promedio mensual del volumen de créditos demandados durante
                                    dicho año.</p>
                            </div>
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_precioscambiomes_pachuca.html"
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
                                    El gráfico de Análisis de Cambio de Precios a lo largo del tiempo ilustra los
                                    cambios porcentuales en los precios promedio de las propiedades en el mercado
                                    inmobiliario de Pachuca para los meses disponibles. Aquí están las perspectivas
                                    clave.</p>
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

<script src="assets/js/app.js"></script>

</body>

</html>