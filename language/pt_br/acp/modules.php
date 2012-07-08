<?php
/**
*
* acp_modules [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: modules.php,v 1.13 2007/10/04 15:07:24 acydburn Exp $
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
//phpBBrasil.com.br
$lang = array_merge($lang, array(
	'ACP_MODULE_MANAGEMENT_EXPLAIN'	=> 'Aqui voc&ecirc; est&aacute; apto a gerenciar todos os tipos de m&oacute;dulos. Favor, note que o Painel de Controle da Administra&ccedil;&atilde;o possui uma estrutura de menu de tr&ecirc;s n&iacute;veis (Categoria -> Categoria -> M&oacute;dulo) pelo que os outros possuem uma estrutura de menu de dois n&iacute;veis (Categoria -> M&oacute;dulo) o qual deve de ser mantido. Tamb&eacute;m fique alerta porque voc&ecirc; pode ser bloqueado se desabilitar ou excluir os m&oacute;dulos respons&aacute;veis pela gerencia da comunidade, muito cuidado quando estiver utilizando desta ferramenta.',
	'ADD_MODULE'					=> 'Adicionar m&oacute;dulo',
	'ADD_MODULE_CONFIRM'			=> 'Voc&ecirc; tem certeza que deseja adicionar o seguinte m&oacute;dulo?',
	'ADD_MODULE_TITLE'				=> 'Adiciona m&oacute;dulo',

	'CANNOT_REMOVE_MODULE'	=> 'Imposs&iacute;vel de remover m&oacute;dulo, isto foi assinado como fundamental. Remova ou mova todos principais antes de fazer esta a&ccedil;&atilde;o.',
	'CATEGORY'				=> 'Categoria',
	'CHOOSE_MODE'			=> 'Escolher modo de m&oacute;dulo',
	'CHOOSE_MODE_EXPLAIN'	=> 'Escolha o modo de m&oacute;dulos para serem usados.',
	'CHOOSE_MODULE'			=> 'Escolher m&oacute;dulo',
	'CHOOSE_MODULE_EXPLAIN'	=> 'Escolha o arquivo a ser chamado por este m&oacute;dulo.',
	'CREATE_MODULE'			=> 'Criar novo m&oacute;dulo',

	'DEACTIVATED_MODULE'	=> 'Desativar m&oacute;dulo',
	'DELETE_MODULE'			=> 'Remover m&oacute;dulo',
	'DELETE_MODULE_CONFIRM'	=> 'Tem certeza que desejar remover este m&oacute;dulo?',

	'EDIT_MODULE'			=> 'Editar m&oacute;dulo',
	'EDIT_MODULE_EXPLAIN'	=> 'Voc&ecirc; est&aacute; apto a definir propriedades do m&oacute;dulo',

	'HIDDEN_MODULE'			=> 'Ocultar m&oacute;dulo',

	'MODULE'					=> 'M&oacute;dulo',
	'MODULE_ADDED'				=> 'M&oacute;dulo adicionado com sucesso.',
	'MODULE_DELETED'			=> 'M&oacute;dulo removido com sucesso.',
	'MODULE_DISPLAYED'			=> 'M&oacute;dulo demonstrado',
	'MODULE_DISPLAYED_EXPLAIN'	=> 'Se voc&ecirc; n&atilde;o desejar mostrar este m&oacute;dulo, mas quer usar ele, defina ocultar como ativado.',
	'MODULE_EDITED'				=> 'M&oacute;dulo editado com sucesso.',
	'MODULE_ENABLED'			=> 'M&oacute;dulo ativado',
	'MODULE_LANGNAME'			=> 'Nome de idioma do m&oacute;dulo',
	'MODULE_LANGNAME_EXPLAIN'	=> 'Entre com o nome do m&oacute;dulo. Use constantes de idioma se o m&oacute;dulo estiver em algum arquivo de idioma.',
	'MODULE_TYPE'				=> 'Tipo do m&oacute;dulo',

	'NO_CATEGORY_TO_MODULE'	=> 'N&atilde;o foi poss&iacute;vel adicionar categoria para m&oacute;dulo. Favor remover/mover todo m&oacute;dulo agregado a este antes de prosseguir com esta a&ccedil;&atilde;o.',
	'NO_MODULE'				=> 'Nenhum m&oacute;dulo encontrado.',
	'NO_MODULE_ID'			=> 'Nenhum m&oacute;dulo especificado.',
	'NO_MODULE_LANGNAME'	=> 'Nenhum idioma do m&oacute;dulo especificado.',
	'NO_PARENT'				=> 'Nenhum pai',

	'PARENT'				=> 'Pai',
	'PARENT_NO_EXIST'		=> 'Pai n&atilde;o existe.',

	'SELECT_MODULE'			=> 'Selecione um m&oacute;dulo',
));

?>
