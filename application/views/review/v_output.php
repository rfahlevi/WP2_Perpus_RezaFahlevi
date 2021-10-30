<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
        table {
            font-family: poppins !important;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Output Toko Speatu</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center">
      <div class="col-4">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" colspan="2" class="text-center">Tampil Data Transaksi Penjualan Toko Sepatu</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-middle">Nama Pembeli</td>
                <td>
                  <?= $nama; ?>
                </td>
              </tr>
              <tr>
                <td class="align-middle">Nomor Hp</td>
                <td>
                  <?= $nohp; ?>
                </td>
              </tr>
              <tr>
                <td class="align-middle">Merk Sepatu</td>
                <td>
                  <?= $merk; ?>
                </td>
              </tr>
              <tr>
                <td class="align-middle">Ukuran Sepatu</td>
                <td>
                  <?= $ukuran; ?>
                </td>
              </tr>
              <tr>
                <td class="align-middle">Harga</td>
                <td>
                  Rp. <?= $harga; ?>
                </td>
              </tr>
              <tr>
                <th scope="col" colspan="2" class="text-center">
                  <a href="<?= base_url('review'); ?>" class="btn btn-secondary" >Kembali</a>
                </th>
              </tr>
            </tbody>
          </table>
      </div>
      </div>
    </div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>