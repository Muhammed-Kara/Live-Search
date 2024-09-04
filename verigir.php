<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php  

$baglan = mysqli_connect("localhost", "root", "", "canlı_arama");

if (!$baglan) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}

if (isset($_POST["buton"])) {
 
    $anahtar = isset($_POST['anahtar']) ? $_POST['anahtar'] : '';
    $aciklama = isset($_POST['aciklama']) ? $_POST['aciklama'] : '';
    $baslik = isset($_POST['baslik']) ? $_POST['baslik'] : '';

    $sql = "INSERT INTO veri (anahtar, aciklama, baslik) VALUES ('$anahtar', '$aciklama', '$baslik')";
    
    $sonuc = mysqli_query($baglan, $sql);

    if ($sonuc) {
        
        echo "<p>Veri başarıyla kaydedildi.</p>";
        
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        echo "<p>Veri kaydedilirken bir hata oluştu: " . mysqli_error($baglan) . "</p>";
    }
}

mysqli_close($baglan);
?>

<form method="post" action="">
    <input type="text" name="anahtar" placeholder="Veri İsmi" required id="veri_isim">
    <input type="text" name="aciklama" placeholder="Açıklama" required id="acıklama">
    <input type="text" name="baslik" placeholder="Başlık" required id="baslik">
   <button  type="submit" name="buton" value="Gönder">Veri Tabanına Kaydet</button>
</form>

</body>
</html>
