<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="200"></p>

## İçerik

- Kullanıcı giriş ve kayıt işlemleri

- Blog için yazı ekleme

- yazı listeleme

- güncelleme

- silme

## Hosting işlemleri

1. Ana Dizinde ```.htaccess``` dosyası oluşturmanız gerekli
```
    <IfModule mod_rewrite.c>
    
    RewriteEngine On
    
    RewriteBase /
    
    RewriteRule ^$ public/index.php [L]
    
    RewriteRule ^((?!public/).*)$ public/$1 [L,NC]
    
    </IfModule>
   ``` 
2. ```.env``` dosyasındaki veri tabanı kullanıcı adı şifre bilgileri doldurulmalı
3. ```bootstrap/cache``` kalsorü hatası verirse cache kalsörünü silip tekrar oluşturun, ayrıca klasörün yazma izni olmalı  

## Eğitim Sponsoru
İstanbul İşletme Enstitüsü
