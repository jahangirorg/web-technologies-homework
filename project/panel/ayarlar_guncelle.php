<?php
include"../baglanti.php";

if(isset($_POST['a_title']))
{
  $guncelle=$db->prepare("UPDATE ayarlar SET
  a_title=:a_title,
  a_description=:a_description,
  a_keywords=:a_keywords,
  a_facebook=:a_facebook,
  a_twitter=:a_twitter,
  a_instagram=:a_instagram,
  a_youtube=:a_youtube,
  a_sunucu=:a_sunucu,
  a_port=:a_port,
  a_kadi=:a_kadi,
  a_sifre=:a_sifre
  WHERE a_id=1");

  $guncelle->execute(
    array(
      'a_title'=>$_POST['a_title'],
      'a_description'=>$_POST['a_description'],
      'a_keywords'=>$_POST['a_keywords'],
      'a_facebook'=>$_POST['a_facebook'],
      'a_twitter'=>$_POST['a_twitter'],
      'a_instagram'=>$_POST['a_instagram'],
      'a_youtube'=>$_POST['a_youtube'],
      'a_sunucu'=>$_POST['a_sunucu'],
      'a_port'=>$_POST['a_port'],
      'a_kadi'=>$_POST['a_kadi'],
      'a_sifre'=>$_POST['a_sifre']
    )
  );
  header("Location:ayarlar.php?Durum=$Durum");
}



 ?>
