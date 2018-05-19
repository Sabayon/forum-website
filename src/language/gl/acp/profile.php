<?php
/** 
*
* acp_profile [Galician]
*
* @package language
* @version $Id: profile.php 9916 2009-08-03 15:46:56Z Kellanved $
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

// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Campo de perfil á medida engadido de xeito correcto.',
	'ALPHA_ONLY'			=> 'Só alfanuméricos',
	'ALPHA_SPACERS'			=> 'Alfanuméricos e espazos',
	'ALWAYS_TODAY'			=> 'Sempre a data actual',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Introduce as túas opcións agora',
	'BOOL_TYPE_EXPLAIN'		=> 'Define o tipo, ben unha caixa de verificación ou botóns de radio. Amosarase unha caixa de verificación só se está marcada para un usuario concreto. Neste caso empregarase  a <strong>segunda</strong> opción de idioma. Os botóns de radio amosaranse independentemente do seu valor.',

	'CHANGED_PROFILE_FIELD'		=> 'Campo de perfil cambiado correctamente.',
	'CHARS_ANY'					=> 'Calquera carácter',
	'CHECKBOX'					=> 'Caixa de verificación',
	'COLUMNS'					=> 'Columnas',
	'CP_LANG_DEFAULT_VALUE'		=> 'Valor predeterminado',
	'CP_LANG_EXPLAIN'			=> 'Descrición do Campo',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'Explicación para este campo que se amosa ao usuario',
	'CP_LANG_NAME'				=> 'Nome de campo/título presentado ao usuario',
	'CP_LANG_OPTIONS'			=> 'Opcións',
	'CREATE_NEW_FIELD'			=> 'Crear un Novo Campo',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Cando menos un campo de perfil personalizado non foi traducido aínda. Por favor introduce a información requerida premendo na ligazón &quot;Translate&quot; ',

	'DEFAULT_ISO_LANGUAGE'			=> 'Idioma por defecto [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'A entrada para idioma predeterminado non se cubriu para este campo do perfil.',
	'DEFAULT_VALUE'					=> 'Valor predeterminado',
	'DELETE_PROFILE_FIELD'			=> 'Eliminar campo do perfil',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Estás seguro de que queres borrar este campo de perfil?',
	'DISPLAY_AT_PROFILE'			=> 'Visualizar en panel de control de usuario',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'O usuario pode cambiar este campo de perfil dentro do panel de control de usuario.',
	'DISPLAY_AT_REGISTER'			=> 'Visualizar na pantalla de rexistro',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Se esta opción está activada, o campo será visualizado no rexistro.',
	'DISPLAY_ON_VT'					=> 'Amosar na pantalla de vista de tema',
	'DISPLAY_ON_VT_EXPLAIN'			=> 'Se esta opción estiver activada, o campo será amosado no mini-perfil da pantalla de tema.',
	'DISPLAY_PROFILE_FIELD'			=> 'Amosar publicamente campo do perfil',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'O campo perfil será amosado en todos os sitios permitidos segundo a configuración de carga. Se configuras isto a “non” agocharase o campo nas páxinas de tema, perfís e na listaxe de membros.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Introduce as túas opcións agora, cada opción nunha liña',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Ten en conta que podes cambiar as túas opcións de texto e tamén engadir novas opcións ao final. Non é aconsellable engadir novas opcións no medio das existentes, porque podería ter como resultado asignar opcións erróneas aos teus usuarios. Isto pode tamén suceder se eliminas opcións que están no medio. Eliminando opcións  desde o final resultará en que os usuarios que teñan este elemento asignado agora volverán ao estado predeterminado.',
	'EMPTY_FIELD_IDENT'				=> 'Nome de campo baleiro',
	'EMPTY_USER_FIELD_NAME'			=> 'Por favor introduce un nome ou título para o campo',
	'ENTRIES'						=> 'Entradas',
	'EVERYTHING_OK'					=> 'Todo ben',

	'FIELD_BOOL'				=> 'Booleano (Si/Non)',
	'FIELD_DATE'				=> 'Data',
	'FIELD_DESCRIPTION'			=> 'Descrición do Campo',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'Explicación para este campo que se amosa ao usuario',
	'FIELD_DROPDOWN'			=> 'Caixa despregable',
	'FIELD_IDENT'				=> 'Nome do Campo',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'A identificación de campo escollida xa existe. Por favor escolle outro nome.',
	'FIELD_IDENT_EXPLAIN'		=> 'O campo identificación é un nome para identificar o campo de perfil dentro da base de datos e nas sobreplantas.',
	'FIELD_INT'					=> 'Números',
	'FIELD_LENGTH'				=> 'Lonxitude da caixa de entrada',
	'FIELD_NOT_FOUND'			=> 'Campo de perfil non atopado.',
	'FIELD_STRING'				=> 'Campo de texto simple',
	'FIELD_TEXT'				=> 'Área de texto',
	'FIELD_TYPE'				=> 'Tipo de campo',
	'FIELD_TYPE_EXPLAIN'		=> 'Non poderás cambiar o tipo de campo máis tarde',
	'FIELD_VALIDATION'			=> 'Validación de campo',
	'FIRST_OPTION'				=> 'Primeira opción',

	'HIDE_PROFILE_FIELD'			=> 'Campo de perfil agochado',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Agochar o campo do perfil a todos os outros usuarios agás o propio, administradores e moderadores, os cales poden ver este campo de perfil. Se a opción Amosar no panel de control do usuario está desactivada, o usuario non poderá ver ou mudar este campo, e poderá ser mudado só polos administradores.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'O campo de identificación só pode conter minúsculas da a-z e_',
	'INVALID_FIELD_IDENT_LEN'	=> 'O campo de identificación só pode conter ata 17 carácteres',
	'ISO_LANGUAGE'				=> 'Idioma [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Opcións específicas de idioma [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'Número máximo de carácteres',
	'MAX_FIELD_NUMBER'		=> 'Número máis alto permitido',
	'MIN_FIELD_CHARS'		=> 'Número mínimo de caracteres',
	'MIN_FIELD_NUMBER'		=> 'Número máis baixo permitido',

	'NO_FIELD_ENTRIES'			=> 'Non hai entradas definidas',
	'NO_FIELD_ID'				=> 'Non se especificou campo ningún.',
	'NO_FIELD_TYPE'				=> 'Non se especificou ningún tipo de campo.',
	'NO_VALUE_OPTION'			=> 'Opción igual a valor non introducido',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Valor para non-entrada. Se este campo é requerido, o usuario terá un erro se escolle a opción seleccionada aquí',
	'NUMBERS_ONLY'				=> 'Só números (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Opcións Básicas',
	'PROFILE_FIELD_ACTIVATED'	=> 'Campo de perfil activado correctamente.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Campo de perfil desactivado correctamente.',
	'PROFILE_LANG_OPTIONS'		=> 'Opcións específicas de idioma',
	'PROFILE_TYPE_OPTIONS'		=> 'Opcións específicas de tipo de perfil',

	'RADIO_BUTTONS'				=> 'Botóns de radio',
	'REMOVED_PROFILE_FIELD'		=> 'Campo de perfil eliminado correctamente',
	'REQUIRED_FIELD'			=> 'Campo requirido',
	'REQUIRED_FIELD_EXPLAIN'	=> 'Obriga a que o campo de perfil sexa cumprimentado ou especificado polo usuario ou o administrador. Se a presentación do mesmo na pantalla de rexistro está desactivada, o campo só será requirido cando o usuario edite o seu perfil.',
	'ROWS'						=> 'Filas',

	'SAVE'							=> 'Gardar',
	'SECOND_OPTION'					=> 'Segunda opción',
	'STEP_1_EXPLAIN_CREATE'			=> 'Aquí podes introducir os primeiros parámetros básicos do teu novo campo de perfil. Esta información é precisa para o segundo paso onde poderás configurar as opcións restantes e onde podes previsualizar e axustar o teu campo de perfil antigo con máis detalle.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Aquí podes cambiar os parámetros básicos do teu campo de perfil. As opcións relevantes están re-calculadas no segundo paso onde podes previsualizar e comprobar os axustes feitos.',
	'STEP_1_TITLE_CREATE'			=> 'Engadir campo ao perfil',
	'STEP_1_TITLE_EDIT'				=> 'Editar campo do perfil',
	'STEP_2_EXPLAIN_CREATE'			=> 'Aquí podes definir algunhas opcións comúns. Deseguido podes previsualizar o campo xerado tal como será visto polo usuario. Proba até que esteas satisfeito de como queda o campo.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Aquí podes trocar algunhas opcións comúns.<br /><strong>Estes cambios nos campos do perfil non afectarán aos campos de perfil existentes que foron introducidos polos teus usuarios.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Opcións específicas de tipo de perfil',
	'STEP_2_TITLE_EDIT'				=> 'Opcións específicas de tipo de perfil',
	'STEP_3_EXPLAIN_CREATE'			=> 'Ao ter máis dun idioma instalado no taboleiro tes que encher tamén os restantes elementos de idioma. O campo de perfil traballará co idioma predeterminado activado, podes cubrir os elementos restantes de idioma máis tarde.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Ao ter máis dun idioma instalado no taboleiro podes cambiar ou engadir tamén os restantes elementos de idioma. O campo de perfil traballará co idioma predeterminado activado.',
	'STEP_3_TITLE_CREATE'			=> 'Definicións de idioma restantes',
	'STEP_3_TITLE_EDIT'				=> 'Definicións de idioma',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Introduce unha frase que será visualizada por defecto, un valor predeterminado. Déixao baleiro se o queres que apareza baleiro.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Introduce un texto para ser visualizado por defecto, un valor predeterminado. Déixao baleiro se o queres que apareza baleiro.',
	'TRANSLATE'						=> 'Traducir',

	'USER_FIELD_NAME'	=> 'Nome de campo/título presentado ao usuario',

	'VISIBILITY_OPTION'				=> 'Opción de visibilidade',
));

?>