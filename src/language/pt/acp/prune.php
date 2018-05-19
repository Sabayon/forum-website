<?php 
/** 
* 
* acp_prune.php [Português]
* 
* @package language 
* @version $Id: prune.php, v 1.0 Outubro/2009
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

// User pruning 
$lang = array_merge($lang, array(
	'ACP_PRUNE_USERS_EXPLAIN'	=> 'Esta secção permite excluir ou desactivar Utilizadores do Fórum. As contas podem ser filtradas de várias maneiras: pela contagem de mensagens, actividade mais recente, etc. Os critérios podem ser combinados para determinar as contas afectadas. Por exemplo, pode seleccionar os Utilizadores com menos de 10 mensagens, inactivos de 01/01/2002. Alternativamente, pode não usar a selecção por critérios, introduzindo a lista de Utilizadores (um por linha) no campo de texto. Tenha cuidado com este recurso! Depois de excluir um Utilizador não é possível reverter a acção.',

	'DEACTIVATE_DELETE'			=> 'Desativar ou apagar',
	'DEACTIVATE_DELETE_EXPLAIN'	=> 'Escolher se quer desactivar Utilizadores ou excluí-los totalmente. Por favor, note que os Utilizadores excluídos não podem ser restaurados!',

	'DELETE_USERS'					=> 'Apagar',
	'DELETE_USER_POSTS'				=> 'Apagar Mensagens Limpas',
	'DELETE_USER_POSTS_EXPLAIN'		=> 'Não é possível apagar as Mensagens de Utilizadores eliminados',

	'JOINED_EXPLAIN'				=> 'Escrever uma Data em formato <kbd>YYYY-MM-DD</kbd>.',

	'LAST_ACTIVE_EXPLAIN'		=> 'Introduza a data no formato <kbd>YYYY-MM-DD</kbd>. Introduza <kbd>0000-00-00</kbd> para seleccionar Utilizadores que nunca entraram, as condições <em>Antes</em> e <em>Depois</em> serão ignoradas.',

	'PRUNE_USERS_LIST'				=> 'Limpeza automatica dee Utilizadores',
	'PRUNE_USERS_LIST_DELETE'		=> 'Se seleccionar este critério, os Utilizadores terão as suas contas removidas.',
	'PRUNE_USERS_LIST_DEACTIVATE'	=> 'Se seleccionar este critério, os Utilizadores terão as suas contas desactivadas.',

	'SELECT_USERS_EXPLAIN'		=> 'Digite aqui utilizadores, que serão utilizados de preferência nos critérios acima. Fundadores não podem ser apagados.',

	'USER_DEACTIVATE_SUCCESS'		=> 'Os Utilizadores seleccionados foram desactivados com sucesso.',
	'USER_DELETE_SUCCESS'			=> 'Os Utilizadores seleccionados foram apagados com sucesso.',
	'USER_PRUNE_FAILURE'			=> 'Nenhum Utilizador cumpriu estes critérios.',

	'WRONG_ACTIVE_JOINED_DATE'		=> 'A data indicada está incorreta, o formato correcto é <kbd>YYYY-MM-DD</kbd>.',
)); 

// Forum Pruning 
$lang = array_merge($lang, array( 
	'ACP_PRUNE_FORUMS_EXPLAIN'		=> 'Aqui pode apagar qualquer Tópico que não tenha sido respondido ou visualizado dentro do número de dias seleccionado. Se não escrever um número, então todos os Tópicos serão apagados. Note que esta operação não excluirá Tópicos com Votações em Curso ou Tópicos Fixos e Anúncios.',

	'FORUM_PRUNE'					=> 'Limpeza',

	'NO_PRUNE'						=> 'Sem Fóruns Limpos.',

	'SELECTED_FORUM'				=> 'Fórum seleccionado',
	'SELECTED_FORUMS'				=> 'Fóruns seleccionados',

	'POSTS_PRUNED'					=> 'Mensagens Limpas',
	'PRUNE_ANNOUNCEMENTS'			=> 'Limpar Anúncios',
	'PRUNE_FINISHED_POLLS'			=> 'Limpar Votações Encerradas',
	'PRUNE_FINISHED_POLLS_EXPLAIN'	=> 'Apagar Tópicos com Votações concluídas',
	'PRUNE_FORUM_CONFIRM'			=> 'Tem a certeza de que deseja activar a limpeza automatica nos Fóruns seleccionados com as configurações especificadas? Os Tópicos e Mensagens apagados não podem ser recuperados.',
	'PRUNE_NOT_POSTED'				=> 'Dias desde o último enviado',
	'PRUNE_NOT_VIEWED'				=> 'Dias desde o último visualizado',
	'PRUNE_OLD_POLLS'				=> 'Limpar votações Antigas',
	'PRUNE_OLD_POLLS_EXPLAIN'		=> 'Apagar Tópicos com Votações que não tenham tido votos dentro do número de dias seleccionados.',
	'PRUNE_STICKY'					=> 'Limpar Tópicos Fixos',
	'PRUNE_SUCCESS'					=> 'A Limpeza foi executada com sucesso.',

	'TOPICS_PRUNED'					=> 'Tópicos Limpos',
));

?>