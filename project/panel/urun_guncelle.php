<?php
include"../baglanti.php";

if(isset($_POST['u_id']))
{
	if($_POST['u_id']>0)
	{
		$Guncelle=$db->prepare("UPDATE urunler SET
			u_adi=:u_adi,
			u_aciklamasi=:u_aciklamasi,
			u_fiyati=:u_fiyati,
			u_resmi=:u_resmi,
			u_stok=:u_stok,
			u_tarihi=:u_tarihi,
			u_kategori_id=:u_kategori_id,
			u_renk=:u_renk,
			u_etiket=:u_etiket,
			u_marka=:u_marka
			WHERE u_id=:u_id");

		$Durum=$Guncelle->execute(
			array(
				"u_adi"=>$_POST["u_adi"],
				"u_aciklamasi"=>$_POST["u_aciklamasi"],
				"u_fiyati"=>$_POST["u_fiyati"],
				"u_resmi"=>$_POST["u_resmi"],
				"u_stok"=>$_POST["u_stok"],
				"u_tarihi"=>$_POST["u_tarihi"],
				"u_kategori_id"=>$_POST["u_kategori_id"],
				"u_renk"=>$_POST["u_renk"],
				"u_etiket"=>$_POST["u_etiket"],
				"u_marka"=>$_POST["u_marka"],
				"u_id"=>$_POST["u_id"]
			)
		);

		
		header("Location:urundetay.php?id=".intval($_POST["u_id"]));
		exit;
  }
  else
{
  $Ekle=$db->prepare("INSERT INTO urunler(u_adi,u_aciklamasi,u_fiyati,u_resmi,u_stok,u_tarihi,u_kategori_id,u_renk,u_etiket,u_marka) VALUES(:u_adi,:u_aciklamasi,:u_fiyati,:u_resmi,:u_stok,:u_tarihi,:u_kategori_id,:u_renk,:u_etiket,:u_marka)");

  $Durum=$Ekle->execute(
    array(
      "u_adi"=>$_POST["u_adi"],
      "u_aciklamasi"=>$_POST["u_aciklamasi"],
      "u_fiyati"=>$_POST["u_fiyati"],
      "u_resmi"=>$_POST["u_resmi"],
      "u_stok"=>$_POST["u_stok"],
      "u_tarihi"=>$_POST["u_tarihi"],
      "u_kategori_id"=>$_POST["u_kategori_id"],
      "u_renk"=>$_POST["u_renk"],
      "u_etiket"=>$_POST["u_etiket"],
      "u_marka"=>$_POST["u_marka"]
    )
  );

  $u_id=$db->lastInsertid();

  //print_r($Ekle->errorInfo());
  header("Location:urundetay.php?id=".intval($u_id));
  exit;
	}
}

?>
