<?php include"header.php";


if(!isset($_GET['id']))
  $_GET['id']=0;

$urunler=$db->prepare("SELECT * FROM urunler WHERE u_id=?");
$urunler->execute(array(intval($_GET['id'])));

$urunler=$urunler->fetch();
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ürünler</h3>
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


 <form action="urun_guncelle.php" method="POST" class="form-horizontal form-label-left" novalidate>

               
               <span class="section">Ürün Detayları</span>
               <input type="hidden" name="u_id" value="<?php echo $urunler['u_id'] ?>">
               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="u_adi">Ürünün Adı <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="u_adi" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="u_adi" value="<?php echo $urunler['u_adi'] ?>" placeholder="Bişeyler giriniz..." required="required" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="u_fiyati">Ürünün Fiyatı <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="u_fiyati" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="u_fiyati" value="<?php echo $urunler['u_fiyati'] ?>" placeholder="Bişeyler giriniz..." required="required" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="u_kategori_id">Ürünün Kategorisi <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="u_kategori_id" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="u_kategori_id" value="<?php echo $urunler['u_kategori_id'] ?>" placeholder="Bişeyler giriniz..." required="required" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="u_aciklamasi">Ürünün Açıklaması <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="u_aciklamasi" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="u_aciklamasi" value="<?php echo $urunler['u_aciklamasi'] ?>" placeholder="Bişeyler giriniz..." required="required" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="u_resmi">Ürünün Resmi <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="u_resmi" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="u_resmi" value="<?php echo $urunler['u_resmi'] ?>" placeholder="Bişeyler giriniz..." required="required" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="u_renk">Ürünün Rengi <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="u_renk" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="u_renk" value="<?php echo $urunler['u_renk'] ?>" placeholder="Bişeyler giriniz..." required="required" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="u_stok">Ürünün Stoğu <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="u_stok" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="u_stok" value="<?php echo $urunler['u_stok'] ?>" placeholder="Bişeyler giriniz..." required="required" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="u_marka">Ürünün Markası <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="u_marka" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="u_marka" value="<?php echo $urunler['u_marka'] ?>" placeholder="Bişeyler giriniz..." required="required" type="text">
                 </div>
               </div>

               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="u_etiket">Ürünün Etiketi <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="u_etiket" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="u_etiket" value="<?php echo $urunler['u_etiket'] ?>" placeholder="Bişeyler giriniz..." required="required" type="text">
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
