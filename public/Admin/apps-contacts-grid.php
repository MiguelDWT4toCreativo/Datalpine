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
    <title>User Grid | Minia - Admin & Dashboard Template</title>
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
                            <h4 class="mb-sm-0 font-size-18">Análisis de mercado</h4>
                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Pachuca</a></li>
                                    <li class="breadcrumb-item active">Análisis de mercado</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header bg-white d-flex align-items-center justify-content-between">
                                <h4 class="card-header__title m-0">Mapa de calor</h4>
                                <div>
                                    <input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido01') & ocultar('contenido02') " value="Códigos postales por precios ">
                                    <!--<input type="button" class="btn btn-outline-dark" onclick="mostrar('contenido02') & ocultar('contenido01') " value="Mapa 2"> -->
                                </div>
                            </div>
                            <div class="card-header bg-white d-flex justify-content-center align-items-center">
                                <form style="text-align: center;">
                                    <div>
                                        <!--
                                        <iframe src="/dashboard/pachuca_property_map_formatted2.html" width="800" height="400" frameborder="0" id="contenido01"></iframe>
                                         <iframe src="/pachuca_property_map_formatted.html" width="800" height="500" frameborder="0" id="contenido02" class="oculto"></iframe> -->
                                    </div>
                                </form>
                            </div>
                            <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                <h4 class="card-header__title flex m-0">Descripción: </h4>
                                <div class="text"> Este mapa interactivo proporciona una visión detallada de las colonias locales, presentando datos esenciales para la toma de decisiones inmobiliarias. Desde los precios por metro cuadrado hasta la distribución de construcciones, el número de baños y estacionamientos disponibles, cada punto en el mapa revela aspectos cruciales para entender el mercado..<br><br></div>
                            </div>
                            <div class="px-4 py-3" style="background-color: #FAFBFE;">
                                <ul class="nav navbar-nav align-items-center">
                                    <button type="button" class="mr-auto" style="color: #000000; height: 40px; border: #FAFBFE; border-radius: 8px; padding: 5px 15px;" data-toggle="modal" data-placement="bottom" data-target="#modal-large-mdc">
                                        <i class="material-icons icon-14pt text-success">info</i> Interpretación
                                    </button>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center" style="border: 1px solid #ccc; border-radius: 5px; padding: 10px;">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <h5 class="card-title" style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">1. Segmentos<span class="text-muted fw-normal ms-2"></span></h5>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <?php
                        echo "<li style='font-size: 20px;'>1.1 Distribución de segmentos</li>";
                        echo "</ol>";
                        echo "</ol>";
                        ?>
                        <!-- Link de la gráfica -->
                        <iframe src="/datalpine/resources/jupyter/graficas/g_bar_segmentosdist_pachuca.html" width="800" height="400" frameborder="0" id="contenido01" style="display: block; margin: 0 auto;"></iframe>
                        <!-- Explicación de la gráfica -->
                        <div style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                            <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;"><strong>Interpretación:</strong></p>
                            <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">Conoce la participación en el mercado inmobiliario por segmentos (S, A, B, C, D, E). Cada sección representa el porcentaje o proporción en ese segmento específico en relación con el total.</p>
                        </div>

                        <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                            <?php
                            echo "<li style='font-size: 20px;'>1.2 Distribución por M2 construcción por rango</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <!-- Link de la gráfica -->
                            <iframe src="/datalpine/resources/jupyter/graficas/grafica_barras_m2_construido_pachuca.html" width="800" height="400" frameborder="0" id="contenido01" style="display: block; margin: 0 auto;"></iframe>
                            <!-- Explicación de la gráfica -->
                            <div style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;"><strong>Interpretación:</strong></p>
                                <div style="text-align: left;">
                                    <ul style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                        <li>Segmento S: Posee una alta concentración de propiedades con un tamaño de construcción mayor a los 300 m2.</li>
                                        <li>Segmento A: Tiene una cantidad significativa de propiedades de 0-100m2 de construcción.</li>
                                        <li>Segmento B: Destaca las propiedades con 100-150m2, seguido de 150-200m2 de construcción.</li>
                                        <li>Segmento C: Las mayores concentraciones son en 200-250m2, seguido de 150-200m2 de construcción.</li>
                                        <li>Segmento D: Posee los valores más cercanos a la media presupuestal y tiene una distribución equitativa. Destaca las propiedades con un tamaño de construcción mayor a los 200-250M2 y mayor a 300M2 de construcción.</li>
                                        <li>Segmento E: Tiene pocos terrenos en m2 de construcción en todos los rangos. Esto podría indicar que este segmento tiene una oferta limitada de terrenos debido a su poco valor en el mercado.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                            <?php
                            echo "<li style='font-size: 20px;'>1.2.2 Precio promedio por M2 totales</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <!-- Link de la gráfica PENDIENTE-->
                            <!-- <iframe src="/datalpine/resources/jupyter/graficas/grafica_barras_m2_construido_pachuca.html" width="800" height="400" frameborder="0" id="contenido01" style="display: block; margin: 0 auto;"></iframe> -->

                            <!-- Explicación de la gráfica -->
                            <div style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;"><strong>Interpretación:</strong></p>
                                <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">La gráfica presenta los precios promedio por metro cuadrado en diferentes rangos, ofreciendo una perspectiva clara de la variación de costos en el mercado inmobiliario. Desde $17,784 en el rango de 0-100 metros cuadrados hasta $19,652 para propiedades que superan los 300 metros cuadrados, la visualización destaca la evolución de los precios a medida que aumenta la dimensión de las propiedades.</p>
                                </div>
                            </div>
                        </div>
                        <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">
                            <?php
                            echo "<li style='font-size: 20px;'>1.3 Distribución M2 de terreno por rango</li>";
                            echo "</ol>";
                            echo "</ol>";
                            ?>
                            <!-- Link de la gráfica -->
                            <iframe src="/datalpine/resources/jupyter/graficas/grafica_barras_m2_construido_pachuca.html" width="800" height="400" frameborder="0" id="contenido01" style="display: block; margin: 0 auto;"></iframe>
                            <!-- Explicación de la gráfica -->
                            <div style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                                <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;"><strong>Interpretación:</strong></p>
                                <div style="text-align: left;">
                                    <ul style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666; list-style-type: disc; padding-left: 20px;">
                                        <li>Segmento S: Predominan los terrenos con 150-200 M2. Esto significa que en este segmento hay una gran cantidad de terrenos construidos de tamaño medio-amplio.</li>
                                        <li>Segmento A : Tiene una concentración de terrenos en el rango de 100-150 M2. Esto indica que los terrenos de tamaño medio son comunes en este segmento.</li>
                                        <li>Segmento B, C y D: Muestran una distribución más acentuada entre los terrenos con 100-150 M2 de tamaño. Esto implica que este segmento es más adecuado para aquellos que buscan terrenos de tamaño medio.</li>
                                        <li>Segmento E: Tiene pocos terrenos disponibles en todos los rangos. Esto podría indicar que este segmento tiene una oferta limitada de terrenos debido a su poco valor en el mercado.</li>
                                    </ul>
                                    <div style="text-align: left;">
                                    <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">Esto puede ayudar a los compradores a entender qué tamaños de terreno son más comunes en cada segmento.</p>
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
