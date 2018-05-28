# sample
Kocaeli university open source lab yii2 sample module

Alert
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

cd /var/www/portal sudo chmod -R 777 vendor/kouosl/Randevu composer update

Son adım olarakda modülümüzde "migrations" klasöründeki .php uzantılı dosyayı kopyalayıyoruz ve portal dizininde "console/migrations/" altına yapıştırıyoruz(klasör yok ise kendimiz oluşturuyoruz). Ardından sanal makinamızda,

php yii migrate

Komutunu çalıştırıyoruz böylelikle veritabanımızı oluşturup örnek bir kayıt ekliyoruz.

Modül kurulumu tamamlanmıştır.

http://portal.kouosl/alert buradan modüle ulaşabilirsiniz.

Modülü kullanırken tarih formatını yıl-ay-gün şeklinde girilmesi gerekmektedir.

Gamze Çoşkun - 151307020
