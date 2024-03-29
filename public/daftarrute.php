<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tugas Project</title>
  <link rel="stylesheet" href="../resource/library/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/main.css" />
</head>

<body>
  <header>
    <nav class="navbar bg-white shadow-sm">
      <hr class="border border-info border-3 opacity-75" />
      <div class="container-fluid">
        <a class="navbar-brand text-dark-emphasis" href="#">
          <img src="image/airplane-svgrepo-com.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top" />
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
        $jsonData = file_get_contents('../resource/data/data.json');

        // mengubah objek JSON menjadi objek PHP
        $data = json_decode($jsonData, true);

        sort($data);

        foreach ($data as $item) {
          $maskapai = $item[0];
          $bandaraAsal = $item[1];
          $bandaraTujuan = $item[2];
          $hargaTiket = $item[3];
          $pajak = $item[4];
          $totalHarga = $item[5];
        ?>
          <tr>
            <td><?= $maskapai ?></td>
            <td><?= $bandaraAsal ?></td>
            <td><?= $bandaraTujuan ?></td>
            <td><?= $hargaTiket ?></td>
            <td><?= $pajak ?></td>
            <td><?= $totalHarga ?></td>
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