<?php include"header.php"; ?>
<?php include"functions.php"; ?>

<div class="kategori-page">


  <?php
  $yeniurunler=$db->query("SELECT * FROM urunler WHERE u_kategori_id=?");

  while($urunler=$yeniurunler->fetch())
  {?>

            <div class="private-post">

              <a href="urundetay.php?id=<?php echo $urunler['u_id'] ?>"><img src="<?php echo $urunler['u_resmi'] ?>" alt=""></a>

              <div class="private-title">
                 <a href="urundetay.php?id=<?php echo $urunler['u_id'] ?>"><?php echo $urunler['u_adi'] ?></a>
              </div>

              <div class="last-price">
                <a href="urundetay.php?id=<?php echo $urunler['u_id'] ?>"><?php echo $urunler['u_fiyati'] ?></a>
              </div>

            </div>
            <?php
  }
   ?>


</div>



<br>

<?php include"footer.php"; ?>
