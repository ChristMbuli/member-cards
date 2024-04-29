<?php
require ('../../backend/security.php');

require ('../../backend/getmember.php')

    ?>
<!DOCTYPE html>
<html lang="en">
<?php include ('./partials/head.php') ?>
<style>
.container {
    width: 100%;
    min-height: 600px;
    position: relative;
    z-index: 1;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 20px;
    overflow-y: hidden;
}

.container::before {
    content: '';
    width: 100%;
    height: 100%;
    background-image: url('../images/2.png');
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    position: absolute;
    top: 0;
    left: 0;
    z-index: -1;
    overflow-y: hidden;
}

.containu-texte {
    display: flex;
    flex-direction: column;
    padding-left: 30px;
    color: #fff;
    position: absolute;
    top: 38px;
    left: 0;
    z-index: 2;
}

.texte {
    display: flex;
    align-items: center;
    gap: 10px;
    position: absolute;
    top: 100px;
    left: 100px;
    z-index: 2;
}

.container-img {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

.texte h4 {
    color: #fff;
    font-size: 24px;
    margin-top: 5px;
    font-weight: 800;
}

.texte h2 {
    color: #fff;
    font-size: 25px;
    font-weight: 800;
}


.container-img img {
    width: 30%;
    height: 50vh;
    border-radius: 20px;
    position: absolute;
    left: 50px;
    bottom: 100px;
    z-index: 2;
}

.cartes {
    width: 60%;
    height: 41.8vh;
    padding: 20px;
    background-color: transparent;
    color: #fff;
    position: absolute;
    left: 350px;
    bottom: 140px;
    z-index: 2;
}



.cartes-membres {
    display: flex;
    align-items: center;
    gap: 20px;
    margin-top: -15px;
    margin-left: 12px;
    padding: 0;
}

.cartes-membres p {
    font-size: 20px;
    margin-top: 10px;
}

.cartes-membres h3 {
    font-size: 20px;
    font-weight: 800;
}

/* Media queries pour rendre les styles adaptatifs */

@media (max-width: 768px) {
    .container-img img {
        width: 40%;
        height: 30vh;
        position: relative;
        left: auto;
        bottom: auto;
    }



    .cartes {
        width: 70%;
        height: auto;
        position: relative;
        left: 55px;
        bottom: auto;
    }

    .logo-cartes img {
        width: 50%;
        position: relative;
        top: auto;
        right: auto;
    }
}

@media (max-width: 828px) {

    .container-img img {
        width: 35%;
        height: 40vh;
        position: absolute;
        left: 30px;
        bottom: 100px;
    }

    .texte {
        position: absolute;
        top: 80px;
        left: 60px;
    }

    .cartes {
        width: 60%;
        height: 45vh;
        position: absolute;
        left: 434px;
        bottom: 50px;
    }

    .container {
        margin-right: 10%;
        width: 300%;
    }

}
</style>

<body>
    <!-- ======= Header ======= -->
    <?php include ('./partials/header.php') ?>
    <!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php include ('./partials/sidebar.php') ?>
    <!-- End Sidebar-->

    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                    <li class="breadcrumb-item active">Carte membre</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="container">
            <div class="texte">
                <h2> N°:</h2>
                <h4>0ACE2024</h4>
            </div>
            <div class="container-img">
                <img src="../images/téléchargement (7).jpeg" alt=""
                    style=" background-repeat: no-repeat;  background-size: cover;  background-position: center;">
                <div class="cartes">
                    <div class="cartes-membres">
                        <h3>Nom:</h3>
                        <p>Inapogui</p>
                    </div>
                    <div class="cartes-membres">
                        <h3>Prenom:</h3>
                        <p>Zeze</p>
                    </div>
                    <div class="cartes-membres">
                        <h3>Fonction:</h3>
                        <p>Dev</p>
                    </div>
                    <div class="cartes-membres">
                        <h3>Telephone:</h3>
                        <p>0948958595</p>
                    </div>
                    <div class="cartes-membres">
                        <h3>Date d'expliration:</h3>
                        <p>34/56/2023</p>
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