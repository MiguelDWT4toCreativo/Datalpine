<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    
    <title>User Grid | Minia - Admin & Dashboard Template</title>
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
                <div class="row align-items-center" style="border: 1px solid #ccc; border-radius: 5px; padding: 10px;">
                    <div class="col-md-6">
                    <div class="mb-3">
                        <h5 class="card-title" style="font-family: 'Arial', sans-serif; font-size: 24px; font-weight: bold;">1. Segmentos<span class="text-muted fw-normal ms-2"></span></h5>
                    </div>
                    
                    </div><div style="border-top: 1px solid #ccc; padding-top: 10px;">
                 <?php
                     echo "<li style='font-size: 20px;'>1.1 Distribución de segmentos</li>";
                     echo "</ol>";
                     echo "</ol>";
                 ?>
                           <iframe src="/datalpine/resources/jupyter/graficas/g_bar_segmentosdist_pachuca.html" width="800" height="400" frameborder="0" id="contenido01" style="display: block; margin: 0 auto;"></iframe>
                             <!-- Explicación de la gráfica -->
                 <div style="text-align: center; margin-top: 10px; background-color: #f2f2f2; border-radius: 5px; padding: 10px;">
                     <p style="font-size: 18px; font-family: 'Arial', sans-serif; color: #333;"><strong>Interpretación:</strong></p>
                     <p style="font-size: 16px; font-family: 'Arial', sans-serif; color: #666;">Conoce la participación en el mercado inmobiliario por segmentos (S, A, B, C, D, E). Cada sección representa el porcentaje o proporción en ese segmento específico en relación con el total.</p>
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