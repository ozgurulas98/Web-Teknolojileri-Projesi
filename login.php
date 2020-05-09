<?php 

$username = $_POST["kullaniciAdi"];
$sifre = $_POST["sifre"];

if($username == "ozgurulas" && $sifre== "123"){
    echo "Giriş Başarılı";
}else{
    echo "giriş başarısız";
}

?>
