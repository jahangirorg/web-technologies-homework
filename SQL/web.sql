-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 17 Oca 2021, 20:48:57
-- Sunucu sürümü: 10.3.15-MariaDB
-- PHP Sürümü: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `web`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE `ayarlar` (
  `a_id` int(11) NOT NULL,
  `a_title` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `a_description` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `a_keywords` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `a_facebook` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `a_twitter` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `a_instagram` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `a_youtube` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `a_sunucu` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `a_port` int(4) NOT NULL,
  `a_kadi` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `a_sifre` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`a_id`, `a_title`, `a_description`, `a_keywords`, `a_facebook`, `a_twitter`, `a_instagram`, `a_youtube`, `a_sunucu`, `a_port`, `a_kadi`, `a_sifre`) VALUES
(1, 'E-Ticaret23', 'ddd', 'dddd', 'ddd', 'd', 'dddd', 'dddd', 'cihangir', 0, '', '8571010');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_adi` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `kategori_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_adi`, `kategori_tarihi`) VALUES
(7, 'dddd', '2021-01-12 03:48:23'),
(8, 'deneme', '2021-01-12 03:56:02'),
(9, 'Teknoloji', '2021-01-12 03:56:10'),
(10, 'Mobilya', '2021-01-12 03:56:15'),
(11, 'Ev', '2021-01-12 03:56:22'),
(12, 'Telefon', '2021-01-12 03:56:33'),
(13, 'Bilgisayar', '2021-01-12 03:56:39'),
(14, 'Tablet', '2021-01-12 03:56:45'),
(15, 'Araba', '2021-01-12 03:57:10'),
(16, 'Motosiklet', '2021-01-12 03:57:21'),
(17, 'Bisiklet', '2021-01-12 03:57:29'),
(18, 'Kulaklık', '2021-01-12 03:57:50');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE `urunler` (
  `u_id` int(11) NOT NULL,
  `u_adi` varchar(200) COLLATE utf8mb4_turkish_ci NOT NULL,
  `u_fiyati` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `u_kategori_id` int(11) NOT NULL,
  `u_aciklamasi` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `u_resmi` varchar(1000) COLLATE utf8mb4_turkish_ci NOT NULL,
  `u_tarihi` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `u_renk` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `u_stok` varchar(10) COLLATE utf8mb4_turkish_ci NOT NULL,
  `u_marka` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `u_etiket` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`u_id`, `u_adi`, `u_fiyati`, `u_kategori_id`, `u_aciklamasi`, `u_resmi`, `u_tarihi`, `u_renk`, `u_stok`, `u_marka`, `u_etiket`) VALUES
(6, 'Deneme Baslikk', '300TLd', 7, 'e', 'https://www.teknostore.com/media/catalog/product/cache/54c0e090526a59b425d13a8051bda18e/p/h/philips_m7_7_inch_ips_16gb_2gb_ram_tablet-1.jpg', '2021-01-17 16:17:58', 'Mavi', '111', 'OMOO', 'ekke, kekek, ekkek, ekkek'),
(7, 'Saat', '1000TL', 8, 'dddd', 'https://cdn.saatvesaat.com.tr/mnresize/708/708/media/catalog/product/a/r/ar2434.jpg', '2021-01-12 04:19:06', 'Siyah', '12', 'ARMANI', 'ekke, kekek, ekkek, ekkek'),
(8, 'Ayakkabı', '100TL', 9, 'ddffgs', 'https://www.sporthink.com.tr/UserFiles/ProductImages/0/la739sma0063e/orj/lacoste-erkek-ayakkabi-t-clip-082-106414.jpg', '2021-01-12 04:20:30', 'Yeşil', '20', 'Lacoste', 'ekke, kekek, ekkek, ekkek'),
(9, 'Parfüm', '100TL', 7, 'kldkskı üföoküfeoköeüfpokı', 'https://www.dermoeczanem.com/lacoste-essential-edt-125ml-erkek-parfum-lacoste-127977-50-B.jpg', '2021-01-12 04:23:04', 'Beyaz', '22', 'Lacoste', 'ekke, kekek, ekkek, ekkek'),
(10, 'Maske', '90TL', 7, 'dddd', 'https://laco.akinoncdn.com/products/2020/07/29/124092/30523ff0-3b01-42eb-983c-5884ccf7a3be_size2000x2000_cropCenter.jpg', '2021-01-12 04:24:20', 'Mavi', '55', 'Lacoste', 'ekke, kekek, ekkek, ekkek'),
(11, 'Ayakkabı 2', '100TL', 9, 'd', 'https://www.elleshoes.com/Uploads/UrunResimleri/buyuk/luvy-kadin-spor-ayakkabi-beyaz-kombin-9e90.jpg', '2021-01-17 16:03:09', 'Yeşil', '55', 'ARMANI', 'ekke, kekek, ekkek, ekkek'),
(12, 'Parfüm', '300tl', 9, 'dddd', 'https://productimages.hepsiburada.net/s/26/375/10142405460018.jpg', '2021-01-17 16:04:11', 'Beyaz', '22', '222', 'ekke, kekek, ekkek, ekkek'),
(13, 'Saksi', '100TL', 9, 'dddd', 'https://productimages.hepsiburada.net/s/35/375/10488826167346.jpg', '2021-01-17 16:05:05', 'Siyah', '20', 'Lacoste', 'ekke, kekek, ekkek, ekkek'),
(14, 'Koltuk', '1000TL', 9, '', 'https://cdn.evkur.com.tr/c/Product/thumbs/lila-1_mk9g5p_500.jpg', '2021-01-17 16:06:19', '', '', '', ''),
(15, 'Araba', '100TL', 9, 'dddd', 'https://productimages.hepsiburada.net/s/4/375/9647049769010.jpg', '2021-01-17 16:07:38', '', '', '', ''),
(16, 'Forma', '200TL', 9, 'dddd', 'https://aknbarcin.b-cdn.net/products/2020/04/10/92120/64522882-ddff-4944-966b-afde0e7e467d.jpg', '2021-01-17 16:08:22', '', '', '', ''),
(17, 'Forma', '300tl', 7, 'lflelele', 'https://aknbarcin.b-cdn.net/products/2019/12/21/97814/7c67a9f4-81f4-43da-b112-06837c5a587f_size480x480_quality90_cropCenter.jpg', '2021-01-17 16:10:24', '', '', '', ''),
(18, 'Oyuncak', '20TL', 7, 'dddd', 'https://productimages.hepsiburada.net/s/3/1500/9586630361138.jpg', '2021-01-17 16:11:09', '', '', '', ''),
(19, 'Futbol Topu', '40TL', 7, 'dddd', 'https://productimages.hepsiburada.net/s/24/1500/10073317802034.jpg', '2021-01-17 16:12:11', '', '', '', ''),
(20, 'Masa', '200TL', 7, 'dddd', 'https://cdnr.koctas.com.tr/resize/c450a91039db4701/300/300/productimages/1000394175/1000394175_2_MC/8822689497138_1581611125409.jpg', '2021-01-17 16:13:09', '', '', '', ''),
(21, 'Maske 2', '90TL', 8, 'dddd', 'https://productimages.hepsiburada.net/s/11/500/9068048646194.jpg', '2021-01-17 16:14:39', '', '', '', ''),
(22, 'Telefon', '1300TL', 8, 'lflelele', 'https://reimg-teknosa-cloud-prod.mncdn.com/mnresize/600/600/productimage/125077677/125077677_0_MC/47007810.jpg', '2021-01-17 16:15:24', '', '', '', ''),
(23, 'Bilgisayar', '3000', 8, 'dddd', 'https://cdn.vatanbilgisayar.com/Upload/PRODUCT/hp/thumb/TeoriV2-105608_large.jpg', '2021-01-17 16:16:06', '', '', '', ''),
(24, 'Tablet', '300TL', 8, 'dddd', 'https://reimg-teknosa-cloud-prod.mncdn.com/mnresize/600/600/productimage/125046953/125046953_0_MC/38957247.jpg', '2021-01-17 16:17:26', '', '', '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `uyeler`
--

CREATE TABLE `uyeler` (
  `uye_id` int(11) NOT NULL,
  `uye_mail` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `uye_adsoyad` varchar(500) COLLATE utf8mb4_turkish_ci NOT NULL,
  `uye_adres` text COLLATE utf8mb4_turkish_ci NOT NULL,
  `uye_tel` varchar(100) COLLATE utf8mb4_turkish_ci NOT NULL,
  `uye_resim` varchar(1000) COLLATE utf8mb4_turkish_ci NOT NULL,
  `uye_yetki` int(1) NOT NULL,
  `uye_tarih` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `uye_sifre` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL,
  `uye_sifreunut` varchar(20) COLLATE utf8mb4_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_turkish_ci;

--
-- Tablo döküm verisi `uyeler`
--

INSERT INTO `uyeler` (`uye_id`, `uye_mail`, `uye_adsoyad`, `uye_adres`, `uye_tel`, `uye_resim`, `uye_yetki`, `uye_tarih`, `uye_sifre`, `uye_sifreunut`) VALUES
(1, 'deneme@gmail.com', 'cihangir', ';sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf', '949939939292', 'lfs;m;lmf;l.com', 1, '2021-01-11 05:27:28', '333', ''),
(2, 'fhhfhfh@gmail.com', 'deneme uye', ';sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf;sdlsdma;f;kmasf', '8484884848', 'deneme.com', 2, '2021-01-11 05:00:52', '', ''),
(3, 'ee', 'hakan uraz', '', '', '', 1, '2021-01-11 05:38:47', '', ''),
(4, '', 'Cagatay Aksu', '', '', '', 1, '2021-01-11 05:39:39', '1234', '');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `ayarlar`
--
ALTER TABLE `ayarlar`
  ADD PRIMARY KEY (`a_id`);

--
-- Tablo için indeksler `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Tablo için indeksler `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`u_id`),
  ADD KEY `u_kategori_id` (`u_kategori_id`);

--
-- Tablo için indeksler `uyeler`
--
ALTER TABLE `uyeler`
  ADD PRIMARY KEY (`uye_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `ayarlar`
--
ALTER TABLE `ayarlar`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Tablo için AUTO_INCREMENT değeri `urunler`
--
ALTER TABLE `urunler`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `uyeler`
--
ALTER TABLE `uyeler`
  MODIFY `uye_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `urunler`
--
ALTER TABLE `urunler`
  ADD CONSTRAINT `urunler_ibfk_1` FOREIGN KEY (`u_kategori_id`) REFERENCES `kategoriler` (`kategori_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
