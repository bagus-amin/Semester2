<?php
include 'atas.php';
?>
<nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="atas.php" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/download.jpeg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Tante Evelyn</h6>
                                        <small>kmu mau tante beliin motor ga?? buat kita jalan"</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/testimonial-1.jpg." alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Tante sarah</h6>
                                        <small>Aku lagi di dealer mobil nih mau mobil apa syg??</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            
                            <hr class="dropdown-divider">
                          
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                       
                        
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/IMG_20230124_075252_704.jpg" alt="" style="width: 35px; height: 35px;">
                            <span class="d-none d-lg-inline-flex">Bam</span>
                        </a>
                       
                    </div>
                </div>
            </nav>
            <div class="row mb-4">
                    <div class="col-sm- col-xl-19">
                        <div class="bg-secondary rounded h-100 p-4">
<?php
// tangkap input form
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

// array harga produk

$harga = [
    'TV' => 4200000,
    'Kulkas' => 3100000,
    'Mesin Cuci' => 3000000
];

// hitung total harga (jumlah * harga produk)
$total = $jumlah * $harga[$produk];

// format rupiah
$total = number_format($total);

echo "Nama Customer: $customer";
echo "<br> Produk: $produk";
echo "<br> Jumlah Beli: $jumlah";
echo "<br> Total Belanja: Rp $total";
?>
<?php
include 'bawah.php';
?>