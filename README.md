# KURULUM

Dosya ile aynı dizine geldikten sonra 

    composer i  

komutu ile bağımlılıkları yükleyin. Daha sonra 

    php artisan key:generate  

komutu ile uygulama keyi oluşturun. 

# VERİTABANI KURULUMU

Ana dizinde bulunan `.env.example` adlı dosyayı `.env` adıyla aynı dizine kopyalayın. Dosyanın içerisinde DB değişkenlerini aşağıdaki gibi değiştiriniz. DB_PASSWORD ve DB_USERNAME sizin bilgisayarınıza göre ayarlanmalıdır.

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=btu_social
    DB_USERNAME=[SİZİN_KULLANICI_ADINIZ]
    DB_PASSWORD=[SİZİN_ŞİFRENİZ]

Daha sonra veritabanına giderek `btu_social` ve utf8mb4_turkish_ci kodlamasıyla veritabanınızı oluşturunuz.  
Ardından deponun ana dizinine geliniz ve aşağıdaki komutu çalıştırınız.

    php artisan migrate

Storage özelliğinin başlatılması için aşağıdaki komutu çalıştırın.

    php artisan storage:link

Uygulamayı başlatmak için

    php artisan serve

komutunu kullanabilirsiniz.


