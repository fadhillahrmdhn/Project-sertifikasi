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
    <div class="formpendaftaran">
      <h2>Pendaftaran Rute Penerbangan</h2>
      <form action="daftarrute.php" method="post">
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
              <label for="bandara_asal">Bandara Asal</label>
            </td>
            <td>:</td>
            <td>
              <select name="bandara_asal" id="bandara_asal">
                <option value="Soekarno-Hatta (CGK)">Soekarno-Hatta (CGK)</option>
                <option value="Husein Sastranegara (BDO)">Husein Sastranegara (BDO)</option>
                <option value="Abdul Rachman saleh (MLG)">Abdul Rachman saleh (MLG)</option>
                <option value="Juanda (SUB)">Juanda (SUB)</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="bandara_tujuan">Bandara Tujuan</label>
            </td>
            <td>:</td>
            <td>
              <select name="bandara_tujuan" id="bandara_tujuan">
                <option value="Ngurah Rai (DPS)">Ngurah Rai (DPS)</option>
                <option value="Hasanuddin (UPG)">Hasanuddin (UPG)</option>
                <option value="Inanwatan (INX)">Inanwatan (INX)</option>
                <option value="Sultan Iskandarmuda (BTJ)">Sultan Iskandarmuda (BTJ)</option>
              </select>
            </td>
          </tr>
          <tr>
            <td>
              <label for="harga_tiket">Harga Tiket</label>
            </td>
            <td>:</td>
            <td><input type="text" name="harga_tiket" placeholder="Harga Tiket" required /></td>
          </tr>
          <tr>
            <td colspan="3"><button class="button" type="submit" value="kirim">kirim</button></td>
          </tr>
        </table>
      </form>
    </div>
  </main>
  <footer>
    <p>Website Jadwal Penerbangan &#169; 2023, Fadhillah Ramadhan</p>
  </footer>
</body>

</html>