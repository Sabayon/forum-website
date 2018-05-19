<?php
/**
*
* acp_permissions.php [Albanian]
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '		<p>Të drejtat janë tepër të imtësishme dhe të grupuara në katër seksione të cilat janë:</p>

		<h2>Të drejtat globale</h2>
		<p>Këto përdoren për të kontrolluar aksesin në një nivel global dhe i aplikohen të gjithë bordit. Më pas ato ndahen në Të Drejtat e Përdoruesve, Të Drejtat e Grupeve, Administratorë dhe Moderatorë Global.</p>

		<h2>Të drejtat bazë mbi forumin</h2>
		<p>Këto përdoren për të kontrolluar aksesin në bazën e forumit. Më pas ato ndahen në Të Drejtat e Forumit, Moderatorët e Forumit, Të Drejtat e Përdoruesve në forum dhe Të Drejtat e Grupeve në Forum.</p>

		<h2>Të drejtat e roleve</h2>
		<p>Këto përdoren për të krijuar sete të ndryshme të drejtash për lloje të ndryshme të drejtash, që më pas mund t\'u caktohen një roli bazë. Rolet e paracaktuara duhet të mbulojnë administrimin e bordit gjerësisht, nëpërmjet katër ndarjeve. Ju mund të shtoni/modifikoni/fshini rolet si të jetë më e përshtashme për ju.</p>

		<h2>Të drejtat e maskave</h2>
		<p>Përdoren për të parë të drejtat e caktuara përdoruesve, Moderatorë (Lokal dhe Global), Administratorë ose Forume.</p>
	
		<br />

		<p>Për informacion të mëtejshëm për caktimin e të drejtave në bordin tuaj phpBB3 board, shikoni <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Kapitullin 1.5 e Quick Start Guide</a>.</p>
	',
	
	'ACL_NEVER'				=> 'Asnjëherë',
	'ACL_SET'				=> 'Opsionet e Të Drejtave',
	'ACL_SET_EXPLAIN'		=> 'Të drejtat bazohen në një sistem përgjigje të thjeshtë <samp>PO</samp>/<samp>JO</samp>. Vënia e një opsioni në <samp>ASNJEHERE</samp> për një përdorues ose përdorues grupi mbivendos çdo vlerë tjetër të vënë asaj. Nëse nuk doni të vendosni një vlerë për një opsion për këtë përdorues ose grup, zgjidhni <samp>JO</samp>. Nëse një vlerë i është dhënë këtij opsioni diku tjetër do të përdoren në preferencë, do të cilësohen <samp>ASNJEHERE</samp>. Të gjithë objektet e shënuara (me kutizën e zgjedhjes përpara) do të kopjojnë të drejtat nga ju të paracaktuara.',
	'ACL_SETTING'			=> 'Opsion',
	
	'ACL_TYPE_A_'			=> 'Të drejtat Administrative',
	'ACL_TYPE_F_'			=> 'Të drejtat e forumit',
	'ACL_TYPE_M_'			=> 'Të drejtat e moderimit',
	'ACL_TYPE_U_'			=> 'Të drejtat e përdoruesit',
	
	'ACL_TYPE_GLOBAL_A_'	=> 'Të drejtat Administrative',
	'ACL_TYPE_GLOBAL_U_'	=> 'Të drejtat e përdoruesit',
	'ACL_TYPE_GLOBAL_M_'	=> 'Të drejtat e Moderatorit Global',
	'ACL_TYPE_LOCAL_M_'		=> 'Të drejtat e Moderatorit për forumin',
	'ACL_TYPE_LOCAL_F_'		=> 'Të drejtat e forumit',
	
	'ACL_NO'				=> 'Jo',
	'ACL_VIEW'				=> 'Duke parë të drejtat',
	'ACL_VIEW_EXPLAIN'		=> 'Këtu mund të shihni të drejtat efektive që kanë përdoruesit dhe grupet. Një katror i kuq tregon që përdoruesi ose grupi nuk ka të drejta; një katror jeshil tregon që përdoruesi ose grupi ka të drejta.',
	'ACL_YES'				=> 'Po',
	
	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Këtu ju mund të caktoni të drejtat administrative për përdoruesit ose grupet. Të gjithë përdoruesit me të drejta administrative mund të shohin panelin e kontrollit të administratorit.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Këtu mund të caktoni përdoruesit ose grupet si moderatorë forumi. Për t\'u dhënë përdoruesve akses në forum, për të caktuar të drejta moderimi global ose administrativ ju lutemi të përdorni faqen e përshtatshme.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Këtu ju mund të kombinoni cilët përdorues dhe grupe të kenë akses në çdo forum. Për të caktuar moderatorë ose administratorë ju lutemi të përdorni faqen e përshtatshme',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Këtu ju mund t\'u jepni të drejta moderimi global përdoruesve ose grupeve. Këta moderatorë janë si të gjithë moderatoret e tjerë me ndryshimin që kanë akses moderimi në të gjithë forumet.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Këtu ju mund t\'u jepni përdoruesve të drejta për forumin.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Këtu ju mund t\'u jepni të drejta moderimi global grupeve - të drejtat e përdoruesve, të drejtat e moderatorëve global dhe të drejtat administrative. Të drejtat e përdoruesve përfshijne mundësi të tilla si perdorimi i avatareve, dërgimi i mesazheve private, etj; të drejtat e moderatoreve global si aprovimi i postimeve, menaxhimi i përjashtimeve, etj; te drejtat administrative si kombinimi i të drejtave, shkrimi i BBCode të personalizuar, menaxhimi i forumeve, etj. Te drejtat e përdoruesve individualë duhet të ndryshohen vetem në raste të rralla, mënyra e rekomanduar është vendosja e përdoruesve në grupe dhe caktimi i të drejtave të grupit.',
    'ACP_ADMIN_ROLES_EXPLAIN'               	=> 'Këtu ju mund të menaxhoni rolet për të drejtat administrative. Rolet janë të drejta efektive. Nëse ndryshoni një rol, artikujve të cilëve u është caktuar ky rol do t\'u ndryshojnë të drejtat gjithashtu.',
    'ACP_FORUM_ROLES_EXPLAIN'               	=> 'Këtu ju mund të menaxhoni rolet për të drejtat e forumeve. Rolet janë të drejta efektive. Nëse ndryshoni një rol, artikujve të cilëve u është caktuar ky rol do t\'u ndryshojnë të drejtat gjithashtu.',
    'ACP_MOD_ROLES_EXPLAIN'                  	=> 'Këtu ju mund të menaxhoni rolet për të drejtat moderative. Rolet janë të drejta efektive. Nëse ndryshoni një rol, artikujve të cilëve u është caktuar ky rol do t\'u ndryshojnë të drejtat gjithashtu.',
    'ACP_USER_ROLES_EXPLAIN'               		=> 'Këtu ju mund të menaxhoni rolet për të drejtat e përdoruesve. Rolet janë të drejta efektive. Nëse ndryshoni një rol, artikujve të cilëve u është caktuar ky rol do t\'u ndryshojnë të drejtat gjithashtu.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Këtu ju mund të caktoni të drejtat e forumit për përdoruesit.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Këtu ju mund t\'u caktoni të drejta globale përdoruesve - të drejtat e përdoruesve, të drejtat e moderatorëve global dhe të drejtat administrative. Të drejtat e përdoruesve përfshijnë mundësi të tilla si përdorimi i avatarëve, dërgimi i mesazheve private, etj; të drejtat e moderatorëve global si aprovimi i postimeve, menaxhimi i përjashtimeve, etj; të drejtat administrative si kombinimi i të drejtave, shkrimi i BBCode të personalizuar, menaxhimi i forumeve, etj. Të drejtat e përdoruesve individualë duhet të ndryshohen vetëm në raste të rralla, mënyra e rekomanduar është vendosja e përdoruesve në grupe dhe caktimi i të drejtave të grupit.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Këtu ju mund të shikoni të drejtat administrative efektive të caktuara për përdoruesit ose grupet e zgjedhur.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Këtu ju mund të shikoni të drejtat moderative globale te caktuara për përdoruesit ose grupet e zgjedhur.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Këtu ju mund të shikoni të drejtat për forumin të caktuara për përdoruesit ose grupet e zgjedhur.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Këtu ju mund të shikoni të drejtat për moderatorët e forumit të caktuara për përdoruesit ose grupet e zgjeghur.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Këtu ju mund të shikoni të drejtat efektive për përdoruesit të caktuara për përdoruesit ose grupet e zgjeghur.',
	
	'ADD_GROUPS'				=> 'Shto grupe',
	'ADD_PERMISSIONS'			=> 'Shto te drejta',
	'ADD_USERS'					=> 'Shto përdorues',
	'ADVANCED_PERMISSIONS'		=> 'Të drejtat e avancuara',
	'ALL_GROUPS'				=> 'Zgjidh të gjithë grupet',
	'ALL_NEVER'					=> 'Të gjithë <samp>ASNJEHERE</samp>',
	'ALL_NO'					=> 'Të gjithë <samp>JO</samp>',
	'ALL_USERS'					=> 'Zgjidh të gjithë përdoruesit',
	'ALL_YES'					=> 'Të gjithe <samp>PO</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Apliko të gjitha të drejtat',
	'APPLY_PERMISSIONS'			=> 'Apliko të drejtat',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'Të drejtat dhe rolet e përcaktuara për këtë artikull do t\'i aplikohen këtij artikulli dhe të gjithë të zgjedhurve të tjerë.',
	'AUTH_UPDATED'				=> 'Të drejtat u azhornuan.',
	
	'CREATE_ROLE'				=> 'Krijo rol',
	'CREATE_ROLE_FROM'			=> 'Përdor opsionet nga…',
	'CUSTOM'					=> 'Personalizuar…',
	
	'DEFAULT'					=> 'Paracaktuar',
	'DELETE_ROLE'				=> 'Fshi rol',
	'DELETE_ROLE_CONFIRM'		=> 'Jeni të sigurt që doni të fshini këtë rol? Artikujt që kane këtë rol <strong>nuk</strong> nuk do të humbasin opsionet e të drejtave të tyre.',
	'DISPLAY_ROLE_ITEMS'		=> 'Shiko artikujt e ketij roli',
	
	'EDIT_PERMISSIONS'			=> 'Modifiko të drejtat',
	'EDIT_ROLE'					=> 'Modifiko rol',
	
	'GROUPS_NOT_ASSIGNED'		=> 'Asnje grup i caktuar këtij roli',
	
	'LOOK_UP_GROUP'				=> 'Shiko grupin e përdoruesve',
	'LOOK_UP_USER'				=> 'Shiko përdorues',
	
	'MANAGE_GROUPS'		=> 'Menaxho grupe',
	'MANAGE_USERS'		=> 'Menaxho përdorues',
	
	'NO_AUTH_SETTING_FOUND'		=> 'Opsionet e të drejtave nuk janë caktuar.',
	'NO_ROLE_ASSIGNED'			=> 'Asnjë rol i caktuar…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Vendosja në këtë rol nuk ndryshon të drejtat. Nëse doni të hiqni/fshini të drejtat duhet të përdorni link-un “Të gjithë <samp>JO</samp>”.',
	'NO_ROLE_AVAILABLE'			=> 'Asnjë rol i disponueshëm',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Ju lutemi të emërtoni rolin.',
	'NO_ROLE_SELECTED'			=> 'Roli nuk mund të gjëndet.',
	'NO_USER_GROUP_SELECTED'	=> 'Ju nuk keni zgjedhur ndonjë përdorues ose grup.',
	
	'ONLY_FORUM_DEFINED'	=> 'Në zgjedhjen tuaj ju caktuat vetëm forumet. Ju lutemi të caktoni gjithashtu të paktën një përdorues ose grup.',
	
	'PERMISSION_APPLIED_TO_ALL'		=> 'Të drejtat dhe roli do t\'i aplikohet gjithashtu të gjithë objekteve të zgjedhur.',
	'PLUS_SUBFORUMS'				=> '+ Nënforume',
	
	'REMOVE_PERMISSIONS'			=> 'Fshi të drejtat',
	'REMOVE_ROLE'					=> 'Fshi rol',
	'RESULTING_PERMISSION'			=> 'Të drejtat e rezultuara',
	'ROLE'							=> 'Rol',
	'ROLE_ADD_SUCCESS'				=> 'Roli u shtua me sukses.',
	'ROLE_ASSIGNED_TO'				=> 'Përdoruesit/grupet j\'u caktuan %s',
	'ROLE_DELETED'					=> 'Roli u fshi me sukses.',
	'ROLE_DESCRIPTION'				=> 'Përshkrimi i rolit',
	
	'ROLE_ADMIN_FORUM'			=> 'Admin i forumit',
	'ROLE_ADMIN_FULL'			=> 'Admin i plotë',
	'ROLE_ADMIN_STANDARD'		=> 'Admin standart',
	'ROLE_ADMIN_USERGROUP'		=> 'Përdorues dhe Admin i grupeve',
	'ROLE_FORUM_BOT'			=> 'Aksesi i Bot',
	'ROLE_FORUM_FULL'			=> 'Akses i Plotë',
	'ROLE_FORUM_LIMITED'		=> 'Akses i Limituar',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Akses i Kufizuar + Sondazhe',
	'ROLE_FORUM_NOACCESS'		=> 'Asnjë Akses',
	'ROLE_FORUM_ONQUEUE'		=> 'Në Pritje të Moderimit',
	'ROLE_FORUM_POLLS'			=> 'Akses standart + Sondazhe',
	'ROLE_FORUM_READONLY'		=> 'Akses Vetëm Lexim',
	'ROLE_FORUM_STANDARD'		=> 'Akses Standart',
	'ROLE_MOD_FULL'				=> 'Moderator i Plotë',
	'ROLE_MOD_QUEUE'			=> 'Moderator Në Pritje',
	'ROLE_MOD_SIMPLE'			=> 'Moderator i Thjeshtë',
	'ROLE_MOD_STANDARD'			=> 'Moderator Standart',
	'ROLE_USER_FULL'			=> 'Të gjitha funksionet',
	'ROLE_USER_LIMITED'			=> 'Funksione të kufizuara',
	'ROLE_USER_NOAVATAR'		=> 'Jo avatar',
	'ROLE_USER_NOPM'			=> 'Jo mesazhe private',
	'ROLE_USER_STANDARD'		=> 'Funksione Standarte',
	
	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Mund të ketë akses në menaxhimin e forumit dhe opsionet e të drejtave të forumit.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Ka akses në të gjitha funksionet administrative të këtij bordi.<br />Jo e rekomanduar.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Ka akses në funksionet më të shumta administrative por nuk ka të drejtë të përdorë serverin ose opsionet e sistemit.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Mund të manaxhojë përdoruesit dhe grupet: Mundet të ndryshojë të drejtat, opsionet, menaxhojë përjashtimet dhe rangjet.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Ky rol rekomandohet për bots dhe motorët e kërkimit.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Mund të përdorë të gjithë funksionet e forumit, duke përfshirë Lajmërimet dhe Kryetemat. Mund të injoroje limitin e flood.<br />Nuk rekomandohet për përdorues normalë.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Mund të përdorë disa funksione të forumit, por nuk mund të bashkengjisë shtojca ose të përdorë ikonat e temave.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Si për Aksesin e Limituar por mund të krijojë sondazhe.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Nuk mund as të shohë as të ketë akses në forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Mund të përdorë të shumtën e funksioneve të forumit duke përfshirë shtojcat, por postimet dhe temat duhet të miratohen nga një moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Si Aksesi Standart por mund të krijojë sondazhe.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Mund të lexoje forumin, por nuk mund të krijojë tema të reja ose t\'u përgjigjet postimeve.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Mund të përdorë të shumtën e funksioneve të forumit duke përfshirë shtojcat dhe fshirjen e temave të veta, por nuk mund të mbyllë temat e veta dhe nuk mund të krijojë sondazhe.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Mund të përdorë të gjithë funksionet moderative, duke përfshirë përjashtimet.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Mund të përdorë Panelin e Moderatorit për të vlerësuar dhe modifikuar postimet, por asgjë më tepër.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Mund të përdorë funksionet bazë të temës. Nuk mund të bëjë paralajmerime ose të përdorë Panelin e Moderatorit.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Mund të përdorë të shumtën e funksioneve moderative, por nuk mund të përjashtojë përdoruesit ose të ndryshojë autorin e postimit.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Mund të përdorë të gjitha funksionet e mundshme të forumit për përdoruesit duke përfshirë ndërrimin e pseudonimit ose injorimin e kufizimit flood.<br />Nuk rekomandohet.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Mund të ketë akses në disa nga funksionet e përdoruesit. Shtojcat, e-mail, dhe mesazhet e momentit nuk lejohen.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Ka funksion të kufizuar dhe nuk lejohet të përdorë funksionin e avatarit.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Ka funksion të kufizuar dhe nuk lejohet të përdorë Mesazhet Private.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Ka akses në shumicën por jo të gjitha funksionet e përdoruesit. Nuk mund të ndryshoje emrin e përdoruesit ose të injorojë kufizimin e flood.',
	
	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Ju mund të shkruani një përshkrim të shkurtër se çfarë bën ky rol ose kuptimin e tij. Teksti do të shfaqet në pamjen e të drejtave.',
	'ROLE_DESCRIPTION_LONG'			=> 'Përshkrimi i rolit është shumë i gjatë; ju lutemi t\'a limitoni në 4000 karaktere.',
	'ROLE_DETAILS'					=> 'Detajet e rolit',
	'ROLE_EDIT_SUCCESS'				=> 'Roli u modifikua me sukses.',
	'ROLE_NAME'						=> 'Emri i rolit',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Një rol me emrin <strong>%s</strong> ekziston për llojin e specifikuar të të drejtave.',
	'ROLE_NOT_ASSIGNED'				=> 'Roli nuk është caktuar akoma.',
	
	'SELECTED_FORUM_NOT_EXIST'		=> 'Forumi(et) i zgjedhur nuk ekziston.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Grupi(et) i zgjedhur nuk ekziston.',
	'SELECTED_USER_NOT_EXIST'		=> 'Përdoruesi(t) i zgjedhur nuk ekziston.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Forumi që zgjodhët këtu do të përfshijë të gjithë nënforumet në zgjedhje.',
	'SELECT_ROLE'					=> 'Zgjidh rolin…',
	'SELECT_TYPE'					=> 'Zgjidh llojin',
	'SET_PERMISSIONS'				=> 'Cakto të drejta',
	'SET_ROLE_PERMISSIONS'			=> 'Cakto të drejtat e rolit',
	'SET_USERS_PERMISSIONS'			=> 'Cakto të drejtat e përdoruesve',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Cakto të drejtat për forum të përdoruesve',
	
	'TRACE_DEFAULT'					=> 'Në mënyrë të paracaktuar çdo e drejtë është <samp>JO</samp> (e pavendosur). Kështu që të drejtat mund të mbivendosen nga opsione të tjera.',
	'TRACE_FOR'						=> 'Gjurme për',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'E drejta e këtij grupi është caktuar <samp>ASNJEHERE</samp> në rezultat total kështu që do të mbahet rezultati i vjetër.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'E drejta e këtij grupi për këtë forum është caktuar <samp>ASNJEHERE</samp> në rezultat total kështu që do të mbahet rezultati i vjetër.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'E drejta e ketij grupi është caktuar <samp>ASNJEHERE</samp> e cila kthehet në totale e re pasi nuk është vendosur akoma (vendos në <samp>JO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'E drejta e këtij grupi për këtë forum është caktuar <samp>ASNJEHERE</samp> e cila kthehet në totale e re pasi nuk është vendosur akoma (vendos në <samp>JO</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'E drejta e këtij grupi është caktuar <samp>ASNJEHERE</samp> e cila mbivendos totalin <samp>PO</samp> në <samp>ASNJEHERE</samp> për këtë përdorues.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'E drejta e këtij grupi për këtë forum është caktuar <samp>ASNJEHERE</samp> e cila mbivendos totalin <samp>PO</samp> në <samp>ASNJEHERE</samp> për këtë përdorues.',
	'TRACE_GROUP_NO'				=> 'E drejta është <samp>JO</samp> për këtë grup, kështu që vlera e vjeter totale do të mbahet.',
	'TRACE_GROUP_NO_LOCAL'			=> 'E drejta është <samp>JO</samp> për këtë grup në këtë forum, kështu që do të mbahet vlera e vjetër totale.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'E drejta e këtij grupi është caktuar <samp>PO</samp> por totali <samp>ASNJEHERE</samp> nuk mund të mbivendoset.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'E drejta e këtij grupi për këtë forum është caktuar <samp>PO</samp> por totali <samp>ASNJEHERE</samp> nuk mund të mbivendoset.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'E drejta e këtij grupi është caktuar <samp>PO</samp> e cila kthehet në totale e re pasi nuk është vendosur akoma (vendos në <samp>JO</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'E drejta e këtij grupi për këtë forum është caktuar <samp>PO</samp> e cila kthehet në totale e re pasi nuk është vendosur akoma (vendos në <samp>JO</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'E drejta e këtij grupi është caktuar <samp>PO</samp> dhe të drejtat totale janë <samp>PO</samp>, kështu që do të mbahet rezultati total.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'E drejta e këtij grupi për këtë forum është caktuar <samp>PO</samp> dhe të drejtat totale janë <samp>PO</samp>, keshtu që do të mbahet rezultati total.',
	'TRACE_PERMISSION'				=> 'E drejta e gjurmës - %s',
	'TRACE_RESULT'					=> 'Rezultati i gjurmës',
	'TRACE_SETTING'					=> 'Opsionet e gjurmës',
	
	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Të drejtat e forumit për përdoruesin vlerësohen në <samp>PO</samp>, edhe totali i të drejtave është caktuar <samp>PO</samp>, kështu që do të mbahet rezultati total. %sGjurma të drejtat globale%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Të drejtat e forumit për përdoruesin vlerësohen në <samp>PO</samp> që mbivendos rezultatin total të tanishëm <samp>ASNJEHERE</samp>. %sGjurma të drejtat globale%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Të drejtat e forumit për përdoruesin vlerësohen në <samp>ASNJEHERE</samp> që nuk influencon në të drejtat lokale. %sGjurma të drejtat globale%s',
	
	'TRACE_USER_FOUNDER'					=> 'Përdoruesi është krijues i bordit, ndaj të drejtat administrative janë caktuar <samp>PO</samp> si të paracaktuara.',
	'TRACE_USER_KEPT'						=> 'E drejta e përdoruesit është caktuar <samp>JO</samp> kështu që do të mbahet vlera totale e mëparshme.',
	'TRACE_USER_KEPT_LOCAL'					=> 'E drejta e përdoruesit për këtë forum është caktuar <samp>JO</samp> kështu që do të mbahet vlera totale e mëparshme.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'E drejta e përdoruesit është caktuar <samp>ASNJEHERE</samp> dhe vlera totale është caktuar <samp>ASNJEHERE</samp>, kështu që asgjë nuk ndryshohet.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'E drejta e përdoruesit për këtë forum është caktuar <samp>ASNJEHERE</samp> dhe vlera totale është caktuar <samp>ASNJEHERE</samp>, kështu që asgjë nuk ndryshohet.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'E drejta e përdoruesit është caktuar <samp>ASNJEHERE</samp> e cila bëhet vlera e re totale pasi ishte JO.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'E drejta e përdoruesit për këtë forum është caktuar <samp>ASNJEHERE</samp> e cila bëhet vlera e re totale pasi ishte JO.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'E drejta e përdoruesit është caktuar <samp>ASNJEHERE</samp> dhe mbivendos të mëparshmen <samp>PO</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'E drejta e përdoruesit për këtë forum është caktuar <samp>ASNJEHERE</samp> dhe mbivendos të mëparshmen <samp>PO</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'E drejta e përdoruesit është caktuar <samp>JO</samp> dhe vlera totale është caktuar JO kështu që paracaktohet në <samp>ASNJEHERE</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'E drejta e përdoruesit për këtë forum është caktuar <samp>JO</samp> dhe vlera totale është caktuar JO kështu që paracaktohet në <samp>ASNJEHERE</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'E drejta e përdoruesit është caktuar <samp>PO</samp> Por totali <samp>ASNJEHERE</samp> nuk mund të mbivendoset.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'E drejta e përdoruesit për këtë forum është caktuar <samp>PO</samp> Por totali <samp>ASNJEHERE</samp> nuk mund të mbivendoset.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'E drejta e përdoruesit është caktuar <samp>PO</samp> e cila bëhet vlera totale pasi është përcaktuar <samp>JO</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'E drejta e përdoruesit për këtë forum është caktuar <samp>PO</samp> e cila bëhet vlera totale pasi ështe përcaktuar <samp>JO</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'E drejta e përdoruesit është caktuar <samp>PO</samp> dhe vlera totale është caktuar <samp>PO</samp>, kështu që nuk ndryshohet gjë.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'E drejta e përdoruesit për këtë forum është caktuar <samp>PO</samp> dhe vlera totale është caktuar <samp>PO</samp>, kështu që nuk ndryshohet gjë.',
	'TRACE_WHO'								=> 'Kush',
	'TRACE_TOTAL'							=> 'Total',
	
	'USERS_NOT_ASSIGNED'			=> 'Asnjë përdorues i caktuar për këtë rol',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'është antar i grupeve të paracaktuar në vazhdim',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'është antar i grupeve të personalizuar në vazhdim',
	
	'VIEW_ASSIGNED_ITEMS'	=> 'Shiko artikujt e caktuar',
	'VIEW_LOCAL_PERMS'		=> 'Të drejtat Lokale',
	'VIEW_GLOBAL_PERMS'		=> 'Të drejtat Globale',
	'VIEW_PERMISSIONS'		=> 'Shiko të drejtat',
	
	'WRONG_PERMISSION_TYPE'				=> 'Zgjodhët llojin e gabuar të të drejtave.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Opsionet e të drejtave janë në format të gabuar; phpBB e ka të pamundur ti ekzekutoje ato me korrektësi.',
));

?>