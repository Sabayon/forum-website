<?php
/** 
*
* install [Galician]
*
* @package language
* @version $Id: install.php 10152 2009-09-16 13:02:13Z acydburn $
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

$lang = array_merge($lang, array(
	'ADMIN_CONFIG'				=> 'Configuración do administrador',
	'ADMIN_PASSWORD'			=> 'Contrasinal do administrador',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirmación do contrasinal do administrador',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Por favor insire un contrasinal que teña entre 6 e 30 caracteres de lonxitude',
	'ADMIN_TEST'				=> 'Comprobar configuración do administrador',
	'ADMIN_USERNAME'			=> 'Nome de usuario do administrador',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Por favor, insire un nome de usuario de entre 3 e 20 caracteres',
	'APP_MAGICK'				=> 'Soporte de Imagemagick [ Adxuntos ]',
	'AUTHOR_NOTES'				=> 'Notas do Autor<br />» %s',
	'AVAILABLE'					=> 'Dispoñíbel',
	'AVAILABLE_CONVERTORS'		=> 'Conversores Dispoñíbels',

	'BEGIN_CONVERT'				=> 'Comezar coa conversión',
	'BLANK_PREFIX_FOUND'		=> 'Fíxose unha revisión das túas táboas que amosou unha instalación válida que non usa prefixo de táboa.',
	'BOARD_NOT_INSTALLED'			=> 'Non se atopou instalación ningunha',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'Para levar ao cabo unha conversión precisas ter unha instalación por defecto do phpBB3. Ten en conta que para a conversión tanto a nova como a antiga instalación deben residir no mesmo banco de datos. Pode que agora desexes <a href="%s">efectuar unha instalación</a>.',

	'CATEGORY'					=> 'Categoría',
	'CACHE_STORE'				=> 'Tipo de caché',
	'CACHE_STORE_EXPLAIN'		=> 'A ubicación física onde se gardará a caché de datos, preferiblemente no sistema de arquivos.',
	'CAT_CONVERT'				=> 'Converter',
	'CAT_INSTALL'				=> 'Instalar',
	'CAT_OVERVIEW'				=> 'Resumo',
	'CAT_UPDATE'				=> 'Actualización',
	'CHANGE'					=> 'Mudar',
	'CHECK_TABLE_PREFIX'		=> 'Por favor, comproba o prefixo da túa táboa e téntao de novo.',
	'CLEAN_VERIFY'				=> 'Limpando e verificando a estrutura final',
	'CLEANING_USERNAMES'		=> 'Limpando nomes de usuario',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> é o nome de usuario limpo para:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Atopáronse nomes de usuario en conflito no teu vello taboleiro. Para poder completar a conversión elimina ou renomea eses usuarios, xa que só pode haber un usuario no teu taboleiro antigo para cada nome de usuario limpo.',
	'COLLIDING_USER'			=> '» id de usuario: <strong>%d</strong> nome de usuario: <strong>%s</strong> (%d mensaxes publicadas)',
	'CONFIG_CONVERT'			=> 'Convertindo a configuración',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'Non se puido escribir o arquivo de configuración. A continuación preséntanse varios métodos alternativos para crear o citado arquivo.',
	'CONFIG_FILE_WRITTEN'		=> 'O arquivo de configuración foi gardado, agora podes pasar ao seguinte paso da instalación',
	'CONFIG_PHPBB_EMPTY'		=> 'A variable de configuración do phpBB3 para "%s" está baleira.',
	'CONFIG_RETRY'				=> 'Tentar de novo',
	'CONTACT_EMAIL_CONFIRM'		=> 'Confirmar o correo-e de contacto',
	'CONTINUE_CONVERT'			=> 'Continuar coa conversión',
	'CONTINUE_CONVERT_BODY'		=> 'Detectouse un intento anterior de conversión. Podes escoller entre iniciar unha nova conversión ou continuar coa tentada anteriormente.',
	'CONTINUE_LAST'				=> 'Seguir coas últimas declaracións',
	'CONTINUE_OLD_CONVERSION'	=> 'Continuar coa conversión iniciada previamente',
	'CONVERT'					=> 'Converter',
	'CONVERT_COMPLETE'			=> 'Conversión completada',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Conseguiches converter o teu foro a phpBB 3.0. Agora xa podes iniciar sesión e <a href="../">acceder ao teu foro</a>. Por favor, asegúrate de que a configuración foi transferida correctamente denantes de activar o teu taboleiro eliminando o directorio de instalación. Lembra que a axuda en liña de uso de phpBB está dispoñíbel na <a href="http://www.phpbb.com/support/documentation/3.0/">Documentación</a> e no <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">foro de soporte</a>',
	'CONVERT_INTRO'				=> 'Benvido ao Entorno de Conversión Unificado do phpBB',
	'CONVERT_INTRO_BODY'		=> 'Aquí poderás importar datos dende outros sistemas de foros que teñas instalados. A lista de abaixo inclúe todos os módulos de conversión dispoñíbeis. Se queres facer a conversión dun sistema de foros que non sae na lista, comproba o noso sitio web, onde pode haber máis módulos de conversión para descargar.',
	'CONVERT_NEW_CONVERSION'	=> 'Nova conversión',
	'CONVERT_NOT_EXIST'			=> 'O conversor especificado non existe',
	'CONVERT_OPTIONS'			=> 'Opcións',
	'CONVERT_SETTINGS_VERIFIED'	=> 'A información que inseriches foi verificada. Para comezar o proceso de conversión preme no botón que aparece de seguido',
	'CONV_ERR_FATAL'					=> 'Erro irrecuperable de conversión',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'Subida FTP de anexos está activada no vello taboleiro. Por favor copia tódolos ficheiros Anexos a un directorio accesíbel, deshabilita subida por ftp e asegúrate de que un directorio de subidas válido estea especificado. Se o fixeches, reinicia o conversor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Non hai información dispoñíbel sobre a configuración    da conversión',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Non se puido obter a información de acceso ao foro',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Non foi posíbel obter as categorías.',
	'CONV_ERROR_GET_CONFIG'				=> 'Non se puido recuperar a configuración do foro',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Imposíbel acceder/ler "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Imposíbel obter información da autentificación do grupo.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Inconsistencia na táboa de grupos detectada en add_bots() - precisas engadir todos os grupos especiais se o fas de xeito manual.',
	'CONV_ERROR_INSERT_BOT'				=> 'Non se puido incluír o bot na táboa de usuarios.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Non se puido incluír o bot na táboa de bots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Imposíbel inserir usuario na taboa user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Erro ao analizar a mensaxe',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Nota para o programador: debes especificar $convertor[\'ruta_avatar\'] para empregar %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'A ruta relativa ao foro fonte non foi especifiacada.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Nota para o programador: debes especificar $convertor[\'ruta_galería_avatar\'] para empregar %s.',
	'CONV_ERROR_NO_GROUP'				=> 'O grupo "%1$s" non foi atopado en %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Nota para o programador: debes especoficar $convertor[\'ruta_rangos\'] para empregar %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Nota para o programador: debes especoficar $convertor[\'ruta_risoños\'] para empregar %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Nota para o programador: debes especoficar $convertor[\'directorio_subida\'] para empregar %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Imposibel inserir/actualizar configuración de permisos.',
	'CONV_ERROR_PM_COUNT'				=> 'Non se puido seleccionar o cartafol de conteo pm',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Incapaz de inserir un novo foro que substitúa a categoría antiga.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Incapaz de inserir un novo foro que substitúa ao vello foro.',
	'CONV_ERROR_USER_ACCESS'			=> 'Imposible obter a información de autentificación do usuario',
	'CONV_ERROR_WRONG_GROUP'			=> 'Grupo erróneo "%1$s" definido en %2$s',
	'CONV_OPTIONS_BODY'					=> 'Esta páxina recolle os datos precisos para acceder ao taboleiro fonte. Insire os pormenores do banco de datos do teu vello taboleiro; o conversor non mudará ren do banco de datos indicado de seguido. O taboleiro fonte debe ser desactivado para permitir unha conversión consistente.',
	'CONV_SAVED_MESSAGES'				=> 'Mensaxes gardadas',

	'COULD_NOT_COPY'			=> 'Non se puido copiar o ficheiro <strong>%1$s</strong> a <strong>%2$s</strong><br /><br />Por favor verifica que o directorio de destino existe e que pode ser escrito polo servidor web.',
	'COULD_NOT_FIND_PATH'		=> 'Non se puido atopar a ruta ao teu antigo foro. Por favor verifica as túas configuracións e téntao de novo.<br />» A ruta fonte especificada era %s',

	'DBMS'						=> 'Tipo de base de datos',
	'DB_CONFIG'					=> 'Configuración da Base de Datos',
	'DB_CONNECTION'				=> 'Conexión da Base de Datos',
	'DB_ERR_INSERT'				=> 'Erro ao procesar a consulta INSERT',
	'DB_ERR_LAST'				=> 'Houbo un erro ao procesar query_last',
	'DB_ERR_QUERY_FIRST'		=> 'Houbo un erro ao executar query_first',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Houbo un erro ao executar query_first, %s ("%s")',
	'DB_ERR_SELECT'				=> 'Houbo un erro ao efectuar unha consulta SELECT',
	'DB_HOST'					=> 'Nome de Host do servidor de base de datos ou NHSBD (DSN en inglés)',
	'DB_HOST_EXPLAIN'			=> 'DSN son as siglas de Data Source Name e é importante so para a instalación de ODBC.',
	'DB_NAME'					=> 'Nome da base de datos',
	'DB_PASSWORD'				=> 'Contrasinal da base de datos',
	'DB_PORT'					=> 'Porto do servidor de bases de datos',
	'DB_PORT_EXPLAIN'			=> 'Deixa isto en branco agás no caso de que saibas que o servidor traballa nun porto non-estándar.',
	'DB_UPDATE_NOT_SUPPORTED'	=> 'Sentímolo, pero este script non permite a actualización desde versións anteriores à “%1$s”. A versión que tes actualmente instalada é a “%2$s”. Por favor, actualiza a unha versión previa denantes de executares este script. De precisares axuda con isto podes acudir ao Foro de Soporte de phpBB.com.',
	'DB_USERNAME'				=> 'Nome de usuario da base de datos',
	'DB_TEST'					=> 'Probar Conexión',
	'DEFAULT_LANG'				=> 'Idioma por defecto do taboleiro',
	'DEFAULT_PREFIX_IS'			=> 'O prefixo de táboa predeterminado para %1$s é <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> 'Non se indicou valor ningún para a variábel test_file no conversor. Se es usuario deste conversor, non deberías estar a ver este erro, por favor informa desta mensaxe ao autor deste conversor. Se es o autor do conversor, debes especificar o nome dun ficheiro que exista no foro fonte para permitir a verificación da súa ruta.',
	'DIRECTORIES_AND_FILES'		=> 'Configuración de directorio e arquivo',
	'DISABLE_KEYS'				=> 'Teclas de desactivación',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Suporte para FTP remoto [ Instalación ]',
	'DLL_GD'					=> 'Soporte de gráfico GD [Confirmación Visual]',
	'DLL_MBSTRING'				=> 'Benvido á instalación do phpBB 3',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ a través do ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL coa extensión MySQLi',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Soporte XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Soporte de compresión zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Configuración das descargas',
	'DL_CONFIG_EXPLAIN'			=> 'Podes descargar o config.php completo ao teu ordenador. Entón precisarás subir o arquivo manualmente, substituíndo calquera config.php existente no directorio raíz do teu phpBB 3.0. Por  favor, lembra subir o arquivo en formato ASCII (olla a documentación da túa aplicación de FTP se non estás seguro de como facer isto). Cando teñas subido o config.php pulsa en "Feito" para pasar ao seguinte paso.',
	'DL_DOWNLOAD'				=> 'Descargar',
	'DONE'						=> 'Feito',

	'ENABLE_KEYS'				=> 'Reactivando claves. Isto pode levar un tempo',

	'FILES_OPTIONAL'			=> 'Arquivos e Directorios Opcionais',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Opcional</strong> - Non se requiren estes ficheiros, directorios ou permisos. As rutinas de instalación tentarán usar varias técnicas para completala se non existen ou non se pode escribir neles. Porén, a presenza destes ficheiros, directorios ou permisos acelerará a instalación.',
	'FILES_REQUIRED'			=> 'Arquivos e Directorios',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Obrigatorio</strong> - Para funcionar correctamente, o phpBB precisa poder acceder ou escribir en certos ficheiros ou directorios. Se se amosa "Non atopado" debes crear o ficheiro ou directorio que se destaca. Se se amosa "Non se pode escribir" debes mudar os permisos do ficheiro ou directorio para permitir ao phpBB escribir nel.',
	'FILLING_TABLE'				=> 'Cubrindo a táboa <b>%s</b>',
	'FILLING_TABLES'			=> 'Cubrindo as Táboas',

	'FIREBIRD_DBMS_UPDATE_REQUIRED'		=> 'O phpBB xa non admite Firebird/Interbase anteriores à versión 2.1. Por favor, actualiza a túa instalación do Firebird à versión 2.1.0, como mínimo, antes de procederes coa actualización.',

	'FINAL_STEP'				=> 'Procesar derradeiro chanzo',
	'FORUM_ADDRESS'				=> 'Enderezo do foro',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Isto é o enderezo http do teu vello foro',
	'FORUM_PATH'				=> 'Ruta dos Foros',
	'FORUM_PATH_EXPLAIN'		=> 'Isto é o camiño do servidor relativo <strong>ao directorio principal do phpBB</strong> do teu vello foro',
	'FOUND'						=> 'Atopado',
	'FTP_CONFIG'				=> 'Transferir a configuración por FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'O phpBB detectou a presenza do módulo FTP neste servidor. Podes tentar instalar o teu config.php mediante este mecanismo se o desexas. Terás que proporcionar a información que se lista a continuación. Lembra que o nome de usuario e contrasinal son aqueles do teu servidor! (pregunta ao provedor de hosting polos pormenores se non estás seguro de cales son)',
	'FTP_PATH'					=> 'Ruta FTP',
	'FTP_PATH_EXPLAIN'			=> 'Isto é o camiño dende o teu directorio raíz ata o do phpBB2, p.p. htdocs/phpBB2/',
	'FTP_UPLOAD'				=> 'Subir',

	'GPL'						=> 'Licenza Pública Xeral (GPL)',
	
	'INITIAL_CONFIG'			=> 'Configuración Básica',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Agora que a instalación determinou que o phpBB pode funcionar no teu servidor, é preciso que proporciones certa información específica. Se non sabes como conectar coa túa base de datos, por favor contacta co teu provedor de aloxamento (preferiblemente) ou usa os foros de soporte de phpBB. Ao introducir a información, por favor asegúrate de comprobala polo miúdo antes de continuar.',
	'INSTALL_CONGRATS'			=> 'Parabéns',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
		<p>A instalación do phpBB %1$s rematou de xeito correcto. Continúa escollendo unha das seguintes opcións:</p>
		<h2>Convertir un taboleiro existente ao phpBB3</h2>
		<p>O Contorno Conversor Unificado do phpBB permite a conversión dende phpBB 2.0.x e outros sistemas de foros ata o phpBB3. Se dispós dun taboleiro existente que queiras convertir, por favor, <a href="%2$s">inicia o proceso de conversión</a>.</p>
		<h2>Métete de cheo no teu phpBB3!</h2>
		<p>Premendo no botón de embaixo accederás a un formulario para enviares datos estatísticos ao phpBB no teu Panel de Control de Administración (PCA). Agradeceríamosche profundamente se puderes axudarnos enviando a devandita información. Logo podes tomar un tempo en examinares todas as opcións que tes dispoñíbeis. E lembra que a axuda é accesible en liña a traverso da <a href="http://www.phpbb.com/support/documentation/3.0/">Documentación</a>, o <a href="%3$s">LEME</a> e os <a href="http://www.phpbb.com/community/viewforum.php?f=46">Foros Oficiais de Soporte</a>, alén <a href="http://www.ciberirmandade.org/taboleiro/">dos foros da CiberIrmandade da Fala</a> (non oficiais, agás no apartado de tradución ao galego).</p><p><strong>Agora elimina, move ou renomea o directorio de instalación denantes de usar o teu taboleiro. En tanto o directorio estiver aínda presente, só sería accesíbel o Panel de Control de Administración (PCA).</strong></p>',
	'INSTALL_INTRO'				=> 'Benvido á Instalación',
// TODO: write some more introductions here
	'INSTALL_INTRO_BODY'		=> 'Con esta opción, poderás instalar o phpBB no teu servidor.</p><p>Para poder levala ao cabo, precisas ter a configuración do teu banco de datos. Se non a coñeces, contacta co xestor da túa hospedaxe e pregunta por ela, xa que non poderás continuar sen eses datos. En concreto, farache falta:</p>
	<ul>
		<li>O tipo de Banco de Datos - o banco de datos que vas utilizar.</li>
		<li>O nome de host ou DSN do servidor do Banco de Datos - o enderezo do servidor do banco de datos.</li>
		<li>O porto do servidor do Banco de Datos - o porto do servidor do banco de datos (a meirande parte das ocasións isto non será preciso).</li>
		<li>O nome do Banco de Datos - o nome do banco de datos no servidor.</li>
		<li>O nome de usuario e contrasinal do Banco de Datos - os datos de inicio de sesión e acceso ao banco de datos.</li>
	</ul>
	<p><strong>Ollo:</strong> se estás a instalar usando o SQLite, debes inserir a ruta completa ao teu arquivo de banco de datos no campo do DSN e deixar os de nome de usuario e contrasinal baleiros. Por cuestións de seguridade, debes asegurarte de que o arquivo de banco de datos non estea almacenado nunha ubicación accesible dende o web.</p>

	<p>O phpBB3 admite os seguintes tipos de banco de datos:</p>
	<ul>
		<li>MySQL 3.23 ou superior (admítese o MySQLi)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.1+</li>
		<li>MS SQL Server 2000 ou superior (directamente ou a traverso de ODBC)</li>
		<li>Oracle</li>
	</ul>
	
	<p>Só se amosarán os tipos de banco de datos admitidos polo teu servidor.',
	'INSTALL_INTRO_NEXT'		=> 'Para comezar coa instalación, preme no botón de embaixo.',
	'INSTALL_LOGIN'				=> 'Iniciar sesión',
	'INSTALL_NEXT'				=> 'Seguinte paso',
	'INSTALL_NEXT_FAIL'			=> 'Algunha probas fallaron e deberías corrixir estes problemas antes de avanzar ao seguinte paso. En caso contrario a instalación podería quedar incompleta.',
	'INSTALL_NEXT_PASS'			=> 'Pasáronse todas as probas básicas e podes avanzar ao seguinte paso da instalación. Se mudaches algún permiso, módulo, etc. e desexas volver probar pódelo facer se así o desexas.',
	'INSTALL_PANEL'				=> 'Panel de Instalación',
	'INSTALL_SEND_CONFIG'		=> 'Por desgraza o phpBB non puido escreber a información de configuración directamente ao teu config.php. Pode ser porque o arquivo non exista ou non teñas permisos de escritura. Listaránse de seguido unha serie de opcións que che permitirán completar a instalación do config.php.',
	'INSTALL_START'				=> 'Comezar a instalación',
	'INSTALL_TEST'				=> 'Probar de novo',
	'INST_ERR'					=> 'Erro de instalación',
	'INST_ERR_DB_CONNECT'		=> 'Non se puido conectar coa base de datos, bota unha ollada á mensaxe de erro de embaixo',
	'INST_ERR_DB_FORUM_PATH'	=> 'A base de datos especificada está dentro da árbore directorio dos teus foros.  Deberías poñer este ficheiro nunha localización non accesible desde a web.',
	'INST_ERR_DB_NO_ERROR'		=> 'Non se recibiu mensaxe de erro ningunha',
	'INST_ERR_DB_NO_MYSQLI'		=> 'A versión instalada de MySQL é incompatible coa opción "MySQL with MySQLi Extension" que escolliches. Por favor tenta coa opción "MySQL" no seu lugar.',
	'INST_ERR_DB_NO_SQLITE'		=> 'A vesión do SQLite instalada é demasiado vella, debe estar actualizada coma mínimo á versión 2.8.2',
	'INST_ERR_DB_NO_ORACLE'		=> 'A versión Oracle instalada nesta máquina require configurar o <var>NLS_CHARACTERSET</var> parámetro a <var>UTF8</var>. Ou ben actualiza a túa instalación a 9.2+ ou troca o parámetro.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'A versión do FireBird instalado neste equipo é anterior á versión 2.1, actualizao á versión máis recente.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'O banco de datos que seleccionaches para o Firebird ten un tamaño de páxina inferior a 8192, e debe ser polo menos de 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'A base de datos que escolleches non foi creada cunha codificación <var>UNICODE</var> ou <var>UTF8</var>. Proba a instalación cunha base de datos con codificación <var>UNICODE</var> ou <var>UTF8</var>',
	'INST_ERR_DB_NO_NAME'		=> 'Non se especificou nome da base de datos',
	'INST_ERR_EMAIL_INVALID'	=> 'O enderezo de correo-e que inseriches non é valido',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Os correos-e que inseriches non cadran',
	'INST_ERR_FATAL'			=> 'Erro fatal de instalación',
	'INST_ERR_FATAL_DB'			=> 'Erro fatal e irrecuperabel na base de datos. Isto pode ser porque o usuario non ten dereitos pra crear taboas ou insertar datos,etc. Debaixo podes ter máis información. Por favor contacto co teu proveedor de servidor primeiro ou visita os foros de apoio de phpBB pra máis axuda. ',
	'INST_ERR_FTP_PATH'			=> 'Non se puido mudar ao directorio indicado, por favor, comproba a ruta.',
	'INST_ERR_FTP_LOGIN'		=> 'Non se puido entrar no servidor FTP, comproba o nome de usuario e o contrasinal',
	'INST_ERR_MISSING_DATA'		=> 'Debes cubrir todos os campos neste bloque',
	'INST_ERR_NO_DB'			=> 'Non se puido cargar o módulo PHP para o tipo de base de datos seleccionada',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Os contrasinais que inseriches non coinciden.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'O contrasinal inserido é longo de máis. A lonxitude máxima é de 30 caracteres.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'O contrasinal inserido é moi curto. A lonxitude mínima é de 6 caracteres.',
	'INST_ERR_PREFIX'			=> 'Xa existen táboas co prefixo especificado, escolle outro.',
	'INST_ERR_PREFIX_INVALID'	=> 'O prexifo de táboa que especificaches non é válido para a túa base de datos. Por favor, téntao con outro prefixo e elimina caracteres tales coma guións, subraiados, ect...',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'O prefixo de táboa que especificaches é demasiado longo. A lonxitude máxima é de %d caracteres.',
	'INST_ERR_USER_TOO_LONG'	=> 'O nome de usuario que inseriches é demasiado longo. A lonxitude máxima é de 20 caracteres.',
	'INST_ERR_USER_TOO_SHORT'	=> 'O nome de usuario que inseriches é demasiado curto. A lonxitude mínima e de 3 caracteres.',
	'INVALID_PRIMARY_KEY'		=> 'Clave primaria non válida: %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Ten presente que este proceso pode demorar un anaco... Polo que pregámosche que non deteñas o script.',

	// mbstring
	'MBSTRING_CHECK'						=> 'Comprobación de extensión <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> 'A <samp>mbstring</samp> é unha extensión PHP que proporciona funcións de cadeas multibyte. Algunhas características da mbstring non son compatibles co phpBB e deben desactivarse.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Sobrecarga de función',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> 'A <var>mbstring.func_overload</var> debe configurarse a 0 ou 4',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Codificación transparente de caracteres',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> 'A <var>mbstring.encoding_translation</var> debe configurarse a 0',
	'MBSTRING_HTTP_INPUT'					=> 'Conversión de caracteres de entrada HTTP',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> 'A <var>mbstring.http_input</var> debe configurarse a <samp>pass</samp>',
	'MBSTRING_HTTP_OUTPUT'					=> 'Conversión de caracteres de saída HTTP',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> 'A <var>mbstring.http_output</var> debe seleccionarse a <samp>pass</samp>',

	'MAKE_FOLDER_WRITABLE'		=> 'Por favor, asegúrate de que este cartafol existe e que o servidor tén permisos de escritura no mesmo e téntao de novo:<br />»<b>%s</b>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Por favor, asegúrate de que estes cartafois existen e que o servidor tén permisos de escritura nos mesmos e téntao de novo:<br />»<b>%s</b>',

	'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'O teu esquema de banco de datos MySQL para o phpBB está obsoleto. O phpBB detectou un esquema para o MySQL 3.x/4.x, pero o servidor funciona co MySQL %2$s.<br /><strong>Antes de proceder coa actualización, precisas actualizar o esquema.</strong><br /><br />Por favor, bótalle un ollo ao <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">artigo de coñecemento básico sobre a actualización do esquema MySQL</a>. Se atopas algún problema, podes empregar os nosos <a href="http://www.phpbb.com/community/viewforum.php?f=46">foros de soporte</a>.',

	'NAMING_CONFLICT'			=> 'Conflito de nomes: %s e %s son alias os dous<br /><br />%s',
	'NEXT_STEP'					=> 'Proceder co seguinte chanzo',
	'NOT_FOUND'					=> 'Non se puido atopar',
	'NOT_UNDERSTAND'			=> 'Non se puido entender %s #%d, táboa %s ("%s")',
	'NO_CONVERTORS'				=> 'Non hai conversores dispoñibles para usar',
	'NO_CONVERT_SPECIFIED'		=> 'Non se especificou un conversor',
	'NO_LOCATION'				=> 'Non se puido determinar a ubicación',
	'NO_TABLES_FOUND'			=> 'Non se atoparon táboas.',

	'OVERVIEW_BODY'					=> 'Benvido ao phpBB3!<br /><br />O phpBB™ é a solución de taboleiro de mensaxe de código aberto máis extendida e popular do mundo. O phpBB3 é a última entrega dun longo proceso iniciado no ano 2000. Do mesmo xeito ca os seus predecesores, o phpBB3 ten unha longa serie de características, de uso doado, e totalmente soportado polo equipo do phpBB. O phpBB3 mellora aínda máis todo o que fixo popular ao phpBB2, e engade diversas funcionalidades demandadas adoito que non estaban presentes en versións previas. Agardamos que sobrepase as túas expectativas.<br /><br />Este sistema de instalación guiarate no proceso que deberás seguir para instalar o phpBB3, actualizando dende versións anteriores, ou ben convertendo dende outros sistemas de foros (incluíndo o phpBB2) ata o devandito phpBB3. Para obter máis información, recomendámosche que leas <a href="../docs/INSTALL.html">a guía de instalación</a>.<br /><br />Para ler a licenza do phpBB3, ou saber como obter axuda ou a nosa posición sobor do tema, selecciona a opción correspondente do menú lateral. Para seguir, selecciona o separador axeitado que hai enriba.',

	'PCRE_UTF_SUPPORT'				=> 'Soporte PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'phpBB <strong>non</strong> funcionará se a túa instalación de PHP non foi compilada con soporte UTF-8 da extensión PCRE',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'A función do PHP getimagesize() está dispoñible',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Requerido</strong> - Para que o phpBB funcione correctamente, é preciso que a función getimagesize estea dispoñible.',
	'PHP_OPTIONAL_MODULE'			=> 'Módulos opcionais',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opcional</strong> - Estes módulos ou aplicacións son opcionais, non son precisas para usar o phpBB 3.0. Porén, se dispós deles acadarás unha meirande funcionalidade.',
	'PHP_SUPPORTED_DB'				=> 'Bases de datos permitidas',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Requerido</strong> - Debes ter soporte cando menos para una base de datos compatible con PHP. Se non aparece como dispoñíbel módulo ningún da base de datos, deberás contactar co teu provedor de aloxamento (hosting) ou revisar a documentación de instalación de PHP axeitada para obter consello.',
	'PHP_REGISTER_GLOBALS'			=> 'A opción de "register_globals" do PHP está desactivada',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'O phpBB funcionará mesmo cando esta opción estea activada, mais, de ser posible, recoméndase que register_globals sexa desactivada na túa instalación de PHP por motivos de seguridade.',
	'PHP_SAFE_MODE'					=> 'Modo Seguro',
	'PHP_SETTINGS'					=> 'Versión e Configuración do PHP',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Requerido</strong> - Debe estar funcionando polo menos a versión 4.3.3 de PHP para poder instalar phpBB. Se "safe mode" (modo seguro) aparece baixo a túa instalación de PHP, está funcionando nese modo. Isto imporá limitacións á administración remota e funcións semellantes.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'A opción do PHP <var>allow_url_fopen</var> está activada',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Opcional</strong> - Esta opción non é imprescindíbel , aínda que certas funcións do phpBB coma os avatares de sitios externos non funcionarán correctamente se non está activada. ',
	'PHP_VERSION_REQD'				=> 'Versión do PHP >= 4.3.3',
	'POST_ID'						=> 'ID de mensaxe',
	'PREFIX_FOUND'					=> 'Fíxose unha revisión das túas táboas que amosou unha instalación válida que usa <strong>%s</strong> como prefixo de táboa.',
	'PREPROCESS_STEP'				=> 'Executando funcións/consultas de pre-proceso',
	'PRE_CONVERT_COMPLETE'			=> 'Completáronse correctamente todos os chanzos de pre-conversión. Agora podes comezar co proceso de conversión actual.',
	'PROCESS_LAST'					=> 'Procesando últimas declaracións',

	'REFRESH_PAGE'				=> 'Actualizar páxina para seguir coa conversión',
	'REFRESH_PAGE_EXPLAIN'		=> 'Se escolles SI, o conversor actualizará a páxina para continuar coa conversión logo de ter rematado un chanzo da mesma. Se é a túa primeira conversión co obxectivo de facer comprobacións e determinar posibles erros como paso previo, recomendámosche que escollas NON.',
	'REQUIREMENTS_TITLE'		=> 'Compatibilidade da Instalación',
	'REQUIREMENTS_EXPLAIN'		=> 'Antes de proceder coa instalación completa, phpBB fará diversos tests a configuración e ficheiros do teu servidor para asegurar que é posíbel instalar é executar phpBB. Por favor asegúrate de ler polo miúdo os resultados e de non continuar até que tódolos test sexan aprobados. Se queres habilitar algunha das funcionalidades listadas polos tests opcionais, deberías asegurarte de que eses tests tamén son aprobados.',
	'RETRY_WRITE'				=> 'Tentar de novo escribir a configuración',
	'RETRY_WRITE_EXPLAIN'		=> 'Se o desexas podes cambiar os permisos do config.php para permitir a phpBB escribir nel. Se é así, podes pulsar embaixo Retry (Reintentar) para probar de novo. Recorda devolver os permisos iniciais ao config.php ao rematar a instalación.',

	'SCRIPT_PATH'				=> 'Ruta do script',
	'SCRIPT_PATH_EXPLAIN'		=> 'A ruta da ubicación do phpBB2 relativa ao nome do dominio',
	'SELECT_LANG'				=> 'Selecciona idioma',
	'SERVER_CONFIG'				=> 'Configuración do servidor',
	'SEARCH_INDEX_UNCONVERTED'	=> 'O índice de procura non foi convertido',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'O teu vello índice de procura non foi convertido. A procura reflectirá sempre un resultado baleiro. Para crear un novo índice de procura vai ao Panel de Control da Administración, selecciona Mantemento e logo escolle índice de Procura no submenú.',
	'SOFTWARE'					=> 'Software dos Foros',
	'SPECIFY_OPTIONS'			=> 'Especificar Opcións de Conversión',
	'STAGE_ADMINISTRATOR'		=> 'Pormenores de Administrador',
	'STAGE_ADVANCED'			=> 'Opcións avanzadas',
	'STAGE_ADVANCED_EXPLAIN'	=> 'Os axustes nesta páxina só é necesario cambialos se sabes que se necesita algún distinto dos iniciais. Se non estás seguro, pasa a seguinte páxina, logo poderás cambialos dende o Panel de administración. ',
	'STAGE_CONFIG_FILE'			=> 'Ficheiro de Configuración',
	'STAGE_CREATE_TABLE'		=> 'Crear táboas da base de datos',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'As táboas da base de datos usadas por phpBB 3.0 foron creadas e enchidas con algúns datos de inicio. Vai a seguinte pantalla para finalizar a instalación do phpBB.',
	'STAGE_DATABASE'			=> 'Configuración da Base de Datos',
	'STAGE_FINAL'				=> 'Derradeiro Chanzo',
	'STAGE_INTRO'				=> 'Introdución',
	'STAGE_IN_PROGRESS'			=> 'Conversión en progreso',
	'STAGE_REQUIREMENTS'		=> 'Requisitos',
	'STAGE_SETTINGS'			=> 'Configuración',
	'STARTING_CONVERT'			=> 'Comezando o Proceso de Conversión',
	'STEP_PERCENT_COMPLETED'	=> 'Paso <b>%d</b> de <b>%d</b>: %d%% completado',
	'SUB_INTRO'					=> 'Introdución',
	'SUB_LICENSE'				=> 'Licenza',
	'SUB_SUPPORT'				=> 'Soporte',
	'SUCCESSFUL_CONNECT'		=> 'Conexión Correcta',
	'SUPPORT_BODY'				=> 'Para a actual versión estábel do phpBB3 fornecerase soporte completo de balde. Isto inclúe:</p><ul><li>instalación</li><li>configuración</li><li>cuestións técnicas</li><li>problemas relativoa a a fallos potenciais no aplicativo</li><li>actualización desde as Candidatas a Lanzamento (Release Candidate, ou RC) até a versión estable máis recente</li><li>conversión desde phpBB 2.0.x até phpBB3</li><li>conversión desde outros taboleiros de discusión até o phpBB3 (por favor, bota un ollo ao <a href="http://www.phpbb.com/community/viewforum.php?f=65">Foro de Conversores</a>)</li></ul><p>Encoraxamos aos usuarios que aínda están a empregar versións beta do phpBB3 a reemprazar a súa instalación por unha copia limpa da versión máis recente.</p><h2>MODs / Estilos</h2><p>Para cuestións relativas aos MODs, por favor, publica no <a href="http://www.phpbb.com/community/viewforum.php?f=81">Foro de Modificacións</a> axeitado.<br />Para cuestións relativas aos estilos, sobreplantas e xogos de imaxes, por favor, publica no <a href="http://www.phpbb.com/community/viewforum.php?f=80">Foro de Estilos</a> axeitado.<br /><br />Se a túa cuestión é referente a un paquete específico, publica directamente no tema dedicado ao mesmo.</p><h2>Obtendo Soporte</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">O Paquete de Benvida do phpBB</a><br /><a href="http://www.phpbb.com/support/">Sección de Soporte</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Guía de Inicio Rápido</a><br /><br />Para estares certo de te manteres ao día coas últimas novas e lanzamentos, porque non <a href="http://www.phpbb.com/support/">te subscribes á nosa lista de novas</a>?<br /><br />',
	'SYNC_FORUMS'				=> 'Comezando coa sincronización dos foros',
	'SYNC_POST_COUNT'			=> 'Sincronizando post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Sincronizando post_counts dende a <var>entrada</var> %1$s até %2$s.',
	'SYNC_TOPICS'				=> 'Comezando a sincronización dos temas',
	'SYNC_TOPIC_ID'				=> 'Sincronizando temas dende topic_id %s a %s',

	'TABLES_MISSING'			=> 'Non se puideron atopar estas táboas<br />» <b>%s</b>.',
	'TABLE_PREFIX'				=> 'Prefixo para as táboas na base de datos',
	'TABLE_PREFIX_SAME'			=> 'O prefixo de táboa debe ser a utilizada polo software dende o que estás a facer a conversión.<br />» O prefixo de táboa especificado era %s',
	'TESTS_PASSED'				=> 'Comprobacións superadas',
	'TESTS_FAILED'				=> 'Comprobacións non superadas',

	'UNABLE_WRITE_LOCK'			=> 'Imposible escribir nun arquivo pechado',
	'UNAVAILABLE'				=> 'Non dispoñíbel',
	'UNWRITABLE'				=> 'Non escribíbel',
	'UPDATE_TOPICS_POSTED'		=> 'Xerando información dos temas publicados',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Houbo un erro ao tentar xerar a información dos temas publicados. Podes tentar outra vez efectuar este chanzo no PCA logo de que o proceso de conversión estea completado.',
	'VERIFY_OPTIONS'			=> 'Verificando as opcións de conversión',
	'VERSION'					=> 'Versión',

	'WELCOME_INSTALL'			=> 'Benvido a instalación do phpBB 3',
	'WRITABLE'					=> 'Escribíbel',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Todos os arquivos están actualizados coa última versión do phpBB. Agora terás que <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">iniciar sesión no teu taboleiro</a> e comprobares se todo funciona de xeito correcto. Non esquezas eliminar, renomear ou mover o teu directorio de instalación! Por favor, envíanos información actualizada acerca da configuración do teu servidor e taboleiro desde o módulo  <a href="../ucp.php?mode=login&amp;redirect=adm/index.php%3Fi=send_statistics%26mode=send_statistics">Enviar estatísticas</a> do teu PCA.',
	'ARCHIVE_FILE'				=> 'Ficheiro fonte dentro do arquivo',

	'BACK'		=> 'Atrás',
	'BINARY_FILE'		=> 'Arquivo binario',
	'BOT'				=> 'Spider/Robot',

	'CHANGE_CLEAN_NAMES'			=> 'Mudouse o método empregado para asegurarmonos de que un nome de usuario non é empregado por varios usuarios. Por iso, haberá algúns usuarios que terán o mesmo nomo ao ser comparados co novo método. Terás que eliminar ou renomear os devanditos usuarios para estar certo de que cada nome é usado por un só usuario antes de que poidas proceder.',
	'CHECK_FILES'					=> 'Comprobar ficheiros',
	'CHECK_FILES_AGAIN'				=> 'Comprobar ficheiros novamente',
	'CHECK_FILES_EXPLAIN'			=> 'No seguinte paso tódolos arquivos serán comprobados cos arquivos de actualización - isto pode levar un anaco se esta é a primeira comprobación de arquivos.',
	'CHECK_FILES_UP_TO_DATE'		=> 'De acordo coa base de datos a túa versión está actualizada. Podes comprobar os  arquivos para asegurar que tódolos arquivos están realmente actualizados coa versión máis recente do phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Seguir co proceso de actualización',
	'COLLECTED_INFORMATION'			=> 'Información sobre arquivos recollidos.',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'A seguinte lista mostra información sobre os arquivos que precisan unha actualización. Por favor le a información fronte a cada bloque de estado para ver que significan e o que podes precisar para realizar unha actualización axeitada.',
	'COLLECTING_FILE_DIFFS'			=> 'Recompilando diferenzas de arquivo',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Agora podes <a href="../ucp.php?mode=login">iniciar unha sesión no teu taboleiro</a> e comprobar se todo funciona correctamente. Non esquezas eliminar, renomear ou mover o teu directorio de instalación!',
	'CONTINUE_UPDATE_NOW'			=> 'Seguir co proceso de actualización',		// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Seguir co proceso de actualización',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Orixe de Conflito - Código orixinal do arquivo antes da actualización',
	'CURRENT_VERSION'				=> 'Versión actual',

	'DATABASE_TYPE'						=> 'Tipo de base de datos',
	'DATABASE_UPDATE_INFO_OLD'			=> 'O arquivo de actualización da base de datos, do directorio de instalación, está anticuado. Por favor comprobe que cargou a versión correcta do arquivo.',
	'DELETE_USER_REMOVE'				=> 'Eliminar usuario e borrar as mensaxes que publicou',
	'DELETE_USER_RETAIN'				=> 'Eliminar usuario pero manter as mensaxes que publicou',
	'DESTINATION'						=> 'Ficheiro destino',
	'DIFF_INLINE'						=> 'Incrustada',
	'DIFF_RAW'							=> 'Arquivo bruto de unificación das diferencias',
	'DIFF_SEP_EXPLAIN'					=> 'Bloque de código empregado no arquivo novo/actualizado',
	'DIFF_SIDE_BY_SIDE'					=> 'Xuntos',
	'DIFF_UNIFIED'						=> 'Arquivo de unificación das diferencias',
	'DO_NOT_UPDATE'						=> 'Non actualizar este ficheiro',
	'DONE'								=> 'Feito',
	'DOWNLOAD'							=> 'Descargar',
	'DOWNLOAD_AS'						=> 'Descargar como',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Descargar arquivo de ficheiros modificados (recomendado)',
	'DOWNLOAD_CONFLICTS'				=> 'Conflitos de descarga para este arquivo',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Procurar &lt;&lt;&lt; para resaltar conflitos',
'DOWNLOAD_UPDATE_METHOD'			=> 'Descargar arquivo de ficheiros modificados',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Unha vez descargado deberías desempaquetar o arquivo. Atoparás nel os ficheiros modificados que precisas cargar no teu directorio raíz pHPBB. Por favor, transfire daquela os ficheiros á súa respectiva localización. Despois de transferir todos os ficheiros, comproba de novo os ficheiros co botón de debaixo.',

	'ERROR'		=> 'Erro',
	'EDIT_USERNAME'	=> 'Editar nome de usuario',

	'FILE_ALREADY_UP_TO_DATE'		=> 'O ficheiro está actualizado',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Este arquivo non permite a comparación das diferencias (diff)',
	'FILE_USED'						=> 'Información utilizada desde',			// Single file
	'FILES_CONFLICT'				=> 'Arquivos en conflito',
	'FILES_CONFLICT_EXPLAIN'		=> 'Os seguintes ficheiros están modificados e non representan os ficheiros orixinais da versión antiga. pHpBB determinou que estes ficheiros crean conflitos se se tenta unilos. Por favor investiga os conflitos e tenta resolvelos manualmente ou continúa a actualización escollendo o método de unión de preferencia. Se resolves os conflitos manualmente verifica os ficheiros de novo despois de modificalos. Tamén podes escoller o método de unión preferido para cada ficheiro. O primeiro dará como resultado un ficheiro onde as liñas de conflito do ficheiro antigo desaparecerán, o outro suporá a perda dos cambios do ficheiro máis novo.',
	'FILES_MODIFIED'				=> 'Ficheiros modificados',
	'FILES_MODIFIED_EXPLAIN'		=> 'Os seguintes ficheiros están modificados e non coinciden cos ficheiros orixinais da versión antiga. O ficheiro actualizado será unha mestura entre as túas modificacións e o ficheiro novo.',
	'FILES_NEW'						=> 'Novos arquivos',
	'FILES_NEW_EXPLAIN'				=> 'Os seguintes arquivos non se achan actualmente na súa instalación',
	'FILES_NEW_CONFLICT'			=> 'Novo conflito de ficheiros',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Estes son ficheiros novos da última versión pero xa hai un ficheiro co mesmo nome na mesma posición. Este ficheiro será sobreescrito polo novo.',
	'FILES_NOT_MODIFIED'			=> 'Arquivos non modificados',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Os seguintes arquivos non foron modificados e representan os arquivos orixinais phpBB da versión dende a que queres actualizar.',
	'FILES_UP_TO_DATE'				=> 'Arquivos xa actualizados',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Os seguintes arquivos xa están actualizados e non precisan actualización.',
	'FTP_SETTINGS'					=> 'Axustes do FTP',
	'FTP_UPDATE_METHOD'				=> 'Subida ao FTP',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Os ficheiros de actualización atopados son incompatibles coa túa versión instalada. A túa versión é a %1$s e o arquivo de actualización é para actualizar de phpBB %2$s a %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Os ficheiros de actualización están incompletos',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'A actualización do banco de datos foi correcta. Agora precisas continuar co proceso de actualización.',

	'KEEP_OLD_NAME'		=> 'Manter nome de usuario',

	'LATEST_VERSION'		=> 'Última versión',
	'LINE'					=> 'Liña',
	'LINE_ADDED'			=> 'Engadido',
	'LINE_MODIFIED'			=> 'Modificado',
	'LINE_REMOVED'			=> 'Eliminado',
	'LINE_UNMODIFIED'		=> 'Non modificado',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Para poder levar a cabo a actualización debes inciar sesión primeiro.',

	'MAPPING_FILE_STRUCTURE'	=> 'Para facer máis cómoda a transferencia velaquí as ubicacións dos ficheiros cos que mapear a instalación phpBB.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Mesturar modificacións',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'Non mesturar - usar arquivo novo',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'Non mesturar - usar arquivo instalado actualmente',
	'MERGE_MOD_FILE_OPTION'		=> 'Mesturar modificacións (elimina o código phpBB novo no bloque conflitivo).',
	'MERGE_NEW_FILE_OPTION'		=> 'Mesturar modificacións (elimina o código modificado no bloque conflitivo).',
	'MERGE_SELECT_ERROR'		=> 'Os modos de unión de ficheiros conflitivos non están correctamente escollidos.',
	'MERGING_FILES'				=> 'Mesturando diferenzas',
	'MERGING_FILES_EXPLAIN'		=> 'Actualmente recompilando trocos finais de arquivo.<br /><br />Por favor, agarda ata que o phpBB remate todas as operacións nos arquivos modificados.',

	'NEW_FILE'						=> 'Remate do conflito',
	'NEW_USERNAME'					=> 'Novo nome de usuario',
	'NO_AUTH_UPDATE'				=> 'Sen autorización para actualizar',
	'NO_ERRORS'						=> 'Non hai erros',
	'NO_UPDATE_FILES'				=> 'Non se actualizarán os seguintes ficheiros',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Os seguintes arquivos son novos ou foron modificados pero o directorio onde normalmente están non se atopou na túa instalación. Se esta lista contén arquivos doutros directorios alén idioma/ ou estilos/ puido ser que modificases a estrutura do teu directorio e a actualización pode estar incompleta.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Non se atopou ningún directorio válido de actualización, por favor asegúrate de que transferiches os ficheiros relevantes.<br /><br />A túa instalación <strong>non</strong> parece estar actualizada. Hai actualizacións dispoñíbeis para a túa versión de phpBB %1$s, por favor visita <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a> para obter o paquete de actualización axeitado da versión %2$s á version %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'A túa versión está actualizada. Non é preciso executar a ferramenta de actualización. Se queres realizar unha verificación completa nos ficheiros asegúrate de transferir os ficheiros de actualización axeitados.',
	'NO_UPDATE_INFO'				=> 'É posible que non se atope a información dos ficheiros de actualización.',
	'NO_UPDATES_REQUIRED'			=> 'Non se precisan actualizacións',
	'NO_VISIBLE_CHANGES'			=> 'Non hai trocos visibles',
	'NOTICE'						=> 'Aviso',
	'NUM_CONFLICTS'					=> 'Número de conflitos',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Actualmente comprobáronse diferenzas verbo de %1$d dun total de %2$d arquivos.<br />Por favor, agarda até que remate a comprobación de arquivos.',

	'OLD_UPDATE_FILES'		=> 'Os ficheiros de actualización non están actualizados. Os ficheiros de actualización atopados son para actualización de phpBB %1$s a phpBB %2$s pero a última versión de phpBB é %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'O paquete empregado actualiza á versión',
	'PERFORM_DATABASE_UPDATE'			=> 'Completar actualización da base de datos.',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Debaixo atoparás unha ligazón ao script de actualización da base de datos. Este script precisa ser executado por separado porque a actualización podería dar como resultado un comportamento inesperado se estás en sesión activa. A actualización pode levar un tempo, por iso non interrompas a execución se parece estar bloqueada. Despois de premer na ligazón, e rematada a actualización, podes pechar tamén a xanela.',
	'PREVIOUS_VERSION'					=> 'Versión anterior',
	'PROGRESS'							=> 'En proceso',

	'RESULT'					=> 'Resultado',
	'RUN_DATABASE_SCRIPT'		=> 'Actualizar base de datos agora',

	'SELECT_DIFF_MODE'			=> 'Seleccionar modo de comparación (diff)',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Seleccionar formato de arquivo a descargar.',
	'SELECT_FTP_SETTINGS'		=> 'Seleccionar axustes FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Amosar diferenzas/conflitos',
	'SHOW_DIFF_FINAL'			=> 'Amosar arquivo resultante',
	'SHOW_DIFF_MODIFIED'		=> 'Amosar diferenzas combinadas',
	'SHOW_DIFF_NEW'				=> 'Amosar contidos do ficheiro',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Amosar diferencias',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Amosar diferencias',
	'SOME_QUERIES_FAILED'		=> 'Algunhas consultas fallaron, as declaracións e erros están listadas debaixo',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Probablemente non haxa nada de que preocuparse, a actualización continuará. En caso de non completarse pode que precises axuda dos foros de apoio. Mira <a href="../docs/README.html">README</a> para obter consello.',
	'STAGE_FILE_CHECK'			=> 'Comprobar ficheiros',
	'STAGE_UPDATE_DB'			=> 'Actualizar base de datos',
	'STAGE_UPDATE_FILES'		=> 'Actualizar ficheiros',
	'STAGE_VERSION_CHECK'		=> 'Comprobar versión',
	'STATUS_CONFLICT'			=> 'Os ficheiros modificados producen conflitos',
	'STATUS_MODIFIED'			=> 'Ficheiro modificado',
	'STATUS_NEW'				=> 'Novo ficheiro',
	'STATUS_NEW_CONFLICT'		=> 'Ficheiro novo conflitivo',
	'STATUS_NOT_MODIFIED'		=> 'Ficheiro non modificado',
	'STATUS_UP_TO_DATE'			=> 'Ficheiro xa actualizado',

	'TOGGLE_DISPLAY'			=> 'Ver/Agochar a listaxe de arquivos',
	'TRY_DOWNLOAD_METHOD'		=> 'Se queres, podes probar o método de descarga de arquivos modificados.<br />Este método funciona sempre e tamén é o proceso de actualización recomendado.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Proba este método agora',

	'UPDATE_COMPLETED'				=> 'Actualización rematada',
	'UPDATE_DATABASE'				=> 'Actualizar base de datos',
	'UPDATE_DATABASE_EXPLAIN'		=> 'O banco de datos será actualizado no seguinte chanzo.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Actualizar estrutura da base de datos',
	'UPDATE_FILES'					=> 'Actualizar ficheiros',
	'UPDATE_FILES_NOTICE'			=> 'Por favor, asegúrate de ter actualizado os ficheiros do foro, este ficheiro é só para actualizar a base de datos.',
	'UPDATE_INSTALLATION'			=> 'Actualizar instalación phpBB ',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Con esta opción, é posíbel actualizar o teu phpBB á última versión. <br />Durante o proceso comprobarase a integridade de todos os ficheiros. Podes revisar as diferenzas e os ficheiros antes da actualización. <br /><br /> A actualización pode facerse de dúas formas diferentes. </p><h2>Actualización manual</h2><p> Con esta actualización só descargas a túa configuración persoal de ficheiros cambiados para asegurarte de non perderes as modificacións feitas. Despois de descargado este paquete tes que transferir manualmente os ficheiros á súa correcta posición no directorio raíz do phpBB. Unha vez feito, podes verificar de novo a correcta localización. Se todo está ben serás dirixido ao actualizador da base de datos.</p><h2>Actualización automática con FTP</h2><p> Este método é similar ao anterior pero non precisas descargar os ficheiros cambiados e transferilos ti mesmo. Isto farase automaticamente. Para usar este método precisas saber os detalles do acceso(login) FTP que che serán requeridos. Unha vez rematado serás redireccionado ao ficheiro de novo para verificar que se actualizou correctamente. Se é así avanzarás ao actualizador da base de datos.',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Anuncio de lanzamento</h1>

		<p>Por favor, le <a href="%1$s" title="%1$s"><strong>o anuncio de lanzamento para a última versión</strong></a> antes de seguir co teu proceso de actualización, pois pode que conteña información útil. Tamén ofrece ligazóns de descarga completa e o informe de trocos.</p>

		<br />

		<h1>Como actualizar a túa instalación co Paquete de Actualización Automática</h1>

		<p>O procedemento recomendado para actualizar a túa instalación listado aquí e válido só para o paquete de actualización automática. Podes tamén actualizar a túa instalación empregando os métodos indicados no documento INSTALL.html. Os chanzos para actualizar o phpBB3 automáticamente son os seguintes:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Vai á <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">páxina de descargas de phpBB.com</a> e descarga o arquivo do "Paquete de Actualización Automática".<br /><br /></li>
			<li>Descomprime e/ou desempaqueta o arquivo.<br /><br /></li>
			<li>Sube o cartafol de instalación descomprimido e completo ao directorio raigaña do teu phpBB (onde se atopa o teu arquivo config.php).<br /><br /></li>
		</ul>

		<p>Unha vez subido, o teu taboleiro estará fóra de liña para os usuarios normais, debido á presenza do directorio de instalación que ves de subir.<br /><br />
		<strong><a href="%2$s" title="%2$s">Agora podes iniciar o proceso de actualización dirixindo o teu navegador ao enderezo do cartafol de instalación</a>.</strong><br />
		<br />
		Serás guiado a traverso do proceso de actualización, e notificado cando a actualización sexa completada.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Actualización incompleta detectada</h1>

		<p>O phpBB detectou unha actualización automática incompleta. Asegúrate de que seguiches cada un dos chanzos do proceso da ferramenta de actualización automática. De seguido atoparás a ligazón de novo, ou podes ir directamente ao teu directorio de instalación.</p>
	',
	'UPDATE_METHOD'					=> 'Método de actualización',
	'UPDATE_METHOD_EXPLAIN'			=> 'Agora podes escoller o método de actualización preferido. a transferencia FTP ofrecerache un formulario no que introducir os detalles da conta FTP. Con este método os ficheiros serán automaticamente cambiados á nova localización e crearanse copias de seguridade dos ficheiros antigos coa extensión .bak engadida ao nome do ficheiro. Se escolles descargar os ficheiros modificados podes desempaquetalos e transferilos á súa correcta localización manualmente mais tarde.',
	'UPDATE_REQUIRES_FILE'			=> 'O actualizador precisa que estea presente o seguinte arquivo: %s',
	'UPDATE_SUCCESS'				=> 'Actualización correcta',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Actualización correcta de todos os ficheiros. A continuación comprobarase de que os ficheiros foron actualizados correctamente.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Actualizando versión e optimizando táboas',
	'UPDATING_DATA'					=> 'Actualizando datos',
	'UPDATING_TO_LATEST_STABLE'		=> 'Actualizando base de datos á ultima versión estable',
	'UPDATED_VERSION'				=> 'Versión actualizada',
	'UPLOAD_METHOD'					=> 'Método de subida',

	'UPDATE_DB_SUCCESS'				=> 'A actualización do banco de datos foi correcta',
	'USER_ACTIVE'					=> 'Usuario activo',
	'USER_INACTIVE'					=> 'Usuario inactivo',

	'VERSION_CHECK'				=> 'Comprobar versión',
	'VERSION_CHECK_EXPLAIN'		=> 'Verifica se a túa instalación do phpBB está actualizada.',
	'VERSION_NOT_UP_TO_DATE'	=> 'A túa instalación do phpBB non está actualizada. Por favor, continúa o proceso de actualización.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'A túa instalación do phpBB non está actualizada.<br /> Debaixo hai unha ligazón ao anuncio da nova versión, que contén máis información ben como instrucións para levar a cabo a actualización.',
	'VERSION_NOT_UP_TO_DATE_TITLE'	=> 'A túa instalación do phpBB non está actualizada.',
	'VERSION_UP_TO_DATE'		=> 'Á túa instalación está ao día, non hai actualizacións dispoñíbeis para a túa versión de phpBB. Con todo, podes continuar e executar unha comprobación de validez do arquivo.',
	'VERSION_UP_TO_DATE_ACP'	=> 'A túa instalación está ao día, non hai actualizacións dispoñíbeis para a túa versión de phpBB nestes intres.',
	'VIEWING_FILE_CONTENTS'		=> 'Vendo contidos do arquivo',
	'VIEWING_FILE_DIFF'			=> 'Vendo diferenzas no arquivo',

	'WRONG_INFO_FILE_FORMAT'	=> 'Información incorrecta sobre o formato do ficheiro',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Grazas, O Equipo de Xestión',
	'CONFIG_SITE_DESC'				=> 'Un pequeno texto para describir o teu foro',
	'CONFIG_SITENAME'				=> 'oteudominio.com',

	'DEFAULT_INSTALL_POST'			=> 'Isto é unha mensaxe publicada de exemplo na túa instalación do phpBB3. Podes eliminar esta mensaxe, este tema e mesmo este foro se así o desexas, xa que semella que todo funciona correctamente!',

	'EXT_GROUP_ARCHIVES'			=> 'Arquivos',
	'EXT_GROUP_DOCUMENTS'			=> 'Documentos',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Arquivos Descargabeis',
	'EXT_GROUP_FLASH_FILES'			=> 'Arquivos Flash',
	'EXT_GROUP_IMAGES'				=> 'Imaxes',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Texto Plano',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Arquivo Media Quicktime',
	'EXT_GROUP_REAL_MEDIA'			=> 'Arquivo Media Real',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Arquivo Media Windows',

	'FORUMS_FIRST_CATEGORY'			=> 'A miña primeira Categoría',
	'FORUMS_TEST_FORUM_DESC'		=> 'Isto é só un foro de probas.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Foro de Probas 1',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrador do Sitio',
	'REPORT_WAREZ'					=> 'A mensaxe contén ligazóns deica programas ilegais ou pirateados.',
	'REPORT_SPAM'					=> 'A mensaxe da que se informa ten como obxectivo único a publicidade dun sitio web ou doutro produto.',
	'REPORT_OFF_TOPIC'				=> 'A mensaxe da que se informa non se corresponde co tema.',
	'REPORT_OTHER'					=> 'A mensaxe da que se informa non acae con ningunha outra categoría. Emprega o campo de información adicional.',

	'SMILIES_ARROW'					=> 'Frecha',
	'SMILIES_CONFUSED'				=> 'Confuso',
	'SMILIES_COOL'					=> 'Fachendoso',
	'SMILIES_CRYING'				=> 'Chorando ou Moi Triste',
	'SMILIES_EMARRASSED'			=> 'Avergoñado',
	'SMILIES_EVIL'					=> 'Perverso ou Moi Furioso',
	'SMILIES_EXCLAMATION'			=> 'Exclamación',
	'SMILIES_GEEK'					=> 'TecnoCiberiño',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Rindo',
	'SMILIES_MAD'					=> 'Furioso',
	'SMILIES_MR_GREEN'				=> 'O Sr. Verde',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Pregunta',
	'SMILIES_RAZZ'					=> 'De Brincadeira',
	'SMILIES_ROLLING_EYES'			=> 'Roldando os Ollos',
	'SMILIES_SAD'					=> 'Triste',
	'SMILIES_SHOCKED'				=> 'Conmocionado',
	'SMILIES_SMILE'					=> 'Sorriso',
	'SMILIES_SURPRISED'				=> 'Sorprendido',
	'SMILIES_TWISTED_EVIL'			=> 'Perverso Atravesado',
	'SMILIES_UBER_GEEK'				=> 'Super TecnoCiberiño',
	'SMILIES_VERY_HAPPY'			=> 'Moi Feliz',
	'SMILIES_WINK'					=> 'Chiscando un Ollo',

	'TOPICS_TOPIC_TITLE'			=> 'Benvido ao phpBB3',
));

?>