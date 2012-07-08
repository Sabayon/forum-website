<?php
/**
*
* acp_attachments [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.2
* @package language: Brazilian Portuguese
* @original version $Id: attachments.php,v 1.31 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-18 - 15:30
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
$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Aqui voc&ecirc; pode configurar as principais propriedades para os anexos e as categorias especiais que incluem junto do sistema.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Aqui voc&ecirc; pode adicionar, excluir, modificar ou desabilitar as extens&otilde;es por grupos. Futuras op&ccedil;&otilde;es ir&atilde;o requerer uma categoria especial para os mesmos, mudando o mecanismo de download e trocando o &iacute;cone que ser&aacute; mostrado na frente dos downloads permitidos para determinado grupo.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Aqui voc&ecirc; pode gerenciar suas extens&otilde;es permitidas. Para ativar suas extens&otilde;es, favor entrar no painel de gerenciamento de grupos e extens&otilde;es. N&oacute;s recomendamos que voc&ecirc; n&atilde;o permita extens&otilde;es de scripts (como <code>php</code>, <code>php3</code>, <code>php4</code>, <code>phtml</code>, <code>pl</code>, <code>cgi</code>, <code>py</code>, <code>rb</code>, <code>asp</code>, <code>aspx</code>, e as demais…)',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Aqui voc&ecirc; estar&aacute; apto a ver arquivos enviados ao diret&oacute;rio de anexos, mas que n&atilde;o estejam relacionados a nenhum t&oacute;pico. Isto acontece se os usu&aacute;rios est&atilde;o anexando arquivos, mas n&atilde;o postando o t&oacute;pico. Voc&ecirc; est&aacute; apto a excluir os arquivos ou anexar eles a t&oacute;picos existentes. Anexar em t&oacute;picos existentes requer um ID de t&oacute;pico v&aacute;lido, voc&ecirc; deve determinar este ID por si mesmo, esta disponibilidade &eacute; para pessoas que est&atilde;o esperando para fazer o envio de arquivos com outros programas e determinar um t&oacute;pico para este arquivo, geralmente grandes arquivos.',
	'ADD_EXTENSION'						=> 'Adicionar extens&atilde;o',
	'ADD_EXTENSION_GROUP'				=> 'Adicionar extens&atilde;o ao grupo',
	'ADMIN_UPLOAD_ERROR'				=> 'Erros enquanto tentava anexar arquivos: %s',
	'ALLOWED_FORUMS'					=> 'F&oacute;runs permitidos',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Apto a postar a extens&atilde;o determinada no f&oacute;rum selecionado(ou todos caso selecionados)',
	'ALLOWED_IN_PM_POST'				=> 'Permitido',
	'ALLOW_ATTACHMENTS'					=> 'Habilitar Anexos',
	'ALLOW_ALL_FORUMS'					=> 'Permitir todos f&oacute;runs',
	'ALLOW_IN_PM'						=> 'Permitir em Mensagem Privadas',
	'ALLOW_PM_ATTACHMENTS'				=> 'Permitir anexos em Mensagens Privadas',
	'ALLOW_SELECTED_FORUMS'				=> 'Somente f&oacute;runs selecionados abaixo',
	'ASSIGNED_EXTENSIONS'				=> 'Extens&otilde;es determinadas',
	'ASSIGNED_GROUP'					=> 'Extens&otilde;es por grupo determinadas',
	'ATTACH_EXTENSIONS_URL'				=> 'Extens&otilde;es',
	'ATTACH_EXT_GROUPS_URL'				=> 'Extens&otilde;es de grupo',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Tamanho m&aacute;ximo de arquivo',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Tamanho m&aacute;ximo de cada arquivo, deixe 0 para ilimitado.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Mensagem de tamanho m&aacute;ximo',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Tamanho m&aacute;ximo de cada arquivo para anexos em mensagens privadas. 0 indica ilimitado.',
	'ATTACH_ORPHAN_URL'					=> 'Anexos &oacute;rf&atilde;os',
	'ATTACH_POST_ID'					=> 'ID da mensagem',
	'ATTACH_QUOTA'						=> 'Tamanho da cota de anexo',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Tamanho m&aacute;ximo de disco dispon&iacute;vel para os anexos para toda comunidade, com 0 ser&aacute; ilimitado.',
	'ATTACH_TO_POST'					=> 'Anexar arquivo a mensagem',

	'CAT_FLASH_FILES'			=> 'Arquivos Flash',
	'CAT_IMAGES'				=> 'Imagens',
	'CAT_QUICKTIME_FILES'		=> 'Arquivos QuickTime',
	'CAT_RM_FILES'				=> 'Arquivo RealMedia',
	'CAT_WM_FILES'				=> 'Arquivos Windows Media',
	'CHECK_CONTENT'            => 'Checar anexos',
    'CHECK_CONTENT_EXPLAIN'      => 'Alguns navegadores podem assumir valores incorretos de mimetype para upload de arquivos. Esta op&ccedil;&atilde;o garante que arquivos deste tipo sejam rejeitados.',
	'CREATE_GROUP'				=> 'Criar um novo grupo',
	'CREATE_THUMBNAIL'			=> 'Criar uma miniatura',
	'CREATE_THUMBNAIL_EXPLAIN'	=> 'Criar miniatura em todas as situa&ccedil;&otilde;es poss&iacute;veis.',

	'DEFINE_ALLOWED_IPS'			=> 'Defina IPs/Servidores permitidos',
	'DEFINE_DISALLOWED_IPS'			=> 'Defina IPs/Servidores Proibidos',
	'DOWNLOAD_ADD_IPS_EXPLAIN'		=> 'Para especificar v&aacute;rios endere&ccedil;os IPs diferentes ou servidores, entre com cada um uma nova linha. Para especificar um arranjo de endere&ccedil;os IP separe o come&ccedil;o e o final com um (-), para especificar uma gama de IPs, use * ex. 200.*.*.*',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'	=> 'Voc&ecirc; pode remover (ou excluir) m&uacute;ltiplos endere&ccedil;os de IP em apenas uma vez usando a combina&ccedil;&atilde;o apropriada do mouse com o teclado de seu computador e do navegador. Endere&ccedil;os IPs exclu&iacute;dos t&ecirc;m um fundo azul.',
	'DISPLAY_INLINED'				=> 'Mostrar imagens em linha',
	'DISPLAY_INLINED_EXPLAIN'		=> 'Se marcar para N&atilde;o anexar imagens, a mesma aparecer&aacute; como um link.',
	'DISPLAY_ORDER'					=> 'Ordem dos anexos',
	'DISPLAY_ORDER_EXPLAIN'			=> 'Ordenar anexos por tempo.',
	
	'EDIT_EXTENSION_GROUP'			=> 'Editar extens&otilde;es de grupo',
	'EXCLUDE_ENTERED_IP'			=> 'Habilite para excluir o endere&ccedil;o IP/Servidor entrado.',
	'EXCLUDE_FROM_ALLOWED_IP'		=> 'Excluir IP de IPs/Servidores permitidos',
	'EXCLUDE_FROM_DISALLOWED_IP'	=> 'Excluir IP de IPs/Servidores Proibidos',
	'EXTENSIONS_UPDATED'			=> 'Extens&atilde;o atualizada com sucesso',
	'EXTENSION_EXIST'				=> 'A extens&atilde;o %s j&aacute; existe',
	'EXTENSION_GROUP'				=> 'Extens&atilde;o de Grupo',
	'EXTENSION_GROUPS'				=> 'Extens&otilde;es de Grupos',
	'EXTENSION_GROUP_DELETED'		=> 'Extens&atilde;o de grupo deletada com sucesso.',
	'EXTENSION_GROUP_EXIST'			=> 'A extens&atilde;o de grupo %s j&aacute; existe',

	'GO_TO_EXTENSIONS'		=> 'Ir para a ger&ecirc;ncia de extens&otilde;es',
	'GROUP_NAME'			=> 'Nome do grupo',

	'IMAGE_LINK_SIZE'			=> 'Dimens&otilde;es do link da imagem',
	'IMAGE_LINK_SIZE_EXPLAIN'	=> 'Mostrar a imagem anexada como um link de uma linha. Para desabilitar este comportamento, defina os valores como 0px por 0px.',
	'IMAGICK_PATH'				=> 'Caminho da imagem',
	'IMAGICK_PATH_EXPLAIN'		=> 'Endere&ccedil;o completo para o caminho de convers&atilde;o do ImageMagick, ex. <samp>/usr/bin/</samp>',

	'MAX_ATTACHMENTS'				=> 'N&uacute;mero m&aacute;ximo de anexos por t&oacute;pico',
	'MAX_ATTACHMENTS_PM'			=> 'N&uacute;mero m&aacute;ximo de anexos por mensagem',
	'MAX_EXTGROUP_FILESIZE'			=> 'Tamanho m&aacute;ximo do arquivo',
	'MAX_IMAGE_SIZE'				=> 'Dimens&otilde;es m&aacute;ximas das imagens',
	'MAX_IMAGE_SIZE_EXPLAIN'		=> 'Tamanho m&aacute;ximo de uma imagem como anexo. Defina ambos os valores como 0px por 0px para desabilitar a verifica&ccedil;&atilde;o da dimens&atilde;o.',
	'MAX_THUMB_WIDTH'				=> 'Tamanho m&aacute;ximo em largura da miniatura',
	'MAX_THUMB_WIDTH_EXPLAIN'		=> 'Uma miniatura gerada n&atilde;o exceder&aacute; o tamanho definido aqui',
	'MIN_THUMB_FILESIZE'			=> 'Tamanho m&aacute;ximo da miniatura',
	'MIN_THUMB_FILESIZE_EXPLAIN'	=> 'N&atilde;o crie uma miniatura para as imagens cujo tamanho sejam menores do que os determinados aqui.',
	'MODE_INLINE'					=> 'Na linha',
	'MODE_PHYSICAL'					=> 'F&iacute;sico',

	'NOT_ALLOWED_IN_PM'			=> 'Proibido em mensagens privadas',
	'NOT_ALLOWED_IN_PM_POST'    => 'N&atilde;o &eacute; permitido em Mensagens Privadas',
	'NOT_ASSIGNED'				=> 'N&atilde;o determinado',
	'NO_EXT_GROUP'				=> 'Nenhum',
	'NO_EXT_GROUP_NAME'			=> 'Nenhum nome de grupo entrado',
	'NO_EXT_GROUP_SPECIFIED'	=> 'Nenhum extens&atilde;o de grupo definida.',
	'NO_FILE_CAT'				=> 'Nenhum',
	'NO_IMAGE'					=> 'Sem imagem',
	'NO_THUMBNAIL_SUPPORT'		=> 'A cria&ccedil;&atilde;o de Miniatura foi desabilitada porque n&atilde;o existe biblioteca GD instalada em seu servidor, ImageMagick n&atilde;o p&ocirc;de ser encontrado.',
	'NO_UPLOAD_DIR'				=> 'O diret&oacute;rio de upload especificado n&atilde;o existe.',
	'NO_WRITE_UPLOAD'			=> 'O diret&oacute;rio de upload especificado n&atilde;o pode ser escrito. Favor alterar as permiss&otilde;es de pasta do diret&oacute;rio para CHMOD 777.',

	'ONLY_ALLOWED_IN_PM'	=> 'Permitido somente em mensagens privadas',
	'ORDER_ALLOW_DENY'		=> 'Permitir',
	'ORDER_DENY_ALLOW'		=> 'Proibir',

	'REMOVE_ALLOWED_IPS'		=> 'Remover ou restaurar IPs/Servidores <em>Permitidos</em>',
	'REMOVE_DISALLOWED_IPS'		=> 'Remover ou restaurar IPs/Servidores <em>Proibidos</em>',

	'SEARCH_IMAGICK'				=> 'Buscar por ImageMagick',
	'SECURE_ALLOW_DENY'				=> 'Permitir/Proibir lista',
	'SECURE_ALLOW_DENY_EXPLAIN'		=> 'Troque o comportamento padr&atilde;o quando sistema de downloads seguro est&aacute; ativo no Permitir/Proibir lista para uma <strong>lista branca</strong> (Permitir) ou uma <strong>lista negra</strong> (Proibir)',
	'SECURE_DOWNLOADS'				=> 'Permitir downloads seguros',
	'SECURE_DOWNLOADS_EXPLAIN'		=> 'Com esta op&ccedil;&atilde;o ativada, downloads ser&atilde;o limitados para IPs/Servidores que voc&ecirc; definiu.',
	'SECURE_DOWNLOAD_NOTICE'		=> 'Downloads seguros n&atilde;o est&atilde;o ativados. As propriedades abaixo ser&atilde;o aplicadas depois de ativar Downloads Seguros.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'=> 'A lista de IP foi atualizada com sucesso.',
	'SECURE_EMPTY_REFERRER'			=> 'Permitir refer&ecirc;ncias vazias',
	'SECURE_EMPTY_REFERRER_EXPLAIN'	=> 'Downloads seguros s&atilde;o baseados em refer&ecirc;ncias. Voc&ecirc; deseja permitir downloads para aqueles que est&atilde;o omitidos na refer&ecirc;ncia?',
	'SETTINGS_CAT_IMAGES'			=> 'Propriedades das imagens',
	'SPECIAL_CATEGORY'				=> 'Categoria especial',
	'SPECIAL_CATEGORY_EXPLAIN'		=> 'Categorias especiais se diferem das normais na mensagem.',
	'SUCCESSFULLY_UPLOADED'			=> 'Enviado com sucesso',
	'SUCCESS_EXTENSION_GROUP_ADD'	=> 'Extens&atilde;o de grupo adicionada com sucesso',
	'SUCCESS_EXTENSION_GROUP_EDIT'	=> 'Extens&atilde;o de grupo atualizada com sucesso',

	'UPLOADING_FILES'				=> 'Enviando arquivos',
	'UPLOADING_FILE_TO'				=> 'Enviando arquivo “%1$s” para a mensagem n&uacute;mero %2$d…',
	'UPLOAD_DENIED_FORUM'			=> 'Voc&ecirc; n&atilde;o tem permiss&atilde;o para enviar arquivos para o f&oacute;rum “%s”',
	'UPLOAD_DIR'					=> 'Diret&oacute;rio de envio',
	'UPLOAD_DIR_EXPLAIN'			=> 'Armazenar caminho para arquivos.',
	'UPLOAD_ICON'					=> 'Enviar &iacute;cone',
	'UPLOAD_NOT_DIR'				=> 'O caminho especificado n&atilde;o aparenta ser um diret&oacute;rio.',
));

?>