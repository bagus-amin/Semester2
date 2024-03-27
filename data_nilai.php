<?php
    include_once "header.php";
?>
<div class="container">
  <h2>Data Mahasiswa</h2>
  <table class="table">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rerata</th>
              <th>Grade</th>
              <th>Predikat</th>
          </tr>
      </thead>

<?php
	require_once 'libfungsi.php'; // Menggunakan require_once untuk mengimpor file libfungsi.php
    if (isset($_POST['submit'])) {
    // Mengambil nilai dari form
    $nama = $_POST['nama'];
    $matkul = $_POST["matkul"];
    $uts = $_POST["uts"];
    $uas = $_POST["uas"];
    $tugas = $_POST["tugas"];

    // Menghitung nilai rata-rata dan grade menggunakan fungsi-fungsi yang telah didefinisikan
    $rerata = ($uts + $uas + $tugas) / 3;
    $grade = grde($rerata);

    // Mendapatkan predikat dan status kelulusan menggunakan fungsi-fungsi yang telah didefinisikan
    $predikat = predikat($grade);
    $lulus = kelulusan($rerata);
?>

    <tr> 
        <td>1</td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $matkul; ?></td>
        <td><?php echo $uts; ?></td>
        <td><?php echo $uas; ?></td>
        <td><?php echo $tugas; ?></td>
        <td><?php echo number_format($rerata, 2); ?></td>
        <td><?php echo $grade; ?></td>
        <td><?php echo $predikat; ?></td>
    </tr>
<?php 
    } else {
    // Jika form belum disubmit, tampilkan pesan bahwa form belum disubmit
    echo "<tr><td colspan='10'>Form belum disubmit</td></tr>";
}
?>
      </tbody>
  </table>
</div>