# 📝 PHP Blog Yazı Sistemi

Bu proje, PHP ve MySQL kullanarak geliştirilmiş basit bir içerik yönetim sistemidir. Kullanıcılar yeni yazılar ekleyebilir, düzenleyebilir ve silebilir. Proje temel bir blog altyapısını örneklemek amacıyla tasarlanmıştır.

[![GitHub hafizecim](https://img.shields.io/badge/GitHub-@hafizecim-181717?style=for-the-badge&logo=github&logoColor=white)](https://github.com/hafizecim/Machine-Learning)

## 📦 Proje Özellikleri

- ✅ Yazı ekleme (başlık + içerik)
- ✅ Yazı listeleme
- ✅ Yazı düzenleme
- ✅ Yazı silme
- ✅ Veritabanı bağlantısı (`baglan.php`)
- ✅ Modern ve sade kullanıcı arayüzü
- ✅ FontAwesome simgeleri ile zenginleştirilmiş butonlar

---

## 🖼️ Görsel Arayüz

- 👁️‍🗨️ Renkli, sade bir form tasarımı
- 📋 Butonlar ve formlar modern CSS ile tasarlanmıştır
- 🔙 Anasayfaya dönüş linki

  - Ana Sayfa
    - <img width="539" height="369" alt="image" src="https://github.com/user-attachments/assets/ec8fa559-d9d1-4430-a4a6-d5526cef410b" />
    ---
  - Kaydet Sayfası
    - <img width="670" height="482" alt="image" src="https://github.com/user-attachments/assets/6f12d46d-2b70-44b4-b987-0b0535a21836" />
    ---
  - Günceleme Sayfası
    - <img width="664" height="487" alt="image" src="https://github.com/user-attachments/assets/b6cb1d84-782d-4b94-8e17-5323f4c1efc0" />
---

## 🧰 Gereksinimler

- PHP 7.x veya üzeri
- MySQL / MariaDB
- Web sunucusu (Apache önerilir, XAMPP veya WAMP kullanılabilir)

---

## 🛠️ Kurulum Adımları

1. Bu projeyi indir:
    ```bash
    git clone https://github.com/kullaniciadi/blog-projesi.git
    ```

2. `blog-projesi` klasörünü sunucu dizinine taşı (örneğin: `htdocs`).

3. Veritabanı oluştur:
    ```sql
    CREATE DATABASE blog;
    ```

4. Aşağıdaki SQL ile `yazilar` tablosunu oluştur:
    ```sql
    CREATE TABLE yazilar (
        id INT AUTO_INCREMENT PRIMARY KEY,
        baslik VARCHAR(255) NOT NULL,
        icerik TEXT NOT NULL,
        created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );
    ```

5. `baglan.php` dosyasındaki veritabanı bilgilerini kendi bilgilerinle güncelle:
    ```php
    $baglanti = new mysqli("localhost", "kullanici_adi", "sifre", "blog");
    ```

6. Tarayıcıda `http://localhost/blog-projesi/index.php` adresine git.

---

## 🧠 Geliştirme İçin Önerilen Özellikler

İleri seviye geliştirme planları:

- 🔐 Kullanıcı girişi ve yetkilendirme
- 📁 Resim yükleme
- 📅 Yayın tarihi
- 💬 Yorum sistemi
- 🔎 Arama & filtreleme
- 🗃️ Kategori sistemi
- 🌗 Karanlık / açık tema geçişi

---

## 🔗 Kaynaklar ve İlham

- [FontAwesome](https://fontawesome.com/)
- [PHP.net](https://www.php.net/manual/tr/)
- [W3Schools PHP CRUD](https://www.w3schools.com/php/php_mysql_crud.asp)
- [TechIstanbul]
---

## 📄 Lisans

Bu proje kişisel ve eğitim amaçlı kullanımlar için geliştirilmiştir. Ticari projelerde kullanmadan önce geliştiriciye danışılması tavsiye edilir.

---
## 🗂️ Dosya Yapısı

```bash
📦 Block Post Management System with PHP
├── index.php → Yazıların listelendiği anasayfa
├── ekle.php → Yeni yazı ekleme formu
├── duzenle.php → Var olan yazıyı düzenleme
├── sil.php → Yazı silme işlemi
├── baglan.php → Veritabanı bağlantısı
└── README.md → Proje açıklama dosyası (bu dosya)
---

## 👨‍💻 Geliştirici

> Ad Soyad: **[Hafize ŞENYIL]**  
> GitHub: [github.com/hafizecim](https://github.com/hafizecim)

---

