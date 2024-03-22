<?php
include 'atas.php';
?>
 <div class="content">
      
               
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
 $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
 $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
 $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
 $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

 $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

 ?>
 <h3 >Array Week 1 Daftar Nilai Mahasiswa</h3>
 <table border="1" width="100%">
 <thead>
 <tr>
 <th>No</th><th>NIM</th><th>UTS</th>
 <th>UAS</th><th>Tugas</th><th>Nilai Akhir</th>
 </tr>
 </thead>
 <tbody>
 <?php
 $nomor = 1;
 foreach($ar_nilai as $ns){
 echo '<tr><td>'.$nomor.'</td>';
 echo '<td>'.$ns['nim'].'</td>';
 echo '<td>'.$ns['uts'].'</td>';
 echo '<td>'.$ns['uas'].'</td>';
 echo '<td>'.$ns['tugas'].'</td>';
 $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
 echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
 echo '<tr/>';
 $nomor++;
 }
 ?>
 </tbody>
 </table>
 <?php
include 'bawah.php';
?>