<?php
include"../baglanti.php";

if(isset($_POST['kategori_id']))
{
	if($_POST['kategori_id']>0)
	{
		$Guncelle=$db->prepare("UPDATE kategoriler SET
			kategori_adi=:kategori_adi,
			kategori_tarihi=:kategori_tarihi
			WHERE kategori_id=:kategori_id");

		$Durum=$Guncelle->execute(
			array(
				"kategori_adi"=>$_POST["kategori_adi"],
				"kategori_tarihi"=>$_POST["kategori_tarihi"],
				"kategori_id"=>$_POST["kategori_id"]
			)
		);

		//print_r($Guncelle->errorInfo());
		header("Location:kategoridetay.php?id=".intval($_POST["kategori_id"]));
		exit;
  }
  else
{
  $Ekle=$db->prepare("INSERT INTO kategoriler(kategori_adi,kategori_tarihi) VALUES(:kategori_adi,:kategori_tarihi)");

  $Durum=$Ekle->execute(
    array(
      "kategori_adi"=>$_POST["kategori_adi"],
      "kategori_tarihi"=>$_POST["kategori_tarihi"]
    )
  );

  $kategori_id=$db->lastInsertid();

  //print_r($Ekle->errorInfo());
  header("Location:kategoridetay.php?id=".intval($kategori_id));
  exit;
	}
}

?>
