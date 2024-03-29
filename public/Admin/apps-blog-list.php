<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Pachuca | DatAlpine</title>
    <?php include 'layouts/head.php'; ?>

    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet"
        type="text/css" />

    <?php include 'layouts/head-style.php'; ?>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    th,
    td {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
    }
</style>
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

                <!-- Análisis de Inversión -->
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
                    Bienes Raices Pachuca 2024
                </div>
                <p style="font-size: 16px; line-height: 1.5; color: #666;">Proporciona un análisis profundo del mercado
                    inmobiliario de Pachuca, enfocándose en aspectos críticos como las tendencias del mercado, la
                    dinámica de precios, la segmentación del mercado y el análisis de colonias.</p>

                <!-- 1. Tendencia de Mercado & Dinamica de Precios -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                1. Tendencia de Mercado & Dinamica de Precios<span
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
                <!--2. Segmentación y Análisis del Mercado -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                2. Segmentación y Análisis del Mercado<span class="text-muted fw-normal ms-2"></span>
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_bar_volmercadosalarial_parejas_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                -->
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_bar_volmercadosalarial_parejas_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                -->
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
                <!--3. Tendencias de Mercado en Colonias -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                3. Tendencias de Mercado en Colonias<span class="text-muted fw-normal ms-2"></span>
                            </h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                        <!-- Explicación de la gráfica -->
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
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>'Colonias' de Alto Potencial en Pachuca</li>
                                </ul>
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    En la segunda visualización, analizamos los precios promedio de las propiedades en
                                    diferentes colonias, ahora filtradas para excluir aquellas con datos escasos. Este
                                    enfoque refinado destaca las colonias de alto potencial, con precios promedio
                                    expresados en millones de pesos para una interpretación directa de los valores de
                                    las propiedades.</p>
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
                        <!-- Link de la gráfica PENDIENTE-->
                        <!--
                        <iframe
                            src="/datalpine/resources/jupyter/graficas/g_bar_volmercadosalarial_parejas_pachuca.html"
                            width="800" height="400" frameborder="0" id="contenido01"
                            style="display: block; margin: 0 auto;"></iframe>
                -->
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <div style="text-align: left;">
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Las Mejores 'Colonias' para Inversión en Pachuca</li>
                                </ul>
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    El tercer gráfico se enfoca en la crema del mercado inmobiliario de Pachuca: las
                                    principales colonias de inversión basadas en precios promedio, considerando solo
                                    aquellas áreas con un número robusto de anuncios. Aquí, el término 'inversión' se
                                    alinea con precios promedio más altos, lo que podría correlacionarse tanto con
                                    ofertas residenciales de lujo como con mercados de alquiler potencialmente
                                    lucrativos. Notablemente, colonias como "club de golf" y "misión san agustín" se
                                    destacan, con precios promedio rondando el rango de 8-9 millones de pesos. Estas
                                    cifras indican no solo un alto punto de entrada de precio, sino también un potencial
                                    para un retorno significativo de la inversión, especialmente si estas áreas están
                                    experimentando una trayectoria ascendente en la valoración de propiedades. Esto
                                    indica que los inversores que apuntan a los escalones superiores del mercado podrían
                                    encontrar un terreno fértil aquí, aunque las altas apuestas vienen con la necesidad
                                    de un entendimiento profundo del mercado y una evaluación de riesgos.p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Cambio de Precios en el Mercado Inmobiliario de Pachuca -->
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
                                    El gráfico de Análisis de Cambio de Precios a lo largo del tiempo ilustra los
                                    cambios porcentuales en los precios promedio de las propiedades en el mercado
                                    inmobiliario de Pachuca para los meses disponibles. Aquí están las perspectivas
                                    clave:</p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li>Hay fluctuaciones significativas en los precios de mes a mes. Por ejemplo, hubo
                                        una disminución de aproximadamente el <strong>13.34% </strong>en
                                        <strong>noviembre de 2022</strong> en comparación con <strong>octubre de
                                            2022</strong>, seguida de un aumento notable del <strong>15.43%</strong> en
                                        <strong>febrero de 2023</strong>.
                                    </li>
                                    <li>Los meses subsiguientes también muestran variabilidad, con una disminución del
                                        <strong>12.92%</strong> en <strong>marzo de 2023</strong> y un aumento del
                                        <strong>12.53%</strong> en <strong>junio de 2023</strong>.
                                    </li>
                                    <li>El dato más reciente, <strong>diciembre de 2023</strong>, muestra una
                                        disminución del <strong>15.44%</strong> en comparación con <strong>septiembre de
                                            2023</strong>.</li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- container-fluid -->
                </div>
                <!--Oportunidad de Inversión en el Mercado Inmobiliario de Pachuca -->
                <div class="row align-items-center"
                    style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title"
                                style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                Oportunidad de Inversión en el Mercado Inmobiliario de Pachuca<span
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
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Descripción:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Destaca las potenciales claves de inversión en las principales colonias de Pachuca.
                                </p>
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Principales 'Colonias' por Precio Promedio</strong>
                                </p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li><strong>Club de Golf</strong> lidera con un precio promedio de ~10.50 millones
                                        de MXN, notable por su alta área promedio de ~423 m².</li>
                                    <li><strong>Misión de Santiago y Residencial Dolores</strong> siguen con precios
                                        promedio de ~9.06 millones de MXN y ~8.91 millones de MXN, respectivamente.</li>
                                </ul>
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Principales 'Colonias' por Relación de Volatilidad de Precios</strong>
                                </p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li><strong>Misión de Santiago</strong> muestra la relación de volatilidad de
                                        precios más alta, indicando fluctuaciones significativas de precios y
                                        potencialmente mayor riesgo u oportunidad de inversión.</li>
                                    <li><strong>Zona Plateada y La Moraleja</strong> también exhiben altas relaciones de
                                        volatilidad de precios, sugiriendo condiciones de mercado dinámicas.</li>
                                </ul>
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Principales 'Colonias' por Área Promedio</strong>
                                </p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li><strong>Club de Golf</strong> ofrece el área promedio más grande, alineándose
                                        con su posición como la 'Colonia' más cara.</li>
                                    <li><strong>Cuesco y Zona Plateada</strong> también presentan áreas promedio
                                        relativamente grandes, indicando la presencia de propiedades espaciosas.</li>
                                </ul>
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Principales 'Colonias' por Precio Promedio por m²</strong>
                                </p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li><strong>Residencial Dolores y Jade Residencial</strong> lideran en precio
                                        promedio por m², sugiriendo una prima en el espacio de la propiedad,
                                        posiblemente debido a amenidades de gama alta o ubicaciones deseables.</li>
                                </ul>
                            </div>
                        </div>
                        <table>
                            <thead>
                                <tr>
                                    <th>Concepto</th>
                                    <th>Club de Golf</th>
                                    <th>Misión de Santiago</th>
                                    <th>Residencial Dolores</th>
                                    <th>Zona Plateada</th>
                                    <th>Jade Residencial</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Precio Promedio</strong></td>
                                    <td>~10.50 millones de MXN</td>
                                    <td>~9.06 millones de MXN</td>
                                    <td>~8.91 millones de MXN</td>
                                    <td>~7.41 millones de MXN</td>
                                    <td>~7.18 millones de MXN</td>
                                </tr>
                                <tr>
                                    <td><strong>Volatilidad de Precios</strong></td>
                                    <td>~6.56 millones de MXN</td>
                                    <td>~9.04 millones de MXN</td>
                                    <td>~4.12 millones de MXN</td>
                                    <td>~6.73 millones de MXN</td>
                                    <td>~2.44 millones de MXN</td>
                                </tr>
                                <tr>
                                    <td><strong>Número de Anuncios</strong></td>
                                    <td>21</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td><strong>Área Promedio</strong></td>
                                    <td>~423 m²</td>
                                    <td>~339 m²</td>
                                    <td>~246 m²</td>
                                    <td>~275 m²</td>
                                    <td>~209 m²</td>
                                </tr>
                                <tr>
                                    <td><strong>Precio Promedio por m²</strong></td>
                                    <td>~23,876 MXN</td>
                                    <td>~23,606</td>
                                    <td>~34,588 MXN</td>
                                    <td>~26,238 MXN</td>
                                    <td>~33,855 MXN</td>
                                </tr>
                            </tbody>
                        </table>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    El gráfico de barras anterior representa visualmente el Índice de Atractivo de
                                    Inversión para las 10 principales 'Colonias' en Pachuca. Este índice es una medida
                                    compuesta que se ha construido para proporcionar una cifra integral que refleja
                                    varios factores importantes para un inversor:
                                </p>
                                <ul
                                    style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                    <li><strong>Precio Promedio por Metro Cuadrado (Mean_Price_M2):</strong>
                                        Refleja el precio típico del mercado para una propiedad en cada 'Colonia' e
                                        indica el nivel general de precios del área.</li>
                                    <li><strong>Desviación Estándar del Precio por Metro Cuadrado
                                            (Std_Dev_Price_M2):</strong> Mide la variabilidad o volatilidad de los
                                        precios dentro de cada 'Colonia'. Una desviación estándar más baja indica un
                                        entorno de precios más estable, lo cual es generalmente preferible para la
                                        inversión.</li>
                                    <li><strong>Cantidad de Anuncios (Count_Listings):</strong> Refleja la liquidez del
                                        mercado en cada 'Colonia'. Un mayor número de anuncios indica un mercado más
                                        activo, lo que puede proporcionar más oportunidades para comprar y vender
                                        propiedades y típicamente sugiere un menor riesgo de iliquidez de la inversión
                                    </li>
                                </ul>
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

        <!-- Required datatable js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>

        <!-- Responsive examples -->
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

        <!-- init js -->
        <script src="assets/js/pages/datatable-pages.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

        </body>

        </html>