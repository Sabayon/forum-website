<?php
/**
*
* install [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.2
* @package language: Brazilian Portuguese
* @original version $Id: install.php,v 1.131 2007/11/18 11:48:18 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-19 - 14:28
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
	'ADMIN_CONFIG'				=> 'Configura&ccedil;&atilde;o do Administrador',
	'ADMIN_PASSWORD'			=> 'Senha do Administrador',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Confirme a Senha do Administrador',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Por favor, digite uma senha que tenha entre 6 e 30 caracteres.',
	'ADMIN_TEST'				=> 'Checar configura&ccedil;&otilde;es do administrador',
	'ADMIN_USERNAME'			=> 'Nome de Usu&aacute;rio do Administrador',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Por favor, digite um nome de usu&aacute;rio que tenha entre 3 e 20 caracteres.',
	'APP_MAGICK'				=> 'Suporte a ImageMagick [ Anexos ]',
	'AUTHOR_NOTES'				=> 'Notas do autor<br />» %s',
	'AVAILABLE'					=> 'Dispon&iacute;vel',
	'AVAILABLE_CONVERTORS'		=> 'Conversores dispon&iacute;veis',

	'BEGIN_CONVERT'				    => 'Come&ccedil;ar Convers&atilde;o',
	'BLANK_PREFIX_FOUND'		    => 'Uma varredura em seu banco de dados mostrou que h&aacute; uma instala&ccedil;&atilde;o v&aacute;lida sem prefixo na tabela.',
	'BOARD_NOT_INSTALLED'			=> 'Nenhuma instala&ccedil;&atilde;o encontrada',
	'BOARD_NOT_INSTALLED_EXPLAIN'	=> 'O Conversor Unificado de F&oacute;runs do phpBB exige uma instala&ccedil;&atilde;o padr&atilde;o do phpBB3 para funcionar, por favor <a href="%s">proceda primeiro instalando o phpBB3</a>.',

	'CATEGORY'					=> 'Categoria',
	'CACHE_STORE'				=> 'Tipo de cache',
	'CACHE_STORE_EXPLAIN'		=> 'O local onde os dados ser&atilde;o guardados, arquivos de sistema s&atilde;o recomendados.',
	'CAT_CONVERT'				=> 'Converter',
	'CAT_INSTALL'				=> 'Instalar',
	'CAT_OVERVIEW'				=> 'Avalia&ccedil;&atilde;o',
	'CAT_UPDATE'				=> 'Atualizar',
	'CHANGE'					=> 'Alterar',
	'CHECK_TABLE_PREFIX'		=> 'Por favor, verifique o prefixo de sua tabela e tente novamente.',
	'CLEAN_VERIFY'				=> 'Limpando e verificando a estrutura final',
	'CLEANING_USERNAMES'		=> 'Limpando nomes de usu&aacute;rio',
	'COLLIDING_CLEAN_USERNAME'	=> '<strong>%s</strong> &eacute; o nome de usu&aacute;rio a ser limpo para:',
	'COLLIDING_USERNAMES_FOUND'	=> 'Foram encontrados nomes de usu&aacute;rios coincidentes na sua antiga comunidade. Para completar a convers&atilde;o, por favor, apague ou renomeie estes usu&aacute;rios de forma que l&aacute; tenha apenas um usu&aacute;rio em seu antigo f&oacute;rum para cada nome de usu&aacute;rio limpo.',
	'COLLIDING_USER'			=> '» id de usu&aacute;rio: <strong>%d</strong> nome de usu&aacute;rio: <strong>%s</strong> (%d mensagens)',
	'CONFIG_CONVERT'			=> 'Convertendo a configura&ccedil;&atilde;o',
	'CONFIG_FILE_UNABLE_WRITE'	=> 'N&atilde;o foi poss&iacute;vel gravar o arquivo de configura&ccedil;&atilde;o. M&eacute;todos alternativos para este arquivo ser criado s&atilde;o apresentados abaixo.',
	'CONFIG_FILE_WRITTEN'		=> 'O arquivo de configura&ccedil;&atilde;o foi gravado. Voc&ecirc; pode passar agora para o pr&oacute;ximo passo da instala&ccedil;&atilde;o.',
	'CONFIG_PHPBB_EMPTY'		=> 'A vari&aacute;vel de configura&ccedil;&atilde;o do phpBB3 para “%s” est&aacute; vazia.',
	'CONFIG_RETRY'				=> 'Voltar',
	'CONTACT_EMAIL_CONFIRM'		=> 'Confirmar e-mail de contato',
	'CONTINUE_CONVERT'			=> 'Continuar convers&atilde;o',
	'CONTINUE_CONVERT_BODY'		=> 'Uma tentativa de convers&atilde;o anterior foi determinada. Voc&ecirc; pode agora escolher entre come&ccedil;ar uma convers&atilde;o nova ou continuar a convers&atilde;o.',
	'CONTINUE_LAST'				=> 'Continuar com as &uacute;ltimas declara&ccedil;&otilde;es',
	'CONTINUE_OLD_CONVERSION'	=> 'Continuar convers&atilde;o iniciada anteriormente',
	'CONVERT'					=> 'Converter',
	'CONVERT_COMPLETE'			=> 'Convers&atilde;o completada',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Voc&ecirc; converteu com sucesso o seu f&oacute;rum para phpBB3. Voc&ecirc; pode agora entrar e <a href="../">acessar seu f&oacute;rum</a>. Por favor, assegure-se que as configura&ccedil;&otilde;es foram transferidas corretamente antes de habilitar seu f&oacute;rum ao apagar o diret&oacute;rio install. E lembrando que o suporte para phpBB est&aacute; dispon&iacute;vel em <a href="http://www.phpbbrasil.com.br/">phpBB no Brasil</a>, tamb&eacute;m em <a href="http://www.phpbb.com/support/documentation/3.0/">Guia do Usu&aacute;rio (Ingl&ecirc;s)</a> e em <a href="http://www.phpbb.com/community/viewforum.php?f=46">f&oacute;runs de suporte</a>',
	'CONVERT_INTRO'				=> 'Boas Vindas ao Conversor Unificado do phpBB3',
	'CONVERT_INTRO_BODY'		=> 'Aqui, voc&ecirc; poder&aacute; converter e importar seu f&oacute;rum para o phpBB. A lista abaixo mostra todos os m&oacute;dulos de convers&atilde;o atualmente dispon&iacute;veis. Se o seu f&oacute;rum n&atilde;o esta na lista, por favor, v&aacute; ao website e verifique se o m&oacute;dulo de convers&atilde;o dele j&aacute; est&aacute; dispon&iacute;vel.',
	'CONVERT_NEW_CONVERSION'	=> 'Nova convers&atilde;o',
	'CONVERT_NOT_EXIST'			=> 'O conversor especificado n&atilde;o existe',
	'CONVERT_OPTIONS'			=> 'Op&ccedil;&otilde;es',
	'CONVERT_SETTINGS_VERIFIED'	=> 'A informa&ccedil;&atilde;o que voc&ecirc; entrou foi verificada. Para come&ccedil;ar o processo de Convers&atilde;o pressione o bot&atilde;o abaixo',
	'CONV_ERR_FATAL'			=> 'Erro fatal na convers&atilde;o',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'O upload de FTP para anexos est&aacute; habilitado no f&oacute;rum antigo. Por favor, desabilite a op&ccedil;&atilde;o de upload de FTP e tenha certeza que um diret&oacute;rio de upload v&aacute;lido esteja especificado, ent&atilde;o copie todos os arquivos de anexos para este novo diret&oacute;rio acess&iacute;vel. Uma vez que voc&ecirc; fez isto, reinicie o conversor.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'N&atilde;o h&aacute; nenhuma informa&ccedil;&atilde;o de configura&ccedil;&atilde;o dispon&iacute;vel para a convers&atilde;o.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'N&atilde;o foi poss&iacute;vel obter informa&ccedil;&otilde;es de acesso ao f&oacute;rum.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'N&atilde;o foi poss&iacute;vel obter as categorias.',
	'CONV_ERROR_GET_CONFIG'				=> 'N&atilde;o foi poss&iacute;vel restaurar sua configura&ccedil;&atilde;o do f&oacute;rum.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'N&atilde;o foi poss&iacute;vel acessar/ler “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'N&atilde;o foi poss&iacute;vel obter informa&ccedil;&otilde;es de autentica&ccedil;&atilde;o de grupo.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Encontrada inconsist&ecirc;ncia na tabela de grupos em add_bots() - voc&ecirc; precisa adicionar todos os grupos especiais que voc&ecirc; tiver manualmente.',
	'CONV_ERROR_INSERT_BOT'				=> 'N&atilde;o foi poss&iacute;vel inserir o bot na tabela users.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'N&atilde;o foi poss&iacute;vel inserir o bot na tabela bots.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'N&atilde;o foi poss&iacute;vel inserir o usu&aacute;rio na tabela user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Mensagem de parser error',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Nota ao desenvolvedor: voc&ecirc; tem que especificar $convertor[\'avatar_path\'] para usar %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'O caminho (path) para a raiz do f&oacute;rum n&atilde;o foi especificada.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Nota ao desenvolvedor: voc&ecirc; tem que especificar $convertor[\'avatar_gallery_path\'] para usar %s.',
	'CONV_ERROR_NO_GROUP'				=> 'O grupo “%1$s” n&atilde;o p&ocirc;de ser encontrado em %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Nota ao desenvolvedor: voc&ecirc; tem que especificar $convertor[\'ranks_path\'] para usar %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Nota ao desenvolvedor: voc&ecirc; tem que especificar $convertor[\'smilies_path\'] para usar %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Nota ao desenvolvedor: voc&ecirc; tem que especificar $convertor[\'upload_path\'] para usar %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'N&atilde;o foi poss&iacute;vel inserir/atualizar a configura&ccedil;&atilde;o de permiss&atilde;o.',
	'CONV_ERROR_PM_COUNT'				=> 'N&atilde;o foi poss&iacute;vel selecionar uma pasta de conta de MP.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'N&atilde;o foi poss&iacute;vel inserir um novo f&oacute;rum que substitui a categoria antiga.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'N&atilde;o foi poss&iacute;vel inserir um novo f&oacute;rum que substitui o antigo f&oacute;rum.',
	'CONV_ERROR_USER_ACCESS'			=> 'N&atilde;o foi poss&iacute;vel obter informa&ccedil;&otilde;es de autentica&ccedil;&atilde;o do usu&aacute;rio.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Erro no grupo “%1$s” definido em %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Esta p&aacute;gina coleta os dados necess&aacute;rios para se ter acesso &agrave; fonte do seu f&oacute;rum. Adicione os detalhes do banco de dados de seu f&oacute;rum anterior; o conversor n&atilde;o mudar&aacute; nada no banco de dados selecionado abaixo. A fonte do f&oacute;rum deveria ser desabilitada para permitir uma convers&atilde;o consistente.',
	'CONV_SAVED_MESSAGES'				=> 'Mensagens salvas',

	'COULD_NOT_COPY'			=> 'N&atilde;o foi poss&iacute;vel copiar o arquivo <strong>%1$s</strong> para <strong>%2$s</strong><br /><br />Por favor, verifique se o diret&oacute;rio existe e pode ser alterado pelo sistema',
	'COULD_NOT_FIND_PATH'		=> 'N&atilde;o foi poss&iacute;vel achar um patch para o f&oacute;rum. Por favor, cheque as configura&ccedil;&otilde;es e tente novamente.<br />» %s foi especificado como o caminho raiz.',

	'DBMS'						=> 'Tipo de banco de dados',
	'DB_CONFIG'					=> 'Configura&ccedil;&atilde;o do Banco de Dados',
	'DB_CONNECTION'				=> 'Conex&atilde;o de Banco de Dados',
	'DB_ERR_INSERT'				=> 'Erro enquanto processava a <code>INSERT</code> query',
	'DB_ERR_LAST'				=> 'Erro enquanto processava a <var>query_last</var>',
	'DB_ERR_QUERY_FIRST'		=> 'Erro enquanto executava <var>query_first</var>',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Erro enquanto executava <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Erro enquanto processava <code>SELECT</code> query.',
	'DB_HOST'					=> 'Nome do Servidor do Banco de Dados ou DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN para nome de fonte de Dados somente &eacute; necess&aacute;rio para instala&ccedil;&otilde;es em ODBC.',
	'DB_NAME'					=> 'Nome do Banco de Dados',
	'DB_PASSWORD'				=> 'Senha do Banco de Dados',
	'DB_PORT'					=> 'Porta do Servidor do Banco de Dados',
	'DB_PORT_EXPLAIN'			=> 'Deixe em branco caso voc&ecirc; n&atilde;o saiba se o Servidor de Banco de Dados tem uma porta especifica ou n&atilde;o.',
	'DB_USERNAME'				=> 'Nome de Usu&aacute;rio do Banco de Dados',
	'DB_TEST'					=> 'Testar conex&atilde;o',
	'DEFAULT_LANG'				=> 'Linguagem padr&atilde;o do f&oacute;rum',
	'DEFAULT_PREFIX_IS'			=> 'O conversor n&atilde;o p&ocirc;de encontrar as tabelas com o prefixo especificado. Por favor, tenha certeza que voc&ecirc; tem as antigas tabelas dentro do mesmo banco de dados da sua instala&ccedil;&atilde;o do phpBB 3.0.x. O prefixo padr&atilde;o da tabela para %1$s &eacute; <strong>%2$s</strong>',
	'DEV_NO_TEST_FILE'			=> 'Nenhum valor foi especificado para a vari&aacute;vel test_file no conversor. Se voc&ecirc; for um usu&aacute;rio deste conversor, voc&ecirc; n&atilde;o deveria estar vendo este erro, por favor, informe esta mensagem ao autor de conversor. Se voc&ecirc; for o autor do conversor, voc&ecirc; tem que especificar o nome de um arquivo que exista na raiz do f&oacute;rum para permitir que o path possa ser verificado.',
	'DIRECTORIES_AND_FILES'		=> 'Configura&ccedil;&atilde;o de arquivo e diret&oacute;rio',
	'DISABLE_KEYS'				=> 'Desativando chaves',
	'DLL_FIREBIRD'				=> 'Firebird',
	'DLL_FTP'					=> 'Suporte a FTP Remoto [ Instala&ccedil;&atilde;o ]',
	'DLL_GD'					=> 'Suporte a GD gr&aacute;fico [ Confirma&ccedil;&atilde;o Visual ]',
	'DLL_MBSTRING'				=> 'Suporte a caractere Multi-byte',
	'DLL_MSSQL'					=> 'MSSQL Server 2000+',
	'DLL_MSSQL_ODBC'			=> 'MSSQL Server 2000+ via ODBC',
	'DLL_MYSQL'					=> 'MySQL',
	'DLL_MYSQLI'				=> 'MySQL with MySQLi Extension',
	'DLL_ORACLE'				=> 'Oracle',
	'DLL_POSTGRES'				=> 'PostgreSQL 7.x/8.x',
	'DLL_SQLITE'				=> 'SQLite',
	'DLL_XML'					=> 'Suporte a XML [ Jabber ]',
	'DLL_ZLIB'					=> 'Suporte a compress&atilde;o zlib [ gz, .tar.gz, .zip ]',
	'DL_CONFIG'					=> 'Baixar config',
	'DL_CONFIG_EXPLAIN'			=> 'Voc&ecirc; pode baixar o arquivo config.php completo para o seu pr&oacute;prio PC. Voc&ecirc; precisar&aacute; ent&atilde;o enviar manualmente o arquivo, substituindo qualquer config.php existente no diret&oacute;rio raiz de seu phpBB 3.0. Por favor, lembre-se de enviar o arquivo em formato ASCII (veja a documenta&ccedil;&atilde;o do seu software de FTP se voc&ecirc; estiver em d&uacute;vida de como conseguir fazer isso). Quando voc&ecirc; tiver enviado o arquivo config.php, clique “Aqui” para ir para &agrave; pr&oacute;xima etapa.',
	'DL_DOWNLOAD'				=> 'Download',
	'DONE'						=> 'Pronto',

	'ENABLE_KEYS'				=> 'Re-habilitando chaves. Isto pode demorar um tempo',

	'FILES_OPTIONAL'			=> 'Arquivos e diret&oacute;rios adicionais',
	'FILES_OPTIONAL_EXPLAIN'	=> '<strong>Opcional</strong> - As configura&ccedil;&otilde;es destes arquivos, diret&oacute;rios e permiss&otilde;es n&atilde;o s&atilde;o obrigat&oacute;rias. O sistema de instala&ccedil;&atilde;o tentar&aacute; usar v&aacute;rias t&eacute;cnicas para cri&aacute;-los se eles n&atilde;o existirem ou n&atilde;o puderem ser gravados. Por&eacute;m, a presen&ccedil;a destes far&aacute; com que a instala&ccedil;&atilde;o fique mais r&aacute;pida.',
	'FILES_REQUIRED'			=> 'Arquivos e diret&oacute;rios',
	'FILES_REQUIRED_EXPLAIN'	=> '<strong>Obrigat&oacute;rio</strong> - Para funcionar corretamente, o phpBB precisa poder ter acesso ou estar apto a gravar certos arquivos ou diret&oacute;rios. Se voc&ecirc; vir &quot;N&atilde;o Encontrado&quot; voc&ecirc; precisa criar este arquivo relevante ou diret&oacute;rio. Se voc&ecirc; vir &quot;Grava&ccedil;&atilde;o N&atilde;o Permitida&quot; voc&ecirc; precisa mudar as permiss&otilde;es no arquivo ou diret&oacute;rio para permitir que o phpBB o grave.',
	'FILLING_TABLE'				=> 'Ocupar tabela <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Ocupar tabelas',
	'FINAL_STEP'				=> 'Processar passo final',
	'FORUM_ADDRESS'				=> 'Endere&ccedil;o do f&oacute;rum',
	'FORUM_ADDRESS_EXPLAIN'		=> 'Esta &eacute; a URL de seu f&oacute;rum anterior, por exemplo, <samp>http://www.example.com/phpBB2/</samp>. Se um endere&ccedil;o &eacute; digitado aqui e n&atilde;o estiver vazio, todo exemplo deste endere&ccedil;o ser&aacute; substitu&iacute;do por seu novo endere&ccedil;o de f&oacute;rum dentro de mensagens, mensagens privadas e assinaturas.',
	'FORUM_PATH'				=> 'Diret&oacute;rio do f&oacute;rum',
	'FORUM_PATH_EXPLAIN'		=> 'Este &eacute; o caminho <strong>relativo</strong> em disco para seu f&oacute;rum anterior da <strong>raiz desta instala&ccedil;&atilde;o do phpBB3</strong>',
	'FOUND'						=> 'Encontrado',
	'FTP_CONFIG'				=> 'Transferir config.php por FTP',
	'FTP_CONFIG_EXPLAIN'		=> 'phpBB detectou a presen&ccedil;a de FTP neste servidor. Voc&ecirc; pode tentar instalar seu config.php desta forma se voc&ecirc; desejar. Voc&ecirc; precisar&aacute; suprir a informa&ccedil;&atilde;o listada abaixo. Lembre-se do seu nome de usu&aacute;rio e senha do seu servidor! (pergunte a seu site por detalhes se voc&ecirc; tiver d&uacute;vidas sobre isto)',
	'FTP_PATH'					=> 'Diret&oacute;rio do FTP',
	'FTP_PATH_EXPLAIN'			=> 'Este &eacute; o path da raiz do seu diret&oacute;rio principal do phpBB, e.g. htdocs/phpBB3/',
	'FTP_UPLOAD'				=> 'Upload',

	'GPL'						=> 'General Public License',

	'INITIAL_CONFIG'			=> 'Configura&ccedil;&atilde;o b&aacute;sica',
	'INITIAL_CONFIG_EXPLAIN'	=> 'Agora que a instala&ccedil;&atilde;o determinou que seu servidor suporta o phpBB, voc&ecirc; precisa adicionar algumas informa&ccedil;&otilde;es espec&iacute;ficas. Se voc&ecirc; n&atilde;o sabe como conectar ao seu banco de dados fale com seu provedor de hospedagem (em primeiro lugar) ou use os f&oacute;runs de suporte ao phpBB. Quando for adicionar os dados, por favor, assegure-se que voc&ecirc; conferiu completamente antes de continuar.',
	'INSTALL_CONGRATS'			=> 'Parab&eacute;ns',
	'INSTALL_CONGRATS_EXPLAIN'	=> '
        <p>Voc&ecirc; instalou o phpBB %1$s com sucesso. A partir daqui, voc&ecirc; tem duas op&ccedil;&otilde;es sobre o que fazer com o seu phpBB3 recentemente instalado:</p>
        <h2>Converter um f&oacute;rum existente em phpBB3</h2>
        <p>O Conversor Unificado de F&oacute;runs do phpBB suporta a convers&atilde;o de f&oacute;runs phpBB 2.0.x e outros sistemas de f&oacute;runs para phpBB3. Se voc&ecirc; tem um f&oacute;rum existente que voc&ecirc; deseja converter, por favor, <a href="%2$s">proceda para o conversor</a>.</p>
        <h2>Ir para o seu novo f&oacute;rum phpBB3!</h2>
        <p>Clicando no bot&atilde;o abaixo, ele o levar&aacute; ao seu Painel de Controle da Administra&ccedil;&atilde;o (ACP). Gaste algum tempo para examinar as op&ccedil;&otilde;es dispon&iacute;veis para voc&ecirc;. Lembre-se que existe suporte on-line dispon&iacute;vel em <a href="http://www.phpbb.com/">phpBB no Brasil</a>, no <a href="http://www.phpbb.com/support/documentation/3.0/">Guia do Usu&aacute;rio (Ingl&ecirc;s)</a> e tamb&eacute;m nos <a href="http://www.phpbb.com/phpBB/viewforum.php?f=46">F&oacute;runs de suporte</a>, veja o <a href="%3$s">LEIA-ME</a> para maiores informa&ccedil;&otilde;es.</p><p><strong>Agora delete, mova ou renomeie o diret&oacute;rio install antes de voc&ecirc; acessar o seu f&oacute;rum. Se este diret&oacute;rio ainda est&aacute; presente, s&oacute; o Painel de Controle da Administra&ccedil;&atilde;o (ACP) ser&aacute; acess&iacute;vel.</strong></p>',
	'INSTALL_INTRO'				=> 'Bem Vindo &agrave; Instala&ccedil;&atilde;o',

	'INSTALL_INTRO_BODY'		=> 'Com esta op&ccedil;&atilde;o, &eacute; poss&iacute;vel instalar o phpBB3 no seu servidor.</p><p>Para prosseguir, voc&ecirc; precisar&aacute; de seus dados do banco de dados. Se voc&ecirc; n&atilde;o sabe os seus dados do banco de dados, por favor, contate o seu servidor e lhes pe&ccedil;a. Voc&ecirc; n&atilde;o poder&aacute; continuar sem adicionar os seus dados. Voc&ecirc; precisa:</p>

	<ul>
	    <li>Tipo de Banco de Dados - o banco de dados que voc&ecirc; estar&aacute; usando.</li>
     	<li>Nome do servidor do Banco de Dados ou DNS - o endere&ccedil;o do servidor do banco de dados.</li>
        <li>A porta do Banco de Dados - a porta do servidor de banco de dados (na maioria das vezes isto n&atilde;o &eacute; necess&aacute;rio).</li>
        <li>Nome do Banco de Dados - o nome do banco de dados no servidor.</li>
        <li>Nome de usu&aacute;rio e senha do Banco de Dados - os dados de login para ter acesso ao banco de dados</li>
    </ul>
    
	<p><strong>Nota:</strong> se voc&ecirc; est&aacute; instalando usando SQLite, voc&ecirc; deve informar o caminho completo para seu banco de dados no servidor DNS e deixar os campos de usu&aacute;rio e senha em branco. Por raz&otilde;es de seguran&ccedil;a, voc&ecirc; precisar&aacute; estar seguro de que n&atilde;o haja maneiras de acessar este banco de dados diretamente pelo endere&ccedil;o da internet.</p>

	<p>phpBB3 suporta os seguintes banco de dados:</p>
	<ul>
		<li>MySQL 3.23 ou superior (MySQLi suportado)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 ou superior (direto ou via ODBC)</li>
		<li>Oracle</li>
	</ul>

	<p>Somente os bancos de dados que seu servidor suporta ser&atilde;o apresentados.',
	'INSTALL_INTRO_NEXT'		=> 'Para come&ccedil;ar a instala&ccedil;&atilde;o, por favor, pressione o bot&atilde;o abaixo.',
	'INSTALL_LOGIN'				=> 'Entrar',
	'INSTALL_NEXT'				=> 'Pr&oacute;ximo',
	'INSTALL_NEXT_FAIL'			=> 'Alguns erros acorreram nos testes, corrija estes erros antes de ir para o pr&oacute;ximo passo. Erros podem resultar em uma instala&ccedil;&atilde;o parcial.',
	'INSTALL_NEXT_PASS'			=> 'Todos os testes b&aacute;sicos foram feitos, voc&ecirc; pode continuar com a instala&ccedil;&atilde;o agora. Se voc&ecirc; mudou alguma permiss&atilde;o ou algum arquivo voc&ecirc; pode refazer o teste agora se desejar.',
	'INSTALL_PANEL'				=> 'Painel de Instala&ccedil;&atilde;o',
	'INSTALL_SEND_CONFIG'		=> 'Infelizmente o phpBB n&atilde;o p&ocirc;de editar as configura&ccedil;&otilde;es em config.php. Isto pode ser por que o arquivo n&atilde;o existe ou porque n&atilde;o pode ser editado. Um n&uacute;mero de op&ccedil;&otilde;es ser&atilde;o listadas abaixo para voc&ecirc; poder completar a instala&ccedil;&atilde;o do config.php.',
	'INSTALL_START'				=> 'Come&ccedil;ar a Instala&ccedil;&atilde;o',
	'INSTALL_TEST'				=> 'Testar novamente',
	'INST_ERR'					=> 'Erro da Instala&ccedil;&atilde;o',
	'INST_ERR_DB_CONNECT'		=> 'N&atilde;o foi poss&iacute;vel conectar-se ao Banco de Dados, veja o motivo na mensagem abaixo.',
	'INST_ERR_DB_FORUM_PATH'	=> 'Os arquivos do Banco de Dados est&atilde;o facilmente acess&iacute;veis. Voc&ecirc; deveria colocar estes arquivos em um lugar n&atilde;o acess&iacute;vel.',
	'INST_ERR_DB_NO_ERROR'		=> 'Sem mensagem de erro',
	'INST_ERR_DB_NO_MYSQLI'		=> 'A vers&atilde;o de MySQL instalada nesta m&aacute;quina &eacute; incompat&iacute;vel com as op&ccedil;&otilde;es de “MySQL e MySQLi Extension” que voc&ecirc; selecionou. Por favor, tente outra op&ccedil;&atilde;o ao inv&eacute;s de “MySQL”.',
	'INST_ERR_DB_NO_SQLITE'		=> 'A vers&atilde;o de SQLite extension que voc&ecirc; tem instalada &eacute; muito antiga, deve ser atualizada a pelo menos na vers&atilde;o 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'A vers&atilde;o do Oracle instalada nesta m&aacute;quina lhe exige que voc&ecirc; fixe o par&acirc;metro de <var>NLS_CHARACTERSET</var> para <var>UTF8</var>. Atualize sua instala&ccedil;&atilde;o para 9.2+ ou mude o par&acirc;metro.',
	'INST_ERR_DB_NO_FIREBIRD'	=> 'A vers&atilde;o do Firebird instalada nesta m&aacute;quina &eacute; anterior a 2.0, por favor, atualize para uma vers&atilde;o mais nova.',
	'INST_ERR_DB_NO_FIREBIRD_PS'=> 'O banco de dados que voc&ecirc; selecionou para o Firebird tem um tamanho de p&aacute;gina menor que 8192, deve ter pelo menos 8192.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'O banco de dados que voc&ecirc; selecionou n&atilde;o foi criado na codifica&ccedil;&atilde;o <var>UNICODE</var> ou <var>UTF8</var>. Tente instalar com um banco de dados com codifica&ccedil;&atilde;o <var>UNICODE</var> ou <var>UTF8</var>',
	'INST_ERR_DB_NO_NAME'		=> 'N&atilde;o foi especificado o Nome do Banco de Dados',
	'INST_ERR_EMAIL_INVALID'	=> 'O endere&ccedil;o de e-mail especificado &eacute; inv&aacute;lido',
	'INST_ERR_EMAIL_MISMATCH'	=> 'Os emails que voc&ecirc; digitou n&atilde;o confirmam.',
	'INST_ERR_FATAL'			=> 'Erro fatal na instala&ccedil;&atilde;o',
	'INST_ERR_FATAL_DB'			=> 'Um erro fatal e irrecuper&aacute;vel aconteceu no banco de dados. Isto pode ter ocorrido porque o usu&aacute;rio especificado n&atilde;o tem direitos apropriados para usar os comandos <code>CREATE TABLES</code> ou <code>INSERT</code> no banco de dados, etc. Mais informa&ccedil;&otilde;es podem ser conseguidas abaixo. Por favor, contate em primeiro lugar seu provedor de hospedagem ou os f&oacute;runs de suporte ao phpBB para uma ajuda adicional.',
	'INST_ERR_FTP_PATH'			=> 'N&atilde;o pode ser mudado para o diret&oacute;rio especificados, por favor, cheque o caminho.',
	'INST_ERR_FTP_LOGIN'		=> 'N&atilde;o p&ocirc;de conectar ao servidor FTP, cheque seu nome de usu&aacute;rio e sua senha',
	'INST_ERR_MISSING_DATA'		=> 'Voc&ecirc; deve preencher todos os campos.',
	'INST_ERR_NO_DB'			=> 'N&atilde;o pode carregar o modulo PHP do Banco de Dados selecionado',
	'INST_ERR_PASSWORD_MISMATCH'    => 'As senhas especificadas n&atilde;o combinam.',
	'INST_ERR_PASSWORD_TOO_LONG'    => 'A senha especificada &eacute; muito grande. O m&aacute;ximo permitido &eacute; 30 caracteres.',
	'INST_ERR_PASSWORD_TOO_SHORT'   => 'A senha especificada &eacute; muito pequena. O m&iacute;nimo permitido &eacute; 6 caracteres.',
	'INST_ERR_PREFIX'			=> 'Tabelas com o prefixo especificado j&aacute; existem, por favor, escolha outro prefixo.',
	'INST_ERR_PREFIX_INVALID'	=> 'O prefixo da tabela que voc&ecirc; especificou &eacute; inv&aacute;lido para seu banco de dados. Por favor, tente outro, removendo caracteres como o h&iacute;fen',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'O prefixo especificado para a tabela &eacute; muito grande. O m&aacute;ximo permitido &eacute; %d caracteres.',
	'INST_ERR_USER_TOO_LONG'	=> 'O nome de usu&aacute;rio especificado &eacute; muito grande. O m&aacute;ximo permitido &eacute; 20 caracteres.',
	'INST_ERR_USER_TOO_SHORT'	=> 'O nome de usu&aacute;rio especificado &eacute; muito pequeno. O m&iacute;nimo permitido &eacute; 3 caracteres.',
	'INVALID_PRIMARY_KEY'		=> 'Chave prim&aacute;ria inv&aacute;lida : %s',

	'LONG_SCRIPT_EXECUTION'		=> 'Por favor, note que isto pode demorar um tempo... Por favor, n&atilde;o pare o processo.',

	// mbstring
	'MBSTRING_CHECK'						=> 'checando extens&atilde;o <samp>mbstring</samp>',
	'MBSTRING_CHECK_EXPLAIN'				=> '<samp>mbstring</samp> &eacute; uma extens&atilde;o PHP que prov&ecirc; fun&ccedil;&otilde;es string multibyte. Certas caracter&iacute;sticas de mbstring n&atilde;o s&atilde;o compat&iacute;veis com o phpBB e devem ser desabilitadas.',
	'MBSTRING_FUNC_OVERLOAD'				=> 'Fun&ccedil;&atilde;o sobrecarregada',
	'MBSTRING_FUNC_OVERLOAD_EXPLAIN'		=> '<var>mbstring.func_overload</var> deve ser fixado em 0 ou 4',
	'MBSTRING_ENCODING_TRANSLATION'			=> 'Codifica&ccedil;&atilde;o de caracter transparente',
	'MBSTRING_ENCODING_TRANSLATION_EXPLAIN'	=> '<var>mbstring.encoding_translation</var> deve ser fixado em 0',
	'MBSTRING_HTTP_INPUT'					=> 'Entrada HTTP de convers&atilde;o de caracteres',
	'MBSTRING_HTTP_INPUT_EXPLAIN'			=> '<var>mbstring.http_input</var> deve ser fixado como <samp>omitir</samp>',
	'MBSTRING_HTTP_OUTPUT'					=> 'Sa&iacute;da HTTP de convers&atilde;o de caracteres',
	'MBSTRING_HTTP_OUTPUT_EXPLAIN'			=> '<var>mbstring.http_output</var> deve ser fixado como <samp>omitir</samp>',

	'MAKE_FOLDER_WRITABLE'		=> 'Por favor, tenha certeza que esta pasta existe e pode ser editada pelo sistema e tente novamente:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Por favor, tenha certeza que estas pastas existem e podem ser editadas pelo sistema e tente novamente:<br />»<strong>%s</strong>',
	
   // Mudan�as 3.0.5
  'MYSQL_SCHEMA_UPDATE_REQUIRED'	=> 'Seu banco de dados MySQL est&aacute; desatualizado. O phpBB detectou uma vers&atilde;o do MySQL 3.x/4.x, mas o servidor roda MySQL %2$s.<br /><strong>Antes de proceder com a atualiza&ccedil;&atilde;o, voc&ecirc; precisa atualizar o banco.</strong><br /><br />Por favor, v&aacute; at&eacute; o <a href="http://www.phpbb.com/kb/article/doesnt-have-a-default-value-errors/">artigo sobre como atualizar o MySQL</a>. Se voc&ecirc; encontrar problemas, basta pedir ajuda no <a href="http://www.phpbbrasil.com.br/phpBB/index.php">nosso suporte</a>.',
   // Mudan�as 3.0.5
   
	'NAMING_CONFLICT'			=> 'Conflito nos nomes: %s e %s s&atilde;o ambos aliases<br /><br />%s',
	'NEXT_STEP'					=> 'Prosseguir para o pr&oacute;ximo passo',
	'NOT_FOUND'					=> 'N&atilde;o encontrado',
	'NOT_UNDERSTAND'			=> 'N&atilde;o foi poss&iacute;vel entender %s #%d, tabela %s (“%s”)',
	'NO_CONVERTORS'				=> 'Nenhum conversor dispon&iacute;vel para uso',
	'NO_CONVERT_SPECIFIED'		=> 'Nenhum conversor especificado',
	'NO_LOCATION'				=> 'N&atilde;o foi poss&iacute;vel determinar a localiza&ccedil;&atilde;o. Se voc&ecirc; sabe que o Imagemagick est&aacute; instalado, voc&ecirc; pode especificar a localiza&ccedil;&atilde;o depois no seu Painel de Controle da Administra&ccedil;&atilde;o',
	'NO_TABLES_FOUND'			=> 'Nenhuma tabela encontrada.',

	'OVERVIEW_BODY'				=> 'Bem-vindo ao phpBB3!<br /><br />O phpBB™ &eacute; o sistema de f&oacute;runs open source (gratuito) mais usado no mundo. O phpBB3 &eacute; a vers&atilde;o mais recente e que vem sendo melhorada desde vers&otilde;es anteriores do script, que teve in&iacute;cio em 2000. Como seus predecessores, o phpBB3 &eacute; rico em funcionalidades, amig&aacute;vel e com uma equipe completa e pronta para te ajudar ao redor do mundo. O phpBB3 traz diversas melhorias em rela&ccedil;&atilde;o ao seu mais popular antecessor, o phpBB2, e adiciona caracter&iacute;sticas novas n&atilde;o presentes em vers&otilde;es anteriores. Esperamos que o mesmo supere suas expectativas.<br /><br />A instala&ccedil;&atilde;o ir&aacute; gui&aacute;-lo ao longo de todo o processo, atualizando seu f&oacute;rum de vers&otilde;es antigas para o novo phpBB3, bem como convertendo a partir de um sistema de f&oacute;runs diferente. Para mais informa&ccedil;&otilde;es, recomendamos a leitura do <a href="../docs/INSTALL.html">guia de instala&ccedil;&atilde;o</a>.<br /><br />Para ler a licen&ccedil;a do phpBB3 e aprender como obter suporte e faz&ecirc;-lo corretamente, basta selecionar as op&ccedil;&otilde;es correspondentes do menu ao lado. Para continuar, por favor, selecione a aba apropriada.',

	'PCRE_UTF_SUPPORT'				=> 'Suporte a PCRE UTF-8',
	'PCRE_UTF_SUPPORT_EXPLAIN'		=> 'O phpBB <strong>n&atilde;o ir&aacute;</strong> funcionar se sua instala&ccedil;&atilde;o do PHP n&atilde;o estiver compilada com suporte a extens&atilde;o PCRE UTF-8',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'Propriedades do PHP getimagesize() est&aacute; ativo',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> '<strong>Obrigat&oacute;rio</strong> - Em ordem para o phpBB funcionar corretamente, a fun&ccedil;&atilde;o getimagesize() precisa estar ativa.',
	'PHP_OPTIONAL_MODULE'			=> 'M&oacute;dulos opcionais',
	'PHP_OPTIONAL_MODULE_EXPLAIN'	=> '<strong>Opcional</strong> - Estes m&oacute;dulos ou aplica&ccedil;&otilde;es s&atilde;o opcionais. Por&eacute;m, se esiverem dispon&iacute;veis, eles habilitar&atilde;o caracter&iacute;sticas extras.',
	'PHP_SUPPORTED_DB'				=> 'Banco de dados suportados',
	'PHP_SUPPORTED_DB_EXPLAIN'		=> '<strong>Obrigat&oacute;rio</strong> - Voc&ecirc; tem que ter suporte a pelo menos um banco de dados compat&iacute;vel dentro do PHP. Se nenhum m&oacute;dulo de banco de dados &eacute; mostrado como dispon&iacute;vel, aconselhamos que voc&ecirc; entre em contato com o seu provedor de hospedagem ou dever&aacute; rever a documenta&ccedil;&atilde;o pertinente a instala&ccedil;&atilde;o do PHP.',
	'PHP_REGISTER_GLOBALS'			=> 'Configura&ccedil;&atilde;o <var>register_globals</var> do PHP est&aacute; desabilitada',
	'PHP_REGISTER_GLOBALS_EXPLAIN'	=> 'O phpBB ainda funcionar&aacute; sem esta configura&ccedil;&atilde;o habilitada, mas se poss&iacute;vel, &eacute; recomendado que register_globals esteja desabilitada na instala&ccedil;&atilde;o do seu PHP por raz&otilde;es de seguran&ccedil;a.',
	'PHP_SAFE_MODE'					=> 'Modo seguro',
	'PHP_SETTINGS'					=> 'Vers&atilde;o do PHP e configura&ccedil;&otilde;es',
	'PHP_SETTINGS_EXPLAIN'			=> '<strong>Obrigat&oacute;rio</strong> - Para instalar o phpBB &eacute; necess&aacute;rio ter pelo menos a vers&atilde;o 4.3.3 do PHP instalada. Se o <var>modo seguro</var> estiver sendo exibido abaixo, sua instala&ccedil;&atilde;o do PHP est&aacute; trabalhando naquele modo. Isto impor&aacute; limita&ccedil;&otilde;es na administra&ccedil;&atilde;o remota e em caracter&iacute;sticas semelhantes.',
	'PHP_URL_FOPEN_SUPPORT'			=> 'Propriedades do PHP <var>allow_url_fopen</var> est&aacute; ativado',
	'PHP_URL_FOPEN_SUPPORT_EXPLAIN'	=> '<strong>Opcional</strong> - Esta propriedade &eacute; opcional, entretanto certas fun&ccedil;&otilde;es do phpBB como avatares n&atilde;o ir&atilde;o funcionar corretamente sem esta propriedade.',
	'PHP_VERSION_REQD'				=> 'Vers&atilde;o do PHP >= 4.3.3',
	'POST_ID'						=> 'Poste ID',
	'PREFIX_FOUND'					=> 'Uma busca de suas tabelas mostrou uma instala&ccedil;&atilde;o v&aacute;lida que usa <strong>%s</strong> como prefixo de tabela.',
	'PREPROCESS_STEP'				=> 'Executando fun&ccedil;&otilde;es de processamento',
	'PRE_CONVERT_COMPLETE'			=> 'Todos os passos da pr&eacute;-convers&atilde;o foram completados com sucesso. Voc&ecirc; agora pode come&ccedil;ar com o atual processo de convers&atilde;o. Por favor, note que voc&ecirc; pode ter que fazer manualmente e ajustar v&aacute;rias coisas. Depois da convers&atilde;o, confira especialmente as permiss&otilde;es determinadas, reconstrua seu &iacute;ndice de busca que n&atilde;o &eacute; convertido e tamb&eacute;m crie arquivos seguros copiado corretamente, por exemplo, avatares e smilies.',
	'PROCESS_LAST'					=> 'Processando &uacute;ltimas declara&ccedil;&otilde;es',

	'REFRESH_PAGE'				=> 'Atualize a p&aacute;gina para continuar a convers&atilde;o',
	'REFRESH_PAGE_EXPLAIN'		=> 'Se estiver selecionado como Sim, o conversor atualizar&aacute; a p&aacute;gina para continuar a convers&atilde;o depois de ter terminado um passo. Se esta &eacute; sua primeira convers&atilde;o com a finalidade de testar e para determinar qualquer erro com anteced&ecirc;ncia, n&oacute;s sugerimos selecionar este op&ccedil;&atilde;o para N&atilde;o.',
	'REQUIREMENTS_TITLE'		=> 'Compatibilidade da instala&ccedil;&atilde;o',
	'REQUIREMENTS_EXPLAIN'		=> 'Antes de continuar com a instala&ccedil;&atilde;o completa, o phpBB ir&aacute; fazer alguns testes em sua configura&ccedil;&atilde;o de servidor e arquivos para assegurar que voc&ecirc; pode instalar e utilizar o phpBB. Por favor, assegure que voc&ecirc; leu completamente do princ&iacute;pio ao fim os resultados e n&atilde;o continuar at&eacute; que todos os testes exigidos sejam executados. Se voc&ecirc; desejar usar quaisquer das caracter&iacute;sticas que dependam dos testes opcionais, voc&ecirc; dever&aacute; assegurar que estes testes sejam executados tamb&eacute;m.',
	'RETRY_WRITE'				=> 'Salvar novamente as configura&ccedil;&otilde;es',
	'RETRY_WRITE_EXPLAIN'		=> 'Se voc&ecirc; desejar, voc&ecirc; pode alterar as permiss&otilde;es em config.php para permitir o phpBB de gravar isto. Se voc&ecirc; desejar fazer isso, voc&ecirc; pode clicar abaixo em Voltar para tentar novamente. Se lembre de alterar novamente as permiss&otilde;es em config.php para a situa&ccedil;&atilde;o anterior depois que o phpBB terminar a instala&ccedil;&atilde;o.',

	'SCRIPT_PATH'				=> 'Path do script',
	'SCRIPT_PATH_EXPLAIN'		=> 'O caminho onde o phpBB est&aacute; localizado, relativo ao nome de dom&iacute;nio, por exemplo <samp>/phpBB3</samp>',
	'SELECT_LANG'				=> 'Selecionar idioma',
	'SERVER_CONFIG'				=> 'Configura&ccedil;&atilde;o do servidor',
	'SEARCH_INDEX_UNCONVERTED'	=> '&Iacute;ndex da busca n&atilde;o pode ser convertido',
	'SEARCH_INDEX_UNCONVERTED_EXPLAIN'	=> 'Sua busca antiga n&atilde;o pode ser convertida. A busca ir&aacute; sempre retornar um valor vazio. Para criar uma nova busca, v&aacute; ao seu painel de administra&ccedil;&atilde;o, selecione Manuten&ccedil;&atilde;o e ent&atilde;o escolha Busca do submenu para gerar uma nova.',
	'SOFTWARE'					=> 'Software do f&oacute;rum',
	'SPECIFY_OPTIONS'			=> 'Especificar op&ccedil;&otilde;es de convers&atilde;o',
	'STAGE_ADMINISTRATOR'		=> 'Detalhes do Administrador',
	'STAGE_ADVANCED'			=> 'Configura&ccedil;&otilde;es Avan&ccedil;adas',
	'STAGE_ADVANCED_EXPLAIN'	=> 'As configura&ccedil;&otilde;es desta p&aacute;gina s&atilde;o necess&aacute;rias somente se voc&ecirc; necessita de alguma configura&ccedil;&atilde;o diferente do padr&atilde;o. Se voc&ecirc; n&atilde;o tem certeza, s&oacute; prossiga para a pr&oacute;xima p&aacute;gina, que estas configura&ccedil;&otilde;es poder&atilde;o ser alteradas posteriormente via Painel de Controle da Administra&ccedil;&atilde;o.',
	'STAGE_CONFIG_FILE'			=> 'Arquivo de Configura&ccedil;&atilde;o',
	'STAGE_CREATE_TABLE'		=> 'Criar Tabelas do Banco de Dados',
	'STAGE_CREATE_TABLE_EXPLAIN'	=> 'As tabelas iniciais utilizadas pelo phpBB 3.0 foram criadas e completadas com conte&uacute;do inicial do sistema. Prossiga para a pr&oacute;xima parte da instala&ccedil;&atilde;o para finalizar o procedimento de instala&ccedil;&atilde;o.',
	'STAGE_DATABASE'			=> 'Propriedades do Banco de Dados',
	'STAGE_FINAL'				=> 'Est&aacute;gio Final',
	'STAGE_INTRO'				=> 'Introdu&ccedil;&atilde;o',
	'STAGE_IN_PROGRESS'			=> 'Convers&atilde;o em progresso',
	'STAGE_REQUIREMENTS'		=> 'Requisitos',
	'STAGE_SETTINGS'			=> 'Propriedades',
	'STARTING_CONVERT'			=> 'Iniciar processo de convers&atilde;o',
	'STEP_PERCENT_COMPLETED'	=> 'Passo <strong>%d</strong> de <strong>%d</strong>',
	'SUB_INTRO'					=> 'Introdu&ccedil;&atilde;o',
	'SUB_LICENSE'				=> 'Licen&ccedil;a',
	'SUB_SUPPORT'				=> 'Suporte',
	'SUCCESSFUL_CONNECT'		=> 'Conex&atilde;o realizada com sucesso!',
	'SUPPORT_BODY'				=> 'Ser&aacute; prestado um suporte completo para o atual lan&ccedil;amento est&aacute;vel do phpBB3, gratuitamente. Isto inclui: </p><ul><li>Instala&ccedil;&atilde;o</li><li>Configura&ccedil;&atilde;o</li><li>Quest&otilde;es t&eacute;cnicas</li><li>Problemas relativos a potenciais bugs no software</li><li>Atualizando de vers&otilde;es Candidatas a Lan&ccedil;amento (RC) para a vers&atilde;o mais recente e est&aacute;vel</li><li>Convertendo de phpBB 2.0.x para phpBB3</li><li>Convertendo de outro software de f&oacute;runs de discuss&atilde;o para phpBB3 (por favor, veja o <a href="http://www.phpbb.com/community/viewforum.php?f=65">F&oacute;rum de Convers&otilde;es</a>)</li></ul><p>N&oacute;s recomendamos os usu&aacute;rios que ainda utilizam vers&otilde;es beta do phpBB3 para substituir a sua instala&ccedil;&atilde;o por uma nova c&oacute;pia da vers&atilde;o mais recente.</p><h2>MODs / Estilos</h2><p>Para assuntos relativos a MODs, por favor, crie uma mensagem dentro do <a href="http://www.phpbb.com/community/viewforum.php?f=81">F&oacute;rum de Modifica&ccedil;&otilde;es</a> apropriado.<br />Para assuntos relativo a estilos, templates e defini&ccedil;&otilde;es de imagens, por favor, crie uma mensagem dentro do <a href="http://www.phpbb.com/community/viewforum.php?f=80">F&oacute;rum de Estilos</a> apropriado.<br /><br />Se a sua pergunta se relacionar a um pacote espec&iacute;fico, por favor, envie uma mensagem diretamente ao t&oacute;pico dedicado a este pacote.</p><h2>Obtendo Suporte</h2><p><a href="http://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Bem-vindo ao sistema de f&oacute;runs phpBB</a><br /><a href="http://www.phpbb.com/support/">Se&ccedil;&atilde;o de Suporte</a><br /><a href="http://www.phpbb.com/support/documentation/3.0/quickstart/">Guia de In&iacute;cio R&aacute;pido</a><br /><br />Para certificar-se de que voc&ecirc; fique atualizado com as not&iacute;cias e lan&ccedil;amentos mais recentes, por que n&atilde;o <a href="http://www.phpbb.com/support/">se inscrever na nossa lista de correspond&ecirc;ncia</a>?<br /><br />',
	'SYNC_FORUMS'				=> 'Iniciando a sincroniza&ccedil;&atilde;o de f&oacute;runs',
	'SYNC_POST_COUNT'			=> 'Sincronizando post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Sincronizando post_counts de <var>entry</var> %1$s para %2$s.',
	'SYNC_TOPICS'				=> 'Iniciando a sincroniza&ccedil;&atilde;o de t&oacute;picos',
	'SYNC_TOPIC_ID'				=> 'Sincronizando t&oacute;picos de <var>topic_id</var> %1$s para %2$s',

	'TABLES_MISSING'			=> 'N&atilde;o foi poss&iacute;vel encontrar estas tabelas<br />» <strong>%s</strong>.',
	'TABLE_PREFIX'				=> 'Prefixo para as tabelas no banco de dados',
	'TABLE_PREFIX_SAME'			=> 'O prefixo das tabelas precisa ser o mesmo usado pelo software que est&aacute; sendo convertido.<br />» Foi especificado este prefixo %s',
	'TESTS_PASSED'				=> 'Os testes foram realizados com sucesso!',
	'TESTS_FAILED'				=> 'Os testes falharam!',

	'UNABLE_WRITE_LOCK'			=> 'Imposs&iacute;vel de escrever, arquivo bloqueado',
	'UNAVAILABLE'				=> 'Indispon&iacute;vel',
	'UNWRITABLE'				=> 'Grava&ccedil;&atilde;o N&atilde;o Permitida',
	'UPDATE_TOPICS_POSTED'		=> 'Gerando informa&ccedil;&otilde;es dos t&oacute;picos postados',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Um erro ocorreu enquanto gerava novos t&oacute;picos no momento de adicionar informa&ccedil;&atilde;o. Voc&ecirc; pode tentar novamente este passo no Painel de Administra&ccedil;&atilde;o ap&oacute;s o processo de convers&atilde;o ter sido completado.',
	'VERIFY_OPTIONS'			=> 'Verificando op&ccedil;&otilde;es de convers&atilde;o',
	'VERSION'					=> 'Vers&atilde;o',

	'WELCOME_INSTALL'			=> 'Boas vindas a Instala&ccedil;&atilde;o do phpBB3',
	'WRITABLE'					=> 'Grava&ccedil;&atilde;o Permitida',
));

// Updater
$lang = array_merge($lang, array(
	'ALL_FILES_UP_TO_DATE'		=> 'Todos os arquivos est&atilde;o em dia com a &uacute;ltima vers&atilde;o do phpBB. Voc&ecirc; deve agora <a href="../ucp.php?mode=login">entrar-se na comunidade</a> e verificar se ao todo ela est&aacute; trabalhando corretamente. N&atilde;o se esque&ccedil;a de excluir, renomear ou mover a pasta install da raiz no ftp!',
	'ARCHIVE_FILE'				=> 'Arquivo fonte com dados',

	'BACK'				=> 'Voltar',
	'BINARY_FILE'		=> 'Arquivo bin&aacute;rio',
	'BOT'				=> 'Espi&otilde;es/Rob&ocirc;s',

	'CHANGE_CLEAN_NAMES'			=> 'O m&eacute;todo usado para criar seguramente um nome de usu&aacute;rio n&atilde;o foi utilizado por m&uacute;ltiplos usu&aacute;rios foi alterado. H&aacute; alguns usu&aacute;rios que t&ecirc;m o mesmo nome quando comparado com o novo m&eacute;todo. Voc&ecirc; tem que apagar ou renomear estes usu&aacute;rios para ter certeza de que cada nome s&oacute; &eacute; utilizado por um usu&aacute;rio antes de voc&ecirc; prosseguir.',
	'CHECK_FILES'					=> 'Checar arquivos',
	'CHECK_FILES_AGAIN'				=> 'Checar arquivos novamente',
	'CHECK_FILES_EXPLAIN'			=> 'Com o pr&oacute;ximo passo, todos arquivos ser&atilde;o analisados, este processo poder&aacute; levar um certo tempo se feito pela primeira vez.',
	'CHECK_FILES_UP_TO_DATE'		=> 'De acordo com seu banco de dados sua vers&atilde;o est&aacute; atualizada. Voc&ecirc; deve agora proceder com a checagem dos arquivos para ter certeza que al&eacute;m do banco de dados seus arquivos est&atilde;o na &uacute;ltima vers&atilde;o tamb&eacute;m do phpBB.',
	'CHECK_UPDATE_DATABASE'			=> 'Continuar com a atualiza&ccedil;&atilde;o',
	'COLLECTED_INFORMATION'			=> 'Informa&ccedil;&otilde;es do arquivo',
	'COLLECTED_INFORMATION_EXPLAIN'	=> 'A lista abaixo demonstra informa&ccedil;&otilde;es sobre os arquivos necess&aacute;rios para atualizar. Favor leia a informa&ccedil;&atilde;o na frente de cada bloco para ter no&ccedil;&atilde;o de qual a fun&ccedil;&atilde;o de cada um e qual o correto para a sua atualiza&ccedil;&atilde;o.',
 	'COLLECTING_FILE_DIFFS'			=> 'Coletando diferen&ccedil;as de arquivo',
	'COMPLETE_LOGIN_TO_BOARD'		=> 'Voc&ecirc; deve agora <a href="../ucp.php?mode=login">entrar em sua comunidade</a> e verificar se est&aacute; correta e trabalhando. N&atilde;o se esque&ccedil;a de excluir, renomear ou mover a sua pasta install encontrada no FTP do diret&oacute;rio!',
	'CONTINUE_UPDATE_NOW'           => 'Continuar o processo de atualiza&ccedil;&atilde;o agora',	// Shown within the database update script at the end if called from the updater
	'CONTINUE_UPDATE'				=> 'Continuar atualiza&ccedil;&atilde;o agora',					// Shown after file upload to indicate the update process is not yet finished
	'CURRENT_FILE'					=> 'Iniciando do arquivo original atual',
	'CURRENT_VERSION'				=> 'Vers&atilde;o atual',

	'DATABASE_TYPE'						=> 'Tipo do banco de dados',
	'DATABASE_UPDATE_INFO_OLD'			=> 'O arquivo de atualiza&ccedil;&atilde;o do banco de dados est&aacute; desatualizado. Verifique se foi feito o upload da vers&atilde;o mais recente corretamente!',
	'DELETE_USER_REMOVE'				=> 'Apagar usu&aacute;rio e remover mensagens',
	'DELETE_USER_RETAIN'				=> 'Apagar usu&aacute;rio, mas mantenha as mensagens',
	'DESTINATION'						=> 'Arquivo de destino',
	'DIFF_INLINE'						=> 'Na linha',
	'DIFF_RAW'							=> 'Raw diff unificada',
	'DIFF_SEP_EXPLAIN'					=> 'Fim do arquivo original atual / Iniciando um novo arquivo atualizado',
	'DIFF_SIDE_BY_SIDE'					=> 'Lado a Lado',
	'DIFF_UNIFIED'						=> 'Diff unificada',
	'DO_NOT_UPDATE'						=> 'N&atilde;o atualizar este arquivo',
	'DONE'								=> 'Feito',
	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_AS'						=> 'Download como',
	'DOWNLOAD_UPDATE_METHOD_BUTTON'		=> 'Baixar arquivos modificados (recomendado)',
	// Mudan�as 3.0.5
  'DOWNLOAD_CONFLICTS'				=> 'Mostrar conflitos deste arquivo',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Procurar por &lt;&lt;&lt; para local do conflito',
	// Mudan�as 3.0.5
  'DOWNLOAD_UPDATE_METHOD'			=> 'Baixar arquivos modificados',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Uma vez feito o download, voc&ecirc; dever&aacute; descompactar o arquivo(s). Voc&ecirc; ir&aacute; encontrar os arquivos modificados para fazer upload na raiz do seu phpBB no diret&oacute;rio com o mesmo. Favor fazer o envio destes arquivos para suas respectivas pastas. Depois que Voc&ecirc; enviou os arquivos, novamente verifique os arquivos com o outro bot&atilde;o abaixo.',

	'ERROR'		    => 'Erro',
	'EDIT_USERNAME'	=> 'Editar nome de usu&aacute;rio',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Arquivo j&aacute; est&aacute; atualizado',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Arquivo n&atilde;o permite ser mudado',
	'FILE_USED'						=> 'Informa&ccedil;&atilde;o usada de',			// Single file
	'FILES_CONFLICT'				=> 'Conflito entre arquivos',
	'FILES_CONFLICT_EXPLAIN'		=> 'Os seguintes arquivos s&atilde;o modificados e n&atilde;o representam os arquivos originais das antigas vers&otilde;es. phpBB determinou que estes arquivos criam conflitos se eles tentam unificar-se. Investigue os problemas e tente manualmente resolver o problema ou continue a atualiza&ccedil;&atilde;o escolhendo outro m&eacute;todo de unifica&ccedil;&atilde;o. Se voc&ecirc; resolveu os conflitos manualmente, verifique os arquivos novamente depois de t&ecirc;-los modificado. Voc&ecirc; tamb&eacute;m tem a escolha entre seu m&eacute;todo de uni&atilde;o preferido e o m&eacute;todo para todo arquivo. O primeiro ir&aacute; resultar em um arquivo onde as linhas de conflito ser&atilde;o apagadas, o outro ir&aacute; resultar na perda dos arquivos novos.',
	'FILES_MODIFIED'				=> 'Arquivos modificados',
	'FILES_MODIFIED_EXPLAIN'		=> 'Os seguintes arquivos est&atilde;o modificados e n&atilde;o representam os arquivos originais da vers&atilde;o passada. O arquivo atualizado &eacute; uma uni&atilde;o entre estes dois arquivos, o velho com o novo.',
	'FILES_NEW'						=> 'Novos arquivos',
	'FILES_NEW_EXPLAIN'				=> 'Os seguintes arquivos n&atilde;o existem atualmente em sua instala&ccedil;&atilde;o. Estes arquivos ser&atilde;o acrescentados na sua instala&ccedil;&atilde;o.',
	'FILES_NEW_CONFLICT'			=> 'Novos arquivos em conflito',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Os seguintes arquivos est&atilde;o na nova vers&atilde;o, por&eacute;m foi determinando anteriormente a cria&ccedil;&atilde;o destes arquivos com o mesmo nome e posi&ccedil;&atilde;o. Este arquivo ser&aacute; sobre-escrito pelo novo arquivo.',
	'FILES_NOT_MODIFIED'			=> 'Arquivos sem modifica&ccedil;&atilde;o',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Os seguintes arquivos n&atilde;o s&atilde;o modificados e representam os arquivos originais do phpBB da vers&atilde;o para a qual voc&ecirc; quer atualizar.',
	'FILES_UP_TO_DATE'				=> 'Arquivos j&aacute; atualizados',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Os seguintes arquivos j&aacute; est&atilde;o atualizados e n&atilde;o precisam ser atualizados.',
	'FTP_SETTINGS'					=> 'Propriedades do FTP',
	'FTP_UPDATE_METHOD'				=> 'FTP envio',

	'INCOMPATIBLE_UPDATE_FILES'		=> 'Os arquivos atualizados encontrados s&atilde;o incompat&iacute;veis com sua vers&atilde;o instalada. Sua vers&atilde;o &eacute; %1$s e o arquivo de atualiza&ccedil;&atilde;o &eacute; do phpBB %2$s para %3$s.',
	'INCOMPLETE_UPDATE_FILES'		=> 'Os arquivos de atualiza&ccedil;&atilde;o est&atilde;o incompletos',
	'INLINE_UPDATE_SUCCESSFUL'		=> 'A atualiza&ccedil;&atilde;o do banco de dados foi realizado com sucesso. Agora voc&ecirc; precisa continuar com o processo de atualiza&ccedil;&atilde;o.',

	'KEEP_OLD_NAME'		=> 'Manter nome de usu&aacute;rio',

	'LATEST_VERSION'		=> '&Uacute;ltima vers&atilde;o',
	'LINE'					=> 'Linha',
	'LINE_ADDED'			=> 'Adicionado',
	'LINE_MODIFIED'			=> 'Modificado',
	'LINE_REMOVED'			=> 'Removido',
	'LINE_UNMODIFIED'		=> 'Sem modifica&ccedil;&atilde;o',
	'LOGIN_UPDATE_EXPLAIN'	=> 'Em ordem de atualizar sua instala&ccedil;&atilde;o, Voc&ecirc; precisar&aacute; entrar-se primeiramente.',

	'MAPPING_FILE_STRUCTURE'	=> 'Para usar o envio de arquivos daqui, basta mapear a localiza&ccedil;&atilde;o dos arquivos de instala&ccedil;&atilde;o.',

	'MERGE_MODIFICATIONS_OPTION'	=> 'Unir modifica&ccedil;&otilde;es',

	'MERGE_NO_MERGE_NEW_OPTION'	=> 'N&atilde;o unir - use um novo arquivo',
	'MERGE_NO_MERGE_MOD_OPTION'	=> 'N&atilde;o unir - use o arquivo atualmente instalado',
	'MERGE_MOD_FILE_OPTION'		=> 'Unifique as diferen&ccedil;as e utilize o c&oacute;digo modificado para os blocos de erros',
	'MERGE_NEW_FILE_OPTION'		=> 'Unifique diferentes e use de novos arquivos para o conflito entre c&oacute;digos',
	'MERGE_SELECT_ERROR'		=> 'Modos de unir arquivos n&atilde;o est&atilde;o selecionados corretamente.',
	'MERGING_FILES'				=> 'Unindo diferen&ccedil;as',
	'MERGING_FILES_EXPLAIN'		=> 'Coletando atualmente as altera&ccedil;&otilde;es finais de arquivo.<br /><br />Por favor, espere at&eacute; que o phpBB complete todas as opera&ccedil;&otilde;es nos arquivos alterados.',

	'NEW_FILE'						=> 'Fim de novo arquivo atualizado',
	'NEW_USERNAME'					=> 'Novo nome de usu&aacute;rio',
	'NO_AUTH_UPDATE'				=> 'Sem autoriza&ccedil;&atilde;o para atualizar',
	'NO_ERRORS'						=> 'Nenhum erro',
	'NO_UPDATE_FILES'				=> 'N&atilde;o est&aacute; atualizando os seguintes arquivos',
	'NO_UPDATE_FILES_EXPLAIN'		=> 'Os seguintes arquivos s&atilde;o novos ou modificados, mas o diret&oacute;rio em que est&atilde;o n&atilde;o foi encontrado em sua instala&ccedil;&atilde;o. Se esta lista contiver arquivos de outros diret&oacute;rios que n&atilde;o sejam language/ ou styles/ voc&ecirc; pode ter modificado a estrutura do diret&oacute;rio e o update pode estar incompleto.',
	'NO_UPDATE_FILES_OUTDATED'		=> 'Nenhuma pasta de atualiza&ccedil;&atilde;o encontrada. Por favor, tenha certeza que voc&ecirc; enviou os arquivos corretamente para o FTP.<br /><br />Sua instala&ccedil;&atilde;o <strong>N&Atilde;O</strong> parece estar atualizada. Atualiza&ccedil;&otilde;es est&atilde;o dispon&iacute;veis para sua vers&atilde;o do phpBB %1$s, no site oficial <a href="http://www.phpbb.com/downloads.php" rel="external">http://www.phpbb.com/downloads.php</a>. Obtenha a vers&atilde;o correta para atualizar sua Vers&atilde;o %2$s para Vers&atilde;o %3$s.',
	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Sua vers&atilde;o est&aacute; em dia com as atualiza&ccedil;&otilde;es. N&atilde;o &eacute; necess&aacute;rio rodar nenhuma ferramenta de Atualiza&ccedil;&atilde;o. Se voc&ecirc; deseja fazer uma an&aacute;lise de Integridade de Arquivos, tenha certeza de quem enviou os arquivos de atualiza&ccedil;&atilde;o corretamente.',
	'NO_UPDATE_INFO'				=> 'Arquivo de atualiza&ccedil;&atilde;o n&atilde;o foi encontrado.',
	'NO_UPDATES_REQUIRED'			=> 'Nenhuma atualiza&ccedil;&atilde;o requerida',
	'NO_VISIBLE_CHANGES'			=> 'Nenhuma altera&ccedil;&atilde;o vis&iacute;vel',
	'NOTICE'						=> 'Notificar',
	'NUM_CONFLICTS'					=> 'N&uacute;mero de Conflitos',
	'NUMBER_OF_FILES_COLLECTED'		=> 'Temos atualmente diferen&ccedil;as sobre %1$d de %2$d arquivos coletados.<br />Por favor, espere at� que a coleta de arquivos termine.',

	'OLD_UPDATE_FILES'		=> 'Os arquivos de atualiza&ccedil;&atilde;o est&atilde;o desatualizados. Os arquivos encontrados s&atilde;o para atualizar a vers&atilde;o %1$s para %2$s, mas a vers&atilde;o mais atual do phpBB &eacute; %3$s.',

	'PACKAGE_UPDATES_TO'				=> 'Pacote atual atualizado para a vers&atilde;o',
	'PERFORM_DATABASE_UPDATE'			=> 'Executar Atualiza&ccedil;&atilde;o de Banco de Dados',
	'PERFORM_DATABASE_UPDATE_EXPLAIN'	=> 'Abaixo voc&ecirc; encontra um bot&atilde;o para um script de atualiza&ccedil;&atilde;o do banco de dados. A atualiza&ccedil;&atilde;o do banco de dados pode demorar algum tempo, portanto n&atilde;o cancele a atualiza&ccedil;&atilde;o mesmo parecendo lenta. Depois que a atualiza&ccedil;&atilde;o do banco de dados for executada, siga as instru&ccedil;&otilde;es para continuar com o processo de atualiza&ccedil;&atilde;o.',
	'PREVIOUS_VERSION'					=> 'Vers&atilde;o Anterior',
	'PROGRESS'							=> 'Progresso',

	'RESULT'					=> 'Resultados',
	'RUN_DATABASE_SCRIPT'		=> 'Atualizar meu Banco de Dados agora',

	'SELECT_DIFF_MODE'			=> 'Selecionar modo diff ',
	'SELECT_DOWNLOAD_FORMAT'	=> 'Selecionar formato de arquivo de download',
	'SELECT_FTP_SETTINGS'		=> 'Selecionar configura&ccedil;&otilde;es de FTP',
	'SHOW_DIFF_CONFLICT'		=> 'Mostrar diferen&ccedil;as/conflitos',
	'SHOW_DIFF_FINAL'			=> 'Mostrar resultados',
	'SHOW_DIFF_MODIFIED'		=> 'Mostrar diferen&ccedil;as mescladas',
	'SHOW_DIFF_NEW'				=> 'Mostrar conte&uacute;do do arquivo',
	'SHOW_DIFF_NEW_CONFLICT'	=> 'Mostrar diferen&ccedil;as',
	'SHOW_DIFF_NOT_MODIFIED'	=> 'Mostrar diferen&ccedil;as de modifica&ccedil;&atilde;o',
	'SOME_QUERIES_FAILED'		=> 'Algumas solicita&ccedil;&otilde;es falharam. Os erros est&atilde;o listados abaixo.',
	'SQL'						=> 'SQL',
	'SQL_FAILURE_EXPLAIN'		=> 'Provavelmente isto n&atilde;o &eacute; para se preocupar, atualiza&ccedil;&atilde;o continuar&aacute;. Se no final da instala&ccedil;&atilde;o este erro persistir, entre em contato com o seu suporte para esclarecimentos e ajuda. Veja <a href="../docs/README.html">o arquivo de Ajuda</a> para maiores detalhes de como obter ajuda.',
	'STAGE_FILE_CHECK'			=> 'Conferir arquivos',
	'STAGE_UPDATE_DB'			=> 'Atualizar Banco de Dados',
	'STAGE_UPDATE_FILES'		=> 'Atualizar arquivos',
	'STAGE_VERSION_CHECK'		=> 'Verificar vers&atilde;o',
	'STATUS_CONFLICT'			=> 'Arquivos modificados que est&atilde;o produzindo conflitos',
	'STATUS_MODIFIED'			=> 'Arquivo modificado',
	'STATUS_NEW'				=> 'Novo arquivo',
	'STATUS_NEW_CONFLICT'		=> 'Novo arquivo com conflito',
	'STATUS_NOT_MODIFIED'		=> 'Arquivo n&atilde;o modificado',
	'STATUS_UP_TO_DATE'			=> 'Arquivo j&aacute; atualizado',

	'TOGGLE_DISPLAY'			=> 'Ver/Esconder lista de arquivos',
	'TRY_DOWNLOAD_METHOD'		=> 'Voc&ecirc; pode querer experimentar o m&eacute;todo de baixar arquivos modificados. &lt;br /&gt; Este m&eacute;todo sempre funciona e &eacute; tamb&eacute;m o modo recomendado atualizar.',
	'TRY_DOWNLOAD_METHOD_BUTTON'=> 'Agora tente este m�todo.',


	'UPDATE_COMPLETED'				=> 'Atualiza&ccedil;&atilde;o Completada',
	'UPDATE_DATABASE'				=> 'Atualizar Banco de Dados',
	'UPDATE_DATABASE_EXPLAIN'		=> 'Na pr&oacute;xima etapa, o banco de dados ser&aacute; atualizado.',
	'UPDATE_DATABASE_SCHEMA'		=> 'Esquema de Banco de Dados atualizado',
	'UPDATE_FILES'					=> 'Arquivos atualizados',
	'UPDATE_FILES_NOTICE'			=> 'Por favor, tenha certeza de ter atualizado os arquivos de seu f&oacute;rum tamb&eacute;m, pois este arquivo s&oacute; atualiza seu banco de dados.',
	'UPDATE_INSTALLATION'			=> 'Atualizando a instala&ccedil;&atilde;o do phpBB',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'Com esta op&ccedil;&atilde;o, &eacute; poss&iacute;vel atualizar sua instala&ccedil;&atilde;o do phpBB para sua &uacute;ltima vers&atilde;o.<br /> Durante o processo, todos os arquivos passar&atilde;o por uma an&aacute;lise de integridade. Voc&ecirc; ter&aacute; a chance de conferir todas as atualiza&ccedil;&otilde;es dos arquivos, suas modifica&ccedil;&otilde;es e poss&iacute;veis erros antes de atualizar o sistema.<br/><br/> A atualiza&ccedil;&atilde;o pode ser feita de duas maneiras.</p><h2>Atualiza&ccedil;&atilde;o Manual</h2><p>Com esta atualiza&ccedil;&atilde;o, voc&ecirc; ir&aacute; atualizar somente suas altera&ccedil;&otilde;es para voc&ecirc; ter certeza do que voc&ecirc; alterou. Ap&oacute;s voc&ecirc; ter baixado o pacote, voc&ecirc; precisar&aacute; inserir os arquivos em seus respectivos diret&oacute;rios. Uma vez efetuado este passo, voc&ecirc; estar&aacute; pronto para iniciar a verifica&ccedil;&atilde;o de integridade, para conferir se os arquivos est&atilde;o em seus locais corretos.</p><h2>Atualiza&ccedil;&atilde;o Autom&aacute;tica via FTP</h2><p>Este m&eacute;todo &eacute; similar ao primeiro, mas voc&ecirc; n&atilde;o precisar&aacute; baixar os arquivos e reenvi&aacute;-los via FTP para seus lugares. O sistema far&aacute; tudo por voc&ecirc;, basta declarar os seus dados de FTP, e assim que os arquivos forem enviados, voc&ecirc; ser&aacute; redirecionado para a verifica&ccedil;&atilde;o da integridade dos arquivos, se tudo foi enviado e atualizado corretamente.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>An&uacute;ncio de Lan&ccedil;amento</h1>

		<p>Por favor, leia <a href="%1$s" title="%1$s"><strong>este an&uacute;ncio de lan&ccedil;amento para a &uacute;ltima vers&atilde;o</strong></a> antes de continuar com sua atualiza&ccedil;&atilde;o, pois cont&eacute;m informa&ccedil;&otilde;es &uacute;teis. Cont&eacute;m tamb&eacute;m todos os links para download do sistema assim como os logs de altera&ccedil;&otilde;es.</p>

		<br />

		<h1>Como atualizar sua instala&ccedil;&atilde;o com o Pacote de Atualiza&ccedil;&atilde;o Autom&aacute;tico</h1>

		<p>O modo recomendado de atualizar a sua instala&ccedil;&atilde;o listada aqui s&oacute; &eacute; v&aacute;lido para o pacote de atualiza&ccedil;&atilde;o autom&aacute;tico. Voc&ecirc; tamb&eacute;m pode atualizar sua instala&ccedil;&atilde;o usando os m&eacute;todos listados dentro do documento INSTALL.html. Os passos para atualizar o phpBB3 automaticamente s&atilde;o:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>V&aacute; para <a href="http://www.phpbb.com/downloads/" title="http://www.phpbb.com/downloads/">a p&aacute;gina de downloads do phpBB.com</a> e fa&ccedil;a o download do arquivo "Pacote de Atualiza&ccedil;&atilde;o Autom&aacute;tica".<br /><br /></li>
			<li>Descompacte o arquivo.<br /><br /></li>
			<li>Envie a pasta install descompactada para seu diret&oacute;rio principal do phpBB (onde fica o arquivo config.php).<br /><br /></li>
		</ul>

		<p>Uma vez enviada a pasta, seu f&oacute;rum ficar&aacute; em estado de offline para usu&aacute;rios normais, at&eacute; que se efetue a instala&ccedil;&atilde;o ou atualiza&ccedil;&atilde;o e a pasta install seja deletada.<br /><br />
		<strong><a href="%2$s" title="%2$s">Agora inicie sua instala&ccedil;&atilde;o ou atualiza&ccedil;&atilde;o apontando no navegador a pasta install</a>.</strong><br />
		<br />
        Voc&ecirc; ser&aacute; guiado pelo processo de  atualiza&ccedil;&atilde;o. Uma notifica&ccedil;&atilde;o ser&aacute; feita a voc&ecirc; uma vez que a atualiza&ccedil;&atilde;o estiver conclu&iacute;da.
		</p>
	',
	'UPDATE_INSTRUCTIONS_INCOMPLETE'	=> '

		<h1>Uma atualiza&ccedil;&atilde;o incompleta foi detectada</h1>

		<p>O phpBB detectou uma atualiza&ccedil;&atilde;o autom&aacute;tica incompleta. Favor, tenha certeza que voc&ecirc; seguiu todos os passos dentro da ferramenta de atualiza&ccedil;&atilde;o autom&aacute;tica. Abaixo, voc&ecirc; encontrar&aacute; o link novamente, ou v&aacute; diretamente para o seu diret&oacute;rio install.</p>
	',
	'UPDATE_METHOD'					=> 'M&eacute;todo de Atualiza&ccedil;&atilde;o',
	'UPDATE_METHOD_EXPLAIN'			=> 'Voc&ecirc; pode agora escolher como quer proceder sua atualiza&ccedil;&atilde;o. Usando o m&eacute;todo autom&aacute;tico, ser&aacute; solicitado seu login e senha do FTP. Desta maneira, seus arquivos ser&atilde;o movidos e os antigos ser&atilde;o salvos como backup com extens&atilde;o .bak. Se voc&ecirc; escolher o m&eacute;todo de envio manual, descompacte o pacote em seu computador e envie os arquivos manualmente depois.',
	'UPDATE_REQUIRES_FILE'			=> 'O atualizador requer que o seguinte arquivo esteja presente: %s',
	'UPDATE_SUCCESS'				=> 'Atualiza&ccedil;&atilde;o efetuada com sucesso',
	'UPDATE_SUCCESS_EXPLAIN'		=> 'Arquivos atualizados com sucesso. O pr&oacute;ximo passo envolve a verifica&ccedil;&atilde;o de todos os arquivos novamente para conferir se os arquivos foram enviados corretamente.',
	'UPDATE_VERSION_OPTIMIZE'		=> 'Atualizando vers&atilde;o e otimizando tabelas',
	'UPDATING_DATA'					=> 'Atualizando dados',
	'UPDATING_TO_LATEST_STABLE'		=> 'Atualizando banco de dados para a vers&atilde;o lan&ccedil;ada mais est&aacute;vel',
	'UPDATED_VERSION'				=> 'Vers&atilde;o atualizada',
	'UPLOAD_METHOD'					=> 'M&eacute;todo de envio',

	'UPDATE_DB_SUCCESS'				=> 'Banco de dados atualizado com sucesso',
	'USER_ACTIVE'					=> 'Usu&aacute;rio ativo',
	'USER_INACTIVE'					=> 'Usu&aacute;rio inativo',

	'VERSION_CHECK'				=> 'Verificar vers&atilde;o',
	'VERSION_CHECK_EXPLAIN'		=> 'Confira se a sua vers&atilde;o do phpBB est&aacute; atualizada.',
	'VERSION_NOT_UP_TO_DATE'	=> 'Sua vers&atilde;o do phpBB n&atilde;o est&aacute; atualizada. Continue com o processo de atualiza&ccedil;&atilde;o.',
	'VERSION_NOT_UP_TO_DATE_ACP'=> 'Sua vers&atilde;o do phpBB n&atilde;o est&aacute; atualizada.<br />Abaixo voc&ecirc; encontra um link para os lan&ccedil;amentos atualizados, assim como instru&ccedil;&otilde;es para efetuar sua atualiza&ccedil;&atilde;o.',
	'VERSION_UP_TO_DATE'		=> 'Sua instala&ccedil;&atilde;o est&aacute; atualizada. Nenhuma atualiza&ccedil;&atilde;o &eacute; requerida no momento. Voc&ecirc; pode continuar, no entanto, conferindo a integridade do seu sistema.',
	'VERSION_UP_TO_DATE_ACP'	=> 'Sua instala&ccedil;&atilde;o est&aacute; atualizada. Nenhuma atualiza&ccedil;&atilde;o &eacute; requerida no momento. Voc&ecirc; n&atilde;o precisa atualizar seu sistema.',
	'VIEWING_FILE_CONTENTS'		=> 'Vendo conte&uacute;do de Arquivos',
	'VIEWING_FILE_DIFF'			=> 'Vendo diferen&ccedil;as de Arquivos',

	'WRONG_INFO_FILE_FORMAT'	=> 'Informa&ccedil;&atilde;o de Formato de Arquivo Inv&aacute;lida',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Grato, A Administra&ccedil;&atilde;o',
	'CONFIG_SITE_DESC'				=> 'Um pequeno texto para descrever seu f&oacute;rum',
	'CONFIG_SITENAME'				=> 'seu_dominio.com',

	'DEFAULT_INSTALL_POST'			=> 'Isto &eacute; um exemplo de uma mensagem na sua instala&ccedil;&atilde;o do phpBB3. Tudo parece estar funcionando. Se voc&ecirc; desejar, voc&ecirc; pode apagar esta mensagem e continuar com a configura&ccedil;&atilde;o do seu f&oacute;rum. Durante o processo de instala&ccedil;&atilde;o, em sua primeira categoria e seu primeiro f&oacute;rum, &eacute; determinada uma configura&ccedil;&atilde;o apropriada de permiss&otilde;es pr&eacute;-definidas para os grupos de usu&aacute;rios de administradores, bots, moderadores globais, visitantes, usu&aacute;rios registrados e usu&aacute;rios registrados atrav&eacute;s da COPPA. Se voc&ecirc; tamb&eacute;m escolher apagar sua primeira categoria e seu primeiro f&oacute;rum, n&atilde;o se esque&ccedil;a de determinar permiss&otilde;es para todos estes grupos de usu&aacute;rios para todas as novas categorias e f&oacute;runs que voc&ecirc; criar. &Eacute; recomendado que sua primeira categoria e seu primeiro f&oacute;rum sejam renomeados e feitas copias das permiss&otilde;es deles enquanto se estiver criando novas categorias e f&oacute;runs. Divirta-se!',

	'EXT_GROUP_ARCHIVES'			=> 'Arquivos',
	'EXT_GROUP_DOCUMENTS'			=> 'Documentos',
	'EXT_GROUP_DOWNLOADABLE_FILES'	=> 'Arquivos para download',
	'EXT_GROUP_FLASH_FILES'			=> 'Arquivos Flash',
	'EXT_GROUP_IMAGES'				=> 'Imagens',
	'EXT_GROUP_PLAIN_TEXT'			=> 'Texto plano',
	'EXT_GROUP_QUICKTIME_MEDIA'		=> 'Quicktime Media',
	'EXT_GROUP_REAL_MEDIA'			=> 'Real Media',
	'EXT_GROUP_WINDOWS_MEDIA'		=> 'Windows Media',

	'FORUMS_FIRST_CATEGORY'			=> 'Sua Primeira Categoria',
	'FORUMS_TEST_FORUM_DESC'		=> 'Descri&ccedil;&atilde;o de seu primeiro f&oacute;rum.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Seu Primeiro F&oacute;rum',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Administrador',
	'REPORT_WAREZ'					=> 'A mensagem cont&eacute;m links para software ilegal ou pirateado.',
	'REPORT_SPAM'					=> 'A mensagem reportada tem o &uacute;nico prop&oacute;sito de anunciar um website ou outro produto.',
	'REPORT_OFF_TOPIC'				=> 'A mensagem reportada &eacute; um off t&oacute;pico.',
	'REPORT_OTHER'					=> 'A mensagem reportada n&atilde;o se encaixa em nenhuma categoria, favor use o campo de informa&ccedil;&atilde;o adicional.',

	'SMILIES_ARROW'					=> 'Seta',
	'SMILIES_CONFUSED'				=> 'Confuso',
	'SMILIES_COOL'					=> 'Tranquilo',
	'SMILIES_CRYING'				=> 'Chorando ou Muito Triste',
	'SMILIES_EMARRASSED'			=> 'Envergonhado',
	'SMILIES_EVIL'					=> 'Mal ou Muito Furioso',
	'SMILIES_EXCLAMATION'			=> 'Exclama&ccedil;&atilde;o',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Id&eacute;ia',
	'SMILIES_LAUGHING'				=> 'Rindo',
	'SMILIES_MAD'					=> 'Furioso',
	'SMILIES_MR_GREEN'				=> 'Sr. Verde',
	'SMILIES_NEUTRAL'				=> 'Neutro',
	'SMILIES_QUESTION'				=> 'D&uacute;vida',
	'SMILIES_RAZZ'					=> 'Legal',
	'SMILIES_ROLLING_EYES'			=> 'Virando os olhos',
	'SMILIES_SAD'					=> 'Triste',
	'SMILIES_SHOCKED'				=> 'Chocado',
	'SMILIES_SMILE'					=> 'Smile',
	'SMILIES_SURPRISED'				=> 'Surpreso',
	'SMILIES_TWISTED_EVIL'			=> 'S&aacute;dico',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Muito Feliz',
	'SMILIES_WINK'					=> 'Piscada',

	'TOPICS_TOPIC_TITLE'			=> 'Bem-Vindo(a) ao phpBB3',
));

?>
