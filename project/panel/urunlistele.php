<?php include"header.php"; ?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ürün Sayfası</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Ürünler</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Settings 1</a>
                  </li>
                  <li><a href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li><a class="close-link"><i class="fa fa-close"></i></a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <table id="datatable" class="table table-striped table-bordered">
              <thead>
                <tr>
                  <th>Ürün İsmi</th>
                  <th>Ürün Kategorisi</th>
                  <th>Ürün Fiyatı</th>
                  <th>Ürün Tarihi</th>
                  <th>Düzenle</th>
                  <th>Sil</th>
                </tr>
              </thead>


              <tbody>
                <?php

                $urun=$db->query("SELECT * FROM urunler ORDER BY u_adi");

                while ($urunler=$urun->fetch()) {
                 ?>
                <tr>
                  <td><?php echo $urunler['u_adi'] ?></td>
                  <td><?php echo $urunler['u_kategori_id'] ?></td>
                  <td><?php echo $urunler['u_fiyati'] ?></td>
                  <td><?php echo $urunler['u_tarihi'] ?></td>
                  <td><a href="urundetay.php?id=<?php echo $urunler['u_id'] ?>"><i class="fas fa-pen"></i></a></td>
                  <td><a href="urun_sil.php?id=<?php echo $urunler['u_id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
                <?php
              }
                 ?>
              </tbody>
            </table>
          </div>
        </div>


</div>
<!-- /page content -->
