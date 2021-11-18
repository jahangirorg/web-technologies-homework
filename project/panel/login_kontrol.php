<?php
include"../baglanti.php";

if(isset($_POST['kadi']) && isset($_POST['sifre']))
{
	if($_POST['kadi']!="" && $_POST['sifre']!="")
	{
		$uyeler=$db->prepare("
			SELECT uye_id,uye_mail,uye_adsoyad
			FROM uyeler
			WHERE uye_mail=? AND uye_sifre=? AND uye_yetki=1");

		$uyeler->execute(
			array(
				$_POST['kadi'],
				$_POST['sifre']
			)
		);

		if($uyeler->rowCount()==1)
		{
			$uyeler=$uyeler->fetch();

			$_SESSION['uye_id']=$uyeler['uye_id'];
			$_SESSION['uye_mail']=$uyeler['uye_mail'];
			$_SESSION['uye_adsoyad']=$uyeler['uye_adsoyad'];

			$db->query("UPDATE uyeler SET
				uye_sifreunut='',
				uye_songiris=NOW()
				WHERE uye_id=".$uyeler['uye_id']);

			header("Location:./");
			exit;
		}
		else
		{
			$uyeler=$db->prepare("
				SELECT uye_id,uye_mail,uye_adsoyad
				FROM uyeler
				WHERE uye_mail=? AND uye_sifreunuttum=? AND uye_yetki=1");

			$uyeler->execute(
				array(
					$_POST['kadi'],
					$_POST['sifre']
				)
			);

			if($uyeler->rowCount()==1)
			{
				$uyeler=$uyeler->fetch();

				$_SESSION['uye_id']=$uyeler['uye_id'];
				$_SESSION['uye_mail']=$uyeler['uye_mail'];
				$_SESSION['uye_adsoyad']=$uyeler['uye_adsoyad'];

				$db->query("UPDATE uyeler SET
					uye_sifre=uye_sifreunuttum,
					uye_sifreunuttum='',
					uye_songiris=NOW()
					WHERE uye_id=".$uyeler['uye_id']);

				header("Location:./");
				exit;
			}
			else
			{
				header("Location:login.php?hata");
				exit();
			}
		}
	}
}

header("Location:login.php?hata");

?>
