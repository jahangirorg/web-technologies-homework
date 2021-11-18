<?php
include"../baglanti.php";

if(isset($_GET['id']))
{
  $sil=$db->prepare("DELETE FROM urunler WHERE u_id=?");
  $Durum=$sil->execute(array(intval($_GET['id'])));

  header("Location:urunlistele.php?Durum=".$Durum);
  exit;
}


 ?>
