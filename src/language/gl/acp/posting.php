<?php
/** 
*
* posting [Galician]
*
* @package language
* @version $Id: posting.php 9902 2009-08-01 11:07:48Z acydburn $
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
	'ACP_BBCODES_EXPLAIN'		=> 'O BBCode é unha implementación especial de HTML que ofrece un meirande control sobre que se amosa e como se amosa ese algo. Dende esta páxina poderás engadir, eliminar e editar BBCodes á medida.',
	'ADD_BBCODE'				=> 'Engadir novo BBCode',

	'BBCODE_ADDED'				=> 'BBCode engadido con éxito.',
	'BBCODE_EDITED'				=> 'BBCode editado con éxito.',
	'BBCODE_NOT_EXIST'			=> 'O BBCode que seleccionaches non existe.',
	'BBCODE_HELPLINE'			=> 'Axuda en liña',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Este campo contén o texto "mouseover" do BBCode',
	'BBCODE_HELPLINE_TEXT'		=> 'Texto de axuda en liña.',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'A liña de axuda que inseriches é longa de máis.',

	'BBCODE_INVALID_TAG_NAME'	=> 'O nome da etiqueta BBCode que seleccionaches xa existe.',
	'BBCODE_INVALID'			=> 'O teu BBCode está definido dun xeito incorrecto.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'O seu BBCode personalizado debe conter as etiquetas de apertura e peche.',
	'BBCODE_TAG'				=> 'Etiqueta',
	'BBCODE_TAG_TOO_LONG'		=> 'A definición da etiqueta BBCode que inseriches é demasiado longa, por favor acurta a definición.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'A definición de etiqueta que inseriches é longa de máis, por favor, reduce a súa lonxitude.',
	'BBCODE_USAGE'				=> 'Uso do BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[colour={COLOR}]{TEXT}[/colour]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Aquí defines como usar o BBCode. Substitúe calquera variábel inserida polo elemento correspondente (%sver abaixo%s)',

	'EXAMPLE'						=> 'Exemplo:',
	'EXAMPLES'						=> 'Exemplos:',

	'HTML_REPLACEMENT'				=> 'Substitución HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;font color="{COLOR}"&gt;{TEXT}&lt;/font&gt;<br /><br />&lt;font face="{SIMPLETEXT1}"&gt;{SIMPLETEXT2}&lt;/font&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Aquí podes definir o recambio HTML predeterminado (cada sobreplanta pode ter o seu propio recambio HTML). Non esquezas colocar no seu sitio os   elementos utilizados arriba.',

	'TOKEN'					=> 'Mostra',
	'TOKENS'				=> 'Mostras',
	'TOKENS_EXPLAIN'		=> 'As mostras son marcadores de posición para a entrada de datos de usuario. A entrada validarase só se coincide coa definición correspondente. Se así o precisas, podes numeralos engadindo un número como o derradeiro caracter no medio das chaves, p.e. {TEXTO1}, {TEXTO2}.<br /><br />Coa substitución HTML tamén podes empregar calquera cadea de idioma presente no teu directorio language/ do seguinte xeito: {L_<em>&lt;NOMEDACADEA&gt;</em>} onde <em>&lt;NOMEDACADEA&gt;</em> é o nome da cadea traducida que queres engadir. Por exemplo, {L_WROTE} será amosado como “escribiu” ou a súa tradución dacordo co locale do usuario.<br /><br /><strong>Ten en conta que só as mostras listadas embaixo poden ser empregadas con BBCodes á medida.</strong>',
	'TOKEN_DEFINITION'		=> 'Que pode ser?',
	'TOO_MANY_BBCODES'		=> 'Non pode crear máis códigos BBC. Elimine un ou máis códigos BBC ténteo de novo.',

	'tokens'	=>	array(
		'TEXT'			=> 'Calquera texto, incluídos caracteres especiais, números, etc… Non podes usar esta mostra en etiquetas HTML. En troques de isto, tenta empregar IDENTIFIER ou SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Caracteres do alfabeto latino (A-Z), números, espazos, comas, puntos, menos, máis, guión e subliñado',
		'IDENTIFIER'	=> 'Caracteres do alfabeto latino (A-Z), números, guión e subliñado',
		'NUMBER'		=> 'Calquera serie de díxitos',
		'EMAIL'			=> 'Un enderezo de correo-e válido',
		'URL'			=> 'Unha URL válida usando calquera protocolo (http, ftp, etc. non pode ser usado por exploits de javascript). Se non se proporciona ningún, engadirase “http://” por defecto na cadea.',
		'LOCAL_URL'		=> 'Un URL local. O URL debe ser relativo á páxina do tema e non debe conter un nome de servidor ou protocolo',
		'COLOR'			=> 'Unha cor HTML pode ser inserida ou ben de xeito numérico <samp>#FF1234</samp> ou ben mediante unha <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS nome estándar de cor</a> como <samp>fuchsia</samp> ou <samp>InactiveBorder</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Dende esta páxina poderás engadir, eliminar e editar as iconas que os usuarios poden engadir aos seus temas ou mensaxes. Estas iconas son xeralmente amosadas ao lado do título do tema na lista do foro, ou nos asuntos da mensaxes publicadas nas listas de tema. Tamén podes instalar e crear novos paquetes de iconas.',
	'ACP_SMILIES_EXPLAIN'	=> 'Os risoños ou emoticonas adoitan ser pequenas, ás veces utilízanse imaxes animadas para transmitir emocións ou sentimentos. Dende esta páxina podes engadir, eliminar e editar as emoticonas que os usuarios poden pór nas súas mensaxes públicas ou privadas. Asemade podes crear e instalar novos paquetes de risoños.',
	'ADD_SMILIES'			=> 'Engadir risoños múltiples',
	'ADD_SMILEY_CODE'		=> 'Engadir código de risoño adicional',
	'ADD_ICONS'				=> 'Engadir varias iconas',
	'AFTER_ICONS'			=> 'Logo de %s',
	'AFTER_SMILIES'			=> 'Logo de %s',

	'CODE'						=> 'Código',
	'CURRENT_ICONS'				=> 'Iconas actuales',
	'CURRENT_ICONS_EXPLAIN'		=> 'Elixe que facer coas iconas instaladas actualmente',
	'CURRENT_SMILIES'			=> 'Cariñas actuais',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Elixe que facer cos risoños instalados actualmente',

	'DISPLAY_ON_POSTING'	=> 'Amosar durante a publicación',
	'DISPLAY_POSTING'			=> 'Na páxina de publicación',
	'DISPLAY_POSTING_NO'		=> 'Non na páxina de publicación',



	'EDIT_ICONS'				=> 'Editar iconas.',
	'EDIT_SMILIES'				=> 'Editar risoños',
	'EMOTION'					=> 'Emoción',
	'EXPORT_ICONS'				=> 'Exportar e descargar icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sOn Premendo nesta ligazón, a configuración para as túas iconas instaladas será empaquetada como <samp>icons.pak</samp> co cal unha vez descargada pode ser usada para crear un ficheiro <samp>.zip</samp> ou <samp>.tgz</samp> contendo todas as túas iconas ademais  do ficheiro%s de configuración <samp>icons.pak</samp>.',
	'EXPORT_SMILIES'			=> 'Exportar e descargar smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sPremendo nesta ligazón, a configuración para os teus risoños instalados comprimirase dentro de <samp>smilies.pak</samp> que unha vez descargado pode ser usado para crear un arquivo <samp>.zip</samp> ou <samp>.tgz</samp> que conterá todos os teus risoños e máis este arquivo de configuración do <samp>smilies.pak</samp>%s.',

	'FIRST'			=> 'Primeiro',

	'ICONS_ADD'				=> 'Engadir unha nova icona',
	'ICONS_NONE_ADDED'		=> 'Non se engadiron iconas.',
	'ICONS_ONE_ADDED'		=> 'A icona foi engadida correctamente.',
	'ICONS_ADDED'			=> 'As iconas foron engadidas correctamente.',
	'ICONS_CONFIG'			=> 'Configuración das iconas',
	'ICONS_DELETED'			=> 'A icona foi eliminada correctamente.',
	'ICONS_EDIT'			=> 'Editar a icona',
	'ICONS_ONE_EDITED'		=> 'A icona foi actualizada correctamente.',
	'ICONS_NONE_EDITED'		=> 'Non se actualizou icona ningunha.',
	'ICONS_EDITED'			=> 'As iconas foron actualizadas correctamente.',
	'ICONS_HEIGHT'			=> 'Altura da icona',
	'ICONS_IMAGE'			=> 'Imaxe da icona',
	'ICONS_IMPORTED'		=> 'O paquete de iconas foi instalado correctamente.',
	'ICONS_IMPORT_SUCCESS'	=> 'O paquete de iconas foi importado correctamente.',
	'ICONS_LOCATION'		=> 'Ubicación da icona',
	'ICONS_NOT_DISPLAYED'	=> 'As seguintes iconas non son amosadas na páxina de publicación de mensaxes',
	'ICONS_ORDER'			=> 'Orde de iconas',
	'ICONS_URL'				=> 'Ficheiro de imaxe da icona',
	'ICONS_WIDTH'			=> 'Ancho da icona',
	'IMPORT_ICONS'			=> 'Instalar paquete de iconas',
	'IMPORT_SMILIES'		=> 'Instalar paquete de risoños',

	'KEEP_ALL'			=> 'Manter todo',

	'MASS_ADD_SMILIES'	=> 'Engadir sorrisos múltiples',

	'NO_ICONS_ADD'		=> 'Non hai iconas dispoñibles para engadir.',
	'NO_ICONS_EDIT'		=> 'Non hai iconas dispoñibles para modificar.',
	'NO_ICONS_EXPORT'	=> 'Non tes iconas coas que crear un paquete.',
	'NO_ICONS_PAK'		=> 'Non se atoparon paquetes de iconas.',
	'NO_SMILIES_ADD'	=> 'Non hai risoños dispoñibles para engadir.',
	'NO_SMILIES_EDIT'	=> 'Non hai risoños dispoñibles para modificar.',
	'NO_SMILIES_EXPORT'	=> 'Non tes risoños cos que crear un paquete.',
	'NO_SMILIES_PAK'	=> 'Non se atoparon paquetes de risoños.',

	'PAK_FILE_NOT_READABLE'		=> 'Non se puido ler o arquivo <samp>.pak</samp>.',

	'REPLACE_MATCHES'	=> 'Substituir coincidencias',

	'SELECT_PACKAGE'			=> 'Seleccionar un ficheiro de paquete',
	'SMILIES_ADD'				=> 'Engadir un risoño novo',
	'SMILIES_NONE_ADDED'		=> 'Non se engadiron risoños.',
	'SMILIES_ONE_ADDED'			=> 'O risoño foi engadido correctamente.',
	'SMILIES_ADDED'				=> 'Os risoños foron engadidos correctamente.',
	'SMILIES_CODE'				=> 'Código de risoño',
	'SMILIES_CONFIG'			=> 'Configuración de risoños',
	'SMILIES_DELETED'			=> 'O risoño foi eliminada correctamente.',
	'SMILIES_EDIT'				=> 'Editar risoños',
	'SMILIE_NO_CODE'			=> 'Ignorouse o risoño “%s”, xa que non se inseriu código ningún.',
	'SMILIE_NO_EMOTION'			=> 'Ignorouse o risoño “%s”, xa que non se inseriu sentimento ningún.',
	'SMILIES_NONE_EDITED'		=> 'Non se actualizou risoño ningún.',
	'SMILIES_ONE_EDITED'		=> 'O risoño actualizouse correctamente.',
	'SMILIES_EDITED'			=> 'Os risoños foron actualizados correctamente',
	'SMILIES_EMOTION'			=> 'Emoción',
	'SMILIES_HEIGHT'			=> 'Altura do risoño',
	'SMILIES_IMAGE'				=> 'Imaxe do risoño',
	'SMILIES_IMPORTED'			=> 'O paquete de risoños foi instalado correctamente.',
	'SMILIES_IMPORT_SUCCESS'	=> 'O paquete de risoños foi importado correctamente.',
	'SMILIES_LOCATION'			=> 'Localización do risoño',
	'SMILIES_NOT_DISPLAYED'		=> 'Os seguintes risoños non se amosan na páxina de publicación de mensaxes',
	'SMILIES_ORDER'				=> 'Orde de risoños',
	'SMILIES_URL'				=> 'Ficheiro de imaxe do risoño',
	'SMILIES_WIDTH'				=> 'Largo do risoño',

	'TOO_MANY_SMILIES'			=> 'Acadouse o límite de %d risoños.',

	'WRONG_PAK_TYPE'	=> 'O paquete especificado non contén os datos axeitados.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Dende este panel de control ti podes engadir, editar, e eliminar palabras que serán automaticamente censuradas no teu foro. Ainda así, permitirase o rexistro de nomes de usuario que conteñan esas palabras. Os asteriscos (*) son aceptados no campo de palabras, p.e. *men* rexeitará amencer, man* rexeitará manta, *man rexeitará superman.',
	'ADD_WORD'				=> 'Engadir nova palabra',

	'EDIT_WORD'		=> 'Editar censor de palabras',
	'ENTER_WORD'	=> 'Debes inserir unha palabra e a súa substituta.',

	'NO_WORD'	=> 'Non se seleccionou ningunha palabra para editar.',

	'REPLACEMENT'	=> 'Substituta',

	'UPDATE_WORD'	=> 'Actualizar censor de palabras',

	'WORD'				=> 'Palabra',
	'WORD_ADDED'		=> 'O censurador de palabras foi correctamente engadido.',
	'WORD_REMOVED'		=> 'O censurador de palabras foi correctamente eliminado.',
	'WORD_UPDATED'		=> 'O censurador de palabras foi correctamente actualizado.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Usando este formulario podes engadir, editar, ver e borrar rangos. Podes tamén crear rangos personalizados que poden ser aplicados a algún usuario coa utilidade de administración de usuario.',
	'ADD_RANK'				=> 'Engadir novo rango',

	'MUST_SELECT_RANK'		=> 'Debes seleccionar un rango',
	
	'NO_ASSIGNED_RANK'		=> 'Sen rango especial asignado',
	'NO_RANK_TITLE'			=> 'Non especificaches un título para o rango.',
	'NO_UPDATE_RANKS'		=> 'O rango foi eliminado correctamente. Porén as contas de usuario que usen este rango non foron actualizadas. Terás que reiniciar o rango nesas contas.',

	'RANK_ADDED'			=> 'O rango foi engadido correctamente',
	'RANK_IMAGE'			=> 'Imaxe do rango.',
	'RANK_IMAGE_EXPLAIN'	=> 'Usa isto para definir unha pequena imaxe asociada ao rango. A ruta refírese ao directorio raíz phpBB.',
	'RANK_IMAGE_IN_USE'		=> '(En uso)',
	'RANK_MINIMUM'			=> 'Mensaxes mínimas',
	'RANK_REMOVED'			=> 'O rango foi eliminado correctamente.',
	'RANK_SPECIAL'			=> 'Establecer como rango especial',
	'RANK_TITLE'			=> 'Título do rango',
	'RANK_UPDATED'			=> 'O rango foi actualizado correctamente.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Dende aquí podes controlar os nomes de usuario que non poden ser usados. Nomes de usuario prohibidos poden levar o caracter asterisco *. Por favor ten en conta que non se pode prohibir un nome de usuario xa activo, primeiro tense que borrar o nome e despois prohibilo.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Pode prohibir un nome de usuario empregando o carácter comodín * para substituír calquera outro',
	'ADD_DISALLOW_TITLE'	=> 'Engadir un nome prohibido',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Pode eliminar un nome de usuario prohibido seleccionándoo na lista e premendo en enviar',
	'DELETE_DISALLOW_TITLE'		=> 'Eliminar nome non permitido de usuario',
	'DISALLOWED_ALREADY'		=> 'O nome que introduciches non puido ser desautorizado. Ou xa está na lista, ou na lista de palabras censuradas, ou existe un usuario cun nome coincidente.',
	'DISALLOWED_DELETED'		=> 'O nome non permitido de usuario foi correctamente eliminado.',
	'DISALLOW_SUCCESSFUL'		=> 'O nome non permitido de usuario foi correctamente engadido.',

	'NO_DISALLOWED'				=> 'Non hai nomes de usuario anulados.',
	'NO_USERNAME_SPECIFIED'		=> 'Non seleccionaches ou inseriches un nome de usuario co cal operar.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Dende aquí podes xestionar as razóns usadas nos informes e mensaxes de rexeitamento ao desaprobar mensaxes. Hai unha razón por defecto (marcada cun *) que non podes eliminar, esa razón normalmente úsase nas mensaxes personalizadas se non se adapta a ningún dos motivos. ',
	'ADD_NEW_REASON'		=> 'Engadir novo motivo',
	'AVAILABLE_TITLES'		=> 'Dispoñíbeis títulos de ´motivo localizados ',
	
	'IS_NOT_TRANSLATED'			=> 'A razón <strong>non foi</strong> localizada.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'O motivo <strong>non</strong> foi localizado. Se queres proporcionar o formulario localizado, especifica a clave correcta da sección de motivos dos arquivos de idiomas.',
	'IS_TRANSLATED'				=> 'O motivo foi localizado.',
	'IS_TRANSLATED_EXPLAIN'		=> 'O motivo foi localizado. Se o título que escribiches aquí está especificado na sección de informes de motivos dos arquivos de idiomas, empregarase o formulario do título e descripción localizado.',
	
	'NO_REASON'					=> 'O motivo non foi atopado.',
	'NO_REASON_INFO'			=> 'Tes que especificar un título e unha descrición para este motivo.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Non podes eliminar o motivo por defecto "Outra"',

	'REASON_ADD'				=> 'Engadir motivo de informe/rexeitamento',
	'REASON_ADDED'				=> 'Informe/rexeitamento de motivo engadido correctamente.',
	'REASON_ALREADY_EXIST'		=> 'Xa existe un motivo con ese título, por favor introduce outro título para este motivo.',
	'REASON_DESCRIPTION'		=> 'Descrición do motivo',
	'REASON_DESC_TRANSLATED'	=> 'Visualizar descrición do motivo',
	'REASON_EDIT'				=> 'Editar motivo de informe/rexeitamento',
	'REASON_EDIT_EXPLAIN'		=> 'Aquí podes engadir ou editar un motivo. Se o motivo está traducida, a versión localizada será usada no canto da descrición introducida aquí.',
	'REASON_REMOVED'			=> 'Informe/rexeitamento do motivo eliminada correctamente.',
	'REASON_TITLE'				=> 'Título do motivo',
	'REASON_TITLE_TRANSLATED'	=> 'Visualizar título do motivo',
	'REASON_UPDATED'			=> 'Informe/motivo de denegación actualizado correctamente.',

	'USED_IN_REPORTS'		=> 'Usado/a nos informes',
));

?>