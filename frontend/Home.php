<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require ('../backend/newmembers.php');
require ('../backend/allcity.php');
?>
<!DOCTYPE html>
<html lang="en">

<?php include ('./components/head.php') ?>

<body>
    <!-- ======= Header ======= -->
    <?php include ('./components/navigation.php') ?>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <?php include ('./components/hero.php') ?>
    <!-- End Hero Section -->

    <main id="main">
        <!-- ======= Get Started Section ======= -->
        <section id="get-started" class="get-started section-bg">
            <div class="container">
                <div class="row justify-content-between gy-4">
                    <div class="col-lg-4 d-flex align-items-center" data-aos="fade-up">
                        <div class="content">
                            <h3>Devenez Membre du Parti de la Jeunesse Dynamique</h3>
                            <p>
                                Le Parti de la Jeunesse Dynamique vous invite à devenir membre
                                et à jouer un rôle actif dans la construction d'un avenir
                                meilleur pour les jeunes et pour notre société dans son
                                ensemble.
                            </p>
                            <p>
                                En devenant membre, vous aurez l'opportunité de participer
                                activement à nos initiatives, de contribuer à l'élaboration de
                                nos politiques et de faire entendre votre voix dans le
                                processus politique.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-7" data-aos="fade">
                        <form method="post" class="formulaire" enctype="multipart/form-data">
                            <h3>Comment Devenir Membre?</h3>
                            <p>
                                Pour devenir membre du Parti de la Jeunesse Dynamique,
                                veuillez remplir le formulaire ci-dessous. Une fois votre
                                demande traitée, vous recevrez votre carte de membre
                                officielle ainsi que des informations sur la manière de vous
                                impliquer davantage dans notre parti.
                            </p>
                            <div class="row gy-3">
                                <?php if (isset($msgError)) { ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <?= $msgError ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php } ?>


                                <div class="col-md-6">
                                    <input type="text" name="lname" class="form-control" placeholder="Nom" />
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="fname" class="form-control" placeholder="Prénom" />
                                </div>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="adresse" placeholder="Adresse" />
                                </div>

                                <div class="col-md-6">
                                    <select name="city" class="form-control">
                                        <option>Choisir votre ville</option>
                                        <?php while ($city = $Citys->fetch()) { ?>
                                        <option value="<?= $city['city_name'] ?>">
                                            <?= $city['city_name'] ?>
                                        </option>
                                        <?php } ?>

                                    </select>

                                </div>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="phone" placeholder="Téléphone" />
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" name="email" placeholder="email" />
                                </div>

                                <div class="col-md-12">
                                    <input type="file" class="form-control" name="profil" placeholder="Profil" />
                                    <span style="font-size: 14px;">Lorem ipsum dolor sit amet.</span>
                                </div>

                                <?php if (isset($SuccessMsg)) { ?>
                                <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show"
                                    role="alert">
                                    <?= $SuccessMsg ?>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php } else { ?>
                                <div class="col-md-12 text-center">
                                    <button name="add" class="btn btn-primary" type="submit">Envoyer</button>
                                </div>
                                <?php } ?>

                            </div>
                        </form>
                    </div>
                    <!-- End Quote Form -->
                </div>
            </div>
        </section>
        <!-- End Get Started Section -->

        <!-- ======= Constructions Section ======= -->
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Notre Mission</h2>
                    <p>
                        Notre mission est de donner une voix forte aux jeunes dans le
                        paysage politique. Nous nous efforçons de créer un environnement
                        où chaque jeune peut réaliser son plein potentiel, où l'innovation
                        est encouragée et où les idées nouvelles sont mises en avant.
                        Notre objectif est de construire un avenir où la jeunesse est
                        pleinement intégrée dans la prise de décision et où ses
                        contributions sont valorisées.
                    </p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="
                        background-image: url(https://images.pexels.com/photos/7654425/pexels-photo-7654425.jpeg?auto=compress&cs=tinysrgb&w=600);
                      "></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Eligendi omnis sunt veritatis.</h4>
                                        <p>
                                            Fuga in dolorum et iste et culpa. Commodi possimus
                                            nesciunt modi voluptatem placeat deleniti adipisci. Cum
                                            delectus doloribus non veritatis. Officia temporibus
                                            illo magnam. Dolor eos et.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="
                        background-image: url(https://images.unsplash.com/photo-1688661617791-55b61b4c7ae3?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjR8fGtpbnNoYXNhfGVufDB8fDB8fHww);
                      "></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            Possimus ut sed velit assumenda
                                        </h4>
                                        <p>
                                            Sunt deserunt maiores voluptatem autem est rerum
                                            perferendis rerum blanditiis. Est laboriosam qui iste
                                            numquam laboriosam voluptatem architecto. Est laudantium
                                            sunt at quas aut hic. Eum dignissimos.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="
                        background-image: url(https://images.unsplash.com/photo-1541726260-e6b6a6a08b27?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjJ8fHBvbGl0aWNzfGVufDB8fDB8fHww);
                      "></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            Error beatae dolor inventore aut
                                        </h4>
                                        <p>
                                            Dicta porro nobis. Velit cum in. Nesciunt dignissimos
                                            enim molestiae facilis numquam quae quaerat ipsam omnis.
                                            Neque debitis ipsum at architecto officia laboriosam
                                            odit. Ut sunt temporibus nulla culpa.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="
                        background-image: url(assets/img/constructions-4.jpg);
                      "></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            Expedita voluptas ut ut nesciunt
                                        </h4>
                                        <p>
                                            Aut est quidem doloremque voluptatem magnam quis
                                            excepturi vero quia. Eum eos doloremque architecto illo
                                            at beatae dolore. Fugiat suscipit et sint ratione
                                            dolores. Aut aliquid ea dolores libero nobis.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Card Item -->
                </div>
            </div>
        </section>
        <!-- End Constructions Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Services</h2>
                    <p>
                        Voluptatem quibusdam ut ullam perferendis repellat non ut
                        consequuntur est eveniet deleniti fignissimos eos quam
                    </p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-mountain-city"></i>
                            </div>
                            <h3>Nesciunt Mete</h3>
                            <p>
                                Provident nihil minus qui consequatur non omnis maiores. Eos
                                accusantium minus dolores iure perferendis tempore et
                                consequatur.
                            </p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                            </div>
                            <h3>Eosle Commodi</h3>
                            <p>
                                Ut autem aut autem non a. Sint sint sit facilis nam iusto
                                sint. Libero corrupti neque eum hic non ut nesciunt dolorem.
                            </p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-compass-drafting"></i>
                            </div>
                            <h3>Ledo Markt</h3>
                            <p>
                                Ut excepturi voluptatem nisi sed. Quidem fuga consequatur.
                                Minus ea aut. Vel qui id voluptas adipisci eos earum corrupti.
                            </p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-trowel-bricks"></i>
                            </div>
                            <h3>Asperiores Commodit</h3>
                            <p>
                                Non et temporibus minus omnis sed dolor esse consequatur.
                                Cupiditate sed error ea fuga sit provident adipisci neque.
                            </p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-helmet-safety"></i>
                            </div>
                            <h3>Velit Doloremque</h3>
                            <p>
                                Cumque et suscipit saepe. Est maiores autem enim facilis ut
                                aut ipsam corporis aut. Sed animi at autem alias eius labore.
                            </p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item position-relative">
                            <div class="icon">
                                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
                            </div>
                            <h3>Dolori Architecto</h3>
                            <p>
                                Hic molestias ea quibusdam eos. Fugiat enim doloremque aut
                                neque non et debitis iure. Corrupti recusandae ducimus enim.
                            </p>
                            <a href="service-details.html" class="readmore stretched-link">Learn more <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    <!-- End Service Item -->
                </div>
            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="
                background-image: url(https://cdn.pixabay.com/photo/2021/01/29/09/29/bridge-5960361_640.jpg);
              " data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Enim quis est voluptatibus aliquid consequatur fugiat</h3>
                        <p>
                            Esse voluptas cumque vel exercitationem. Reiciendis est hic
                            accusamus. Non ipsam et sed minima temporibus laudantium. Soluta
                            voluptate sed facere corporis dolores excepturi
                        </p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-easel flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Lorem Ipsum</a></h4>
                                <p>
                                    Voluptatum deleniti atque corrupti quos dolores et quas
                                    molestias excepturi sint occaecati cupiditate non provident
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-patch-check flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Nemo Enim</a></h4>
                                <p>
                                    At vero eos et accusamus et iusto odio dignissimos ducimus
                                    qui blanditiis praesentium voluptatum deleniti atque
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Dine Pad</a></h4>
                                <p>
                                    Explicabo est voluptatum asperiores consequatur magnam. Et
                                    veritatis odit. Sunt aut deserunt minus aut eligendi omnis
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-brightness-high flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Tride clov</a></h4>
                                <p>
                                    Est voluptatem labore deleniti quis a delectus et. Saepe
                                    dolorem libero sit non aspernatur odit amet. Et eligendi
                                </p>
                            </div>
                        </div>
                        <!-- End Icon Box -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End Alt Services Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="recent-blog-posts" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Article à la une</h2>
                    <p>
                        In commodi voluptatem excepturi quaerat nihil error autem
                        voluptate ut et officia consequuntu
                    </p>
                </div>

                <div class="row gy-5">
                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="post-item position-relative h-100">
                            <div class="post-img position-relative overflow-hidden">
                                <img src="https://images.unsplash.com/photo-1676293998542-9badf2e46771?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGtpbnNoYXNhfGVufDB8fDB8fHww"
                                    class="img-fluid" alt="" />
                                <span class="post-date">December 12</span>
                            </div>

                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">
                                    Eum ad dolor et. Autem aut fugiat debitis
                                </h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i>
                                        <span class="ps-2">Julia Parker</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i>
                                        <span class="ps-2">Politics</span>
                                    </div>
                                </div>

                                <hr />

                                <a href="blog-details.html" class="readmore stretched-link"><span>Lire plus</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End post item -->

                    <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="post-item position-relative h-100">
                            <div class="post-img position-relative overflow-hidden">
                                <img src="https://prod.cdn-medias.jeuneafrique.com/cdn-cgi/image/q=auto,f=auto,metadata=none,width=1280,height=720,fit=cover,gravity=0.5562x0.3819/https://prod.cdn-medias.jeuneafrique.com/medias/2024/01/23/jad20240123-conf-investiture-tshisekedi.jpg"
                                    class="img-fluid" alt="" />
                                <span class="post-date">July 17</span>
                            </div>

                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">
                                    Et repellendus molestiae qui est sed omnis
                                </h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i>
                                        <span class="ps-2">Mario Douglas</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i>
                                        <span class="ps-2">Sports</span>
                                    </div>
                                </div>

                                <hr />

                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End post item -->

                    <div class="col-xl-4 col-md-6">
                        <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">
                            <div class="post-img position-relative overflow-hidden">
                                <img src="https://cdn.pixabay.com/photo/2019/02/21/16/40/brexit-4011711_640.jpg"
                                    class="img-fluid" alt="" />
                                <span class="post-date">September 05</span>
                            </div>

                            <div class="post-content d-flex flex-column">
                                <h3 class="post-title">
                                    Quia assumenda est et veritati tirana ploder
                                </h3>

                                <div class="meta d-flex align-items-center">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-person"></i>
                                        <span class="ps-2">Lisa Hunter</span>
                                    </div>
                                    <span class="px-3 text-black-50">/</span>
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-folder2"></i>
                                        <span class="ps-2">Economics</span>
                                    </div>
                                </div>

                                <hr />

                                <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i
                                        class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End post item -->
                </div>
            </div>
        </section>
        <!-- End Recent Blog Posts Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php include ('./components/footer.php') ?>
    <!-- End Footer -->

</body>

</html>