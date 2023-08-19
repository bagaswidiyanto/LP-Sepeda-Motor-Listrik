<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title><?= $website->metaTitle; ?></title>
    <meta name="keywords" content="<?= $website->metaKeywords; ?>">
    <meta name="description" content="<?= $website->metaDescription; ?>">

    <meta name="format-detection" content="telephone=no">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $website->metaTitle; ?>" />
    <meta property="og:description" content="<?= $website->metaDescription; ?>" />
    <meta property="og:url" content="https://sepedamotorlistrik.net" />
    <meta property="og:image" content="<?= base_url(); ?>assets/img/og-image.png" />

    <!-- Favicon -->
    <link rel="icon" href="<?= base_url(); ?>assets/img/icon-url.png" sizes="32x32" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,900|Ubuntu:400,500,700"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/lib/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/swiper.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/css/whatsapp_chat.css" rel="stylesheet" />
</head>

<body class="bg-white" data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="51">
    <!-- Navbar & Hero Start -->
    <header class="container-fluid position-relative p-0" id="home">
        <nav class="navbar navbar-expand-lg navbar-light px-0 px-lg-5 py-1 py-lg-4">
            <div class="container">

                <a href="<?= base_url(); ?>" class="navbar-brand d-block d-lg-none">
                    <!-- <h1 class="m-0">FitApp</h1> -->
                    <img class="img-fluid" src="https://admin103.sepedamotorlistrik.net/upload/<?= $website->image2; ?>"
                        alt="Logo" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
                    <div class="navbar-nav py-0 mx-auto">
                        <a href="#home" class="nav-item nav-link click-scroll">Beranda</a>
                        <a href="#about" class="nav-item nav-link click-scroll">About Us</a>
                        <a href="#produk" class="nav-item nav-link click-scroll">Products</a>
                        <a href="#tukar" class="nav-item nav-link click-scroll">Tukar Motor</a>
                        <a href="#service-point" class="nav-item nav-link click-scroll">SERVICE & SHOWROOM</a>
                        <a href="#contact" class="nav-item nav-link click-scroll">Contact Us</a>
                    </div>
                    <!-- <div class="contact info ms-auto mt-3">
                        <a href="" class="bg-blue px-4 py-3 rounded-10 fw-bold">Contact Us</a>
                    </div> -->
                </div>
            </div>
        </nav>

    </header>