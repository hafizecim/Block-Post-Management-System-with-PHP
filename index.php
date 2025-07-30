<?php
require_once "baglan.php";

$sql = "SELECT * FROM yazilar ORDER BY tarih DESC";
$sonuc = $baglanti->query($sql);
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <title>Blog Yazıları</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            font-family: Verdana, sans-serif;
            background-color: #f9f9f9;
        }

        h1 {
            font-family: 'Brush Script MT', cursive;
            text-align: center;
            color: #A5402C;
            font-size: 4em;
            margin: 10px 0;
        }

        .buton-container {
            text-align: center;
            margin-bottom: 10px;
        }

        .buton-container a {
            display: inline-block;
            margin: 5px;
            padding: 10px 20px;
            text-decoration: none;
            background-color: #E6AEA2;
            color: #f1faee;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-weight: normal;
            transition: 0.3s;
            width: 190px; /* Sabit genişlik verildi */
            text-align: center;
            box-sizing: border-box; /* Padding + border dahil olsun genişliğe */

        }

        .buton-container a:hover {
            background-color: #CD5C5C;
            color: #f1faee;
            font-weight: bold;

        }

        .buton-container2 {
            /* text-align: center; */
            margin-bottom: 20px;
            font-size: 0.8em;
        }

        .buton-container2 a {
            display: inline-block;
            padding: 5px 10px;
            text-decoration: none;
            background-color: #2a9d8f;
            color: #f1faee;
            border: none;
            border-radius: 5px;
            transition: 0.3s;
            font-weight: normal;
            cursor: pointer;
            display: inline-block;
            min-width: 75px; /* butonun üzerie geldiğinde sağa esneme olmasın diye */
            text-align: center;

        }

        .buton-container2 a:hover {
            background-color: #CD5C5C;
            color: #f1faee;
            font-weight: bold;

        }

        .buton-container2 a:active {
            font-weight: bold;
            /* Tıklandığında kalın */
        }

        .yazi {
            max-width: 500px;
            margin: 0 auto 10px auto;
            background-color: white;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .yazi h2 {
            color: #3a5a40;
        }

        .yazi p {
            line-height: 1.6;
            color: #3a5a40;
        }

        .yazi a {
            text-decoration: none;
            margin-right: 10px;
        }
    </style>
</head>

<body>
    <h1>Blog Yazıları</h1>

    <div class="buton-container">
        <a href="ekle.php">
            <i class="fas fa-plus"></i> Yeni Yazı Ekle
        </a>
    </div>

    <?php while ($satir = $sonuc->fetch_assoc()): ?>
        <div class="yazi">
            <h2 style="font-family: Harlow Solid Italic, serif;"><em><?php echo htmlspecialchars($satir['baslik']); ?></em>
            </h2>
            <p><?php echo nl2br(htmlspecialchars($satir['icerik'])); ?></p>
            <p><em><?php echo $satir['tarih']; ?></em></p>

            <div class="buton-container2">
                <a href="duzenle.php?id=<?php echo $satir['id']; ?>">
                    <i class="fas fa-edit"></i>
                    Düzenle</a>
                <a href="sil.php?id=<?php echo $satir['id']; ?>" onclick="return confirm('Silmek istediğine emin misin?');">
                    <i class="fas fa-trash-alt"></i>
                    Sil</a>
            </div>

        </div>
    <?php endwhile; ?>
</body>

</html>