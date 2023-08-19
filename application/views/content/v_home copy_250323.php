<?php
$numberAPI = $website->phone;
$n1API = substr($numberAPI, 1);
$apiWa = $n1API;

$waLink = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20PapaMotor...%21%0ASaya%20tertarik%20dengan%20penawaran%20yang%20Anda%20berikan,%0Amohon%20informasi%20lebih%20lanjut.%20Terimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
?>
<section class="container-fluid hero-header" id="home">
    <div class="container">
        <div class="row justify-content-between mb-5">
            <div class="col-md-4">
                <div class="logo-header">
                    <div class="img mb-4  wow fadeInDown" data-wow-delay="0.3s">
                        <img src="https://admin103.sepedamotorlistrik.net/upload/<?= $website->image2; ?>"
                            class="img-fluid" alt="">
                    </div>
                    <div class="img  wow fadeInUp" data-wow-delay="0.3s">
                        <img src="https://admin103.sepedamotorlistrik.net/upload/<?= $website->image; ?>"
                            class="img-fluid mb-3" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="brand-header">
                    <div class="row justify-content-end">
                        <?php foreach ($brand as $b) { ?>
                        <div class="col-6 col-lg-4">
                            <div class="brand  wow zoomIn" data-wow-delay="0.3s">
                                <img src="https://admin103.sepedamotorlistrik.net/upload/brand/<?= $b->image; ?>"
                                    title="<?= $b->nama; ?>" class="img-fluid" alt="">
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
                    <div class="title d-flex justify-content-center wow fadeInUp" data-wow-delay="0.3s">
                        <h2 class="fst-italic"><?= $homeweb->title; ?></h2>
                    </div>
                    <h2 class="txt-desc  wow fadeInUp" data-wow-delay="0.3s"><?= $homeweb->deskripsi; ?></h2>
                    <div class="slider-container">
                        <div class="swiper-container motor-slider">
                            <div class="swiper-wrapper">
                                <?php foreach ($slider_motor as $sm) { ?>
                                <div class="swiper-slide">
                                    <div class="box wow fadeInUp" data-wow-delay="0.3s">
                                        <a href="https://admin103.sepedamotorlistrik.net/upload/slider_motor/<?= $sm->image; ?>"
                                            data-gallery="portfolioGallery" class="gallery-lightbox" title="">
                                            <img src="https://admin103.sepedamotorlistrik.net/upload/slider_motor/<?= $sm->image; ?>"
                                                class="img-fluid" title="<?= $sm->title; ?>" alt="">
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
                <div class="more text-center  wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex top-social align-items-center">
                        <?php foreach ($sosmed as $s) { ?>
                        <a class="btn btn-outline-light btn-social" href="<?= $s->link; ?>" title="<?= $s->name; ?>"><i
                                class="<?= $s->icon; ?>"></i></a>
                        <?php } ?>
                    </div>
                    <div class="nav-s">
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
    </div>
</section>

<section class="container-xxl about-us pb-5" id="about">
    <div class="container py-5">
        <div class="row justify-content-between">
            <div class="col-md-6">
                <div class="slider-container wow fadeInUp" data-wow-delay="0.3s">
                    <div class="swiper-container about-slider">
                        <div class="swiper-wrapper">
                            <?php foreach ($slider_about as $sa) { ?>
                            <div class="swiper-slide">
                                <div class="box">
                                    <div class="d-flex">
                                        <p><?= $sa->nama; ?></p>
                                    </div>
                                    <div class="img text-center mt-4">
                                        <img src="https://admin103.sepedamotorlistrik.net/upload/slider_about/<?= $sa->image; ?>"
                                            class="img-fluid" title="<?= $sa->nama; ?>" alt="">
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
                    <div class="header-title wow fadeInUp" data-wow-delay="0.3s">
                        <h4><?= $about->title; ?></h4>
                    </div>
                    <div class="heading mt-5 wow fadeInUp" data-wow-delay="0.3s">
                        <h2><?= $about->caption; ?></h2>
                    </div>
                    <div class="card-text mt-5 wow fadeInUp" data-wow-delay="0.3s">
                        <?= $about->deskripsi; ?>
                    </div>
                </div>
                <div class="btn-order mt-5 text-center text-md-end wow fadeInUp" data-wow-delay="0.3s">
                    <a href="<?= $waLink; ?>" target="_blank" class="bg-blue px-4 py-2 rounded-10">Contact Us</a>
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
                    <div class="header-title wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="text-white text-uppercase"><?= $dc1->title; ?></h4>
                    </div>
                    <div class="heading my-4 wow fadeInUp" data-wow-delay="0.3s">
                        <h1 class="text-white"><?= $dc1->caption; ?></h1>
                    </div>
                    <div class="card-text text-white wow fadeInUp" data-wow-delay="0.3s">
                        <?= $dc1->deskripsi; ?>
                    </div>
                </div>
                <div class="row position-relative gy-4 mt-5">
                    <?php foreach ($keunggulan as $k) { ?>
                    <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="box text-center">
                            <div class="icon">
                                <img src="https://admin103.sepedamotorlistrik.net/upload/keunggulan/<?= $k->icon; ?>"
                                    class="img-fluid" alt="">
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


<section class="container-xxl product" id="produk">
    <div class="container py-5">
        <div class="text-center">
            <div class="header-title wow fadeInUp" data-wow-delay="0.3s">
                <h4 class="text-uppercase"><?= $dc2->title; ?></h4>
            </div>
            <div class="heading wow fadeInUp" data-wow-delay="0.3s">
                <h2><?= $dc2->caption; ?></h2>
            </div>
            <div class="tabs-product mt-5 wow fadeInUp" data-wow-delay="0.3s">
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
                    <?php foreach ($this->db->query("SELECT b.id, b.nama, a.id_kategori FROM tbl_produk a LEFT JOIN tbl_master_kategori b ON a.id_kategori=b.id ")->result() as $kategoryCore) { ?>
                    <div class="tab-pane fade <?php
                                                    if ($kategoryCore->id != "") {
                                                        if ($kategoryCore->id == 1) {
                                                            echo "show active";
                                                        }
                                                    } else {
                                                        if ($kategoryCore->id == "") {
                                                            echo "show active";
                                                        }
                                                    }
                                                    ?>" id="tab-produk-<?= $kategoryCore->id ?>">
                        <?php foreach ($this->db->query("SELECT a.*,b.id as idKat, c.id_warna,c.id_produk_header, c.id_produk,d.slug as slugWarna FROM tbl_produk a LEFT JOIN tbl_master_kategori b ON a.id_kategori=b.id LEFT JOIN tbl_gambar_produk c ON c.id_produk=b.id LEFT JOIN tbl_master_warna d ON c.id_warna=d.id WHERE a.id_kategori = '" . $kategoryCore->id . "' ORDER BY c.id_warna ASC LIMIT 1")->result() as $produkCore) { ?>
                        <div class="row gy-4 gy-md-0">
                            <div class="col-md-5">
                                <!-- Tab Warna -->
                                <div class="tab-content position-relative pt-4">
                                    <?php foreach ($this->db->query("SELECT c.id, a.id_produk_header, a.id_produk FROM tbl_gambar_produk a LEFT JOIN tbl_master_kategori b ON a.id_produk = b.id LEFT JOIN tbl_master_warna c ON a.id_warna = c.id WHERE a.id_produk = '" . $produkCore->id_produk . "'")->result() as $warnaCore) { ?>
                                    <div class="tab-pane fade <?php
                                                                            if ($warnaCore->id != "") {
                                                                                if ($warnaCore->id == $produkCore->id_warna) {
                                                                                    echo "show active";
                                                                                }
                                                                            } else {
                                                                                if ($warnaCore->id == "") {
                                                                                    echo "show active";
                                                                                }
                                                                            }
                                                                            ?>"
                                        id="tab-color-<?= $warnaCore->id ?>-<?= $warnaCore->id_produk ?>">
                                        <!-- Tabs Produk Image -->
                                        <?php foreach ($this->db->query("SELECT a.*, b.id as idWarna FROM tbl_gambar_produk a LEFT JOIN tbl_master_warna b ON a.id_warna=b.id WHERE a.id_produk = '" . $produkCore->idKat . "' AND a.id_produk_header = '" . $produkCore->id_produk_header . "'")->result() as $pWrarna) { ?>
                                        <div class="produk-tab">
                                            <div class="tab-content position-relative pt-4">
                                                <?php foreach ($this->db->query("SELECT a.*,b.id_produk_header,b.id_warna, c.nama as namaProduk, d.nama as namaWarna FROM tbl_produk_detail a LEFT JOIN tbl_gambar_produk b ON a.header=b.id_produk_header LEFT JOIN tbl_master_kategori c ON b.id_produk=c.id LEFT JOIN tbl_master_warna d ON b.id_warna=d.id WHERE a.header = '" . $warnaCore->id_produk_header . "'")->result() as $pFullImage) { ?>
                                                <?php $imageDetailShow = $this->db->query("SELECT * FROM tbl_produk_detail WHERE header = '" . $pFullImage->id_produk_header . "' LIMIT 1")->row() ?>
                                                <div class="tab-pane fade <?php
                                                                                                if ($pFullImage->sort != "") {
                                                                                                    if ($pFullImage->sort == $imageDetailShow->sort) {
                                                                                                        echo "show active";
                                                                                                    }
                                                                                                } else {
                                                                                                    if ($pFullImage->sort == "") {
                                                                                                        echo "show active";
                                                                                                    }
                                                                                                }
                                                                                                ?>"
                                                    id="tab-produk-image-<?= $pFullImage->id ?>">



                                                    <div class="img"
                                                        title="<?= $pFullImage->namaProduk; ?> - Warna: <?= $pFullImage->namaWarna; ?>">
                                                        <a href="https://admin103.sepedamotorlistrik.net/upload/produk/<?= $pFullImage->image; ?>"
                                                            data-fancybox="<?= $pFullImage->header; ?>"
                                                            data-caption="<?= $pFullImage->namaProduk; ?>">
                                                            <img src="https://admin103.sepedamotorlistrik.net/upload/produk/<?= $pFullImage->image; ?>"
                                                                alt="" />
                                                        </a>
                                                    </div>


                                                    <!-- <div class="img">
                                                                            <img src="" class="img-fluid" alt="">
                                                                        </div> -->
                                                </div>
                                                <?php } ?>
                                            </div>

                                            <ul class="nav nav-tabs border-0 justify-content-center mt-4" id="myTab">
                                                <?php foreach ($this->db->query("SELECT a.*,b.id_produk_header,b.id_warna,c.nama as namaProduk ,d.nama as namaWarna FROM tbl_produk_detail a LEFT JOIN tbl_gambar_produk b ON a.header=b.id_produk_header LEFT JOIN tbl_master_kategori c ON b.id_produk=c.id LEFT JOIN tbl_master_warna d ON b.id_warna=d.id WHERE a.header = '" . $warnaCore->id_produk_header . "'")->result() as $pImage) { ?>
                                                <?php $imageDetail = $this->db->query("SELECT * FROM tbl_produk_detail WHERE header = '" . $pImage->id_produk_header . "' LIMIT 1")->row() ?>
                                                <li class="nav-item">
                                                    <a href="#tab-produk-image-<?= $pImage->id; ?>"
                                                        title="<?= $pImage->namaProduk; ?> - Warna: <?= $pImage->namaWarna; ?>"
                                                        class="nav-link <?php
                                                                                                                                                                                                                if ($pImage->sort != "") {
                                                                                                                                                                                                                    if ($pImage->sort == $imageDetail->sort) {
                                                                                                                                                                                                                        echo "active";
                                                                                                                                                                                                                    }
                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                    if ($pImage->sort == "") {
                                                                                                                                                                                                                        echo "active";
                                                                                                                                                                                                                    }
                                                                                                                                                                                                                }
                                                                                                                                                                                                                ?>"
                                                        data-bs-toggle="tab">
                                                        <div class="img">
                                                            <img src="https://admin103.sepedamotorlistrik.net/upload/produk/<?= $pImage->image; ?>"
                                                                class="img-fluid" alt="">
                                                        </div>
                                                    </a>
                                                </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <?php } ?>
                                        <!-- END Tabs Produk Image -->
                                    </div>
                                    <?php } ?>
                                </div>
                                <ul class="nav nav-tabs nav-color border-0 mt-4 mt-md-5" id="myTab">
                                    <?php foreach ($this->db->query("SELECT a.*,b.id_warna,b.id_produk FROM tbl_master_warna a LEFT JOIN tbl_gambar_produk b ON a.id = b.id_warna LEFT JOIN tbl_produk c ON b.id_produk=c.id LEFT JOIN tbl_master_kategori d ON c.id_kategori=d.id WHERE  b.id_produk = '" . $produkCore->idKat . "' ORDER BY a.id ASC")->result() as $mw) {
                                                $slugWarna = $mw->slug;
                                            ?>
                                    <?php if (isset($mw->id_warna)) { ?>
                                    <style>
                                    .color-<?php echo $mw->kode ?> {
                                        background: #<?php echo $mw->kode ?>;
                                    }
                                    </style>
                                    <li class="nav-item">
                                        <a href="#tab-color-<?= $mw->id ?>-<?= $mw->id_produk ?>"
                                            title="<?= $mw->nama; ?>"
                                            class="nav-link <?php
                                                                                                                                                            if ($mw->id != "") {
                                                                                                                                                                if ($mw->id == $produkCore->id_warna) {
                                                                                                                                                                    echo "active";
                                                                                                                                                                }
                                                                                                                                                            } else {
                                                                                                                                                                if ($mw->id == "") {
                                                                                                                                                                    echo "active";
                                                                                                                                                                }
                                                                                                                                                            }
                                                                                                                                                            ?>"
                                            data-bs-toggle="tab">
                                            <div class="box color-<?= $mw->kode ?>">

                                            </div>
                                        </a>
                                    </li>
                                    <?php } ?>
                                    <?php } ?>

                                    <?php foreach ($this->db->query("SELECT a.id_produk,a.video FROM tbl_video_produk a LEFT JOIN tbl_master_kategori b ON a.id_produk=b.id WHERE a.id_produk = '" . $produkCore->idKat . "' LIMIT 1")->result() as $vp) { ?>
                                    <div class="box-watch-video ms-4">
                                        <a href="https://admin103.sepedamotorlistrik.net/upload/video_produk/<?= $vp->video ?>"
                                            class="glightbox btn-watch-video w-100">
                                            <div class="img position-relative">
                                                <img class="img-fluid bgvideo"
                                                    src="<?= base_url(); ?>assets/img/icon-video.png" alt="">
                                            </div>
                                        </a>
                                    </div>
                                    <!-- END Tab Warna -->
                                    <?php } ?>
                                </ul>
                            </div>
                            <div class="col-md-7">
                                <div class="spesification text-start">
                                    <div class="name">
                                        <h3><?= $produkCore->nama; ?></h3>
                                    </div>
                                    <div class="price my-4">
                                        <span>Harga</span>
                                        <p>Rp <?= number_format($produkCore->harga, 0, ",", "."); ?></p>
                                        <small>*Harga On The Road / JABODETABEK</small>
                                    </div>
                                    <div class="breif-spec">
                                        <span>Spesifikasi Singkat</span>
                                        <div class="row mt-2">
                                            <div class="col-4">
                                                <p><?= $produkCore->riding_range; ?>km</p>
                                                <span>Riding Range</span>
                                            </div>
                                            <div class="col-4">
                                                <p><?= $produkCore->max_speed; ?>km</p>
                                                <span>Max Speed</span>
                                            </div>
                                            <div class="col-4">
                                                <p><?= $produkCore->baterai; ?></p>
                                                <span>Battery</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fitur mt-5">
                                        <div class="row gy-3">
                                            <div class="col-6 col-lg-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img src="<?= base_url(); ?>assets/img/product-f-1.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="desk">
                                                        <span>Kapasitas Baterai</span>
                                                        <p><?= $produkCore->kapasitas_baterai; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img src="<?= base_url(); ?>assets/img/product-f-2.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="desk">
                                                        <span>Ukuran Roda</span>
                                                        <p><?= $produkCore->ukuran_roda; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img src="<?= base_url(); ?>assets/img/product-f-3.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="desk">
                                                        <span>Sistem Baterai</span>
                                                        <p><?= $produkCore->sistem_baterai; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img src="<?= base_url(); ?>assets/img/product-f-4.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="desk">
                                                        <span>Tipe Motor Elektrik</span>
                                                        <p><?= $produkCore->tipe_motor; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img src="<?= base_url(); ?>assets/img/product-f-5.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="desk">
                                                        <span>Berat Kendaraan</span>
                                                        <p><?= $produkCore->berat_kendaraan; ?> Kg</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img src="<?= base_url(); ?>assets/img/product-f-6.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="desk">
                                                        <span>Display</span>
                                                        <p><?= $produkCore->display; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img src="<?= base_url(); ?>assets/img/product-f-7.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="desk">
                                                        <span>Tenaga Motor Elektrik</span>
                                                        <p><?= $produkCore->tenaga_motor; ?>W</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img src="<?= base_url(); ?>assets/img/product-f-8.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="desk">
                                                        <span>Kapasitas Berat</span>
                                                        <p><?= $produkCore->kapasitas_berat; ?> Kg</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6 col-lg-4">
                                                <div class="d-flex">
                                                    <div class="icon">
                                                        <img src="<?= base_url(); ?>assets/img/product-f-1.png"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                    <div class="desk">
                                                        <span>Terkoneksi </span>
                                                        <p><?= $produkCore->terkoneksi; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="breif-desk mt-4">
                                        <div class="mb-3">
                                            <span>Deskripsi Singkat : </span>
                                        </div>
                                        <?= $produkCore->deskripsi; ?>
                                    </div>
                                    <?php
                                            $waLinkProduk = "https://api.whatsapp.com/send?phone=62$apiWa&text=Hallo%20PapaMotor...%21%0ASaya%20tertarik%20dengan%20produk%20$produkCore->slug,%0Amohon%20informasi%20lebih%20lanjut.%20Terimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
                                            ?>
                                    <div class="btn-order mt-5">
                                        <a href="<?= $waLinkProduk; ?>" target="_blank" class="bg-blue py-2 px-4">ORDER
                                            NOW <i class="fas fa-arrow-right ms-3 fs-14"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div>
                <!-- END Tabs Tipe Kendaraan -->
            </div>
        </div>
    </div>
</section>




<section class="container-fluid position-relative advert" id="tukar">
    <div class="container py-5">
        <div class="row position-relative align-items-end wow fadeInUp" data-wow-delay="0.3s">
            <div class="col-md-6 mb-5">
                <div class="header-title">
                    <h2><?= $tm->title; ?></h2>
                </div>
                <p>*Syarat dan ketentuan Berlaku</p>
                <div class="btn-order mt-5">
                    <?php
                    $numberAPITukar = $website->phone;
                    $n1APITukar = substr($numberAPITukar, 1);
                    $apiWaTukar = $n1APITukar;

                    $waLinkTukar = "https://api.whatsapp.com/send?phone=62$apiWaTukar&text=Hallo%20Papa%20Motor,%0ASaya%20berminat%20menukar%20kendaraan%20saya%20dengan%20data%20sebagai%20berikut:%0A%0ABrand%20:%0AModel%20:%0ATipe%20:%0ATahun%20:%0AKM/Jarak%20Tempuh%20:%0ANomor%20Polisi%20:%0A%0ATerlampir%20foto%20kendaraan.%20Mohon%20informasi%20selanjutnya.%0ATerimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
                    ?>
                    <a href="<?= $waLinkTukar; ?>" target="_blank" class="d-flex align-items-center">
                        <i class="fab fa-whatsapp me-3"></i>
                        <span>Selengkapnya</span>
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img">
                    <img src="https://admin103.sepedamotorlistrik.net/upload/tukar_motor/<?= $tm->image; ?>"
                        class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid video">
    <div class="container py-5">

        <div class="tab-content position-relative pb-4 wow fadeInUp" data-wow-delay="0.3s">
            <?php foreach ($this->db->query("SELECT * FROM tbl_video GROUP BY id_kategori")->result() as $v) { ?>
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
                <video controls id="video-tab-<?= $slg->id ?>">
                    <source src="<?= $vid; ?>" type="video/mp4">
                </video>
            </div>
            <?php } ?>
        </div>
        <ul class="nav nav-tabs border-0 justify-content-center wow fadeInUp" data-wow-delay="0.3s" id="myTab">
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
                <div class="heading-title wow fadeInUp" data-wow-delay="0.3s">
                    <h3>Terhubung dengan <br> Mobile Aplikasi</h3>
                </div>
                <div class="heading my-4 my-lg-5 wow fadeInUp" data-wow-delay="0.3s">
                    <h2><?= $ma->caption; ?></h2>
                </div>
                <div class="card-text wow fadeInUp" data-wow-delay="0.3s">
                    <?= $ma->deskripsi; ?>
                </div>
                <div class="btn-order mt-4 mb-5 wow fadeInUp" data-wow-delay="0.3s">
                    <a href="<?= $waLink; ?>" target="_blank" class="bg-blue px-4 py-2 rounded-10 fs-14">
                        <span>ORDER NOW</span>
                        <i class="fas fa-arrow-right ms-3"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="owl-carousel screenshot-carousel">
                    <?php foreach ($slider_mobile as $sm) { ?>
                    <img class="img-fluid"
                        src="https://admin103.sepedamotorlistrik.net/upload/slider_mobile/<?= $sm->image; ?>" alt="">
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid service-point" id="service-point">
    <div class="container py-5">
        <div class="heading mb-3 wow fadeInUp" data-wow-delay="0.3s">
            <h2 class="fw-normal">Service Point Resmi</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">

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
                    <h1 class="text-white wow fadeInUp" data-wow-delay="0.3s"><?= $dc3->title; ?></h1>
                    <div class="btn-order mt-5 wow fadeInUp" data-wow-delay="0.3s">
                        <?php
                        $numberAPIDealer = $website->phone;
                        $n1APIDealer = substr($numberAPIDealer, 1);
                        $apiWaDealer = $n1APIDealer;

                        $waLinkDealer = "https://api.whatsapp.com/send?phone=62$apiWaDealer&text=Hallo%20Papa%20Motor,%0ASaya%20tertarik%20menjadi%20Dealer.%0AMohon%20informasi%20lebih%20lanjut.%20Terimakasih%20%E2%98%BA%EF%B8%8F%F0%9F%99%8F";
                        ?>
                        <a href="<?= $waLinkDealer; ?>" target="_blank" class="bg-blue px-4 py-3 fw-bold">DAFTAR JADI
                            DEALER
                            <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>