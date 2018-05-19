<?php
/** 
* 
* ucp.php [Português]
* 
* @package language
* @version $Id: ucp.php, v 1.0 Outubro/2009
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


// Privacy policy and T&C
$lang = array_merge($lang, array(
	'TERMS_OF_USE_CONTENT'				=> 'A equipa responsável pelo Fórum preocupa-se em mantê-lo livre de material indesejável.
											<br />
												Apesar disso, é impossível evitar o aparecimento desse tipo de mensagens.
											<br />
											<br />
												Assim, como futuro <b>Utilizador</b>, reconhece que todas as mensagens enviadas para o <b>Fórum</b> expressam única e exclusivamente os pontos de vista e opiniões dos seus autores.
											<br />
											<br />
												Como futuro <b>Utilizador</b> compromete-se a não colocar neste <b>Fórum</b> mensagens de ódio, ameaçadoras, abusivas, obscenas, insultuosas, sexualmente tendenciosas ou qualquer outro material inadequado ao âmbito temático deste Fórum.
											<br />
											<br />
												<b>Reconhece e aceita que tal conduta implicará a sua expulsão imediata e permanente</b>.
											<br />
											<br />
												Os endereços de <b>IP’s</b> de todas as mensagens são registados na nossa <b>Base de Dados</b> para ajudar a implementar estas regras.
											<br />
											<br />
												Concorda que a <b>Equipa Responsável</b> deste Fórum tem o direito de apagar, editar, mover ou encerrar qualquer conteúdo, e excluir imediatamente os seus autores sem aviso ou explicações adicionais, sempre que estas regras sejam violadas.
											<br />
											<br />
												Como futuro <b>Utilizador</b> aceita que todas as informações que fornecer sejam guardadas e mantidas numa <b>Base de Dados</b>.
											<br />
											<br />
												O software que suporta o <b>Fórum</b> usa <b>”cookies”</b> para guardar informação no seu computador. Os nossos <b>”cookies”</b> não guardam informações pessoais. Servem única e exclusivamente para facilitar a navegação do seu <b>Navegador</b> (<i>Browser</i>).
											<br />
											<br />
												O endereço de correio electrónico que fornecer no seu Registo é usado na <b>Activação</b> da sua <b>Conta de Utilizador</b>, para o envio de informação considerada relevante por parte da Equipa de Responsáveis pelo Fórum e para uma possível recuperação de <b>Senha</b> caso a esqueça ou perca a sua.
											<br />
											<br />
												<b>Se aceitar continuar com o seu registo, compromete-se a cumprir e aceita todas a regras deste Fórum.</b>
											<br />
												<br />
												<b><i>A Administração</b></i>
												<br />
												<br />',
	'PRIVACY_POLICY'					=> '<br />
											<br />
												Todas as informações pessoais (<b>Nome de Utilizador, Senha e email</b>) são guardadas na nossa <b>Base de Dados</b> única e exclusivamente com a finalidade de permitir a utilização do <b>Fórum</b>.
											<br />
												<b>Esta informação nunca será transmitida a terceiros, de forma gratuita ou onerosa</b>.
											<br />
											<br />
												Para evitar expor o seu correio electrónico a <b>spam</b> ou outros ataques, nunca o revele publicamente neste, ou em qualquer outro Fórum.
											<br />
											<br />
												Apesar de nos propormos manter as medidas de segurança sempre actualizadas, não é possível garantir uma protecção total.
											<br />
												Por isso recomendamos que <b>nunca revele a ninguém</b> os dados da sua conta, com vista a evitar o uso abusivo dos mesmos.
											<br />
											<br />
												<b><i>Pel\'Administração</b></i>
											<br />
											<br />',
)); 


// Common language entries 
$lang = array_merge($lang, array( 
	'ACCOUNT_ACTIVE'					=> 'O seu Registo foi activado.',
	'ACCOUNT_ACTIVE_ADMIN'				=> 'O seu Registo foi activado.',
	'ACCOUNT_ACTIVE_PROFILE'			=> 'A sua conta foi reactivada com sucesso.',
	'ACCOUNT_ADDED'						=> 'Obrigado por Registar-se, a sua conta foi criada. Já pode entrar com o seu nome de Utilizador e Senha.',
	'ACCOUNT_COPPA'						=> 'A sua conta foi criada. <br />Para ser Aprovada é necessário a autorização do seu <b>Encarregado de Educação</b>. <br />Para mais detalhes verifique seu o email.',
	'ACCOUNT_EMAIL_CHANGED'				=> 'A sua conta foi actualizada. <br />Neste Fórum as alterações de email requerem a reactivação. <br />A chave de activação foi enviada para o seu novo endereço de email. <br />Para mais detalhes verifique seu o email.',
	'ACCOUNT_EMAIL_CHANGED_ADMIN'		=> 'A sua conta foi actualizada. <br />Neste Fórum as alterações de email requerem a reactivação por um administrador. <br />Receberá um email quando a sua conta for reactivada.',
	'ACCOUNT_INACTIVE'					=> 'A sua conta foi criada com sucesso. <br />A Chave de Activação foi enviada para o endereço de email que indicou durante o seu Registo. <br />Ao receber o email proceda à Activação da sua conta. Só então poderá entrar no Fórum.',
	'ACCOUNT_INACTIVE_ADMIN'			=> 'A sua conta foi criada. <br />Neste Fórum a activação da conta é feita pelo Administrador. Foi enviado um email ao Administrador que o informará quando Activar sua conta. <br />Mantenha-se atento ao seu email.',
	'ACTIVATION_EMAIL_SENT'				=> 'O email de activação foi enviado para o seu endereço de email.',
	'ACTIVATION_EMAIL_SENT_ADMIN'		=> 'O email de activação foi enviado para o Adminstrador.',
	'ADD'								=> 'Adicionar',
	'ADD_BCC'							=> 'Adicionar [BCC]',
	'ADD_FOES'							=> 'Adicionar novo Inimigo',
	'ADD_FOES_EXPLAIN'					=> 'Pode introduzir vários Utilizadores, um por linha.',
	'ADD_FOLDER'						=> 'Adicionar Pasta',
	'ADD_FRIENDS'						=> 'Adicionar um novo Amigo',
	'ADD_FRIENDS_EXPLAIN'				=> 'Pode introduzir vários Utilizadores, um por linha.',
	'ADD_NEW_RULE'						=> 'Adicionar nova Regra',
	'ADD_RULE'							=> 'Adicionar Regra',
	'ADD_TO'							=> 'Adicionar [Para]',

	'ADD_USERS_UCP_EXPLAIN'			=> 'Aqui pode adicionar novos utilizadores ao grupo. Pode seleccionar se este grupo se torna o novo padrão para os utilizadores selecionados. Por favor, digite um nome de utilizador por cada linha.',

	'ADMIN_EMAIL'						=> 'Autorizar os Administradores a enviarem-me emails',
	'AGREE'								=> 'Li e concordo com todas as condições',
	'ALLOW_PM'							=> 'Autorizar o envio de Mensagens Privadas',
	'ALLOW_PM_EXPLAIN'					=> 'Administradores/Moderadores podem sempre enviar-lhe Mensagens Privadas.',
	'ALREADY_ACTIVATED'					=> 'O seu registo já foi activado.',
	'ATTACHMENTS_EXPLAIN'				=> 'Esta é uma lista dos anexos que enviou para este Fórum.',
	'ATTACHMENTS_DELETED'				=> 'Anexos Apagados.',
	'ATTACHMENT_DELETED'				=> 'Anexo Apagado.',
	'AVATAR_CATEGORY'					=> 'Categoria',
	'AVATAR_EXPLAIN'					=> 'Medidas máximas permitidas:<br /> <b>Largura:</b> %1$d pixels; <b>Altura:</b> %2$d pixels; <b>Tamanho:</b> %3$dkB.',
	'AVATAR_FEATURES_DISABLED'			=> 'A função de Avatar está desactivada.',
	'AVATAR_GALLERY'					=> 'Galeria Local',
	'AVATAR_GENERAL_UPLOAD_ERROR'		=> 'Não foi possível enviar o Avatar para %s.',

	'AVATAR_NOT_ALLOWED'			=> 'O seu avatar não pode ser exibido porque os avatares foram desactivados.',

	'AVATAR_PAGE'						=> 'Página',

	'AVATAR_TYPE_NOT_ALLOWED'		=> 'O seu Avatar actual não pode ser exibido porque o seu tipo foi desactivado.',

	'BACK_TO_DRAFTS'					=> 'Voltar aos rascunhos arquivados',
	'BACK_TO_LOGIN'						=> 'Entrar',
	'BIRTHDAY'							=> 'Aniversário',
	'BIRTHDAY_EXPLAIN'					=> 'O seu aniversário será assinalado na data indicada.',
	'BOARD_DATE_FORMAT'					=> 'O meu formato de data',
	'BOARD_DATE_FORMAT_EXPLAIN'			=> 'A sintaxe usada é idêntica à função PHP <a href="http://www.php.net/date" onclick="this.target=\'_blank\';" title="Abrir este atalho numa nova Janela">date()</a>.',
	'BOARD_DST'							=> 'Activar Horário de Verão',
	'BOARD_LANGUAGE'					=> 'O meu idioma',
	'BOARD_STYLE'						=> 'O Estilo do meu Painel',
	'BOARD_TIMEZONE'					=> 'O meu Fuso Horário',
	'BOOKMARKS'							=> 'Favoritos',
	'BOOKMARKS_EXPLAIN'					=> 'Esta é a sua lista de Favoritos. <br >Para remover da lista um Favorito, seleccione a caixa correspondente e carregue no botão <b>Apagar Favoritos Marcados</b>.',
	'BOOKMARKS_DISABLED'				=> 'Favoritos foram desactivados.',
	'BOOKMARKS_REMOVED'					=> 'Os Favoritos seleccionados foram apagados com sucesso.',

	'CANNOT_EDIT_MESSAGE_TIME'			=> 'Não pode editar ou apagar a mensagem.',
	'CANNOT_MOVE_TO_SAME_FOLDER'		=> 'Não podem ser movidas mensagens da pasta que quer Apagar.',
	'CANNOT_MOVE_FROM_SPECIAL'			=> 'Não podem ser movidas mensagens da pasta de saida.',

	'CANNOT_RENAME_FOLDER'				=> 'Esta pasta não pode ser renomeada.',
	'CANNOT_REMOVE_FOLDER'				=> 'Esta pasta não pode ser apagada.',
	'CHANGE_DEFAULT_GROUP'				=> 'Alterar Grupo Padrão',
	'CHANGE_PASSWORD'					=> 'Alterar Senha',
	'CLICK_RETURN_FOLDER'				=> 'Clique %1$sAqui%2$s para voltar para a pasta %3$s',
	'CONFIRMATION'						=> 'Confirmação de Registo',
	'CONFIRM_CHANGES'					=> 'Confirmar Alterações',
	'CONFIRM_EMAIL'						=> 'Confirme o endereço de email',
	'CONFIRM_EMAIL_EXPLAIN'				=> 'Só se alterar o seu endereço de email.',
	'CONFIRM_EXPLAIN'					=> 'Para prevenir Registos automáticos de "espiões" é necessário instroduzir um código de confirmação. O código é exibido na imagem que deverá ver em baixo. Se tem alguma deficiência visual, e não pode ler o código, por favor contacte o %sAdministrador do Fórum%s.',
	
	'VC_REFRESH'						=> 'Alterar Código de Confirmação',
	'VC_REFRESH_EXPLAIN'				=> 'Se não consegue ler o código pode pedir um novo clicando no botão.',
	
	'CONFIRM_PASSWORD'					=> 'Confirme a sua Senha',
	'CONFIRM_PASSWORD_EXPLAIN'			=> 'Só se alterar a Senha actual.',
	'COPPA_BIRTHDAY'					=> 'Neste Fórum o Registo de <b>Utilizadores menores de 13 anos</b> necessita da Aprovação do <b>Encarregado de Educação</b>. <br />Se tem menos de 13 anos o Registo só será Aprovado pelo Administrador do Fórum depois do seu Encarregado de Educação enviar a autorização para a sua participação. <br /><br /><b>Para continuar com o Registo, seleccione a opção correcta, de acordo com a sua idade.</b>',
	'COPPA_COMPLIANCE'					=> 'De acordo com a COPPA',
	'COPPA_EXPLAIN'						=> 'Ao clicar em enviar, criará a sua conta. No entanto, só será activada quando o seu <b>Encarregado de Educação</b> ou o responsável legal autorizar a sua participação no Fórum. Para isso receberá um email com mais detalhes.',
	'CREATE_FOLDER'						=> 'Adicionar Pasta',
	'CURRENT_IMAGE'						=> 'Imagem Actual',
	'CURRENT_PASSWORD'					=> 'Senha Actual',
	'CURRENT_PASSWORD_EXPLAIN'			=> 'Introduza a Senha actual para validar as alterações.',
	'CUR_PASSWORD_ERROR'				=> 'A Senha actual que escreveu está incorreta.',
	'CUSTOM_DATEFORMAT'					=> 'Personalizar',

	'DEFAULT_ACTION'					=> 'Acção Padrão',
	'DEFAULT_ACTION_EXPLAIN'			=> 'Esta acção será activada se nenhuma das anteriores forem aplicáveis.',
	'DEFAULT_ADD_SIG'					=> 'Activar sempre a minha Assinatura',
	'DEFAULT_BBCODE'					=> 'Activar sempre o BBCode',
	'DEFAULT_NOTIFY'					=> 'Avisar-me sempre que houver respostas novas',
	'DEFAULT_SMILIES'					=> 'Activar sempre os Smileys',
	'DEFINED_RULES'						=> 'Regras Definidas',
	'DELETED_TOPIC'						=> 'O Tópico seleccionado foi apagado com sucesso.',
	'DELETE_ATTACHMENT'					=> 'Apagar Anexo',
	'DELETE_ATTACHMENTS'				=> 'Apagar Anexos',
	'DELETE_ATTACHMENT_CONFIRM'			=> 'Tem a certeza que deseja remover este anexo?',
	'DELETE_ATTACHMENTS_CONFIRM'		=> 'Tem a certeza que deseja remover estes anexos?',
	'DELETE_AVATAR'						=> 'Apagar Imagem',
	'DELETE_COOKIES_CONFIRM'			=> 'Apagar todos os cookies?',
	'DELETE_MARKED_PM'					=> 'Apagar as Mensagens seleccionadas',
	'DELETE_MARKED_PM_CONFIRM'			=> 'Tem a certeza de que deseja apagar as Mensagens seleccionadas?',
	'DELETE_OLDEST_MESSAGES'			=> 'Apagar Mensagens mais antigas ',
	'DELETE_MESSAGE'					=> 'Apagar Mensagem',
	'DELETE_MESSAGE_CONFIRM'			=> 'Tem a certeza de que deseja apagar esta Mensagem Privada?',
	'DELETE_MESSAGES_IN_FOLDER'			=> 'Apagar todas as Mensagens dentro de pasta removida',
	'DELETE_RULE'						=> 'Apagar Regra',
	'DELETE_RULE_CONFIRM'				=> 'Tem a certeza de que deseja Apagar está regra?',
	'DEMOTE_SELECTED'					=> 'Degradar seleccionado',
	'DISABLE_CENSORS'					=> 'Permitir Palavras Censuradas',
	'DISPLAY_GALLERY'					=> 'Mostrar Galeria',
	'DOMAIN_NO_MX_RECORD_EMAIL'			=> 'O Domínio do endereço de email indicado é inválido.',
	'DOWNLOADS'							=> 'Downloads',
	'DRAFTS_DELETED'					=> 'Todos os rascunhos seleccionadas foram apagados.',
	'DRAFTS_EXPLAIN'					=> 'Aqui pode ver, editar e apagar os rascunhos arquivados.',
	'DRAFT_UPDATED'						=> 'Rascunhos actualizados.',

	'EDIT_DRAFT_EXPLAIN'				=> 'Aqui pode editar seu rascunho. Rascunhos não contêm anexos e informações de votações.',
	'EMAIL_BANNED_EMAIL'				=> 'Não é permitido utilizar o endereço de email indicado.',
	'EMAIL_INVALID_EMAIL'				=> 'O endereço de email indicado é inválido.',
	'EMAIL_REMIND'						=> 'Este deve ser o endereço de email que indicou ao registar-se.',

	'EMAIL_TAKEN_EMAIL'					=> 'Este endereço de email já está em uso.',
	'EMPTY_DRAFT'						=> 'Deve escrever uma mensagem antes de enviar as suas alterações.',
	'EMPTY_DRAFT_TITLE'					=> 'O Rascunho tem que ter um Título.',
	'EXPORT_AS_XML'						=> 'Exportar em XML',
	'EXPORT_AS_CSV'						=> 'Exportar em CSV',
	'EXPORT_AS_CSV_EXCEL'				=> 'Exportar em CSV (Excel)',
	'EXPORT_AS_TXT'						=> 'Exportar em TXT',
	'EXPORT_AS_MSG'						=> 'Exportar em MSG',
	'EXPORT_FOLDER'						=> 'Exportar Pasta',

	'FIELD_REQUIRED'					=> 'O Campo "% s" deve ser preenchido.',
	'FIELD_TOO_SHORT'					=> 'O Campo "%1$s" é muito curto. O mínimo de caracteres é de %2$d.',
	'FIELD_TOO_LONG'					=> 'O Campo "%1$s" é muito longo. O máximo de caracteres permitidos são %2$d.',
	'FIELD_TOO_SMALL'					=> 'O Valor de "%1$s" é muito pequeno. O valor mínimo é de %2$d.',
	'FIELD_TOO_LARGE'					=> 'O Valor de "%1$s" é muito grande. O valor máximo é de %2$d.',
	'FIELD_INVALID_CHARS_NUMBERS_ONLY'	=> 'O Campo "% s" tem caracteres inválidos. São permitidos somente números.',
	'FIELD_INVALID_CHARS_ALPHA_ONLY'	=> 'O Campo "% s" tem caracteres inválidos. São permitidos somente caracteres alfanuméricos.',
	'FIELD_INVALID_CHARS_SPACERS_ONLY'	=> 'O Campo "% s" tem caracteres inválidos. Somente alfanumérico, espaço ou - +_ [] são permitidos.',
	'FIELD_INVALID_DATE'				=> 'O Campo "% s" tem uma data inválida.',

	'FOE_MESSAGE'						=> 'Mensagem de um Inimigo',
	'FOES_EXPLAIN'						=> 'Inimigos são Utilizadores que serão ignorados.<br /> As Mensagens destes Utilizadores não serão totalmente visíveis e as Mensagens Privadas não são autorizadas.<br /> No entanto não pode ignorar Administradores ou Moderadores.',
	'FOES_UPDATED'						=> 'A sua Lista de Inimigos foi actualizada com sucesso.',
	'FOLDER_ADDED'						=> 'A Pasta foi adicionada com sucesso.',
	'FOLDER_MESSAGE_STATUS'				=> '%1$d Mensagens de %2$d armazenadas ',

	'FOLDER_NAME_EMPTY'			=> 'Deve escrever um nome para esta pasta.',

	'FOLDER_NAME_EXIST'					=> 'A Pasta <b>%s</b> já existe.',
	'FOLDER_OPTIONS'					=> 'Opções de Pasta',
	'FOLDER_RENAMED'					=> 'A Pasta foi renomeada com sucesso.',
	'FOLDER_REMOVED'					=> 'A Pasta foi apagada com sucesso.',
	'FOLDER_STATUS_MSG'					=> 'A Pasta está %1$d%% cheia (%2$d mensagens de %3$d arquivadas)',
	'FORWARD_PM'						=> 'Próxima MP',
	'FORCE_PASSWORD_EXPLAIN'			=> 'Antes de continuar, é necessário alterar a sua senha.',
	'FRIEND_MESSAGE'					=> 'Mensagem de um Amigo',
	'FRIENDS'							=> 'Amigos',
	'FRIENDS_EXPLAIN'					=> 'Os <b>Amigos</b> permitem o acesso rápido aos Utilizadores com quem comunica frequentemente.<br /> As Mensagens dos <b>Amigos</b> só serão destacadas se o Template do Fórum o permitir.',
	'FRIENDS_OFFLINE'					=> 'Offline',
	'FRIENDS_ONLINE'					=> 'Online',
	'FRIENDS_UPDATED'					=> 'A sua Lista de Amigos foi actualizada com sucesso.',
	'FULL_FOLDER_OPTION_CHANGED'		=> 'Opções de Pasta cheia alteradas com sucesso.',
	'FWD_ORIGINAL_MESSAGE'				=> '-------- Mensagem Original --------',
	'FWD_SUBJECT'						=> 'Título: %s',
	'FWD_DATE'							=> 'Data: %s',
	'FWD_FROM'							=> 'De: %s',
	'FWD_TO'							=> 'Para: %s',

	'GLOBAL_ANNOUNCEMENT'				=> 'Anúncio Global',

	'HIDE_ONLINE'						=> 'Ocultar o meu Status Online',
	'HIDE_ONLINE_EXPLAIN'				=> 'Ficará invisível na próxima visita ao Fórum.',
	'HOLD_NEW_MESSAGES'					=> 'Não serão aceitas novas Mensagens (As Mensagens novas serão mantidas até haver espaço disponível)',
	'HOLD_NEW_MESSAGES_SHORT'			=> 'As Mensagens novas serão mantidas',

	'IF_FOLDER_FULL'					=> 'Se a Pasta estiver cheia',
	'IMPORTANT_NEWS'					=> 'Anúncios Importantes',
	'INVALID_USER_BIRTHDAY'				=> 'A data de nascimento não é valida.',
	'INVALID_CHARS_USERNAME'			=> 'O Nome de utilizador contém caracteres proibidos.',
	'INVALID_CHARS_NEW_PASSWORD'		=> 'A Senha não tem os caracteres exigidos.',
	'ITEMS_REQUIRED'					=> 'Os itens marcados com * são campos de preenchimento obrigatório.',

	'JOIN_SELECTED'						=> 'Unir Seleccionados',

	'LANGUAGE'							=> 'Idioma',
	'LINK_REMOTE_AVATAR'				=> 'Atalho Remoto',
	'LINK_REMOTE_AVATAR_EXPLAIN'		=> 'Indique a URL do local que contém a imagem de Avatar que deseja.',
	'LINK_REMOTE_SIZE'					=> 'Dimensões do Avatar',
	'LINK_REMOTE_SIZE_EXPLAIN'			=> 'Especifique a <b>Largura</b> e <b>Altura</b> do Avatar. Deixe espaço em branco para tentar a verificação automática.',
	'LOGIN_EXPLAIN_UCP'					=> 'Tem que estar ligado para entrar no Painel de Controlo do Utilizador.',
	'LOGIN_REDIRECT'					=> 'A sua sessão foi iniciada.',
	'LOGOUT_FAILED'						=> 'A sua sessão não foi encerrada. Se continuar tendo este problema contacte um Administrador.',
	'LOGOUT_REDIRECT'					=> 'A sua sessão foi encerrada.',

	'MARK_IMPORTANT'					=> 'Marcar/Desmarcar como Importante',
	'MARKED_MESSAGE'					=> 'Mensagem Marcada',
	'MAX_FOLDER_REACHED'				=> 'O número máximo de Utilizadores permitidos na pasta foi alcançado.',
	'MESSAGE_BY_AUTHOR'					=> 'por',
	'MESSAGE_COLOURS'					=> 'Cores da Mensagem',
	'MESSAGE_DELETED'					=> 'A Mensagem seleccionada foi apagada com sucesso.',
	'MESSAGE_HISTORY'					=> 'Histórico de Mensagens',
	'MESSAGE_REMOVED_FROM_OUTBOX'		=> 'Esta mensagem foi apagada pelo autor antes de ser entregue.',
	'MESSAGE_SENT_ON'					=> 'em',
	'MESSAGE_STORED'					=> 'A Mensagem foi enviada com sucesso.',
	'MESSAGE_TO'						=> 'Para',
	'MESSAGES_DELETED'					=> 'Mensagens apagada',
	'MOVE_DELETED_MESSAGES_TO'			=> 'Mover mensagens da pasta apagada para',
	'MOVE_DOWN'							=> 'Mover - Baixo',
	'MOVE_MARKED_TO_FOLDER'				=> 'Mover seleccionados para %s',
	'MOVE_PM_ERROR'						=> 'Um erro ocorreu enquanto as mensagens eram movidas para a nova pasta. Por isso, foram movidas somente as Mensagens %1d de %2d.',
	'MOVE_TO_FOLDER'					=> 'Mover para a Pasta',
	'MOVE_UP'							=> 'Mover - Cima',

	'NEW_EMAIL_ERROR'					=> 'Os endereços de email indicados são diferentes.',
	'NEW_FOLDER_NAME'					=> 'Nome da nova Pasta',
	'NEW_PASSWORD'						=> 'Senha',
	'NEW_PASSWORD_ERROR'				=> 'As Senhas indicadas são diferentes.',
	'NOTIFY_METHOD'						=> 'Método de Aviso',
	'NOTIFY_METHOD_BOTH'				=> 'Ambos',
	'NOTIFY_METHOD_EMAIL'				=> 'Somente email',
	'NOTIFY_METHOD_EXPLAIN'				=> 'Método para enviar Mensagens enviadas por este painel.',
	'NOTIFY_METHOD_IM'					=> 'Apenas Jabber',
	'NOTIFY_ON_PM'						=> 'Avisar-me por email de novas Mensagens Privadas',
	'NOT_ADDED_FRIENDS_ANONYMOUS'		=> 'Não pode adicionar um Visitante à sua Lista de Amigos.',

	'NOT_ADDED_FRIENDS_BOTS'		=> 'Não pode adicionar bots à sua lista de amigos.',

	'NOT_ADDED_FRIENDS_FOES'			=> 'Não pode adicionar Inimigos à sua Lista de Amigos.',
	'NOT_ADDED_FRIENDS_SELF'			=> 'Não pode auto adicionar-se à sua Lista de Amigos.',
	'NOT_ADDED_FOES_MOD_ADMIN'			=> 'Não pode adicionar Administradores ou Moderadores à sua Lista de Inimigos.',
	'NOT_ADDED_FOES_ANONYMOUS'			=> 'Não pode adicionar um Visitante à sua Lista de Inimigos.',

	'NOT_ADDED_FOES_BOTS'			=> 'Não pode adicionar bots à sua lista de inimigos.',

	'NOT_ADDED_FOES_FRIENDS'			=> 'Não pode adicionar Amigos à sua Lista de Inimigos.',
	'NOT_ADDED_FOES_SELF'				=> 'Não pode auto adicionar-se à sua Lista de Inimigos.',
	'NOT_AGREE'							=> 'Li e não concordo com estas condições',
	'NOT_ENOUGH_SPACE_FOLDER'			=> 'A Pasta de Destino "% s" parece estar cheia. O seu pedido não foi executado.',
	'NOT_MOVED_MESSAGE'					=> 'Tem 1 Mensagem Privada presa, porque sua pasta está cheia.',
	'NOT_MOVED_MESSAGES'				=> 'Tem %d Mensagens Privadas presas, porque sua pasta está cheia.',
	'NO_ACTION_MODE'					=> 'Não foi seleccionada uma acção para esta Mensagem.',
	'NO_AUTHOR'							=> 'Nenhum Autor definido para esta Mensagem',
	'NO_AVATAR_CATEGORY'				=> 'Nenhum',

	'NO_AUTH_DELETE_MESSAGE'			=> 'Apagar Mensagens Privadas: <b>Proibido</b>.',
	'NO_AUTH_EDIT_MESSAGE'				=> 'Editar Mensagens Privadas: <b>Proibido</b>.',
	'NO_AUTH_FORWARD_MESSAGE'			=> 'Responder Mensagens Privadas: <b>Proibido</b>.',
	'NO_AUTH_GROUP_MESSAGE'				=> 'Enviar Mensagens Privadas para Grupos: <b>Proibido</b>.',
	'NO_AUTH_PASSWORD_REMINDER'			=> 'Não está autorizado a pedir nova senha.',
	'NO_AUTH_READ_HOLD_MESSAGE'			=> 'Não está autorizado a ler Mensagens Privadas que estejam presas.',
	'NO_AUTH_READ_MESSAGE'				=> 'Ler Mensagens Privadas: <b>Proibido</b>.',
	'NO_AUTH_READ_REMOVED_MESSAGE'		=> 'Ler Mensagens Privadas apagadas pelo autor: <b>Proibido</b>.',
	'NO_AUTH_SEND_MESSAGE'				=> 'Enviar Mensagens Privadas: <b>Proibido</b>.',
	'NO_AUTH_SIGNATURE'					=> 'Definir a sua Assinatura: <b>Proibido</b>.',

	'NO_BCC_RECIPIENT'					=> 'Nenhum',
	'NO_BOOKMARKS'						=> 'Não tem Favoritos.',
	'NO_BOOKMARKS_SELECTED'				=> 'Não seleccionou nenhum marcador.',
	'NO_EDIT_READ_MESSAGE'				=> 'A mensagem privada não pode ser editada porque já foi lida.',
	'NO_EMAIL_USER'						=> 'O Nome de Utilizador/Endereço de email indicados não foram encontrados.',
	'NO_FOES'							=> 'Não tem Inimigos definidos.',
	'NO_FRIENDS'						=> 'Não tem Amigos definidos.',
	'NO_FRIENDS_OFFLINE'				=> 'Nenhum Amigo Offline',
	'NO_FRIENDS_ONLINE'					=> 'Nenhum Amigo Online',
	'NO_GROUP_SELECTED'					=> 'Nenhum Grupo especificado.',
	'NO_IMPORTANT_NEWS'					=> 'Nenhum Anúncio importante actual.',
	'NO_MESSAGE'						=> 'A Mensagem Privada seleccionada não existe.',
	'NO_NEW_FOLDER_NAME'				=> 'Deve especificar um novo nome para a pasta.',
	'NO_NEWER_PM'						=> 'Nenhuma Mensagem Nova.',
	'NO_OLDER_PM'						=> 'Nenhuma Mensagem Antiga.',
	'NO_PASSWORD_SUPPLIED'				=> 'Não pode fazer Login sem uma senha.',
	'NO_RECIPIENT'						=> 'Nenhum Receptor Definido.',
	'NO_RULES_DEFINED'					=> 'Não há Regras Definidas.',
	'NO_SAVED_DRAFTS'					=> 'Não há rascunhos arquivados.',
	'NO_TO_RECIPIENT'					=> 'Nenhum',
	'NO_WATCHED_FORUMS'					=> 'Não está a observar nenhum Fórum.',
	'NO_WATCHED_SELECTED'				=> 'Não seleccionou nenhum Tópico ou Fórum Observado.',	
	'NO_WATCHED_TOPICS'					=> 'Não está observando nenhum Tópico.',

	'PASS_TYPE_ALPHA_EXPLAIN'			=> 'Deve ter entre %1$d e %2$d caracteres alfanuméricos.',
	'PASS_TYPE_ANY_EXPLAIN'				=> 'Deve ter entre %1$d e %2$d caracteres.',
	'PASS_TYPE_CASE_EXPLAIN'			=> 'Deve ter entre %1$d e %2$d caracteres e deve conter casos misturados.',
	'PASS_TYPE_SYMBOL_EXPLAIN'			=> 'Deve ter entre %1$d e %2$d caracteres e deve conter símbolos.',
	'PASSWORD'							=> 'Senha',
	'PASSWORD_ACTIVATED'				=> 'A sua Nova Senha foi activada.',
	'PASSWORD_UPDATED'					=> 'Uma nova palavra passe foi enviada para o seu endereço registado de correio electrónico.',
	'PERMISSIONS_RESTORED'				=> 'As suas permissões originais foram restauradas com sucesso.',
	'PERMISSIONS_TRANSFERRED'			=> 'As Permissões foram transferidas do <strong>%s</strong> com sucesso. Agora, pode navegar com as Permissões do Utilizador.<br />As Permissões de Administrador não foram transferidas. Pode voltar as suas Permissões originais em qualquer momento.',
	'PM_DISABLED'						=> 'As Mensagens Privadas estão inactivas.',
	'PM_FROM'							=> 'De',
	'PM_FROM_REMOVED_AUTHOR'			=> 'Esta Mensagem foi enviada por um utilizador não Registado.',
	'PM_ICON'							=> 'Ícone da Mensagem Privada',
	'PM_INBOX'							=> 'Caixa de Entrada',
	'PM_NO_USERS'						=> 'O utilizador adicionado não existe.',
	'PM_OUTBOX'							=> 'Caixa de Saída',
	'PM_SENTBOX'						=> 'Mensagens enviadas',
	'PM_SUBJECT'						=> 'Título',
	'PM_TO'								=> 'Enviar para',
	'PM_USERS_REMOVED_NO_PM'			=> 'Alguns Utilizadores adicionados estão com a função de Mensagem Privada desactivada e não poderão receber a Mensagem.',
	'POPUP_ON_PM'						=> 'Abrir uma janela Pop-up quando existirem novas Mensagens Privadas',
	'POST_EDIT_PM'						=> 'Editar Mensagem',
	'POST_FORWARD_PM'					=> 'Responder Mensagem',
	'POST_NEW_PM'						=> 'Criar Mensagem',
	'POST_PM_LOCKED'					=> 'Mensagem Privada bloqueada',

	'POST_PM_LOCKED'			=> 'Mensagens Privadas estão bloqueadas.',

	'POST_QUOTE_PM'						=> 'Citar Mensagem Privada',
	'POST_PM_POST'						=> 'Citar Mensagem',
	'POST_REPLY_PM'						=> 'Responder Mensagem Privada',
	'PRINT_PM'							=> 'Imprimir Mensagem Privada',
	'PREFERENCES_UPDATED'				=> 'As suas Preferências foram actualizadas.',
	'PROFILE_INFO_NOTICE'				=> 'Estas informações serão <b>visíveis por todos os Utilizadores</b>.<br /> Verifique se deseja incluir os seus dados pessoais. Todos os campos marcados com (*) são de preenchimento obrigatório.',
	'PROFILE_UPDATED'					=> 'O seu Perfil foi actualizado.',

	'RECIPIENT'							=> 'Destinatário',
	'RECIPIENTS'						=> 'Destinatários',
	'REGISTRATION'						=> 'Registo',
	'RELEASE_MESSAGES'					=> 'Clique %sAqui%s para libertar as Mensagens presas, elas serão reorganizadas na pasta apropriada se houver espaço suficiente.',
	'REMOVE_ADDRESS'					=> 'Apagar endereço',
	'REMOVE_SELECTED_BOOKMARKS'			=> 'Apagar Favoritos seleccionados',
	'REMOVE_SELECTED_BOOKMARKS_CONFIRM'	=> 'Tem a certeza que deseja remover todos os Favoritos seleccionados?',
	'REMOVE_BOOKMARK_MARKED'			=> 'Apagar Favoritos marcados ',
	'REMOVE_FOLDER'						=> 'Remover pasta',
	'REMOVE_FOLDER_CONFIRM'				=> 'Tem a certeza que deseja remover esta pasta?',
	'RENAME'							=> 'Renomear',
	'RENAME_FOLDER'						=> 'Renomear Pasta',
	'REPLIED_MESSAGE'					=> 'Mensagens Respondidas',

	'REPLY_TO_ALL'						=> 'Responder ao remetente e a todos os destinatários.',
	'REPORT_PM'							=> 'Denunciar mensagem privada',

	'RESIGN_SELECTED'					=> 'Desmarcar Seleccionados',
	'RETURN_FOLDER'						=> 'Clique %1$sAqui%2$s para voltar à Pasta',
	'RETURN_UCP'						=> 'Clique %sAqui%s para voltar ao Painel de Controlo do Utilizador',
	'RULE_ADDED'						=> 'A Regra foi adicionada com sucesso.',
	'RULE_ALREADY_DEFINED'				=> 'Esta Regra estava previamente definida.',
	'RULE_DELETED'						=> 'A Regra foi apagada com sucesso.',
	'RULE_NOT_DEFINED'					=> 'Regra não especificada corretamente.',
	'RULE_REMOVED_MESSAGE'				=> 'Uma Mensagem Privada foi apagada pelos processos de filtragem.',
	'RULE_REMOVED_MESSAGES'				=> '%d Mensagens Privadas foram apagadas pelos processos de filtragem.',
	'SAME_PASSWORD_ERROR'				=> 'A nova Senha é igual à antiga.',

	'SEARCH_YOUR_POSTS'					=> 'Mostrar todas as minhas Mensagens',
	'SEND_PASSWORD'						=> 'Enviar Senha',
	'SENT_AT'							=> 'Enviado em',
	'SHOW_EMAIL'						=> 'Tornar visível o meu endereço de email',
	'SIGNATURE_EXPLAIN'					=> 'Escreva aqui a Assinatura que por defeito será adicionada a todas a Mensagens. O limite é de %d caracteres.',
	'SIGNATURE_PREVIEW'					=> 'Previsão da Assinatura',
	'SIGNATURE_TOO_LONG'				=> 'A sua Assinatura é muito grande.',
	'SORT'								=> 'Ordenar',
	'SORT_COMMENT'						=> 'Descrições do Ficheiro',
	'SORT_DOWNLOADS'					=> 'Downloads',
	'SORT_EXTENSION'					=> 'Extensão',
	'SORT_FILENAME'						=> 'Nome do Ficheiro',
	'SORT_POST_TIME'					=> 'Data do Anexo',
	'SORT_SIZE'							=> 'Tamanho do Ficheiro',

	'TIMEZONE'							=> 'Fuso Horário',
	'TO'								=> 'Para',
	'TOO_MANY_RECIPIENTS'				=> 'Muitos Destinatários.',
	'TOO_MANY_REGISTERS'				=> 'Excedeu o número máximo de tentativas de Registo para esta sessão. Tente novamente mais tarde.',

	'UCP'								=> 'Painel de Controlo do Utilizador',
	'UCP_ACTIVATE'						=> 'Activar Registo',
	'UCP_ADMIN_ACTIVATE'				=> 'Tem de introduzir um endereço de email válido para que o Registo seja activado. <br />O Administrador verificará o seu Registo, e, se for Aprovado, receberá um email para activar a sua conta.',
	'UCP_AIM'							=> 'Mensageiro Instantâneo AOL',
	'UCP_ATTACHMENTS'					=> 'Anexos',
	'UCP_COPPA_BEFORE'					=> 'Tenho mais de 13 anos. Nasci antes de %s.',
	'UCP_COPPA_ON_AFTER'				=> 'Tenho menos de 13 anos. Nasci depois de %s.',
	'UCP_EMAIL_ACTIVATE'				=> 'Tem que usar um email válido.<br /> Após o Registo receberá um email para Activação da sua conta.<br /> Só depois de receber esse email e Activar a Conta é que poderá entrar no Fórum.',
	'UCP_ICQ'							=> 'Número de ICQ',
	'UCP_JABBER'						=> 'Endereço Jabber',

	'UCP_MAIN'							=> 'Geral',
	'UCP_MAIN_ATTACHMENTS'				=> 'Anexos',
	'UCP_MAIN_BOOKMARKS'				=> 'Administrar Favoritos',
	'UCP_MAIN_DRAFTS'					=> 'Rascunhos Arquivados',
	'UCP_MAIN_FRONT'					=> 'Página Principal',
	'UCP_MAIN_SUBSCRIBED'				=> 'Administrar Observações',

	'UCP_MSNM'					=> 'WL/MSN Messenger',

	'UCP_NO_ATTACHMENTS'				=> 'Não enviou nenhum anexo.',

	'UCP_PREFS'							=> 'Preferências',
	'UCP_PREFS_PERSONAL'				=> 'Configurações Pessoais',
	'UCP_PREFS_POST'					=> 'Mensagens enviadas',
	'UCP_PREFS_VIEW'					=> 'A ver Mensagens',

	'UCP_PM'							=> 'Mensagens Privadas',
	'UCP_PM_COMPOSE'					=> 'Criar Mensagem Privada',
	'UCP_PM_DRAFTS'						=> 'Rascunhos',
	'UCP_PM_OPTIONS'					=> 'Opções',
	'UCP_PM_POPUP'						=> 'Mensagens Privadas',
	'UCP_PM_POPUP_TITLE'				=> 'Pop-up de Mensagens Privadas',
	'UCP_PM_UNREAD'						=> 'Mensagens não lidas',
	'UCP_PM_VIEW'						=> 'Ver Mensagens',

	'UCP_PROFILE'						=> 'Perfil',
	'UCP_PROFILE_AVATAR'				=> 'O seu Avatar',
	'UCP_PROFILE_PROFILE_INFO'			=> 'O seu Perfil',
	'UCP_PROFILE_REG_DETAILS'			=> 'Detalhes do seu Registo',
	'UCP_PROFILE_SIGNATURE'				=> 'A sua assinatura',

	'UCP_USERGROUPS'					=> 'Grupos de Utilizadores',
	'UCP_USERGROUPS_MEMBER'				=> 'Utilizadores',
	'UCP_USERGROUPS_MANAGE'				=> 'Administrar Grupos',

	'UCP_REGISTER_DISABLE'				=> 'Não é possível criar novos Registos.',
	'UCP_REMIND'						=> 'Enviar Senha',
	'UCP_WELCOME'						=> 'Bem-vindo ao Painel de Controlo do Utilizador.<br /> Aqui pode ver e actualizar o seu Perfil, as suas Preferências, observar Fóruns e Tópicos.<br /> Pode enviar Mensagens a outros <b>Utilizadores</b> (<i>se permitido</i>). Verifique se leu todos os anúncios.',
	'UCP_RESEND'						=> 'Enviar email de Activação',
	'UCP_YIM'							=> 'Yahoo! Messenger',
	'UCP_ZEBRA'							=> 'Amigos e Inimigos',
	'UCP_ZEBRA_FOES'					=> 'Inimigos',
	'UCP_ZEBRA_FRIENDS'					=> 'Amigos',
	'UNKNOWN_FOLDER'					=> 'Pasta Desconhecida',
	'UNWATCH_MARKED'					=> 'Parar de observar marcados',
	'UPLOAD_AVATAR_FILE'				=> 'Enviar do seu Computador',
	'UPLOAD_AVATAR_URL'					=> 'Enviar de uma URL',
	'UPLOAD_AVATAR_URL_EXPLAIN'			=> 'Insira a URL da imagem que pretende usar no Fórum.',
	'USERNAME_ALPHA_ONLY_EXPLAIN'		=> 'O Nome de Utilizador deve ser constituído por %1$d a %2$d caracteres e usar somente caracteres alfanuméricos.',
	'USERNAME_ALPHA_SPACERS_EXPLAIN'	=> 'O Nome de Utilizador ddeve ser constituído por %1$d a %2$d caracteres e usar caracteres alfanuméricos, espaço ou -+_[].',
	'USERNAME_ASCII_EXPLAIN'			=> 'O Nome de Utilizador deve ser constituído por %1$d a %2$d caracteres e deve conter somente caracteres ASCII, sendo assim, sem símbolos especiais.',
	'USERNAME_LETTER_NUM_EXPLAIN'		=> 'O Nome de Utilizador deve ser constituído por %1$d a %2$d caracteres e deve conter somente letras ou números.',
	'USERNAME_LETTER_NUM_SPACERS_EXPLAIN'	=> 'O Nome de utilizador deve ser constituído por %1$d a %2$d caracteres e deve conter letras, números, espaço ou +-[].',
	'USERNAME_CHARS_ANY_EXPLAIN'		=> 'O Nome de Utilizador deve ser constituído por %1$d a %2$d caracteres.',
	'USERNAME_TAKEN_USERNAME'			=> 'O Nome de utilizador que escolheu já existe.',
	'USERNAME_DISALLOWED_USERNAME'		=> 'O Nome de utilizador que escolheu foi Proibido ou contém uma Palavra Censurada. Escolha um nome diferente.',
	'USER_NOT_FOUND_OR_INACTIVE'		=> 'O Nome de utilizador que escreveu não pode ser encontrado ou está inativo.',

	'VIEW_AVATARS'						=> 'Mostrar Avatares',
	'VIEW_EDIT'							=> 'Ver/Editar',
	'VIEW_FLASH'						=> 'Mostrar Animações em Flash',
	'VIEW_IMAGES'						=> 'Mostrar imagens nas Mensagens',
	'VIEW_NEXT_HISTORY'					=> 'Próxima MP no histórico',
	'VIEW_NEXT_PM'						=> 'Próxima MP',
	'VIEW_PM'							=> 'Ver Mensagem',
	'VIEW_PM_INFO'						=> 'Detalhes da Mensagem',
	'VIEW_PM_MESSAGE'					=> '1 Mensagem',
	'VIEW_PM_MESSAGES'					=> '%d Mensagens',
	'VIEW_PREVIOUS_HISTORY'				=> 'MP Anterior no histórico',
	'VIEW_PREVIOUS_PM'					=> 'MP Anterior',
	'VIEW_SIGS'							=> 'Mostrar Assinaturas',
	'VIEW_SMILIES'						=> 'Mostrar Smileys como Imagens',
	'VIEW_TOPICS_DAYS'					=> 'Mostrar Tópicos do dia anterior',
	'VIEW_TOPICS_DIR'					=> 'Mostrar Tópicos Ordenados por direção',
	'VIEW_TOPICS_KEY'					=> 'Mostrar Tópicos Ordenados por',
	'VIEW_POSTS_DAYS'					=> 'Mostrar Mensagens do dia anterior',
	'VIEW_POSTS_DIR'					=> 'Mostrar Mensagens Ordenados por direcção',
	'VIEW_POSTS_KEY'					=> 'Mostrar Mensagens Ordenadas por',

	'WATCHED_EXPLAIN'					=> 'Esta é a lista de Fóruns e Tópicos que está a observar.<br /> Será avisado de novas Mensagens em cada um deles.<br /> Para cancelar a observação, marque o Fórum ou Tópico e então pressione o botão <b>Parar de observar marcados</b>.',
	'WATCHED_FORUMS'					=> 'Fóruns observados',
	'WATCHED_TOPICS'					=> 'Tópicos observados',
	'WRONG_ACTIVATION'					=> 'O código de Activação que forneceu não confere com o Banco de Dados.',

	'YOUR_DETAILS'						=> 'A sua Actividade',
	'YOUR_FOES'							=> 'Os Seus Inimigos',
	'YOUR_FOES_EXPLAIN'					=> 'Para apagar Utilizadores, seleccione-os e o clique em enviar.',
	'YOUR_FRIENDS'						=> 'Os Seus Amigos',
	'YOUR_FRIENDS_EXPLAIN'				=> 'Para apagar os Utilizadores, seleccione-os e o clique em enviar.',
	'YOUR_WARNINGS'						=> 'Seu Nível de Advertência',

	'PM_ACTION'	=> array(
		'PLACE_INTO_FOLDER'				=> 'Lugar da Pasta',
		'MARK_AS_READ'					=> 'Marcar como Lidos',
		'MARK_AS_IMPORTANT'				=> 'Marcar a Mensagem',
		'DELETE_MESSAGE'				=> 'Apagar a Mensagem',
	),
	'PM_CHECK'							=> array(
		'SUBJECT'						=> 'Título',
		'SENDER'						=> 'De',
		'MESSAGE'						=> 'Mensagem',
		'STATUS'						=> 'Estado da Mensagem',
		'TO'							=> 'Para',
	),
	'PM_RULE'							=> array(
		'IS_LIKE'						=> 'Está como',
		'IS_NOT_LIKE'					=> 'Não está como',
		'IS'							=> 'é',
		'IS_NOT'						=> 'Não ',
		'BEGINS_WITH'					=> 'Inicia com',
		'ENDS_WITH'						=> 'Conclui com',
		'IS_FRIEND'						=> 'é Amigo',
		'IS_FOE'						=> 'é Inimigo',
		'IS_USER'						=> 'é Utilizador',
		'IS_GROUP'						=> 'Está no Grupo de Utilizadores',
		'ANSWERED'						=> 'Respondido',
		'FORWARDED'						=> 'Enviado',
		'REPORTED'						=> 'Denunciado',
		'TO_GROUP'						=> 'Grupo de Utilizadores',
		'TO_ME'							=> 'Para mim',
	),

	'GROUPS_EXPLAIN'					=> 'Os <b>Grupos de Utilizadores</b> permitem melhorar a Gestão dos membros do Fórum. Este é o seu <b>Grupo</b>. Define como os outros <b>Utilizadores</b> o vêem. Por exemplo, a cor do seu nome de Utilizador, Avatar, Rank, etc. Dependendo das Permisões defenidos peldo Administrador, poderá ou não, alterar o seu Grupo Padrão. Também poderá ser mudado de Grupo ou ser-lhe permitido juntar-se a outros Grupos. Alguns Grupos podem dar-lhe direitos adicionais, como por exemplo ver mais conteúdos.',
	'GROUP_LEADER'						=> 'Líderes',
	'GROUP_MEMBER'						=> 'Utilizadores',
	'GROUP_PENDING'						=> 'Utilizadores Pendentes',
	'GROUP_NONMEMBER'					=> 'Este Grupo não tem Utilizadores',
	'GROUP_DETAILS'						=> 'Informações do Grupo',

	'NO_LEADER'							=> 'Este Grupo não tem Lideres',
	'NO_MEMBER'							=> 'Este Grupo não tem Utilizadores',
	'NO_PENDING'						=> 'Este Grupo não tem Utilizadores Pendentes',
	'NO_NONMEMBER'						=> 'Nenhum Grupo de Visitantes',
));
?>