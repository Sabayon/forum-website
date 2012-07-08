<?php
/**
*
* acp_language [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.1
* @package language: Brazilian Portuguese
* @original version $Id: language.php,v 1.16 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-17 - 16:38
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
	'ACP_FILES'						=> 'Arquivos de idioma de Admin',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'Aqui voc&ecirc; est&aacute; apto a instalar/remover pacotes de idiomas',

	'EMAIL_FILES'			=> 'E-mail templates',

	'FILE_CONTENTS'				=> 'Conte&uacute;dos de arquivo',
	'FILE_FROM_STORAGE'			=> 'Arquivo da pasta de armazenamento',

	'HELP_FILES'				=> 'Arquivos de ajuda',

	'INSTALLED_LANGUAGE_PACKS'	=> 'Idiomas instalados',
	'INVALID_LANGUAGE_PACK'		=> 'O pacote de idioma selecionado n&atilde;o aparenta ser v&aacute;lido. Favor verificar o pacote de idiomas e enviar novamente se necess&aacute;rio.',
	'INVALID_UPLOAD_METHOD'		=> 'O m&eacute;todo de envio selecionado n&atilde;o &eacute; v&aacute;lido, escolha um m&eacute;todo diferente.',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Detalhes de idioma atualizados com sucesso.',
	'LANGUAGE_ENTRIES'					=> 'Entradas de idioma',
	'LANGUAGE_ENTRIES_EXPLAIN'			=> 'Aqui voc&ecirc; est&aacute; apto a modificar as entradas dos pacotes de idioma ou partes que n&atilde;o tem tradu&ccedil;&atilde;o ainda. <br /><strong>Nota:</strong> Uma vez que feitas as altera&ccedil;&otilde;es, ser&aacute; criada uma pasta de backup onde estas altera&ccedil;&otilde;es se encontrar&atilde;o. Ap&oacute;s fazer o mesmo, voc&ecirc; precisa pegar estes arquivos e fazer o envio pelo servidor a modo de que todos os usu&aacute;rios ir&atilde;o se beneficiar com estas altera&ccedil;&otilde;es realizadas.',
	'LANGUAGE_FILES'					=> 'Arquivos de idioma',
	'LANGUAGE_KEY'						=> 'Chave de idioma',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Este pacote de idioma j&aacute; est&aacute; instalado.',
	'LANGUAGE_PACK_DELETED'				=> 'O pacote de idioma <strong>%s</strong> foi removido com sucesso. Todos os usu&aacute;rios que estavam utilizando deste pacote ser&atilde;o alterados para o idioma padr&atilde;o da comunidade.',
	'LANGUAGE_PACK_DETAILS'				=> 'Detalhes do pacote de idioma',
	'LANGUAGE_PACK_INSTALLED'			=> 'O pacote de idioma <strong>%s</strong> foi instalado com sucesso.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Nome local',
	'LANGUAGE_PACK_NAME'				=> 'Nome',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'O pacote de idiomas selecionado n&atilde;o existe.',
	'LANGUAGE_PACK_USED_BY'				=> 'Usado por (incluindo rob&ocirc;s)',
	'LANGUAGE_VARIABLE'					=> 'Vari&aacute;vel de idioma',
	'LANG_AUTHOR'						=> 'Autor do pacote de idioma',
	'LANG_ENGLISH_NAME'					=> 'Nome portugu&ecirc;s',
	'LANG_ISO_CODE'						=> 'ISO formato',
	'LANG_LOCAL_NAME'					=> 'Nome local',

	'MISSING_LANGUAGE_FILE'		=> 'Faltando arquivo de idioma: <strong style="color:red">%s</strong>',
	'MISSING_LANG_VARIABLES'	=> 'Faltando vari&aacute;vel de idioma',
	'MODS_FILES'				=> 'Arquivos de idioma de MODs',

	'NO_FILE_SELECTED'				=> 'Voc&ecirc; n&atilde;o especificou um arquivo de idioma.',
	'NO_LANG_ID'					=> 'Voc&ecirc; n&atilde;o especificou um pacote de idioma.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Voc&ecirc; n&atilde;o est&aacute; apto a remover o pacote de idiomas padr&atilde;o.<br /> Se voc&ecirc; quiser remover este pacote, troque o padr&atilde;o do f&oacute;rum antes.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Nenhum idioma desinstalado',

	'REMOVE_FROM_STORAGE_FOLDER'		=> 'Remover da pasta de armazenamento',

	'SELECT_DOWNLOAD_FORMAT'	=> 'Selecionar o formato de download',
	'SUBMIT_AND_DOWNLOAD'		=> 'Enviar e baixar um arquivo',
	'SUBMIT_AND_UPLOAD'			=> 'Enviar e carregar um arquivo',

	'THOSE_MISSING_LANG_FILES'			=> 'Os seguintes arquivos de idioma est&atilde;o faltando da pasta do idioma %s',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'As seguintes vari&aacute;veis de idioma est&atilde;o faltando do <strong>%s</strong> pacote de idioma',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Pacotes de idioma desinstalados',

	'UNABLE_TO_WRITE_FILE'		=> 'O arquivo n&atilde;o pode ser escrito para %s.',
	'UPLOAD_COMPLETED'			=> 'O envio foi completado com sucesso.',
	'UPLOAD_FAILED'				=> 'O envio falhou por erros desconhecidos, fa&ccedil;a o mesmo manualmente pelo seu cliente ftp.',
	'UPLOAD_METHOD'				=> 'M&eacute;todos de envio',
	'UPLOAD_SETTINGS'			=> 'Propriedades de envio',

	'WRONG_LANGUAGE_FILE'		=> 'Arquivo de idioma selecionado &eacute; inv&aacute;lido.',
));

?>
