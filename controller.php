<?php

include('./koneksi.php');

$nama = $_POST['nama'];
$keselarasan = $_POST['keselarasan'];
$lamawaktu = $_POST['lamawaktu'];
$tingkatposisi = $_POST['tingkatposisi'];
$pendapatan = $_POST['pendapatan'];
$hasil = "";

if ($tingkatposisi == "Lebih Tinggi") {
    $hasil = "Cukup Berkompeten";
}else if($tingkatposisi == "Lebih Rendah") {
    if($pendapatan == "Diatas UMR") {
        $hasil = "Cukup Berkompeten";
    }else if($pendapatan == "UMR") {
        $hasil = "Cukup Berkompeten";
    }else{
        $hasil = "Kurang Berkompeten";
    }
}else{
    if($lamawaktu == "Cepat") {
        $hasil = "Berkompeten";
    }else if($lamawaktu == "Cukup Lama") {
        $hasil = "Cukup Berkompeten";
    }else{
        $hasil = "Cukup Berkompeten";
    }
}

$sql = "INSERT INTO tabelprediksi (nama, keselarasan, lamawaktu, tingkatposisi, pendapatan, hasil) VALUES ('$nama','$keselarasan','$lamawaktu','$tingkatposisi','$pendapatan','$hasil')";

if ($conn->query($sql) === TRUE) {
  echo "
  <script type='text/javascript'>location.href = 'data.php';</script>
  ";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}