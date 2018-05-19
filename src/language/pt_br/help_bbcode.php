<?php
/**
*
* help_bbcode [Portuguese-Brasil]
* @portuguese version $Id: $ phpBB 3.0.0 - 1.0.0
* @package language: Brazilian Portuguese
* @original version $Id: help_bbcode.php,v 1.27 2007/10/04 15:07:24 acydburn Exp $
* @copyright (c) 2007 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @translator: phpBB Brasil - http://www.phpBBrasil.com.br/ - 2007-12-13 - 15:00
*/

/**
*/
if (!defined('IN_PHPBB'))
{
	exit;
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
$help = array(
	array(
		0 => '--',
		1 => 'Introdu&ccedil;&atilde;o'
	),
	array(
		0 => 'O que &eacute; BBCode?',
		1 => 'BBCode &eacute; uma implementa&ccedil;&atilde;o especial da linguagem HTML. A possibilidade de se usar BBCode nas suas mensagens &eacute; determinada pelo Administrador do F&oacute;rum. Adicionalmente, voc&ecirc; poder&aacute; desativar o BBCode em cada mensagem, assinalando em “Desativar BBCode”, abaixo da caixa principal de cada mensagem. O pr&oacute;prio BBCode &eacute; similar em estilo ao HTML, as TAGs s&atilde;o inclu&iacute;das entre colchetes “[exemplo]”, em vez de “&lt;exemplo&gt;”, proporcionando uma maior facilidade na formata&ccedil;&atilde;o de suas mensagens. A tarefa de adicionar BBCode &agrave;s suas mensagens &eacute; facilitada pelo uso de um painel colocado imediatamente acima &agrave; caixa principal das mensagens, onde voc&ecirc; pode escolher e aplicar os v&aacute;rios itens para o c&oacute;digo que pretenda aplicar. Apesar da exist&ecirc;ncia desse painel, tenha certeza que este guia lhe ser&aacute; &uacute;til.'
	),
	array(
		0 => '--',
		1 => 'Formatando Texto'
	),
	array(
		0 => 'Como criar texto em negrito, it&aacute;lico e sublinhado',
		1 => 'O BBCode inclui TAGs que lhe permitem mudar rapidamente o estilo b&aacute;sico do texto. Isto &eacute; poss&iacute;vel das seguintes formas: <ul><li>Para tornar uma parte do texto em negrito, basta inclu&iacute;-la entre as TAGs <strong>[b][/b]</strong>, ou seja: <br /><br /><strong>[b]</strong>Ol&aacute;<strong>[/b]</strong><br /><br />passar&aacute; a ser <strong>Ol&aacute;</strong></li><li>. Para sublinhar use <strong>[u][/u]</strong>, por exemplo:<br /><br /><strong>[u]</strong>Bom Dia<strong>[/u]</strong><br /><br />passa a ser <span style="text-decoration: underline">Bom Dia</span></li><li>. Para tornar o texto em it&aacute;lico use <strong>[i][/i]</strong>, ou seja:<br /><br /> Isto &eacute; <strong>[i]</strong>&Oacute;timo!<strong>[/i]</strong><br /><br /> resulta em: Isto &eacute; <i>&Oacute;timo!</i></li></ul>'
	),
	array(
		0 => 'Como mudar a cor ou o tamanho do texto',
		1 => 'Para alterar a cor ou o tamanho do texto devem ser usadas as seguintes TAGs. Ter em mente que a forma como aparecer&aacute; no monitor de cada visitante depende do navegador ou do sistema que use: <ul><li> A mudan&ccedil;a da cor do texto &eacute; feita englobando-o em <strong>[color=][/color]</strong>. Tanto pode especificar o nome de uma cor conhecida (ter&aacute; que ser em ingl&ecirc;s) (por exemplo, red, blue, yellow, etc.) ou especificando o seu valor hexadecimal, ou seja, #FFFFFF, #000000. Por exemplo, para criar texto em vermelho, voc&ecirc; poder&aacute; usar:<br /><br /><strong>[color=red]</strong>Ol&aacute;!<strong>[/color]</strong><br /><br />ou<br /><br /><strong>[color=#FF0000]</strong>Ol&aacute;!<strong>[/color]</strong><br /><br /> Ambos resultar&atilde;o em <span style="color:red">Ol&aacute;!</span></li><li> A mudan&ccedil;a do tamanho do texto pode ser feita de uma forma similar, usando <strong>[size=][/size]</strong>. Esta TAG est&aacute; dependente do template do phpBB que o usu&aacute;rio est&aacute; usando, mas o formato recomendado &eacute; um valor num&eacute;rico representando o tamanho de texto em porcentagem (%), come&ccedil;ando em 20 (t&atilde;o pequeno que praticamente n&atilde;o se v&ecirc;) at&eacute; 200 (enorme). Por exemplo:<br /><br /><strong>[size=30]</strong>PEQUENO<strong>[/size]</strong><br /><br /> normalmente surge como <span style="font-size:30%;">PEQUENO</span><br /><br /> enquanto que:<br /><br /><strong>[size=200]</strong>ENORME!<strong>[/size]</strong><br /><br /> ser&aacute; <span style="font-size:200%;">ENORME!</span></li></ul>'
	),
	array(
		0 => 'Posso combinar TAGs de formato?',
		1 => 'Sim, claro que pode, por exemplo, para chamar a aten&ccedil;&atilde;o de algu&eacute;m, voc&ecirc; poder&aacute; escrever:<br /><br /><strong>[size=200][color=red][b]</strong>OLHE PARA MIM!<strong>[/b][/color][/size]</strong><br /><br /> que ir&aacute; aparecer como <span style="color:red;font-size:200%;"><strong>OLHE PARA MIM!</strong></span><br /><br /> No entanto, n&atilde;o recomendamos o uso de muito texto da forma que acabamos de descrever! Lembre-se que depende de voc&ecirc;, o autor da mensagem, assegurar que os c&oacute;digos sejam colocados corretamente. Por exemplo, isto est&aacute; incorreto:<br /><br /><strong>[b][u]</strong>Isto est&aacute; errado<strong>[/b][/u]</strong>'
	),
	array(
		0 => '--',
		1 => 'Citar e produzir texto de largura fixa'
	),
	array(
		0 => 'Citar texto em respostas',
		1 => 'H&aacute; duas formas de reproduzir texto previamente feito (normalmente uma r&eacute;plica de uma mensagem anterior), com ou sem refer&ecirc;ncia.<ul><li>Quando utiliza a fun&ccedil;&atilde;o Citar para responder a uma mensagem no f&oacute;rum, note que o texto dessa mensagem &eacute; adicionado ao corpo da mensagem inclu&iacute;do em um bloco <strong>[quote=""][/quote]</strong>. Este m&eacute;todo permite-lhe citar com uma refer&ecirc;ncia a uma pessoa ou o que voc&ecirc; decida colocar! Por exemplo, para citar uma pe&ccedil;a de texto que Mr. Blobby escreveu, voc&ecirc; escrever&aacute;:<br /><br /><strong>[quote="Mr. Blobby"]</strong>O texto que Mr. Blobby escreveu ir&aacute; aqui<strong>[/quote]</strong><br /><br /> No resultado ser&aacute; adicionado automaticamente, &quot;Mr. Blobby escreveu:&quot; antes do texto citado. Note que voc&ecirc; <strong>deve</strong> incluir as aspas &quot;&quot; em volta do nome que deseja citar, eles n&atilde;o s&atilde;o opcionais.</li><li>O segundo m&eacute;todo permite-lhe citar algo sem refer&ecirc;ncia a algu&eacute;m ou algo. Para o fazer, insira o texto entre as TAGs <strong>[quote][/quote]</strong>. Quando verificar a mensagem ver&aacute; que simplesmente surge, Cita&ccedil;&atilde;o: antes do texto.</li></ul>'
	),
	array(
		0 => 'Produzir c&oacute;digo ou texto com uma largura fixa',
		1 => 'Se desejar inserir uma por&ccedil;&atilde;o de c&oacute;digo, ou de fato algo que requeira uma largura fixa, por exemplo, tipo de fonte Courier que englobe o texto entre as TAGs <strong>[code][/code]</strong>, como por exemplo<br /><br /><strong>[code]</strong>echo &quot;Isto &eacute; algum c&oacute;digo&quot;;<strong>[/code]</strong><br /><br />O formato usado entre as TAGs <strong>[code][/code]</strong> &eacute; preservado quando posteriormente for visto. A sintaxe PHP com caracteres real&ccedil;ados podem ser habilitados utilizando-se das TAGs <strong>[code=php][/code]</strong> e &eacute; recomendado quando se &eacute; postado amostras de c&oacute;digos PHP para uma melhor leitura.'
	),
	array(
		0 => '--',
		1 => 'Gerar listas'
	),
	array(
		0 => 'Criar uma lista sem ordem espec&iacute;fica',
		1 => 'O BBCode aceita dois tipos de listas, sem ordem e ordenada. S&atilde;o basicamente o mesmo que em HTML. Uma lista sem ordem produz cada item de uma forma seq&uuml;encial, um a seguir ao outro,  precedendo-o um caractere constante. Para criar, basta usar as TAGs <strong>[list][/list]</strong> e colocar cada item entre elas, usando <strong>[*]</strong> antes de cada um. Por exemplo, para listar as suas cores favoritas, poder&aacute; escrever:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Vermelho<br /><strong>[*]</strong>Azul<br /><strong>[*]</strong>Amarelo<br /><strong>[/list]</strong><br /><br /> Isto ir&aacute; aparecer como:<ul><li>Vermelho</li><li>Azul</li><li>Amarelo</li></ul>'
	),
	array(
		0 => 'Criar uma lista ordenada',
		1 => 'O segundo tipo de listas, a ordenada, proporciona-lhe controle do que v&aacute; aparecer antes de cada item. Para criar uma lista ordenada voc&ecirc; usar&aacute; <strong>[list=1][/list]</strong> de modo que ser&aacute; criada uma lista num&eacute;rica ou, <strong>[list=a][/list]</strong>, para uma lista alfab&eacute;tica. Da mesma forma que para o tipo de lista n&atilde;o ordenada, os itens s&atilde;o precedidos de <strong>[*]</strong>. Por exemplo:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Ir &agrave;s compras<br /><strong>[*]</strong>Comprar um computador novo<br /><strong>[*]</strong>Insultar o computador ao ficar bloqueado<br /><strong>[/list]</strong><br /><br />produzir&aacute; o seguinte:<ol style="list-style-type: arabic-numbers"><li>Ir &agrave;s compras</li><li>Comprar um computador novo</li><li>Insultar o computador ao ficar bloqueado</li></ol> Enquanto que para uma lista alfab&eacute;tica voc&ecirc; usar&aacute;:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>A primeira resposta<br /><strong>[*]</strong>A segunda resposta<br /><strong>[*]</strong>A terceira resposta<br /><strong>[/list]</strong><br /><br />resultando em <ol style="list-style-type: lower-alpha"><li>A primeira resposta</li><li>A segunda resposta</li><li>A terceira resposta</li></ol>'
	),
	array(
		0 => '--',
		1 => 'Criar atalhos'
	),
	array(
		0 => 'Criar um atalho para outra p&aacute;gina/site',
		1 => 'O phpBB BBCode aceita um n&uacute;mero vari&aacute;vel de formas para criar URIs (Indicadores de Recursos Uniformes) melhor conhecidos como URLs.<ul><li>A primeira dessas formas &eacute; usando a TAG <strong>[url=][/url]</strong>, o que quer que escreva depois do sinal = faz com que o conte&uacute;do dessa TAG aja como um URL. Por exemplo, para fazer uma liga&ccedil;&atilde;o ou atalho &agrave; p&aacute;gina phpBB.com usa-se:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Visite o phpBB!<strong>[/url]</strong><br /><br /> Isto ir&aacute; resultar no atalho seguinte: <a href="http://www.phpbb.com/">Visite o phpBB!</a>. Veja que a p&aacute;gina ir&aacute; abrir na mesma janela ou em uma janela nova, dependendo das prefer&ecirc;ncias de browser dos usu&aacute;rios.</li><li> Se pretende que o URL esteja &agrave; vista, fa&ccedil;a simplesmente isto:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Tal resultar&aacute; no seguinte atalho: <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li> Adicionalmente, o phpBB possui algo chamado <i>Atalhos M&aacute;gicos</i>, recurso que permite transformar automaticamente qualquer URL escrito com uma sintaxe correta em um atalho sem ser necess&aacute;rio especificar quaisquer TAGs ou mesmo o prefixo http://. Por exemplo, escrevendo www.phpbb.com na sua mensagem, automaticamente resultar&aacute; em <a href="http://www.phpbb.com/">www.phpbb.com/</a> quando vir essa mensagem.</li><li> A mesma coisa se aplica aos endere&ccedil;os de e-mail, podendo especificar o endere&ccedil;o. Por exemplo:<br /><br /><strong>[email]</strong>ninguem@domain.adr<strong>[/email]</strong><br /><br />que resultar&aacute; em <a href="mailto:ninguem@domain.adr">ninguem@domain.adr</a>, ou pode apenas escrever ninguem@domain.adr na sua mensagem que ser&aacute; automaticamente convertido em atalho quando a mensagem for guardada.</li></ul> Como em todos os c&oacute;digos BBCode aqui apresentados pode-se misturar URLs com quaisquer outras TAGs. Como por exemplo, <strong>[img][/img]</strong> (ver o item seguinte), <strong>[b][/b]</strong>, etc. Em rela&ccedil;&atilde;o ao formato das TAGs est&aacute; totalmente dependente de voc&ecirc; assegurar a ordem correta de in&iacute;cio e fechamento, por exemplo:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br /><span style="text-decoration: underline">n&atilde;o &eacute;</span> correto, o que pode conduzir &agrave; sua mensagem ser removida por algum moderador ou Administrador. Como tal tenha cuidado.'
	),
	array(
		0 => '--',
		1 => 'Mostrar imagens em mensagens'
	),
	array(
		0 => 'Adicionar uma imagem a uma mensagem',
		1 => 'O phpBB BBCode incorpora uma TAG para incluir imagens nas suas mensagens. Dois fatores muito importantes devem ser lembrados quando se usa estas TAGs: Primeiro, que a maioria dos usu&aacute;rios preferem n&atilde;o ver muitas imagens em mensagens; segundo, a imagem que pretende mostrar dever&aacute; existir na internet (por exemplo, n&atilde;o pode existir apenas no seu computador, a menos que tenha um servidor de p&aacute;ginas na web!). Para mostrar uma imagem voc&ecirc; ter&aacute; que envolver a URL da imagem com as TAGs <strong>[img][/img]</strong>. Por exemplo:<br /><br /><strong>[img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img]</strong><br /><br /> Como deve ter notado na se&ccedil;&atilde;o da URL acima, &eacute; poss&iacute;vel englobar uma imagem com a TAG <strong>[url][/url]</strong> se assim o desejar, ou seja, <br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />ir&aacute; produzir:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>'
	),
	array(
		0 => 'Adicionando anexos em uma mensagem',
		1 => 'Os anexos agora podem ser adicionados em qualquer parte de uma mensagem usando a nova TAG BBCode <strong>[attachment=][/attachment]</strong>, se a funcionalidade de anexos estiver habilitada pelo administrador do f&oacute;rum e se voc&ecirc; tiver as permiss&otilde;es apropriadas para criar anexos. Dentro da &aacute;rea de postagem h&aacute; um caixa (respectivamente um bot&atilde;o) para se adicionar os anexos.'
	),
	array(
		0 => '--',
		1 => 'Outros assuntos'
	),
	array(
		0 => 'Posso criar minhas pr&oacute;prias TAGs?',
		1 => 'Se voc&ecirc; &eacute; um administrador deste f&oacute;rum e tem as pr&oacute;prias permiss&otilde;es, voc&ecirc; pode somar BBCodes adicionais pela se&ccedil;&atilde;o de Personaliza&ccedil;&atilde;o de BBCodes.'
	)
);

?>
