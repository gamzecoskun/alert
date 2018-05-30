# alert

Alert modülünü eklemek için öncelikle,

Komut satırında modülümüzü ekleyeceğimiz yere (@vendor/kouosl/) altına geliyoruz. Ardından "git clone https://github.com/gamzecoskun/alert.git" komutunu çalıştırarak modülümüzü projemize indiriyoruz.

Portal dizinindeki "\frontend\config\main.php" dosyasına girerek şu satırları ekliyoruz;

'Alert' => [ 'class' => 'kouosl\Alert\Module'
],

Portal klasörünün içerisindeki composer.json dosyasında gerekli yerlere şu satırları ekliyoruz;

############################

"repositories": [ { .... { "type": "vcs", "url": "https://github.com/gamzecoskun/alert.git" } ],

"require": {

....   
"kouosl/alert": "dev-master"
},

############################

Ekledikten sonra sanal makinaya bağlanarak şu komutları çalıştırıyoruz;

cd /var/www/portal sudo chmod -R 777 vendor/kouosl/alert composer update
   
php yii migrate--migrationPath=@vendor/kouosl/alert/migration
   
Komutunu çalıştırıyoruz böylelikle veritabanımızı oluşturup örnek bir kayıt ekliyoruz.

Modül kurulumu tamamlanmıştır.

http://portal.kouosl/alert buradan modüle ulaşabilirsiniz.



Gamze Çoşkun - 151307020
