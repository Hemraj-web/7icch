    <?php get_header(); ?>

    <!-- ========== Home Slider section Open  ====================== -->
<?php
 // hero banner section
$homeBanner= get_field('home_banner_section');
?>
    <section class="hero__slider" style="background-image: url(<?php echo $homeBanner ['banner_image']; ?>);">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="hero__content">
                        <h1> <?php echo $homeBanner ['banner_heading']; ?> </h1>
                        <p> <?php echo $homeBanner ['banner_sub_heading']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== Home Slider  section Close  ====================== -->
    <!-- ========== seventh-international section Open  ====================== -->

    <section class="seventh-international">
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-md-6 seventh__left">
                    <img src="<?php  the_field('home_history_image'); ?>" alt="" class="img-fluid">
                </div>
                <div class="col-md-6 seventh__right">
                    <h2> <?php the_field('home_history_title'); ?></h2>
                    <p><?php the_field('home_history_content'); ?></p>
                    <h5><?php the_field('home_thank_you_text'); ?></h5>
                    <a href="programme.php">final programme</a>
                    <p class="note__seventh">
                        <?php the_field('history_highlight_text'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== seventh-international  section Close  ====================== -->

    <!-- ========== Some Information section Open  ====================== -->
    <section class="home__info__box">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="info__box" style="background-image: url(images/home/about.png); background-repeat: no-repeat; background-size: cover;">
                        <div class="info__overlay">
                            <h2>About</h2>
                            <p>The 7ICCH – Seventh International Congress on Construction History will be broadcast live
                                from Lisbon, Portugal, on 12–16 July 2021. The five-day event aims to provide a
                                forum for researchers from all backgrounds to present the results of their work
                                in the sphere of Construction History.</p>
                            <a href="welcome-message.php">See more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info__box" style="background-image: url(images/home/registration.png); background-repeat: no-repeat; background-size: cover;">

                        <div class="info__overlay">
                            <h2>Registration</h2>
                            <p>The 7ICCH – Seventh International Congress on Construction History will be broadcast live
                                from Lisbon, Portugal, on 12–16 July 2021. The five-day event aims to provide a
                                forum for researchers from all backgrounds to present the results of their work
                                in the sphere of Construction History.</p>
                            <a href="registration-fees.php">See more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="info__box" style="background-image: url(images/home/programme.png); background-repeat: no-repeat; background-size: cover;">

                        <div class="info__overlay">
                            <h2>Programme</h2>
                            <p>The 7ICCH – Seventh International Congress on Construction History will be broadcast live
                                from Lisbon, Portugal, on 12–16 July 2021. The five-day event aims to provide a
                                forum for researchers from all backgrounds to present the results of their work
                                in the sphere of Construction History.</p>
                            <a href="programme.php">See more <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== Some Information section Close  ====================== -->


    <!-- ========== footer icon section Open  ====================== -->
    <section class="footer-icon">
        <div class="container">
            <div class="row icon__part__ft">
                <div class="col-md-7 ft__logo ">
                    <h2>organization</h2>
                    <div class="organization__logos">
                        <a href="http://www.spehc.pt/"><img src="images/footer-all-logos/organization/spehc.png"></a>
                        <a href="https://www.ulisboa.pt/"><img src="images/footer-all-logos/organization/faculdade.png"></a>
                        <a href="http://ciaud.fa.utl.pt/index.php/pt/"><img src="images/footer-all-logos/organization/ciaud.png"></a>
                        <a href="https://www.fcsh.unl.pt/"><img src="images/footer-all-logos/organization/nova.png"></a>
                        <a href="https://ihc.fcsh.unl.pt/"><img src="images/footer-all-logos/organization/ihc.png"></a>
                        <a href="https://www.fct.pt/"><img src="images/footer-all-logos/organization/fct.png"></a>
                        <a href="https://www.constructionhistorysociety.org/ifch-bibliography"><img src="images/footer-all-logos/organization/ifch.png"></a>
                    </div>
                </div>
                <div class="col-md-5 ft__logo ">
                    <h2>support</h2>
                    <div class="support__logos">
                        <a href="https://www.constructionhistory.co.uk/"><img src="images/footer-all-logos/support/chs.png"></a>
                        <a href="https://www.constructionhistorysociety.org/"><img src="images/footer-all-logos/support/chsa.png"></a>
                        <a href="http://www.sedhc.es/"><img src="images/footer-all-logos/support/sedhc.png"></a>
                        <a href="https://gesellschaft.bautechnikgeschichte.org/"><img src="images/footer-all-logos/support/bautechnikgeschichte.png"></a>
                        <a href="https://www.histoireconstruction.fr/"><img src="images/footer-all-logos/support/histoireconstruction.png"></a>
                    </div>
                </div>
            </div>
    </section>

    <!-- ========== Footer Icon section Close  ====================== -->

<?php get_footer(); ?>