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
           
           
<?php
// ambil value yg di input user dan simpan ke dalam variable
$proses = $_POST['proses'];
$nama = $_POST['nama'];
$matkul = $_POST['matkul'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];
$praktikum = $_POST['praktikum'];
$rata_rata = ($uts+$uas+$praktikum)/3;  //menghitung rata2
$keterangan = keterangan($rata_rata);
$grade = grade($rata_rata);
function keterangan ($rata_rata){
if ($rata_rata >= 55 && $rata_rata <=100) {
    return 'Anda Lulus';
}else {
    return 'Anda tidak Lulus';
}
}
function grade($rata_rata){
if ($rata_rata >= 85 && $rata_rata <=100) {
    return "A (Sangat baik)";
} elseif ($rata_rata >= 70 && $rata_rata <=84) {
    return "B (baik)";
} elseif ($rata_rata >= 56 && $rata_rata <=69) {
    return "C (Cukup)";
}  elseif ($rata_rata >= 36 && $rata_rata <=55) {
    return "D (Kurang)";
} elseif ($rata_rata >= 0 && $rata_rata <=35) {
    return "E (Sangat Kurang)";
}else{
    return "I (Tidak Nilai)";
}
}

// panggil variable yang memiliki value kolom, tampilkan menggunakan echo
echo "Proses : $proses";
echo "<br>Nama Lengkap : $nama";
echo "<br>Mata Kuliah : $matkul";
echo "<br>Nilai UTS : $uts";
echo "<br>Nilai UAS : $uas";
echo "<br>Nilai Praktikum : $praktikum";
echo "<br>Rata-Rata Nilai : $rata_rata";
echo "<br>keterangan : $keterangan";
echo "<br>Grade : $grade";
?>
<?php
include 'bawah.php';
?>