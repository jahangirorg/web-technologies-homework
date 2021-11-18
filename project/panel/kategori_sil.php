<?php
include"../baglanti.php";

if(isset($_GET['id']))
{
  $sil=$db->prepare("DELETE FROM kategoriler WHERE kategori_id=?");
  $Durum=$sil->execute(array(intval($_GET['id'])));

  header("Location:kategorilistele.php?Durum=".$Durum);
  exit;
}


 ?>
