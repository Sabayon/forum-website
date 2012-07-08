<?php
/**
*
* install.php [Albanian]
*
* @package language
* @version $Id: $
* @copyright (c) 2008 phpBB Group
* @author 2008-12-01 - www.dea-portal.com
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

$lang = array_merge($lang, array(
	'ADMIN_CONFIG'				=> 'Konfigurimi i Administratorit',
	'ADMIN_PASSWORD'			=> 'Fjalëkalimi i Administratorit',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Konfirmo fjalëkalimin e Administratorit',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Ju lutemi përdorni fjalekalim ndërmjet 6 dhe 30 karaktereve',
	'ADMIN_TEST'				=> 'Kontrollo opsionet e Administratorit',
	'ADMIN_USERNAME'			=> 'Pseudonimi i Administratorit',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Ju lutem përdorni pseudonim ndërmjet 3 dhe 20 karaktereve',
	'APP_MAGICK'				=> 'Suportimi i Imagemagick [ Shtojcat ]',
	'AUTHOR_NOTES'				=> 'Shënimet e autorit<br />» %s',
	'AVAILABLE'					=> 'I disponueshëm',
	'AVAILABLE_CONVERTORS'		=> 'Konvertorë të disponueshëm',
	
	'BEGIN_CONVERT'					=> 'Fillo konvertimin',
	'BLANK_PREFIX_FOUND'			=> 'Nje skanim i tabelave tuaja ka treguar një instalim të vlefshëm pa përdorur prefiks tabelash.',
	'BOARD_NOT_INSTALLED'			=> 'Nuk u gjet asnjë instalim',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Konvertori Framework i Unifikuar i phpBB kërkon një instalim të paracaktuar të phpBB3 për të funksionuar. Ju lutemi që <a href="%s">në fillim të vazhdoni me instalimin e phpBB3</a>.',
	
	'CATEGORY'					=> 'Kategori',
	'CACHE_STORE'				=> 'Lloji i Cache',
	'CACHE_STORE_EXPLAIN'		=> 'Preferohet vendodhja fizike ku ruhen cache.',
	'CAT_CONVERT'				=> 'Konvertimi',
	'CAT_INSTALL'				=> 'Instalimi',
	'CAT_OVERVIEW'				=> 'Rishikimi',
	'CAT_UPDATE'				=> 'Azhornimi',
	'CHANGE'					=> 'Ndrysho',
	'CHECK_TABLE_PREFIX'		=> 'Ju lutemi kontrolloni prefiksin e tabelave tuaja dhe provoni përsëri.',
	'CLEAN_VERIFY'				=> 'Duke pastruar dhe verifikuar strukturen finale.',
	'CLEANING_USERNAMES'		=> 'Duke pastruar pseudonimet',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> është pseudonim i pastër për:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Pseudonime në konflikt me njëri-tjetrin u gjetën në bordin tuaj. Që të kompletoni konvertimin ju lutemi të fshini ose të riemëroni këta përdorues në mënyrë që të jetë vetëm një përdorues në bordin tuaj të vjetër për çdo pseudonim.',
	'COLLIDING_USER'			=> '» id e perdoruesit: <strong>%d</strong> pseudonimi: <strong>%s</strong> (%d postime)',
	'CONFIG_CONVERT'			=> 'Duke konvertuar konfigurimin',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'I pamundur shkrimi i skedarit të konfigurimit. Mënyra të tjera për krijimin e ketij skedari janë dhënë më poshtë.',
	'CONFIG_FILE_WRITTEN'		=> 'Skedari i konfigurimit u shkrua. Tani mund të vazhdoni në hapin tjetër të instalimit.',
	'CONFIG_PHPBB_EMPTY'		=> 'Variabli i konfigurimit të phpBB3 për “%s” është bosh.',
	'CONFIG_RETRY'				=> 'Provo përsëri',
	'CONTACT_EMAIL_CONFIRM'		=> 'Konfirmo e-mail e kontaktit',
	'CONTINUE_CONVERT'			=> 'Vazhdo konvertimin',
	'CONTINUE_CONVERT_BODY'		=> 'Eshtë vënë re një përpjekje e meparshme për konvertim. Ju mund të vendosni të vazhdoni ose te filloni një konvertim të ri.',
	'CONTINUE_LAST'				=> 'Vazhdoni deklatratat e fundit',
	'CONTINUE_OLD_CONVERSION'	=> 'Vazhdo përpjekjen e meparshme për konvertim',
	'CONVERT'					=> 'Konverto',
	'CONVERT_COMPLETE'			=> 'Konvertimi u kompletua',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Ju keni konvertuar me sukses bordin tuaj në phpBB 3.0. Tani mund të identifikoheni dhe <a href="../">hyni në bordin tuaj</a>. Ju lutemi të siguroheni që opsionet u transferuan me korrektësi përpara se të aktivizoni bordin tuaj duke fshirë direktorinë e instalimit. Ju kujtojmë që ndihmë për përdorimin e phpBB mund të gjeni në linjë në <a href="http://www.phpbb.com/support/documentation/3.0/">Dokumentacion</a> dhe <a href="http://www.phpbb.com/community/viewforum.php?f=46">forumet e suportit</a>.',
	'CONVERT_INTRO'				=> 'Mirë se vini në Unified Convertor Framework e phpBB',
	'CONVERT_INTRO_BODY'		=> 'Që këtu, ju keni mundesinë që të importoni të dhëna nga sisteme bordesh të tjerë (të instaluar). Lista e mëposhtme tregon të gjithë modulet e konvertuesve të mundur. Nëse nuk ka asnjë konvertues të shfaqur në listë për softin e bordit nga i cili doni të konvertoni, ju lutemi të kërkoni në faqen tonë për module konvertimi të mundshëm për shkarkim.',
	'CONVERT_NEW_CONVERSION'	=> 'Konvertim i ri',
	'CONVERT_NOT_EXIST'			=> 'Konvertuesi i specifikuar nuk ekziston.',
	'CONVERT_OPTIONS'			=> 'Opsionet',
	'CONVERT_SETTINGS_VERIFIED'	=> 'Informacioni që dhatë u verifikua. Për të filluar procesin e konvertimit, shtypni butonin më poshtë.',
	'CONV_ERR_FATAL'			=> 'Gabim fatal në konvertim',
	
	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Ngarkimi me FTP për shtojcat është i aktivizuar në bordin e vjetër. Ju lutemi të ç\'aktivizoni opsionin e ngarkimit me FTP dhe sigurohuni që nje direktori e vlefshme për ngarkimin të specifikohet, pastaj kopjoni të gjitha skedaret e shtojcave tek direktoria e aksesueshme web. Pasi të keni bërë këtë, ristartoni konvertorin.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Nuk ka asnjë informacion konfigurimi të disponueshëm për këtë konvertim.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'E pamundur marrja e informacionit të aksesit të forumit.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'E pamundur marrja e kategorive.',
	'CONV_ERROR_GET_CONFIG'				=> 'Nuk mund të gjëndet konfigurimi i bordit tuaj.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'I pamundur aksesimi/leximi i “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'E pamundur marrja e informacionit të identifikimit të grupeve.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Mospërputhje në tabelën e grupeve u diktua në add_bots() - ju duhet të shtoni të gjithë grupet speciale, nëse e bëni manualisht.',
	'CONV_ERROR_INSERT_BOT'				=> 'I pamundur shtimi i bot në tabelën e përdoruesve.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'I pamundur shtimi i bot në tabelën e bot.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'I pamundur shtimi i përdoruesve në tabelën user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Gabim i shfaqesit të mesazheve',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Vërejtje për zhvilluesin: ju duhet të specifikoni $konvertuesin[\'avatar_path\'] për të përdorur %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Vendodhja relative e bordit nuk është specifikuar.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Vërejtje për zhvilluesin: you must specify $konvertuesin[\'avatar_gallery_path\'] për të përdorur %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Grupi “%1$s” nuk mund të gjëndet %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Vërejtje për zhvilluesin: ju duhet të specifikoni $konvertuesin[\'ranks_path\'] për të përdorur %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Vërejtje për zhvilluesin: ju duhet të specifikoni $konvertuesin[\'smilies_path\'] për të përdorur %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Vërejtje për zhvilluesin: ju duhet të specifikoni $konvertuesin[\'upload_path\'] për të përdorur %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'I pamundur shtimi/azhornimi i opsioneve të të drejtave.',
	'CONV_ERROR_PM_COUNT'				=> 'E pamundur zgjedhja e numratorit të dosjeve pm.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'I pamundur shtimi i forumit të ri duke zëvendësuar kategorinë e vjetër.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'I pamundur shtimi i forumit të ri duke zëvendësuar forumin e vjetër.',
	'CONV_ERROR_USER_ACCESS'			=> 'E pamundur marrja informacionit per identifikimin e përdoruesit.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Grup i gabuar “%1$s” përcaktuar në %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Kjo faqe mbledh të dhënat e kërkuara për të patur akses në bordin e vjetër. Shkruani detajet e bazës së informacionit; konvertuesi nuk do të ndryshojë gjë në bazën e të dhënave dhënë më poshtë. Bordi i vjetër duhet të jetë i ç\'aktivizuar për të lejuar një konvertim konsistent.',
	'CONV_SAVED_MESSAGES'				=> 'Mesazhet e ruajtura',
	
	'COULD_NOT_COPY'			=> 'I pamundur kopjimi i skedarit <strong>%1$s</strong> në <strong>%2$s</strong><br /><br />Ju lutemi të kontrolloni që direktoria përfundimtare të ekzistojë dhe të jetë e shkruajtshme nga webserveri.',
	'COULD_NOT_FIND_PATH'		=> 'E pamundur gjetja e vendodhjes së bordit tuaj. Ju lutemi të kontrolloni opsionet tuaja dhe të provoni përsëri.<br />» %s u specifikua si vendodhje e burimit.',
	
	'DBMS'						=> 'Lloji i bazës së informacionit',
	'DB_CONFIG'					=> 'Konfigurimi i bazës së informacionit',
	'DB_CONNECTION'				=> 'Lidhja me bazën e informacionit',
	'DB_ERR_INSERT'				=> 'Gabim gjatë proçedimit të <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Gabim gjatë proçedimit të <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Gabim gjatë ekzekutimit të <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Gabim gjatë ekzekutimit të <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Gabim gjatë punimit të <code>SELECT</code>.',
	'DB_HOST'					=> 'Emri i hostit të bazës së informacionit ose DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN do të thotë Data Source Name dhe është relativ vetëm për instalimet ODBC.',
	'DB_NAME'					=> 'Emri i bazës së informacionit',
	'DB_PASSWORD'				=> 'Fjalëkalimii bazës së informacionit',
	'DB_PORT'					=> 'Porta e serverit per bazën e informacionit',
	'DB_PORT_EXPLAIN'			=> 'Lëreni këtë bosh ose plotësojeni vetëm nëse ju dini që serveri juaj operon në një portë jo standarte.',
	'DB_USERNAME'				=> 'Pseudonimi i bazës së informacionit',
	'DB_TEST'					=> 'Testimi i lidhjes',
	'DEFAULT_LANG'				=> 'Gjuha e paracaktuar e bordit',
	'DEFAULT_PREFIX_IS'			=> 'Konvertuesi nuk mundi të gjejë tabela me prefiksin e specifikuar. Sigurohuni që keni shkruar detajet e sakta për bordin që po konvertoni. Prefiksi i paracaktuar i tabelave për %1$s është <strong>%2$s</strong>.',
	'DEV_NO_TEST_FILE'			=> 'Asnjë vlerë nuk është specifikuar për variablin test_file në konvertues. Nëse jeni përdorues i këtij konvertuesi, nuk duhet të jeni duke parë këtë gabim. Ju lutemi të raportoni këtë mesazh autorit të konvertuesit. Nëse jeni autori i konvertuesit, ju duhet të specifikoni emrin e skedarit i cili ekziston në bordin e vjetër për të lejuar vendodhjen që të verifikohet.',
	'DIRECTORIES_AND_FILES'		=> 'Përgatitja e direktorisë dhe skedarëve',
	'DISABLE_KEYS'				=> 'Ç\'aktivizimi i çelsave',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Suporti FTP [ Instalim ]',
	'DLL_GD'					=> 'Suporti grafik GD [ Konfirmimi Vizual ]',
	'DLL_MBSTRING'				=> 'Suporti i karaktereve Multi-byte',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL with MySQLi Extension',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Suporti XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Suporti i kompresioni [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Shkarkimi i konfigurimit',
	'DL_CONFIG_EXPLAIN'			=> 'Ju mund të shkarkoni  config.php në komjuterin tuaj. Më pas do t\'ju duhet të ngarkoni këtë skedar manualisht, duke zëvendësuar skedarin config.php ekzistues në direktorinë phpBB 3.0. Ju kujtojmë që duhet të ngarkoni këtë skedar në formatin ASCII (shikoni opsionet e programit FTP që ju përdorni). Kur të keni ngarkuar skedarin config.php klikoni “OK” për të kaluar në faqen tjetër.',
	'DL_DOWNLOAD'				=> 'Shkarko',
	'DONE'						=> 'OK',
	
	'ENABLE_KEYS'				=> 'Duke riaktivizuar çelësat. Kjo proçedurë mund të zgjasë pak.',
	
	'FILES_OPTIONAL'			=> 'Direktori dhe skedarë opsionale',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Opsionale</strong> - Këto skedarë, direktori ose opsione të drejtash nuk janë të nevojshme. Sistemi i instalimit do të mundohet të përdorë teknika të ndryshme për t\'i krijuar ato nëse nuk mund të shkruhen. Gjithsesi, prezenca e tyre do të shpejtojë instalimin.',
	'FILES_REQUIRED'			=> 'Direktori dhe skedarë',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Të nevojshëm</strong> - Që të funksionojë saktë, phpBB duhet të ketë akses ose të shkruajë disa direktori ose skedarë. Nëse shihni “Nuk u Gjet” ju duhet të krijoni direktoritë ose skedarët përkatës. Nëse shihni “I Pashkruajtshëm” ju duhet të ndryshoni të drejtat për skedarin ose direktorinë për të lejuar phpBB t\'i shkruajë.',
	'FILLING_TABLE'				=> 'Duke shkruar tabelën <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Duke shkruar tabelat',
	'FINAL_STEP'				=> 'Hapi final i proçesit',
	'FORUM_ADDRESS'				=> 'Adresa e bordit',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Kjo është URL e bordit tuaj të vjetër, për shëmbull <samp>http://www.shëmbull.com/phpBB2/</samp>. Nëse këtu shkruhet një adresë dhe nuk lihet bosh çdo rast i kësaj adrese do të zëvendësohet me adresën e re përfshirë mesazhet, mesazhet private dhe firmat.',
	'FORUM_PATH'				=> 'Vendodhja e bordit',
	'FORUM_PATH_EXPLAIN'		=> 'Kjo është vendodhja <strong>relative</strong> në disk e bordit tuaj të vjetër që nga <strong>vendodhja e këtij instalimi phpBB3</strong>.',
	'FOUND'						=> 'U gjet',
	'FTP_CONFIG'				=> 'Konfigurimi i transferimit nga FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB ka diktuar prezencën e modulit FTP në këtë server. Ju mund të instaloni skedarin tuaj config.php nëpërmjet tij nëse dëshironi. Do t\'ju duhet të plotësoni informacionin më poshtë. Vini re që fjalëkalimi dhe pseudonimi janë ata të serverit tuaj!',
	'FTP_PATH'					=> 'Vendodhja FTP',
	'FTP_PATH_EXPLAIN'			=> 'Kjo është vendodhja nga direktoria e trungut në atë të phpBB, p.sh. <samp>htdocs/phpBB3/</samp>.',
	'FTP_UPLOAD'				=> 'Ngarko',
	
	'GPL'						=> 'General Public License',
	
	'INITIAL_CONFIG'			=> 'Konfigurimi bazë',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Tani që instalimi verifikoi që serveri juaj mund të vërë në funksionim phpBB, ju duhet të cilësoni disa informacione. Nëse nuk dini si të lidheni me bazën e informacionit kontaktoni hostin tuaj ose përdorni forumet e suportit të phpBB. Kur shkruani të dhënat, sigurohuni të jenë të sakta para se të vazhdoni.',
	'INSTALL_CONGRATS'			=> 'Urime!',
	'INSTALL_CONGRATS_EXPLAIN'	=> '		<p>Ju keni instaluar me sukses phpBB %1$s. Tani, ju keni dy opsione se çfarë mund të bëni me këtë instalim të ri phpBB3:</p>
		<h2>Konvertoni një bord ekzistues në phpBB3</h2>
		<p>Unified Convertor Framework i phpBB suporton konvertimin e phpBB 2.0.x dhe sistemeve të bordeve të tjera në phpBB3. Nëse keni një bord ekzistues që doni të konvertoni, ju lutemi <a href="%2$s"> vazhdoni tek konvertuesi</a>.</p>
		<h2>Shkoni tani tek instalimi juaj phpBB3!</h2>
		<p>Klikimi i butonit të mëposhtëm do t\'ju çojë në Panelin e Administratorit (ACP). Kaloni pak kohë duke parë opsionet e mundshme për ju. Ju kujtojmë që ndihma është e mundur në linjë nëpërmjet <a href="http://www.phpbb.com/support/documentation/3.0/">Dokumentacioni</a> dhe <a href="http://www.phpbb.com/community/viewforum.php?f=46">forumet e suportit</a>, shikoni <a href="%3$s">Më Lexo</a> për më tepër informacion.</p><p><strong>Tani ju lutemi të fshini, lëvizni ose riemërtoni direktorinë e instalimit përpara se të përdorni bordin tuaj. Nëse kjo direktori është akoma prezente, vetëm Paneli i Administratorit (ACP) do të jetë i mundshëm.</strong></p>',
	'INSTALL_INTRO'				=> 'Mirë se vini tek Instalimi',
	'INSTALL_INTRO_BODY'		=> 'Me këtë opsion është e mundur të instalohet phpBB3 në serverin tuaj.</p><p>Që të vazhdoni, do t\'ju duhen informacionet e bazës së informacionit. Nëse nuk i dini, kontaktoni hostin tuaj për më teper informacion. Nuk do të mund të vazhdoni pa patur informacionet. Ju duhen:</p>

	<ul>
		<li>Lloji i bazës së informacionit - baza e informacionit që do të përdorni.</li>
		<li>Hosti i bazës së informacionit ose DSN - adresa e severit të bazës së informacionit.</li>
		<li>Porta e serverit për bazën e informacionit - porta e serverit për bazën e të dhënave (të shumtën e rasteve e panevojshme).</li>
		<li>Emri i bazës së informacionit - emri i bazës së informacionit në server.</li>
		<li>Pseudonimi dhe fjalëkalimi i bazës së informacionit - informacioni i identifikimit për të patur akses në bazën e informacionit.</li>
	</ul>

	<p><strong>Vini re:</strong> nëse po instaloni duke përdorur SQLite, ju duhet të shkruani vendodhjen e plotë të bazës së informacionit tek fusha DSN dhe lini bosh fushat e pseudonimit dhe fjalëkalimit. Për arsye sigurie, ju duhet të siguroheni që baza e informacionit nuk është ruajtur në një vënd të aksesueshem në web.</p>

	<p>phpBB3 suporton bazat e informacionit të mëposhtme:</p>
	<ul>
		<li>MySQL 3.23 ose më të re (MySQLi suportohet)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 ose më të re (direkt ose nëpërmjet ODBC)</li>
		<li>Oracle</li>
	</ul>

	<p>Vetëm këto baza të informacionit të suportuara në serverin tuaj do të shfaqen.',
	'INSTALL_INTRO_NEXT'		=> 'Për të filluar instalimin, klikoni butonin më poshtë.',
	'INSTALL_LOGIN'				=> 'Identifikohu',
	'INSTALL_NEXT'				=> 'Faqja tjetër',
	'INSTALL_NEXT_FAIL'			=> 'Disa testime dështuan dhe ju duhet të zgjidhni këto probleme për të vazhduar në hapin tjetër. Në rast të kundërt kjo mund të çojë në dështimin e instalimit.',
	'INSTALL_NEXT_PASS'			=> 'Të gjithë testimet u kaluan dhe ju mund të kaloni në hapin tjetër të instalimit. Nëse keni ndryshuar të drejta, module, etj. dhe dëshironi të ritestoni, ju mund ta bëni nëse doni.',
	'INSTALL_PANEL'				=> 'Paneli i Instalimit',
	'INSTALL_SEND_CONFIG'		=> 'phpBB nuk mund të shkruajë informacionin e konfigurimit në skedarin tuaj config.php. Kjo mund të ndodhë sepse skedari mund të mos ekzistojë ose është i pashkruajtshëm. Një numër opsionesh do të rrjeshtohen më poshtë për t\'ju mundësuar përfundimin e instalimit të config.php.',
	'INSTALL_START'				=> 'Fillo instalimin',
	'INSTALL_TEST'				=> 'Testo perseri',
	'INST_ERR'					=> 'Gabim ne instalim',
	'INST_ERR_DB_CONNECT'		=> 'E pamundur lidhja me bazën e informacionit, shikoni mesazhin e gabimit më poshtë.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Skedari i specifikuar i bazës së informacionit ndodhet në  direktorine e bordit tuaj. Ju duhet të vendosni këtë skedar në një vendodhje jo të aksesueshme nga web-i.',
	'INST_ERR_DB_NO_ERROR'		=> 'Asnjë mesazh gabimi i dhënë.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Versioni i MySQL i instaluar nuk përputhet me “MySQL me prapashtesë MySQLi” opsionin që ju keni zgjedhur. Provoni opsionin “MySQL” .',
	'INST_ERR_DB_NO_SQLITE'		=> 'Versioni i SQLite i instaluar është shumë i vjetër, duhet të azhornohet të paktën në versionin 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Versioni i Oracle i instaluar ju kërkon të vendosni parametrin <var>NLS_CHARACTERSET</var> në <var>UTF8</var>. Mund të azhornoni instalimin në 9.2+ ose të ndryshoni parametrin.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'Versioni i Firebird i instaluar është më i vjetër se 2.0, Ju lutemi të azhornoni në versionin më të ri.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'Baza e informacionit që keni zgjedhur për Firebird ka një masë të faqes më të vogël se 8192, duhet të jetë të paktën 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Baza e informacionit që keni zgjedhur nuk është krijuar në <var>UNICODE</var> ose me enkodimin <var>UTF8</var>. Mundohuni të instaloni me një bazë informacioni të krijuar në <var>UNICODE</var> ose me enkodim <var>UTF8</var>.',
	'INST_ERR_DB_NO_NAME'		=> 'Nuk u specifikua emri i bazës së informacionit',
	'INST_ERR_EMAIL_INVALID'	=> 'Adresa e-mail që shkruat është e pavlefshme',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Adresat e-mail që shkruat nuk përputhen',
	'INST_ERR_FATAL'			=> 'Gabim fatal në instalim',
	'INST_ERR_FATAL_DB'			=> 'Një gabim fatal dhe i pariparueshëm ndodhi në lidhje me bazën e informacionit. Kjo mund të ndodhë pasi përdoruesi i specifikuar nuk ka të drejtat e duhura për të <code>KRIJUAR TABELA</code> ose të <code>VENDOSNI</code> të dhëna, etj. Më tepër informacion mund të jepet më poshtë. Kontaktoni hostin tuaj ose forumet e suportit të phpBB për asistence të mëtejshme.',
	'INST_ERR_FTP_PATH'			=> 'Nuk mund të ndryshojë në direktorinë e dhënë, ju lutemi të kontrolloni vendodhjen.',
	'INST_ERR_FTP_LOGIN'		=> 'Nuk mund të bëhej identifikimi në FTP e serverit, kontrolloni pseudonimin dhe fjalëkalimin.',
	'INST_ERR_MISSING_DATA'		=> 'Ju duhet të plotësoni fushat në këtë bllok.',
	'INST_ERR_NO_DB'			=> 'Nuk mund të karkikohej moduli PHP për llojin e zgjedhur të bazës së informacionit.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Fjalëkalimi i specifikuar nuk përputhet.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Fjalëkalimi i shkruar është shumë i gjatë. Gjatësia maksimale është 30 karaktere.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Fjalëkalimi i shkruar është shumë i shkurtër. Gjatësia minimale është 6 karaktere.',
	'INST_ERR_PREFIX'			=> 'Tabela me prefiksin e specifikuar janë ekzistuese, ju lutemi të zgjidhni një prefiks tjetër.',
	'INST_ERR_PREFIX_INVALID'	=> 'Prefiksi i tabelës që keni specifikuar është i pavlefshem për bazën tuaj të informacionit. Ju lutemi të provoni një tjetër, ose hiqni ndonjë karakter, p.sh. vijën.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Prefiksi i tabelës që keni specifikuar është shumë i gjatë. Gjatësia maksimale është prej %d karakteresh.',
	'INST_ERR_USER_TOO_LONG'	=> 'Pseudonimi që specifikuat është shumë i gjatë. Gjatësia maksimale është 20 karaktere.',
	'INST_ERR_USER_TOO_SHORT'	=> 'Pseudonimi që specifikuat është shumë i shkurtër. Gjatësia minimale është 3 karaktere.',
	'INVALID_PRIMARY_KEY'		=> 'Çelës primar invalid : %s',
	
	'LONG_SCRIPT_EXECUTION'		=> 'Vini re qe kjo mund te zgjase pak... Ju lutemi te mos ndaloni script-in.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Kontrollimi i prapashtesës <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<strong>E kërkuar</strong> - <samp>mbstring</samp> është nje prapashtesë  PHP që ofron shumë funksione. Disa funksione të mbstring nuk janë të papërshtatshme me phpBB dhe duhet të ç\'aktivizohen.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Mbikarkimi i funksionit',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> duhet të vendoset në 0 ose 4.',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Enkodimi i karaktereve transparente',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> duhet të vendoset në 0.',
	'MBSTRING_HTTP_INPUT'					=> 'HTTP input character conversion',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> duhet të vendoset në <samp>pass</samp>.',
	'MBSTRING_HTTP_OUTPUT'					=> 'HTTP output character conversion',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> duhet të vendoset në <samp>pass</samp>.',
	
	'MAKE_FOLDER_WRITABLE'		=> 'Ju lutemi të siguroheni që kjo dosje ekziston dhe është e shkruajtshme nga webserveri pastaj provoni përsëri:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'		=> 'Ju lutemi të siguroheni që këto dosje ekzistojnë dhe janë të shkruajtshme nga webserveri pastaj provoni përsëri:<br />»<strong>%s</strong>.',
	
    'MYSQL_SCHEMA_UPDATE_REQUIRED'   => 'Baza juaj e informacionit MySQL për phpBB është e pa-azhornuar. phpBB vuri re një skemë për MySQL 3.x/4.x, por serveri funksionon në MySQL %2$s.<br /><strong>Përpara se të vazhdoni me azhornimin, ju duhet të azhornoni skemën.</strong><br /><br />Ju lutemi t\'i referoheni artikullit <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">Knowledge Base rreth azhornimit të skemës MySQL</a>. Nëse hasni probleme, ju lutemi të përdorni forumet tona të suportit <a href="http://www.phpbb.com/community/viewforum.php?f=46"></a>.',
	
	'NAMING_CONFLICT'			=> 'Konflikt emrash: %s dhe %s janë të dy alias<br /><br />%s',
	'NEXT_STEP'					=> 'Vazhdoni në hapin tjetër',
	'NOT_FOUND'					=> 'Nuk mund të gjëndet',
	'NOT_UNDERSTAND'			=> 'Nuk mund të kuptohet %s #%d, tabela %s (“%s”)',
	'NO_CONVERTORS'				=> 'Asnjë konvertor i disponueshem për përdorim.',
	'NO_CONVERT_SPECIFIED'		=> 'Asnjë konvertor i specifikuar.',
	'NO_LOCATION'				=> 'Nuk mund të përcaktohet vendodhja. Nëse e dini që Imagemagick është i instaluar, ju mund të specifikoni vendodhjen më vonë nëpërmjet Panelit të Administratorit.',
	'NO_TABLES_FOUND'			=> 'Nuk u gjet asnjë tabelë.',
	
	'OVERVIEW_BODY'				=> 'Mirë se vini në phpBB3!<br /><br />phpBB™ është një bord buletin gjerësisht i përhapur në të gjithë botën. phpBB3 është edicioni i nje historie të filluar që në vitin 2000. Ashtu si versionet e mëparshme, phpBB3 është e pasur me karakteristika teë reja, lehtësisht i përdorshëm, dhe plotësisht të suportueshëm nga phpBB Team. phpBB3 ka evoluar më tepër ato që e bënë phpBB2 të njohur, dhe ka shtuar funksione të reja që nuk ekzistonin në versionet e mëparshme. Ne shpresojme qe t\'ju plotësoje atë që ju dëshironi.<br /><br />Ky sistem i instalimit do t\'ju drejtojë në instalimin e phpBB3, azhornimin në versionin më të fundit të phpBB3, gjithashtu konvertim në phpBB3 nga nje sistem bordi i ndryshëm (përfshirë phpBB2). Për më tepër informacion, ju japim kurajo që të lexoni <a href="../docs/INSTALL.html">guidën e instalimit</a>.<br /><br />Për të lexuar licensën e phpBB3 ose të mësoni si të merrni ndihmë, mund të zgjidhni opsionet përkatëse në menunë anësore. Për të vazhduar, ju lutemi të zgjidhni seksionin e përshtatshëm .',
	
	'PCRE_UTF_SUPPORT'				=> 'Suporti PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>nuk</strong> do të funksionojë nëse instalimi juaj PHP nuk është i pajisur me suportin UTF-8 në prapashtesën PCRE.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Funksioni PHP getimagesize() është i disponueshëm',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>E kërkuar</strong> - Që phpBB të funksionojë korrektësisht, funksioni getimagesize duhet të jetë i disponueshëm.',
	'PHP_OPTIONAL_MODULE'			=> 'Module opsionale',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opsionale</strong> - Këto module ose aplikacione janë opsionale. Gjithsesi, Nëse janë të disponueshëm, do të aktivizojnë funksione shtesë.',
	'PHP_SUPPORTED_DB'				=> 'Bazat e informacionit të suportueshme',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>E kërkuar</strong> - Duhet të suportohet të paktën një bazë informacioni në PHP. Nëse asnjë modul baze informacioni nuk shfaqet e disponueshme, ju duhet të kontaktoni hostin tuaj ose të rishikoni dokumentacionin e instalimit të PHP për këshilla.',
	'PHP_REGISTER_GLOBALS'			=> 'Opsioni i PHP <var>register_globals</var> është i ç\'aktivizuar',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'phpBB do të vazhdojë të funksionojë nëse ky opsion është i aktivizuar, por nëse e mundur, rekomandohet që register_globals të jetë i ç\'aktivizuar në instalimin e PHP për arsye sigurie.',
	'PHP_SAFE_MODE'					=> 'Mënyrë e sigurtë',
	'PHP_SETTINGS'					=> 'Opsionet e versionit PHP',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>E kërkuar</strong> - Ju duhet të keni të instaluar të paktën versionin 4.3.3 të PHP që të instaloni phpBB. Nëse <var>Mënyrë e sigurtë</var> shfaqet poshtë instalimit, PHP po funksionon në këtë mënyrë. Kjo do të sjellë kufizime në kontrollin administrativ dhe funksione të ngjashme.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'Opsioni PHP <var>allow_url_fopen</var> është i aktivizuar',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Opsionale</strong> - Ky opsion është opsional, gjithsesi disa funksione të phpBB si avatarë nga jashtë bordit, nuk do të funksionojnë rregullisht pa të. ',
	'PHP_VERSION_REQD'				=> 'Versioni PH >= 4.3.3',
	'POST_ID'						=> 'ID e postimit',
	'PREFIX_FOUND'					=> 'Nje skanim i tabelave tuaja tregon një instalim të vlefshëm me prefiks tabelash <strong>%s</strong>.',
	'PREPROCESS_STEP'				=> 'Ekzekutimi i funksioneve të përpunimit/query',
	'PRE_CONVERT_COMPLETE'			=> 'Të gjithë hapat e parë të konvertimit janë kompletuar me suskses. Tani mund të filloni proçesin aktual të konvertimit. Vini re që mund t\'ju duhet të modifikoni opsionet e serverit manualisht. Pas konvertimit, kontrolloni të drejtat e dhëna, rindertoni indeksin e kërkimit i cili nuk është konvertuar dhe gjithashtu sigurohuni që skedarët të jenë kopjuar me sukses, për shembull avatarët dhe emocionet.',
	'PROCESS_LAST'					=> 'Duke proceduar statusin e fundit',
	
	'REFRESH_PAGE'				=> 'Rifreskoni faqen për të vazhduar konvertimin',
	'REFRESH_PAGE_EXPLAIN'		=> 'Nëse caktoni "Po", konvertuesi do të rifreskojë faqen për të vazhduar konvertimin pas mbarimit të një hapi. Nëse ky është konvertimi juaj i parë për të testuar veten tuaj, ju sugjerojmë të caktoni "Jo".',
	'REQUIREMENTS_TITLE'		=> 'Përputhshmëria e instalimit',
	'REQUIREMENTS_EXPLAIN'		=> 'Përpara se të vazhdoni me instalimin e plotë, phpBB do të bëjë disa testime në konfigurimin dhe skedarët e serverit tuaj për t\'u siguruar që ju jeni në gjëndje të instaloni dhe të vini në funksionim phpBB. Lexoni të gjithë rezultatet dhe mos vazhdoni deri sa të gjitha testimet e duhura të jenë bërë. Nëse doni të përdorni ndonjë nga funksionet në varësi të testit opsional, sigurohuni që ato testime të kenë kaluar me sukses.',
	'RETRY_WRITE'				=> 'Mundohu të shkruash konfigurimin përsëri',
	'RETRY_WRITE_EXPLAIN'		=> 'Nëse doni mund të ndryshoni të drejtat në config.php për të lejuar phpBB t\'a shkruajë atë. Nëse e bëni klikoni Mundohu përsëri për të riprovuar. Ju kujtojmë që duhet të ktheni pas të drejtat në skedarin config.php pasi phpBB të ketë mbaruar instalimin.',
	
	'SCRIPT_PATH'				=> 'Vendodhja e Script-it',
	'SCRIPT_PATH_EXPLAIN'		=> 'Vendodhja e phpBB në lidhje me emrin e domeinit, p.sh. <samp>/phpBB3</samp>.',
	'SELECT_LANG'				=> 'Zgjidh gjuhën',
	'SERVER_CONFIG'				=> 'Konfigurimi i serverit',
	'SEARCH_INDEX_UNCONVERTED'	=> 'Indeksi i kërkimit nuk u konvertua',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Indeksi i vjetër i kërkimit nuk u konvertua. Kërkimi do të kthehet gjithmonë pa rezultate. Për të krijuar një indeks të ri kërkimi shkoni tek Paneli i Administratorit, zgjidhni Mirëmbajtja dhe pastaj Indeksi i kërkimit në nën-menu.',
	'SOFTWARE'					=> 'Softi i bordit',
	'SPECIFY_OPTIONS'			=> 'Specifiko opsionet e konvertimit',
	'STAGE_ADMINISTRATOR'		=> 'Detajet e Administratorit',
	'STAGE_ADVANCED'			=> 'Opsione të avancuara',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Opsionet në këtë faqe janë të nevojshme të vendosen nëse e dini që ju duhet diçka ndryshe nga opsionet e paracaktuara. Nëse nuk jeni të sigurtë, kaloni në faqen tjetër, meqënëse këto opsione mund të ndryshohen në Panelin e Administratorit më pas.',
	'STAGE_CONFIG_FILE'			=> 'Skedari i konfigurimit',
	'STAGE_CREATE_TABLE'		=> 'Krijimi i tabelave të bazës së informacionit',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'Tabelat e bazës së informacionit të përdorura nga phpBB 3.0 janë krijuar dhe populluar me disa të dhena fillestare. Vazhdoni në hapin tjetër për të përfunduar instalimin e phpBB.',
	'STAGE_DATABASE'			=> 'Opsionet e bazës së informasionit',
	'STAGE_FINAL'				=> 'Hapi final',
	'STAGE_INTRO'				=> 'Hyrje',
	'STAGE_IN_PROGRESS'			=> 'Konvertimi në progres',
	'STAGE_REQUIREMENTS'		=> 'Të kërkuara',
	'STAGE_SETTINGS'			=> 'Opsionet',
	'STARTING_CONVERT'			=> 'Duke filluar proçesin e konvertimit',
	'STEP_PERCENT_COMPLETED'	=> 'Hapi <strong>%d</strong> nga <strong>%d</strong>',
	'SUB_INTRO'					=> 'Hyrje',
	'SUB_LICENSE'				=> 'Liçensa',
	'SUB_SUPPORT'				=> 'Ndihmë',
	'SUCCESSFUL_CONNECT'		=> 'Lidhje e suksesshme',
	'SUPPORT_BODY'				=> 'Ndihmë e plotë mundësohet për softin e tanishem stabël phpBB3, pa pagesë. Kjo përfshin:</p><ul><li>instalimin</li><li>konfigurimin</li><li>pyetje teknike</li><li>probleme në lidhje me gabime potenciale</li><li>azhornim nga versionet Release Candidate (RC) në versionin e fundit stabël</li><li>konvertim nga phpBB 2.0.x në phpBB3</li><li>konvertim nga softe bordesh të tjera diskutimi në phpBB3 (shikoni <a href="http://www.phpbb.com/community/viewforum.php?f=65">Konvertuesit e forumeve</a>)</li></ul><p>U japim kurajo përdoruesve që janë akoma në përdorim të versioneve beta të phpBB3 për të zëvendësuar instalimin e tyre me një kopje të freskët të versionit më të fundit.</p><h2>MODIFIKIME / Stilet</h2><p>Për probleme në lidhje me MOD, ju lutemi të postoni në <a href="http://www.phpbb.com/community/viewforum.php?f=81">Forumet e modifikimit</a>.<br />Për probleme në lidhje me Stilet, maskat dhe setet e imazheve, ju lutemi të postoni në <a href="http://www.phpbb.com/community/viewforum.php?f=80">Forumi i Stileve</a>.<br /><br />Nëse keni pyetje në lidhje me ndonjë paketim në vecanti, ju lutemi të postoni direkt në temen e dedikuar paketave.</p><h2>Marrja e ndihmës</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Paketa e mirseardhjes e phpBB</a><br /><a href="http://www.phpbb.com/support/">Seksioni i Ndihmës</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Guide e shpejtë</a><br /><br />Që të siguroheni që jeni të azhornuar me të reja dhe versionin e fundit, mund të abonoheni tek <a href="http://www.phpbb.com/support/">lista e e-mail</a>?<br /><br />',
	'SYNC_FORUMS'				=> 'Fillimi i sinkronizimit të forumeve',
	'SYNC_POST_COUNT'			=> 'Sinkronizimi i numrit të postimeve',
	'SYNC_POST_COUNT_ID'		=> 'Sinkronizimi i numrit të postimeve nga <var>hyrje</var> %1$s në %2$s.',
	'SYNC_TOPICS'				=> 'Fillimi i sinkronizimit të temave',
	'SYNC_TOPIC_ID'				=> 'Duke sinkronizuar temat nga <var>id e temës</var> %1$s në %2$s.',
	
	'TABLES_MISSING'			=> 'Nuk u gjeten këto tabela<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefiksi për tabelat në bazën e informaciomit',
	'TABLE_PREFIX_SAME'			=> 'Prefiksi i tabelave duhet të jetë ai i përdorur nga softi nga i cili po konvertoni.<br />» Prefiksi i tabelave i specifikuar ishte %s.',
	'TESTS_PASSED'				=> 'Testimet u kaluan me sukses',
	'TESTS_FAILED'				=> 'Testimet dështuan',
	
	'UNABLE_WRITE_LOCK'			=> 'I pamundur shkrimi i skedarit të bllokimit.',
	'UNAVAILABLE'				=> 'I padisponueshëm',
	'UNWRITABLE'				=> 'I pashkruajtshëm',
	'UPDATE_TOPICS_POSTED'		=> 'Duke gjeneruar informacionin e temave të postuara',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Gabim gjatë gjenerimit të informacionit të temave të postuara. Ju mund të provoni përsëri nga ACP pasi të kompletohet proçesi i konvertimit.',
	'VERIFY_OPTIONS'			=> 'Duke verifikuar opsionet e konvertimit',
	'VERSION'					=> 'Versioni',
	
	'WELCOME_INSTALL'			=> 'Mirë se vini në Instalimin e phpBB3',
	'WRITABLE'					=> 'I shkruajtshëm',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Të gjithë skedarët janë të azhornuar me versionin e fundit të phpBB. Tani ju mund të <a href="../ucp.php?mode=login">identifikoheni në bordin tuaj</a> dhe kontrolloni nëse çdo gjë funksionon siç duhet. Mos harroni të fshini, riemërtoni ose lëvizni direktorinë e instalimit!',
	'ARCHIVE_FILE'				=> 'Skedari i burimit brënda arkivit',
	
	'BACK'				=> 'Mbrapa',
	'BINARY_FILE'		=> 'Skedar binar',
	'BOT'				=> 'Spider/Robot',
	
	'CHANGE_CLEAN_NAMES'			=> 'Mënyra e përdorur për t\'u siguruar që një pseudonim nuk përdoret nga shumë përdorues, u ndryshua. Jane disa përdorues që kanë të njëjtin emër kur krahasohen me mënyren e re. Ju duhet të fshini ose riemërtoni këta përdorues për t\'u siguruar qe çdo emër përdoret vetëm nga një përdorues përpara se të vazhdoni.',
	'CHECK_FILES'					=> 'Kontrollo skedarët',
	'CHECK_FILES_AGAIN'				=> 'Kontrollo skedarët përsëri',
	'CHECK_FILES_EXPLAIN'			=> 'Nëpërmjet hapit tjetër të gjithë skedarët do të kontrollohen kundrejt skedarëve të azhornuar - kjo mund të zgjasë pak nëse ky është kontrolli i parë.',
	'CHECK_FILES_UP_TO_DATE'		=> 'Sipas bazës së informacionit versioni juaj është azhornuar. Ju mund të doni të vazhdoni me kontrollin e skedarëve për t\'u siguruar që ata janë me të vërtetë të azhornuar me versionin e fundit të phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Vazhdo proçesin e azhornimit',
	'COLLECTED_INFORMATION'			=> 'Informacioni i skedarit',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'Lista më poshtë tregon informacionin rreth skedarëve që kanë nevojë për azhornim. Ju lutemi të lexoni informacionin në krye të çdo blloku për të nxjerrë kuptimin dhe çfarë ju mund të duhet të bëni për të bërë një azhornim të suksesshem.',
	'COLLECTING_FILE_DIFFS'			=> 'Duke mbledhur ndryshimet e skedarëve',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Tani ju mund të <a href="../ucp.php?mode=login">identifikoheni në bordin tuaj</a> dhe kontrolloni nëse çdo gjë funksionon në rregull. Mos harroni të fshini, riemërtoni ose lëvizni direktorinë e instalimit!',
	'CONTINUE_UPDATE_NOW'			=> 'Vazhdo tani proçesin e azhornimit',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Vazhdo azhornimin tani',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Fillimi i Konfliktit - Kodi origjinal i skedarit përpara azhornimit',
	'CURRENT_VERSION'				=> 'Versioni i tanishëm',
	
	'DATABASE_TYPE'						=> 'Lloji i bazës së informacionit',
	'DATABASE_UPDATE_INFO_OLD'			=> 'Skedari i azhornimit të bazes së informacionit në direktorinë e instalimit nuk është i azhornuar. Ju lutemi të siguroheni që ngarkuat versionin korrekt të skedarit.',
	'DELETE_USER_REMOVE'				=> 'Fshi përdoruesin dhe postimet e tij',
	'DELETE_USER_RETAIN'				=> 'Fshij përdoruesin por mbaj postimet e tij',
	'DESTINATION'						=> 'Skedari destinacion',
	'DIFF_INLINE'						=> 'Përbrenda',
	'DIFF_RAW'							=> 'Raw unifikuar diff',
	'DIFF_SEP_EXPLAIN'					=> 'Kodi i përdorur në skedarin e ri/azhornuar',
	'DIFF_SIDE_BY_SIDE'					=> 'Krah për krah',
	'DIFF_UNIFIED'						=> 'Unifikuar diff',
	'DO_NOT_UPDATE'						=> 'Mos azhorno këtë skedar',
	'DOWNLOAD'							=> 'Shkarko',
	'DOWNLOAD_AS'						=> 'Shkarko si',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Shkarko arkivin e skedarëve të modifikuar (e rekomanduar)',
    'DOWNLOAD_CONFLICTS'            	=> 'Shkarko konfliktet për këtë skedar',
    'DOWNLOAD_CONFLICTS_EXPLAIN'      	=> 'Kërko për &lt;&lt;&lt; për të publikuar konfliktet',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Shkarko arkivin e skedarëve të modifikuar',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Pas shkarkimit ju duhet të hapni arkivin. Brënda tij do të gjeni skedarët e modifikuar të cilët duhet t\'i ngarkoni në direktorinë qëndrore të bordit tuaj phpBB. Ngarkoni skedarët në direktoritë e tyre respektive. Pasi të keni ngarkuar të gjithë skedarët, Ju lutemi të kontrolloni edhe njëherë me butonin tjetër më poshtë.',
	
	'ERROR'			=> 'Gabim',
	'EDIT_USERNAME'	=> 'Modifiko pseudonimin',
	
	'FILE_ALREADY_UP_TO_DATE'		=> 'Skedari është i azhornuar.',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Skedari nuk lejohet të jetë diffed.',
	'FILE_USED'						=> 'Informacion i perdorur nga',
	'FILES_CONFLICT'				=> 'Skedarë ne konflikt',
	'FILES_CONFLICT_EXPLAIN'		=> 'Skedarët e mëposhtem janë modifikuar dhe nuk përbëjnë skedarët origjinale nga versioni i vjetër. phpBB vendosi që këta skedarë krijojnë konflikt nëse mundoheni t\'i bashkoni. Ju lutemi të hetoni konfliktet dhe mundohuni t\'i zgjidhni manualisht ose vazhdoni azhornimin duke zgjedhur mënyrën e preferuar të bashkimit. Nëse zgjidhni konfliktet manualisht, kontrolloni skedarët përsëri pasi t\'i keni modifikuar. Gjithashtu, ju mund të zgjidhni mënyrën e dëshiruar të bashkimit për çdo skedar. I pari do të sjellë nje skedar në të cilin pjesët e konfliktit do të humbasin. Tjetri do të sjellë humbjen e ndryshimeve nga skedari i ri.',
	'FILES_MODIFIED'				=> 'Skedarët e modifikuar',
	'FILES_MODIFIED_EXPLAIN'		=> 'Skedarët e mëposhtem janë modifikuar dhe nuk përbëjnë skedarët origjinale nga versioni i vjetër. Skedari i ngarkuar do të jetë një bashkim ndërmjet modifikimeve tuaja dhe skedarit te ri.',
	'FILES_NEW'						=> 'Skedarët e rinj',
	'FILES_NEW_EXPLAIN'				=> 'Skedarët e mëposhtem nuk ekzistojnë në instalimin tuaj. Këta skedarë do të shtohen në instalim.',
	'FILES_NEW_CONFLICT'			=> 'Skedarët e rinj në konflikt',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Skedarët e mëposhtëm janë të rinj në versionin e fundit por është vënë re që në të njejtën direktori ndodhet një skedar me të njëjtin emër. Ky skedar do të mbivendoset nga skedari i ri.',
	'FILES_NOT_MODIFIED'			=> 'Skedarë të pa modifikuar',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Skedaret e mëposhtëm nuk janë modifikuar dhe përfaqësojnë skedarët origjinalë të  phpBB nga versioni që doni të azhornoni.',
	'FILES_UP_TO_DATE'				=> 'Skedarë të azhornuar',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Skedarët e mëposhtëm nuk kanë nevojë të azhornohen.',
	'FTP_SETTINGS'					=> 'Opsionet FTP',
	'FTP_UPDATE_METHOD'				=> 'Ngarkim me FTP',
	
	'INCOMPATIBLE_UPDATE_FILES'		=> 'The update files found are incompatible with your installed version. Your installed version is %1$s and the update file is for updating phpBB %2$s to %3$s.Skedarët e azhornimit janë të papërshtatshëm me versionin e instaluar. Versioni juaj i instaluar është %1$s dhe skedarët e azhornimit janë për azhornim nga phpBB %2$s në %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Skedarët e azhornimit janë të pakompletuar.',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'Azhornimi i bazës së informacionit ishte i suksesshëm. Tani mund të vazhdoni proçesin e azhornimit.',
	
	'KEEP_OLD_NAME'		=> 'Mbaj pseudonimin',
	
	'LATEST_VERSION'		=> 'Versioni i fundit',
	'LINE'					=> 'Vije',
	'LINE_ADDED'			=> 'Shtuar',
	'LINE_MODIFIED'			=> 'Modifikuar',
	'LINE_REMOVED'			=> 'Fshirë',
	'LINE_UNMODIFIED'		=> 'Pa modifikuar',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Që të azhornoni instalimin, duhet të identifikoheni në fillim.',
	
	'MAPPING_FILE_STRUCTURE'	=> 'Për të lehtësuar ngarkimin këtu janë vendodhjet e skedarëve sipas direktorive të instalimit të phpBB.',
	
	'MERGE_MODIFICATIONS_OPTION'	=> 'Bashko modifikimet',
	
	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Mos bashko - përdor skedarin e ri',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Mos bashko - përdor skedarin e tanishëm',
    'MERGE_MOD_FILE_OPTION'     => 'Bashko modifikimet (Vendos kodin e ri phpBB në bllokun e konfliktit)',
    'MERGE_NEW_FILE_OPTION'     => 'Bashko modifikimet (Vendos kodin e modifikuar në bllokun e konfliktit)',
	'MERGE_SELECT_ERROR'		=> 'Mënyrat e bashkimit të skedarëve në konflikt nuk janë zgjedhur.',
	'MERGING_FILES'				=> 'Bashko ndryshimet',
	'MERGING_FILES_EXPLAIN'		=> 'Duke mbledhur ndryshimet finale të skedarëve.<br /><br />Ju lutemi të prisni deri sa phpBB të mbarojë të gjithë veprimet në skedarët e ndryshuar.',
	
    'NEW_FILE'                  	=> 'Fundi i konfliktit',
	'NEW_USERNAME'					=> 'Pseudonim i ri',
	'NO_AUTH_UPDATE'				=> 'Nuk jeni i autorizuar të bëni azhornimin',
	'NO_ERRORS'						=> 'Asnjë gabim',
	'NO_UPDATE_FILES'				=> 'Nuk u azhornuan skedarët e mëposhtëm',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Skedarët e mëposhtëm janë të rinj ose të modifikuar por direktoria në të cilën ndodhen normalisht, nuk mund të gjëndet në instalimin tuaj. Nëse kjo listë përmban skedarë të direktorive të tjera nga language/ ose styles/ atherë ju keni modifikuar strukturen e direktorive dhe azhornimi mund të mos jetë i plotë.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Nuk u gjet asnjë direktori e vlefshme për azhornimin. Ju lutemi të siguroheni që keni ngarkuar skedarët relative.<br /><br />Instalimi juaj duket se <strong>nuk</strong> është i azhornuar. Azhornimi është i mundur për versionin tuaj të phpBB %1$s. Ju lutemi të vizitoni <a href="http://www.phpbb.com/downloads/" rel="external">http://www.phpbb.com/downloads/</a> për të marrë paketën e duhur për të azhornuar nga Versioni %2$s në Versionin %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Versioni juaj është i azhornuar. Nuk ka nevojë të aktivizoni funksionin e azhornimit. Nëse doni të bëni një kontroll integriteti në skedarët tuaj sigurohuni që të ngarkoni skedarët e duhur të azhornimit.',
	'NO_UPDATE_INFO'				=> 'Informacioni i skedarit të azhornimit nuk mund të gjëndet.',
	'NO_UPDATES_REQUIRED'			=> 'Nuk nevojitet azhornimi',
	'NO_VISIBLE_CHANGES'			=> 'Asnjë ndryshim i dukshëm',
	'NOTICE'						=> 'Vini re',
	'NUM_CONFLICTS'					=> 'Numri i konflikteve',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Momentalisht janë kontrolluar ndryshimet e %1$d nga %2$d skedarë.<br />Ju lutemi të prisni deri sa të mbarojë kontrolli i të gjithë skedarëve.',
	
	'OLD_UPDATE_FILES'		=> 'Skedarët e azhornimit janë të pa azhornuar. Skedarët e azhornimit janë për të azhornuar nga phpBB %1$s në phpBB %2$s por versioni i fundit i phpBB është %3$s.',
	
	'PACKAGE_UPDATES_TO'				=> 'Kjo paketë azhornimi, azhornon në versionin',
	'PERFORM_DATABASE_UPDATE'			=> 'Bëj azhornimin e bazës së informacionit',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Më poshtë do të gjeni një buton për në script-in e azhornimit të bazës së informacionit. Azhornimi i bazës së informacionit mund të zgjasë pak, kështu që mos ndaloni ekzekutimin e proçesit edhe nëse duket së është bllokuar. Pasi të jetë bërë azhornimi i bazës së informacionit vazhdoni instruksionet për të kompletuar azhornimin e instalimit.',
	'PREVIOUS_VERSION'					=> 'Versioni i mëparshëm',
	'PROGRESS'							=> 'Progresi',
	
	'RESULT'					=> 'Rezultati',
	'RUN_DATABASE_SCRIPT'		=> 'Azhorno bazën e informacionit tani',
	
	'SELECT_DIFF_MODE'			=> 'Zgjidh mënyrën diff',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Zgjidh formatin e arkivit për shkarkimin',
	'SELECT_FTP_SETTINGS'		=> 'Zgjidh opsionet FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Trego ndryshimet/konfliktet',
	'SHOW_DIFF_FINAL'			=> 'Trego skedarin përfundimtar',
	'SHOW_DIFF_MODIFIED'		=> 'Trego ndryshimet e bashkuara',
	'SHOW_DIFF_NEW'				=> 'Trego përmbajtjen e skedarëve',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Trego ndryshimet',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Trego ndryshimet',
	'SOME_QUERIES_FAILED'		=> 'Disa query dështuan, gjëndja dhe gabimet janë rrjeshtuar më poshtë.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Ndoshta nuk ka pse të shqetësoheni, azhornimi do të vazhdojë. Nëse do të dështojë ju mund të kërkoni ndihmë në forumet tona të suportit. Shikoni <a href="../docs/README.html">Më Lexo</a> për detaje se si mund të merrni këshilla.',
	'STAGE_FILE_CHECK'			=> 'Kontrollo skedarët',
	'STAGE_UPDATE_DB'			=> 'Azhorno bazën e informacionit',
	'STAGE_UPDATE_FILES'		=> 'Azhorno skedarët',
	'STAGE_VERSION_CHECK'		=> 'Kontrolli i versionit',
	'STATUS_CONFLICT'			=> 'Skedarët e modifikuar po prodhojnë konflikte',
	'STATUS_MODIFIED'			=> 'Skedar i modifikuar',
	'STATUS_NEW'				=> 'Skedar i ri',
	'STATUS_NEW_CONFLICT'		=> 'Skedar i ri konfliktual',
	'STATUS_NOT_MODIFIED'		=> 'Skedar i pa modifikuar',
	'STATUS_UP_TO_DATE'			=> 'Skedar i azhornuar',
	
	'TOGGLE_DISPLAY'			=> 'Trego/Mos trego listën e skedarëve',
	'TRY_DOWNLOAD_METHOD'		=> 'Ju mund të provoni mënyrën shkarkimit të skedarëve të modifikuar.<br />Kjo mënyrë funksionon gjithmonë, gjithashtu është edhe mënyra e rekomanduar nga phpBB.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Provo këtë mënyrë tani',
	
	'UPDATE_COMPLETED'				=> 'Azhornimi u kompletua',
	'UPDATE_DATABASE'				=> 'Azhorno bazën e informacionit',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Në hapin tjetër baza e informacionit do të azhornohet.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Duke azhornuar skemat e bazës së informacionit',
	'UPDATE_FILES'					=> 'Azhorno skedarët',
	'UPDATE_FILES_NOTICE'			=> 'u lutemi të siguroheni që të keni bërë dhe azhornimin e skedarëve të bordit. Ky skedar është vetëm për azhornimin e bazës së informacionit tuaj.',
	'UPDATE_INSTALLATION'			=> 'Azhorno instalimin phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Me këtë opsion, është i mundur azhornimi i instalimit phpBB në versionin e fundit.<br />Gjatë proçesit të gjithë skedarët do të kontrollohen për integritetin e tyre. Ju mund të rishikoni të gjitha ndryshimet dhe skedarët përpara azhornimit.<br /><br />Azhornimi i skedarëve mund të bëhet në dy mënyra të ndryshme.</p><h2>Azhornim manual</h2><p>Me këtë azhornim ju vetëm shkarkoni setin e skedarëve të ndryshuara për t\'u  siguruar që të mos humbisni modifikimet që mund të keni bërë. Pas shkarkimit të kësaj pakete, ju duhet të ngarkoni manualisht skedarët në pozicionin e tyre korrekt në direktorinë e phpBB. Kur të mbaroni, mund të bëni kontrollin e skedarëve përsëri për të parë nëse ngarkuar skedarët në direktoritë e duhura.</p><h2>Azhornim automatik me FTP</h2><p>Kjo mënyrë është e ngjashme me të parën por pa nevojën e shkarkimit të skedarëve të ndryshuar dhe ngarkimit të tyre nga ju. Kjo do të bëhet për ju. Që të përdorni këtë mënyrë, ju duhet të dini detajet e identifikimit FTP përderisa do t\'ju kërkohen. Pasi të mbaroni, ju do të ridrejtoheni përseri tek kontrolli i skedarëve për t\'u siguruar që çdo gjë të azhornohet korrektësisht.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '		<h1>Lajmërim për version të ri</h1>

		<p>Ju lutemi të lexoni <a href="%1$s" title="%1$s"><strong>lajmërimin për versionin e fundit</strong></a> përpara se të vazhdoni proçesin e azhornimit; mund të përmbajë informacion të vlefshëm. Gjithashtu përmban link për shkarkim të plotë ose vetëm ndryshimet.</p>

		<br />

		<h1>Si të azhornoni instalimin tuaj me Paketën e Azhornimit Automatik (Automatic Update Package)</h1>

		<p>Mënyra e rekomanduar e azhornimit të instalimit tuaj, e rrjeshtuar këtu është e vlefshme vetëm për Paketën e Azhornimit Automatik. Ju gjithashtu mundeni të azhornoni instalimin tuaj duke përdorur mënyrat e rrjeshtuara në dokumentin INSTALL.html. Hapat për të azhornuar phpBB3 automatikisht janë:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Shkoni tek <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">phpBB.com faqja e shkarkimeve</a> dhe shkarkoni arkivin "Automatic Update Package".<br /><br /></li>
			<li>Hapeni arkivin.<br /><br /></li>
			<li>Ngarkojeni të gjithë dosjen install të pakompresuar në direktorinë tuaj kryesore të phpBB (aty ku ndodhet skedari config.php).<br /><br /></li>
		</ul>

		<p>Pasi t\'a keni ngarkuar, bordi juaj do të jetë i çaktivizuar për përdorues normalë si pasojë e prezencës së kësaj direktorie në instalimin tuaj.<br /><br />
		<strong><a href="%2$s" title="%2$s">Tani filloni proçesin e azhornimit duke shkruar në shfletuesin tuaj linkun për në direktorinë install</a>.</strong><br />
		<br />
		Më pas ju do drejtoheni gjatë proçesit të azhornimit. Do të lajmëroheni kur azhornimi të jetë kompletuar.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> 'Eshtë vënë re një azhornim i pa kompletuar</h1>  		<p>phpBB ka përcaktuar një azhornim automatik të pa përfunduar. Ju lutemi të siguroheni që keni ndjekur çdo hap nëpërmjet opsionit të azhornimit automatik. Më poshtë do të gjeni link për të shkuar tek direktoria e instalimit.</p>',
	'UPDATE_METHOD'					=> 'Mënyra e azhornimit',
	'UPDATE_METHOD_EXPLAIN'			=> 'Tani mund të zgjidhni mënyrën e azhornimit të preferuar. Përdorimi i ngarkimit me FTP do t\'ju kërkojë detajet e llogarisë FTP. Me këtë mënyrë skedarët do të lëvizen automatikisht në direktorinë e re dhe backup-et e skedarëve të vjetër do t\'u shtohet .bak në emër. Nëse zgjidhni të shkarkoni skedarët e modifikuar ju do keni mundësi ti ngarkoni përsëri ato në vëndodhjet e tyre korrekte më pas manualisht.',
	'UPDATE_REQUIRES_FILE'			=> 'Azhornuesi kërkon që skedari vijues të jetë prezent: %s',
	'UPDATE_SUCCESS'				=> 'Azhornimi u krye me sukses',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Të gjithë skedarët u azhornuan me sukses. Hapi tjetër do të bëjë kontrollin e të gjithë skedarëve edhe njëherë për t\'u siguruar që skedarët u azhornuan plotësisht.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Duke azhornuar versionin dhe duke optimizuar tabelat',
	'UPDATING_DATA'					=> 'Duke azhornuar të dhënat',
	'UPDATING_TO_LATEST_STABLE'		=> 'Duke azhornuar bazën e informacionit në versionin e fundit stabël',
	'UPDATED_VERSION'				=> 'Version i azhornuar',
	'UPLOAD_METHOD'					=> 'Mënyra e ngarkimit',
	
	'UPDATE_DB_SUCCESS'				=> 'Azhornimi i bazës së informacionit ishte i suksesshëm.',
	'USER_ACTIVE'					=> 'Përdorues aktiv',
	'USER_INACTIVE'					=> 'Përdorues jo aktiv',
	
	'VERSION_CHECK'				=> 'Kontrolli i versionit',
	'VERSION_CHECK_EXPLAIN'		=> 'Kontrollon për të parë nëse versioni juaj i phpBB është i azhornuar.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Versioni juaj i phpBB nuk është i azhornuar. Ju lutemi të vazhdoni proçesin e azhornimit.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Versioni juaj i phpBB nuk është i azhornuar.<br />Më poshtë do të gjeni një link për në lajmërimin për version të ri si dhe instruksione se si të bëni azhornimin.',
	'VERSION_UP_TO_DATE'		=> 'Instalimi juaj është i azhornuar, nuk ka azhornime të mundshme për versionin tuaj të phpBB. Ju mund të doni të kontrolloni vlefshmërinë e skedareve tuaj.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Instalimi juaj është i azhornuar, nuk ka azhornime të mundshme për versionin tuaj të phpBB. Ju nuk keni nevojë të azhornoni instalimin tuaj.',
	'VIEWING_FILE_CONTENTS'		=> 'Duke parë përmbajtjen e skedarëve',
	'VIEWING_FILE_DIFF'			=> 'Duke parë ndryshimet e skedarëve',
	
	'WRONG_INFO_FILE_FORMAT'	=> 'Format i gabuar i informacionit të skedarit',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Faleminderit, Stafi',
	'CONFIG_SITE_DESC'				=> 'Tekst i shkurtër për të përshkruar forumin tuaj',
	'CONFIG_SITENAME'				=> 'domeini_juaj.com',
	
	'DEFAULT_INSTALL_POST'			=> 'Ky është një shëmbull postimi i instalimit të phpBB3. Çdo gjë duket se funksionon. Ju mund të fshini këtë postim nëse doni dhe vazhdoni të ngrini bordin tuaj. Gjatë proçesit të instalimit kategorisë dhe forumit të parë u janë caktuar të drejtat për grupet e paracaktuara: administratorë, bots, moderatorë global, vizitorë, antarë të regjistruar dhe antarë COPPA. Nëse fshini këtë kategori dhe forum, mos harroni të caktoni të drejtat për këta grupe për të gjitha kategoritë dhe forumet që do të krijoni. Rekomandohet të riemërtohet kategoria e parë dhe forumi i parë dhe të kopjohen të drejtat nga këta gjatë krijimit të kategorive dhe forumeve. Kënaquni!',
	
	'EXT_GROUP_ARCHIVES'			=> 'Arkivat',
	'EXT_GROUP_DOCUMENTS'			=> 'Dokumentat',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Skedarë të shkarkueshëm',
	'EXT_GROUP_FLASH_FILES'			=> 'Skedarë Flash',
	'EXT_GROUP_IMAGES'				=> 'Imazhet',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Tekst bazë',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',
	
	'FORUMS_FIRST_CATEGORY'			=> 'Kategoria juaj e parë',
	'FORUMS_TEST_FORUM_DESC'		=> 'Përshkrimi i forumit tuaj të parë',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Forumi juaj i parë',
	
	'RANKS_SITE_ADMIN_TITLE'		=> 'Admin i bordit',
	'REPORT_WAREZ'					=> 'Postimi përmban link për softe ilegale ose pirate.',
	'REPORT_SPAM'					=> 'Postimi i raportuar ka të vetmin synim të reklamojë për një faqe ose produkt tjetër.',
	'REPORT_OFF_TOPIC'				=> 'Postimi i raportuar është jashtë teme.',
	'REPORT_OTHER'					=> 'Postimi i raportuar nuk i përshtatet kategorive të tjera, Ju lutemi të përdorni fushat për informacion të mëtejshëm.',
	
	'SMILIES_ARROW'					=> 'Arrow',
	'SMILIES_CONFUSED'				=> 'Confused',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Crying or Very Sad',
	'SMILIES_EMARRASSED'			=> 'Embarrassed',
	'SMILIES_EVIL'					=> 'Evil or Very Mad',
	'SMILIES_EXCLAMATION'			=> 'Exclamation',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Laughing',
	'SMILIES_MAD'					=> 'Mad',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Question',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rolling Eyes',
	'SMILIES_SAD'					=> 'Sad',
	'SMILIES_SHOCKED'				=> 'Shocked',
	'SMILIES_SMILE'					=> 'Smile',
	'SMILIES_SURPRISED'				=> 'Surprised',
	'SMILIES_TWISTED_EVIL'			=> 'Twisted Evil',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Very Happy',
	'SMILIES_WINK'					=> 'Wink',
	'TOPICS_TOPIC_TITLE'			=> 'Mirë se vini në phpBB3',
));

?>