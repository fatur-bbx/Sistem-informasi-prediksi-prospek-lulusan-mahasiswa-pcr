<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Prospek Lulusan Mahasiswa</title>
  </head>
  <body>
    <div class="container mt-3">
    <h1 class="text-center">Prospek Lulusan Mahasiswa</h1>
    <a href="data.php" class="btn btn-secondary">Lihat Data Responden</a>
    <br>
    <br>
    <br>
    <form action="./controller.php" method="POST" class="form-control">
        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" placeholder="Masukkan nama" required class="form-control">
        
        <br>

        <label for="keselarasan">Bagaimana Keselarasan jurusan dengan Pekerjaan sekarang ?</label>
        <select name="keselarasan" id="keselarasan" required class="form-control">
            <option value="">Pilih</option>
            <option value="Selaras">Selaras</option>
            <option value="Cukup Selaras">Cukup Selaras</option>
            <option value="Tidak Selaras">Tidak Selaras</option>
        </select>
        
        <br>

        <label for="lamawaktu">Berapa lama waktu diterima kerja pasca lulus ?</label>
        <select name="lamawaktu" id="lamawaktu" required class="form-control">
            <option value="">Pilih</option>
            <option value="Cepat">Cepat</option>
            <option value="Cukup Lama">Cukup Lama</option>
            <option value="Lama">Lama</option>
        </select>

        <br>

        <label for="tingkatposisi">Bagaimana Tingkat Posisi pekerjaan setelah lulus ?</label>
        <select name="tingkatposisi" id="tingkatposisi" required class="form-control">
            <option value="">Pilih</option>
            <option value="Lebih Tinggi">Lebih Tinggi</option>
            <option value="Tingkat yang sama">Tingkat yang sama</option>
            <option value="Lebih Rendah">Lebih Rendah</option>
        </select>

        <br>

        <label for="pendapatan">Bagaimana Sebaran Pendapatan yang didapat saat bekerja ?</label>
        <select name="pendapatan" id="pendapatan" required class="form-control">
            <option value="">Pilih</option>
            <option value="Diatas UMR">Diatas UMR</option>
            <option value="UMR">UMR</option>
            <option value="Dibawah UMR">Dibawah UMR</option>
        </select>

        <button type="submit" class="form-control btn btn-secondary">Submit</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>