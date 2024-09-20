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
        <!-- Gráfica 1: Distribución % de créditos por categoría (trimestre) -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Distribución % de créditos por categoría (trimestre)</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal1">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal1">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_distribucion_creditos_categoria.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfica 2: g_bar_distribucion_segmentos -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Distribución por Segmentos</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal2">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal2">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_distribucion_segmentos.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfica 3: Tiempo en el mercado -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Tiempo en el mercado</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal3">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal3">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_tiempo_mercado.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfica 4: Distribución % de créditos por vivienda valor -->
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Distribución % de créditos por vivienda valor</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal4">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal4">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_distribucion_creditos_vivienda.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

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
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal5">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal5">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_distribucion_creditos_organismo.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfica 6: g_pie_estacionamientos -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Estacionamientos</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal6">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal6">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_estacionamientos.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfica 7: Distribución de baños [V2] -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Distribución de baños [V2]</h5>
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
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_banos_v2.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfica 8: g_pie_recamaras -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Recámaras</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal8">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal8">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_recamaras.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfica 9: g_bar_dist_m2_construidos -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Distribución m2 construidos</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal9">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal9">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_dist_m2_construidos.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfica 10: g_bar_estacionamientos -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Estacionamientos</h5>
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
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_estacionamientos.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfica 11: g_bar_recamaras -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Recámaras</h5>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-user-tie me-2"></i>
                            <span class="developer-label">Desarrollador</span>
                        </div>
                        <div>
                            <button class="btn btn-sm btn-outline-primary rounded-pill me-2" data-bs-toggle="modal" data-bs-target="#descriptionModal11">Descripción</button>
                            <button class="btn btn-sm btn-outline-secondary rounded-pill" data-bs-toggle="modal" data-bs-target="#interpretationModal11">Interpretación</button>
                        </div>
                    </div>
                    <div style="border-top: 1px solid #ccc; padding-top: 10px;">
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_recamaras.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfica 12: g_bar_PrecioPromedio_m2 -->
        <div class="col-md-6">
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
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_bar_PrecioPromedio_m2.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gráfica 13: Distribución de baños [V1] -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title subtitle mb-3 text-center">Distribución de baños [V1]</h5>
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
                        <iframe src="/datalpine/resources/Ciudades/Pachuca/assets/graficas/g_pie_banos_v1.html" width="100%" height="400" frameborder="0" style="min-height: 430px; border: 0;"></iframe>
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