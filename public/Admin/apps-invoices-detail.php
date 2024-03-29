<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Invoice Detail | Minia - Admin & Dashboard Template</title>
    <?php include 'layouts/head.php'; ?>
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
                        <!--
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_bar_volmercadosalarial_parejas_pachuca.html"
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
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    En el año 2023, el precio medio de las propiedades en Pachuca se situó en
                                    $2,039,843.00, y se anticipa que este valor mantendrá una trayectoria de
                                    crecimiento constante, alcanzando los $2,644,873.55 en el año 2026.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Plusvalía estimada (5 años) -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Plusvalía estimada (5 años)<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <?php
                            echo "<li style='font-size: 20px;'>3.1 Distribución de propiedades por segmento</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido1')"
                                    value="2022">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido2')"
                                    value="2023">
                            </div>
                        </div>
                        <div class="card-header bg-white d-flex justify-content-center align-items-center">
                            <div class="d-flex align-items-center">
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_scatt_forecastcreditgral_total_pachuca.html"
                                    id="contenido1"></iframe>
                                <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                    src="/datalpine/resources/jupyter/graficas/g_pie_discreditossegmento_2023_pachuca.html"
                                    id="contenido2" style="display: none;"></iframe>
                            </div>
                        </div>
                        <script>
                            function mostrar(id) {
                                var iframes = document.getElementsByTagName('iframe');
                                for (var i = 0; i < iframes.length; i++) {
                                    iframes[i].style.display = 'none';
                                }
                                document.getElementById(id).style.display = 'block';
                            }
                        </script>
                        -->

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
                                    las viviendas en Pachuca para los próximos años. En el año 2023, se muestra un valor
                                    de $3,534,894.07, evidenciando un crecimiento significativo que se espera continúe
                                    de manera constante hasta alcanzar $14,633,277.84 en el año 2026.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Forecast créditos generales (cantidad)s -->
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
                                    años 2019 a 2026, desglosados en dos categorías: 'Vivienda Nueva' y 'Vivienda
                                    Usada'. A lo largo de este periodo, se proporciona información sobre el número total
                                    de créditos otorgados, así como la cantidad específica de créditos destinados a
                                    viviendas nuevas y usadas</p>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <<ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Entre los años 2019 y 2021, se observó una variación significativa en el número
                                        total de créditos, alcanzando niveles destacados durante esos años. Sin embargo,
                                        en 2022, se registra una marcada disminución en el total de créditos.</li>
                                    <li>En cuanto a las proyecciones para las categorías "Vivienda Nueva" y "Vivienda
                                        Usada", ambas muestran patrones similares de descenso en 2022, con un ligero
                                        repunte anticipado en los años que siguen a este periodo. Se espera que la
                                        categoría de "Vivienda Nueva" experimente una recuperación progresiva,
                                        alcanzando 669 créditos en el año 2026, mientras que la categoría de "Vivienda
                                        Usada" se proyecta a recuperarse hasta alcanzar 57 créditos en el mismo año,
                                        después de la disminución observada en 2022.</li>
                                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Forecast créditos generales (valor ) -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Forecast créditos generales (valor )<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Link de la gráfica PENDIENTE-->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">

                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido8')"
                                    value="Segmentos">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido9')"
                                    value="General">
                            </div>
                        </div>
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
                        <script>
                            function mostrar(id) {
                                var iframes = document.getElementsByTagName('iframe');
                                for (var i = 0; i < iframes.length; i++) {
                                    iframes[i].style.display = 'none';
                                }
                                document.getElementById(id).style.display = 'block';
                            }
                        </script>

                        <!-- Explicación de la gráfica -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Se muestran las proyecciones de créditos generales en términos de valor monetario
                                    (total y promedio) para los años 2019 a 2026, subdividiendose en las categorías
                                    "Vivienda Nueva" y "Vivienda Usada" , proporcionando un análisis detallado de cómo
                                    se espera que evolucione el valor monetario de los créditos en estas dos
                                    clasificaciones a lo largo de los años proyectados.</p>
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
                                    <li>Monto total: El monto total de créditos en Pachuca presenta una proyección
                                        ascendente, estimándose un aumento de $1,476,067,496.32 en 2019 a
                                        $3,740,297,148.39 en 2026. Esta tendencia refleja un crecimiento constante a lo
                                        largo del periodo analizado.
                                        Para vivienda nueva se observa un aumento gradual de $1,030,751,267.28 en 2019 a
                                        $2,066,886,543.92 en 2026 evidenciando una estabilidad y crecimiento constante
                                        en los años posteriores.
                                        Por otro lado, los créditos destinados a la "Vivienda Usada" aunque se registran
                                        fluctuaciones, destaca un incremento progresivo de $5,098,355.41 en 2019 a
                                        $9,964,910.88 en 2026.</li>
                                    <li>Monto promedio: Para todas las categorías, se evidencia un crecimiento constante
                                        de $1,214,870.37 en 2019 a $2,940,485.18 en 2026.
                                        En relación a "Vivienda Nueva" en Pachuca, se observa una trayectoria ascendente
                                        en los montos promedio por crédito a lo largo de los años proyectados. Desde
                                        $1,662,502.04 en 2019, se anticipa un crecimiento constante hasta alcanzar
                                        $3,399,484.45 en 2026.
                                        En cuanto a la categoría de "Vivienda Usada" en Pachuca, se observa una
                                        variación en los montos promedio por crédito a lo largo de los años proyectados.
                                        Partiendo de $67,978.07 en 2019, se experimenta un aumento a $191,632.90 en
                                        2026.</li>
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
                                        en un 75% en 2023, aumenta a un 135% en 2024, y llega a un pico del 161% tanto
                                        para los años 2025 como para el año siguiente. Esto indica un aumento
                                        significativo en la oferta de casas durante este período.</li>
                                    <li>La línea roja representa el porcentaje de cambio en la oferta de departamentos.
                                        De acuerdo a la tendencia comienza con una disminución del 22% en 2024, para el
                                        año siguiente, disminuye ligeramente a 15% y se mantiene constante durante el
                                        próximo año. Esto sugiere que la oferta de departamentos se mantiene a la baja
                                        durante este período.</li>
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
                        <!--
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_scatt_casasdepart_proyecanualofert_pachuca.html"
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
                                        unidades es la de "101-365 días", con un total de 1319 unidades. Este intervalo
                                        de tiempo indica que una cantidad significativa de unidades inmobiliarias
                                        permanecen en el mercado durante un periodo relativamente prolongado antes de
                                        concretar la venta.</li>
                                    <li>Por otro lado, la categoría con el menor número de unidades es la de "0-10
                                        días", que registra 159 unidades.</li>
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
                        <!--
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_scatt_casasdepart_proyecanualofert_pachuca.html"
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
                                    de los años 2020 a 2026. Iniciando con 6,583,278 habitantes en 2020, la población
                                    experimenta un incremento constante, alcanzando los 11,556,676 habitantes en 2026.
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
                        <!--
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_scatt_casasdepart_proyecanualofert_pachuca.html"
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
                                    En este contexto, las casas que llevan más de un año en stock (16.6%) representan un
                                    riesgo menor en términos de porcentaje, pero aún así indican una proporción
                                    significativa. Por otro lado, las casas que llevan menos de un año en stock
                                    representan la mayoría en términos porcentuales (84.44%) e indican una rotación más
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
                        <!--
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_scatt_casasdepart_proyecanualofert_pachuca.html"
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
                                    <li>En el historial de stock, se evidencia una duración de 165 días en julio de
                                        2023, seguida de una ligera reducción a 155 días en agosto y 145 días en
                                        septiembre. La proyección para octubre, noviembre y diciembre sugiere una
                                        continuación de esta tendencia, con estimaciones de 150, 148 y 149 días
                                        respectivamente.</li>
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
                        <!--
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_scatt_casasdepart_proyecanualofert_pachuca.html"
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
                                    "peleando" contra los créditos otorgados para dicho mercado inmobiliario. En julio
                                    de 2023, la cifra alcanzó su punto más alto, con aproximadamente 37.89 meses. Esto
                                    podría sugerir un exceso de oferta de propiedades o una disminución en la demanda de
                                    créditos. Por otra parte, el mejor punto para invertir se encontró en octubre de
                                    2023, debido a que disminuyó significativamente a aproximadamente 16.72 meses. Esto
                                    podría indicar una reducción en el número de propiedades listadas o un aumento en la
                                    demanda de créditos y, por lo tanto, un mercado menos competitivo.</p>
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
                        <!--
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_scatt_casasdepart_proyecanualofert_pachuca.html"
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
                                        una disminución de aproximadamente el 13.34% en noviembre de 2022 en comparación
                                        con octubre de 2022, seguida de un aumento notable del 15.43% en febrero de
                                        2023.</li>
                                    <li>El dato más reciente, diciembre de 2023, muestra una disminución del 15.44% en
                                        comparación con septiembre de 2023.</li>
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