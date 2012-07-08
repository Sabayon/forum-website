<?php
/**
*
* posting [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.1
* @package language: Brazilian Portuguese
* @original version $Id: posting.php,v 1.50 2007/11/28 20:09:01 kellanved Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-13 - 15:00
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
// BBCodes 
// Note to translators: you can translate everything but what's between { and }
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'		=> 'BBCode &eacute; uma implementa&ccedil;&atilde;o especial de HTML que oferece um grande controle sobre como algo ser&aacute; mostrado. Nesta p&aacute;gina voc&ecirc; pode adicionar, remover e editar BBCodes personalizados.',
	'ADD_BBCODE'				=> 'Adicionar novo BBCode',

	'BBCODE_ADDED'				=> 'BBCode adicionado com sucesso.',
	'BBCODE_EDITED'				=> 'BBCode editado com sucesso.',
	'BBCODE_NOT_EXIST'			=> 'O BBCode que voc&ecirc; selecionou n&atilde;o existe.',
	'BBCODE_HELPLINE'			=> 'Linha de ajuda',
	'BBCODE_HELPLINE_EXPLAIN'	=> 'Este campo cont&eacute;m o texto quando passado com o mouse sobre o BBCode.',
	'BBCODE_HELPLINE_TEXT'		=> 'Texto de ajuda da linha',
	'BBCODE_HELPLINE_TOO_LONG'	=> 'A linha de ajuda que voc&ecirc; digitou &eacute; muito longa.',
	'BBCODE_INVALID_TAG_NAME'	=> 'O nome do c&oacute;digo BBCode que voc&ecirc; selecionou j&aacute; est&aacute; em uso.',
	'BBCODE_INVALID'			=> 'Seu BBCode foi constru&iacute;do de uma forma inv&aacute;lida.',
	'BBCODE_OPEN_ENDED_TAG'		=> 'Seu BBCode personalizado deve de conter um c&oacute;digo de abertura e outro de fechamento do mesmo.',
	'BBCODE_TAG'				=> 'C&oacute;digo',
	'BBCODE_TAG_TOO_LONG'		=> 'O c&oacute;digo definido &eacute; muito longo.',
	'BBCODE_TAG_DEF_TOO_LONG'	=> 'O c&oacute;digo que voc&ecirc; definiu &eacute; muito longo, favor diminuir a defini&ccedil;&atilde;o de seu c&oacute;digo.',
	'BBCODE_USAGE'				=> 'Uso do BBCode',
	'BBCODE_USAGE_EXAMPLE'		=> '[hilight={COLOR}]{TEXT}[/hilight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'		=> 'Aqui voc&ecirc; pode definir como usar o BBCode. Troque qualquer vari&aacute;vel pela vari&aacute;vel correspondente (%sveja abaixo%s).',

	'EXAMPLE'						=> 'Exemplo:',
	'EXAMPLES'						=> 'Exemplos:',

	'HTML_REPLACEMENT'				=> 'Substitui&ccedil;&atilde;o de HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};"&gt;{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};"&gt;{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Aqui voc&ecirc; pode definir o HTML padr&atilde;o para troca (cada template tem seu pr&oacute;prio HTML de troca). N&atilde;o se esque&ccedil;a de recolocar os que voc&ecirc; usou acima!',

	'TOKEN'					=> 'S&iacute;mbolo',
	'TOKENS'				=> 'S&iacute;mbolos',
	'TOKENS_EXPLAIN'		=> 'S&iacute;mbolos s&atilde;o campos especiais para que os usu&aacute;rios entrem com dados. A entrada do dado ser&aacute; validada somente se a mesma corresponder exatamente igual a definida. Se necess&aacute;rio, voc&ecirc; pode numerar eles adicionando n&uacute;meros ao final como &uacute;ltimo caractere, e.x. {TEXTO1}, {TEXTO2}.<br /><br />Como substituto do HTML voc&ecirc; tamb&eacute;m pode usar qualquer string presente em seu diret&oacute;rio language/, como isto: {L_<em>&lt;nomestring&gt;</em>} onde <em>&lt;nomestring&gt;</em> &eacute; o nome da string traduzida que voc&ecirc; quer adicionar. Por exemplo, {L_WROTE} ser&aacute; mostrada como "wrote" ou pela sua tradu&ccedil;&atilde;o de acordo com o idioma do usu&aacute;rio.<br /><br /><strong>Por favor, note que s&oacute; os s&iacute;mbolos listados abaixo podem ser usados dentro dos BBCodes comuns.</strong>',
	'TOKEN_DEFINITION'		=> 'O que pode ser isto?',
	'TOO_MANY_BBCODES'		=> 'Voc&ecirc; n&atilde;o pode criar nenhum BBCode a mais. Favor remover algum existente e tentar novamente.',

	'tokens'	=>	array(
		'TEXT'			=> 'Qualquer texto, incluindo caracteres estrangeiros, n&uacute;meros, etcâ€¦ Voc&ecirc; n&atilde;o deveria utilizar este s&iacute;mbolo em tags HTML. Ao inv&eacute;s tente usar o IDENTIFIER ou SIMPLETEXT.',
		'SIMPLETEXT'	=> 'Caracteres do alfabeto latino (A-Z), n&uacute;meros, espa&ccedil;os, v&iacute;rgulas, pontos, menos, mais, h&iacute;fen e sublinhado',
		'IDENTIFIER'	=> 'Caracteres do alfabeto latino (A-Z), n&uacute;meros, h&iacute;fen e sublinhado',
		'NUMBER'		=> 'Qualquer s&eacute;rie de d&iacute;gitos',
		'EMAIL'			=> 'Um endere&ccedil;o de e-mail v&aacute;lido',
		'URL'			=> 'Um endere&ccedil;o URL v&aacute;lido usando qualquer protocolo (http, ftp, etcâ€¦ n&atilde;o pode ser usado para exploits de javascript). Se nenhum for definido, &quot;http://&quot; &eacute; o padr&atilde;o para a string',
		'LOCAL_URL'		=> 'Um endere&ccedil;o URL local. A URL deve ser relativa &agrave; p&aacute;gina do t&oacute;pico e n&atilde;o pode conter o protocolo do nome do servidor, sem o http e derivados',
		'COLOR'			=> 'Uma cor HTML, pode ser na forma num&eacute;rica <samp>#FF1234</samp> ou um <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">estilo de cor CSS</a> tais como <samp>f&uacute;scia</samp> ou <samp>Borda Inativa</samp>'
	)
));

// Smilies and topic icons
$lang = array_merge($lang, array(
	'ACP_ICONS_EXPLAIN'		=> 'Nesta p&aacute;gina voc&ecirc; pode adicionar, remover e editar os &Iacute;cones que Usu&aacute;rios poder&atilde;o inserir em seus t&oacute;picos e mensagens. Estes &Iacute;cones geralmente s&atilde;o mostrados pr&oacute;ximo ao t&iacute;tulo do t&oacute;pico ou na lista do f&oacute;rum de escolha, ou nas respostas das mensagens, enfim, em qualquer local onde exista um campo de texto. Voc&ecirc; pode criar e instalar novos pacotes de &Iacute;cones se assim desejar.',
	'ACP_SMILIES_EXPLAIN'	=> 'Smilies ou Emo&ccedil;&otilde;es s&atilde;o pequenos, geralmente usados para representar um sentimento ou Emo&ccedil;&atilde;o expressada na mensagem. Desta p&aacute;gina voc&ecirc; pode adicionar, remover e editar as Emo&ccedil;&otilde;es que podem ser usadas na comunidade em geral. Voc&ecirc; poder&aacute; tamb&eacute;m criar e instalar novos pacotes de Emo&ccedil;&otilde;es.',
	'ADD_SMILIES'			=> 'Adicionar m&uacute;ltiplas Emo&ccedil;&otilde;es',
	'ADD_SMILEY_CODE'		=> 'Adicionar c&oacute;digo adicional de emo&ccedil;&atilde;o',
	'ADD_ICONS'				=> 'Adicionar m&uacute;ltiplos &Iacute;cones',
	'AFTER_ICONS'			=> 'Depois de %s',
	'AFTER_SMILIES'			=> 'Depois de %s',

	'CODE'						=> 'C&oacute;digo',
	'CURRENT_ICONS'				=> '&Iacute;cones atuais',
	'CURRENT_ICONS_EXPLAIN'		=> 'Escolha o que fazer com os &Iacute;cones instalados.',
	'CURRENT_SMILIES'			=> 'Emo&ccedil;&otilde;es atuais',
	'CURRENT_SMILIES_EXPLAIN'	=> 'Escolha o que fazer com as Emo&ccedil;&otilde;es instaladas.',

	'DISPLAY_ON_POSTING'		=> 'Mostrar nas mensagens',
	'DISPLAY_POSTING'			=> 'Na p&aacute;gina de postagem',
	'DISPLAY_POSTING_NO'		=> 'Não na p&aacute;gina de postagem',
	
	

	'EDIT_ICONS'				=> 'Editar &Iacute;cones',
	'EDIT_SMILIES'				=> 'Editar Emo&ccedil;&otilde;es',
	'EMOTION'					=> 'Emo&ccedil;&atilde;o',
	'EXPORT_ICONS'				=> 'Exportar e fazer o download de icons.pak',
	'EXPORT_ICONS_EXPLAIN'		=> '%sAo clicar neste link, a configura&ccedil;&atilde;o de seus &Iacute;cones instalados ser&aacute; criado o pacote dentro de <samp>icons.pak</samp> que quando feito o download ser&atilde;o criados arquivos <samp>.zip</samp> ou <samp>.tgz</samp> contendo todos os seus &Iacute;cones e Emo&ccedil;&otilde;es <samp>icons.pak</samp> para futura configura&ccedil;&atilde;o%s.',
	'EXPORT_SMILIES'			=> 'Exportar e fazer download smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'	=> '%sAo clicar neste link, a configura&ccedil;&atilde;o de seus &Iacute;cones instalados ser&aacute; criado o pacote dentro de <samp>smilies.pak</samp> que quando feito o download ser&atilde;o criados arquivos <samp>.zip</samp> ou <samp>.tgz</samp> contendo todos os seus &Iacute;cones e Emo&ccedil;&otilde;es <samp>smilies.pak</samp> para futura configura&ccedil;&atilde;o%s.',

	'FIRST'			=> 'Primeiro',

	'ICONS_ADD'				=> 'Adicionar um novo &iacute;cone',
	'ICONS_NONE_ADDED'		=> 'Nenhum &iacute;cone foi adicionado.',
	'ICONS_ONE_ADDED'		=> 'O &iacute;cone foi adicionado com sucesso.',
	'ICONS_ADDED'			=> 'Os &iacute;cones foram adicionados com sucesso.',
	'ICONS_CONFIG'			=> 'Configura&ccedil;&atilde;o dos &iacute;cones',
	'ICONS_DELETED'			=> 'O &iacute;cone foi removido com sucesso.',
	'ICONS_EDIT'			=> 'Editar &iacute;cone',
	'ICONS_ONE_EDITED'		=> 'O &iacute;cone foi atualizado com sucesso.',
	'ICONS_NONE_EDITED'		=> 'Nenhum &iacute;cone foi atualizado.',
	'ICONS_EDITED'			=> 'Os &iacute;cones foram atualizados com sucesso.',
	'ICONS_HEIGHT'			=> 'Altura do &iacute;cone',
	'ICONS_IMAGE'			=> 'Imagem do &iacute;cone',
	'ICONS_IMPORTED'		=> 'O pacote de &iacute;cones foi instalado com sucesso.',
	'ICONS_IMPORT_SUCCESS'	=> 'O pacote de &iacute;cones foi importado com sucesso.',
	'ICONS_LOCATION'		=> 'Localiza&ccedil;&atilde;o dos &iacute;cones',
	'ICONS_NOT_DISPLAYED'	=> 'Os seguintes &iacute;cones n&atilde;o s&atilde;o mostrados aos Usu&aacute;rios',
	'ICONS_ORDER'			=> 'Ordem dos &iacute;cones',
	'ICONS_URL'				=> 'Arquivo de imagem dos &iacute;cones',
	'ICONS_WIDTH'			=> 'Largura do &iacute;cone',
	'IMPORT_ICONS'			=> 'Instalar pacote de &iacute;cones',
	'IMPORT_SMILIES'		=> 'Instalar pacote de Emo&ccedil;&otilde;es',

	'KEEP_ALL'			=> 'Manter todos',

	'MASS_ADD_SMILIES'	=> 'Adicionar m&uacute;ltiplas Emo&ccedil;&otilde;es',

    'NO_ICONS_ADD'		=> 'N&atilde;o existem &iacute;cones dispon&iacute;veis para adicionar.',
	'NO_ICONS_EDIT'		=> 'N&atilde;o existem &iacute;cones dispon&iacute;veis para modificar.',
	'NO_ICONS_EXPORT'	=> 'Voc&ecirc; n&atilde;o possui &Iacute;cones para criar o pacote.',
	'NO_ICONS_PAK'		=> 'Nenhum pacote de &Iacute;cone encontrado.',
	'NO_SMILIES_ADD'	=> 'N&atilde;o existem emo&ccedil;&otilde;es dispon&iacute;veis para adicionar.',
	'NO_SMILIES_EDIT'	=> 'N&atilde;o existem emo&ccedil;&otilde;es dispon&iacute;veis para editar.',
	'NO_SMILIES_EXPORT'	=> 'Voc&ecirc; n&atilde;o possui Emo&ccedil;&otilde;es para criar o pacote.',
	'NO_SMILIES_PAK'	=> 'Nenhum pacote de Emo&ccedil;&otilde;es encontrado.',

	'PAK_FILE_NOT_READABLE'		=> 'N&atilde;o foi poss&iacute;vel ler o arquivo <samp>.pak</samp>.',

	'REPLACE_MATCHES'	=> 'Trocar marcados',

	'SELECT_PACKAGE'			=> 'Selecionar um arquivo de pacote',
	'SMILIES_ADD'				=> 'Adicionar uma nova emo&ccedil;&atilde;o',
	'SMILIES_NONE_ADDED'		=> 'Nenhuma das emo&ccedil;&otilde;es foram adicionadas.',
	'SMILIES_ONE_ADDED'			=> 'A emo&ccedil;&atilde;o foi adicionada com sucesso.',
	'SMILIES_ADDED'				=> 'As emo&ccedil;&otilde;es foram adicionadas com sucesso.',
	'SMILIES_CODE'				=> 'C&oacute;digo da emo&ccedil;&atilde;o',
	'SMILIES_CONFIG'			=> 'Configura&ccedil;&atilde;o da emo&ccedil;&atilde;o',
	'SMILIES_DELETED'			=> 'A emo&ccedil;&atilde;o foi removida com sucesso.',
	'SMILIES_EDIT'				=> 'Editar emo&ccedil;&atilde;o',
	'SMILIE_NO_CODE'			=> 'A emo&ccedil;&atilde;o “%s” foi ignorada, pois n&atilde;o foi colocado o c&oacute;digo.',
	'SMILIE_NO_EMOTION'			=> 'A emo&ccedil;&atilde;o “%s” foi ignorada, pois n&atilde;o foi colocada a emo&ccedil;&atilde;o.',
	'SMILIES_NONE_EDITED'		=> 'Nenhuma das emo&ccedil;&otilde;es foram atualizadas.',
	'SMILIES_ONE_EDITED'		=> 'A emo&ccedil;&atilde;o foi atualizada com sucesso.',
	'SMILIES_EDITED'			=> 'As emo&ccedil;&otilde;es foram atualizadas com sucesso.',
	'SMILIES_EMOTION'			=> 'Emo&ccedil;&atilde;o',
	'SMILIES_HEIGHT'			=> 'Altura da emo&ccedil;&atilde;o',
	'SMILIES_IMAGE'				=> 'Imagem da emo&ccedil;&atilde;o',
	'SMILIES_IMPORTED'			=> 'O pacote de emo&ccedil;&otilde;es foi instalado com sucesso.',
	'SMILIES_IMPORT_SUCCESS'	=> 'O pacote de emo&ccedil;&otilde;es foi importado com sucesso.',
	'SMILIES_LOCATION'			=> 'Localiza&ccedil;&atilde;o das emo&ccedil;&otilde;es',
	'SMILIES_NOT_DISPLAYED'		=> 'As seguintes emo&ccedil;&otilde;es n&atilde;o s&atilde;o mostradas aos Usu&aacute;rios',
	'SMILIES_ORDER'				=> 'Ordem das emo&ccedil;&otilde;es',
	'SMILIES_URL'				=> 'Arquivo de imagem de emo&ccedil;&atilde;o',
	'SMILIES_WIDTH'				=> 'Largura da emo&ccedil;&atilde;o',

	'WRONG_PAK_TYPE'	=> 'O pacote especificado n&atilde;o cont&eacute;m os dados apropriados.',
));

// Word censors
$lang = array_merge($lang, array(
	'ACP_WORDS_EXPLAIN'		=> 'Deste painel de controle voc&ecirc; pode adicionar, editar e remover palavras que ser&atilde;o automaticamente censuradas em seus f&oacute;runs. Em adicional, pessoas n&atilde;o estar&atilde;o permitidas a registrarem nomes de usu&aacute;rio que contenham as palavras aqui censuradas. Palavras universais (*) s&atilde;o aceitas no campo das palavras, ex. *test* ir&aacute; acertar detest&aacute;vel, test* dever&aacute; acertar teste, *testa ir&aacute; acertar detesta.',
	'ADD_WORD'				=> 'Adicionar nova palavra',

	'EDIT_WORD'		=> 'Editar censura de palavra',
	'ENTER_WORD'	=> 'Voc&ecirc; deve entrar uma palavra e sua substituta.',

	'NO_WORD'	=> 'Nenhuma palavra selecionada para editar.',

	'REPLACEMENT'	=> 'Trocar',

	'UPDATE_WORD'	=> 'Atualizar censura de palavras',

	'WORD'				=> 'Palavra',
	'WORD_ADDED'		=> 'A censura de palavras foi adicionada com sucesso.',
	'WORD_REMOVED'		=> 'A censura de palavras foi removida com sucesso.',
	'WORD_UPDATED'		=> 'A censura de palavras foi atualizada com sucesso.',
));

// Ranks
$lang = array_merge($lang, array(
	'ACP_RANKS_EXPLAIN'		=> 'Usando este formul&aacute;rio voc&ecirc; pode adicionar, editar, ver e remover os  ranks de usu&aacute;rio. Voc&ecirc; tamb&eacute;m pode criar ranks personalizados, os quais  podem ser aplicados a um usu&aacute;rio pela Ger&ecirc;ncia de Usu&aacute;rios.',
	'ADD_RANK'				=> 'Adicionar novo rank',

	'MUST_SELECT_RANK'		=> 'Voc&ecirc; deve selecionar um rank.',
	
	'NO_ASSIGNED_RANK'		=> 'Nenhum rank especial atribu&iacute;do.',
	'NO_RANK_TITLE'			=> 'Voc&ecirc; n&atilde;o especificou um t&iacute;tulo para este rank.',
	'NO_UPDATE_RANKS'		=> 'O rank foi deletado com sucesso. Entretanto Usu&aacute;rios usando este rank n&atilde;o tiveram suas contas atualizadas. Voc&ecirc; ter&aacute; de remover manualmente os ranks nestas contas.',

	'RANK_ADDED'			=> 'O rank foi adicionado com sucesso.',
	'RANK_IMAGE'			=> 'Imagem do rank',
	'RANK_IMAGE_EXPLAIN'	=> 'Use isto para definir uma pequena imagem associada ao rank do usu&aacute;rio. O caminho da mesma &eacute; relativo ao diret&oacute;rio raiz do phpBB.',
	'RANK_MINIMUM'			=> 'M&iacute;nimo de mensagens',
	'RANK_REMOVED'			=> 'O rank foi removido com sucesso.',
	'RANK_SPECIAL'			=> 'Definir como rank especial',
	'RANK_TITLE'			=> 'T&iacute;tulo do rank',
	'RANK_UPDATED'			=> 'O rank foi atualizado com sucesso.',
));

// Disallow Usernames
$lang = array_merge($lang, array(
	'ACP_DISALLOW_EXPLAIN'	=> 'Aqui voc&ecirc; pode controlar os nomes de usu&aacute;rios ao qual n&atilde;o s&atilde;o permitidos usar. Os nomes de usu&aacute;rios proibidos podem ser definidos com um s&iacute;mbolo para palavra universal (*). Por favor, note que voc&ecirc; n&atilde;o poder&aacute; especificar um usu&aacute;rio que j&aacute; esteja cadastrado, voc&ecirc; primeiro ter&aacute; de excluir o nome e ent&atilde;o proibir o uso do mesmo.',
	'ADD_DISALLOW_EXPLAIN'	=> 'Voc&ecirc; pode desabilitar um nome de usu&aacute;rio usando a palavra universal * para automaticamente banir caracteres conseq&uuml;entes',
	'ADD_DISALLOW_TITLE'	=> 'Adicionar um nome Proibido',

	'DELETE_DISALLOW_EXPLAIN'	=> 'Voc&ecirc; pode remover um nome proibido, selecione o nome e ent&atilde;o pressione enviar para executar esta a&ccedil;&atilde;o',
	'DELETE_DISALLOW_TITLE'		=> 'Remover um nome Proibido',
	'DISALLOWED_ALREADY'		=> 'O nome o qual voc&ecirc; entrou n&atilde;o pode ser desabilitado. Este j&aacute; existe na lista ou um usu&aacute;rio com este nome est&aacute; presente nos registros.',
	'DISALLOWED_DELETED'		=> 'O nome Proibido foi removido com sucesso.',
	'DISALLOW_SUCCESSFUL'		=> 'O nome Proibido foi adicionado com sucesso.',

	'NO_DISALLOWED'				=> 'Nenhum nome Proibido',
	'NO_USERNAME_SPECIFIED'		=> 'Voc&ecirc; n&atilde;o selecionou ou especificou um nome para editar.',
));

// Reasons
$lang = array_merge($lang, array(
	'ACP_REASONS_EXPLAIN'	=> 'Aqui voc&ecirc; pode gerenciar as raz&otilde;es usadas para notificar e acusar mensagens quando desaprovadas pelos Usu&aacute;rios. Existe uma raz&atilde;o padr&atilde;o (marcada com um *) voc&ecirc; n&atilde;o poder&aacute; remover, esta raz&atilde;o normalmente &eacute; usada para mensagens que nenhuma outra raz&atilde;o se encaixam.',
	'ADD_NEW_REASON'		=> 'Adicionar nova raz&atilde;o',
	'AVAILABLE_TITLES'		=> 'T&iacute;tulos dispon&iacute;veis para raz&atilde;o',
	
	'IS_NOT_TRANSLATED'			=> 'Raz&atilde;o <strong>n&atilde;o</strong> foi localizada.',
	'IS_NOT_TRANSLATED_EXPLAIN'	=> 'Raz&atilde;o <strong>n&atilde;o</strong> foi localizada. Se voc&ecirc; quiser fornecer o formul&aacute;rio localizado, especifique a chave correta dos arquivos de idioma da sess&atilde;o de notifica&ccedil;&otilde;es.',
	'IS_TRANSLATED'				=> 'Raz&atilde;o foi localizada.',
	'IS_TRANSLATED_EXPLAIN'		=> 'Raz&atilde;o foi localizada. Se o t&iacute;tulo que voc&ecirc; entrar aqui &eacute; especificado nos arquivos de idioma, o t&iacute;tulo e descri&ccedil;&atilde;o ser&atilde;o usados ent&atilde;o.',
	
	'NO_REASON'					=> 'Raz&atilde;o n&atilde;o pode ser encontrada.',
	'NO_REASON_INFO'			=> 'Voc&ecirc; tem de especificar um t&iacute;tulo e uma descri&ccedil;&atilde;o para esta raz&atilde;o.',
	'NO_REMOVE_DEFAULT_REASON'	=> 'Voc&ecirc; n&atilde;o est&aacute; apto a remover a raz&atilde;o padr&atilde;o â€œOutroâ€.',

	'REASON_ADD'				=> 'Adicionar raz&atilde;o de notifica&ccedil;&atilde;o/proibi&ccedil;&atilde;o',
	'REASON_ADDED'				=> 'notifica&ccedil;&atilde;o/proibi&ccedil;&atilde;o adicionada com sucesso.',
	'REASON_ALREADY_EXIST'		=> 'Uma raz&atilde;o com este t&iacute;tulo j&aacute; est&aacute; em uso, favor entrar com outro t&iacute;tulo para esta raz&atilde;o.',
	'REASON_DESCRIPTION'		=> 'Descri&ccedil;&atilde;o da raz&atilde;o',
	'REASON_DESC_TRANSLATED'	=> 'Descri&ccedil;&atilde;o da raz&atilde;o demonstrada',
	'REASON_EDIT'				=> 'Editar raz&otilde;es de notifica&ccedil;&atilde;o/proibi&ccedil;&atilde;o',
	'REASON_EDIT_EXPLAIN'		=> 'Aqui voc&ecirc; est&aacute; apto a adicionar ou editar uma raz&atilde;o. Se a raz&atilde;o est&aacute; traduzida a vers&atilde;o localizada ser&aacute; usada ao inv&eacute;s da descri&ccedil;&atilde;o entrada aqui.',
	'REASON_REMOVED'			=> 'Notifica&ccedil;&atilde;o/proibi&ccedil;&atilde;o removida com sucesso.',
	'REASON_TITLE'				=> 'T&iacute;tulo da raz&atilde;o',
	'REASON_TITLE_TRANSLATED'	=> 'T&iacute;tulo mostrado da raz&atilde;o',
	'REASON_UPDATED'			=> 'Notifica&ccedil;&atilde;o/proibi&ccedil;&atilde;o atualizada com sucesso.',

	'USED_IN_REPORTS'		=> 'Usado nas Notifica&ccedil;&otilde;es',
));

?>
