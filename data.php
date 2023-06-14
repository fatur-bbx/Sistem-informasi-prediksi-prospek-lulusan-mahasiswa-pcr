<?php
include('./koneksi.php');
$sql = "SELECT * FROM tabelprediksi";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Responden</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-3">
    <h1 class="text-center">Data Responden</h1>
    <a href="index.php" class="btn btn-secondary">Kembali ke menu dashboard</a>
    <?php
    $nomor = 1;
    if($result->num_rows > 0) { ?>
        <table class="table">
            <thead>
                <th scope="col">Nomor</th>
                <th scope="col">Nama</th>
                <th scope="col">Bagaimana Keselarasan jurusan dengan Pekerjaan sekarang</th>
                <th scope="col">Berapa lama waktu diterima kerja pasca lulus</th>
                <th scope="col">Bagaimana Tingkat Posisi pekerjaan setelah lulus</th>
                <th scope="col">Bagaimana Sebaran Pendapatan yang didapat saat bekerja</th>
                <th scope="col">Hasil</th>
            </thead>
            <?php while($row = $result->fetch_assoc()) { ?>
                <tr scope="row">
                    <td>
                        <?= $nomor++;?>
                    </td>
                    <td>
                        <?= $row["nama"];?>
                    </td>
                    <td>
                        <?= $row["keselarasan"];?>
                    </td>
                    <td>
                        <?= $row["lamawaktu"];?>
                    </td>
                    <td>
                        <?= $row["tingkatposisi"];?>
                    </td>
                    <td>
                        <?= $row["pendapatan"];?>
                    </td>
                    <td>
                        <?= $row["hasil"];?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    <?php } else { 
        echo "0 Results";
    }
    ?>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>