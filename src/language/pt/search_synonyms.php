<?php 
/** 
* 
* search_synonyms.php [Português]
* 
* @package language 
* @version $Id: search_synonyms.php, v 1.0 Outubro/2009
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Versão do phpBB: 3.0.6
* @Traduzido por: http://phpbbportugal.com
*/

if (!defined('IN_PHPBB'))
{
   exit;
}

$synonyms = array( 
	'abençoar'				=> 'abençoado', 
	'abreviar'				=> 'reduzir', 
	'acomodar'				=> 'relaxar', 
	'administração'			=> 'sustentação', 
	'altura'				=> 'estatura', 
	'andré'					=> 'nome', 
	'anemia'				=> 'doença', 
	'anémico'				=> 'doente', 
	'anestesia'				=> 'sensibilidade', 
	'anexo'					=> 'ficheiro', 
	'anúncios'				=> 'notícias', 
	'apatia'				=> 'indiferença', 
	'armadura'				=> 'uniforme', 
	'arqueiro'				=> 'guerreiro', 
	'arqueologia'			=> 'antiguidade', 
	'arqueozologia'			=> 'arqueológico', 
	'ártico'				=> 'do norte', 
	'atendimento'			=> 'recepção', 
	'ausência'				=> 'falta', 
	'avião'					=> 'aeronave', 

	'biologia'				=> 'natural', 

	'calendário'			=> 'data', 
	'cancelado'				=> 'eliminado', 
	'capturar'				=> 'prender', 
	'carro'					=> 'automóvel', 
	'catálogo'				=> 'guia', 
	'cenozóico'				=> 'antigo', 
	'centro'				=> 'meio', 
	'churrasco'				=> 'churrasqueira', 
	'cinza'					=> 'grisalho', 
	'comissão'				=> 'multidão', 
	'conceder'				=> 'entregar', 
	'concordar'				=> 'combinar', 
	'conexo'				=> 'ligação', 
	'cor'					=> 'tom', 
	'criar'					=> 'gerar', 
	'curriculum'			=> 'currículo',

	'defesa'				=> 'protecção', 
	'desconhecido' 			=> 'ignorado', 
	'descrio'				=> 'características', 
	'desculpas'				=> 'perdão', 
	'desenvolver'			=> 'progredir', 
	'disciplina'	 		=> 'comportamento', 

	'enciclopédia'  		=> 'obras', 
	'equipes'				=> 'grupos', 
	'escritos'				=> 'textos', 
	'estético'				=> 'visual', 
	'estrangeiro'			=> 'externo', 
	'etimologia'			=> 'etimolgico', 
	'executando'			=> 'rodando', 
	'existência'			=> 'vida', 
	'exorbitante'			=> 'exagero', 
	'exuberante'	 		=> 'abundante', 

	'favorito'				=> 'predilecto', 
	'feto'					=> 'ser vivo', 
	'ficção'				=> 'efeitos', 
	'flores'				=> 'florescente', 

	'galera'				=> 'pessoal', 
	'genealogia'			=> 'genealógica', 
	'ginecologia'			=> 'ginecologista', 
	'gramática'				=> 'língua', 
	'guerrilha'				=> 'revolta', 

	'haver'					=> 'existir', 
	'hemácia'				=> 'hemoglobina', 
	'hematina'				=> 'glóbulos', 
	'hematite'				=> 'células', 
	'hematologia'			=> 'sangue', 
	'hipoteca'				=> 'hipotecar', 
	'honra'					=> 'dignidade', 

	'ID'					=> 'identificação', 
	'inocular'				=> 'inoculação', 
	'instalar'				=> 'instalação', 
	'irrelevante'			=> 'sem importância', 

	'jan'					=> 'janeiro', 
	'jóias'					=> 'bijuteria', 
	'julgamento'			=> 'sentença', 

	'km'					=> 'quilómetro', 

	'lazer'					=> 'descanço', 
	'licença'				=> 'autorização', 
	'limite'				=> 'fronteira', 
	'liquificar'			=> 'líquido', 

	'm'						=> 'metro', 
	'manutenção'			=> 'gerência',
	'mar'					=> 'março', 
	'medieval'				=> 'clássico',
	'milha'					=> 'medida', 
	'miscelânea'			=> 'mistura', 

	'números'				=> 'quarenta',

	'ocorrência'			=> 'acontecimento', 
	'ofensa'				=> 'mágoa',
	'ok'					=> 'correcto', 
	'omissão'				=> 'falta', 
	'organizar'				=> 'arrumar', 
	'optimizar'				=> 'óptimo', 

	'país'					=> 'não', 
	'paleografia'			=> 'decifrar', 
	'paleolítico'			=> 'idade da pedra', 
	'paleontologia'			=> 'fósseis', 
	'paleontólogo'			=> 'paleontologista', 
	'paleozóico'			=> 'era primária', 
	'panfleto'				=> 'bilhete', 
	'paralelo'				=> 'semelhante', 
	'parlamento'			=> 'assembleia', 
	'PC'					=> 'computador', 
	'pediatra'				=> 'infantil', 
	'pediatria'				=> 'crianças', 
	'peralta'				=> 'peralta', 
	'perodontia'			=> 'parodontia', 
	'phpBB'					=> 'phpBB.com',
	'pijamas'				=> 'vestes', 
	'porto'					=> 'parada', 
	'possuir'				=> 'ter', 
	'praticar'				=> 'desempenhar', 
	'projecto'				=> 'programa',
	'vc'					=> 'você',
	'tb'					=> 'também',
	'tbr'					=> 'trabalhar',
	'provisório'			=> 'temporário', 
	'psi'					=> 'psicologia',

	'guito'					=> 'dinheiro',

	'questionário'			=> 'interrogatório', 

	'rarefazer'				=> 'dilatar', 
	'receber'				=> 'aceitar', 
	'recomendar'			=> 'aconselhar', 
	'registo'				=> 'cadastro', 
	'resistência'			=> 'relutância', 
	'resumir'				=> 'sintetizar', 
	'reunião'				=> 'comité', 
	'rotulado'				=> 'nomeado', 

	'sabor'					=> 'gosto', 
	'salvador'				=> 'herói', 
	'separar'				=> 'dividir', 
	'set'					=> 'setembro', 
	'sincero'				=> 'verdadeiro', 
	'sincronizar'			=> 'ajustar', 
	'substituído'			=> 'trocado', 
	'sucesso'				=> 'êxito', 
	'superintendente'		=> 'supervisor', 
	'surpresa'				=> 'inesperado', 

	'teatro'				=> 'cinema', 
	'trabalhador'			=> 'funcionário', 
	'trabalhadores'			=> 'funcionários', 
	'trabalho'				=> 'emprego', 
	'tradução'				=> 'adaptação', 
	'transferido'			=> 'transmitido', 

	'usual'					=> 'comum', 

	'valor'					=> 'nota', 
	'vencer'				=> 'derrotar', 
	'verificar'				=> 'verificar', 
	'vigor'					=> 'vitalidade', 
	'visível'				=> 'notável',
	'vol'					=> 'volume',



); 
?>