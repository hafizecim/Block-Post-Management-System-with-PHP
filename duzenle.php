<?php
require_once "baglan.php";

// ID kontrolü
if (!isset($_GET["id"])) {
    echo "ID belirtilmedi.";
    exit();
}

$id = $_GET["id"];

// Güncelleme formu gönderildiyse
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $baslik = $_POST["baslik"];
    $icerik = $_POST["icerik"];

    $sql = "UPDATE yazilar SET baslik = ?, icerik = ? WHERE id = ?";
    $stmt = $baglanti->prepare($sql);
    $stmt->bind_param("ssi", $baslik, $icerik, $id);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Hata: " . $stmt->error;
    }
}

// Mevcut yazıyı çek
$sql = "SELECT * FROM yazilar WHERE id = ?";
$stmt = $baglanti->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$sonuc = $stmt->get_result();

if ($sonuc->num_rows == 0) {
    echo "Yazı bulunamadı.";
    exit();
}

$yazi = $sonuc->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Yazıyı Düzenle</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <style>
        body {
            font-family: Verdana, sans-serif;
            background-color: #f9f9f9;
            padding: 20px;
        }

        h1 {
            font-family: 'Brush Script MT', cursive;
            text-align: center;
            color: #A5402C;
            font-size: 3em;
            margin-bottom: 20px;
        }

        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            border: 1px solid #ddd;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        label {
            font-weight: bold;
            color: #264653;
        }

        input[type="text"],
        textarea {
            width: 96%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            resize: vertical;
            font-size: 1em;
        }

        button {
            background-color: #E6AEA2;
            color: #CD5C5C;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background-color: #CD5C5C;
            color: #fff;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #264653;
            text-decoration: none;
            font-weight: bold;
        }

        .back-link:hover {
            color: #CD5C5C;
        }
    </style>
</head>
<body>

    <h1>Yazıyı Düzenle</h1>

    <div class="form-container">
        <form method="post">
            
            <label style="color: #3a5a40; font-weight: bold; font-size: 1em;">Başlık:</label>
            <input type="text" name="baslik" value="<?php echo htmlspecialchars($yazi['baslik']); ?>" required>

            <label style= "color: #3a5a40; font-weight: bold; font-size: 1em;">İçerik:</label>
            <textarea name="icerik" rows="10" required><?php echo htmlspecialchars($yazi['icerik']); ?></textarea>

            <button type="submit">
                <i class="fas fa-edit"></i> Güncelle
            </button>
        </form>
    </div>

    <a class="back-link" href="index.php">
        <i class="fas fa-arrow-left"></i> Geri Dön
    </a>

</body>
</html>
