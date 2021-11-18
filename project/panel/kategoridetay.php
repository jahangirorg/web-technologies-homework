<?php include"header.php";


if(!isset($_GET['id']))
  $_GET['id']=0;

$kategoriler=$db->prepare("SELECT * FROM kategoriler WHERE kategori_id=?");
$kategoriler->execute(array(intval($_GET['id'])));

$kategoriler=$kategoriler->fetch();
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Kategoriler</h3>
      </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Kategoriler</h2>
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


 <form action="kategori_guncelle.php" method="POST" class="form-horizontal form-label-left" novalidate>


               <span class="section">Kategori Detayları</span>
               <input type="hidden" name="kategori_id" value="<?php echo $kategoriler['kategori_id'] ?>">
               <div class="item form-group">
                 <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategori_adi">Kategori Adı <span class="required">*</span>
                 </label>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                   <input id="kategori_adi" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" name="kategori_adi" value="<?php echo $kategoriler['kategori_adi'] ?>" placeholder="Bişeyler giriniz..." required="required" type="text">
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
