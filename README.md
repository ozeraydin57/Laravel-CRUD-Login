<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="200"></p>

## Uygulama Özellikleri

- Kullanıcı giriş ve kayıt işlemleri
- Blog için yazı ekleme
- yazı listeleme
- güncelleme
- silme

## Çalışır Örnek
https://www.oa-laravel-sample-crud-login.ozeraydin.com/

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
İstanbul İşletme Enstitüsü ve Volkan Asildeveci Hocamıza teşekkürlerimizi sunuyorum
