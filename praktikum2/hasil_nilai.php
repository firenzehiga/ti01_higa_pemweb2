<?php
$nama_siswa  = $_GET['nama'];
$mata_kuliah = $_GET['matkul'];
$nilai_uts   = $_GET['nilai_uts'];
$nilai_uas   = $_GET['nilai_uas'];
$nilai_tugas = $_GET['nilai_tugas'];

// Total Nilai

$total = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;
$grade;
$predikat;

// Buat perhitungan IF untuk mencari Grade

if($total >= 85) {
    $grade = "A";
} 
elseif($total >=70) {
    $grade = "B";
}
elseif($total >=56) {
    $grade = "C";
}
elseif($total >=36) {
    $grade = "D";
}
else{
    $grade = "E";
}

// Buat perhitungan  Switch Case untuk mencari Predikat

switch ($grade) {
    case "A":
        $predikat = "Sangat Memuaskan";
        break;
    case "B":
        $predikat = "Memuaskan";
        break;
    case "C":
        $predikat = "Cukup";
        break;
    case "D":
        $predikat = "Kurang";
        break;
    default:
    $predikat = "Tidak Ada";
    break;
}

// Buat Status

    if($total >=70){
        $status = "LULUS";
    }else{
        $status = "GAGAL"
    }

// Cetak Hasil;
echo "Nama: $nama_siswa <br>"; 
echo 'Matkul:' . $mata_kuliah .'<br>'; 
echo 'Nilai UTS:' . $nilai_uts .'<br>'; 
echo 'Nilai UAS:' . $nilai_uas .'<br>'; 
echo 'Nilai Tugas:' . $nilai_tugas .'<br>'; 
echo 'Grade:' . $grade .'<br>';
echo 'Predikat:' . $predikat .'<br>';
echo 'Status:' . $status;



?>