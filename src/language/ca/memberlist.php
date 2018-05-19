<?php
/**
*
* memberlist [Catalan]
*
* @package language
* @version $Id: memberlist.php,v 1.32 2007/05/16 14:44:56 acydburn Exp $
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
	'ABOUT_USER'			=> 'Perfil',
	'ACTIVE_IN_FORUM'		=> 'Fòrum més actiu',
	'ACTIVE_IN_TOPIC'		=> 'Tema més actiu',
	'ADD_FOE'				=> 'Afegeix-lo als meus enemics',
	'ADD_FRIEND'			=> 'Afegeix-lo als meus amics',
	'AFTER'					=> 'Després',

	'ALL'					=> 'Tot',

	'BEFORE'				=> 'Abans',

	'CC_EMAIL'				=> 'Envia’m una còpia d’aquest correu.',
	'CONTACT_USER'			=> 'Contacta amb',

	'DEST_LANG'				=> 'Idioma',
	'DEST_LANG_EXPLAIN'		=> 'Selecioneu l’idioma adient per al destinatari d’aquest missatge, si és que està disponible.',

	'EMAIL_BODY_EXPLAIN'	=> 'Aquest missatge s’enviarà com text net, no hi inclogueu HTML ni BBCode. L’adreça de resposta per aquest missatge serà la vostra adreça electrònica.',
	'EMAIL_DISABLED'		=> 'Les funcions d’enviament de correu electrònic estan desactivades.',
	'EMAIL_SENT'			=> 'S’ha enviat el correu electrònic.',
	'EMAIL_TOPIC_EXPLAIN'	=> 'Aquest missatge s’enviarà com text net, no hi inclogueu HTML ni BBCode. Tingueu en compte que la informació del tema ja s’inclou al missatge. L’adreça de resposta per aquest missatge serà la vostra adreça electrònica.',
	'EMPTY_ADDRESS_EMAIL'	=> 'Heu de proporcionar una adreça electrònica vàlida per al destinatari.',
	'EMPTY_MESSAGE_EMAIL'	=> 'Heu d’introduir un missatge per enviar el correu.',
	'EMPTY_MESSAGE_IM'		=> 'Heu d’introduir un missatge.',
	'EMPTY_NAME_EMAIL'		=> 'Heu d’introduir el nom real del destinatari.',
	'EMPTY_SUBJECT_EMAIL'	=> 'Heu d’especificar un assumpte per al correu.',
	'EQUAL_TO'				=> 'Igual a',

	'FIND_USERNAME_EXPLAIN'	=> 'Utilitzeu aquest formulari per cercar membres determinats. No cal que ompliu tots els camps. Per obtenir coincidències parcials utilitzeu * com a comodí. Per introduir dates utilitzeu el format <kbd>AAAA-MM-DD</kbd>, p.ex. <samp>2004-02-29</samp>. Utilitzeu les caselles de selecció per triar un o més usuaris (depenent del formulari és possible acceptar diversos usuaris) i feu clic sobre el botó "Selecciona els marcats" per tornar al formulari anterior.',
	'FLOOD_EMAIL_LIMIT'		=> 'Ara mateix no podeu enviar un altre correu electrònic. Si us plau, torneu-ho a provar més tard.',

	'GROUP_LEADER'			=> 'Líder del grup',

	'HIDE_MEMBER_SEARCH'	=> 'Oculta la cerca de membres',

	'IM_ADD_CONTACT'		=> 'Afegeix un contacte',
	'IM_AIM'				=> 'Tingueu en compte que cal tenir l’AOL Instant Messenger instal·lat per utilitzar aquesta funció.',
	'IM_AIM_EXPRESS'		=> 'AIM Express',
	'IM_DOWNLOAD_APP'		=> 'Baixa l’aplicació',
	'IM_ICQ'				=> 'Tingueu en compte que els usuaris poden haver demanat no rebre missatges instantanis d’usuaris desconeguts.',
	'IM_JABBER'				=> 'Tingueu en compte que els usuaris poden haver demanat no rebre missatges instantanis d’usuaris desconeguts.',
	'IM_JABBER_SUBJECT'		=> 'Aquest és un missatge automàtic, no hi respongueu! Missatge de l’usuari %1$s a les %2$s.',
	'IM_MESSAGE'			=> 'El vostre missatge',
	'IM_MSNM'				=> 'Tingueu en compte que cal tenir el Windows Messenger instal·lat per utilitzar aquesta funció.',
	'IM_MSNM_BROWSER'		=> 'El vostre navegador no és compatible amb aquesta funció.',
	'IM_MSNM_CONNECT'		=> 'No esteu connectat al MSNM.\nHeu de connectar-vos al MSNM per continuar.',
	'IM_NAME'				=> 'El vostre nom',
	'IM_NO_DATA'			=> 'No hi ha informació de contacte adient per aquest usuari.',
	'IM_NO_JABBER'			=> 'La missatgeria directa d’usuaris Jabber no està permesa en aquest fòrum. Necessitareu un client Jabber instal·lat a la vostra màquina per posar-vos en contacte amb el destinatari llistat a sobre.',
	'IM_RECIPIENT'			=> 'Destinatari',
	'IM_SEND'				=> 'Envia el missatge',
	'IM_SEND_MESSAGE'		=> 'Envia el missatge',
	'IM_SENT_JABBER'		=> 'El vostre missatge per %1$s s’ha enviat correctament.',
	'IM_USER'				=> 'Envia un missatge instantani',

	'LAST_ACTIVE'				=> 'Darrera connexió',
	'LESS_THAN'					=> 'Menys de ',
	'LIST_USER'					=> '1 usuari',
	'LIST_USERS'				=> '%d usuaris',
	'LOGIN_EXPLAIN_LEADERS'		=> 'Cal estar registrat i haver iniciat la sessió per mostrar el llistat amb l’equip del fòrum.',
	'LOGIN_EXPLAIN_MEMBERLIST'	=> 'Cal estar registrat i haver iniciat la sessió per accedir a la llista de membres.',
	'LOGIN_EXPLAIN_SEARCHUSER'	=> 'Cal estar registrat i haver iniciat la sessió per cercar usuaris.',
	'LOGIN_EXPLAIN_VIEWPROFILE'	=> 'Cal estar registrat i haver iniciat la sessió per visualitzar perfils.',

	'MORE_THAN'				=> 'Més de ',

	'NO_EMAIL'				=> 'No se us permet enviar correus electrònics a aquest usuari.',
	'NO_VIEW_USERS'			=> 'No esteu autoritzat a veure la llista d’usuaris ni els perfils.',

	'ORDER'					=> 'Ordre',
	'OTHER'					=> 'Altres',

	'POST_IP'				=> 'Enviat des de la IP/domini',

	'RANK'					=> 'Rang',
	'REAL_NAME'				=> 'Nom del destinatari',
	'RECIPIENT'				=> 'Destinatari',
	'REMOVE_FOE'			=> 'Treu-lo dels enemics',
	'REMOVE_FRIEND'			=> 'Treu-lo dels amics',

	'SEARCH_USER_POSTS'		=> 'Cerca les entrades d’aquest usuari',
	'SELECT_MARKED'			=> 'Selecciona els marcats',
	'SELECT_SORT_METHOD'	=> 'Selecciona el mètode d’ordenació',
	'SEND_AIM_MESSAGE'		=> 'Envia un missatge AIM',
	'SEND_ICQ_MESSAGE'		=> 'Envia un missatge ICQ',
	'SEND_IM'				=> 'Missatgeria instantània',
	'SEND_JABBER_MESSAGE'	=> 'Envia un missatge Jabber',
	'SEND_MESSAGE'			=> 'Missatge',
	'SEND_MSNM_MESSAGE'		=> 'Envia un missatge MSNM/WLM',
	'SEND_YIM_MESSAGE'		=> 'Envia un missatge YIM',
	'SORT_EMAIL'			=> 'Adreça electrònica',
	'SORT_LAST_ACTIVE'		=> 'Darrera connexió',
	'SORT_POST_COUNT'		=> 'Nombre d’entrades',

	'USERNAME_BEGINS_WITH'	=> 'El nom de l’usuari comença per',
	'USER_ADMIN'			=> 'Administra aquest usuari',
	'USER_BAN'				=> 'Bandeig',
	'USER_FORUM'			=> 'Estadístiques de l’usuari',
	'USER_LAST_REMINDED'	=> array(
		0		=> 'No hi ha cap recordatori enviat actualment',
		1		=> '%1$d recordatori enviat<br />» %2$s',
	),
	'USER_ONLINE'			=> 'Connectat',
	'USER_PRESENCE'			=> 'Presència als fòrums',

	'VIEWING_PROFILE'		=> 'Esteu veient el perfil de: %s',
	'VISITED'				=> 'Darrera connexió',

	'WWW'					=> 'Lloc web',
));

?>