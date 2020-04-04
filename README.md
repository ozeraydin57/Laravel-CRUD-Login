<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="200"></p>

## İçerik

- Kullanıcı giriş ve kayıt işlemleri

- Blog için yazı ekleme

- yazı listeleme

- güncelleme

- silme

## Hosting işlemleri

- Ana Dizinde .htaccess dosayı oluşturmanız gerekli

    <IfModule mod_rewrite.c>
    
    RewriteEngine On
    
    RewriteBase /
    
    RewriteRule ^$ public/index.php [L]
    
    RewriteRule ^((?!public/).*)$ public/$1 [L,NC]
    
    </IfModule>
    

## Eğitim Sponsoru
İstanbul İşletme Enstitüsü
