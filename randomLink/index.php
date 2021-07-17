<?php

function randomURL($URLlength = 8) { // random maksimum 8 karakterli bir değer oluşturup bunu fonksiyon olarak kaydediyoruz.
    $charray = array_merge(range('a','z'), range('0','9'));

    $max = count($charray) - 1;

    for ($i = 0; $i < $URLlength; $i++) {

        $randomChar = mt_rand(0, $max);

        $url .= $charray[$randomChar];

    }

    return $url;

}





$dosya = randomURL() . ".php"; // bu projede dosyayı php olarak kaydetmek istediğim için, randomURL() fonksiyon arkasına ".php" ekliyorum ve dosya değişkenine yazıyorum.
echo $dosya;



$verigeldimi = $_POST[buton]; //butona tıklandığında çalışmasını istediğim için $verigeldimi değişkenine butonu post ediyorum.


if(isset($verigeldimi)=="cagir"){ // eğer cagir elemanından veri geldiyse dosyayı oluşturup ekrana yazdırıyorum.
fopen($dosya, "w");

echo "<br /> DOSYA BAŞARILYA OLUŞTURULDU. <br /> Oluşturulan Yol:" . "<a>https://mehmetcanyarar.com.tr/projects/randomLink/" . $dosya . "</a>";

die();

}



?>

<form method="POST">

<input type="submit" name="buton" value="cagir">

</form>

