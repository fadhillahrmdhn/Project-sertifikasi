<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tugas Project</title>

  <link rel="stylesheet" href="bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/style/main.css" />
</head>

<body>
  <header>
    <nav class="navbar bg-white shadow-sm">
      <hr class="border border-info border-3 opacity-75" />
      <div class="container-fluid">
        <a class="navbar-brand text-dark-emphasis" href="#">
          <img src="assets/image/airplane-svgrepo-com.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top" />
          Fadhil
        </a>
      </div>
      <div class="navitem">
        <ul>
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="pendaftaran.php">Pendaftaran</a>
          </li>
          <li>
            <a href="daftarrute.php">Daftar Rute</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <div class="tabledaftarrute">
      <h2 id="tabledaftarrute">Daftaran Rute Tersedia</h2>
      <table class="table table-primary table-striped-columns">
        <tr>
          <th>Maskapai</th>
          <th>Asal Penerbangan</th>
          <th>Tujuan Penerbangan</th>
          <th>Harga Tiket</th>
          <th>Pajak</th>
          <th>Total Harga Tiket</th>
        </tr>
        <?php
        // Membaca isi file JSON
        $jsonData = file_get_contents('data/data.json');

        // mengubah objek JSON menjadi objek PHP
        $data = json_decode($jsonData, true);

        sort($data['data']);

        foreach ($data['data'] as $item) {
          $maskapai = $item['maskapai'];
          $bandaraAsal = $item['bandara_asal'];
          $bandaraTujuan = $item['bandara_tujuan'];
          $hargaTiket = $item['harga_tiket'];
        ?>
          <tr>
            <td><?= $maskapai ?></td>
            <td><?= $bandaraAsal ?></td>
            <td><?= $bandaraTujuan ?></td>
            <td><?= $hargaTiket ?></td>
            <td></td>
            <td></td>
          </tr>
        <?php } ?>
      </table>
    </div>
  </main>
  <footer>
    <p>Website Jadwal Penerbangan &#169; 2023, Fadhillah Ramadhan</p>
  </footer>
</body>

</html>