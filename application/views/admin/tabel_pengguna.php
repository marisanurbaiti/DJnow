<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <title>DJNOW (Design Jaman Now)</title>
        <style type="text/css">
            body {padding-top: 70px; background: #FFE5B4 !important; } /* Adding !important forces the browser to overwrite the default style applied by Bootstrap */
        </style>
    </head>

    <body>
      <!-- INI NAVBAR -->
        <nav class="navbar fixed-top navbar-light shadow bottom" style="border-radius: 0px; box-shadow: 0px 5px 7px 0px rgb(70, 70, 70) !important; background-color: #F2994A; height: 68px;">
          <div class="container-fluid" style="margin-left: 216px;">
            <div class="row">
              <div class="col" style="width:950px;">
                <a href="#">
                  <img src="<?= base_url('res'); ?>/logo.png" alt="DJNOW (Design Jaman Now)" width="95px" height="46px">
                </a>
              </div>
              <div class="col-4 text-end my-auto" style="width:auto; margin-right: 217px; ">
                <a href="<?= base_url('auth/logout'); ?>">
                  <img src="<?= base_url('res'); ?>/out.png" alt="DJNOW (Design Jaman Now)" width="30px" height="30px">
                </a>
              </div>
            </div>
        </nav>

        <div class="main-wrapper">
            <div class="section left col-sm-3" style=" background-color: #C13301;max-width: 346px !important;">
                <div class="half" style="margin: 0px;">
                    <div class="row">
                        <div class="col" style="max-width: 96px; background-color: #D03903;">
                          <img src="<?= base_url('res'); ?>/adminlogo.png" width="51px" height="51px" style="margin-bottom: 15px; margin-top: 31px; margin-left: 19px;">
                        </div>
                        <div class="col" style="max-width: auto !important; background-color: #D03903;">
                          <div style="font-size: 16px; font-weight: 500; color: #FFE5B4; margin-top: 45px; margin-left: -15px !important;">
                          <?= $admin['nama_lengkap']; ?>
                          </div>
                        </div>
                    </div>
                    <div class="row" style="margin-left: -15px !important; margin-right: -15px;">
                        <a class="col" type="button" href="<?= base_url('Admin'); ?>" style="max-width:96px; height: 64px; background-color: #C13301;">
                          <img src="<?= base_url('res'); ?>/dashboard.png" width="36px" height="36px" style="margin-top:14px; margin-left: 33px;">
                        </a>
                        <a class="col" type="button" href="<?= base_url('Admin'); ?>" style="text-decoration: none; height: 64px; background-color: #C13301;">
                          <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: black; font-size: 16px; margin-left: -12px; margin-top: 20px;">
                            Dashboard
                          </div>
                        </a>
                    </div>
                    <div class="row" style="margin-left: -15px !important; margin-right: -15px;">
                        <div class="col" style="max-width:96px; height: 64px; background-color: #F2994A;">
                          <img src="<?= base_url('res'); ?>/pengguna_active.png" width="36px" height="36px" style="margin-top:14px; margin-left: 33px;">
                        </div>
                        <div class="col"  style="text-decoration: none; height: 64px; background-color: #F2994A;">
                          <div style="color: #FDFAE6 !important; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: black; font-size: 16px; margin-left: -12px; margin-top: 20px;">
                            Tabel Data Pengguna
                          </div>
                        </div>
                    </div>
                    <div class="row" style="margin-left: -15px !important; margin-right: -15px;">
                        <a class="col" type="button" href="<?= base_url('Admin/tabel_unggahan'); ?>" style="max-width:96px; height: 64px; background-color: #C13301;">
                          <img src="<?= base_url('res'); ?>/unggahan.png" width="36px" height="36px" style="margin-top:14px; margin-left: 33px;">
                        </a>
                        <a class="col" type="button" href="<?= base_url('Admin/tabel_unggahan'); ?>" style="text-decoration: none; height: 64px; background-color: #C13301;">
                          <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: black; font-size: 16px; margin-left: -12px; margin-top: 20px;">
                            Tabel Data Unggahan
                          </div>
                        </a>
                    </div>
                    <div class="row" style="margin-left: -15px !important; margin-right: -15px;">
                        <a class="col" type="button" href="<?= base_url('Admin/kategori'); ?>" style="max-width:96px; height: 64px; background-color: #C13301;">
                          <img src="<?= base_url('res'); ?>/kategori.png" width="36px" height="36px" style="margin-top:14px; margin-left: 33px;">
                        </a>
                        <a class="col" type="button" href="<?= base_url('Admin/kategori'); ?>" style="text-decoration: none; height: 64px; background-color: #C13301;">
                          <div style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif; color: black; font-size: 16px; margin-left: -12px; margin-top: 20px;">
                            Kategori
                          </div>
                        </a>
                    </div>
                    <div class="row" style=" background-color:#C13301 ;"></div>
                </div>
            </div>
            <div class="section1 right col-xs-9">
                <div class="datapengguna" style="margin-right: 20px; margin-top: 12px; margin-left: 32px; background-color: #FDFAE6;">
                    <div style="color: #C13301; font-weight: bold; font-size: 30px !important; margin-left: 18px; padding-top: 18px; padding-bottom:20px;">
                      Data Pengguna
                    </div>
                  </div>
                  <div class="row" style="margin-top:5px; font-size:16px;  margin-right: 20px; margin-left: 32px; background-color: #FDFAE6;">
                    <div class="col" style="margin-left: 10px !important; margin-top: 10px;">
                      Total Pengguna : <?= count($user); ?>
                    </div>
                    <div class="col text-end" style="margin-right: 6px;"> 
                      <div class="row">
                        <div class="col" style="margin-top: 10px;">
                          Search :
                        </div>

                        <!--INI KOTAK PENCARIAN-->
                        <div class="col">
                          <input class="form-control me-2" style="border-radius: 7px; margin-right: 10px; background-color: #F2994A; margin-top: 12px; height: 21px;" type="search" aria-label="Search">
                        </div>
                        <!--CLOSSING KOTAK PENCARIAN-->

                      </div>
                    </div>
                    
                    <div class="row">

                    <!--ISI KONTEN TABEL-->
                      <div class="table-responsive-sm text-center" style="font-family: 'Segoe UI'; font-size: 14px; margin-top: 12px;">
                        <table class="table" style="margin-left: 10px; width: 100%; max-width: 100% !important;">
                          <thead class="table" style="color: #FDFAE6; background-color: #F2994A;">
                            <tr>
                              <th scope="col">No</th>
                              <th scope="col">Username</th>
                              <th scope="col">Nama</th>
                              <th scope="col">Tanggal Lahir</th>
                              <th scope="col">Email</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php $jml_user=count($user);
                            for ($x = 0; $x < $jml_user ; $x++) :  ?>
                            <tr>
                              <th scope="row"><?= $x+1; ?></th>
                              <td><?= $user[$x]['username']; ?></td>
                              <td><?= $user[$x]['nama_lengkap']; ?></td>
                              <td><?= $user[$x]['tanggal_lahir']; ?></td>
                              <td><?= $user[$x]['email']; ?></td>
                            </tr>
                            <?php endfor; ?>
                          </tbody>
                        </table>
                      </div>  
                    <!--CLOSE KONTEN TABEL-->
        </div>
    </body>
    <!-- JANGAN DIUBAH-UBAH -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</html>