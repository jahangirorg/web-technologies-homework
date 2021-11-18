<?php include"header.php"; ?>
<?php include"functions.php"; ?>

<?php
$urunler=$db->prepare("SELECT * FROM urunler WHERE u_id=?");
$urunler->execute(array(intval($_GET['id'])));
$urunler=$urunler->fetch();

?>
<div class="single">

<h2><?php echo $urunler['u_adi'] ?></h2>

<a href="#"><img src="<?php echo $urunler['u_resmi'] ?>"></a>

<div class="ozellikler">
<ul>
  <li><p>Ürün Fiyatı</p><a href="#"><?php echo $urunler['u_fiyati'] ?></a></li>
  <li><p>Ürün Kategorisi</p><a href="#"><?php echo $urunler['u_kategori_id'] ?></a></li>
  <li><p>Ürün Tarihi</p><a href="#"><?php echo $urunler['u_tarihi'] ?></a></li>
  <li><p>Ürün Rengi</p><a href="#"><?php echo $urunler['u_renk'] ?></a></li>
  <li><p>Ürün Markası</p><a href="#"><?php echo $urunler['u_marka'] ?></a></li>
  <li><p>Ürün Stok</p><a href="#"><?php echo $urunler['u_stok'] ?></a></li>
  <li><p>Ürün Etiketleri</p><a href="#"><?php echo $urunler['u_etiket'] ?></a></li>
</ul>

</div>
<div style="clear:both;">

</div>

<div class="sepet">
  <li>
    <a href="#">Sepete Ekle</a>
  </li>

<br>

</div>

<br>

<h2 style="font-size:17px;">Ürün Açıklaması</h2>
<div class="aciklama">
  <p><?php echo $urunler['u_aciklamasi'] ?></p>

</div>

<div style="clear:both;"></div>

</div>

<br>


<?php include"footer.php" ?>
