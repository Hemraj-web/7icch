<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="icon" href="images/fevicon/fev-114.ico" type="image/x-icon"/>
    <link rel="shortcut icon" href="images/fevicon/fev-114.ico" type="image/x-icon"/>

    <link rel="apple-touch-icon" sizes="57x57" href="images/fevicon/fev-57.png">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="images/fevicon/fev-57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/fevicon/fev-72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/fevicon/fev-114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/fevicon/fev-120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/fevicon/fev-144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/fevicon/fev-152.png">
    <meta name="application-name" content="7ICCH">
    <meta name="msapplication-TileImage" content="images/fevicon/fev-144.png">
    <meta name="msapplication-TileColor" content="#2A2A2A">
    <!-- font links    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title> <?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>

    <?php wp_head(); ?>
</head>
<body>
<!-- ========== Header section Open  ====================== -->
<header class="topBar">
<!--    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top ">-->
<!--        <div class="container-fluid">-->
<!--            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="" class="img-fluid"></a>-->
<!--            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">-->
<!--                <span class="navbar-toggler-icon"></span>-->
<!--            </button>-->
<!--            <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
<!--                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">-->
<!--                    <li class="nav-item dropdown ">-->
<!--                        <a class="nav-link dropdown-toggle active"  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                            About-->
<!--                        </a>-->
<!--                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                            <li><a class="dropdown-item" href="welcome-message.php">7ICCH Presentation</a></li>-->
<!--                            <li><a class="dropdown-item" href="important-dates.php">Important Dates</a></li>-->
<!--                            <li><a class="dropdown-item" href="committees.php">Committees</a></li>-->
<!--                            <li><a class="dropdown-item" href="venue.php">Venue</a></li>-->
<!--                            <li><a class="dropdown-item" href="topics.php">Topics</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                    <li class="nav-item dropdown ">-->
<!--                        <a class="nav-link dropdown-toggle "  href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                            registration-->
<!--                        </a>-->
<!--                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                            <li><a class="dropdown-item" href="registration-fees.php">Registration Fees</a></li>-->
<!--                            <li><a class="dropdown-item" href="online-registration.php">Online Registration</a></li>-->
<!--                            <li><a class="dropdown-item" href="paper-submission.php">Paper Submission</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!---->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="programme.php"> programme</a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="media.php"> media  </a>-->
<!--                    </li>-->
<!--                    <li class="nav-item">-->
<!--                        <a class="nav-link" href="contact.php"> contact</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!---->
<!---->
<!--            </div>-->
<!--        </div>-->
<!--    </nav>-->

    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-menu">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main-menu',
                    'container' => false,
                    'menu_class' => '',
                    'fallback_cb' => '__return_false',
                    'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto mb-2 mb-lg-0 %2$s">%3$s</ul>',
                    'depth' => 2,
                    'walker' => new bootstrap_5_wp_nav_menu_walker()
                ));
                ?>
            </div>
        </div>
    </nav>

</header>
<!-- ========== Header section Close   ====================== -->