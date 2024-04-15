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
</head>

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
                        Visión General del Mercado
                    </div>
                    <p style="font-size: 16px; line-height: 1.5; color: #666;">Este apartado ofrece datos históricos y
                        actuales sobre el mercado inmobiliario en Tulancingo, proporcionando una visión
                        completa de las transformaciones, tendencias y precios a lo largo del tiempo.</p>
                    <!--Mapa de calor -->
                    <div class="row align-items-center"
                        style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h5 class="card-title"
                                    style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                    Mapa de calor Colonias Tulancingo<span class="text-muted fw-normal ms-2"></span>
                                </h5>
                            </div>
                        </div>
                        <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                            <!-- Link de la gráfica -->
                            <div style="display: flex; justify-content: center; align-items: center;">
                                <!-- Mapa interactivo -->
                                <div style="flex: 1; margin-right: 20px;">
                                    <iframe
                                        src="/datalpine/resources/jupyter/mapas/tulancingo_property_map_filtered.html"
                                        width="800" height="400" frameborder="0" id="contenido01"
                                        style="display: block; margin: 0 auto;"></iframe>
                                </div>

                                <!-- Descripción -->
                                <div style="flex: 1; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                    <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                        <strong>Descripción:</strong>
                                    </p>
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">Este mapa
                                        interactivo despliega una representación visual de las colonias locales junto
                                        con información clave sobre el mercado inmobiliario como el el precio promedio
                                        tanto de propiedades como de m2 de terreno y m2 construido, de igual forma,
                                        engloba información sobre el promedio de recamaras, baños, cajones de
                                        estacionamiento y precios promedio de m2 de terreno y de construcción.
                                        Cada colonia se clasifica en un segmento específico, desde E (menor precio)
                                        hasta S (mayor precio), según el rango de precios de las propiedades y están
                                        representados de la siguiente manera:</p>
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                        <li>SEGMENTO E: Menor a <strong>1M</strong> (Verde)</li>
                                        <li>SEGMENTO D: <strong>1M - 1.75M</strong> (Amarillo)</li>
                                        <li>SEGMENTO C: <strong>1.75M-2.5M</strong> (Azul)</li>
                                        <li>SEGMENTO B: <strong>2.5M-3.25</strong> (Morado)</li>
                                        <li>SEGMENTO A: <strong>3.25M-4M</strong> (Naranja)</li>
                                        <li>SEGMENTO S: <strong>4KK+</strong> (Rojo)</li>
                                    </ul>
                                </div>
                            </div>

                            <div
                                style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Interpretación:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                        En general podemos observar que, en Tulancingo Hidalgo predominan colonias de
                                        precios promedio bajos o accesibles, que forman parte del segmento E (Verde) y
                                        del segmento D (Amarillo). Dentro de las colonias con precio promedio más
                                        accesible del Segmento E: Colonia <strong>Guadalupe, Huapalcalco y el Fraccionamiento de
                                        la Rinconada la Morena</strong> resaltan con precios de <strong>$566,000.00 MXN</strong> hasta <strong>$995,000.00
                                        MXN</strong> el máximo. Las colonias más caras en Tulancingo son: <strong>Fraccionamiento
                                        Jardines del Sur, Felipe Angeles y Villas de Tulancingo</strong> con precios promedio que
                                        van desde <strong>$4,500,000.00 MXN</strong> hasta el máximo de <strong>$16,148,148.58 MXN</strong>.</p>
                                </div>
                            </div>
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

                        <!-- Link de la gráfica -->
                        <div style="display: flex; justify-content: center; align-items: center;">
                            <div style="flex: 1; margin-right: 20px;">
                                <iframe src="/datalpine/resources/jupyter/mapas/map_calor-tulancingo.html" width="800"
                                    height="400" frameborder="0" id="contenido01"
                                    style="display: block; margin: 0 auto;"></iframe>
                            </div>
                            <!-- Explicación de la gráfica -->
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Descripción:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">El mapa
                                        de calor presentado ofrece una visualización de la densidad de propiedades
                                        disponibles en la ciudad. La representación utiliza una escala de colores que va
                                        desde el rojo intenso, indicando una alta concentración de propiedades en una
                                        zona específica, hasta el azul más claro, denotando una menor oferta de
                                        propiedades en esa área, donde cada propiedad está geolocalizada mediante sus
                                        coordenadas de latitud y longitud.</p>
                                </div>
                            </div>
                        </div>
                        <div
                            style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                <strong>Interpretación:</strong>
                            </p>
                            <div style="text-align: left;">
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    El análisis de la distribución de la oferta de propiedades revela que algunas
                                    colonias destacan por su alta densidad de disponibilidad, como lo es la zona
                                    <strong>Centro,
                                        La Morena 3a Secc, Villa Sol y Jaltepec.</strong> Por otro lado, existen
                                    colonias donde la
                                    oferta es notablemente más limitada, como <strong>Zapotlán de Allende, De los
                                        Electricistas,
                                        San José Pedregal.</strong> Este panorama ofrece una visión clara de las áreas
                                    con mayor y
                                    menor disponibilidad de propiedades.
                                </p>
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Por otro lado, existen colonias donde la oferta es notablemente más limitada, como
                                    Zapotlán de Allende, De los Electricistas, San José Pedregal.
                                </p>
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                    Este panorama ofrece una visión clara de las áreas con mayor y menor disponibilidad
                                    de propiedades.</p>
                            </div>
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
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Descripción:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                        Distribución de segmentos. Conoce la participación en el mercado inmobiliario
                                        por segmentos (S, A, B, C, D, E). Cada sección representa el porcentaje o
                                        proporción en ese segmento específico en relación con el total.</p>
                                </div>
                            </div>
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Interpretación:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
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
                        </div>
                    </div>
                    <div class="container-fluid page__container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header bg-white d-flex align-items-center">
                                        <h4 class="card-header__title flex m-0">PRECIO MERCADO </h4>
                                    </div>
                                    <div class="card-header d-flex align-items-center justify-content-end"
                                        style="background-color: #FAFBFE;">
                                        <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información
                                        </div>
                                        <a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Información relevante sobre los precios de mercado, relacionada con las propiedades existentes en el mercado.">
                                            <i class="material-icons icon-14pt text-success">info</i>
                                        </a>
                                    </div>
                                    <div class="card-body py-4">
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Minimo</strong>
                                            <div>
                                                <span> $ 371,800.00 </span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Maximo</strong>
                                            <div>
                                                <span> $ 14,800,000.00 </span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Promedio</strong>
                                            <div>
                                                <span> $ 1,901,771.69 </span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Mediana</strong>
                                            <div>
                                                <span> $ 1,271,200.00 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header bg-white d-flex align-items-center">
                                        <h4 class="card-header__title flex m-0">M2 TERRENO </h4>
                                    </div>
                                    <div class="card-header d-flex align-items-center justify-content-end"
                                        style="background-color: #FAFBFE;">
                                        <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información
                                        </div>
                                        <a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Muestra la variabilidad en los tamaños de M2 de terrenos en la muestra, desde los más pequeños hasta los más grandes, proporcionando una visión general de la distribución.">
                                            <i class="material-icons icon-14pt text-success">info</i>
                                        </a>
                                    </div>
                                    <div class="card-body py-4">
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Minimo</strong>
                                            <div>
                                                <span>45</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Maximo</strong>
                                            <div>
                                                <span>4,904</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Promedio</strong>
                                            <div>
                                                <span>165</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Mediana</strong>
                                            <div>
                                                <span>120</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header bg-white d-flex align-items-center">
                                        <h4 class="card-header__title m-0">M2 CONSTRUCCIÓN </h4>
                                    </div>
                                    <div class="card-header d-flex align-items-center justify-content-end"
                                        style="background-color: #FAFBFE;">
                                        <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información
                                        </div>
                                        <a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Aquí te presentamos la variedad en el tamaño de M2 de construcciones en nuestra muestra. Desde las más pequeñas hasta las más grandes.">
                                            <i class="material-icons icon-14pt text-success">info</i>
                                        </a>
                                    </div>
                                    <div class="card-body py-4">
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Minimo</strong>
                                            <div>
                                                <span>50</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Maximo</strong>
                                            <div>
                                                <span>1,500</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Promedio</strong>
                                            <div>
                                                <span>162</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Mediana</strong>
                                            <div>
                                                <span>130</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header bg-white d-flex align-items-center">
                                        <h4 class="card-header__title flex m-0">PRECIO M2 CONSTRUCIÓN </h4>
                                    </div>
                                    <div class="card-header d-flex align-items-center justify-content-end"
                                        style="background-color: #FAFBFE;">
                                        <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información
                                        </div>
                                        <a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Estos valores reflejan la variabilidad en los precios de construcción por metro cuadrado, desde muy bajos hasta muy altos.">
                                            <i class="material-icons icon-14pt text-success">info</i>
                                        </a>
                                    </div>
                                    <div class="card-body py-4">
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Minimo</strong>
                                            <div>
                                                <span> $ 1,583</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Maximo</strong>
                                            <div>
                                                <span> $ 49,250 </span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Promedio</strong>
                                            <div>
                                                <span> $ 12,080 </span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Mediana</strong>
                                            <div>
                                                <span> $ 11,222 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header bg-white d-flex align-items-center">
                                        <h4 class="card-header__title flex m-0">CASA PROMEDIO </h4>
                                    </div>
                                    <div class="card-header d-flex align-items-center justify-content-end"
                                        style="background-color: #FAFBFE;">
                                        <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información
                                        </div>
                                        <a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title=" Comparación de datos de propiedades, resaltando las estadísticas promedio.">
                                            <i class="material-icons icon-14pt text-success">info</i>
                                        </a>
                                    </div>
                                    <div class="card-body py-4">
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Recámaras</strong>
                                            <div>
                                                <span>3.0</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Baños</strong>
                                            <div>
                                                <span>191.6</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Estacionamientos</strong>
                                            <div>
                                                <span>1.5</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Terreno</strong>
                                            <div>
                                                <span>164.5</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>M2 Construido</strong>
                                            <div>
                                                <span>161.8</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Precio</strong>
                                            <div>
                                                <span> $ 1,901,771.69 </span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Precio M2 Construido</strong>
                                            <div>
                                                <span> $ 12,079.84 </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-header bg-white d-flex align-items-center">
                                        <h4 class="card-header__title m-0">CASA MEDIA </h4>
                                    </div>
                                    <div class="card-header d-flex align-items-center justify-content-end"
                                        style="background-color: #FAFBFE;">
                                        <div class="text d-flex justify-content-end" style="color: #4C91E2;">Información
                                        </div>
                                        <a class="btn btn-white btn-sm" data-toggle="tooltip" data-placement="bottom"
                                            title="Comparación de datos de propiedades, resaltando las estadísticas medias.">
                                            <i class="material-icons icon-14pt text-success">info</i>
                                        </a>
                                    </div>
                                    <div class="card-body py-4">
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Recámaras</strong>
                                            <div>
                                                <span>3.0</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Baños</strong>
                                            <div>
                                                <span>2.0</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Estacionamientos</strong>
                                            <div>
                                                <span>1.0</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Terreno</strong>
                                            <div>
                                                <span>120.0</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>M2 Construido</strong>
                                            <div>
                                                <span>130.0</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Precio</strong>
                                            <div>
                                                <span> $ 1,271,200.00 </span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Precio M2 Construido</strong>
                                            <div>
                                                <span> $ 11,222.22 </span>
                                            </div>
                                        </div>
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
            <!-- END layout-wrapper -->
            <!-- Right Sidebar -->
            <?php include 'layouts/right-sidebar.php'; ?>
            <!-- /Right-bar -->
            <!-- JAVASCRIPT -->
            <?php include 'layouts/vendor-scripts.php'; ?>
            <script src="assets/js/app.js"></script>
</body>

</html>