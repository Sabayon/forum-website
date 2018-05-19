<?php
/**
*
* captcha_qa [English]
*
* @package language
* @version $Id: captcha_qa.php 9966 2009-08-12 15:12:03Z Kellanved $
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
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

$lang = array_merge($lang, array(
	'CAPTCHA_QA'				=> 'Q&amp;A CAPTCHA',
	'CONFIRM_QUESTION_EXPLAIN'	=> 'Tämän kysymyksen tarkoitus on tunnistaa ja estää automaattiset rekisteröitymiset.',
	'CONFIRM_QUESTION_WRONG'	=> 'Annoit väärän vastauksen kysymykseen.',

	'QUESTION_ANSWERS'			=> 'Vastaukset',
	'ANSWERS_EXPLAIN'			=> 'Laita tähän oikeat vastaukset. Yksi per rivi.',
	'CONFIRM_QUESTION'			=> 'Kysymys',

	'ANSWER'					=> 'Vastaus',
	'EDIT_QUESTION'				=> 'Muokkaa kysymystä',
	'QUESTIONS'					=> 'Kysymyksiä',
	'QUESTIONS_EXPLAIN'			=> 'Käyttäjiltä kysytään nämä kysymykset rekisteröinni yhteydessä Tämän liitännäisen käyttäminen vaatii vähintään yhden kysymyksen lisäämisen keskustelufoorumin oletuskielellä. Näiden kysymysten tulee olla tarpeeksi helppoja käyttäjille, mutta silti vaikeita botille, joka käyttää Googlea™ vastaukseen. Parhaimman tuloksen saat, kun käytät useaa kysymystä ja vaihtelet niitä välillä. Tarkka vastaus vaatii oikeinkirjoituksen ja myös isot ja pienet kirjaimet.',
	'QUESTION_DELETED'			=> 'Kysymys poistettu',
	'QUESTION_LANG'				=> 'Kieli',
	'QUESTION_LANG_EXPLAIN'		=> 'Kieli jolla tämä kysymys ja vastaus kirjoitetaan.',
	'QUESTION_STRICT'			=> 'Tarkka vastaus',
	'QUESTION_STRICT_EXPLAIN'	=> 'Mikäli tämä on käytössä vaaditaan merkkien täsmääminen täydellisesti mukaanluettuna välilyönnit ja kirjainkoko.',

	'QUESTION_TEXT'				=> 'Kysymys',
	'QUESTION_TEXT_EXPLAIN'		=> 'Tämä kysymys kysytään rekisteröitymisen yhteyedssä',

	'QA_ERROR_MSG'				=> 'Ole hyvä ja täytä kaikki kentät ja anna ainakin yksi oikea vastaus.',
));

?>