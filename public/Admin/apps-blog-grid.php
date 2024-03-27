<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>
    <title>Menú | DatAlpine</title>
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
                            <h4 class="mb-sm-0 font-size-18">Contacto</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Menú</a></li>
                                    <li class="breadcrumb-item active">Contacto</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <!-- Contacto-->

                <div
                    style="text-align: center; margin-top: 20px; background-color: #f9fafb; border-radius: 20px; padding: 30px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                    <h1 style="font-size: 36px; font-family: 'Arial', sans-serif; color: #333; margin-bottom: 20px;">
                        ¿Necesitas ayuda? ¡Estamos aquí para ti!
                    </h1>
                    <div style="border-top: 1px solid #ccc; padding-top: 20px; margin-top: 20px;">

                        <p style="font-size: 20px; font-family: 'Arial', sans-serif; color: #666; margin-bottom: 30px;">
                            Tu satisfacción es nuestra prioridad número uno. No dudes en contactarnos para cualquier
                            consulta o asistencia que necesites.
                        </p>
                        <div style="text-align: center; display: flex; flex-wrap: wrap; justify-content: center;">
                            <div style="margin-right: 40px;">
                                <a href="tel:7713306407" style="text-decoration: none; color: #333;">
                                    <img src="assets/images/contacto/phone.png" alt="Icono de teléfono"
                                        style="width: 50px; height: 50px; margin-bottom: 10px;">
                                    <br>
                                    <span style="font-size: 22px;">771 330 64 07</span>
                                </a>
                            </div>
                            <div style="margin-right: 40px;">
                                <a href="mailto:contacto@datalpine.mx" style="text-decoration: none; color: #333;">
                                    <img src="assets/images/contacto/gmail.png" alt="Icono de correo"
                                        style="width: 50px; height: 50px; margin-bottom: 10px;">
                                    <br>
                                    <span style="font-size: 22px;">contacto@datalpine.mx</span>
                                </a>
                            </div>
                            <div style="margin-right: 40px;">
                                <a href="https://datalpine.mx/" style="text-decoration: none; color: #333;">
                                    <img src="assets/images/contacto/web.png" alt="Icono de sitio web"
                                        style="width: 50px; height: 50px; margin-bottom: 10px;">
                                    <br>
                                    <span style="font-size: 22px;">Visita nuestro sitio web</span>
                                </a>
                            </div>
                            <div style="margin-right: 40px;">
                                <div>
                                    <img src="assets/images/contacto/map.png" alt="Icono de ubicación"
                                        style="width: 50px; height: 50px; margin-bottom: 10px;">
                                    <br>
                                    <span style="font-size: 22px;">Estamos en Pachuca de Soto, Hidalgo.</span>
                                </div>
                            </div>
                        </div>

                        <div style="margin-top: 30px;">
                            <a href="https://www.facebook.com/profile.php?id=61552173002247"
                                style="text-decoration: none; color: #333; margin-right: 20px;">
                                <img src="assets/images/contacto/facebook.png" alt="Icono de Facebook"
                                    style="width: 40px; height: 40px;">
                            </a>
                            <a href="https://twitter.com/DatAlpine"
                                style="text-decoration: none; color: #333; margin-right: 20px;">
                                <img src="assets/images/contacto/twitter.png" alt="Icono de Twitter"
                                    style="width: 40px; height: 40px;">
                            </a>
                            <a href="https://www.instagram.com/DatAlpine/"
                                style="text-decoration: none; color: #333; margin-right: 20px;">
                                <img src="assets/images/contacto/instagram.png" alt="Icono de Instagram"
                                    style="width: 40px; height: 40px;">
                            </a>
                            <a href="https://www.tiktok.com/@datalpine?_t=8l1AW0atban&_r=1"
                                style="text-decoration: none; color: #333;">
                                <img src="assets/images/contacto/tiktok.png" alt="Icono de TikTok"
                                    style="width: 40px; height: 40px;">
                            </a>
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

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    </body>

    </html>