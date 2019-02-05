<?php
// YONCU.COM APİ V1 CODİNG BY HASAN ATİLAN.
// APİ KULLANMAK İÇİN YÖNCÜ HESABINIZDAN İP ADRESİNİZİ TANIMLAMANIZ GEREKMEKTEDİR.
// APİLERDEN GELEN CEVAP JSON ÇIKTISIDIR. Örnek Çıktı: [true,"İşlem Yapıldı"]
// APİ ERİŞİMİNİ KULLANIMA SUNAN YÖNCÜYE TEŞEKKÜR EDERİM.
// TAMAMEN ÖRNEK OLARAK KODLADIM

$apilinki = 'http://www.yoncu.com/apiler/sunucu/power.php'; // APİ VERİ ALIP GÖNDERME İŞLEMİ BİZ SUNUCU KAPAMA AÇMA İŞLEMİNE VERİ YOLLAYIP ALACAĞIZ
$apikullanicinumarasi = '2'; // api kullanıcı numaranız
$apisifresi = 'sifreniz'; // api şifreniz
$sunucunumarasi = 'örnek 1'; // sunucu numarası yani işlem numarasi
$islemturu = $_POST['islemturu']; // yapıcağınız işlem türü örneğin restart atmak için reset komutunu yollıyabilirsiniz

//
if (isset($_POST["Gonder"])) {
	
$veri = curl_init();
curl_setopt($veri, CURLOPT_URL, ''.$apilinki.'?id='.$apikullanicinumarasi.'&key='.$apisifresi.'&sid='.$sunucunumarasi.'&is='.$islemturu.'');
curl_setopt($veri, CURLOPT_HEADER, false);
curl_setopt($veri, CURLOPT_ENCODING, false);
curl_setopt($veri, CURLOPT_COOKIESESSION, false);
curl_setopt($veri, CURLOPT_RETURNTRANSFER, true);
curl_setopt($veri, CURLOPT_HTTPHEADER, array(
	'Connection: keep-alive',
	'User-Agent: '.$_SERVER['SERVER_NAME'],
	'Referer: http://www.yoncu.com/',
	'Cookie: YoncuKoruma='.$_SERVER['SERVER_ADDR'].';YoncuKorumaRisk=0',
));

}

?>


<form action="" method="post">

     <div class="mesaj"></div>


<div class="form-group">
                     <label for="islem" class="">İşlem</label>
                     <input type="text" name="islemturu" class="form-control" id="islemturu" placeholder="Reset" required>
                  </div>
          

 <hr>
  <a href="index.php" class="btn btn-danger pull-left">
         Geri Dön
  </a>
  <button type="submit" name="Gonder" class="btn btn-success pull-right">
         İşlemi Yolla
  </button>
</div>
