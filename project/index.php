<?php include"header.php"; ?>
<?php include"functions.php"; ?>

<div class="page">

    <div class="private">
      <h2>Özel Teklifler</h2>

        <?php
        $yeniurunler=$db->query("SELECT * FROM urunler WHERE u_kategori_id=7 LIMIT 8");

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

      <div class="ortabolum">

        <div class="category">
          <h2>Kategoriler</h2>
          <ul>
            <?php
            $kategori=$db->query("SELECT * FROM kategoriler ORDER BY kategori_id DESC LIMIT 15");

            while($kategoriler=$kategori->fetch())
            {?>
            <li><a href="kategoridetay.php?id=<?php echo $urunler['kategori_id'] ?>"><?php echo $kategoriler['kategori_adi']; ?></a></li>

            <?php
    }
    ?>
          </ul>

        </div>


<div class="last">

  <h2>Son Eklenen Ürünler</h2>
<?php
$yeniurunler=$db->query("SELECT * FROM urunler ORDER BY u_id DESC LIMIT 5");

while($urunler=$yeniurunler->fetch())
{
  urungorunum($urunler);
}
 ?>



</div>

<div class="popular">

  <h2>Populer Ürünler</h2>

  <?php
  $yeniurunler=$db->query("SELECT * FROM urunler WHERE u_kategori_id=8 LIMIT 5");

  while($urunler=$yeniurunler->fetch())
  {?>

  <div class="popular-post">
      <a href="urundetay.php?id=<?php echo $urunler['u_id'] ?>"><img src="<?php echo $urunler['u_resmi'] ?>" alt=""></a>

      <div class="popular-title">
        <a href="urundetay.php?id=<?php echo $urunler['u_id'] ?>"><?php echo $urunler['u_adi'] ?></a>
      </div>

      <div class="popular-price">
        <a href="urundetay.php?id=<?php echo $urunler['u_id'] ?>"><?php echo $urunler['u_fiyati'] ?></a>
      </div>


  </div>

  <?php
}
?>



</div>

</div>

<div style="clear: both;">
<br>
<div class="private">
  <h2>Önerilen Ürünler</h2>

    <?php
    $yeniurunler=$db->query("SELECT * FROM urunler WHERE u_kategori_id=9 LIMIT 8");

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

</div>

</div>

<br>

<?php include"footer.php"; ?>
