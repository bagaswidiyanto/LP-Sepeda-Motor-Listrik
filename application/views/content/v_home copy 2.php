<section class="container-fluid hero-header" id="home">
    <div class="container">
        <div class="row justify-content-between mb-5">
            <div class="col-lg-4">
                <div class="logo-header">
                    <div class="img mb-4">
                        <img src="https://admin103.sepedamotorlistrik.net/upload/<?= $website->image2; ?>" class="img-fluid" alt="">
                    </div>
                    <div class="img">
                        <img src="https://admin103.sepedamotorlistrik.net/upload/<?= $website->image; ?>" class="img-fluid mb-3" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="brand-header">
                    <div class="row justify-content-end">
                        <?php foreach ($brand as $b) { ?>
                            <div class="col-lg-4">
                                <div class="brand">
                                    <img src="https://admin103.sepedamotorlistrik.net/upload/brand/<?= $b->image; ?>" title="<?= $b->nama; ?>" class="img-fluid" alt="">
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-lg-10">
                <div class="content-hero">
                    <div class="title d-flex justify-content-center">
                        <h2 class="fst-italic"><?= $homeweb->title; ?></h2>
                    </div>
                    <h2 class="txt-desc"><?= $homeweb->deskripsi; ?></h2>
                    <div class="slider-container">
                        <div class="swiper-container motor-slider">
                            <div class="swiper-wrapper">
                                <?php foreach ($slider_motor as $sm) { ?>
                                    <div class="swiper-slide">
                                        <div class="box">
                                            <a href="https://admin103.sepedamotorlistrik.net/upload/slider_motor/<?= $sm->image; ?>" data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                                <img src="https://admin103.sepedamotorlistrik.net/upload/slider_motor/<?= $sm->image; ?>" class="img-fluid" title="<?= $sm->title; ?>" alt="">
                                            </a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
                <div class="more text-center">
                    <div class="d-flex top-social align-items-center">
                        <?php foreach ($sosmed as $s) { ?>
                            <a class="btn btn-outline-light btn-social" href="<?= $s->link; ?>" title="<?= $s->name; ?>"><i class="<?= $s->icon; ?>"></i></a>
                        <?php } ?>
                    </div>
                    <a href="#about">
                        <p>Selengkapnya</p>
                        <div class="arrow">
                            <i class="fas fa-angle-double-down"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container-xxl about-us" id="about">
    <div class="container py-5">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <div class="slider-container">
                    <div class="swiper-container about-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($slider_about as $sa) { ?>
                                <div class="swiper-slide">
                                    <div class="box">
                                        <div class="d-flex">
                                            <p><?= $sa->nama; ?></p>
                                        </div>
                                        <div class="img text-center mt-4">
                                            <img src="https://admin103.sepedamotorlistrik.net/upload/slider_about/<?= $sa->image; ?>" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mt-4 mt-md-0">
                <div class="caption text-center text-md-end">
                    <div class="header-title">
                        <h4><?= $about->title; ?></h4>
                    </div>
                    <div class="logo mt-3">
                        <img src="assets/img/logo.png" class="img-fluid" alt="">
                    </div>
                    <div class="heading mt-5">
                        <h1><?= $about->caption; ?></h1>
                    </div>
                    <div class="card-text mt-5">
                        <?= $about->deskripsi; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid previlage">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-6">
                <div class="position-relative">
                    <div class="header-title">
                        <h4 class="text-white">KEUNGGULAN KAMI</h4>
                    </div>
                    <div class="heading my-4">
                        <h1 class="text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h1>
                    </div>
                    <div class="card-text text-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pharetra ac enim malesuada ultrices
                        neque vitae sociis eget posuere.
                    </div>
                </div>
                <div class="row position-relative gy-4 mt-5">
                    <?php foreach ($keunggulan as $k) { ?>
                        <div class="col-sm-6 col-lg-4">
                            <div class="box text-center">
                                <div class="icon">
                                    <img src="https://admin103.sepedamotorlistrik.net/upload/keunggulan/<?= $k->icon; ?>" class="img-fluid" alt="">
                                </div>
                                <p><?= $k->title; ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container-xxl product">
    <div class="container py-5">
        <div class="text-center">
            <div class="header-title">
                <h4>PRODUCTS</h4>
            </div>
            <div class="heading">
                <h2>Our Collection BEST PRODUCTS</h2>
            </div>
            <div class="tabs-product mt-5">
                <ul class="nav nav-tabs nav-type border-0 justify-content-center" id="myTab">
                    <?php foreach ($this->db->query("SELECT a.id, a.nama, b.id_kategori FROM tbl_master_kategori a LEFT JOIN tbl_produk b ON a.id=b.id_kategori GROUP BY b.id_kategori")->result() as $mk) { ?>
                        <?php if (isset($mk->id_kategori)) { ?>
                            <li class="nav-item">
                                <a href="#tab-produk-<?= $mk->id ?>" class="nav-link <?php
                                                                                        if ($mk->id != "") {
                                                                                            if ($mk->id == 1) {
                                                                                                echo "active";
                                                                                            }
                                                                                        } else {
                                                                                            if ($mk->id == "") {
                                                                                                echo "active";
                                                                                            }
                                                                                        }
                                                                                        ?>" data-bs-toggle="tab">
                                    <?= $mk->nama; ?>
                                </a>
                            </li>
                        <?php } ?>
                    <?php } ?>

                </ul>
                <!-- Tabs Tipe Kendaraan -->
                <div class="tab-content position-relative pt-5">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_produk GROUP BY id_kategori ORDER BY createDate ASC")->result() as $p) { ?>
                        <?php $slgId = $this->db->query("SELECT * FROM tbl_master_kategori WHERE id = '" . $p->id_kategori . "'")->row(); ?>
                        <div class="tab-pane fade <?php
                                                    if ($slgId->id != "") {
                                                        if ($slgId->id == 1) {
                                                            echo "show active";
                                                        }
                                                    } else {
                                                        if ($slgId->id == "") {
                                                            echo "show active";
                                                        }
                                                    }
                                                    ?>" id="tab-produk-<?= $slgId->id ?>">
                            <div class="row gy-4 gy-md-0">
                                <div class="col-md-5">
                                    <!-- Tab Warna -->
                                    <div class="tab-content position-relative pt-4">
                                        <?php foreach ($this->db->query("SELECT * FROM tbl_produk")->result() as $pWrarna) { ?>
                                            <?php $slgIdWarna = $this->db->query("SELECT * FROM tbl_master_warna WHERE id = '" . $pWrarna->id_warna . "'")->row(); ?>
                                            <div class="tab-pane fade <?php
                                                                        if ($slgIdWarna->id != "") {
                                                                            if ($slgIdWarna->id == $p->id_warna) {
                                                                                echo "show active";
                                                                            }
                                                                        } else {
                                                                            if ($slgIdWarna->id == "") {
                                                                                echo "show active";
                                                                            }
                                                                        }
                                                                        ?>" id="tab-color-<?= $slgIdWarna->id ?>">
                                                <!-- Tabs Produk Image -->
                                                <div class="produk-tab">
                                                    <div class="tab-content position-relative pt-4">
                                                        <?php foreach ($this->db->query("SELECT b.id, b.image, b.header,a.id_produk,a.id_warna, c.id as idWarna FROM tbl_produk a LEFT JOIN tbl_produk_detail b ON b.header=a.id_produk LEFT JOIN tbl_master_warna c ON a.id_warna=c.id WHERE a.id_produk = '" . $pWrarna->id_produk . "'")->result() as $pFullImage) { ?>
                                                            <div class="tab-pane fade <?php
                                                                                        if ($pFullImage->id != "") {
                                                                                            if ($pFullImage->id == 1) {
                                                                                                echo "show active";
                                                                                            }
                                                                                        } else {
                                                                                            if ($pFullImage->id == "") {
                                                                                                echo "show active";
                                                                                            }
                                                                                        }
                                                                                        ?>" id="tab-produk-image-<?= $pFullImage->idWarna ?>">
                                                                <div class="img">
                                                                    <img src="https://admin103.sepedamotorlistrik.net/upload/produk/<?= $pFullImage->image; ?>" class="img-fluid" alt="">
                                                                </div>
                                                            </div>
                                                        <?php } ?>
                                                    </div>

                                                    <ul class="nav nav-tabs border-0 justify-content-center mt-4" id="myTab">
                                                        <?php foreach ($this->db->query("SELECT b.id,b.image, b.header,a.id_produk,a.id_warna,c.id as idWarna FROM tbl_produk a LEFT JOIN tbl_produk_detail b ON b.header=a.id_produk LEFT JOIN tbl_master_warna c ON a.id_warna=c.id WHERE a.id_produk = '" . $pWrarna->id_produk . "'")->result() as $pImage) { ?>
                                                            <li class="nav-item">
                                                                <a href="#tab-produk-image-<?= $pImage->idWarna; ?>" class="nav-link <?php
                                                                                                                                        if ($pImage->id != "") {
                                                                                                                                            if ($pImage->id == 1) {
                                                                                                                                                echo "active";
                                                                                                                                            }
                                                                                                                                        } else {
                                                                                                                                            if ($pImage->id == "") {
                                                                                                                                                echo "active";
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                        ?>" data-bs-toggle="tab">
                                                                    <div class="img">
                                                                        <img src="https://admin103.sepedamotorlistrik.net/upload/produk/<?= $pImage->image; ?>" class="img-fluid" alt="">
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                </div>
                                                <!-- END Tabs Produk Image -->
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <ul class="nav nav-tabs nav-color border-0 mt-4 mt-md-5" id="myTab">
                                        <?php foreach ($this->db->query("SELECT a.id, a.nama, a.kode, b.id_warna FROM tbl_master_warna a LEFT JOIN tbl_produk b ON b.id_warna = a.id")->result() as $mw) { ?>
                                            <?php if (isset($mw->id_warna)) { ?>
                                                <style>
                                                    .color-<?php echo $mw->kode ?> {
                                                        background: #<?php echo $mw->kode ?>;
                                                    }
                                                </style>
                                                <li class="nav-item">
                                                    <a href="#tab-color-<?= $mw->id ?>" class="nav-link <?php
                                                                                                        if ($mw->id != "") {
                                                                                                            if ($mw->id == $p->id_warna) {
                                                                                                                echo "active";
                                                                                                            }
                                                                                                        } else {
                                                                                                            if ($mw->id == "") {
                                                                                                                echo "active";
                                                                                                            }
                                                                                                        }
                                                                                                        ?>" data-bs-toggle="tab">
                                                        <div class="box color-<?= $mw->kode ?>">

                                                        </div>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        <?php } ?>

                                    </ul>
                                    <!-- END Tab Warna -->
                                </div>
                                <div class="col-md-7">
                                    <div class="spesification text-start">
                                        <div class="name">
                                            <h3><?= $p->nama; ?></h3>
                                        </div>
                                        <div class="price my-4">
                                            <span>Harga</span>
                                            <p>Rp <?= number_format($p->harga, 0, ",", "."); ?></p>
                                        </div>
                                        <div class="breif-spec">
                                            <span>Spesifikasi Singkat</span>
                                            <div class="row mt-2">
                                                <div class="col-4">
                                                    <p><?= $p->riding_range; ?>km</p>
                                                    <span>Riding Range</span>
                                                </div>
                                                <div class="col-4">
                                                    <p><?= $p->max_speed; ?>km</p>
                                                    <span>Max Speed</span>
                                                </div>
                                                <div class="col-4">
                                                    <p><?= $p->baterai; ?></p>
                                                    <span>Battery</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="fitur mt-5">
                                            <div class="row gy-3">
                                                <div class="col-6 col-lg-4">
                                                    <div class="d-flex">
                                                        <div class="icon">
                                                            <img src="assets/img/product-f-1.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="desk">
                                                            <span>Kapasitas Baterai</span>
                                                            <p><?= $p->kapasitas_baterai; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4">
                                                    <div class="d-flex">
                                                        <div class="icon">
                                                            <img src="assets/img/product-f-2.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="desk">
                                                            <span>Ukuran Roda</span>
                                                            <p><?= $p->ukuran_roda; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4">
                                                    <div class="d-flex">
                                                        <div class="icon">
                                                            <img src="assets/img/product-f-3.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="desk">
                                                            <span>Sistem Baterai</span>
                                                            <p><?= $p->sistem_baterai; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4">
                                                    <div class="d-flex">
                                                        <div class="icon">
                                                            <img src="assets/img/product-f-4.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="desk">
                                                            <span>Tipe Motor Elektrik</span>
                                                            <p><?= $p->tipe_motor; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4">
                                                    <div class="d-flex">
                                                        <div class="icon">
                                                            <img src="assets/img/product-f-5.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="desk">
                                                            <span>Berat Kendaraan</span>
                                                            <p><?= $p->berat_kendaraan; ?> Kg</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4">
                                                    <div class="d-flex">
                                                        <div class="icon">
                                                            <img src="assets/img/product-f-6.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="desk">
                                                            <span>Display</span>
                                                            <p><?= $p->display; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4">
                                                    <div class="d-flex">
                                                        <div class="icon">
                                                            <img src="assets/img/product-f-7.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="desk">
                                                            <span>Tenaga Motor Elektrik</span>
                                                            <p><?= $p->tenaga_motor; ?>W</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4">
                                                    <div class="d-flex">
                                                        <div class="icon">
                                                            <img src="assets/img/product-f-8.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="desk">
                                                            <span>Kapasitas Berat</span>
                                                            <p><?= $p->kapasitas_berat; ?> Kg</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-6 col-lg-4">
                                                    <div class="d-flex">
                                                        <div class="icon">
                                                            <img src="assets/img/product-f-1.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="desk">
                                                            <span>Terkoneksi </span>
                                                            <p><?= $p->terkoneksi; ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="breif-desk mt-4">
                                            <div class="mb-3">
                                                <span>Deskripsi Singkat : </span>
                                            </div>
                                            <?= $p->deskripsi; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- END Tabs Tipe Kendaraan -->
            </div>
        </div>
    </div>
</section>



<section class="container-fluid position-relative advert">
    <div class="container py-5">
        <div class="row position-relative align-items-end">
            <div class="col-md-6 mb-5">
                <div class="header-title">
                    <h2><?= $tm->title; ?></h2>
                </div>
                <p>*Syarat dan ketentuan Berlaku</p>
                <div class="btn-wa mt-5">
                    <a href="" class="d-flex align-items-center">
                        <i class="fab fa-whatsapp me-3"></i>
                        <span>Selengkapnya</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img">
                    <img src="https://admin103.sepedamotorlistrik.net/upload/tukar_motor/<?= $tm->image; ?>" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid video">
    <div class="container py-5">

        <div class="tab-content position-relative pb-4">
            <?php foreach ($this->db->query("SELECT * FROM tbl_video")->result() as $v) { ?>
                <?php $slg  = $this->db->query("SELECT * FROM tbl_master_kategori WHERE id = '" . $v->id_kategori . "'")->row(); ?>
                <div class="tab-pane fade <?php
                                            if ($slg->id != "") {
                                                if ($slg->id == 1) {
                                                    echo "show active";
                                                }
                                            } else {
                                                if ($slg->id == "") {
                                                    echo "show active";
                                                }
                                            }
                                            ?>" id="tab-video-<?= $slg->id ?>">
                    <video controls>
                        <source src="https://admin103.sepedamotorlistrik.net/upload/video/<?= $v->videoPlay; ?>" type="video/mp4">
                    </video>
                </div>
            <?php } ?>
        </div>
        <ul class="nav nav-tabs border-0 justify-content-center" id="myTab">
            <?php foreach ($this->db->query("SELECT a.id,a.nama, b.id_kategori FROM tbl_master_kategori a LEFT JOIN tbl_video b ON a.id = b.id_kategori ORDER BY a.id ASC")->result() as $mk) { ?>
                <?php if (isset($mk->id_kategori)) { ?>
                    <li class="nav-item">
                        <a href="#tab-video-<?= $mk->id ?>" class="nav-link  <?php
                                                                                if ($mk->id != "") {
                                                                                    if ($mk->id == 1) {
                                                                                        echo "active";
                                                                                    }
                                                                                } else {
                                                                                    if ($mk->id == "") {
                                                                                        echo "active";
                                                                                    }
                                                                                }
                                                                                ?>" data-bs-toggle="tab">
                            <?= $mk->nama; ?>
                        </a>
                    </li>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
</section>

<section class="container-fluid mobile">
    <div class="container pb-5">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-7">
                <div class="heading-title">
                    <h3>Terhubung dengan <br> Mobile Aplikasi</h3>
                </div>
                <div class="heading my-4 my-lg-5">
                    <h2><?= $ma->caption; ?></h2>
                </div>
                <div class="card-text">
                    <?= $ma->deskripsi; ?>
                </div>
                <div class="order mt-4">
                    <a href="" class="bg-blue px-4 py-2 rounded-10 fs-14">
                        <span>ORDER NOW</span>
                        <i class="fas fa-arrow-right ms-3"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="owl-carousel screenshot-carousel">
                    <?php foreach ($slider_mobile as $sm) { ?>
                        <img class="img-fluid" src="https://admin103.sepedamotorlistrik.net/upload/slider_mobile/<?= $sm->image; ?>" alt="">
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid service-point">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="slick1">
                    <?php foreach ($service_point as $sp) { ?>
                        <a href="<?= $sp->link; ?>" target="_blank">
                            <div class="box position-relative">
                                <div class="ms-4">
                                    <div class="title d-flex align-items-center">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <p><?= $sp->nama; ?></p>
                                    </div>
                                    <div class="address my-3">
                                        <span><?= $sp->kota; ?></span>
                                        <p><?= $sp->alamat; ?></p>
                                    </div>
                                    <div class="contact">
                                        <p><?= $sp->open; ?></p>
                                        <?php
                                        $numberSp = $sp->telp;
                                        $n1Sp = substr($numberSp, 0, 4);
                                        $n2Sp = substr($numberSp, 4, 4);
                                        $n3Sp = substr($numberSp, 8, 4);
                                        $waSp = $n1Sp . '-' . $n2Sp . '-' . $n3Sp;
                                        ?>
                                        <p>Contact : <?= $waSp; ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    <?php } ?>
                </div>


            </div>
        </div>
    </div>
</section>

<section class="container-fluid mitra">
    <div class="container py-5">
        <div class="row justify-content-center position-relative">
            <div class="col-lg-7">
                <div class="caption text-center">
                    <h1 class="text-white">INGIN MENJADI MITRA KAMI? DAN MEMBUKA USAHA BARU?</h1>
                    <div class="mt-5">
                        <a href="" class="bg-blue px-4 py-3 fw-bold">DAFTAR JADI DEALER <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>