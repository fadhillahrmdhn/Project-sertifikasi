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
            <a href="#">Home</a>
          </li>
          <li>
            <a href="#formpendaftaran">Pendaftaran</a>
          </li>
          <li>
            <a href="#tabledaftarrute">Daftar Rute</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <div class="jumbotron">
      <h1>WELCOME TO OUR WEBSITE</h1>
    </div>

    <div class="rutepenerbangan" id="formpendaftaran">
      <div class="formpendaftaran">
        <h2>Pendaftaran Rute Penerbangan</h2>
        <form action="" method="post">
          <table>
            <tr>
              <td>
                <label for="maskapai">Maskapai</label>
              </td>
              <td>:</td>
              <td><input type="text" name="maskapai" placeholder="Nama Maskapai" required /></td>
            </tr>
            <tr>
              <td>
                <label for="bandaraasal">Bandara Asal</label>
              </td>
              <td>:</td>
              <td>
                <select name="bandaraasal" id="bandaraasal">
                  <option value="Soekarno-Hatta (CGK)">Soekarno-Hatta (CGK)</option>
                  <option value="Husein Sastranegara (BDO)">Husein Sastranegara (BDO)</option>
                  <option value="Abdul Rachman saleh (MLG)">Abdul Rachman saleh (MLG)</option>
                  <option value="Juanda (SUB)">Juanda (SUB)</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="bandaratujuan">Bandara Tujuan</label>
              </td>
              <td>:</td>
              <td>
                <select name="bandaratujuan" id="bandaratujuan">
                  <option value="Ngurah Rai (DPS)">Ngurah Rai (DPS)</option>
                  <option value="Hasanuddin (UPG)">Hasanuddin (UPG)</option>
                  <option value="Inanwatan (INX)">Inanwatan (INX)</option>
                  <option value="Sultan Iskandarmuda (BTJ)">Sultan Iskandarmuda (BTJ)</option>
                </select>
              </td>
            </tr>
            <tr>
              <td>
                <label for="hargatiket">Harga Tiket</label>
              </td>
              <td>:</td>
              <td><input type="text" name="hargatiket" placeholder="Harga Tiket" required /></td>
            </tr>
            <tr>
              <td colspan="3"><button class="button" type="submit" value="kirim">kirim</button></td>
            </tr>
          </table>
        </form>
      </div>

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

          // Menguraikan (decode) data JSON menjadi struktur data PHP
          $data = json_decode($jsonData, true);

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
    </div>
  </main>
  <footer>
    <p>Website Jadwal Penerbangan &#169; 2023, Fadhillah Ramadhan</p>
  </footer>
</body>

</html>