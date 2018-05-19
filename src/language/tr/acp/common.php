<?php
/** 
*
* acp common [Turkish]
*
* @package language
* @version $Id: common.php,v 1.115 2007/06/11 12:39:50 kellanved Exp $ 
* @copyright (c) 2005 phpBB Group 
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
   exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common
$lang = array_merge($lang, array(
	'ACP_ADMINISTRATORS'		=> 'Yöneticiler',
	'ACP_ADMIN_LOGS'			=> 'Yönetici kayıtları',
	'ACP_ADMIN_ROLES'			=> 'Yönetici rolleri',
	'ACP_ATTACHMENTS'			=> 'Eklentiler',
	'ACP_ATTACHMENT_SETTINGS'	=> 'Eklenti ayarları',
	'ACP_AUTH_SETTINGS'			=> 'Doğrulama',
	'ACP_AUTOMATION'			=> 'Otomasyon',
	'ACP_AVATAR_SETTINGS'		=> 'Avatar ayarları',

	'ACP_BACKUP'				=> 'Yedekleme',
	'ACP_BAN'					=> 'Yasaklama',
	'ACP_BAN_EMAILS'			=> 'E-postaları yasakla',
	'ACP_BAN_IPS'				=> 'IP\'leri yasakla',
	'ACP_BAN_USERNAMES'			=> 'Kullanıcı adlarını Yasakla',
	'ACP_BBCODES'				=> 'BBCode\'lar',
	'ACP_BOARD_CONFIGURATION'	=> 'Mesaj panosu konfigürasyonu',
	'ACP_BOARD_FEATURES'		=> 'Mesaj panosu özellikleri',
	'ACP_BOARD_MANAGEMENT'		=> 'Mesaj panosu yönetimi',
	'ACP_BOARD_SETTINGS'		=> 'Mesaj panosu ayarları',
	'ACP_BOTS'					=> 'Örümcekler/Robotlar',

	'ACP_CAPTCHA'				=> 'CAPTCHA',
	
	'ACP_CAT_DATABASE'			=> 'Veritabanı',
	'ACP_CAT_DOT_MODS'			=> '.MODlar',
	'ACP_CAT_FORUMS'			=> 'Forumlar',
	'ACP_CAT_GENERAL'			=> 'Genel',
	'ACP_CAT_MAINTENANCE'		=> 'Bakım',
	'ACP_CAT_PERMISSIONS'		=> 'İzinler',
	'ACP_CAT_POSTING'			=> 'Mesajlaşma',
	'ACP_CAT_STYLES'			=> 'Stiller',
	'ACP_CAT_SYSTEM'			=> 'Sistem',
	'ACP_CAT_USERGROUP'			=> 'Kullanıcılar ve Gruplar',
	'ACP_CAT_USERS'				=> 'Kullanıcılar',
	'ACP_CLIENT_COMMUNICATION'	=> 'İletişim bağlantıları',
	'ACP_COOKIE_SETTINGS'		=> 'Çerez ayarları',
	'ACP_CRITICAL_LOGS'			=> 'Hata kaydı',
	'ACP_CUSTOM_PROFILE_FIELDS'	=> 'Özel profil alanları',
	
	'ACP_DATABASE'				=> 'Veritabanı yönetimi',
	'ACP_DISALLOW'				=> 'Yasaklama',
	'ACP_DISALLOW_USERNAMES'	=> 'Yasaklı kullanıcı isimleri',
	
	'ACP_EMAIL_SETTINGS'		=> 'E-posta ayarları',
	'ACP_EXTENSION_GROUPS'		=> 'Eklenti gruplarını yönet',
	
	'ACP_FORUM_BASED_PERMISSIONS'	=> 'Forum tabanlı izinler',
	'ACP_FORUM_LOGS'				=> 'Forum kayıtları',
	'ACP_FORUM_MANAGEMENT'			=> 'Forum yönetimi',
	'ACP_FORUM_MODERATORS'			=> 'Forum moderatörleri',
	'ACP_FORUM_PERMISSIONS'			=> 'Forum izinleri',
	'ACP_FORUM_PERMISSIONS_COPY'	=> 'Forum izinlerini kopyala',
	'ACP_FORUM_ROLES'				=> 'Forum rolleri',

	'ACP_GENERAL_CONFIGURATION'		=> 'Genel ayarlar',
	'ACP_GENERAL_TASKS'				=> 'Genel görevler',
	'ACP_GLOBAL_MODERATORS'			=> 'Global moderatörler',
	'ACP_GLOBAL_PERMISSIONS'		=> 'Global izinler',
	'ACP_GROUPS'					=> 'Gruplar',
	'ACP_GROUPS_FORUM_PERMISSIONS'	=> 'Grup forum izinleri',
	'ACP_GROUPS_MANAGE'				=> 'Grupları yönet',
	'ACP_GROUPS_MANAGEMENT'			=> 'Grupların yönetimi',
	'ACP_GROUPS_PERMISSIONS'		=> 'Grupların izinleri',
	
	'ACP_ICONS'					=> 'Başlık ikonları',
	'ACP_ICONS_SMILIES'			=> 'Başlık ikonları/ifadeler',
	'ACP_IMAGESETS'				=> 'Görüntü kümeleri',
	'ACP_INACTIVE_USERS'		=> 'Aktif olmayan kullanıcılar',
	'ACP_INDEX'					=> 'YKP ana sayfa',
	
	'ACP_JABBER_SETTINGS'		=> 'Jabber Ayarları',
	
	'ACP_LANGUAGE'				=> 'Dil yönetimi',
	'ACP_LANGUAGE_PACKS'		=> 'Dil paketleri',
	'ACP_LOAD_SETTINGS'			=> 'Yükleme ayarları',
	'ACP_LOGGING'				=> 'Girişler',
	
	'ACP_MAIN'					=> 'YKP ana sayfa',
	'ACP_MANAGE_EXTENSIONS'		=> 'Eklentileri yönet',
	'ACP_MANAGE_FORUMS'			=> 'Forumları yönet',
	'ACP_MANAGE_RANKS'			=> 'Rütbeleri yönet',
	'ACP_MANAGE_REASONS'		=> 'Bildiri/Yasaklama sebeplerini yönet',
	'ACP_MANAGE_USERS'			=> 'Kullanıcıları yönet',
	'ACP_MASS_EMAIL'			=> 'Toplu e-posta',
	'ACP_MESSAGES'				=> 'Mesajlar',
	'ACP_MESSAGE_SETTINGS'		=> 'Özel mesaj ayarları',
	'ACP_MODULE_MANAGEMENT'		=> 'Modül yönetimi',
	'ACP_MOD_LOGS'				=> 'Moderatör kaydı',
	'ACP_MOD_ROLES'				=> 'Moderatör rolleri',
	
  'ACP_NO_ITEMS'            => 'Henüz hiç bir öge yok.',
	
	'ACP_ORPHAN_ATTACHMENTS'	=> 'Boşta kalmış eklentiler',
	
	'ACP_PERMISSIONS'			=> 'İzinler',
	'ACP_PERMISSION_MASKS'		=> 'İzin maskeleri',
	'ACP_PERMISSION_ROLES'		=> 'İzin rolleri',
	'ACP_PERMISSION_TRACE'		=> 'İzin bulma',
	'ACP_PHP_INFO'				=> 'PHP bilgisi',
	'ACP_POST_SETTINGS'			=> 'Mesaj ayarları',
	'ACP_PRUNE_FORUMS'			=> 'Forumları buda',
	'ACP_PRUNE_USERS'			=> 'Kullanıcıları buda',
	'ACP_PRUNING'				=> 'Budama',
	
	'ACP_QUICK_ACCESS'			=> 'Hızlı erişim',
	
	'ACP_RANKS'					=> 'Rütbeler',
	'ACP_REASONS'				=> 'Bildiri/yasaklama sebepleri',
	'ACP_REGISTER_SETTINGS'		=> 'Kullanıcı kayıt ayarları',

	'ACP_RESTORE'				=> 'Yeniden kur',

	'ACP_FEED'					=> 'Özet Akışı yönetimi',
	'ACP_FEED_SETTINGS'			=> 'Özet Akışı ayarları',
	'ACP_SEARCH'				=> 'Arama ayarları',
	'ACP_SEARCH_INDEX'			=> 'Arama dizini',
	'ACP_SEARCH_SETTINGS'		=> 'Arama ayarları',

	'ACP_SECURITY_SETTINGS'		=> 'Güvenlik ayarları',
	'ACP_SEND_STATISTICS'		=> 'İstatistiksel bilgileri gönder',	
	'ACP_SERVER_CONFIGURATION'	=> 'Sunucu konfigürasyonu',
	'ACP_SERVER_SETTINGS'		=> 'Sunucu ayarları',
	'ACP_SIGNATURE_SETTINGS'	=> 'İmza ayarları',
	'ACP_SMILIES'				=> 'İfadeler',
	'ACP_STYLE_COMPONENTS'		=> 'Stil bileşenleri',
	'ACP_STYLE_MANAGEMENT'		=> 'Stil yönetimi',
	'ACP_STYLES'				=> 'Stiller',
	'ACP_SUBMIT_CHANGES'		=> 'Değişiklikleri uygula',	
	
	'ACP_TEMPLATES'				=> 'Şablonlar',
	'ACP_THEMES'				=> 'Temalar',
	
	'ACP_UPDATE'					=> 'Güncelleme',
	'ACP_USERS_FORUM_PERMISSIONS'	=> 'Kullanıcı forum izinleri',
	'ACP_USERS_LOGS'				=> 'Kullanıcı kayıtları',
	'ACP_USERS_PERMISSIONS'			=> 'Kullanıcı izinleri',
	'ACP_USER_ATTACH'				=> 'Eklentiler',
	'ACP_USER_AVATAR'				=> 'Avatar',
	'ACP_USER_FEEDBACK'				=> 'Geri bildirim',
	'ACP_USER_GROUPS'				=> 'Gruplar',
	'ACP_USER_MANAGEMENT'			=> 'Kullanıcı yönetimi',
	'ACP_USER_OVERVIEW'				=> 'Gözden geçirme',
	'ACP_USER_PERM'					=> 'İzinler',
	'ACP_USER_PREFS'				=> 'Tercihler',
	'ACP_USER_PROFILE'				=> 'Profil',
	'ACP_USER_RANK'					=> 'Rütbe',
	'ACP_USER_ROLES'				=> 'Kullanıcı rolleri',
	'ACP_USER_SECURITY'				=> 'Kullanıcı güvenliği',
	'ACP_USER_SIG'					=> 'İmza',

	'ACP_USER_WARNINGS'				=> 'Uyarılar',

	'ACP_VC_SETTINGS'					=> 'CAPTCHA modül ayarları',
	'ACP_VC_CAPTCHA_DISPLAY'			=> 'CAPTCHA resim önizlemesi',	
	'ACP_VERSION_CHECK'					=> 'Güncellemeleri kontrol et',
	'ACP_VIEW_ADMIN_PERMISSIONS'		=> 'Yönetim izinlerini görüntüle',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS'	=> 'Forum yönetim izinlerini görüntüle',
	'ACP_VIEW_FORUM_PERMISSIONS'		=> 'Forum-tabanlı izinleri görüntüle',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS'	=> 'Global yönetim izinlerini görüntüle',
	'ACP_VIEW_USER_PERMISSIONS'			=> 'Kullanıcı-tabanlı izinleri görüntüle',
	
	'ACP_WORDS'					=> 'Kelime sansürleme',

	'ACTION'				=> 'Eylem',
	'ACTIONS'				=> 'Eylemler',	
	'ACTIVATE'				=> 'Aktif et',
	'ADD'					=> 'Ekle',
	'ADMIN'					=> 'Yönetim',
	'ADMIN_INDEX'			=> 'Yönetim ana sayfa',
	'ADMIN_PANEL'			=> 'Yönetim Kontrol Paneli',
	'ADM_LOGOUT'         => 'YKP&nbsp;Çıkış',
  'ADM_LOGGED_OUT'      => 'Yönetici Kontrol Panelinden başarıyla çıktınız',

	'BACK'					=> 'Geri',

	'COLOUR_SWATCH'			=> 'Web-güvenli renk kuşağı',
	'CONFIG_UPDATED'		=> 'Ayarlar başarıyla güncellendi',

	'DEACTIVATE'				=> 'Deaktifleştir',
	'DIRECTORY_DOES_NOT_EXIST'	=> 'Girilen “%s” isimli yol bulunmuyor.',
	'DIRECTORY_NOT_DIR'			=> 'Girilen “%s” isimli yol bir klasör değil.',
	'DIRECTORY_NOT_WRITABLE'	=> 'Girilen “%s” isimli yol yazılabilir değil.',
	'DISABLE'					=> 'Kapat',
	'DOWNLOAD'					=> 'İndir',
	'DOWNLOAD_AS'				=> 'Farklı Kaydet',
	'DOWNLOAD_STORE'			=> 'İndir ya da dosyayı sakla',
	'DOWNLOAD_STORE_EXPLAIN'	=> 'Dosyayı direkt olarak indirebilir ya da sunucunuzun kayıt/ klasöründe saklayabilirsiniz.',

	'EDIT'					=> 'Düzenle',
	'ENABLE'				=> 'Aç',
	'EXPORT_DOWNLOAD'		=> 'İndir',
	'EXPORT_STORE'			=> 'Sakla',

	'GENERAL_OPTIONS'		=> 'Genel seçenekler',
	'GENERAL_SETTINGS'		=> 'Genel ayarlar',
	'GLOBAL_MASK'			=> 'Global izin maskesi',

	'INSTALL'				=> 'Yükle',
	'IP'					=> 'Kullanıcı IP',
	'IP_HOSTNAME'			=> 'IP adresleri ya da sunucu adları',

	'LOGGED_IN_AS'			=> 'Şu şekilde giriş yaptınız:',
	'LOGIN_ADMIN'			=> 'Mesaj panosunu yönetmek için doğrulanmış bir kullanıcı olmalısınız.',
	'LOGIN_ADMIN_CONFIRM'	=> 'Mesaj panosunu yönetmek için kendinizi yeniden doğrulamalısınız.',
	'LOGIN_ADMIN_SUCCESS'	=> 'Başarıyla doğrulandınız ve şimdi Yönetim Kontrol Paneline yönlendirileceksiniz.',
	'LOOK_UP_FORUM'			=> 'Bir forum seçin',
 	'LOOK_UP_FORUMS_EXPLAIN'=> 'Birden fazla forum seçebilirsiniz.',
 	
	'MANAGE'				=> 'Yönet',
	'MENU_TOGGLE'			=> 'Yan menüyü gizle veya göster',
	'MORE'					=> 'Dahası',			// Not used at the moment
	'MORE_INFORMATION'		=> 'Daha fazla bilgi »',
	'MOVE_DOWN'				=> 'Aşağı taşı',
	'MOVE_UP'				=> 'Yukarı taşı',

	'NOTIFY'				=> 'Bildiri',
	'NO_ADMIN'				=> 'Bu mesaj panosunu yönetmek için yetkiniz yok.',
	'NO_EMAILS_DEFINED'		=> 'Geçerli bir e-posta adresi bulunamadı.',
	'NO_PASSWORD_SUPPLIED'	=> 'Yönetim Kontrol Paneline erişmek için şifrenizi girmelisiniz.',

	'OFF'					=> 'Kapalı',
	'ON'					=> 'Açık',

	'PARSE_BBCODE'			=> 'BBCode kullan',
	'PARSE_SMILIES'			=> 'İfadeleri kullan',
	'PARSE_URLS'			=> 'Bağlantıları kullan',
	'PERMISSIONS_TRANSFERRED'			=> 'İzinler transfer edildi',
	'PERMISSIONS_TRANSFERRED_EXPLAIN'	=> 'Şu an %1$s izinlerine sahipsiniz. Bu kullanıcının izinleri ile mesaj panosuna gözatabilirsiniz, fakat yönetim izinleri transfer edilmediğinden dolayı yönetim kontrol paneline erişilemeyecektir. Herhangi bir zamanda <a href="%2$s"><strong>eski izinlerinize geri dönebilirsiniz</strong></a>.',
	'PIXEL'							=> 'piksel',
	'PROCEED_TO_ACP'		=> '%sYönetim Kontrol Paneline ilerle%s',
	
	'REMIND'				=> 'Hatırlat',
	'RESYNC'				=> 'Yeniden senkronize et',
	'RETURN_TO'				=> 'Buraya dön...',

	'SELECT_ANONYMOUS'		=> 'Misafir kullanıcı seç',
	'SELECT_OPTION'			=> 'Tercih seç',

  'SETTING_TOO_LOW'      => '“%1$s” ayarı için girilen değer çok düşük. En düşük izin verilen değer %2$d.',
  'SETTING_TOO_BIG'      => '“%1$s” ayarı için girilen değer çok büyük. En yüksek izin verilen değer %2$d.',   
  'SETTING_TOO_LONG'      => '“%1$s” ayarı için girilen değer çok uzun. En yüksek izin verilen uzunluk %2$d.',
  'SETTING_TOO_SHORT'      => '“%1$s” ayarı için girilen değer yeterli uzunlukta değil. En düşük izin verilen uzunluk %2$d.',
  'SHOW_ALL_OPERATIONS'	=> 'Tüm işlemleri göster',

	'UCP'					=> 'Kullanıcı Kontrol Paneli',
	'USERNAMES_EXPLAIN'		=> 'Her kullanıcı adını ayrı bir satıra yerleştirin.',
	'USER_CONTROL_PANEL'	=> 'Kullanıcı Kontrol Paneli',

	'WARNING'				=> 'Uyarı',
));

// PHP info
$lang = array_merge($lang, array(
	'ACP_PHP_INFO_EXPLAIN'	=> 'Bu sayfada şu an kullandığınız sunucunuzdaki PHP sürüm bilgisi listelenmiştir. Ayrıca bu sayfada yüklü modüller, varsayılan ayarlar ve var olan değişkenler gibi bilgilerde mevcuttur. Buradaki bilgiler problemleri tanımlamada faydalı olabilir. Bazı hosting firmaları buradaki bilgileri güvenlik gerekçesiyle kısıtlamış olabilir. Bu sayfadaki bilgileri ve detayları, destek forumlarındaki <a href="http://www.phpbb.com/about/team/">resmi takım üyeleri</a> haricindeki kişiler sordukları zaman paylaşmamanız tavsiye edilir.',
	
	'NO_PHPINFO_AVAILABLE'	=> 'PHP ayarlarınız hakkındaki bilgiler belirlenemiyor. Güvenlik sebepleri yüzünden phpinfo() komutu kapatıldı.', 
));

// Logs
$lang = array_merge($lang, array(
	'ACP_ADMIN_LOGS_EXPLAIN'	=> 'Buradaki listede mesaj panosu yöneticilerinin gerçekleştirdiği hareketleri görebilirsiniz. Sıralamayı isme, güne, IP adresine ya da yapılan kayıt hareketine göre yapabilirsiniz. Şayet gerekli yetkiye sahipseniz buradaki bireysel kayıtları ya da tüm kayıt bilgilerini temizleyebilirsiniz.',
	'ACP_CRITICAL_LOGS_EXPLAIN'	=> 'Buradaki listede mesaj panosunun kendi kendine gerçekleştirdiği hareketleri görebilirsiniz. Bu kayıt bilgileri özel mesaj panosu sorunlarını çözmek için imkan sağlar. Örnek verecek olursak, e-posta gönderimi işleminin kullanıcılara ulaşamaması gibi. Sıralamayı isme, güne, IP adresine ya da yapılan kayıt hareketine göre yapabilirsiniz. Şayet gerekli yetkiye sahipseniz buradaki bireysel kayıtları ya da tüm kayıt bilgilerini temizleyebilirsiniz.',
	'ACP_MOD_LOGS_EXPLAIN'		=> 'Buradaki listelerde moderatörler tarafından başlıklar ve mesajlar gibi forumlarda yapılan ve kullanıcılar üzerinde, yasaklamalar dahil yapılan tüm eylemleri görebilirsiniz. Sıralamayı kullanıcı adına, güne, IP adresine ya da eyleme göre yapabilirsiniz. Ayrıca eğer gerekli izinlere sahipseniz buradaki bireysel kayıtları ya da tüm kayıt bilgilerini temizleyebilirsiniz.',
	'ACP_USERS_LOGS_EXPLAIN'	=> 'Buradaki listelerde tüm kullanıcılar tarafından ya da kullanıcılar üzerinde yapılan tüm eylemleri (bildiriler, uyarılar ve kullanıcı notları) görebilirsiniz.',
	'ALL_ENTRIES'				=> 'Tüm girdiler',

	'DISPLAY_LOG'	=> 'Kayıtları öncekilerden itibaren göster',

	'NO_ENTRIES'	=> 'Bu dönem için hiç bir kayıt girdisi yok.',

	'SORT_IP'		=> 'IP adresi',
	'SORT_DATE'		=> 'Gün',
	'SORT_ACTION'	=> 'Kayıt eylemi',
));

// Index page
$lang = array_merge($lang, array(
	'ADMIN_INTRO'				=> 'phpBB\'yi mesaj panosu çözümü olarak seçtiğiniz için teşekkür ederiz. Bu ekranda mesaj panonuzun çeşitli istatistikleri hakkında genel ve kısa bilgiler gösterilir. Sol taraftaki bağlantı ekranında, mesaj panonuzla ilgili özellikleri kontrol etmenize olanak sağlanır. Her bir sayfada bu özellikleri nasıl kullanacağınızı gösteren yönergeler mevcuttur.',
	'ADMIN_LOG'					=> 'Yönetici işlem kayıtları',
	'ADMIN_LOG_INDEX_EXPLAIN'	=> 'Bu bilgi mesaj panosu yöneticisi tarafından gerçekleştirilen son 5 hareketi görmeyi sağlar. Tüm kayıtları görebilmek için sol taraftaki menü öğelerine bakılmalıdır.',
	'AVATAR_DIR_SIZE'			=> 'Avatar klasör büyüklüğü',

	'BOARD_STARTED'		=> 'Mesaj panosu açılış tarihi',
	'BOARD_VERSION'		=> 'Mesaj panosu sürümü',

	'DATABASE_SERVER_INFO'	=> 'Veritabanı sunucusu',	
	'DATABASE_SIZE'			=> 'Veritabanı boyutu',

	'FILES_PER_DAY'		=> 'Günlük ortalama eklentiler',
	'FORUM_STATS'		=> 'Mesaj panosu istatistikleri',

	'GZIP_COMPRESSION'	=> 'Gzip sıkıştırma',

	'NOT_AVAILABLE'		=> 'Mevcut değil',
	'NUMBER_FILES'		=> 'Eklentilerin sayısı',
	'NUMBER_POSTS'		=> 'Mesajların sayısı',
	'NUMBER_TOPICS'		=> 'Başlıkların sayısı',
	'NUMBER_USERS'		=> 'Kullanıcıların sayısı',
	'NUMBER_ORPHAN'		=> 'Boşta kalan eklentiler',

	'POSTS_PER_DAY'		=> 'Günlük ortalama mesaj',

  'PURGE_CACHE'          => 'Önbellek temizliği', 
  'PURGE_CACHE_CONFIRM'   => 'Önbelleği temizlemek istediğinize emin misiniz?', 
  'PURGE_CACHE_EXPLAIN'   => 'Tüm önbellek ile ilgili ögeleri temizler; bu, önbelleklenen herhangi şablon dosyalarını ya da sorgularını kapsar.',
  
  'PURGE_SESSIONS'			=> 'Tüm oturumları temizle',
	'PURGE_SESSIONS_CONFIRM'	=> 'Tüm oturumları temizlemek istediğinizden emin misiniz? Bu işlem tüm kullanıcıların oturumlarını sonlandıracaktır.',
	'PURGE_SESSIONS_EXPLAIN'	=> 'Tüm oturumları temizler. Bu işlem oturum tablosunun boşaltılmasıyla tüm kullanıcıların oturumlarını sonlandırır.',
  
	'RESET_DATE'			=> 'Mesaj panosunun açılış tarihini sıfırla',
	'RESET_DATE_CONFIRM'			=> 'Mesaj panosunun açılış tarihini sıfırlamak istediğinize emin misiniz?',
	'RESET_ONLINE'			=> 'Şimdiye kadar en çok çevrimiçi olanları sıfırla',
	'RESET_ONLINE_CONFIRM'			=> 'Şimdiye kadar en çok çevrimiçi olanlar sayacını sıfırlamak istediğinize emin misiniz?',
	'RESYNC_POSTCOUNTS'		=> 'Mesaj sayaçlarını yeniden senkronize et',
	'RESYNC_POSTCOUNTS_EXPLAIN'		=> 'Sadece varolan mesajlar gözönüne alınacaktır. Budanan mesajlar hesaba katılmayacaktır.',
	'RESYNC_POSTCOUNTS_CONFIRM'		=> 'Mesaj sayaçlarını yeniden senkronize etmek istediğinize emin misiniz?',
	'RESYNC_POST_MARKING'	=> 'Noktalanan başlıkları yeniden senkronize et',
	'RESYNC_POST_MARKING_CONFIRM'	=> 'Noktalanan başlıkları yeniden senkronize etmek istediğinize emin misiniz?',
 	'RESYNC_POST_MARKING_EXPLAIN'	=> 'İlk önce tüm başlıkların işaretleri kaldırılır ve o zaman geçmişteki altı ay içinde herhangi bir aktivite görülen işaretli başlıklar doğru şekilde görüntülenir.',
	'RESYNC_STATS'			=> 'İstatistikleri yeniden senkronize et',
	'RESYNC_STATS_CONFIRM'			=> 'İstatistikleri yeniden senkronize etmek istediğinize emin misiniz?',
 	'RESYNC_STATS_EXPLAIN'			=> 'Mesajların, başlıkların, kullanıcıların ve dosyaların toplam sayısını yeniden hesaplar.',
 	'RUN'							=> 'Şimdi çalıştır',

	'STATISTIC'			=> 'İstatistik',
	'STATISTIC_RESYNC_OPTIONS'	=> 'İstatistikleri sıfırla veya yeniden senkronize et',

	'TOPICS_PER_DAY'	=> 'Günlük ortalama başlık',

	'UPLOAD_DIR_SIZE'	=> 'Gönderilen eklentilerin boyutu',
	'USERS_PER_DAY'		=> 'Günlük ortalama kullanıcı',

	'VALUE'				=> 'Değer',
	'VERSIONCHECK_FAIL'			=> 'En son sürüm bilgisinin alınması başarısız oldu.',
	'VERSIONCHECK_FORCE_UPDATE'	=> 'Sürümü tekrar kontrol et',
	'VIEW_ADMIN_LOG'	=> 'Yönetici kayıtlarını görüntüle',
	'VIEW_INACTIVE_USERS'	=> 'Pasif kullanıcıları görüntüle',
	
	'WELCOME_PHPBB'			=> 'phpBB\'ye Hoş Geldiniz',
	'WRITABLE_CONFIG'      => 'Ayar dosyanız (config.php) şu anda genel-yazılabilir (world-writable) şeklindedir. Bu dosyanın izinlerini 640 olarak ya da en az 644 olarak değiştirmenizi şiddetle öneriyoruz (örnek: <a href="http://en.wikipedia.org/wiki/Chmod" rel="external">chmod</a> 640 config.php).',
));

// Inactive Users
$lang = array_merge($lang, array(
	'INACTIVE_DATE'					=> 'Pasiflik tarihi',
	'INACTIVE_REASON'				=> 'Sebep',
	'INACTIVE_REASON_MANUAL'		=> 'Hesap, yönetici tarafından deaktif edildi',
	'INACTIVE_REASON_PROFILE'		=> 'Profil bilgileri değiştirildi',
	'INACTIVE_REASON_REGISTER'		=> 'Yeni kayıt edilmiş hesap',
	'INACTIVE_REASON_REMIND'		=> 'Kullanıcı hesabı yeniden aktivasyonu zorunlu tutuldu',
	'INACTIVE_REASON_UNKNOWN'		=> 'Bilinmiyor',
	'INACTIVE_USERS'				=> 'Pasif kullanıcılar',
	'INACTIVE_USERS_EXPLAIN'		=> 'Bu liste, kayıt olmuş fakat hesapları aktif olmayan kullanıcıların bir listesidir. Eğer isterseniz bu kullanıcıları aktif edebilir, silebilir ya da hatırlatma (bir e-posta yoluyla) yapabilirsiniz.',
	'INACTIVE_USERS_EXPLAIN_INDEX'	=> 'Bu liste, aktif olmayan hesaplara sahip en son kayıt olan 10 kullanıcının bir listesidir. Tam bir listeyi uygun menü ögesinden görebilirsiniz ya da eğer isterseniz altlarındaki bağlantıyı izleyerek bu kullanıcıları aktif edebilir, silebilir ya da hatırlatma (bir e-posta yoluyla) yapabilirsiniz.',

	'NO_INACTIVE_USERS'	=> 'Pasif kullanıcı yok',

	'SORT_INACTIVE'		=> 'Pasiflik tarihi',
	'SORT_LAST_VISIT'	=> 'Son ziyaret',
	'SORT_REASON'		=> 'Sebep',
	'SORT_REG_DATE'		=> 'Kayıt tarihi',
	'SORT_LAST_REMINDER'=> 'Son hatırlatılan',
	'SORT_REMINDER'		=> 'Gönderilen hatırlatıcı',
	
	'USER_IS_INACTIVE'		=> 'Kullanıcı aktif değil',
));

// Send statistics page
$lang = array_merge($lang, array(
	'EXPLAIN_SEND_STATISTICS'	=> 'İstatistiksel analiz için lütfen phpBB\'ye sunucunuz ve mesaj panosu ayarlarınız hakkındaki bilgileri gönderiniz. Sizi ve web sitenizi temsil edebilecek tüm bilgiler çıkarılmış olacaktır - Veriler tamamen <strong>anonim</strong> olacaktır. Gelecek phpBB sürümleri hakkında bu bilgilerden yola çıkarak kararlar alacağız. İstatistikler herkesin erişebileceği şekildedir. Biz bu verileri phpBB\'nin programlama dili olan PHP projesiyle de paylaşacağız.',
	'EXPLAIN_SHOW_STATISTICS'	=> 'Aşağıdaki butonu kullanarak gönderilecek tüm değişkenlerin önizlemesine ulaşabilirsiniz.',
	'DONT_SEND_STATISTICS'		=> 'Eğer istatistiksel bilgileri phpBB\'ye göndermek istemiyorsanız YKP\'ye dönün.',
	'GO_ACP_MAIN'				=> 'YKP başlangıç sayfasına git',
	'HIDE_STATISTICS'			=> 'Ayrıntıları gizle',
	'SEND_STATISTICS'			=> 'İstatistiksel bilgileri gönder',
	'SHOW_STATISTICS'			=> 'Ayrıntıları göster',
	'THANKS_SEND_STATISTICS'	=> 'Bilgilerinizi gönderdiğiniz için teşekkürler.',
));

// Log Entries
$lang = array_merge($lang, array(
	'LOG_ACL_ADD_USER_GLOBAL_U_'		=> '<strong>Kullanıcıların kullanıcı izinleri eklendi ya da düzenlendi</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_U_'		=> '<strong>Grupların kullanıcı izinleri eklendi ya da düzenlendi</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_M_'		=> '<strong>Kullanıcıların global moderatör izinleri eklendi ya da düzenlendi</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_M_'		=> '<strong>Grupların global moderatör izinleri eklendi ya da düzenlendi</strong><br />» %s',
	'LOG_ACL_ADD_USER_GLOBAL_A_'		=> '<strong>Kullanıcıların yönetici yetkileri eklendi ya da düzenlendi</strong><br />» %s',
	'LOG_ACL_ADD_GROUP_GLOBAL_A_'		=> '<strong>Grupların yönetici yetkileri eklendi ya da düzenlendi</strong><br />» %s',

	'LOG_ACL_ADD_ADMIN_GLOBAL_A_'		=> '<strong>Yöneticiler eklendi ya da düzenlendi</strong><br />» %s',
	'LOG_ACL_ADD_MOD_GLOBAL_M_'			=> '<strong>Global Moderatörler eklendi ya da düzenlendi</strong><br />» %s',

	'LOG_ACL_ADD_USER_LOCAL_F_'			=> '<strong>Kullanıcıların forum erişimleri eklendi ya da düzenlendi</strong> değişen yeri %1$s<br />» %2$s',
	'LOG_ACL_ADD_USER_LOCAL_M_'			=> '<strong>Kullanıcıların forum moderatör erişimleri eklendi ya da düzenlendi</strong> değişen yeri %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_F_'		=> '<strong>Grupların forum erişimleri eklendi ya da düzenlendi</strong> değişen yeri %1$s<br />» %2$s',
	'LOG_ACL_ADD_GROUP_LOCAL_M_'		=> '<strong>Grupların forum moderatör erişimleri eklendi ya da düzenlendi</strong> değişen yeri %1$s<br />» %2$s',

	'LOG_ACL_ADD_MOD_LOCAL_M_'			=> '<strong>Moderatörler eklendi ya da düzenlendi</strong> değişen yeri %1$s<br />» %2$s',
	'LOG_ACL_ADD_FORUM_LOCAL_F_'		=> '<strong>Forum izinleri eklendi ya da düzenlendi</strong> değişen yeri %1$s<br />» %2$s',

	'LOG_ACL_DEL_ADMIN_GLOBAL_A_'		=> '<strong>Yöneticiler silindi</strong><br />» %s',
	'LOG_ACL_DEL_MOD_GLOBAL_M_'			=> '<strong>Global Moderatörler silindi</strong><br />» %s',
	'LOG_ACL_DEL_MOD_LOCAL_M_'			=> '<strong>Moderatörler silindi</strong> değişen yeri %1$s<br />» %2$s',
	'LOG_ACL_DEL_FORUM_LOCAL_F_'		=> '<strong>Kullanıcı/Grup forum izinleri silindi</strong> değişen yeri %1$s<br />» %2$s',

	'LOG_ACL_TRANSFER_PERMISSIONS'		=> '<strong>İzinlerin yeri transfer edildi</strong><br />» %s',
	'LOG_ACL_RESTORE_PERMISSIONS'		=> '<strong>Kullanılan izinlerin, sonra tekrar kendi izinlerine döndürülmesi</strong><br />» %s',
	
	'LOG_ADMIN_AUTH_FAIL'		=> '<strong>Başarısız yönetici giriş denemesi</strong>',
	'LOG_ADMIN_AUTH_SUCCESS'	=> '<strong>Başarılı yönetici girişi</strong>',
  
 	'LOG_ATTACHMENTS_DELETED'	=> '<strong>Kullanıcı eklentileri silindi</strong><br />» %s',

	'LOG_ATTACH_EXT_ADD'		=> '<strong>Dosya eklenti uzantısı eklendi ya da düzenlendi</strong><br />» %s',
	'LOG_ATTACH_EXT_DEL'		=> '<strong>Dosya eklenti uzantısı kaldırıldı</strong><br />» %s',
	'LOG_ATTACH_EXT_UPDATE'		=> '<strong>Dosya eklenti uzantısı güncellendi</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_ADD'	=> '<strong>Eklenti grubu eklendi</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_EDIT'	=> '<strong>Eklenti grubu düzenlendi</strong><br />» %s',
	'LOG_ATTACH_EXTGROUP_DEL'	=> '<strong>Eklenti grubu kaldırıldı</strong><br />» %s',
	'LOG_ATTACH_FILEUPLOAD'		=> '<strong>Mesaja Sahipsiz Dosya yüklendi</strong><br />» ID %1$d - %2$s',
	'LOG_ATTACH_ORPHAN_DEL'		=> '<strong>Sahipsiz Dosyalar silindi</strong><br />» %s',

	'LOG_BAN_EXCLUDE_USER'	=> '<strong>Kullanıcı yasaktan çıkarıldı</strong> sebebi “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_IP'	=> '<strong>IP adresi yasaktan çıkarıldı</strong> sebebi “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EXCLUDE_EMAIL' => '<strong>E-posta adresi yasaktan çıkarıldı</strong> sebebi “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_USER'			=> '<strong>Kullanıcı yasaklandı</strong> sebebi “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_IP'			=> '<strong>IP yasaklandı</strong> sebebi “<em>%1$s</em>”<br />» %2$s',
	'LOG_BAN_EMAIL'			=> '<strong>E-posta yasaklandı</strong> sebebi “<em>%1$s</em>”<br />» %2$s',
	'LOG_UNBAN_USER'		=> '<strong>Kullanıcı yasağı kaldırıldı</strong><br />» %s',
	'LOG_UNBAN_IP'			=> '<strong>IP adresi yasağı kaldırıldı</strong><br />» %s',
	'LOG_UNBAN_EMAIL'		=> '<strong>E-posta yasağı kaldırıldı</strong><br />» %s',

	'LOG_BBCODE_ADD'		=> '<strong>Yeni BBCode eklendi</strong><br />» %s',
	'LOG_BBCODE_EDIT'		=> '<strong>BBCode düzenlendi</strong><br />» %s',
	'LOG_BBCODE_DELETE'		=> '<strong>BBCode silindi</strong><br />» %s',

	'LOG_BOT_ADDED'		=> '<strong>Yeni bot eklendi</strong><br />» %s',
	'LOG_BOT_DELETE'	=> '<strong>Bot silindi</strong><br />» %s',
	'LOG_BOT_UPDATED'	=> '<strong>Var olan bot güncellendi</strong><br />» %s',

	'LOG_CLEAR_ADMIN'		=> '<strong>Yönetici kaydı temizlendi</strong>',
	'LOG_CLEAR_CRITICAL'	=> '<strong>Hata kaydı temizlendi</strong>',
	'LOG_CLEAR_MOD'			=> '<strong>Moderatör kaydı temizlendi</strong>',
	'LOG_CLEAR_USER'		=> '<strong>Kullanıcı kaydı temizlendi</strong><br />» %s',
	'LOG_CLEAR_USERS'		=> '<strong>Kullanıcı kayıtları temizlendi</strong>',

	'LOG_CONFIG_ATTACH'			=> '<strong>Eklenti ayarları değiştirildi</strong>',
	'LOG_CONFIG_AUTH'			=> '<strong>Yetkilendirme ayarları değiştirildi</strong>',
	'LOG_CONFIG_AVATAR'			=> '<strong>Avatar ayarları değiştirildi</strong>',
	'LOG_CONFIG_COOKIE'			=> '<strong>Çerez ayarları değiştirildi</strong>',
	'LOG_CONFIG_EMAIL'			=> '<strong>E-posta ayarları değiştirildi</strong>',
	'LOG_CONFIG_FEATURES'		=> '<strong>Mesaj panosu ayarları değiştirildi</strong>',
	'LOG_CONFIG_LOAD'			=> '<strong>Yükleme ayarları değiştirildi</strong>',
	'LOG_CONFIG_MESSAGE'		=> '<strong>Özel mesaj ayarları değiştirildi</strong>',
	'LOG_CONFIG_POST'			=> '<strong>Mesaj ayarları değiştirildi</strong>',
	'LOG_CONFIG_REGISTRATION'	=> '<strong>Kullanıcı kayıt ayarları değiştirildi</strong>',
	'LOG_CONFIG_FEED'			=> '<strong>Özet Akışı yayın ayarları değiştirildi</strong>',
	'LOG_CONFIG_SEARCH'			=> '<strong>Arama ayarları değiştirildi</strong>',
	'LOG_CONFIG_SECURITY'		=> '<strong>Güvenlik ayarları değiştirildi</strong>',
	'LOG_CONFIG_SERVER'			=> '<strong>Sunucu ayarları değiştirildi</strong>',
	'LOG_CONFIG_SETTINGS'		=> '<strong>Mesaj panosu ayarları değiştirildi</strong>',
	'LOG_CONFIG_SIGNATURE'		=> '<strong>İmza ayarları değiştirildi</strong>',
	'LOG_CONFIG_VISUAL'			=> '<strong>Görsel doğrulama ayarları değiştirildi</strong>',

	'LOG_APPROVE_TOPIC'			=> '<strong>Başlık onaylandı</strong><br />» %s',
	'LOG_BUMP_TOPIC'			=> '<strong>Kullanıcı başlığı darbelendi</strong><br />» %s',
	'LOG_DELETE_POST'			=> '<strong>Mesaj silindi</strong><br />» %s',
  'LOG_DELETE_SHADOW_TOPIC'   => '<strong>Gölgeli başlık silindi</strong><br />» %s',
  'LOG_DELETE_TOPIC'         => '<strong>Başlık silindi</strong><br />» %s',
  'LOG_FORK'               => '<strong>Başlık kopyalandı</strong><br />» şuradan: %s',
  'LOG_LOCK'               => '<strong>Başlık kilitlendi</strong><br />» %s',
  'LOG_LOCK_POST'            => '<strong>Mesaj kilitlendi</strong><br />» %s',
  'LOG_MERGE'               => '<strong>Mesajlar birleştirildi</strong> ve başlık içerisine alındı<br />» %s',
  'LOG_MOVE'               => '<strong>Başlık taşındı</strong><br />» şuradan: %1$s şuraya: %2$s',
  'LOG_PM_REPORT_CLOSED'		=> '<strong>ÖM bildirisi kapatıldı</strong><br />» %s',
	'LOG_PM_REPORT_DELETED'		=> '<strong>ÖM bildirisi silindi</strong><br />» %s',
	'LOG_POST_APPROVED'   => '<strong>Mesaj onaylandı</strong><br />» %s', 
	'LOG_POST_DISAPPROVED'  => '<strong>“%1$s” isimli mesaj izleyen sebepten dolayı onaylanmadı</strong><br />» %2$s',
	'LOG_POST_EDITED'     => '<strong>“%1$s” isimli mesaj düzenlendi, yazarı</strong><br />» %2$s',
	'LOG_REPORT_CLOSED'   => '<strong>Bildiri kapatıldı</strong><br />» %s', 
  'LOG_REPORT_DELETED'  => '<strong>Bildiri silindi</strong><br />» %s',
 	'LOG_SPLIT_DESTINATION'		=> '<strong>Bölünen mesajlar taşındı</strong><br />» şuraya %s',
 	'LOG_SPLIT_SOURCE'			=> '<strong>Mesajlar bölündü</strong><br />» şuradan %s',
 	
	'LOG_TOPIC_APPROVED'   => '<strong>Başlık onaylandı</strong><br />» %s', 
  'LOG_TOPIC_DISAPPROVED' => '<strong>“%1$s” isimli başlık şu sebepten dolayı onaylanmadı</strong><br />%2$s',
	'LOG_TOPIC_RESYNC'			=> '<strong>Başlık sayaçları yeniden senkronize edildi</strong><br />» %s',
	'LOG_TOPIC_TYPE_CHANGED'	=> '<strong>Başlık tipi değiştirildi</strong><br />» %s',
	'LOG_UNLOCK'				=> '<strong>Başlığın kilidi açıldı</strong><br />» %s',
	'LOG_UNLOCK_POST'			=> '<strong>Mesajın kilidi açıldı</strong><br />» %s',

	'LOG_DISALLOW_ADD'		=> '<strong>İzin verilmeyen kullanıcı isimlerine ekleme yapıldı</strong><br />» %s',
	'LOG_DISALLOW_DELETE'	=> '<strong>İzin verilmeyen kullanıcı isimlerinden silme işlemi yapıldı</strong>',

	'LOG_DB_BACKUP'			=> '<strong>Veritabanı yedeklendi</strong>',
	'LOG_DB_DELETE'     => '<strong>Veritabanı yedeği silindi</strong>',
	'LOG_DB_RESTORE'    => '<strong>Veritabanı yedeği geri yüklendi</strong>',

	'LOG_DOWNLOAD_EXCLUDE_IP'	=> '<strong>IP/Sunucu adı indirme listesinin dışında bırakıldı</strong><br />» %s',
	'LOG_DOWNLOAD_IP'			=> '<strong>IP/Sunucu adı indirme listesine eklendi</strong><br />» %s',
	'LOG_DOWNLOAD_REMOVE_IP'	=> '<strong>IP/Sunucu adı indirme listesinden silindi</strong><br />» %s',

	'LOG_ERROR_JABBER'		=> '<strong>Jabber hatası</strong><br />» %s',
	'LOG_ERROR_EMAIL'		=> '<strong>E-posta hatası</strong><br />» %s',
	
	'LOG_FORUM_ADD'							=> '<strong>Yeni forum oluşturuldu</strong><br />» %s',
	'LOG_FORUM_COPIED_PERMISSIONS'			=> '<strong>Forum izinleri şuradan kopyalandı</strong>: %1$s<br />» %2$s',
	'LOG_FORUM_DEL_FORUM'					=> '<strong>Forum silindi</strong><br />» %s',
	'LOG_FORUM_DEL_FORUMS'					=> '<strong>Forum alt forumlarıyla birlikte silindi</strong><br />» %s',
	'LOG_FORUM_DEL_MOVE_FORUMS'				=> '<strong>Forum alt forumlarıyla birlikte taşındı </strong> altforumlar %1$s adresine taşındı<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS'				=> '<strong>Forum silindi ve mesajlar taşındı </strong> mesajlar %1$s adresine taşındı<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_FORUMS'		=> '<strong>Forum alt forumlarıyla birlikte silindi ve mesajlar taşındı </strong> mesajlar %1$s adresine taşındı<br />» %2$s',
	'LOG_FORUM_DEL_MOVE_POSTS_MOVE_FORUMS'	=> '<strong>Forum silindi, mesajlar taşındı</strong> mesajlar %1$s adresine taşındı <strong>ve altforumlar taşındı</strong> alt forumlar %2$s taşındı<br />» %3$s',
	'LOG_FORUM_DEL_POSTS'					=> '<strong>Forum, mesajları ile birlikte silindi</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_FORUMS'			=> '<strong>Forum, mesajları ve alt forumlarıyla birlikte silindi</strong><br />» %s',
	'LOG_FORUM_DEL_POSTS_MOVE_FORUMS'		=> '<strong>Forum mesajları ile birlikte silindi, alt forumları ise taşındı</strong> alt forumlar %1$s adresine taşındı<br />» %2$s',
	'LOG_FORUM_EDIT'						=> '<strong>Forum bilgileri düzenlendi</strong><br />» %s',
	'LOG_FORUM_MOVE_DOWN'					=> '<strong>Forum taşındı</strong> %1$s yerinden <strong>aşağı</strong> %2$s',
	'LOG_FORUM_MOVE_UP'						=> '<strong>Forum taşındı</strong> %1$s yerinden <strong>yukarı</strong> %2$s',
	'LOG_FORUM_SYNC'						=> '<strong>Forum yeniden senkronize edildi</strong><br />» %s',
	'LOG_GENERAL_ERROR'	=> '<strong>Genel bir hata oluştu</strong>: %1$s <br />» %2$s',

	'LOG_GROUP_CREATED'		=> '<strong>Yeni kullanıcı grubu yaratıldı</strong><br />» %s',
	'LOG_GROUP_DEFAULTS'	=> '<strong>“%1$s” grubu, üyeler için varsayılan yapıldı</strong><br />» %2$s',
	'LOG_GROUP_DELETE'		=> '<strong>Kullanıcı Grubu silindi</strong><br />» %s',
	'LOG_GROUP_DEMOTED'		=> '<strong>Liderlerin Kullanıcı Grubundaki rütbesi alındı</strong> %1$s<br />» %2$s',
	'LOG_GROUP_PROMOTED'	=> '<strong>Üyelerin Kullanıcı Grubundaki rütbeleri yükseltildi</strong> %1$s<br />» %2$s',
	'LOG_GROUP_REMOVE'		=> '<strong>Üyeler Kullanıcı Grubundan silindi</strong> %1$s<br />» %2$s',
	'LOG_GROUP_UPDATED'		=> '<strong>Kullanıcı Grubu bilgileri güncellendi</strong><br />» %s',
	'LOG_MODS_ADDED'		=> '<strong>Kullanıcı Grubuna yeni liderler eklendi</strong> %1$s<br />» %2$s',
	'LOG_USERS_ADDED'		=> '<strong>Kullanıcı Grubuna yeni üyeler eklendi</strong> %1$s<br />» %2$s',
	'LOG_USERS_APPROVED'	=> '<strong>Kullanıcılar kullanıcı gruplarında onaylandı</strong> %1$s<br />» %2$s',
	'LOG_USERS_PENDING'		=> '<strong>Kullanıcılar “%1$s” grubuna katılmayı istedi ve onaylanması gerekiyor</strong><br />» %2$s',

	'LOG_IMAGE_GENERATION_ERROR'	=> '<strong>Resim oluşturulurken hata</strong><br />» Hata %1$s içinde %2$s satırında: %3$s',

	'LOG_IMAGESET_ADD_DB'		=> '<strong>Veritabanına yeni görüntü kümesi eklendi</strong><br />» %s',
	'LOG_IMAGESET_ADD_FS'		=> '<strong>Dosya sistemine yeni görüntü kümesi eklendi</strong><br />» %s',
	'LOG_IMAGESET_DELETE'		=> '<strong>Görüntü kümesi silindi</strong><br />» %s',
	'LOG_IMAGESET_EDIT_DETAILS'	=> '<strong>Görüntü kümesi bilgileri düzenlendi</strong><br />» %s',
	'LOG_IMAGESET_EDIT'			=> '<strong>Görüntü kümesi düzenlendi</strong><br />» %s',
	'LOG_IMAGESET_EXPORT'		=> '<strong>Görüntü kümesi dışarı aktarıldı</strong><br />» %s',
	'LOG_IMAGESET_LANG_MISSING'		=> '<strong>“%2$s” kısmındaki görüntü kümesi kayboldu</strong><br />» %1$s',
	'LOG_IMAGESET_LANG_REFRESHED'   => '<strong>Görüntü kümesinin “%2$s” kısmı yenilendi</strong><br />» %1$s',
	'LOG_IMAGESET_REFRESHED'	=> '<strong>Görüntü kümesi yenilendi</strong><br />» %s',
	
	'LOG_INACTIVE_ACTIVATE'	=> '<strong>Aktif olmayan kullanıcılar aktif edildi</strong><br />» %s',
	'LOG_INACTIVE_DELETE'		=> '<strong>Aktif olmayan kullanıcılar silindi</strong><br />» %s',
	'LOG_INACTIVE_REMIND'		=> '<strong>Aktif olmayan kullanıcılara hatırlatma e-postası gönderildi</strong><br />» %s',
	'LOG_INSTALL_CONVERTED'	=> '<strong>Kurulumdaki %1$s phpBB yapısından %2$s yapısına değer dönüştürüldü</strong>',	
	'LOG_INSTALL_INSTALLED'	=> '<strong>phpBB kuruldu %s</strong>',

	'LOG_IP_BROWSER_FORWARDED_CHECK'	=> '<strong>Oturum IP/Tarayıcı/X_FORWARDED_FOR kontrolü başarısız oldu</strong><br />»Kullanıcı IP adresi “<em>%1$s</em>” oturuma karşı kontrol edilen IP adresi “<em>%2$s</em>” ve kullanıcı tarayıcısı bağı “<em>%3$s</em>” oturum tarayıcısına karşı kontrol edilen bağ “<em>%4$s</em>” ve kullanıcı X_FORWARDED_FOR bağı “<em>%5$s</em>” X_FORWARDED_FOR oturumuna karşı kontrol edilen bağ “<em>%6$s</em>”.',

	'LOG_JAB_CHANGED'			=> '<strong>Jabber hesapları değiştirildi</strong>',
	'LOG_JAB_PASSCHG'			=> '<strong>Jabber şifresi değiştirildi</strong>',
	'LOG_JAB_REGISTER'			=> '<strong>Jabber hesapları kaydedildi</strong>',
	'LOG_JAB_SETTINGS_CHANGED'	=> '<strong>Jabber ayarları değiştirildi</strong>',

	'LOG_LANGUAGE_PACK_DELETED'		=> '<strong>Dil paketi silindi</strong><br />» %s',
	'LOG_LANGUAGE_PACK_INSTALLED'	=> '<strong>Dil paketi kuruldu</strong><br />» %s',
	'LOG_LANGUAGE_PACK_UPDATED'		=> '<strong>Dil paketi bilgileri güncellendi</strong><br />» %s',
	'LOG_LANGUAGE_FILE_REPLACED'	=> '<strong>Dil dosyası değiştirildi</strong><br />» %s',
	'LOG_LANGUAGE_FILE_SUBMITTED'	=> '<strong>Dil dosyası eklendi ve store klasörüne yerleştirildi</strong><br />» %s',

	'LOG_MASS_EMAIL'		=> '<strong>Toplu e-posta gönderildi</strong><br />» %s',

	'LOG_MCP_CHANGE_POSTER'	=> '<strong>“%1$s” başlığındaki yazar değiştirildi</strong><br />» %2$s kullanıcı adlı yazardan %3$s kullanıcı adlı yazara değiştirildi',

	'LOG_MODULE_DISABLE'	=> '<strong>Modül kapatıldı</strong><br />» %s',
	'LOG_MODULE_ENABLE'		=> '<strong>Modül açıldı</strong><br />» %s',
	'LOG_MODULE_MOVE_DOWN'	=> '<strong>Modül aşağı taşındı</strong><br />» %1$s altına %2$s',
	'LOG_MODULE_MOVE_UP'	=> '<strong>Modül yukarı taşındı</strong><br />» %1$s üstüne %2$s',
	'LOG_MODULE_REMOVED'	=> '<strong>Modül silindi</strong><br />» %s',
	'LOG_MODULE_ADD'		=> '<strong>Modül eklendi</strong><br />» %s',
	'LOG_MODULE_EDIT'		=> '<strong>Modül düzenlendi</strong><br />» %s',

	'LOG_A_ROLE_ADD'		=> '<strong>Yönetici Rolü eklendi</strong><br />» %s',
	'LOG_A_ROLE_EDIT'		=> '<strong>Yönetici Rolü düzenlendi</strong><br />» %s',
	'LOG_A_ROLE_REMOVED'	=> '<strong>Yönetici Rolü silindi</strong><br />» %s',
	'LOG_F_ROLE_ADD'		=> '<strong>Forum Rolü eklendi</strong><br />» %s',
	'LOG_F_ROLE_EDIT'		=> '<strong>Forum Rolü düzenlendi</strong><br />» %s',
	'LOG_F_ROLE_REMOVED'	=> '<strong>Forum Rolü kaldırıldı</strong><br />» %s',
	'LOG_M_ROLE_ADD'		=> '<strong>Moderatör Rolü eklendi</strong><br />» %s',
	'LOG_M_ROLE_EDIT'		=> '<strong>Moderatör Rolü düzenlendi</strong><br />» %s',
	'LOG_M_ROLE_REMOVED'	=> '<strong>Moderatör Rolü silindi</strong><br />» %s',
	'LOG_U_ROLE_ADD'		=> '<strong>Kullanıcı Rolü eklendi</strong><br />» %s',
	'LOG_U_ROLE_EDIT'		=> '<strong>Kullanıcı Rolü düzenlendi</strong><br />» %s',
	'LOG_U_ROLE_REMOVED'	=> '<strong>Kullanıcı Rolü silindi</strong><br />» %s',

	'LOG_PROFILE_FIELD_ACTIVATE'	=> '<strong>Profil alanı aktif edildi</strong><br />» %s',
	'LOG_PROFILE_FIELD_CREATE'		=> '<strong>Profil alanı eklendi</strong><br />» %s',
	'LOG_PROFILE_FIELD_DEACTIVATE'	=> '<strong>Profil alanı pasif edildi</strong><br />» %s',
	'LOG_PROFILE_FIELD_EDIT'		=> '<strong>Profil alanı değiştirildi</strong><br />» %s',
	'LOG_PROFILE_FIELD_REMOVED'		=> '<strong>Profil alanı silindi</strong><br />» %s',

	'LOG_PRUNE'					=> '<strong>Forumlar budandı</strong><br />» %s',
	'LOG_AUTO_PRUNE'			=> '<strong>Forumlar otomatik budandı</strong><br />» %s',
	'LOG_PRUNE_USER_DEAC'		=> '<strong>Kullanıcılar deaktif edildi</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_DEL'	=> '<strong>Kullanıcılar budandı ve mesajlar silindi</strong><br />» %s',
	'LOG_PRUNE_USER_DEL_ANON'	=> '<strong>Kullanıcılar budandı ve mesajlar tutuldu</strong><br />» %s',
	
	'LOG_PURGE_CACHE'    => '<strong>Önbellek temizlendi</strong>',
	'LOG_PURGE_SESSIONS'		=> '<strong>Oturumlar temizlendi</strong>',
	
 	'LOG_RANK_ADDED'		=> '<strong>Yeni rütbe eklendi</strong><br />» %s',
 	'LOG_RANK_REMOVED'		=> '<strong>Rütbe silindi</strong><br />» %s',
 	'LOG_RANK_UPDATED'		=> '<strong>Rütbe güncellendi</strong><br />» %s',

	'LOG_REASON_ADDED'		=> '<strong>Bildiri/yasaklama sebebi eklendi</strong><br />» %s',
	'LOG_REASON_REMOVED'	=> '<strong>Bildiri/yasaklama sebebi silindi</strong><br />» %s',
	'LOG_REASON_UPDATED'	=> '<strong>Bildiri/yasaklama sebebi güncellendi</strong><br />» %s',
	'LOG_REFERER_INVALID'      => '<strong>Referer doğrulaması başarısız oldu</strong><br />»Referer, “<em>%1$s</em>” olarak görüldü. İstek kabul edilmedi ve oturum sonlandırıldı.',

	'LOG_RESET_DATE'			=> '<strong>Mesaj panosu açılış tarihi değeri sıfırlandı</strong>',
	'LOG_RESET_ONLINE'			=> '<strong>En çok çevrimiçi olan kullanıcılar değeri sıfırlandı</strong>',
	'LOG_RESYNC_POSTCOUNTS'		=> '<strong>Kullanıcı mesaj sayacı yeniden senkronize edildi</strong>',
	'LOG_RESYNC_POST_MARKING'	=> '<strong>İşaretli başlıklar yeniden senkronize edildi</strong>',
	'LOG_RESYNC_STATS'			=> '<strong>Mesaj, başlık ve kullanıcı istatistikleri yeniden senkronize edildi</strong>',

 	'LOG_SEARCH_INDEX_CREATED'	=> '<strong>Arama indeksi oluşturuldu</strong><br />» %s',
 	'LOG_SEARCH_INDEX_REMOVED'	=> '<strong>Arama indeksi kaldırıldı</strong><br />» %s',
	'LOG_STYLE_ADD'				=> '<strong>Yeni stil eklendi</strong><br />» %s',
	'LOG_STYLE_DELETE'			=> '<strong>Stil silindi</strong><br />» %s',
	'LOG_STYLE_EDIT_DETAILS'	=> '<strong>Stil düzenlendi</strong><br />» %s',
	'LOG_STYLE_EXPORT'			=> '<strong>Stil dışarı aktarıldı</strong><br />» %s',

	'LOG_TEMPLATE_ADD_DB'			=> '<strong>Veritabanına yeni şablon seti eklendi</strong><br />» %s',
	'LOG_TEMPLATE_ADD_FS'			=> '<strong>Dosya sistemine yeni şablon seti eklendi</strong><br />» %s',
	'LOG_TEMPLATE_CACHE_CLEARED'	=> '<strong>Şablon seti <em>%1$s</em> içerisindeki şablon dosyalarının ön belleğe alınan sürümleri silindi</strong><br />» %2$s',
	'LOG_TEMPLATE_DELETE'			=> '<strong>Şablon seti silindi</strong><br />» %s',
	'LOG_TEMPLATE_EDIT'				=> '<strong>Şablon seti düzenlendi <em>%1$s</em></strong><br />» %2$s',
	'LOG_TEMPLATE_EDIT_DETAILS'		=> '<strong>Şablon bilgileri düzenlendi</strong><br />» %s',
	'LOG_TEMPLATE_EXPORT'			=> '<strong>Dışa Aktarılmış şablon seti</strong><br />» %s',
	'LOG_TEMPLATE_REFRESHED'		=> '<strong>Şablon seti yenilendi</strong><br />» %s',

	'LOG_THEME_ADD_DB'			=> '<strong>Veritabanına yeni tema eklendi</strong><br />» %s',
	'LOG_THEME_ADD_FS'			=> '<strong>Dosya sistemine yeni tema eklendi</strong><br />» %s',
	'LOG_THEME_DELETE'			=> '<strong>Tema silindi</strong><br />» %s',
	'LOG_THEME_EDIT_DETAILS'	=> '<strong>Tema bilgileri düzenlendi</strong><br />» %s',
	'LOG_THEME_EDIT'			=> '<strong>Tema düzenlendi <em>%1$s</em></strong>',
	'LOG_THEME_EDIT_FILE'		=> '<strong>Tema düzenlendi <em>%1$s</em></strong><br />» Düzenlenen dosya <em>%2$s</em>',
	'LOG_THEME_EXPORT'			=> '<strong>Tema dışarı aktarıldı</strong><br />» %s',
	'LOG_THEME_REFRESHED'		=> '<strong>Tema yenilendi</strong><br />» %s',
	
 	'LOG_UPDATE_DATABASE'	=> '<strong>Veritabanı %1$s sürümünden %2$s sürümüne güncellendi</strong>',
 	'LOG_UPDATE_PHPBB'		=> '<strong>phpBB %1$s sürümünden %2$s sürümüne güncellendi</strong>', 	
	
	'LOG_USER_ACTIVE'		=> '<strong>Kullanıcı aktif edildi</strong><br />» %s',
	'LOG_USER_BAN_USER'		=> '<strong>Kullanıcı yönetimi yoluyla kullanıcı yasaklandı.</strong> Nedeni: “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_IP'		=> '<strong>Kullanıcı yönetimi yoluyla IP yasaklandı.</strong> Nedeni: “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_BAN_EMAIL'	=> '<strong>Kullanıcı yönetimi yoluyla e-posta yasaklandı.</strong> Nedeni: “<em>%1$s</em>”<br />» %2$s',
	'LOG_USER_DELETED'		=> '<strong>Kullanıcı silindi</strong><br />» %s',
	'LOG_USER_DEL_ATTACH'	=> '<strong>Kullanıcı tarafından oluşturulan tüm eklenti dosyaları silindi</strong><br />» %s',
	'LOG_USER_DEL_AVATAR'	=> '<strong>Kullanıcı avatarı silindi</strong><br />» %s',
	'LOG_USER_DEL_OUTBOX'	=> '<strong>Kullanıcı giden kutusu boşaltıldı</strong><br />» %s',
	'LOG_USER_DEL_POSTS'	=> '<strong>Kullanıcı tarafından oluşturulan tüm mesajlar silindi</strong><br />» %s',
	'LOG_USER_DEL_SIG'		=> '<strong>Kullanıcı imzası silindi</strong><br />» %s',
	'LOG_USER_INACTIVE'		=> '<strong>Kullanıcı deaktif edildi</strong><br />» %s',
	'LOG_USER_MOVE_POSTS'	=> '<strong>Kullanıcı mesajları taşındı</strong><br />» “%1$s” tarafından gönderilen mesajlar “%2$s” forumuna taşındı',
	'LOG_USER_NEW_PASSWORD'	=> '<strong>Kullanıcı şifresi değiştirildi</strong><br />» %s',
	'LOG_USER_REACTIVATE'	=> '<strong>Kullanıcı hesabı yeniden aktivasyon için zorunlu tutuldu</strong><br />» %s',
	'LOG_USER_REMOVED_NR'	=> '<strong>Yeni kayıtlı kullanıcı ibaresi kullanıcıdan alındı</strong><br />» %s',
	'LOG_USER_UPDATE_EMAIL'	=> '<strong>“%1$s” adlı kullanıcının e-posta adresi değiştirildi</strong><br />» “%2$s” olan e-posta adresi “%3$s” olarak değiştirildi',
	'LOG_USER_UPDATE_NAME'	=> '<strong>Kullanıcı adı değiştirildi</strong><br />» “%1$s” olan kullanıcı adı “%2$s” olarak değiştirildi',
	'LOG_USER_USER_UPDATE'	=> '<strong>Kullanıcı bilgileri güncellendi</strong><br />» %s',

	'LOG_USER_ACTIVE_USER'		=> '<strong>Kullanıcı hesabı aktif edildi</strong>',
	'LOG_USER_DEL_AVATAR_USER'	=> '<strong>Kullanıcı avatarı silindi</strong>',
	'LOG_USER_DEL_SIG_USER'		=> '<strong>Kullanıcı imzası silindi</strong>',
	'LOG_USER_FEEDBACK'			=> '<strong>Kullanıcı geri bildirimi eklendi</strong><br />» %s',
	'LOG_USER_GENERAL'			=> '<strong>Girdi eklendi:</strong><br />» %s',
	'LOG_USER_INACTIVE_USER'	=> '<strong>Kullanıcı hesabı deaktif edildi</strong>',
	'LOG_USER_LOCK'				=> '<strong>Kullanıcı kendi başlığını kilitledi</strong><br />» %s',
	'LOG_USER_MOVE_POSTS_USER'	=> '<strong>Tüm mesajlar foruma taşındı</strong>» %s',
	'LOG_USER_REACTIVATE_USER'	=> '<strong>Kullanıcı hesabı yeniden aktivasyon için zorunlu tutuldu</strong>',
	'LOG_USER_UNLOCK'			=> '<strong>Kullanıcı kendi başlığının kilidini açtı</strong><br />» %s',
	'LOG_USER_WARNING'			=> '<strong>Kullanıcı uyarısı eklendi</strong><br />»%s',
	'LOG_USER_WARNING_BODY'		=> '<strong>İzlenen uyarı bu kullanıcıya verildi</strong><br />»%s',

	'LOG_USER_GROUP_CHANGE'			=> '<strong>Kullanıcı varsayılan grubunu değiştirdi</strong><br />» %s',
	'LOG_USER_GROUP_DEMOTE'			=> '<strong>Kullanıcının, kullanıcı grubundan liderlik rütbesi düşürüldü</strong><br />» %s',
	'LOG_USER_GROUP_JOIN'			=> '<strong>Kullanıcı gruba katıldı</strong><br />» %s',
	'LOG_USER_GROUP_JOIN_PENDING'	=> '<strong>Kullanıcı gruba katıldı ve onaylanması gerekiyor</strong><br />» %s',
	'LOG_USER_GROUP_RESIGN'			=> '<strong>Kullanıcı grup üyeliğinden ayrıldı</strong><br />» %s',
	
	'LOG_WARNING_DELETED'		=> '<strong>Kullanıcı uyarısı silindi</strong><br />» %s',
	'LOG_WARNINGS_DELETED'		=> '<strong>%2$s kullanıcı uyarısı silindi</strong><br />» %1$s', // Example: '<strong>Deleted 2 user warnings</strong><br />» username'
	'LOG_WARNINGS_DELETED_ALL'	=> '<strong>Tüm kullanıcı uyarıları silindi</strong><br />» %s',

	'LOG_WORD_ADD'			=> '<strong>Kelime sansürü eklendi</strong><br />» %s',
	'LOG_WORD_DELETE'		=> '<strong>Kelime sansürü silindi</strong><br />» %s',
	'LOG_WORD_EDIT'			=> '<strong>Kelime sansürü düzenlendi</strong><br />» %s',
));

// Two language keys with the same text were used in different locations
// LOG_DELETE_TOPIC is the correct one, this line is here so that existing
// log entries are not broken. Ensure it is included in your language file.
$lang['LOG_TOPIC_DELETED'] = $lang['LOG_DELETE_TOPIC'];

?>