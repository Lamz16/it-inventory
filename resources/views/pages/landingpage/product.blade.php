<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Produk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <style>
        .sidebar {
            position: fixed;
            top: 56px;
            /* Adjust based on your navbar height */
            bottom: 0;
            left: 0;
            z-index: 1000;
            padding: 48px 0 0;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, 0.1);
        }

        .sidebar-sticky {
            position: -webkit-sticky;
            position: sticky;
            top: 56px;
            /* Adjust based on your navbar height */
            height: calc(100vh - 56px);
            padding-top: 0.5rem;
            overflow-x: hidden;
            overflow-y: auto;
        }

        .card-img-top {
            object-fit: cover;
            height: 200px;
            /* Adjust as needed */
        }
    </style>
</head>

<body>
    @include('pages.landingpage.includes.navbar')

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-th-large"></i>
                                Semua Kategori
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-tools"></i>
                                Sparepart Standar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-cogs"></i>
                                Sparepart Variasi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-motorcycle"></i>
                                Bodypart Motor
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-wrench"></i>
                                Aksesori Motor
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-oil-can"></i>
                                Pelumas Motor
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-tire"></i>
                                Ban/Velg Motor
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main Content -->
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
                <div
                    class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Produk</h1>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card">
                            <img src="produk1.jpg" class="card-img-top" alt="Produk 1" />
                            <div class="card-body">
                                <h5 class="card-title">Produk 1</h5>
                                <p class="card-text">Deskripsi singkat produk 1. Deskripsi singkat produk 1. Deskripsi
                                    singkat produk 1.</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card">
                            <img src="produk2.jpg" class="card-img-top" alt="Produk 2" />
                            <div class="card-body">
                                <h5 class="card-title">Produk 2</h5>
                                <p class="card-text">Deskripsi singkat produk 2. Deskripsi singkat produk 2. Deskripsi
                                    singkat produk 2.</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card">
                            <img src="produk3.jpg" class="card-img-top" alt="Produk 3" />
                            <div class="card-body">
                                <h5 class="card-title">Produk 3</h5>
                                <p class="card-text">Deskripsi singkat produk 3. Deskripsi singkat produk 3. Deskripsi
                                    singkat produk 3.</p>
                                <a href="#" class="btn btn-primary">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                    <!-- Tambahkan lebih banyak kartu produk sesuai kebutuhan -->
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
