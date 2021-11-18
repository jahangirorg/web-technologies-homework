<?php
ob_start();
session_start();

try {
     $db = new PDO("mysql:host=localhost;dbname=bitirme;charset=utf8;", "root", "");
} catch ( PDOException $e ){
     print $e->getMessage();
     exit;
}

$ayarlar=$db->query("SELECT * FROM ayarlar")->fetch();

?>
