<?php
require ('../../backend/security.php');

require ('../../backend/viewmembre.php')

    ?>
<!DOCTYPE html>
<html lang="en">
<?php include ('./partials/head.php') ?>

<body>
    <!-- ======= Header ======= -->
    <?php include ('./partials/header.php') ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include ('./partials/sidebar.php') ?>
    <!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Data Tables</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item">Membres enrolé</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tous les membres</h5>
                            <p>
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                Voluptatibus corrupti beatae unde pariatur. Ullam quibusdam
                                incidunt temporibus labore ducimus voluptates.
                            </p>

                            <!-- Table with stripped rows -->
                            <table class="table datatable">
                                <thead>
                                    <tr>
                                        <th>Nom & Prénom</th>
                                        <th>Fonction</th>
                                        <th>Ville</th>
                                        <th>
                                            Matricule
                                        </th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($member = $members->fetch()) {
                                        if ($member['action'] == 1) { ?>


                                    <tr>
                                        <td>
                                            <?= $member['fname'] . ' ' . $member['lname'] ?>
                                        </td>
                                        <td>
                                            <?= $member['fonction'] ?>
                                        </td>
                                        <td>
                                            <?= $member['city'] ?>
                                        </td>
                                        <td class="fw-bold">
                                            <?= $member['matricule'] ?>
                                        </td>
                                        <td>
                                            <a href="profil-member.php?id_member=<?= $member['id_member'] ?>">Carte
                                                membre</a>
                                        </td>
                                    </tr>
                                    <?php }
                                    } ?>
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            &copy; Copyright <strong><span>PJD</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            Designed by
            <a href="https://mrcode-six.vercel.app/index.html" target="_blank">Mr.Code</a>
        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/chart.js/chart.umd.js"></script>
    <script src="assets/vendor/echarts/echarts.min.js"></script>
    <script src="assets/vendor/quill/quill.min.js"></script>
    <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
</body>

</html>