<?php 
/** 
* 
* acp_attachments.php [Português]
* 
* @package language 
* @version $Id: attachments.php, v 1.0 Outubro/2009
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
// Placeholders can now contain order information, e.g. instead of 
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows 
// translators to re-order the output of data while ensuring it remains correct 
// 
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine 
// equally where a string contains only two placeholders which are used to wrap text 
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine 

$lang = array_merge($lang, array(
	'ACP_ATTACHMENT_SETTINGS_EXPLAIN'	=> 'Aqui pode configurar as Opções Principais para os Anexos e Categorias Especiais associadas.',
	'ACP_EXTENSION_GROUPS_EXPLAIN'		=> 'Aqui pode adicionar, excluir, modificar e desactivar as Extensões. Consulte o Painel Gestor de Grupos de Extensões.<br >Recomenda-se que não permita extensões de scripts (tipo: php, php3, php4, phtml, pl, cgi, py, rb, asp, aspx, entre outras…), por serem potencialmente perigosas.',
	'ACP_MANAGE_EXTENSIONS_EXPLAIN'		=> 'Aqui pode controlar as Extensões permitidas. Para activar as suas Extensões, consulte por favor o Painel de Gestão dos Grupos das Extensões.<br > Recomenda-se que não permita extensões de scripts (tipo: php, php3, php4, phtml, pl, cgi, py, rb, asp, aspx, entre outras…), por serem potencialmente perigosas.',
	'ACP_ORPHAN_ATTACHMENTS_EXPLAIN'	=> 'Estes são os Ficheiros que não estão associados a uma Mensagem.',
	'ADD_EXTENSION'						=> 'Adicionar Extensão',
	'ADD_EXTENSION_GROUP'				=> 'Adicionar Grupo de Extensões',
	'ADMIN_UPLOAD_ERROR'				=> 'Erros enquanto tentava anexar o Ficheiro: "%s".',
	'ALLOWED_FORUMS'					=> 'Fóruns autorizados',
	'ALLOWED_FORUMS_EXPLAIN'			=> 'Apto enviar as extensões atribuídas aos Fóruns seleccionados (ou a todos se seleccionado).',
	'ALLOWED_IN_PM_POST'				=> 'Autorizado',
	'ALLOW_ATTACHMENTS'					=> 'Permitir Anexos',
	'ALLOW_ALL_FORUMS'					=> 'Permitir todos os Fóruns',
	'ALLOW_IN_PM'						=> 'Permitir em Mensagens Privadas',
	'ALLOW_PM_ATTACHMENTS'				=> 'Permitir Anexos nas Mensagens Privadas',
	'ALLOW_SELECTED_FORUMS'				=> 'Apenas os Fóruns seleccionados abaixo',
	'ASSIGNED_EXTENSIONS'				=> 'Extensões Activadas',
	'ASSIGNED_GROUP'					=> 'Grupo Atribuído',
	'ATTACH_EXTENSIONS_URL'				=> 'Extensões',
	'ATTACH_EXT_GROUPS_URL'				=> 'Grupos de Extensões',
	'ATTACH_ID'							=> 'ID',
	'ATTACH_MAX_FILESIZE'				=> 'Tamanho Máximo de Anexos',
	'ATTACH_MAX_FILESIZE_EXPLAIN'		=> 'Tamanho máximo de cada anexo, 0 = ilimitado.',
	'ATTACH_MAX_PM_FILESIZE'			=> 'Tamanho máximo de Mensagens',
	'ATTACH_MAX_PM_FILESIZE_EXPLAIN'	=> 'Espaço máximo disponível em disco, por Utilizador, para anexos em Mensagens Privadas. 0 = ilimitado.',
	'ATTACH_ORPHAN_URL'					=> 'Anexos Órfãos',
	'ATTACH_POST_ID'					=> 'ID da Mensagem',
	'ATTACH_QUOTA'						=> 'Espaço total de Anexos',
	'ATTACH_QUOTA_EXPLAIN'				=> 'Espaço máximo em disco reservado aos anexos. 0 = ilimitado.',
	'ATTACH_TO_POST'					=> 'Anexar Ficheiro à Mensagem',

	'CAT_FLASH_FILES'					=> 'Ficheiros Flash',
	'CAT_IMAGES'						=> 'Imagens',
	'CAT_QUICKTIME_FILES'				=> 'Ficheiro Quicktime',
	'CAT_RM_FILES'						=> 'Real Media Streams',
	'CAT_WM_FILES'						=> 'Win Media Streams',
	'CHECK_CONTENT'						=> 'Verificar Ficheiros anexados',
	'CHECK_CONTENT_EXPLAIN'				=> 'Alguns Ficheiros podem obrigar os navegadores e executar funções incorrectas. Esta opção permite recusar esses Ficheiros.',
	'CREATE_GROUP'						=> 'Criar um novo Grupo',
	'CREATE_THUMBNAIL'					=> 'Criar uma Imagem reduzida',
	'CREATE_THUMBNAIL_EXPLAIN'			=> 'Criar uma Imagem reduzida em todas as situções possíveis.',

	'DEFINE_ALLOWED_IPS'				=> 'Definir IPs/Servidores autorizados',
	'DEFINE_DISALLOWED_IPS'				=> 'Definir IPs/Servidores proibidos',
	'DOWNLOAD_ADD_IPS_EXPLAIN'			=> 'Para definir vários IPs ou Servidores diferentes, introduza cada um numa nova linha. Para definir uma faixa de endereços de IP separe o início e o fim com um ífem (-). Pode utilizar asteríscos (*)',
	'DOWNLOAD_REMOVE_IPS_EXPLAIN'		=> 'Pode remover (ou não-excluir) múltiplos endereços de IPs de uma única vez usando a combinação apropriada de mouse e teclado para seu computador e navegador. IPs apagados têm um fundo em azul.',
	'DISPLAY_INLINED'					=> 'Mostrar Imagens',
	'DISPLAY_INLINED_EXPLAIN'			=> 'Se escolher <b>Não</b> as imagens anexadas serão mostradas como atalhos.',
	'DISPLAY_ORDER'						=> 'Ordem de visualização dos Anexos',
	'DISPLAY_ORDER_EXPLAIN'				=> 'Os anexos são ordenados pela hora de envio.',

	'EDIT_EXTENSION_GROUP'				=> 'Editar Grupo de Extensões',
	'EXCLUDE_ENTERED_IP'				=> 'Active para excluir o IP/Servidor digitado.',
	'EXCLUDE_FROM_ALLOWED_IP'			=> 'Excluir IP dos IPs/Servidores autorizados',
	'EXCLUDE_FROM_DISALLOWED_IP'		=> 'Excluir IP dos IPs/Servidores proibídos',
	'EXTENSIONS_UPDATED'				=> 'Extensões actualizadas com sucesso.',
	'EXTENSION_EXIST'					=> 'A Extensão %s já existe.',
	'EXTENSION_GROUP'					=> 'Grupo de Extensão',
	'EXTENSION_GROUPS'					=> 'Grupos de Extensões',
	'EXTENSION_GROUP_DELETED'			=> 'Grupo de Extensões apagado com sucesso.',
	'EXTENSION_GROUP_EXIST'				=> 'Grupo de Extensões %s já existe.',

	'GO_TO_EXTENSIONS'					=> 'Vá para a Tela de Gestão de Extensões',
	'GROUP_NAME'						=> 'Nome do Grupo',

	'IMAGE_LINK_SIZE'					=> 'Dimensões para o atalho de Imagem',
	'IMAGE_LINK_SIZE_EXPLAIN'			=> 'Mostra o anexo da imagem como um atalho se a imagem for maior que o seleccionado, introduza 0 px por 0 px para desactivar.',
	'IMAGICK_PATH'						=> 'Local do Imagemagick',
	'IMAGICK_PATH_EXPLAIN'				=> 'Caminho completo para o programa Imagemagick, p.exemplo: /usr/bin/.',

	'MAX_ATTACHMENTS'					=> 'Máximo de anexos por Mensagem',
	'MAX_ATTACHMENTS_PM'				=> 'Máximo de anexos por Mensagem Privada',
	'MAX_EXTGROUP_FILESIZE'				=> 'Tamanho Máximo dos Ficheiros',
	'MAX_IMAGE_SIZE'					=> 'Dimensão Máxima das Imagens',
	'MAX_IMAGE_SIZE_EXPLAIN'			=> 'Tamanho Máximo das imagens anexadas, 0 px por 0 px impede anexo de imagens.',
	'MAX_THUMB_WIDTH'					=> 'Largura máxima das imagens em miniaturas em pixels',
	'MAX_THUMB_WIDTH_EXPLAIN'			=> 'A largura das miniaturas geradas não ultrapassará a seleccionada.',
	'MIN_THUMB_FILESIZE'				=> 'Tamanho Mínimo de imagem reduzida',
	'MIN_THUMB_FILESIZE_EXPLAIN'		=> 'Não criar imagem reduzida para imagens menores do que o seleccionado.',
	'MODE_INLINE'						=> 'Na linha',
	'MODE_PHYSICAL'						=> 'Físico',

	'NOT_ALLOWED_IN_PM'					=> 'Autorizado apenas nas Mensagens',
	'NOT_ALLOWED_IN_PM_POST'			=> 'Negado',
	'NOT_ASSIGNED'						=> 'Não atribuído',
	'NO_EXT_GROUP'						=> 'Nenhum',
	'NO_EXT_GROUP_NAME'					=> 'Nome do Grupo não foi seleccionado',
	'NO_EXT_GROUP_SPECIFIED'			=> 'Grupo de Extensão não especificado.',
	'NO_FILE_CAT'						=> 'Nenhum',
	'NO_IMAGE'							=> 'Sem imagem',
	'NO_THUMBNAIL_SUPPORT'				=> 'O suporte às miniaturas (imagem reduzida) foi desabilitado. Para activar esta funcionalidade é nexessario a extensão GD ou imagemagick instalado. Nenhum dos dois foi encontrado.',
	'NO_UPLOAD_DIR'						=> 'A directoria de envio (upload) que indicou não existe.',
	'NO_WRITE_UPLOAD'					=> 'A directoria que indicou não permite gravação. Por favor, altere as permissões para permitir a escrita nele.',

	'ONLY_ALLOWED_IN_PM'				=> 'Apenas autorizar nas Mensagens Privadas',
	'ORDER_ALLOW_DENY'					=> 'Permitir',
	'ORDER_DENY_ALLOW'					=> 'Negar',

	'REMOVE_ALLOWED_IPS'				=> 'Remover ou não exclui IPs/Servidores autorizados',
	'REMOVE_DISALLOWED_IPS'				=> 'Remover ou não exclui IPs/Servidores proibidos',

	'SEARCH_IMAGICK'					=> 'Localizar Imagemagick',
	'SECURE_ALLOW_DENY'					=> 'Permitir/Negar',
	'SECURE_ALLOW_DENY_EXPLAIN'			=> 'Permite ou Nega a lista de endereços, esta configuração aplica-se apenas aos Ficheiros para Download.',
	'SECURE_DOWNLOADS'					=> 'Activar Downloads Seguros',
	'SECURE_DOWNLOADS_EXPLAIN'			=> 'Com esta opção activada, os downloads são autorizados apenas para os IPs/Servidores por si definidos.',
	'SECURE_DOWNLOAD_NOTICE'			=> 'Os Downloads Seguros estão desactivados. A execução das opções abaixo depende da sua activação.',
	'SECURE_DOWNLOAD_UPDATE_SUCCESS'	=> 'A lista de IPs foi actualizada com sucesso.',
	'SECURE_EMPTY_REFERRER'				=> 'Permitir origem em branco',
	'SECURE_EMPTY_REFERRER_EXPLAIN'		=> 'A segurança dos Downloads é baseada na origem. Deseja permitir os downloads que escondem a origem?',
	'SETTINGS_CAT_IMAGES'				=> 'Configuração de Categorias de Imagens',
	'SPECIAL_CATEGORY'					=> 'Categoria Especial',
	'SPECIAL_CATEGORY_EXPLAIN'			=> 'Categorias Especiais diferenciam-se  na forma como são apresentadas dentro da Mensagem.',
	'SUCCESSFULLY_UPLOADED'				=> 'Enviado com sucesso.',
	'SUCCESS_EXTENSION_GROUP_ADD'		=> 'O Grupo de Extensão foi adicionado com sucesso.',
	'SUCCESS_EXTENSION_GROUP_EDIT'		=> 'O Grupo de Extensão foi actualizado com sucesso.',

	'UPLOADING_FILES'					=> 'A Enviar Ficheiros',
	'UPLOADING_FILE_TO'					=> 'A Enviar Ficheiro "%1$s" à Mensagem Nº %2$d...',
	'UPLOAD_DENIED_FORUM'				=> 'Não tem Permissão para enviar Ficheiros para o Fórum "%s".',
	'UPLOAD_DIR'						=> 'Directoria de Anexos',
	'UPLOAD_DIR_EXPLAIN'				=> 'Directoria onde são arquivados os Anexos.<br /> Se algum anexo for enviado enquanto esta alteração é feita, deve mudar manualmente esse anexo para o novo local.',
	'UPLOAD_ICON'						=> 'Ícone de Envio',
	'UPLOAD_NOT_DIR'					=> 'O local para envio de Ficheiros que indicou não parece ser uma directoria.',
));

?>