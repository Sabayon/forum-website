<?php
/** 
* 
* acp_database.php [Português]
* 
* @package language 
* @version $Id: database.php, v 1.0 Outubro/2009
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Versão do phpBB: 3.0.6
* @Traduzido por: http://phpbbportugal.com
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

// Database Backup/Restore 
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'		=> 'Aqui pode fazer <b>Cópias de Segurança</b> da Base de Dados do fórum. Os ficheiros podem ser guardados na directoria <b>/store</b>, pode transferi-los para o seu computador ou ambas as acções em simultâneo. Dependendo das configurações do Servidor, o ficheiro poderá ser comprimido em diversos formatos.',
	'ACP_RESTORE_EXPLAIN'		=> 'Esta operação recuperará todas as Tabelas da Base de Dados do phpBB incluídas no Ficheiro.<br /> Se o Servidor suportar compressão de Ficheiros de texto gzip ou bzpi2 a descompressão será automática.<br /> <strong>ATENÇÃO</strong> A Base da Dados actual, e toda a informação nela contida, será substituída. A reposição dos dados poderá demorar, aguarde até que o processo esteja concluído.',

	'BACKUP_DELETE'				=> 'O Ficheiro da Cópia de Segurança foi apagado com sucesso.',
	'BACKUP_INVALID'			=> 'O Ficheiro seleccionado para a Cópia de Segurança é inválido.',
	'BACKUP_OPTIONS'			=> 'Opções da Cópia de Segurança',
	'BACKUP_SUCCESS'			=> 'O Ficheiro da Cópia de Segurança foi criado com sucesso.',
	'BACKUP_TYPE'				=> 'Tipo de Cópia de Segurança',

	'DATABASE'					=> 'Ferramentas da Base de Dados',
	'DATA_ONLY'					=> 'Só Dados',
	'DELETE_BACKUP'				=> 'Apagar a Cópia de Segurança',
	'DELETE_SELECTED_BACKUP'	=> 'Tem a certeza de que deseja apagar a Cópia de Segurança da Base de Dados seleccionada?',
	'DESELECT_ALL'				=> 'Desmarcar todas',
	'DOWNLOAD_BACKUP'			=> 'Descarregar Cópia de Segurança',

	'FILE_TYPE'					=> 'Tipo de Ficheiro',

	'FILE_WRITE_FAIL'	=> 'Incapaz de escrever ficheiro para a pasta de armazenamento.',

	'FULL_BACKUP'				=> 'Completa',

	'RESTORE_FAILURE'			=> 'O Ficheiro da Cópia de Segurança deve estar corrompido.',
	'RESTORE_OPTIONS'			=> 'Opções de restauração',
	'RESTORE_SUCCESS'			=> 'A Base de Dados foi restaurada com sucesso.<br /><br />O Fórum deverá estar de acordo com o momento em que a cópia de segurança foi feita.',

	'SELECT_ALL'				=> 'Marcar todas',
	'SELECT_FILE'				=> 'Seleccionar o Ficheiro',
	'START_BACKUP'				=> 'Iniciar a Cópia de Segurança',
	'START_RESTORE'				=> 'Iniciar restauração',
	'STORE_AND_DOWNLOAD'		=> 'Armazenar e descarregar',
	'STORE_LOCAL'				=> 'Guardar na directoria <strong>/store</strong> do fórum',
	'STRUCTURE_ONLY'			=> 'Só estrutura',

	'TABLE_SELECT'				=> 'Selecção de Tabelas',
	'TABLE_SELECT_ERROR'		=> 'Deve seleccionar pelo menos uma Tabela.',
));

?>