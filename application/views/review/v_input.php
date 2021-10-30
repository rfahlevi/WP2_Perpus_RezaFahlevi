<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Input Toko Speatu</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="row justify-content-center">
      <div class="col-4">
        <form method="POST">
          <table class="table">
            <thead>
              <tr>
                <th scope="col" colspan="2" class="text-center">Form Input Data Transaksi Penjualan Toko Sepatu</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="align-middle">Nama Pembeli</td>
                <td>
                  <input type="text" name="nama" id="nama" class="form-control">
                  <?= form_error('nama','<br><span style="color:red;
                  ">','</span>'); ?>
                </td>
              </tr>
              <tr>
                <td class="align-middle">Nomor Hp</td>
                <td>
                  <input type="text" name="nohp" id="nohp" class="form-control">
                  <?= form_error('nohp','<br><span style="color:red;
                  ">','</span>'); ?>
                </td>
              </tr>
              <tr>
                <td class="align-middle">Merk Sepatu</td>
                <td>
                  <select class="form-select" name="merk" id="merk" aria-label="Default select example">
                    <option selected>Pilih Merk</option>
                    <?php foreach ($merk as $m): ?>
                      <option value="<?= $m; ?>"><?= $m; ?></option>
                    <?php endforeach;  ?>
                  </select>
                </td>
              </tr>
              <tr>
                <td class="align-middle">Ukuran Sepatu</td>
                <td>
                  <select class="form-select" name="ukuran" id="ukuran" aria-label="Default select example">
                    <option selected>Pilih Ukuran</option>
                    <?php for($i = 32; $i <= 44; $i++) : ?>
                      <option value="<?= $i;?>"><?= $i;?></option>
                    <?php endfor; ?>
                  </select>
                </td>
              </tr>
              <tr>
                <th scope="col" colspan="2" class="text-center">
                  <input type="submit" class="btn btn-primary" value="Submit">
                </th>
              </tr>
            </tbody>
          </table>
        </form>
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