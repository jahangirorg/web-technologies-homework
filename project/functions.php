<?php
  function urungorunum($urunler)
  {
?>
<a href="urundetay.php?id=<?php echo $urunler['u_id'] ?>">
 <div class="last-post">
     <a href="urundetay.php?id=<?php echo $urunler['u_id'] ?>"><img src="<?php echo $urunler['u_resmi'] ?>" alt=""></a>

     <div class="last-title">
       <a href="urundetay.php?id=<?php echo $urunler['u_id'] ?>"><?php echo $urunler['u_adi'] ?></a>
     </div>

     <div class="last-price">
       <a href="urundetay.php?id=<?php echo $urunler['u_id'] ?>"><?php echo $urunler['u_fiyati'] ?></a>
     </div>


 </div>
</a>

<?php

}
 ?>
