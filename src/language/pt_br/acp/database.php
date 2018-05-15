<?php
/**
*
* acp_database [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.1
* @package language: Brazilian Portuguese
* @original version $Id: database.php,v 1.25 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-18 - 16:43
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
// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'Aqui voc&ecirc; pode fazer backup de todo seu conte&uacute;do do phpBB. Voc&ecirc; pode armazenar o arquivo resultante em sua pasta <samp>store/</samp> ou baixar ele diretamente. Dependendo da configura&ccedil;&atilde;o de seu servidor voc&ecirc; estar&aacute; apto a comprimir o arquivo de diversas formas.',
	'ACP_RESTORE_EXPLAIN'	=> 'Isto ir&aacute; fazer uma restaura&ccedil;&atilde;o completa de todas suas tabelas do phpBB de um arquivo antigo ou recente de backup. Se seu servidor suportar compress&atilde;o, voc&ecirc; poder&aacute; usar gzip ou bzip2 que estes ser&atilde;o descomprimidos automaticamente pelo sistema. <strong>ATEN&Ccedil;&Atilde;O</strong> Isto ir&aacute; sobrescrever qualquer conte&uacute;do existente. A restaura&ccedil;&atilde;o poder&aacute; levar muito tempo, por isso n&atilde;o saia desta p&aacute;gina at&eacute; que este processo esteja finalizado. Os backups est&atilde;o armazenados dentro do diret&oacute;rio <samp>store/</samp> e assume que foram gerados atrav&eacute;s da fun&ccedil;&atilde;o de backup do phpBB. Restaura&ccedil;&otilde;es de backups que n&atilde;o foram gerados pelos criadores do sistema podem ou n&atilde;o funcionar corretamente.',

	'BACKUP_DELETE'		=> 'O arquivo de backup foi deletado com sucesso.',
	'BACKUP_INVALID'	=> 'O arquivo seleciona para backup &eacute; inv&aacute;lido.',
	'BACKUP_OPTIONS'	=> 'Op&ccedil;&otilde;es de Backup',
	'BACKUP_SUCCESS'	=> 'O arquivo de backup foi criado com sucesso.',
	'BACKUP_TYPE'		=> 'Tipo de backup',

	'DATABASE'			=> 'Utilidades do banco de dados',
	'DATA_ONLY'			=> 'Conte&uacute;do apenas',
	'DELETE_BACKUP'		=> 'Excluir backup',
	'DELETE_SELECTED_BACKUP'	=> 'Voc&ecirc; tem certeza que deseja remover o backup selecionado?',
	'DESELECT_ALL'		=> 'Deselecionar todos',
	'DOWNLOAD_BACKUP'	=> 'Salvar backup',

	'FILE_TYPE'			=> 'Tipo de arquivo',
	'FULL_BACKUP'		=> 'Completo',

	'RESTORE_FAILURE'		=> 'O arquivo de backup possivelmente est&aacute; danificado.',
	'RESTORE_OPTIONS'		=> 'Op&ccedil;&otilde;es de restaura&ccedil;&atilde;o',
	'RESTORE_SUCCESS'		=> 'O banco de dados foi restaurado com sucesso.<br /><br /> Sua comunidade dever&aacute; voltar ao momento que estava quando foi feito o backup.',

	'SELECT_ALL'			=> 'Selecionar todos',
	'SELECT_FILE'			=> 'Selecionar um arquivo',
	'START_BACKUP'			=> 'Iniciar backup',
	'START_RESTORE'			=> 'Iniciar restaura&ccedil;&atilde;o',
	'STORE_AND_DOWNLOAD'	=> 'Armazenar e fazer download',
	'STORE_LOCAL'			=> 'Armazenar arquivo localmente',
	'STRUCTURE_ONLY'		=> 'Apenas estrutura',

	'TABLE_SELECT'		=> 'Tabela selecionada',
	'TABLE_SELECT_ERROR'=> 'Voc&ecirc; deve selecionar pelo menos uma tabela.',
));

?>
