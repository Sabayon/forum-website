<?php
/**
*
* acp_posting [Catalan]
*
* @package language
* @version $Id: posting.php 9375 2009-03-16 16:47:16Z acydburn $
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

// BBCodes
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'El BBCode és una implementació especial de l’HTML que ofereix un control més gran sobre què i com es mostra alguna cosa. Des d’aquesta pàgina podeu afegir, eliminar i editar BBCodes personalitzats.',
	'ADD_BBCODE'				=> 'Afegeix un BBCode nou',

	'BBCODE_ADDED'				=> 'Sha afegit el BBCode correctament.',
	'BBCODE_EDITED'				=> 'S’ha editat el BBCode correctament.',
	'BBCODE_NOT_EXIST'			=> 'El BBCode que heu seleccionat no existeix.',
	'BBCODE_HELPLINE'			=> 'Línia d’ajuda',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Aquest camp conté el text que es mostra en passar el ratolí per damunt del text del BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Text de la línia d’ajuda',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'La línia d’ajuda que heu introduït és massa llarga.',

	'BBCODE_INVALID_TAG_NAME'	=> 'El nom d’etiqueta BBCode que heu seleccionat ja existeix.',
	'BBCODE_INVALID'			=> 'El BBCode està construït de manera no vàlida.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'El BBCode personalitzat ha de tenir tant l’etiqueta d’obertura com la de tancament.',
	'BBCODE_TAG'				=> 'Etiqueta',
	'BBCODE_TAG_TOO_LONG'		=> 'El nom d’etiqueta que heu seleccionat és massa llarg.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'La definició de l’etiqueta que heu introduït és massa llarga, escurceu la definició de l’etiqueta.',
	'BBCODE_USAGE'				=> 'Sintaxi BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[ressalta={COLOR}]{TEXT}[/ressalta]<br /><br />[lletra={SIMPLETEXT1}]{SIMPLETEXT2}[/lletra]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Aquí definiu com s’utilitza el BBCode. Reemplaceu les variables d’entrada pel testimoni corresponent (%svegeu a sota%s).',

	'EXAMPLE'						=> 'Exemple:',
	'EXAMPLES'						=> 'Exemples:',

	'HTML_REPLACEMENT'				=> 'Substitució HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Aquí definiu la substitució HTML per defecte. No us oblideu de posar els testimonis que heu utilitzat a sobre!',

	'TOKEN'					=> 'Testimoni',
	'TOKENS'				=> 'Testimonis',
	'TOKENS_EXPLAIN'		=> 'Els testimonis són textos variables per ser introduïts per l’usuari. El text d’entrada serà vàlid només si coincideix amb la definició corresponent. Si cal, podeu numerar-los afegint un número com a darrer caràcter entre les claus, p.ex. {TEXT1}, {TEXT2}.<br /><br />Dintre de la substitució HTML també podeu utilitzar qualsevol cadena d’idioma present al directori language/ així: {L_<em>&lt;STRINGNAME&gt;</em>} on <em>&lt;STRINGNAME&gt;</em> és el nom de la cadena traduïda que voleu afegir. Per exemple, {L_WROTE} es mostrarà com “ha escrit” o la seva traducció depenent de la localització de l’usuari.<br /><br /><strong>Tingueu en compte que als BBCodes personalitzats només es poden utilitzar els testimonis llistats a sota.</strong>',
	'TOKEN_DEFINITION'		=> 'Què pot ser?',
	'TOO_MANY_BBCODES'		=> 'No podeu crear més BBCodes. Elimineu un o més BBCodes i torneu a intentar-ho.',

	'tokens'	=>	array(
		'TEXT'			=> 'Qualsevol text, incloent-hi caràcters estrangers, números, etc… És recomanable que no utilitzeu aquest testimoni a les etiquetes HTML. En el seu lloc intenteu utilitzar IDENTIFIER o SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Caràcters de l’alfabet llatí (A-Z), números, espais, comes, punts, menys, més, guió i caràcter de subratllat',
		'IDENTIFIER'	=> 'Caràcters de l’alfabet llatí (A-Z), números, guió i caràcter de subratllat',
		'NUMBER'		=> 'Qualsevol sèrie de dígits',
		'EMAIL'			=> 'Una adreça electrònica vàlida',
		'URL'			=> 'Un URL vàlid que utilitzi qualsevol protocol (http, ftp, etc… no es pot utilitzar per aprofitar-se del javascript). Si no se’n proporciona cap, la cadena es prefixa amb “http://”.',
		'LOCAL_URL'		=> 'Un URL local. L’URL ha de ser relatiu a la pàgina del tema i no pot contenir un nom de servidor ni un protocol.',
		'COLOR'			=> 'Un color HTML, pot ser o bé en forma numèrica <samp>#FF1234</samp> o una <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">paraula clau de color CSS</a> com ara <samp>fuchsia</samp> o <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Des d’aquesta pàgina podeu afegir, eliminar i editar les icones que els usuaris poden afegir als temes o entrades. Aquestes icones normalment es mostren al costat del títol dels temes a la llista dels fòrums, o al costat dels assumptes de les entrades a la llista dels temes. També podeu instal·lar i crear paquets nous d’icones.',
	'ACP_SMILIES_EXPLAIN'	=> 'Les emoticones són imatges típicament petites, de vegades animades, utilitzades per transmetre una emoció o sentiment. Des d’aquesta pàgina podeu afegir, eliminar i editar les emoticones que els usuaris poden utilitzar a les entrades i els missatges privats. També podeu instal·lar i crear paquets nous d’emoticones.',
	'ADD_SMILIES'			=> 'Afegeix múltiples emoticones',
	'ADD_SMILEY_CODE'		=> 'Afegeix un codi d’emoticona nou',
	'ADD_ICONS'				=> 'Afegeix múltiples icones',
	'AFTER_ICONS'			=> 'Després de %s',
	'AFTER_SMILIES'			=> 'Després de %s',

	'CODE'						=> 'Codi',
	'CURRENT_ICONS'				=> 'Icones actuals',
	'CURRENT_ICONS_EXPLAIN'		=> 'Trieu què fer amb les icones instal·lades actualment.',
	'CURRENT_SMILIES'			=> 'Emoticones actuals',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Trieu què fer amb les emoticones instal·lades actualment.',

	'DISPLAY_ON_POSTING'		=> 'Mostra’l a la pàgina de publicació d’entrades',
	'DISPLAY_POSTING'			=> 'A la pàgina de publicació d’entrades',
	'DISPLAY_POSTING_NO'		=> 'No a la pàgina de publicació d’entrades',



	'EDIT_ICONS'				=> 'Edita les icones',
	'EDIT_SMILIES'				=> 'Edita les emoticones',
	'EMOTION'					=> 'Emoció',
	'EXPORT_ICONS'				=> 'Exporta i baixa icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sEn fer clic sobre aquest enllaç, la configuració de les icones instal·lades s’empaquetarà al fitxer <samp>icons.pak</samp> que un cop baixat pot ser utilitzat per crear un fitxer <samp>.zip</samp> o <samp>.tgz</samp> que contingui totes les icones més la configuració d’aquest fitxer <samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'			=> 'Exporta i baixa smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sEn fer clic sobre aquest enllaç, la configuració de les emoticones instal·lades s’empaquetarà al fitxer <samp>smilies.pak</samp> que un cop baixat pot ser utilitzat per crear un fitxer <samp>.zip</samp> o <samp>.tgz</samp> que contingui totes les emoticones més la configuració d’aquest fitxer <samp>smilies.pak</samp>%s.',

	'FIRST'			=> 'Primer',

	'ICONS_ADD'				=> 'Afegeix una icona nova',
	'ICONS_NONE_ADDED'		=> 'No s’ha afegit cap icona.',
	'ICONS_ONE_ADDED'		=> 'S’ha afegit la icona correctament.',
	'ICONS_ADDED'			=> 'S’han afegit les icones correctament.',
	'ICONS_CONFIG'			=> 'Configuració d’icones',
	'ICONS_DELETED'			=> 'S’ha eliminat la icona correctament.',
	'ICONS_EDIT'			=> 'Edita la icona',
	'ICONS_ONE_EDITED'		=> 'S’ha actualitzat la icona correctament.',
	'ICONS_NONE_EDITED'		=> 'No s’ha actualitzat cap icona.',
	'ICONS_EDITED'			=> 'S’han actualitzat les icones correctament.',
	'ICONS_HEIGHT'			=> 'Alçària de la icona',
	'ICONS_IMAGE'			=> 'Imatge de la icona',
	'ICONS_IMPORTED'		=> 'S’ha instal·lat el paquet d’icones correctament.',
	'ICONS_IMPORT_SUCCESS'	=> 'S’ha importat el paquet d’icones correctament.',
	'ICONS_LOCATION'		=> 'Ubicació de les icones',
	'ICONS_NOT_DISPLAYED'	=> 'Les icones següents no es mostren a la pàgina de publicació d’entrades',
	'ICONS_ORDER'			=> 'Ordre de les icones',
	'ICONS_URL'				=> 'Fitxer d’imatge de la icona',
	'ICONS_WIDTH'			=> 'Amplària de la icona',
	'IMPORT_ICONS'			=> 'Instal·la el paquet d’icones',
	'IMPORT_SMILIES'		=> 'Instal·la el paquet d’emoticones',

	'KEEP_ALL'			=> 'Conserva-les totes',

	'MASS_ADD_SMILIES'	=> 'Afegeix múltiples emoticones',

	'NO_ICONS_ADD'		=> 'No hi ha icones per afegir.',
	'NO_ICONS_EDIT'		=> 'No hi ha icones per editar.',
	'NO_ICONS_EXPORT'	=> 'No teniu cap icona amb la qual crear un paquet.',
	'NO_ICONS_PAK'		=> 'No s’ha trobat cap paquet d’icones.',
	'NO_SMILIES_ADD'	=> 'No hi ha emoticones per afegir.',
	'NO_SMILIES_EDIT'	=> 'No hi ha emoticones per editar.',
	'NO_SMILIES_EXPORT'	=> 'No teniu cap emoticona amb la qual crear un paquet.',
	'NO_SMILIES_PAK'	=> 'No s’ha trobat cap paquet d’emoticones.',

	'PAK_FILE_NOT_READABLE'		=> 'No s’ha pogut llegir el fitxer <samp>.pak</samp>',

	'REPLACE_MATCHES'	=> 'Reemplaça les coincidències',

	'SELECT_PACKAGE'			=> 'Seleccioneu un fitxer de paquet',
	'SMILIES_ADD'				=> 'Afegeix una emoticona nova',
	'SMILIES_NONE_ADDED'		=> 'No s’ha afegit cap emoticona.',
	'SMILIES_ONE_ADDED'			=> 'S’ha afegit l’emoticona correctament.',
	'SMILIES_ADDED'				=> 'S’han afegit les emoticones correctament.',
	'SMILIES_CODE'				=> 'Codi de l’emoticona',
	'SMILIES_CONFIG'			=> 'Configuració d’emoticones',
	'SMILIES_DELETED'			=> 'S’ha eliminat l’emoticona correctament.',
	'SMILIES_EDIT'				=> 'Edita l’emoticona',
	'SMILIE_NO_CODE'			=> 'S’ha ignorat l’emoticona “%s” perquè no heu introduït cap codi.',
	'SMILIE_NO_EMOTION'			=> 'S’ha ignorat l’emoticona “%s” perquè no heu introduït cap emoció.',
	'SMILIES_NONE_EDITED'		=> 'S’ha actualitzat l’emoticona correctament.',
	'SMILIES_ONE_EDITED'		=> 'S’han actualitzat les emoticones correctament.',
	'SMILIES_EDITED'			=> 'S’ha editat l’emoticona correctament.',
	'SMILIES_EMOTION'			=> 'Emoció',
	'SMILIES_HEIGHT'			=> 'Alçària de l’emoticona',
	'SMILIES_IMAGE'				=> 'Imatge de l’emoticona',
	'SMILIES_IMPORTED'			=> 'S’ha instal·lat el paquet d’emoticones correctament.',
	'SMILIES_IMPORT_SUCCESS'	=> 'S’ha importat el paquet d’emoticones correctament.',
	'SMILIES_LOCATION'			=> 'Ubicació de les emoticones',
	'SMILIES_NOT_DISPLAYED'		=> 'Les emoticones següents no es mostren a la pàgina de publicació d’entrades',
	'SMILIES_ORDER'				=> 'Ordre de les emoticones',
	'SMILIES_URL'				=> 'Fitxer d’imatge de l’emoticona',
	'SMILIES_WIDTH'				=> 'Amplària de l’emoticona',

	'TOO_MANY_SMILIES'			=> 'Heu arribat al límit permès %d emoticones.',

	'WRONG_PAK_TYPE'	=> 'El paquet especificat no conté les dades adequades.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Des d’aquest tauler de control podeu afegir, editar i eliminar paraules que seran censurades automàticament als fòrums. Tanmateix es podran registrar noms d’usuari que continguin aquestes paraules. S’accepten els comodins (*) al camp de paraula, p.ex. *text* coincideix amb contextual, text* coincideix amb textual i *text coincideix amb context.',
	'ADD_WORD'				=> 'Afegeix una paraula nova',

	'EDIT_WORD'		=> 'Edita la paraula censurada',
	'ENTER_WORD'	=> 'Cal que introduïu una paraula i el seu substitut.',

	'NO_WORD'	=> 'No heu seleccionat cap paraula per editar-la.',

	'REPLACEMENT'	=> 'Substitut',

	'UPDATE_WORD'	=> 'Actualitza la paraula censurada',

	'WORD'				=> 'Paraula',
	'WORD_ADDED'		=> 'Sha afegit la paraula censurada correctament.',
	'WORD_REMOVED'		=> 'La paraula censurada seleccionada s’ha eliminat correctament.',
	'WORD_UPDATED'		=> 'La paraula censurada seleccionada s’ha actualitzat correctament.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'En aquest formulari podeu afegir, editar, visualitzar i eliminar rangs. També podeu crear rangs especials que podeu aplicar a un usuari a la secció de gestió d’usuaris.',
	'ADD_RANK'				=> 'Afegeix un rang nou',

	'MUST_SELECT_RANK'		=> 'Cal que seleccioneu un rang.',

	'NO_ASSIGNED_RANK'		=> 'No hi ha cap rang especial assignat.',
	'NO_RANK_TITLE'			=> 'No heu especificat un títol per al rang.',
	'NO_UPDATE_RANKS'		=> 'S’ha eliminat el rang correctament. Això no obstant, els comptes d’usuari que utilitzaven aquest rang no s’han actualitzat. Caldrà que reinicialitzeu el rang d’aquests comptes manualment.',

	'RANK_ADDED'			=> 'S’ha afegit el rang correctament.',
	'RANK_IMAGE'			=> 'Imatge del rang',
	'RANK_IMAGE_EXPLAIN'	=> 'Aquí podeu definir una petita imatge associada amb el rang. EL camí és relatiu al directori arrel del phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(En ús)',
	'RANK_MINIMUM'			=> 'Nombre mínim d’entrades',
	'RANK_REMOVED'			=> 'S’ha eliminat el rang correctament.',
	'RANK_SPECIAL'			=> 'És un rang especial',
	'RANK_TITLE'			=> 'Títol del rang',
	'RANK_UPDATED'			=> 'S’ha actualitzat el rang correctament.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Aquí podeu controlar els noms d’usuari que no estan permesos. Els noms d’usuari prohibits poden contenir un caràcter comodí *. Tingueu en compte que no podreu especificar un nom d’usuari que ja s’hagi registrat. Cal que primer elimineu aquest nom d’usuari i el prohibiu després.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Podeu prohibir un nom d’usuari utilitzant el caràcter comodí * per obtenir coincidències amb qualsevol caràcter.',
	'ADD_DISALLOW_TITLE'	=> 'Afegeix un nom d’usuari prohibit',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Podeu eliminar un nom d’usuari prohibit seleccionant el nom d’usuari d’aquesta llista i fent clic al botó Tramet.',
	'DELETE_DISALLOW_TITLE'		=> 'Elimina un nom d’usuari prohibit',
	'DISALLOWED_ALREADY'		=> 'El nom que heu introduït no es pot prohibir. O bé ja existeix a la llista o bé existeix a la llista de paraules censurades o bé ja hi ha un usuari amb un nom que hi coincideix.',
	'DISALLOWED_DELETED'		=> 'S’ha eliminat el nom d’usuari prohibit correctament.',
	'DISALLOW_SUCCESSFUL'		=> 'S’ha afegit el nom d’usuari prohibit correctament.',

	'NO_DISALLOWED'				=> 'No hi ha cap nom prohibit',
	'NO_USERNAME_SPECIFIED'		=> 'No heu seleccionat cap nom d’usuari.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Aquí podeu gestionar les raons utilitzades als informes i als missatges de denegació quan no s’aprova una entrada. Hi ha una raó per defecte (marcada amb un *) que no podeu eliminar, aquesta raó normalment s’utilitza per a missatges personalitzats si cap altra raó és adient.',
	'ADD_NEW_REASON'		=> 'Afegeix una raó nova',
	'AVAILABLE_TITLES'		=> 'Títols de raons traduïdes disponibles',

	'IS_NOT_TRANSLATED'			=> 'La raó <strong>no</strong> està traduïda.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'La raó <strong>no</strong> està traduïda. Si voleu proporcionar la forma traduïda, indiqueu la clau correcta de la secció de raons d’informe dels fitxers d’idioma.',
	'IS_TRANSLATED'				=> 'La raó està traduïda.',
	'IS_TRANSLATED_EXPLAIN'		=> 'La raó està traduïda. Si el títol que introduïu aquí està especificat a la secció de raons d’informe dels fitxers d’idioma, s’utilitzarà la forma traduïda del títol i la descripció.',

	'NO_REASON'					=> 'No s’ha pogut trobar la raó.',
	'NO_REASON_INFO'			=> 'Cal que especifiqueu un títol i una descripció  per a aquesta raó.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'No podeu eliminar la raó per defecte “Altres”.',

	'REASON_ADD'				=> 'Afegeix una raó d’informe/denegació',
	'REASON_ADDED'				=> 'S’ha afegit la raó d’informe/denegació correctament.',
	'REASON_ALREADY_EXIST'		=> 'Ja existeix una raó amb aquest títol, introduïu un altre títol per aquesta raó.',
	'REASON_DESCRIPTION'		=> 'Descripció de la raó',
	'REASON_DESC_TRANSLATED'	=> 'Descripció que es mostra de la raó',
	'REASON_EDIT'				=> 'Edita la raó d’informe/denegació',
	'REASON_EDIT_EXPLAIN'		=> 'Aquí podeu afegir o editar una raó. Si la raó està traduïda, s’utilitza la versió localitzada en lloc de la descripció introduïda.',
	'REASON_REMOVED'			=> 'S’ha eliminat la raó d’informe/denegació correctament.',
	'REASON_TITLE'				=> 'Títol de la raó',
	'REASON_TITLE_TRANSLATED'	=> 'Títol que es mostra de la raó',
	'REASON_UPDATED'			=> 'S’ha actualitzat la raó d’informe/denegació correctament.',

	'USED_IN_REPORTS'		=> 'S’utilitza als informes',
));

?>