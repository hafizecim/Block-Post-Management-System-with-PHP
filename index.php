<?php
require_once "baglan.php";

$sql = "SELECT * FROM yazilar ORDER BY tarih DESC";
$sonuc = $baglanti->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Blog Yazıları</title>
</head>
<body>
    <h1 style="text-align: center; font-family: Verdana, sans-serif; color: #F54927;">Blog Yazıları</h1>
    <a href="ekle.php" style="display: block; text-align: center; color:darkcyan">Yeni Yazı Ekle</a>
    <hr>

    <?php while ($satir = $sonuc->fetch_assoc()): ?>
        <h2><em><?php echo htmlspecialchars($satir['baslik']); ?></em></h2>
        <p><?php echo nl2br(htmlspecialchars($satir['icerik'])); ?></p>
        <p><em><?php echo $satir['tarih']; ?></em></p>
        <a href="duzenle.php?id=<?php echo $satir['id']; ?>" style="color: dodgerblue">Düzenle</a> | 
        <a href="sil.php?id=<?php echo $satir['id']; ?>" onclick="return confirm('Silmek istediğine emin misin?');" style="color: crimson">Sil</a>
        <hr>
    <?php endwhile; ?>
</body>
</html>
