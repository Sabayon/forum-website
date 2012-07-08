<?php
/**
*
* acp_profile [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: profile.php,v 1.26 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-13 - 15:00
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
// phpBBrasil.com.br
// Custom profile fields
$lang = array_merge($lang, array(
	'ADDED_PROFILE_FIELD'	=> 'Adicionado com sucesso novo campo padr&atilde;o.',
	'ALPHA_ONLY'			=> 'Alfanum&eacute;rico apenas',
	'ALPHA_SPACERS'			=> 'Alfanum&eacute;rico e espa&ccedil;os',
	'ALWAYS_TODAY'			=> 'Sempre a data corrente',

	'BOOL_ENTRIES_EXPLAIN'	=> 'Entre suas op&ccedil;&otilde;es agora',
	'BOOL_TYPE_EXPLAIN'		=> 'Defina o tipo, entre campo de checagem (checkbox) ou escolha (radio). Um campo de checagem (checkbox) s&oacute; ser&aacute; exibido se for assinalado por um determinado usu&aacute;rio. Naquele caso a <strong>segunda</strong> op&ccedil;&atilde;o de idioma ser&aacute; utilizada. Bot&otilde;es de escolha (r&aacute;dio) ser&atilde;o exibidos independentemente do valor deles.',

	'CHANGED_PROFILE_FIELD'		=> 'Campo de perfil atualizado com sucesso.',
	'CHARS_ANY'					=> 'Qualquer caractere',
	'CHECKBOX'					=> 'Checkbox',
	'COLUMNS'					=> 'Colunas',
	'CP_LANG_DEFAULT_VALUE'		=> 'Valor padr&atilde;o',
	'CP_LANG_EXPLAIN'			=> 'Descri&ccedil;&atilde;o do campo',
	'CP_LANG_EXPLAIN_EXPLAIN'	=> 'A explica&ccedil;&atilde;o para este campo apresentado para o usu&aacute;rio.',
	'CP_LANG_NAME'				=> 'Nome/t&iacute;tulo do campo apresentado ao usu&aacute;rio',
	'CP_LANG_OPTIONS'			=> 'Op&ccedil;&otilde;es',
	'CREATE_NEW_FIELD'			=> 'Criar novo campo',
	'CUSTOM_FIELDS_NOT_TRANSLATED'	=> 'Ao menos um campo customizado de perfil n&atilde;o foi traduzido ainda. Favor entrar com as informa&ccedil;&otilde;es necess&aacute;rias clicando em &quot;Traduzir&quot;.',

	'DEFAULT_ISO_LANGUAGE'			=> 'Idioma padr&atilde;o [%s]',
	'DEFAULT_LANGUAGE_NOT_FILLED'	=> 'As entradas do idioma para o idioma padr&atilde;o n&atilde;o s&atilde;o adicionados para este campo de perfil.',
	'DEFAULT_VALUE'					=> 'Valor padr&atilde;o',
	'DELETE_PROFILE_FIELD'			=> 'Remover campo de perfil',
	'DELETE_PROFILE_FIELD_CONFIRM'	=> 'Voc&ecirc; tem certeza que deseja remover este campo de perfil?',
	'DISPLAY_AT_PROFILE'			=> 'Mostrar no Painel do Usu&aacute;rio',
	'DISPLAY_AT_PROFILE_EXPLAIN'	=> 'O usu&aacute;rio est&aacute; apto a modificar este campo do perfil no painel de controle do usu&aacute;rio.',
	'DISPLAY_AT_REGISTER'			=> 'Mostrar na tela de cadastro',
	'DISPLAY_AT_REGISTER_EXPLAIN'	=> 'Se esta op&ccedil;&atilde;o estiver ativada, o campo ser&aacute; exibido no momento do registro de novos usu&aacute;rios.',
	'DISPLAY_PROFILE_FIELD'			=> 'Mostrar campo de perfil',
	'DISPLAY_PROFILE_FIELD_EXPLAIN'	=> 'O campo de perfil ser&aacute; exibido em todos os lugares permitidos de acordo com as configura&ccedil;&otilde;es determinadas. Definindo esta configura&ccedil;&atilde;o em “n&atilde;o”, esconder&atilde;o estes campos nas p&aacute;ginas dos t&oacute;picos, perfil e o lista de membros.',
	'DROPDOWN_ENTRIES_EXPLAIN'		=> 'Entre suas op&ccedil;&otilde;es agora, cada op&ccedil;&atilde;o em uma linha',

	'EDIT_DROPDOWN_LANG_EXPLAIN'	=> 'Favor notar que voc&ecirc; est&aacute; apto a modificar suas op&ccedil;&otilde;es de texto e tamb&eacute;m apto a adicionar novas op&ccedil;&otilde;es ao final. N&atilde;o &eacute; recomendado adicionar novas op&ccedil;&otilde;es entre as op&ccedil;&otilde;es atuais - isto pode resultar em op&ccedil;&otilde;es erradas assimiladas a seus usu&aacute;rios. Isto tamb&eacute;m pode acontecer se voc&ecirc; remover op&ccedil;&otilde;es entre as existentes e as novas. Removendo op&ccedil;&otilde;es do final resulta em usu&aacute;rios tendo este item revertido ao padr&atilde;o inicial.',
	'EMPTY_FIELD_IDENT'				=> 'Campo vazio identificado',
	'EMPTY_USER_FIELD_NAME'			=> 'Favor entrar um nome/titulo deste campo',
	'ENTRIES'						=> 'Entradas',
	'EVERYTHING_OK'					=> 'Tudo OK',

	'FIELD_BOOL'				=> 'Booleano (Sim/N&atilde;o)',
	'FIELD_DATE'				=> 'Data',
	'FIELD_DESCRIPTION'			=> 'Descri&ccedil;&atilde;o do campo',
	'FIELD_DESCRIPTION_EXPLAIN'	=> 'A explica&ccedil;&atilde;o deste campo apresentada ao usu&aacute;rio',
	'FIELD_DROPDOWN'			=> 'Caixa de rolagem',
	'FIELD_IDENT'				=> 'Identifica&ccedil;&atilde;o de campo',
	'FIELD_IDENT_ALREADY_EXIST'	=> 'A identifica&ccedil;&atilde;o de campo escolhida j&aacute; existe. Favor escolher outra identifica&ccedil;&atilde;o.',
	'FIELD_IDENT_EXPLAIN'		=> 'A identifica&ccedil;&atilde;o de campo &eacute; um nome para identificar o campo do perfil com o banco de dados e a template.',
	'FIELD_INT'					=> 'N&uacute;meros',
	'FIELD_LENGTH'				=> 'Tamanho da caixa de entrada',
	'FIELD_NOT_FOUND'			=> 'Campo de perfil n&atilde;o encontrado.',
	'FIELD_STRING'				=> 'Campos de texto singular',
	'FIELD_TEXT'				=> 'Campo de texto com barra de rolagem',
	'FIELD_TYPE'				=> 'Tipo de campo',
	'FIELD_TYPE_EXPLAIN'		=> 'Voc&ecirc; n&atilde;o poder&aacute; mudar este tipo de campo mais tarde.',
	'FIELD_VALIDATION'			=> 'Valida&ccedil;&atilde;o de campo',
	'FIRST_OPTION'				=> 'Primeira op&ccedil;&atilde;o',

	'HIDE_PROFILE_FIELD'			=> 'Ocultar campo de perfil',
	'HIDE_PROFILE_FIELD_EXPLAIN'	=> 'Oculta o campo de perfil de todos os usu&aacute;rios com exce&ccedil;&atilde;o do pr&oacute;prio usu&aacute;rio, administradores e moderadores est&atilde;o aptos a ver este campo. Se a op&ccedil;&atilde;o Exibir no painel de controle do usu&aacute;rio estiver desabilitada, o usu&aacute;rio n&atilde;o poder&aacute; ver ou alterar este campo, que poder&aacute; somente ser alterado pelos administradores.',

	'INVALID_CHARS_FIELD_IDENT'	=> 'Campo de identifica&ccedil;&atilde;o do perfil s&oacute; pode conter a-z e _',
	'INVALID_FIELD_IDENT_LEN'	=> 'Campo de identifica&ccedil;&atilde;o pode ter apenas 17 caracteres ou menos',
	'ISO_LANGUAGE'				=> 'Idioma [%s]',

	'LANG_SPECIFIC_OPTIONS'		=> 'Op&ccedil;&otilde;es espec&iacute;ficas de idioma [<strong>%s</strong>]',

	'MAX_FIELD_CHARS'		=> 'N&uacute;mero m&aacute;ximo de caracteres',
	'MAX_FIELD_NUMBER'		=> 'N&uacute;mero m&aacute;ximo permitido',
	'MIN_FIELD_CHARS'		=> 'N&uacute;mero m&iacute;nimo permitido',
	'MIN_FIELD_NUMBER'		=> 'Menor n&uacute;mero permitido',

	'NO_FIELD_ENTRIES'			=> 'Nenhuma entrada definida',
	'NO_FIELD_ID'				=> 'Nenhum id de campo especificado.',
	'NO_FIELD_TYPE'				=> 'Nenhum tipo de campo especificado.',
	'NO_VALUE_OPTION'			=> 'Op&ccedil;&atilde;o igual a um valor sem entrada',
	'NO_VALUE_OPTION_EXPLAIN'	=> 'Valores a n&atilde;o considerar. Se o campo &eacute; obrigat&oacute;rio, o usu&aacute;rio ter&aacute; como retorno um erro, se ele escolher uma das op&ccedil;&otilde;es escolhidas selecionadas aqui',
	'NUMBERS_ONLY'				=> 'Somente n&uacute;meros (0-9)',

	'PROFILE_BASIC_OPTIONS'		=> 'Op&ccedil;&otilde;es b&aacute;sicas',
	'PROFILE_FIELD_ACTIVATED'	=> 'Campo de perfil ativado com sucesso.',
	'PROFILE_FIELD_DEACTIVATED'	=> 'Campo de perfil desativado com sucesso.',
	'PROFILE_LANG_OPTIONS'		=> 'Op&ccedil;&otilde;es de especifica&ccedil;&atilde;o de idioma',
	'PROFILE_TYPE_OPTIONS'		=> 'Op&ccedil;&otilde;es de especifica&ccedil;&atilde;o do tipo de perfil',

	'RADIO_BUTTONS'				=> 'Bot&otilde;es de escolha',
	'REMOVED_PROFILE_FIELD'		=> 'Removido com sucesso este campo de perfil.',
	'REQUIRED_FIELD'			=> 'Campo obrigat&oacute;rio',
	'REQUIRED_FIELD_EXPLAIN'	=> 'For&ccedil;ar campo de perfil a ser preenchido ou especificado pelo usu&aacute;rio ou pelo administrador. Se mostrar na tela de cadastro estiver desabilitado, o campo poder&aacute; somente ser exigido quando o usu&aacute;rio editar seu perfil.',
	'ROWS'						=> 'Linhas',

	'SAVE'							=> 'Salvar',
	'SECOND_OPTION'					=> 'Segunda op&ccedil;&atilde;o',
	'STEP_1_EXPLAIN_CREATE'			=> 'Aqui voc&ecirc; pode entrar com os primeiros par&acirc;metros b&aacute;sicos de seu novo campo de perfil. Estas informa&ccedil;&otilde;es s&atilde;o necess&aacute;rias para o segundo passo, onde voc&ecirc; estar&aacute; apto a definir as op&ccedil;&otilde;es restantes, e onde voc&ecirc; estar&aacute; apto a rever e modificar seu perfil futuramente.',
	'STEP_1_EXPLAIN_EDIT'			=> 'Aqui voc&ecirc; pode modificar os par&acirc;metros b&aacute;sicos de seu campo de perfil. As op&ccedil;&otilde;es relevantes s&atilde;o recalculadas com o segundo passo, onde voc&ecirc; est&aacute; apto a rever e testar as defini&ccedil;&otilde;es modificadas.',
	'STEP_1_TITLE_CREATE'			=> 'Adicionar campo de perfil',
	'STEP_1_TITLE_EDIT'				=> 'Editar campo de perfil',
	'STEP_2_EXPLAIN_CREATE'			=> 'Aqui voc&ecirc; est&aacute; apto a definir algumas op&ccedil;&otilde;es comuns que voc&ecirc; pode querer ajustar.',
	'STEP_2_EXPLAIN_EDIT'			=> 'Aqui voc&ecirc; est&aacute; apto a modificar algumas op&ccedil;&otilde;es comuns.<br /><strong>Favor note que as mudan&ccedil;as nos campos do perfil n&atilde;o ir&atilde;o afetar perfis existentes com dados especificados pelos seus usu&aacute;rios.</strong>',
	'STEP_2_TITLE_CREATE'			=> 'Op&ccedil;&otilde;es de tipo especificado de perfil',
	'STEP_2_TITLE_EDIT'				=> 'Op&ccedil;&otilde;es de tipo especificado de perfil',
	'STEP_3_EXPLAIN_CREATE'			=> 'Desde que voc&ecirc; tenha um idioma de comunidade instalado, voc&ecirc; tem de preencher os itens de idioma restantes tamb&eacute;m. O campo de perfil ir&aacute; funcionar com o idioma padr&atilde;o habilitado, poder&aacute; preencher os idiomas restantes para este campo em outro momento que desejar.',
	'STEP_3_EXPLAIN_EDIT'			=> 'Desde que voc&ecirc; tenha mais de um idioma instalado na sua comunidade, voc&ecirc; pode agora adicionar ou remover itens existentes nos idiomas restantes tamb&eacute;m. O campo de perfil ir&aacute; trabalhar com o idioma padr&atilde;o da comunidade habilitado.',
	'STEP_3_TITLE_CREATE'			=> 'Defini&ccedil;&otilde;es de idioma restantes',
	'STEP_3_TITLE_EDIT'				=> 'Defini&ccedil;&otilde;es de idioma',
	'STRING_DEFAULT_VALUE_EXPLAIN'	=> 'Entre com uma frase padr&atilde;o para ser mostrada, um valor padr&atilde;o. Deixe em branco se voc&ecirc; quiser mostrar estes vazios no primeiro momento.',

	'TEXT_DEFAULT_VALUE_EXPLAIN'	=> 'Entre um texto padr&atilde;o para ser mostrado, um valor padr&atilde;o. Deixe em branco se quiser mostrar este vazio no primeiro momento.',
	'TRANSLATE'						=> 'Traduzir',

	'USER_FIELD_NAME'	=> 'Nome/t&iacute;tulo do campo apresentado ao usu&aacute;rio',

	'VISIBILITY_OPTION'				=> 'Op&ccedil;&otilde;es de visibilidade',
));

?>
