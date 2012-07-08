<?php 
/** 
* 
* acp_posting.php [Português]
* 
* @package language 
* @version $Id: posting.php, v 1.0 Outubro/2009
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

// BBCodes 
// Note to translators: you can translate everything but what's between { and } 
$lang = array_merge($lang, array(
	'ACP_BBCODES_EXPLAIN'			=> 'BBCode (Bulletin Board Code) é uma linguagem originalmente desenvolvida para phpBB. Permite configurar o que é, e como é exibido.<br /> Aqui é possível adicionar, editar e apagar BBCodes.',
	'ADD_BBCODE'					=> 'Adicionar novo BBCode',

	'BBCODE_ADDED'					=> 'O BBCode foi adicionado com sucesso.',
	'BBCODE_EDITED'					=> 'O BBCode foi editado com sucesso.',
	'BBCODE_NOT_EXIST'				=> 'O BBCode que seleccionou não existe.',
	'BBCODE_HELPLINE'				=> 'Linha de Ajuda',
	'BBCODE_HELPLINE_EXPLAIN'		=> 'Neste Campo deve ser inserido o texto mostrado quando se coloca o cursor sobre o BBCode.',
	'BBCODE_HELPLINE_TEXT'			=> 'Texto da Linha de Ajuda',
	'BBCODE_HELPLINE_TOO_LONG'		=> 'A linha de ajuda que escreveu é muito longa.',	
	'BBCODE_INVALID_TAG_NAME'		=> 'O Nome da TAG de BBCode seleccionado já existe.',
	'BBCODE_INVALID'				=> 'A construção do seu BBCode é invalido.',
	'BBCODE_OPEN_ENDED_TAG'			=> 'O BBCode customizado deve conter uma TAG de início e outra de fim.',
	'BBCODE_TAG'					=> 'TAG',
	'BBCODE_TAG_TOO_LONG'			=> 'O Nome da TAG seleccionado é muito grande.',
	'BBCODE_TAG_DEF_TOO_LONG'		=> 'A Definição da TAG escrita é muito grande. Por Favor, reescreva de forma mais curta.',
	'BBCODE_USAGE'					=> 'Uso do BBCode',
	'BBCODE_USAGE_EXAMPLE'			=> '[highlight={COLOR}]{TEXT}[/highlight]<br /><br />[font={SIMPLETEXT1}]{SIMPLETEXT2}[/font]',
	'BBCODE_USAGE_EXPLAIN'			=> 'Aqui pode definir como utilizar o BBCode. Substitua qualquer variável inserida pelo símbolo correspondente (%sleia as instruções%s).',

	'EXAMPLE'						=> 'Exemplo:',
	'EXAMPLES'						=> 'Exemplos:',

	'HTML_REPLACEMENT'				=> 'Substituição do HTML',
	'HTML_REPLACEMENT_EXAMPLE'		=> '&lt;span style="background-color: {COLOR};">{TEXT}&lt;/span&gt;<br /><br />&lt;span style="font-family: {SIMPLETEXT1};">{SIMPLETEXT2}&lt;/span&gt;',
	'HTML_REPLACEMENT_EXPLAIN'		=> 'Aqui pode definir a substituição padrão do HTML. Não se esqueça de colocar os símbolos utilizados acima!',

	'TOKEN'							=> 'Símbolo',
	'TOKENS'						=> 'Símbolos',

	'TOKENS_EXPLAIN'		=> 'Os Símbolos são campos especiais a serem adicionados pelos Utilizadores. Mas estes apenas serão válidos se tiverem as definições correspondentes. Se necessário, pode numerá-los adicionando um número como o último caracter: Exemplo: {Utilizador}, {Utilizador1}.<br /> <br />Pode ainda utilizar estes Símbolos com qualquer sequência de linguagem presente na directoria /language como esta: {L_<em>&lt;STRINGNAME&gt;</em>} onde <em>&lt;STRINGNAME&gt;</em> é o nome da sequência traduzida que deseja adicionar. Por exemplo, {L_WROTE} será exibido como “wrote” ou traduzido de acordo com a localidade do Utilizador.<br /><br /><strong>Tenha em atenção que apenas os Símbolos listados abaixo podem ser utilizados com os BBCodes personalizados.</strong>',

	'TOKEN_DEFINITION'				=> 'O que é que isto pode ser?',
	'TOO_MANY_BBCODES'				=> 'Não pode criar mais BBCodes. Elimine alguns BBCodes para poder criar outros.',

	'tokens'			=> array(
		'TEXT'			=> 'Qualquer texto, incluindo caracteres externos, números, e etc.',
		'SIMPLETEXT'    => 'Caracteres do alfabeto latino (A-Z), números, espaços, vírgulas, pontos, minus, plus, hífen e underline',
        'IDENTIFIER'    => 'Caracteres do alfabeto latino (A-Z), números, hífen e underline',
		'NUMBER'		=> 'Qualquer Séries de Dígitos',
		'EMAIL'			=> 'Um endereço de email válido',

		'URL'			=> 'Uma URL válida utilizando qualquer protocolo (http, ftp, etc. não pode ser utilizada para javascript). Se nenhum for concedido, “http://” é o prefixado para a sequência.',

		'LOCAL_URL'		=> 'Uma URL local. A URL deve ser relativa à página do tópico e não pode um nome de servidor ou protocolo',
		'COLOR'			=> 'Uma Cor de HTML, pode ser tanto na forma numérica <samp>#FF1234</samp> ou uma <a href="http://www.w3.org/TR/CSS21/syndata.html#value-def-color">CSS colour keyword</a> assim como <samp>fuchsia</samp> ou <samp>InactiveBorder</samp>',
	),
)); 

// Smilies and topic icons 
$lang = array_merge($lang, array( 
	'ACP_ICONS_EXPLAIN'				=> 'Aqui pode adicionar, editar e apagar os ícones que os Utilizador terão disponíveis para adicionar nos tópicos e mensagens. Estes ícones são exibidos geralmente perto do Título dos Tópicos na lista de Fóruns, ou o título do Tópico na lista de Tópicos. Também pode instalar e criar Pacotes de Ícones novos.',
	'ACP_SMILIES_EXPLAIN'			=> 'Smiles ou Emoções são tipicamente pequenos, às vezes imagens animadas utilizadas para mostrar alguma emoção ou sentimento. Aqui pode adicionar, editar e apagar os Smiles que os Utilizadores terão disponíveis nos Tópicos e Mensagens Privadas. Também pode instalar e criar Pacotes de Smiles.',
	'ADD_SMILIES'					=> 'Adicionar Múltiplos Smiles',
	'ADD_SMILEY_CODE'				=> 'Adicionar Código Adicional ao Smilie',
	'ADD_ICONS'						=> 'Adicionar Ícones Múltiplos',
	'AFTER_ICONS'					=> 'Depois %s',
	'AFTER_SMILIES'					=> 'Depois %s',

	'CODE'							=> 'Código',
	'CURRENT_ICONS'					=> 'Ícones Actuais',
	'CURRENT_ICONS_EXPLAIN'			=> 'Escolha o que fazer com os Ícones actualmente instalados.',
	'CURRENT_SMILIES'				=> 'Smiles Actuais',
	'CURRENT_SMILIES_EXPLAIN'		=> 'Escolha o que fazer com os Smiles actualmente instalados.',

	'DISPLAY_ON_POSTING'			=> 'Exibir na Mensagem',
	'DISPLAY_POSTING'				=> 'Na Mensagem',
	'DISPLAY_POSTING_NO'			=> 'Não Exibir na Mensagem',

	'EDIT_ICONS'					=> 'Editar Ícones',
	'EDIT_SMILIES'					=> 'Editar Smiles',
	'EMOTION'						=> 'Emoção',
	'EXPORT_ICONS'					=> 'Exportar e descarregar Pacote de Ícones',
	'EXPORT_ICONS_EXPLAIN'			=> '%sClicando neste atalho, as configurações para os seus Ícones instalados serão compactadas para <samp>icons.pak</samp> que uma vez descarregado pode ser utilizado para criar um ficheiro <samp>.zip</samp> ou <samp>.tgz</samp> contendo todos os seus ícones mais este ficheiro de configuração<samp>icons.pak</samp>%s.',
	'EXPORT_SMILIES'				=> 'Exportar e descarregar smilies.pak',
	'EXPORT_SMILIES_EXPLAIN'		=> '%sClicando neste atalho, a configuração dos Ícones instalados será compactadas para <samp>smilies.pak</samp> que uma vez descarregado pode ser utilizado para criar um ficheiro <samp>.zip</samp> ou <samp>.tgz</samp> contendo todos os seus smileys mais este ficheiro de configuração<samp>smilies.pak</samp>%s.',

	'FIRST'							=> 'Primeiro',

	'ICONS_ADD'						=> 'Adicionar novo Ícone',
	'ICONS_NONE_ADDED'				=> 'Não foram adicionados Ícones.',
	'ICONS_ONE_ADDED'				=> 'O Ícone foi actualizado com sucesso.',
	'ICONS_ADDED'					=> 'Os ícones foram adicionados com sucesso..',
	'ICONS_CONFIG'					=> 'Configuração de Ícones',
	'ICONS_DELETED'					=> 'O Ícone foi apagado com sucesso.',
	'ICONS_EDIT'					=> 'Editar Ícone',
	'ICONS_NONE_EDITED'				=> 'Não foram actualizados Ícones.',
	'ICONS_ONE_EDITED'				=> 'O Ícone foi editado com sucesso.',
	'ICONS_EDITED'					=> 'O Ícone foi actualizado com sucesso.',
	'ICONS_HEIGHT'					=> 'Altura do Ícone',
	'ICONS_IMAGE'					=> 'Imagem do Ícone',
	'ICONS_IMPORTED'				=> 'O Pacote de Ícones foi instalado com sucesso.',
	'ICONS_IMPORT_SUCCESS'			=> 'O Pacote de Ícones foi importado com sucesso.',
	'ICONS_LOCATION'				=> 'Local do Ícone',
	'ICONS_NOT_DISPLAYED'			=> 'Os Ícones seguintes não serão exibidos na página de mensagens',
	'ICONS_ORDER'					=> 'Ordem do Ícone',
	'ICONS_URL'						=> 'Ficheiro de Imagem do Ícone',
	'ICONS_WIDTH'					=> 'Largura do Ícone',
	'IMPORT_ICONS'					=> 'Instalar Pacote de Ícones',
	'IMPORT_SMILIES'				=> 'Instalar Pacote de Smiles',	

	'KEEP_ALL'						=> 'Guardar Todos',

	'MASS_ADD_SMILIES'				=> 'Adicionar Múltiplos Smiles',

	'NO_ICONS_ADD'					=> 'Não há Ícones disponíveis para adicionar.',
	'NO_ICONS_EDIT'					=> 'Não há Ícones disponíveis para modificar.',
	'NO_ICONS_EXPORT'				=> 'Não tem Ícones para Criar um Pacote.',
	'NO_ICONS_PAK'					=> 'Não foi encontrado nenhum Pacote de Ícones.',
	'NO_SMILIES_ADD'				=> 'Não há Smilies disponíveis para adicionar.',
	'NO_SMILIES_EDIT'				=> 'Não há Smilies disponíveis para modificar.',
	'NO_SMILIES_EXPORT'				=> 'Não tem Smiles para Criar um Pacote.',
	'NO_SMILIES_PAK'				=> 'Não foi encontrado nenhum Pacote de Smiles.',

	'PAK_FILE_NOT_READABLE'			=> 'Não é possível ler o ficheiro <samp>.pak</samp>.',

	'REPLACE_MATCHES'				=> 'Substituir entradas',

	'SELECT_PACKAGE'				=> 'Seleccionar o Ficheiro do Pacote',
	'SMILIES_ADD'					=> 'Adicionar novo Smile',
	'SMILIES_NONE_EDITED'			=> 'Não há Smiles disponíveis para modificar.',
	'SMILIES_ONE_ADDED'				=> 'O Smile foi adicionado com sucesso.',
	'SMILIES_ADDED'					=> 'Os Smiles foram adicionados com sucesso.',
	'SMILIES_CODE'					=> 'Código do Smile',
	'SMILIES_CONFIG'				=> 'Configuração do Smile',
	'SMILIES_DELETED'				=> 'O Smile foi apagado com sucesso.',
	'SMILIES_EDIT'					=> 'Editar Smile',
	'SMILIE_NO_CODE'				=> 'O Smile "%s"  foi ignorado, como se nenhum código tivesse sido escrito.',
	'SMILIE_NO_EMOTION'				=> 'O Smile "%s" foi ignorado, como se nenhuma emoção tivesse sido escrita.',
	'SMILIES_NONE_ADDED'			=> 'Não há Smilies disponíveis para adicionar..',
	'SMILIES_ONE_EDITED'			=> 'O Smile foi actualizado com sucesso.',	
	'SMILIES_EDITED'				=> 'Os Smiles foram actualizados com sucesso.',
	'SMILIES_EMOTION'				=> 'Emoção',
	'SMILIES_HEIGHT'				=> 'Altura do Smile',
	'SMILIES_IMAGE'					=> 'Imagem do Smile',
	'SMILIES_IMPORTED'				=> 'O Pacote de Smiles foi instalado com sucesso.',
	'SMILIES_IMPORT_SUCCESS'		=> 'O Pacote de Smiles foi importado com sucesso.',
	'SMILIES_LOCATION'				=> 'Local do Smile',
	'SMILIES_NOT_DISPLAYED'			=> 'Os Smiles seguintes são exibidos na página de mensagens',
	'SMILIES_ORDER'					=> 'Ordem do Smile',
	'SMILIES_URL'					=> 'Ficheiro de Imagem do Smile',
	'SMILIES_WIDTH'					=> 'Largura do Smile',

	'TOO_MANY_SMILIES'			=> 'Limite de %d emoções atingido.',

	'WRONG_PAK_TYPE'				=> 'O Pacote seleccionado não tem as informacções necessárias',
)); 

// Word censors 
$lang = array_merge($lang, array( 
	'ACP_WORDS_EXPLAIN'				=> 'Aqui pode adicionar, editar e apagar palavras que serão automaticamente censuradas no Fórum. Adicionando esta opção, os visitantes continuarão a poder registra-se com Nomes de utilizadores contendo estas palavras. Podem ser utilizados asteriscos (*) aumentando as possibilidades de abranger variações de uma mesma palavra. Por exemplo, testa* abrangerá testar e detesta.',
	'ADD_WORD'						=> 'Adicionar nova Palavra',

 	'EDIT_WORD'						=> 'Editar Palavra Censurada',
	'ENTER_WORD'					=> 'Tem que escrever uma palavra e a sua substituição.',

	'NO_WORD'						=> 'Não foi seleccionada nenhuma palavra para poder ser editada.',

	'REPLACEMENT'					=> 'Substituição',

	'UPDATE_WORD'					=> 'Actualizar Palavra Censurada',

	'WORD'							=> 'Palavra',
	'WORD_ADDED'					=> 'A Palavra Censurada foi adicionada com sucesso.',
	'WORD_REMOVED'					=> 'A Palavra Censurada foi apagada com sucesso.',
	'WORD_UPDATED'					=> 'A Palavra Censurada foi actualizada com sucesso.',
)); 

// Ranks 
$lang = array_merge($lang, array( 
	'ACP_RANKS_EXPLAIN'				=> 'Aqui poderá adicionar, editar, visualizar e apagar ranks. Pode também criar ranks Personalizados que podem ser aplicados a um Utilizador Ferramentas de Administração de Utilizadores.',
	'ADD_RANK'						=> 'Adicionar novo Rank',

	'MUST_SELECT_RANK'				=> 'Tem de seleccionar um Rank.',

	'NO_ASSIGNED_RANK'				=> 'Nenhum Rank Especial existente.',
	'NO_RANK_TITLE'					=> 'Te, que escrever o Título do Rank.',
	'NO_UPDATE_RANKS'				=> 'O Rank foi apagado com sucesso. De qualquer modo, os registos que utilizavam este rank não foram actualizados. Tem que actualizar os ranks nestes registos manualmente.',

	'RANK_ADDED'					=> 'O Rank foi adicionado com sucesso.',
	'RANK_IMAGE'					=> 'Imagem do Rank',
	'RANK_IMAGE_EXPLAIN'			=> 'Imagem do Rank (relativo à pasta raíz do phpBB).',

	'RANK_IMAGE_IN_USE'		=> '(em uso)',

	'RANK_MINIMUM'					=> 'Número Mínimo de Mensagens',
	'RANK_REMOVED'					=> 'O Rank foi apagado com sucesso.',
	'RANK_SPECIAL'					=> 'Escreva um Rank Especial',
	'RANK_TITLE'					=> 'Título do Rank',
	'RANK_UPDATED'					=> 'O Rank foi actualizado com sucesso.',
)); 

// Disallow Usernames 
$lang = array_merge($lang, array( 
	'ACP_DISALLOW_EXPLAIN'			=> 'Aqui pode gerir os nomes cuja utilização é proibida. Utilize o asterisco (*) para facilitar a construção de nomes. Não é possível proibir um nome se já estiver a ser usado por um Utilizador registado. Nesse caso, apague ou altere o nome, e proíba-o depois.',
	'ADD_DISALLOW_EXPLAIN'			=> 'Introduza o nome que deseja proibir. <br />Use os asteriscos (*) cuidadosamente.',
	'ADD_DISALLOW_TITLE'			=> 'Adicionar um Nome Proibido',

	'DELETE_DISALLOW_EXPLAIN'		=> 'Aqui pode eliminar uma proibição, seleccionando na lista o nome cuja proibição pretende anular, clicando de seguida em enviar.',
	'DELETE_DISALLOW_TITLE'			=> 'Apagar um Nome Proibido',
	'DISALLOWED_ALREADY'			=> 'O Nome especificado não pode ser proibido. Pode ser que ele já exista na Lista de Nomes Proibidos, na Lista de Palavras Censuradas ou encontre-se actualmente em uso por algum Utilizador registado.',
	'DISALLOWED_DELETED'			=> 'O Nome Proibido foi apagado com sucesso.',
	'DISALLOW_SUCCESSFUL'			=> 'O Nome Proibido foi adicionado com sucesso.',

	'NO_DISALLOWED'					=> 'Não há Nomes Proibidos',
	'NO_USERNAME_SPECIFIED'			=> 'O Nome Proibido não foi seleccionado.',
)); 

// Reasons 
$lang = array_merge($lang, array( 
	'ACP_REASONS_EXPLAIN'			=> 'Aqui pode gerir as razões utilizadas em denúncias e mensagens negativas quando desaprovando mensagens. Existe uma razão padrão (marcada com um (*)) em que não pode apagar, esta razão é normalmente utilizada para mensagens Personalizadas se não possuírem motivos plausíveis.',
	'ADD_NEW_REASON'				=> 'Adicionar nova Razão',
	'AVAILABLE_TITLES'				=> 'Titulos de Razões Locais Disponveis',

	'IS_NOT_TRANSLATED'				=> 'A Razão <strong>não</strong> foi encontrada.',
	'IS_NOT_TRANSLATED_EXPLAIN'		=> 'A Razão <strong>não</strong> foi encontrada. Se deseja estabelecer a forma local, especifique a chave correta através dos ficheiros de linguagem do Fórum de razões para denúncias.',
	'IS_TRANSLATED'					=> 'A Razão foi encontrada.',
	'IS_TRANSLATED_EXPLAIN'			=> 'A Razão foi encontrada. Se o título que escreveu aqui for especificado com os ficheiros de linguagem do Fórum de razões para denúncias, a forma localizada para o título e a descrição serão utilizadas.',

	'NO_REASON'						=> 'A Razão não pôde ser encontrada.',
	'NO_REASON_INFO'				=> 'O Título e a Descrição para esta Razão devem ser escritos.',
	'NO_REMOVE_DEFAULT_REASON'		=> 'Não está autorizado a apagar a Razão Padrão "Outros".',

	'REASON_ADD'					=> 'Adicionar Razão para Denúncia/Negação',
	'REASON_ADDED'					=> 'A Razão para Denúncia/Negação foi adicionada com sucesso.',
	'REASON_ALREADY_EXIST'			=> 'O Título escrito já existe. Por Favor, escreva outro título para esta razão.',
	'REASON_DESCRIPTION'			=> 'Descrição da Razão',
	'REASON_DESC_TRANSLATED'		=> 'Descrição da Razão exibida',
	'REASON_EDIT'					=> 'Editar Razão para Denúncia/Negação',
	'REASON_EDIT_EXPLAIN'			=> 'Aqui pode adicionar ou editar uma razão. Se a razão for traduzida, a versão localizada é utilizada ao invés da descrição descrita aqui.',
	'REASON_REMOVED'				=> 'A razão foi apagada por sucesso.',
	'REASON_TITLE'					=> 'Título da Razão',
	'REASON_TITLE_TRANSLATED'		=> 'Título da Razão exibida',
	'REASON_UPDATED'				=> 'A Razão para Denúncia/Negação foi actualizada com sucesso.',

	'USED_IN_REPORTS'				=> 'Utilizado em Denúncias',
));

?>