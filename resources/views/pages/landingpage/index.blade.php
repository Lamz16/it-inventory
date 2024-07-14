<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website Penjualan Sparepart Sepeda Motor</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        /* Gaya khusus untuk kategori produk agar responsif */
        .category-card {
            margin-bottom: 15px;
        }

        /* Gaya khusus untuk produk terbaru dan promo agar lebih rapi */
        .product-card,
        .promo-card {
            margin-bottom: 20px;
        }

        /* Gaya untuk footer */
        .footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
        }

        .footer a {
            color: white;
            margin-right: 15px;
        }

        .icon-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: rgba(255, 255, 255, 0.8);
            font-size: 2rem;
        }

        .card-img-overlay {
            position: absolute;
            top: 0;
            bottom: 0;
            right: 0;
            left: 0;
            background: rgba(0, 0, 0, 0.5);
            opacity: 0;
            transition: opacity 0.25s;
        }

        .card:hover .card-img-overlay {
            opacity: 1;
        }

        /* Mengatur gambar agar sesuai dengan ukuran div dan ter-crop */
        .card-img-top {
            object-fit: cover;
            height: 200px;
            /* Atur sesuai dengan kebutuhan Anda */
        }
    </style>
</head>

<body>
    @include('pages.landingpage.includes.navbar')

    <div class="container mt-4">
        <!-- Carousel -->
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="honda.jpg" style="height: 400px; object-fit: cover" class="d-block w-100"
                        alt="Slide 1" />
                </div>
                <div class="carousel-item">
                    <img src="yamaha.jpg" style="height: 400px; object-fit: cover" class="d-block w-100"
                        alt="Slide 2" />
                </div>
                <div class="carousel-item">
                    <img src="suzuki.jpg" style="height: 400px; object-fit: cover" class="d-block w-100"
                        alt="Slide 3" />
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Kategori Produk -->
        <h2 id="kategori" class="mt-4">Kategori Produk</h2>
        <div class="row">
            <div class="col-md-2 col-sm-4 category-card">
                <div class="card">
                    <img src="conrod1.jpg" class="card-img-top" alt="Sparepart Standar" />
                    <div class="card-img-overlay">
                        <i class="fas fa-tools icon-overlay"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Sparepart Standar</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 category-card">
                <div class="card">
                    <img src="gambar_standar.jpg" class="card-img-top" alt="Sparepart Standar" />
                    <div class="card-img-overlay">
                        <i class="fas fa-cogs icon-overlay"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Sparepart Variasi</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 category-card">
                <div class="card">
                    <img src="gambar_standar.jpg" class="card-img-top" alt="Sparepart Standar" />
                    <div class="card-img-overlay">
                        <i class="fas fa-motorcycle icon-overlay"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Bodypart Motor</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 category-card">
                <div class="card">
                    <img src="gambar_standar.jpg" class="card-img-top" alt="Sparepart Standar" />
                    <div class="card-img-overlay">
                        <i class="fas fa-wrench icon-overlay"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Aksesori Motor</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 category-card">
                <div class="card">
                    <img src="gambar_standar.jpg" class="card-img-top" alt="Sparepart Standar" />
                    <div class="card-img-overlay">
                        <i class="fas fa-oil-can icon-overlay"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pelumas Motor</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4 category-card">
                <div class="card">
                    <img src="gambar_standar.jpg" class="card-img-top" alt="Sparepart Standar" />
                    <div class="card-img-overlay">
                        <i class="fas fa-tire icon-overlay"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Ban/Velg Motor</h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pelayanan -->
        <h2 class="mt-4" id="pelayanan">Pelayanan</h2>
        <div class="row">
            <div class="col-md-4 col-sm-6 promo-card">
                <div class="card">
                    <img src="promo1.jpg" class="card-img-top" alt="Kolter" />
                    <div class="card-img-overlay">
                        <i class="fas fa-wrench icon-overlay"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Kolter</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 promo-card">
                <div class="card">
                    <img src="promo1.jpg" class="card-img-top" alt="Service Motor" />
                    <div class="card-img-overlay">
                        <i class="fas fa-tools icon-overlay"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Service Motor</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 promo-card">
                <div class="card">
                    <img src="promo1.jpg" class="card-img-top" alt="Tyre Changer" />
                    <div class="card-img-overlay">
                        <i class="fas fa-exchange-alt icon-overlay"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Tyre Changer</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 promo-card">
                <div class="card">
                    <img src="promo1.jpg" class="card-img-top" alt="Teknik Bubut" />
                    <div class="card-img-overlay">
                        <i class="fas fa-cogs icon-overlay"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Teknik Bubut</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 promo-card">
                <div class="card">
                    <img src="promo1.jpg" class="card-img-top" alt="Las" />
                    <div class="card-img-overlay">
                        <i class="fas fa-welding-torch icon-overlay"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Las</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 promo-card">
                <div class="card">
                    <img src="promo1.jpg" class="card-img-top" alt="Turun Mesin" />
                    <div class="card-img-overlay">
                        <i class="fas fa-engine icon-overlay"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Turun Mesin (overhaul)</h5>
                    </div>
                </div>
            </div>
            <!-- Ulangi div ini untuk promo-promo lainnya -->
        </div>

        <!-- Partner -->
        <h2 class="mt-4">Partner</h2>
        <div class="row">
            <div class="col-md-2 col-sm-4">
                <div class="card">
                    <img src="partner1.jpg" class="card-img-top" alt="Partner 1" />
                    <div class="card-img-overlay">
                        <i class="fas fa-handshake icon-overlay"></i>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-4">
                <div class="card">
                    <img src="partner2.jpg" class="card-img-top" alt="Partner 2" />
                    <div class="card-img-overlay">
                        <i class="fas fa-handshake icon-overlay"></i>
                    </div>
                </div>
            </div>
            <!-- Ulangi div ini untuk partner-partner lainnya -->
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer mt-4">
        <div class="container text-center">
            <p>Alamat: Jl. Contoh Alamat No. 123, Kota, Negara</p>
            <a href="https://shopee.co.id" target="_blank">Shopee</a>
            <a href="https://instagram.com" target="_blank">Instagram</a>
            <a href="https://tiktok.com" target="_blank">TikTok</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>