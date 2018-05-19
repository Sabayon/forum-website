<?php
/** 
* 
* acp_bots.php [Português]
* 
* @package language 
* @version $Id: bots.php, v 1.0 Outubro/2009
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

// Bot settings 
$lang = array_merge($lang, array(
	'BOTS'						=> 'Gestão de Bots',
	'BOTS_EXPLAIN'				=> 'Bots ou espiões são agentes de pesquisa usados pelos motores de busca para actualizar automaticamente as suas Bases de Dados. Estes podem distorcer as estatísticas do número de visitantes, aumentando a carga do servidor e, em algumas situações, provocar erros. Aqui pode definir um tipo especial de utilizador para contornar estes problemas.',
	'BOT_ACTIVATE'				=> 'Activar',
	'BOT_ACTIVE'				=> 'Bot Activo',
	'BOT_ADD'					=> 'Adicionar bot',
	'BOT_ADDED'					=> 'Novo bot adicionado com sucesso.',
	'BOT_AGENT'					=> 'Agente de partida',
	'BOT_AGENT_EXPLAIN'			=> 'Uma sequência inciando os agentes de navegadores de bots, são permitidas partidas parciais.',
	'BOT_DEACTIVATE'			=> 'Desactivar',
	'BOT_DELETED'				=> 'Bot removido com sucesso.',
	'BOT_EDIT'					=> 'Editar bots',
	'BOT_EDIT_EXPLAIN'			=> 'Aqui pode editar ou adicionar novos bots. Pode definir qualquer sequência de agentes e/ou um ou mais endereços de IP (ou grupo de endereços) para coincidir. Cuidado ao definir os parâmetros dos agentes ou endereços. Pode especificar um estilo ou língua com os quais o bot visualizará o seu Fórum. Isto pode reduzir o tráfego de seu site especificando um estilo simples para bots. Lembre-se de especificar permissões para o grupo especial de bots.',
	'BOT_LANG'					=> 'Idioma do Bot',
	'BOT_LANG_EXPLAIN'			=> 'O idioma presente no bot quando ele navega.',
	'BOT_LAST_VISIT'			=> 'Última visita',
	'BOT_IP'					=> 'Endereço do IP do Bot',
	'BOT_IP_EXPLAIN'			=> 'São permitidos nomes parciais se separados por virgulas (,).',
	'BOT_NAME'					=> 'Nome do Bot',
	'BOT_NAME_EXPLAIN'			=> 'Usado apenas para sua informacção.',
	'BOT_NAME_TAKEN'			=> 'Este nome está a ser usado por um Utilizador e não pode ser usado por um Bot.',
	'BOT_NEVER'					=> 'Nunca',
	'BOT_STYLE'					=> 'Estilo do Bot',
	'BOT_STYLE_EXPLAIN'			=> 'O estilo usado para o Fórum pelo bot.',
	'BOT_UPDATED'				=> 'Bot existente actualizado com sucesso.',

	'ERR_BOT_AGENT_MATCHES_UA'	=> 'O agente de bot que escolheu é semelhante ao que está a usar actualmente. Por favor ajuste o agente para este bot.',
	'ERR_BOT_NO_IP'				=> 'O IP que forneceu é inválido ou o hostname não pode ser resolvido.',
	'ERR_BOT_NO_MATCHES'		=> 'Tem que indicar pelo menos uma descrição do navegador ou um IP para o parâmetro.',

	'NO_BOT'					=> 'O bot seleccionado não existe.',
	'NO_BOT_GROUP'				=> 'O Grupo de bots especial existe.',
));

?>