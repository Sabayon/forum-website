<?php
/** 
* 
* acp_forums.php [Português]
* 
* @package language 
* @version $Id: forums.php, v 1.0 Outubro/2009
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

// Forum Admin 
$lang = array_merge($lang, array(
	'AUTO_PRUNE_DAYS'				=> 'Dias para a Limpeza',
	'AUTO_PRUNE_DAYS_EXPLAIN'		=> 'Número de dias desde a última mensagem até que o Tópico é apagado.',
	'AUTO_PRUNE_FREQ'				=> 'Frequência da Auto-Limpeza',
	'AUTO_PRUNE_FREQ_EXPLAIN'		=> 'Tempo em dias entre limpezas.',
	'AUTO_PRUNE_VIEWED'				=> 'Dias para a limpeza pela data de visualização',
	'AUTO_PRUNE_VIEWED_EXPLAIN'		=> 'Número de dias desde a última visualização depois que o Tópico é apagado.',

	'CONTINUE'						=> 'Continuar',

	'COPY_PERMISSIONS'				=> 'Copiar Permissões de',

	'COPY_PERMISSIONS_EXPLAIN'		=> 'Para facilitar a configuração das permissões do seu novo fórum, poderá copiar as permissões de um fórum já existente.',

	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Quando criado, este Fórum terá as mesmas permissões do Fórum seleccionado. Se não seleccionar nenhum o novo Fórum não será visível até que sejam definidas as suas Permissões.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Seleccione o Fórum cujas Permissões deseja copiar para este. Se não seleccionar nenhum Fórum mantêm-se as Permissões actuais.',

	'COPY_TO_ACL'					=> 'Alternativamente, também poderá %sconfigurar novas permissões%s para este fórum.',

	'CREATE_FORUM'					=> 'Criar novo Fórum',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Apagar Mensagens ou Mover para Fórum',
	'DECIDE_MOVE_DELETE_SUBFORUMS'	=> 'Apagar Subfóruns ou Mover para Fórum',
	'DEFAULT_STYLE'					=> 'Estilo Padrão',
	'DELETE_ALL_POSTS'				=> 'Apagar Mensagens',
	'DELETE_SUBFORUMS'				=> 'Apagar Subfóruns e Mensagens',
	'DISPLAY_ACTIVE_TOPICS'			=> 'Permitir a activação de Tópicos',
	'DISPLAY_ACTIVE_TOPICS_EXPLAIN'	=> 'Se seleccionar (Sim), a activação de Tópicos nos Subfóruns seleccionados será exibida abaixo desta categoria.',

	'EDIT_FORUM'					=> 'Editar Fórum',
	'ENABLE_INDEXING'				=> 'Activar atributos da Pesquisa',
	'ENABLE_INDEXING_EXPLAIN'		=> 'Se seleccionar (Sim), as Mensagens escritas neste Fórum serão indexadas para pesquisas.',
	'ENABLE_POST_REVIEW'			=> 'Activar Revisão das Mensagens',
	'ENABLE_POST_REVIEW_EXPLAIN'	=> 'Se seleccionar (Sim), as Mensagens podem sempre ser revistas pelos seus autores.',

	'ENABLE_QUICK_REPLY'			=> 'Activar Resposta Rápida',
	'ENABLE_QUICK_REPLY_EXPLAIN'	=> 'Caso esteja em Sim, os utilizadores terão uma caixa de resposta rápida no fórum. Caso a opção global de Resposta Rápida se encontrar desactivada ou o fórum não permita novas mensagens, então aí, a caixa de Resposta Rápida não será exibida, mesmo que aqui esteja sim.',

	'ENABLE_RECENT'					=> 'Exibir Tópicos Activos',
	'ENABLE_RECENT_EXPLAIN'			=> 'Se seleccionar (Sim), os Tópicos escritos neste Fórum serão exibidos na lista de Tópicos activos.',
	'ENABLE_TOPIC_ICONS'			=> 'Activar Ícones de Tópicos',

	'FORUM_ADMIN'					=> 'Administração de Fóruns',
	'FORUM_ADMIN_EXPLAIN'			=> 'No phpBB3 tudo é baseado em Fóruns que podem ser de três tipos: Categoria, Fórum e Atalho. O Fórum pode ter um número ilimitado de Subfóruns, podendo o Administrador decidir o que cada um pode receber. Aqui pode adicionar, editar, apagar, trancar e destrancar Fóruns individuais e ainda adicionar controlos. Se as suas Mensagens e Tópicos não estão sincronizadas, pode resincronizar um Fórum.<br /> <strong>Os Fóruns criados só se tornam visíveis aos Utilizadores depois de definidas ou copiadas as Permissões adequadas.</strong>',
	'FORUM_AUTO_PRUNE'				=> 'Activar Auto-limpeza',
	'FORUM_AUTO_PRUNE_EXPLAIN'		=> 'Limpa os Tópicos do Fórum, determinando os parâmetros de frequência/tempo abaixo.',
	'FORUM_CREATED'					=> 'Fórum criado com sucesso.',
	'FORUM_DATA_NEGATIVE'			=> 'Os Parâmetros de Limpeza não podem ser negativos.',
	'FORUM_DESC_TOO_LONG'			=> 'A sua descrição é muito grande, o limite é de 4.000 caracteres.', 
	'FORUM_DELETE'					=> 'Apagar Fórum',
	'FORUM_DELETE_EXPLAIN'			=> 'Esta ferramenta permite-lhe apagar um determinado Fórum. Se este, for um Fórum com um elevado número de mensagens, pode se desejar mover, todas as suas mensagens (ou Fóruns) incluidas.',
	'FORUM_DELETED'					=> 'Fórum seleccionado apagado com sucesso.',
	'FORUM_DESC'					=> 'Descricção',
	'FORUM_DESC_EXPLAIN'			=> 'Este texto será exibido com o Fórum. Pode incluir códigos HTML.',
	'FORUM_EDIT_EXPLAIN'			=> 'Esta ferramenta permite-lhe criar um novo Fórum. Tenha em atenção que a Moderação e o Controlo do Contador de Mensagens são determinados pelas Permissões do Fórum para cada Utilizador ou Grupo.',
	'FORUM_IMAGE'					=> 'Imagem do Fórum',
	'FORUM_IMAGE_EXPLAIN'			=> 'Local da Imagem (relativo à Directoria raíz do phpBB).',
	'FORUM_IMAGE_NO_EXIST'			=> 'A imagem do fórum especificada não existe',	
	'FORUM_LINK_EXPLAIN'			=> 'URL Completa (incluindo o protocolo, ex. <samp>http://</samp>) para o local em que o utilizador será redirecionado ao clicar, ex: http://www.phpbb.com/.',
	'FORUM_LINK_TRACK'				=> 'Salvar Redirecionamento de Links',
	'FORUM_LINK_TRACK_EXPLAIN'		=> 'Guarda o número de vezes que o atalho do Fórum foi usado.',
	'FORUM_NAME'					=> 'Nome do Fórum',
	'FORUM_NAME_EMPTY'				=> 'Deve escreve um nome para o Fórum.',
	'FORUM_PARENT'					=> 'Fórum Pai',
	'FORUM_PASSWORD'				=> 'Senha do Fórum',
	'FORUM_PASSWORD_CONFIRM'		=> 'Confirmar Senha do Fórum',
	'FORUM_PASSWORD_CONFIRM_EXPLAIN'=> 'Só se definir uma senha para este Fórum.',
	'FORUM_PASSWORD_EXPLAIN'		=> 'Defina uma Senha para este Fórum.<br /> Utilize preferencialmente o sistema de Permissões.',
	'FORUM_PASSWORD_UNSET'			=> 'Remover password do Fórum',
	'FORUM_PASSWORD_UNSET_EXPLAIN'	=> 'Seleccione se deseja remover a password do Fórum.',
	'FORUM_PASSWORD_OLD'			=> 'A password usada tem uma encriptação antiga, altere-a.',
	'FORUM_PASSWORD_MISMATCH'		=> 'As senhas não coincidem entre si.',
	'FORUM_PRUNE_SETTINGS'			=> 'Configuração da Limpeza de Fóruns.',
	'FORUM_RESYNCED'				=> 'O Fórum "%s" foi Re-Sincronizado com sucesso',
	'FORUM_RULES_EXPLAIN'			=> 'As Regras são exibidas em qualquer página do Fórum seleccionado.',
	'FORUM_RULES_LINK'				=> 'Link para as Regras do Fórum',
	'FORUM_RULES_LINK_EXPLAIN'		=> 'Escreva aqui o URL da página das regras do Fórum. Esta configuração irá substituir o texto que escreveu das regras do Fórum.',
	'FORUM_RULES_PREVIEW'			=> 'Prever Regras do Fórum',
	'FORUM_RULES_TOO_LONG'			=> 'As Regras do Fórum são muito grandes, o limite é de 4.000 caracteres.',
	'FORUM_SETTINGS'				=> 'Configurações do Fórum',
	'FORUM_STATUS'					=> 'Estado do Fórum',
	'FORUM_STYLE'					=> 'Estilo do Fórum',
	'FORUM_TOPICS_PAGE'				=> 'Núm. Máx. de Tópicos por página',
	'FORUM_TOPICS_PAGE_EXPLAIN'		=> 'Se diferente de zero, este valor substituirá a configuração padrão de Tópicos por página.',
	'FORUM_TYPE'					=> 'Tipo de Fórum',
	'FORUM_UPDATED'					=> 'A Configuração do Fórum foi actualizada com sucesso.',

	'FORUM_WITH_SUBFORUMS_NOT_TO_LINK'	=> 'Está a tentar modificar um Fórum com Subfóruns para um atalho. Por favor, mova todos os Subfóruns deste Fórum antes de continuar, caso não mova os Subfóruns e faça a modificação para atalho todos os Subfóruns ficarão indisponíveis.',

	'GENERAL_FORUM_SETTINGS'		=> 'Configuração Geral dos Fóruns',

	'LINK'							=> 'atalho',
	'LIST_INDEX'					=> 'Mostrar os Subfóruns legenda do Fórum Pai',
	'LIST_INDEX_EXPLAIN'			=> 'Se seleccionar (Sim), mostra este Fórum no índice como um atalho na legenda do Fórum Pai.',
	'LIST_SUBFORUMS'				=> 'Mostrar os Subfóruns na legenda',
	'LIST_SUBFORUMS_EXPLAIN'		=> 'Se seleccionar (Sim), mostra os Subfóruns deste Fórum no índice como um atalho na legenda do Fórum Pai.',
	'LOCKED'						=> 'Bloqueado',

	'MOVE_POSTS_NO_POSTABLE_FORUM'	=> 'O Fórum escolhido para mover as mensagens não pode receber mensagens. Seleccione um Fórum que possa receber mensagens.',
	'MOVE_POSTS_TO'					=> 'Mover Mensagens para',
	'MOVE_SUBFORUMS_TO'				=> 'Mover Subfóruns para',

	'NO_DESTINATION_FORUM'			=> 'Não seleccionou nenhum Fórum para Mover o conteúdo.',
	'NO_FORUM_ACTION'				=> 'Sem acções definidas para o conteúdo do Fórum.',
	'NO_PARENT'						=> 'Sem Pai',
	'NO_PERMISSIONS'				=> 'Não Copiar Permissões',
	'NO_PERMISSION_FORUM_ADD'		=> 'Não está autorizado a adicionar Fóruns.',
	'NO_PERMISSION_FORUM_DELETE'	=> 'Não está autorizado a apagar Fóruns.',

	'PARENT_IS_LINK_FORUM'			=> 'O Fórum Pai especificado é um Fórum em forma de atalho. Fóruns em forma de atalho não podem ter Subfóruns, seleccione outro Fórum ou Categoria.',
	'PARENT_NOT_EXIST'				=> 'O Pai seleccionado não existe.',
	'PRUNE_ANNOUNCEMENTS'			=> 'Limpar Anúncios',
	'PRUNE_STICKY'					=> 'Limpar Tópicos Fixos',
	'PRUNE_OLD_POLLS'				=> 'Limpar Votações Antigas',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Apagar Tópicos com votações que não receberam votos num determinado período.',

	'REDIRECT_ACL'					=> 'Aqui pode %sdar Permissões%s para este Fórum.',

	'SYNC_IN_PROGRESS'				=> 'Sincronizando Fórum',
	'SYNC_IN_PROGRESS_EXPLAIN'		=> 'Actualmente re-sincronizando a ordem dos Tópicos %1$d/%2$d.',

	'TYPE_CAT'						=> 'Categoria',
	'TYPE_FORUM'					=> 'Fórum',
	'TYPE_LINK'						=> 'Link',

	'UNLOCKED'						=> 'Desbloqueado',
));

?>