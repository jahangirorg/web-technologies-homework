<?php include"header.php"; ?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ayarlar</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Ayarlar</h2>
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

<?php
if(isset($_GET['Durum']))
{
  if($_GET['Durum'])
  {
?>
                  <div class="alert alert-success alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Güncelleme Yapıldı</strong>
                  </div>
<?php
  }
  else
  {
?>
                  <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>Güncelleme YAPILAMADI !!!</strong>
                  </div>
<?php
  }
}

 ?>


 <form action="ayarlar_guncelle.php" method="POST" class="form-horizontal form-label-left" novalidate>

               <p>Web sayfanızın ayarlarını düzenleyebilceğiniz sayfadır.</p>
               <span class="section">Genel Ayarlar</span>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="a_title">Sitenin Başlığı <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="a_title" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="a_title" value="<?php echo $ayarlar['a_title'] ?>" placeholder="Buraya Sitenin Başlığını Giriniz" required="required" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="a_description">Sitenin Açıklaması <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="a_description" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="a_description" value="<?php echo $ayarlar['a_description'] ?>" placeholder="Buraya Sitenin Açıklamasını Giriniz" required="required" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="a_keywords">Anahtar Kelimeler <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="a_keywords" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="a_keywords" value="<?php echo $ayarlar['a_keywords'] ?>" placeholder="Buraya Sitenin Anahtar Kelimelerini Giriniz" required="required" type="text">
                 </div>
               </div>

               <span class="section">Sosyal Medya Hesapları</span>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="a_facebook">Facebook
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="a_facebook" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="a_facebook" value="<?php echo $ayarlar['a_facebook'] ?>" placeholder="Varsa Facebook Adresinizi Giriniz" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="a_twitter">Twitter
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="a_twitter" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="a_twitter" value="<?php echo $ayarlar['a_twitter'] ?>" placeholder="Varsa Twitter Adresinizi Giriniz" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="a_instagram">Instagram
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="a_instagram" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="a_instagram" value="<?php echo $ayarlar['a_instagram'] ?>" placeholder="Varsa Instagram Adresinizi Giriniz" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="a_youtube">Youtube
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="a_youtube" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="a_youtube" value="<?php echo $ayarlar['a_youtube'] ?>" placeholder="Varsa Youtube Adresinizi Giriniz" type="text">
                 </div>
               </div>

               <span class="section">Mail Ayarları</span>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="a_sunucu">Mail Sunucu <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="a_sunucu" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="a_sunucu" value="<?php echo $ayarlar['a_sunucu'] ?>" placeholder="Buraya Mail Sunucu Adresini Giriniz" required="required" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="a_port">Port Numarası <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="a_port" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="a_port" value="<?php echo $ayarlar['a_port'] ?>" placeholder="Buraya Portu Giriniz" required="required" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="a_kadi">Mail Adresi <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="a_kadi" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="a_kadi" value="<?php echo $ayarlar['a_kadi'] ?>" placeholder="Buraya Mail Adresini Giriniz" required="required" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="a_sifre">Mail Şifresi <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="a_sifre" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="a_sifre" value="<?php echo $ayarlar['a_sifre'] ?>" placeholder="Buraya Mail Şifresini Giriniz" required="required" type="password">
                 </div>
               </div>

               <div class="ln_solid"></div>
               <div class="form-group">
                 <div class="col-md-6 col-md-offset-3">
                   <button id="send" type="submit" class="btn btn-success">Güncelle</button>
                 </div>
               </div>
             </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
