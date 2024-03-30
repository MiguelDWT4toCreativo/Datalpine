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
    <title>Pachuca | DatAlpine</title>
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


                    <!-- Análisis de mercado -->
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
                        Análisis de mercado
                    </div>
                    <p style="font-size: 16px; line-height: 1.5; color: #666;">Este apartado ofrece datos históricos y
                        actuales sobre el mercado inmobiliario en Hidalgo, proporcionando una visión completa de las
                        transformaciones, tendencias y precios a lo largo del tiempo.</p>
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
                                                <span>$240,600</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Maximo</strong>
                                            <div>
                                                <span>$28,500,000</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Promedio</strong>
                                            <div>
                                                <span>$2,968,023</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Mediana</strong>
                                            <div>
                                                <span>$2,540,000</span>
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
                                                <span>1,609</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Promedio</strong>
                                            <div>
                                                <span>149</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Mediana</strong>
                                            <div>
                                                <span>128</span>
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
                                                <span>47</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Maximo</strong>
                                            <div>
                                                <span>1,100</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Promedio</strong>
                                            <div>
                                                <span>194</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Mediana</strong>
                                            <div>
                                                <span>179</span>
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
                                                <span>$1,544</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Maximo</strong>
                                            <div>
                                                <span>$200,600</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Promedio</strong>
                                            <div>
                                                <span>$15,227</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-3">
                                            <strong>Mediana</strong>
                                            <div>
                                                <span>$14,088</span>
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
                                                <span>3.0</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Estacionamientos</strong>
                                            <div>
                                                <span>2.0</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Terreno</strong>
                                            <div>
                                                <span>149</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>M2 Construido</strong>
                                            <div>
                                                <span>194</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Precio</strong>
                                            <div>
                                                <span>$2,968,023</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Precio M2 Construido</strong>
                                            <div>
                                                <span>$15,227</span>
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
                                                <span>3.0</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Estacionamientos</strong>
                                            <div>
                                                <span>2.0</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Terreno</strong>
                                            <div>
                                                <span>128</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>M2 Construido</strong>
                                            <div>
                                                <span>179</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Precio</strong>
                                            <div>
                                                <span>$2,540,000</span>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between pb-1">
                                            <strong>Precio M2 Construido</strong>
                                            <div>
                                                <span>$14,088</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <!--Mapa de calor -->
                        <div class="row align-items-center"
                            style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title"
                                        style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                        Mapa
                                        de calor<span class="text-muted fw-normal ms-2"></span></h5>
                                </div>
                            </div>
                            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                <!-- Link de la gráfica -->
                                <div style="display: flex; justify-content: center; align-items: center;">
                                    <!-- Mapa interactivo -->
                                    <div style="flex: 1; margin-right: 20px;">
                                        <iframe src="/datalpine/resources/jupyter/mapas/map_2_pachuca.html" width="800"
                                            height="400" frameborder="0" id="contenido01"
                                            style="display: block; margin: 0 auto;"></iframe>
                                    </div>

                                    <!-- Descripción -->
                                    <div style="flex: 1; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                        <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                            <strong>Descripción:</strong>
                                        </p>
                                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">Este
                                            mapa interactivo despliega una representación visual de las colonias locales
                                            junto con información clave sobre el mercado inmobiliario como el el precio
                                            promedio tanto de propiedades como de m2 de terreno y m2 construido, de
                                            igual forma, engloba información sobre el promedio de recamaras, baños,
                                            cajones de estacionamiento y precios promedio de m2 de terreno y de
                                            construcción. Cada colonia se clasifica en un segmento específico, desde E
                                            (menor precio) hasta S (mayor precio), según el rango de precios de las
                                            propiedades y están representados de la siguiente manera:</p>
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
                                            Analizando el mapa, se destaca que en Pachuca, varias colonias se encuentran
                                            principalmente en el segmento de precios más alto, identificado como S.
                                            Entre
                                            ellas se incluyen:</p>
                                        <ul
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                            <li>Valle de San Javier</li>
                                            <li>Club de Golf</li>
                                            <li>La Moraleja</li>
                                            <li>Periodista</li>
                                        </ul>
                                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                            Por otro lado, se observa que entre las colonias con precios más accesibles
                                            se
                                            encuentra:</p>
                                        <ul
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                            <li>La Palma</li>
                                        </ul>
                                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                            Además, se identifican colonias cuyos precios se sitúan en un rango
                                            promedio, como:</p>
                                        <ul
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                            <li>Santa Julia</li>
                                            <li>Piracantos</li>
                                            <li>Pitahayas</li>
                                        </ul>
                                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                            Este mapa nos proporciona una visión clara de la diversidad de precios en
                                            las
                                            diferentes colonias de Pachuca.</p>
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
                                    <iframe src="/datalpine/resources/jupyter/mapas/hidalgo_heat_map.html" width="800"
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
                                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">El
                                            mapa
                                            de
                                            calor presentado ofrece una visualización de la densidad de propiedades
                                            disponibles
                                            en la ciudad. La representación utiliza una escala de colores que va desde
                                            el
                                            rojo
                                            intenso, indicando una alta concentración de propiedades en una zona
                                            específica,
                                            hasta el azul más claro, denotando una menor oferta de propiedades en esa
                                            área,
                                            donde cada propiedad está geolocalizada mediante sus coordenadas de latitud
                                            y
                                            longitud. </p>
                                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">Esta
                                            representación permite identificar fácilmente áreas con alta demanda y
                                            concentración
                                            de propiedades, así como áreas con menor competencia y potencial para el
                                            desarrollo
                                            inmobiliario.</p>
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
                                        colonias
                                        destacan por su alta densidad de disponibilidad, como <strong>La Providencia,
                                            Miguel
                                            Hidalgo,
                                            Lomas Residencial, Real Toledo Fase 4 y Lomas de Nueva Airosa. </strong></p>
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                        Por otro lado, existen colonias donde la oferta es notablemente más limitada,
                                        como
                                        <strong>La
                                            Misión, Ex-Hacienda de Pitahayas, Carlos Rovirosa, Hacienda la Herradura y
                                            Privada
                                            Rinconadas del Sur.</strong>
                                    </p>
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                        Este panorama ofrece una visión clara de las áreas con mayor y menor
                                        disponibilidad
                                        de
                                        propiedades. </p>
                                </div>
                            </div>
                        </div>

                        <!--1. Segmentos -->
                        <div class="row align-items-center"
                            style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title"
                                        style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                        1.
                                        Segmentos<span class="text-muted fw-normal ms-2"></span></h5>
                                </div>
                            </div>
                            <!--1.1 Distribución de segmentos -->
                            <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                                <?php
                                echo "<li style='font-size: 20px;'>1.1 Distribución de segmentos</li>";
                                echo "</ol>";
                                echo "</ol>";
                                ?>
                                <!-- Link de la gráfica -->
                                <iframe src="/datalpine/resources/jupyter/graficas/g_bar_distsegmentos_pachuca.html"
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
                                            Distribución de segmentos. Conoce la participación en el mercado
                                            inmobiliario por segmentos (S, A, B, C, D, E). Cada sección representa el
                                            porcentaje o proporción en ese segmento específico en relación con el total.
                                        </p>
                                    </div>
                                </div>
                                <div
                                    style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                    <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                        <strong>Interpretación:</strong>
                                    </p>
                                    <div style="text-align: left;">
                                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                            La gráfica revela una distribución variada de propiedades en diferentes
                                            rangos de precios en el mercado inmobiliario. El análisis del comportamiento
                                            de cada segmento y sus subsegmentos revela patrones interesantes en el
                                            mercado inmobiliario.</p>
                                        <ul
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                            <li><strong>Segmento E:</strong> El subsegmento <strong>E1</strong> es el
                                                más destacado, mientras que <strong>E2 y E3</strong>
                                                tienen una menor representación, indicando una demanda más limitada en
                                                los rangos de precios más altos.</li>
                                            <li><strong>Segmento B:</strong> Los subsegmentos <strong>B1, B2 y
                                                    B3</strong> ofrecen una variedad de
                                                opciones para compradores con presupuestos variados, mostrando una
                                                distribución equilibrada de propiedades en diferentes rangos de precios.
                                            </li>
                                            <li><strong>Segmento D:</strong> Aunque <strong>D1</strong> muestra una
                                                presencia notable, <strong>D2 y D3</strong> tienen una
                                                representación más baja, sugiriendo una demanda relativamente menor en
                                                los rangos de precios más altos.</li>
                                            <li><strong>Segmento C:</strong> Los subsegmentos <strong>C1, C2 y
                                                    C3</strong> muestran una distribución
                                                uniforme, reflejando estabilidad en la demanda en la gama media del
                                                mercado.</li>
                                            <li><strong>Segmento A:</strong> <strong>A1, A2 y A3</strong> tienen una
                                                representación similar, indicando una
                                                demanda estable en los rangos de precios más altos..</li>
                                            <li><strong>Segmento S:</strong> Este segmento no está dividido en
                                                subsegmentos, siendo <strong>S1</strong> el
                                                más prominente.</li>
                                        </ul>
                                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                            Mientras que los segmentos S y B muestran una fuerte presencia en los
                                            extremos de la escala de precios, los segmentos D, C, A y E muestran una
                                            distribución más equilibrada en sus respectivos subsegmentos. Esta
                                            información nos permite entender las tendencias de demanda y adaptar
                                            estrategias de comercialización y desarrollo de propiedades en consecuencia.
                                        </p>
                                    </div>
                                </div>

                                <!--1.2 Distribución por M2 construcción por rango -->
                                <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                    <?php
                                    echo "<li style='font-size: 20px;'>1.2 Distribución por M2 construcción por rango</li>";
                                    echo "</ol>";
                                    echo "</ol>";
                                    ?>
                                    <!-- Link de la gráfica -->
                                    <div class="row">
                                        <div class="col-md-6 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">Segmentos</h5>
                                                    <iframe
                                                        src="/datalpine/resources/jupyter/graficas/grafica_barras_m2_construido_pachuca.html"
                                                        width="100%" height="300" frameborder="0"
                                                        style="border: none;"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-4">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h5 class="card-title">General</h5>
                                                    <iframe
                                                        src="/datalpine/resources/jupyter/graficas/grafica_pastel_m2_construido_pachuca.html"
                                                        width="100%" height="300" frameborder="0"
                                                        style="border: none;"></iframe>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Explicación de la gráfica -->
                                    <div
                                        style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                        <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                            <strong>Descripción:</strong>
                                        </p>
                                        <div style="text-align: left;">
                                            <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444;">
                                                Distribución por M2 de construcción por rango para las
                                                propiedades
                                                en
                                                diferentes segmentos (S, A, B, C, D, E).
                                                En función de la cantidad de metros cuadrados de construcción,
                                                observa cómo
                                                se agrupan las viviendas según su tamaño disponible permitiendo
                                                una
                                                visión
                                                rápida y clara de cómo se distribuyen y cuales son más
                                                predominantes
                                                en un
                                                cierto mercado inmobiliario.
                                            </p>
                                            <ul
                                                style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                                <li>Si una barra es alta, significa que hay muchas propiedades
                                                    que
                                                    tienen un
                                                    tamaño de construcción dentro de ese rango específico.</li>
                                                <li>Si una barra es baja, existen menos propiedades en ese rango
                                                    en
                                                    particular.</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div
                                        style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                        <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                            <strong>Interpretación:</strong>
                                        </p>
                                        <div style="text-align: left;">
                                            <ul
                                                style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                                <li><strong>Segmento S:</strong> Posee una alta concentración de
                                                    propiedades con
                                                    un
                                                    tamaño de
                                                    construcción mayor a los <strong>300 m2</strong>.</li>
                                                <li><strong>Segmento A:</strong> Tiene una cantidad significativa de
                                                    propiedades
                                                    de
                                                    <strong>0-100m2
                                                        de construcción</strong>.
                                                </li>
                                                <li><strong>Segmento B:</strong> Destaca las propiedades con 100-150m2,
                                                    seguido
                                                    de
                                                    <strong>150-200m2
                                                        de construcción</strong>.
                                                </li>
                                                <li><strong>Segmento C:</strong> Las mayores concentraciones son en
                                                    200-250m2,
                                                    seguido de
                                                    <strong>150-200m2 de construcción</strong>.
                                                </li>
                                                <li><strong>Segmento D:</strong> Posee los valores más cercanos a la
                                                    media
                                                    presupuestal y
                                                    tiene una distribución equitativa. Destaca las propiedades
                                                    con
                                                    un tamaño
                                                    de construcción mayor a los <strong>200-250M2</strong> y mayor a
                                                    <strong>300M2 de
                                                        construcción</strong>.
                                                </li>
                                                <li><strong>Segmento E:</strong> Tiene pocos terrenos en m2 de
                                                    construcción en
                                                    todos
                                                    los
                                                    rangos. Esto podría indicar que este segmento tiene una
                                                    oferta
                                                    limitada
                                                    de terrenos debido a su poco valor en el mercado.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <!--1.2.2 Precio promedio por M2 totales -->
                                <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                    <?php
                                    echo "<li style='font-size: 20px;'>1.2.2 Precio promedio por M2 totales</li>";
                                    echo "</ol>";
                                    echo "</ol>";
                                    ?>
                                    <!-- Link de la gráfica -->
                                    <iframe
                                        src="/datalpine/resources/jupyter/graficas/g_bar_PrecioPromedioM2_pachuca.html"
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
                                                Este análisis visual presenta la variación en costos por metro cuadrado
                                                en distintos segmentos inmobiliarios. Se observa un aumento progresivo
                                                de los valores a medida que se avanza de un rango a otro, proporcionando
                                                una representación concisa de las tendencias de precios en diferentes
                                                dimensiones de propiedades.
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                        <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                            <strong>Interpretación:</strong>
                                        </p>
                                        <div style="text-align: left;">
                                            <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                                La gráfica presenta los precios promedio por metro cuadrado en
                                                diferentes rangos, ofreciendo una perspectiva clara de la variación de
                                                costos en el mercado inmobiliario. Desde <strong>$17,784</strong> en el
                                                rango de <strong>0-100</strong>
                                                metros cuadrados hasta <strong>$19,652</strong> para propiedades que
                                                superan los <strong>300
                                                    metros</strong> cuadrados, la visualización destaca la evolución de
                                                los precios a
                                                medida que aumenta la dimensión de las propiedades.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- 1.3  Distribución de Precio por M2 de Terreno con construcción por Rango -->
                            <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                <?php
                                echo "<li style='font-size: 20px;'>1.3  Distribución de Precio por M2 de Terreno con construcción por Rango</li>";
                                echo "</ol>";
                                echo "</ol>";
                                ?>
                                <!-- Link de la gráfica -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Segmentos</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/grafica_m2_Total_pachuca.html"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">General</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/grafica_pastel_m2_Terreno_pachuca.html"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Explicación de la gráfica -->

                                <div
                                    style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                    <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                        <strong>Descripción:</strong>
                                    </p>
                                    <div style="text-align: left;">
                                        <ul
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                            <li>Observa cómo las propiedades se agrupan en diferentes segmentos (S, A,
                                                B, C,
                                                D, E) en función de sus metros cuadrados de terreno.</li>
                                            <li>Visualiza la distribución de las propiedades según la cantidad de m2 de
                                                terreno que tiene cada uno.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                    <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                        <strong>Interpretación:</strong>
                                    </p>
                                    <div style="text-align: left;">
                                        <ul
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                            <li><strong>Segmento S:</strong> Predominan los terrenos con <strong>150-200
                                                    M2</strong>. Esto significa que
                                                en
                                                este segmento hay una gran cantidad de terrenos construidos de tamaño
                                                medio-amplio.</li>
                                            <li><strong>Segmento A:</strong> Tiene una concentración de terrenos en el
                                                rango de <strong>100-150
                                                    M2</strong>.
                                                Esto indica que los terrenos de tamaño medio son comunes en este
                                                segmento.
                                            </li>
                                            <li><strong>Segmento B, C y D:</strong> Muestran una distribución más
                                                acentuada entre los
                                                terrenos con 100-150 M2 de tamaño. Esto implica que este segmento es más
                                                adecuado para aquellos que buscan terrenos de tamaño medio.</li>
                                            <li><strong>Segmento E:</strong> Tiene pocos terrenos disponibles en todos
                                                los rangos. Esto
                                                podría indicar que este segmento tiene una oferta limitada de terrenos
                                                debido a su poco valor en el mercado.
                                            </li>
                                        </ul>
                                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                            Esto puede ayudar a los compradores a entender qué tamaños de terreno son
                                            más
                                            comunes en cada segmento. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- 1.4 Distribución recámaras -->
                            <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                <?php
                                echo "<li style='font-size: 20px;'>1.4 Distribución recámaras</li>";
                                echo "</ol>";
                                echo "</ol>";
                                ?>
                                <!-- Link de la gráfica -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Segmentos</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/grafica_recamaras_pachuca.html"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">General</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/grafica_pastel_recamaras_pachuca.html"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Explicación de la gráfica -->

                                <div
                                    style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                    <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                        <strong>Descripción:</strong>
                                    </p>
                                    <div style="text-align: left;">
                                        <ul
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                            <li>Explora cómo se distribuyen las propiedades por segmentos disponibles,
                                                según el número de recámaras, desde 1 hasta 6.</li>
                                            <li>Distribución de propiedades por segmentos según el número de recámaras,
                                                que varía de 1 a 6</li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                    <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                        <strong>Interpretación:</strong>
                                    </p>
                                    <div style="text-align: left;">
                                        <ul
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                            <li>Las propiedades con <strong>3 recámaras</strong> son las más comunes en
                                                <strong>todos los
                                                    segmentos</strong>,
                                                esto se puede observar en las barras altas, con una cantidad
                                                significativa
                                                para el <strong>segmento B</strong>.
                                            </li>
                                            <li>Subsiguiente, las propiedades con <strong>2 recámaras</strong> también
                                                son
                                                populares
                                                en el
                                                <strong>segmento A y B</strong>. En contraste, las propiedades con
                                                <strong>4 o más
                                                    recámaras</strong>
                                                en los
                                                <strong>segmentos C y D</strong>.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- 1.5 Distribución de baños -->
                            <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                <?php
                                echo "<li style='font-size: 20px;'>1.5 Distribución de baños</li>";
                                echo "</ol>";
                                echo "</ol>";
                                ?>
                                <!-- Link de la gráfica -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Segmentos</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_baños_pachuca.html"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">General</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/g_pie_baños_pachuca.html"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Explicación de la gráfica -->

                                <div
                                    style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                    <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                        <strong>Descripción:</strong>
                                    </p>
                                    <div style="text-align: left;">
                                        <ul
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                            <li>Observa la distribución de propiedades por segmentos según el número de
                                                baños, que varía desde 1 hasta 8 o más.</li>
                                            <li>Distribución de propiedades por segmentos según el número de baños, que
                                                varía de 1 a 8 o más</li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                    <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                        <strong>Interpretación:</strong>
                                    </p>
                                    <div style="text-align: left;">
                                        <ul
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                            <li>En el <strong>segmento S</strong>, la mayoría de las propiedades tienen
                                                <strong>3 y 5
                                                    baños</strong>.
                                                Esto se
                                                puede observar en las barras altas en este segmento para las
                                                propiedades con
                                                dicho números de baños.
                                            </li>
                                            <li>Para el <strong>segmento A</strong>, hay una distribución más uniforme
                                                entre
                                                propiedades con
                                                2 baños seguido de <strong>1 baño</strong>.</li>
                                            <li>El <strong>segmento B</strong> muestra una predominancia de propiedades
                                                con <strong>3
                                                    baños</strong>.
                                                Esto se
                                                puede observar en la barra alta en este segmento para las
                                                propiedades,
                                                seguido de <strong>2 baños</strong>.</li>
                                            <li>En los <strong>segmentos C y D</strong>, la mayoría de las propiedades
                                                es común
                                                encontrar
                                                entre <strong>2 a 4 baños</strong>.</li>
                                            <li>El <strong>segmento E</strong> tiene muy pocas propiedades en cada
                                                categoría de
                                                número de
                                                baños. Esto se puede observar en las barras bajas en este
                                                segmento
                                                para las
                                                propiedades con cualquier número de baños, predominando <strong>2
                                                    baños</strong>.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- 1.6 Distribución de estacionamientos -->
                            <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                <?php
                                echo "<li style='font-size: 20px;'>1.6 Distribución de estacionamientos</li>";
                                echo "</ol>";
                                echo "</ol>";
                                ?>
                                <!-- Link de la gráfica -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Segmentos</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/grafica_estacionamiento_pachuca.html"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">General</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/grafica_pastel_estacionamientos_pachuca.html"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Explicación de la gráfica -->
                                <div
                                    style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                    <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                        <strong>Descripción:</strong>
                                    </p>
                                    <div style="text-align: left;">
                                        <ul
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #444; list-style-type: disc; padding-left: 20px;">
                                            <li>Observa cómo se distribuyen las propiedades en diferentes segmentos en
                                                función del número de lugares de estacionamiento, que varía de 0 a 6 o
                                                más.</li>
                                            <li>Obtén información sobre cómo se categorizan las propiedades en distintos
                                                segmentos en base a la cantidad de espacios de estacionamiento
                                                disponibles, con opciones que van desde 1 hasta 8 o más.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div
                                    style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                    <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                        <strong>Interpretación:</strong>
                                    </p>
                                    <div style="text-align: left;">
                                        <ul
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                            <li>La mayoría de las propiedades en todos los segmentos <strong>tienen 2
                                                    lugares de
                                                    estacionamiento</strong> seguido de 1 estacionamiento. Esto se puede
                                                observar
                                                en las
                                                barras altas en estos segmentos para las propiedades con estos
                                                números de
                                                estacionamientos.</li>
                                            <li>El <strong>segmento S</strong> tiene una notable cantidad de propiedades
                                                con <strong>2
                                                    estacionamientos</strong>.</li>
                                            <li>Los <strong>segmentos A, B, C, D Y E</strong> muestran una preferencia
                                                marcada
                                                por <strong>2
                                                    estacionamientos</strong>. Esto se puede observar en la barra alta
                                                en
                                                estos
                                                segmentos
                                                para las propiedades seguido de 1 estacionamiento.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--2. Tiempo estimado de venta -->
                        <div class="row align-items-center"
                            style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title"
                                        style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                        2.
                                        Tiempo estimado de venta<span class="text-muted fw-normal ms-2"></span>
                                    </h5>
                                </div>
                            </div>
                            <!-- 2.1 Tiempo estimado de venta -->
                            <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                <?php
                                echo "<li style='font-size: 20px;'>2.1 Tiempo estimado de venta</li>";
                                echo "</ol>";
                                echo "</ol>";
                                ?>
                                <!-- Link de la gráfica -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Segmentos</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_seg_pachuca.html"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">General</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_tiempoventa_total_pachuca.html"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Explicación de la gráfica -->
                                <div
                                    style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                    <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                        <strong>Descripción:</strong>
                                    </p>
                                    <div style="text-align: left;">
                                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                            Distribución
                                            de las viviendas en función de la cantidad de meses que han estado en
                                            existencia
                                            para venta por segmentos (S, A, B, C, D, E). De acuerdo al tiempo de
                                            venta
                                            estimado
                                            se puede identificar que segmentos tienen una demanda más alta y tienden
                                            a
                                            venderse
                                            un poco más rápido y cuales requieren un poco más de tiempo para
                                            encontrar
                                            compradores.</p>
                                    </div>
                                </div>
                                <div
                                    style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                    <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                        <strong>Interpretación:</strong>
                                    </p>
                                    <div style="text-align: left;">
                                        <p
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                            La mayoría de las viviendas en <strong>todos los segmentos</strong> tienden
                                            a tener una
                                            antigüedad <strong>mayor a los 13 meses</strong> antes de ser
                                            <strong>vendidas</strong>. Esto indica que
                                            las
                                            viviendas para dicho mercado requieren de más tiempo para encontrar
                                            comprador.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--3. Créditos -->
                        <div class="row align-items-center"
                            style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title"
                                        style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                        3.
                                        Créditos<span class="text-muted fw-normal ms-2"></span></h5>
                                </div>
                            </div>
                            <!-- 3.1. Distribución de créditos por género -->
                            <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                <?php
                                echo "<li style='font-size: 20px;'>3.1. Distribución de créditos por género</li>";
                                echo "</ol>";
                                echo "</ol>";
                                ?>
                                <!-- Link de la gráfica -->
                                <iframe src="/datalpine/resources/jupyter/graficas/g_pie_creditosgenero_pachuca.html"
                                    width="800" height="400" frameborder="0" id="contenido01"
                                    style="display: block; margin: 0 auto;"></iframe>
                            </div> <!-- Explicación de la gráfica -->
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Descripción:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                        Distribución de créditos por género. Distingue la diferencia en la porporción de
                                        prestamos entre hombres y mujeres en el mercado inmobiliario, esto puede ser
                                        útil para comprender las tendencias de financiamiento y su participación en
                                        terminos de acesso a créditos por grupo de género.</p>
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                        <li>Si la sección de hombres es más grande, significa que un mayor porcentaje de
                                            préstamos se otorga a hombres.</li>
                                        <li>Si la sección de mujeres es más grande, indica que un mayor porcentaje de
                                            préstamos se otorga a mujeres.</li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Interpretación:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                        <li>Un <strong>mayor porcentaje de préstamos se otorga a hombres</strong> en el
                                            mercado
                                            inmobiliario. Los hombres tienen el <strong>54.4%</strong> de los créditos.
                                        </li>
                                        <li>Las mujeres tienen el <strong>45.6%</strong> de los créditos. Esto indica
                                            que un
                                            <strong>menor
                                                porcentaje
                                                de préstamos se otorga a mujeres</strong>.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- 3.2. Destino del crédito-->
                            <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                <?php
                                echo "<li style='font-size: 20px;'>3.2. Destino del crédito</li>";
                                echo "</ol>";
                                echo "</ol>";
                                ?>
                                <!-- Link de la gráfica -->
                                <iframe src="/datalpine/resources/jupyter/graficas/g_bar_creditosdestino_pachuca.html"
                                    width="800" height="400" frameborder="0" id="contenido01"
                                    style="display: block; margin: 0 auto;"></iframe>
                            </div> <!-- Explicación de la gráfica -->
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Descripción:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                        Número de
                                        créditos por tipo de vivienda. Descubre como se distribuyen los créditos
                                        de
                                        acuerdo
                                        al
                                        tipo de vivienda: nueva, con mejoras, usada y otros programas. Cada
                                        sección
                                        del
                                        gráfico
                                        representa la proporción del número de créditos que se destina a un
                                        propósito
                                        específico
                                        en relación con el total de créditos otorgados para viviendas. Explora
                                        hacia
                                        donde
                                        se
                                        dirige el dinero prestado y comprende las preferencias y necesidades de
                                        las
                                        personas
                                        que
                                        invierten en este sector inmobiliario.</p>
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                        <li>Si una sección es grande, significa que una parte significativa de
                                            los
                                            créditos
                                            se utiliza para dicho destino.</li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Interpretación:</strong>
                                <div style="text-align: left;">
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                        <li>La tabla proporciona una clasificación del mercado salarial por persona,
                                            dividida en diferentes categorías desde “G” hasta “S”. Cada categoría
                                            representa un rango de salario específico. </li>
                                        <li>La mayoría de las personas se encuentran en la <strong>categoría “F”
                                                (30.03%)</strong>, que representa salarios entre <strong>$5000 y $7,999
                                                pesos</strong>, seguida por la <strong>categoría “F1”(25.56%)</strong>,
                                            que incluye salarios entre <strong>$8,000 y $11,999 pesos</strong>, y en
                                            tercer lugar la <strong>categoría “G” (23.32%)</strong> que representa
                                            salarios que ronda los <strong>$10 y $4,999 pesos</strong> indicando que una
                                            gran proporción de individuos tiene ingresos dentro de esos rangos.
                                            <strong>A partir</strong> de la <strong>clasificación “E” y”E1”</strong>,
                                            los <strong>porcentajes disminuyen</strong> significativamente. Las demás
                                            categorías tienen una menor proporción de personas.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Mercado salario por persona -->
                        <div class="row align-items-center"
                            style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title"
                                        style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                        Mercado salario por persona<span class="text-muted fw-normal ms-2"></span>
                                    </h5>
                                </div>
                            </div>
                            <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                <!-- Link de la gráfica -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Segmentos</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_mercadosalarial_persona_pachuca.html"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Rango en $</h5>
                                                <iframe src="/datalpine/resources/jupyter/graficas/mercadosalarial.png"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Explicación de la gráfica -->
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Descripción:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">Esta
                                        clasificación se basa en rangos de valores que representan diferentes
                                        niveles en
                                        el
                                        mercado salarial promedio por persona. Lo que nos permite entender y
                                        comunicar
                                        de manera
                                        efectiva dónde se encuentra un determinado elemento en el mercado.</p>
                                </div>
                            </div>
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Interpretación:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                        <li>La tabla proporciona una clasificación del mercado salarial por persona,
                                            dividida en diferentes categorías desde “G” hasta “S”. Cada categoría
                                            representa un rango de salario específico. </li>
                                        <li>La mayoría de las personas se encuentran en la <strong>categoría “F”
                                                (30.03%)</strong>, que representa salarios entre <strong>$5000 y $7,999
                                                pesos</strong>, seguida por la <strong>categoría “F1”(25.56%)</strong>,
                                            que incluye salarios entre <strong>$8,000 y $11,999 pesos</strong>, y en
                                            tercer lugar la <strong>categoría “G” (23.32%)</strong> que representa
                                            salarios que ronda los <strong>$10 y $4,999 pesos</strong> indicando que una
                                            gran proporción de individuos tiene ingresos dentro de esos rangos.
                                            <strong>A partir</strong> de la <strong>clasificación “E” y”E1”</strong>,
                                            los <strong>porcentajes disminuyen</strong> significativamente. Las demás
                                            categorías tienen una menor proporción de personas.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Mercado salario por pareja -->
                        <div class="row align-items-center"
                            style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title"
                                        style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                        Mercado salario por pareja<span class="text-muted fw-normal ms-2"></span>
                                    </h5>
                                </div>
                            </div>
                            <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                <!-- Link de la gráfica -->
                                <div class="row">
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Segmentos</h5>
                                                <iframe
                                                    src="/datalpine/resources/jupyter/graficas/g_bar_mercadosalarial_parejas_pachuca.html"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title">Rango en $</h5>
                                                <iframe src="/datalpine/resources/jupyter/graficas/mercadosalarial.png"
                                                    width="100%" height="300" frameborder="0"
                                                    style="border: none;"></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- Explicación de la gráfica -->
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #e6f3ff; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Descripción:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">Esta
                                        clasificación se basa en rangos de valores que representan diferentes
                                        niveles en
                                        el
                                        mercado salarial promedio por pareja. Lo que nos permite entender y
                                        comunicar de
                                        manera
                                        efectiva dónde se encuentra un determinado elemento en el mercado.</p>
                                </div>
                            </div>
                            <div
                                style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                    <strong>Interpretación:</strong>
                                </p>
                                <div style="text-align: left;">
                                    <ul
                                        style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                        <li>La tabla proporciona una clasificación del mercado salarial por pareja,
                                            dividida en diferentes categorías desde “G” hasta “S”. Cada categoría
                                            representa un rango de salario específico y el porcentaje de parejas que
                                            caen dentro de ese rango.</li>
                                        <li>La mayoría de las parejas se encuentran en la <strong>categoría “F1”
                                                (24.00%)</strong>, que representa salarios entre <strong>$8000 y $11,999
                                                pesos</strong>, seguida por la <strong>categoría “E” (18.46%)</strong>,
                                            que incluye salarios entre <strong>$12000 y $15,999 pesos</strong>, y en
                                            tercer lugar la <strong>categoría “F”(14.46%)</strong> que incluye a parejas
                                            que ganan entre <strong>$5000 y $7,999 pesos</strong>. Dichos segmentos
                                            representan la proporción de parejas con mayor participación del total
                                            dentro de los rangos salariales. Las demás categorías tienen una menor
                                            proporción.</li>
                                        <li>Esta gráfica nos permite comprender de manera efectiva cómo se distribuyen
                                            los salarios en el mercado laboral y dónde se encuentra un elemento
                                            específico dentro de este mercado. Es una herramienta útil para analizar la
                                            estructura salarial de la población.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Volumen del mercado salarial de parejas -->
                        <div class="row align-items-center"
                            style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title"
                                        style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                        Volumen del mercado salarial de parejas<span
                                            class="text-muted fw-normal ms-2"></span>
                                    </h5>
                                </div>
                            </div>
                            <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                <!-- Link de la gráfica -->
                                <iframe
                                    src="/datalpine/resources/jupyter/graficas/g_bar_volmercadosalarial_parejas_pachuca.html"
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
                                            Esta
                                            gráfica
                                            es una representación visual del volumen total de salarios por pareja
                                            anuales,
                                            segmentados por categorías. En otras palabras, nos muestra cómo se
                                            divide el
                                            dinero
                                            ganado neto entre diferentes tipos de trabajos y ocupaciones. De un
                                            vistazo,
                                            podemos
                                            comprender cómo se distribuye este volumen salarial en diferentes
                                            niveles de
                                            ingresos, lo que proporciona una visión completa de la estructura
                                            salarial
                                            en
                                            nuestro mercado laboral.</p>
                                    </div>
                                </div>
                                <div
                                    style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                    <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                        <strong>Interpretación:</strong>
                                    </p>
                                    <div style="text-align: left;">
                                        <ul
                                            style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                            <li>Las barras están coloreadas para representar visualmente cada rango de
                                                ingreso; hay una barra verde, una amarilla y café que son prominentes
                                                porque representan los volúmenes salariales netos más altos. Los valores
                                                exactos del volumen salarial están indicados en cada barra para
                                                proporcionar detalles precisos.</li>
                                            <li>Se observa que la categoría color verde de ingresos de
                                                <strong>$8000-$11999(F1)</strong> tiene el volumen salarial más alto,
                                                seguido por la categoría de <strong>$5000-$8999 (F)</strong>. Las
                                                categorías con ingresos superiores a 25K(D1) en adelante tienen un
                                                volumen salarial significativamente menor.</li>
                                            <li>Este gráfico nos permite comprender de manera efectiva cómo se
                                                distribuyen los salarios en el mercado laboral y dónde se encuentra un
                                                elemento específico dentro de este mercado. Es una herramienta útil para
                                                analizar la estructura salarial de la población.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Profesiones -->
                        <div class="row align-items-center"
                            style="border: 1px solid #ccc; border-radius: 5px;  padding: 12px; margin-bottom: 20px;">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <h5 class="card-title"
                                        style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">
                                        Profesiones<span class="text-muted fw-normal ms-2"></span></h5>
                                </div>
                            </div>
                            <!-- Salario Individual -->
                            <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                                <?php
                                echo "<li style='font-size: 20px;'>Salario Individual</li>";
                                echo "</ol>";
                                echo "</ol>";
                                ?>
                                <!-- Link de la gráfica -->
                                <iframe src="/datalpine/resources/jupyter/tablas/tabla_profsalarioindv_pachuca.html"
                                    width="800" height="400" frameborder="0" id="contenido01"
                                    style="display: block; margin: 0 auto;"></iframe>
                                <!-- Explicación de la gráfica -->

                                <div
                                    style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                    <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;">
                                        <strong>Interpretación:</strong>
                                    </p>
                                    <div style="text-align: left;">
                                        <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">
                                            Explora
                                            nuestra plataforma para conocer las profesiones que lideran los
                                            ingresos
                                            y
                                            aquellas
                                            que presentan retos económicos. Obtén información detallada sobre
                                            los
                                            salarios,
                                            tendencias y perspectivas profesionales, brindándote una visión
                                            clara de
                                            las
                                            carreras más y menos lucrativas en el mercado laboral actual..</p>
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