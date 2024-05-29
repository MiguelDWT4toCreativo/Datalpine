<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>
<?php include 'layouts/head.php'; ?>
<?php include 'layouts/head-style.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            background-color: #007BFF;
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
<script>
    function mostrar(id) {
        var iframes = document.getElementsByTagName('iframe');
        for (var i = 0; i < iframes.length; i++) {
            iframes[i].style.display = 'none';
        }
        document.getElementById(id).style.display = 'block';
    }
</script>

<body>
    <?php include 'layouts/body.php'; ?>

    <div id="layout-wrapper">
        <?php include 'layouts/menu.php'; ?>

        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0 font-size-18">Tulancingo</h4>
                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hidalgo</a></li>
                                        <li class="breadcrumb-item active">Tulancingo</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <!-- Visión General del Mercado -->
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
                        <h1>Visión General del Mercado</h1>
                    </div>
                    <p style="font-size: 18px; line-height: 1.5; color: #444;">Este apartado ofrece datos históricos y
                        actuales sobre el mercado inmobiliario en Tulancingo, proporcionando una visión
                        completa de las transformaciones, tendencias y precios a lo largo del tiempo.</p>
                    <!--Mapa de calor -->
                    <div class="row align-items-center"
                        style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                        <div class="col-md-6">
                            <div class="subtitle-container">
                                <h5 class="card-title subtitle">
                                    Mapa de calor Colonias Tulancingo<span class="text-muted fw-normal ms-2"></span>
                                </h5>
                            </div>
                        </div>
                        <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                            <!-- Link de la gráfica -->
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <div style="flex: 1; margin-right: 20px;">
                                    <iframe
                                        src="/datalpine/resources/jupyter/mapas/tulancingo_property_map_filtered.html"
                                        width="800" height="400" frameborder="0" id="contenido01"
                                        style="display: block; margin: 0 auto;"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description')">Descripción</button>
                        </div>

                        <!-- Descripción -->
                        <div class="description" id="description" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">Este mapa
                                interactivo despliega una representación visual de las colonias locales junto
                                con información clave sobre el mercado inmobiliario como el el precio promedio
                                tanto de propiedades como de m2 de terreno y m2 construido, de igual forma,
                                engloba información sobre el promedio de recamaras, baños, cajones de
                                estacionamiento y precios promedio de m2 de terreno y de construcción.
                                Cada colonia se clasifica en un segmento específico, desde E (menor precio)
                                hasta S (mayor precio), según el rango de precios de las propiedades y están
                                representados de la siguiente manera:</p>
                            <ul class="text">
                                <li>SEGMENTO E: Menor a <strong>1M</strong> (Verde)</li>
                                <li>SEGMENTO D: <strong>1M - 1.75M</strong> (Amarillo)</li>
                                <li>SEGMENTO C: <strong>1.75M-2.5M</strong> (Azul)</li>
                                <li>SEGMENTO B: <strong>2.5M-3.25</strong> (Morado)</li>
                                <li>SEGMENTO A: <strong>3.25M-4M</strong> (Naranja)</li>
                                <li>SEGMENTO S: <strong>4KK+</strong> (Rojo)</li>
                            </ul>
                        </div>
                        <!-- Interpretación -->
                        <div class="interpretation">
                            <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <p class="text">
                                En general podemos observar que, en Tulancingo Hidalgo predominan colonias de
                                precios promedio bajos o accesibles, que forman parte del segmento E (Verde) y
                                del segmento D (Amarillo). Dentro de las colonias con precio promedio más
                                accesible del Segmento E: Colonia <strong>Guadalupe, Huapalcalco y el
                                    Fraccionamiento de
                                    la Rinconada la Morena</strong> resaltan con precios de <strong>$566,000.00
                                    MXN</strong> hasta <strong>$995,000.00
                                    MXN</strong> el máximo. Las colonias más caras en Tulancingo son:
                                <strong>Fraccionamiento
                                    Jardines del Sur, Felipe Angeles y Villas de Tulancingo</strong> con precios
                                promedio que
                                van desde <strong>$4,500,000.00 MXN</strong> hasta el máximo de
                                <strong>$16,148,148.58 MXN</strong>.
                            </p>
                        </div>
                    </div>
                    <!--Mapa de calor Propiedades -->
                    <div class="row align-items-center"
                        style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="card-title"
                                    style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                    Mapa
                                    de calor Propiedades<span class="text-muted fw-normal ms-2"></span></h5>
                            </div>
                        </div>
                        <div style="border-top: 1px solid #ccc; padding-top: 10px;">


                            <!-- Link de la gráfica -->
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <div style="flex: 1; margin-right: 20px;">
                                    <iframe src="/datalpine/resources/jupyter/mapas/map_calor-tulancingo.html"
                                        width="800" height="400" frameborder="0" id="contenido01"
                                        style="display: block; margin: 0 auto;"></iframe>
                                </div>
                            </div>
                        </div>
                        <!-- Explicación de la gráfica -->
                        <div class="mostrar-container">
                            <button class="mostrar" onclick="toggleDescription('description1')">Descripción</button>
                        </div>

                        <!-- Descripción -->
                        <div class="description" id="description1" style="display: none;">
                            <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                            <p class="text">El
                                mapa
                                de calor presentado ofrece una visualización de la densidad de propiedades
                                disponibles en la ciudad. La representación utiliza una escala de colores
                                que va
                                desde el rojo intenso, indicando una alta concentración de propiedades en
                                una
                                zona específica, hasta el azul más claro, denotando una menor oferta de
                                propiedades en esa área, donde cada propiedad está geolocalizada mediante
                                sus
                                coordenadas de latitud y longitud.</p>
                        </div>
                        <!-- Interpretación -->
                        <div class="interpretation">
                            <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <p class="text">
                                El análisis de la distribución de la oferta de propiedades revela que algunas
                                colonias destacan por su alta densidad de disponibilidad, como lo es la zona
                                <strong>Centro,
                                    La Morena 3a Secc, Villa Sol y Jaltepec.</strong> Por otro lado, existen
                                colonias donde la
                                oferta es notablemente más limitada, como <strong>Zapotlán de Allende, De los
                                    Electricistas,
                                    San José Pedregal.</strong> Este panorama ofrece una visión clara de las
                                áreas
                                con mayor y
                                menor disponibilidad de propiedades.
                            </p>
                            <p class="text">
                                Por otro lado, existen colonias donde la oferta es notablemente más limitada,
                                como
                                Zapotlán de Allende, De los Electricistas, San José Pedregal.
                            </p>
                            <p class="text">
                                Este panorama ofrece una visión clara de las áreas con mayor y menor
                                disponibilidad
                                de propiedades.</p>
                        </div>
                    </div>

                    <!-- Colonias en Tulancingo -->
                    <div class="row align-items-center"
                        style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">

                        <!-- Link de la gráfica PENDIENTE-->
                        <div class="card-header bg-white d-flex justify-content-between align-items-center">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title"
                                        style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                        Colonias en Tulancingo<span class="text-muted fw-normal ms-2"></span>
                                    </h5>
                                </div>
                            </div>
                            <div>
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido1')"
                                    value="Colonias más baratas">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido2')"
                                    value="Colonias más caras">
                                <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido3')"
                                    value="Colonias predominantes">
                            </div>
                        </div>
                        <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                            <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                <div class="d-flex align-items-center">
                                    <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                        src="/datalpine/resources/jupyter/graficas/g_bar_colbaratas_tulancingo.html"
                                        id="contenido1"></iframe>
                                    <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                        src="/datalpine/resources/jupyter/graficas/g_bar_colcaras_tulancingo.html"
                                        id="contenido2" style="display: none;"></iframe>
                                    <iframe width="600" height="400" seamless frameborder="0" scrolling="no"
                                        src="/datalpine/resources/jupyter/graficas//g_bar_colpred_t5_tulancingo.html"
                                        id="contenido3" style="display: none;"></iframe>
                                </div>
                            </div>
                            <!-- Explicación de la gráfica -->
                            <div class="mostrar-container">
                                <button class="mostrar" onclick="toggleDescription('description2')">Descripción</button>
                            </div>

                            <!-- Descripción -->
                            <div class="description" id="description2" style="display: none;">
                                <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                                <p class="text">
                                    Esta representación gráfica porcentual ofrece una visión clara de las colonias
                                    predominantes en el mercado inmobiliario de Tulancingo, facilitando la toma de
                                    decisiones informadas. Cada barra detalla el nombre de la colonia junto con su
                                    respectivo porcentaje con respecto al total de propiedades en la región. Este
                                    conjunto de datos nos proporciona una perspectiva visual y muestra la
                                    participación de cada colonia como una fracción del panorama total</p>
                            </div>
                        </div>
                        <!-- Interpretación -->
                        <div class="interpretation">
                            <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <p class="text">
                                Observamos que, el Centro de la ciudad es la colonia más predominante de
                                Tulancingo, representando el 20.63% del total de propiedades siendo una zona
                                densamente poblada en términos inmobiliarios. Además, colonias como La Morena 3a
                                Secc y Villa Sol mantienen porcentajes significativos, indicando una presencia
                                destacada de viviendas en estas áreas. Aunque Medias Tierras, Jaltepec y Vicente
                                Guerrero muestran porcentajes más bajos, estos números aún reflejan una
                                contribución notable al panorama inmobiliario local.
                            </p>
                        </div>
                    </div>

                    <!--Clientes potenciales foráneos -->
                    <div class="row align-items-center"
                        style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="card-title"
                                    style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                    Clientes potenciales foráneos<span class="text-muted fw-normal ms-2"></span>
                                </h5>
                            </div>
                        </div>
                        <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                            <!-- Link de la gráfica -->
                            <?php
                            // Ruta de la imagen
                            $ruta_imagen = "/datalpine/resources/jupyter/mapas/Tulancingo.png";
                            $ancho_imagen = 800; // Ancho deseado para la imagen
                            $alto_imagen = 400; // Alto deseado para la imagen
                            ?>

                            <!-- Contenedor para centrar la imagen -->
                            <div style="display: flex; justify-content: center;">
                                <!-- Insertar la imagen en el contenedor -->
                                <img src="<?php echo $ruta_imagen; ?>" width="<?php echo $ancho_imagen; ?>"
                                    height="<?php echo $alto_imagen; ?>" alt="Imagen">
                            </div>

                            <!-- Explicación de la gráfica -->
                            <div class="mostrar-container">
                                <button class="mostrar" onclick="toggleDescription('description3')">Descripción</button>
                            </div>

                            <!-- Descripción -->
                            <div class="description" id="description3" style="display: none;">
                                <div class="subtitle"><span class="icon">📝</span>Descripción:</div>
                                <p class="text">
                                    Distribución de segmentos. Conoce la participación en el mercado inmobiliario
                                    por segmentos (S, A, B, C, D, E). Cada sección representa el porcentaje o
                                    proporción en ese segmento específico en relación con el total.</p>
                            </div>
                        </div>
                        <!-- Interpretación -->
                        <div class="interpretation">
                            <div class="subtitle"><span class="icon">📊</span>Interpretación:</div>
                            <p class="text">
                                El mapa muestra la distribución porcentual de compradores foráneos interesados
                                en adquirir propiedades en el estado de Hidalgo, clasificados por su región de
                                origen.
                                Destaca que la mayoría de los compradores provienen de la Ciudad de México,
                                representando el

                                <strong>(32.74%)</strong> del total. Le siguen el Estado de México con un
                                <strong>(19.05%)</strong> y Guanajuato
                                con un 9.82%. Estas tres regiones concentran más del <strong>(60%)</strong> de
                                los compradores
                                foráneos interesados en propiedades en Hidalgo.
                                Por otro lado, estados como Querétaro, Michoacán y Puebla también muestran una
                                presencia significativa, cada uno contribuyendo con más del

                                <strong>(5%)</strong> al total de compradores foráneos, mostrando una alta
                                demanda de propiedades
                                en Hidalgo por parte de compradores de regiones cercanas y de gran importancia
                                económica, lo que puede influir en las tendencias del mercado inmobiliario.
                            </p>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <!-- PRECIO MERCADO -->
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                        <div class="flex">
                                            <div class="card-header__title mb-2"
                                                style="color: #FF5722; font-size: 24px;">PRECIO MERCADO</div>
                                            <a class="info-link" data-toggle="tooltip" data-placement="bottom"
                                                title="Información relevante sobre los precios de mercado, relacionada con las propiedades existentes en el mercado.">
                                                Información <i class="material-icons icon-14pt text-success">❗</i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center"
                                        style="margin-bottom: 20px;">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Minimo</strong></td>
                                                        <td class="text-right">$371,800.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Maximo</strong></td>
                                                        <td class="text-right">$14,800,000.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Promedio</strong></td>
                                                        <td class="text-right">1,901,771.69</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Mediana</strong></td>
                                                        <td class="text-right">$1,271,200.00</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- M2 TERRENO -->
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                        <div class="flex">
                                            <div class="card-header__title mb-2"
                                                style="color: #FF5722; font-size: 24px;">M2 TERRENO</div>
                                            <a class="info-link" data-toggle="tooltip" data-placement="bottom"
                                                title="Muestra la variabilidad en los tamaños de M2 de terrenos en la muestra, desde los más pequeños hasta los más grandes, proporcionando una visión general de la distribución.">
                                                Información <i class="material-icons icon-14pt text-success">❗</i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center"
                                        style="margin-bottom: 20px;">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Minimo</strong></td>
                                                        <td class="text-right">45</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Maximo</strong></td>
                                                        <td class="text-right">4,904</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Promedio</strong></td>
                                                        <td class="text-right">165</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Mediana</strong></td>
                                                        <td class="text-right">120</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- M2 CONSTRUCCIÓN -->
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                        <div class="flex">
                                            <div class="card-header__title mb-2"
                                                style="color: #FF5722; font-size: 24px;">M2 CONSTRUCCIÓN</div>
                                            <a class="info-link" data-toggle="tooltip" data-placement="bottom"
                                                title="Aquí te presentamos la variedad en el tamaño de M2 de construcciones en nuestra muestra. Desde las más pequeñas hasta las más grandes.">
                                                Información <i class="material-icons icon-14pt text-success">❗</i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center"
                                        style="margin-bottom: 20px;">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Minimo</strong></td>
                                                        <td class="text-right">50</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Maximo</strong></td>
                                                        <td class="text-right">1,500</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Promedio</strong></td>
                                                        <td class="text-right">162</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Mediana</strong></td>
                                                        <td class="text-right">130</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- PRECIO M2 CONSTRUCCIÓN -->
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                        <div class="flex">
                                            <div class="card-header__title mb-2"
                                                style="color: #FF5722; font-size: 24px;">PRECIO M2 CONSTRUCCIÓN</div>
                                            <a class="info-link" data-toggle="tooltip" data-placement="bottom"
                                                title="Estos valores reflejan la variabilidad en los precios de construcción por metro cuadrado, desde muy bajos hasta muy altos.">
                                                Información <i class="material-icons icon-14pt text-success">❗</i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center"
                                        style="margin-bottom: 20px;">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Minimo</strong></td>
                                                        <td class="text-right">$1,583</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Maximo</strong></td>
                                                        <td class="text-right">$49,250</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Promedio</strong></td>
                                                        <td class="text-right">$12,080</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Mediana</strong></td>
                                                        <td class="text-right">$11,222</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- CASA PROMEDIO -->
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                        <div class="flex">
                                            <div class="card-header__title mb-2"
                                                style="color: #FF5722; font-size: 24px;">CASA PROMEDIO</div>
                                            <a class="info-link" data-toggle="tooltip" data-placement="bottom"
                                                title="Comparación de datos de propiedades, resaltando las estadísticas promedio.">
                                                Información <i class="material-icons icon-14pt text-success">❗</i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center"
                                        style="margin-bottom: 20px;">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Recámaras</strong></td>
                                                        <td class="text-right">3.0</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Baños</strong></td>
                                                        <td class="text-right">191.6</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Estacionamientos</strong></td>
                                                        <td class="text-right">1.5</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Terreno</strong></td>
                                                        <td class="text-right">165.5</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>M2 Constrido</strong></td>
                                                        <td class="text-right">161.8</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Precio</strong></td>
                                                        <td class="text-right">$ 1,901,771.69</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Precio M2 Construido</strong></td>
                                                        <td class="text-right">$ 12,079.84</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- CASA MEDIA -->
                            <div class="col-lg-6 col-md-6 mb-4">
                                <div class="card">
                                    <div class="card-body d-flex flex-row align-items-start flex-0 border-bottom">
                                        <div class="flex">
                                            <div class="card-header__title mb-2"
                                                style="color: #FF5722; font-size: 24px;">CASA MEDIA</div>
                                            <a class="info-link" data-toggle="tooltip" data-placement="bottom"
                                                title="Comparación de datos de propiedades, resaltando las estadísticas medias.">
                                                Información <i class="material-icons icon-14pt text-success">❗</i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-center"
                                        style="margin-bottom: 20px;">
                                        <div class="table-responsive">
                                            <table class="table table-striped">
                                                <tbody>
                                                    <tr>
                                                        <td><strong>Recámaras</strong></td>
                                                        <td class="text-right">3.0</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Baños</strong></td>
                                                        <td class="text-right">2.0</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Estacionamientos</strong></td>
                                                        <td class="text-right">1.0</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Terreno</strong></td>
                                                        <td class="text-right">120.0</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>M2 Constrido</strong></td>
                                                        <td class="text-right">130.0</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Precio</strong></td>
                                                        <td class="text-right">$ 1,271,200.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Precio M2 Construido</strong></td>
                                                        <td class="text-right">$ 11,222.22</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->
                <?php include 'layouts/footer.php'; ?>
            </div>
            <!-- end main content-->
            <!-- END layout-wrapper -->
            <!-- Right Sidebar -->
            <?php include 'layouts/right-sidebar.php'; ?>
            <!-- /Right-bar -->
            <!-- JAVASCRIPT -->
            <?php include 'layouts/vendor-scripts.php'; ?>
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