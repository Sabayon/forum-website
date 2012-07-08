<?php
/**
*
* mcp [Italian]
*
* @package language
* @version $Id: mcp.php 9854 2009-07-25 18:06:25Z naderman $
* @copyright (c) 2005 phpBB Group
* @copyright (c)  2009 phpBB.it - translated on 2009/11/18
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
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
	'ACTION'				=> 'Azione',
	'ACTION_NOTE'			=> 'Azione/Note',
	'ADD_FEEDBACK'			=> 'Aggiungi feedback',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Se vuoi inviare un feedback compila il seguente modulo. Utilizza solo testo semplice, non sono permessi HTML, BBCode, ecc.',
	'ADD_WARNING'			=> 'Invia richiamo',
	'ADD_WARNING_EXPLAIN'	=> 'Se vuoi inviare un richiamo compila il seguente modulo. Utilizza solo testo semplice, non sono permessi HTML, BBCode, ecc.',
	'ALL_ENTRIES'			=> 'Tutti',
	'ALL_NOTES_DELETED'		=> 'Sono state rimosse tutte le note utente.',
	'ALL_REPORTS'			=> 'Tutte le segnalazioni',
	'ALREADY_REPORTED'		=> 'Questo messaggio è già stato segnalato.',
	'ALREADY_REPORTED_PM'	=> 'Questo messaggio privato è già stato segnalato.',
	'ALREADY_WARNED'		=> 'Questo messaggio ha già ricevuto un richiamo.',
	'APPROVE'				=> 'Approva',
	'APPROVE_POST'			=> 'Approva messaggio',
	'APPROVE_POST_CONFIRM'	=> 'Sei sicuro di voler approvare questo messaggio?',
	'APPROVE_POSTS'			=> 'Approva messaggi',
	'APPROVE_POSTS_CONFIRM'	=> 'Sei sicuro di voler approvare questi messaggi?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Non puoi spostare l’argomento nello stesso forum a cui già appartiene.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Non puoi inviare richiami ad utenti ospiti non iscritti.',
	'CANNOT_WARN_SELF'		=> 'Non puoi inviare un richiamo a te stesso.',
	'CAN_LEAVE_BLANK'		=> 'Questo può essere lasciato in bianco.',
	'CHANGE_POSTER'			=> 'Cambia mittente',
	'CLOSE_PM_REPORT'		=> 'Chiudi segnalazione MP',
	'CLOSE_PM_REPORT_CONFIRM'	=> 'Sei sicuro di voler chiudere la segnalazione selezionata del MP?',
	'CLOSE_PM_REPORTS'		=> 'Chiudi segnalazioni MP',
	'CLOSE_PM_REPORTS_CONFIRM'	=> 'Sei sicuro di voler chiudere le segnalazioni selezionate dei MP?',
	'CLOSE_REPORT'			=> 'Chiudi segnalazione',
	'CLOSE_REPORT_CONFIRM'	=> 'Sei sicuro di voler chiudere la segnalazione selezionata?',
	'CLOSE_REPORTS'			=> 'Chiudi segnalazioni',
	'CLOSE_REPORTS_CONFIRM'	=> 'Sei sicuro di voler chiudere le segnalazioni selezionate?',

	'DELETE_PM_REPORT'			=> 'Cancella segnalazione MP',
	'DELETE_PM_REPORT_CONFIRM'	=> 'Sei sicuro di voler cancellare la segnalazione selezionata del MP?',
	'DELETE_PM_REPORTS'			=> 'Cancella segnalazioni MP',
	'DELETE_PM_REPORTS_CONFIRM'	=> 'Sei sicuro di voler cancellare le segnalazioni selezionate dei MP?',
	'DELETE_POSTS'				=> 'Cancella messaggi',
	'DELETE_POSTS_CONFIRM'		=> 'Sei sicuro di voler cancellare i messaggi selezionati?',
	'DELETE_POST_CONFIRM'		=> 'Sei sicuro di voler cancellare questo messaggio?',
	'DELETE_REPORT'				=> 'Cancella segnalazione',
	'DELETE_REPORT_CONFIRM'		=> 'Sei sicuro di voler cancellare la segnalazione selezionata?',
	'DELETE_REPORTS'			=> 'Cancella segnalazioni',
	'DELETE_REPORTS_CONFIRM'	=> 'Sei sicuro di voler cancellare le segnalazioni selezionate?',
	'DELETE_SHADOW_TOPIC'		=> 'Cancella argomento ombra',
	'DELETE_TOPICS'				=> 'Cancella argomenti selezionati',
	'DELETE_TOPICS_CONFIRM'		=> 'Sei sicuro di voler cancellare questi argomenti?',
	'DELETE_TOPIC_CONFIRM'		=> 'Sei sicuro di voler cancellare questo argomento?',
	'DISAPPROVE'				=> 'Disapprova',
	'DISAPPROVE_REASON'			=> 'Motivo della disapprovazione',
	'DISAPPROVE_POST'			=> 'Disapprova messaggio',
	'DISAPPROVE_POST_CONFIRM'	=> 'Sei sicuro di voler disapprovare questo messaggio?',
	'DISAPPROVE_POSTS'			=> 'Disapprova messaggi',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Sei sicuro di voler disapprovare questi messaggi?',
	'DISPLAY_LOG'				=> 'Visualizza ultimi',
	'DISPLAY_OPTIONS'			=> 'Visualizza opzioni',

	'EMPTY_REPORT'					=> 'Devi inserire una descrizione quando selezioni questo motivo.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Attenzione, uno o più messaggi sono stati rimossi perchè vuoti.',

	'FEEDBACK'				=> 'Feedback',
	'FORK'					=> 'Copia',
	'FORK_TOPIC'			=> 'Copia argomento',
	'FORK_TOPIC_CONFIRM'	=> 'Sei sicuro di voler copiare questo argomento?',
	'FORK_TOPICS'			=> 'Copia argomenti selezionati',
	'FORK_TOPICS_CONFIRM'	=> 'Sei sicuro di voler copiare gli argomenti selezionati?',
	'FORUM_DESC'			=> 'Descrizione',
	'FORUM_NAME'			=> 'Nome forum',
	'FORUM_NOT_EXIST'		=> 'Il forum selezionato non esiste.',
	'FORUM_NOT_POSTABLE'	=> 'Non è possibile inviare messaggi nel forum selezionato.',
	'FORUM_STATUS'			=> 'Stato forum',
	'FORUM_STYLE'			=> 'Stile forum',

	'GLOBAL_ANNOUNCEMENT'	=> 'Annuncio globale',

	'IP_INFO'				=> 'Informazioni indirizzo IP',
	'IPS_POSTED_FROM'		=> 'L’indirizzo IP di questo utente proviene da',

	'LATEST_LOGS'				=> 'Ultime 5 azioni registrate',
	'LATEST_REPORTED'			=> 'Ultime 5 segnalazioni',
	'LATEST_REPORTED_PMS'		=> 'Ultimi 5 MP segnalati',
	'LATEST_UNAPPROVED'			=> 'Ultimi 5 messaggi in attesa di approvazione',
	'LATEST_WARNING_TIME'		=> 'Ultimi richiami inviati',
	'LATEST_WARNINGS'			=> 'Ultimi 5 richiami',
	'LEAVE_SHADOW'				=> 'Lascia l’argomento "ombra" al suo posto',
	'LIST_REPORT'				=> '1 segnalazione',
	'LIST_REPORTS'				=> '%d segnalazioni',
	'LOCK'						=> 'Blocca',
	'LOCK_POST_POST'			=> 'Blocca messaggio',
	'LOCK_POST_POST_CONFIRM'	=> 'Sei sicuro di voler bloccare la modifica di questo messaggio?',
	'LOCK_POST_POSTS'			=> 'Blocca messaggi selezionati',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Sei sicuro di voler bloccare la modifica di questi messaggi?',
	'LOCK_TOPIC_CONFIRM'		=> 'Sei sicuro di voler bloccare questo argomento?',
	'LOCK_TOPICS'				=> 'Blocca argomenti selezionati',
	'LOCK_TOPICS_CONFIRM'		=> 'Sei sicuro di voler bloccare gli argomenti selezionati?',
	'LOGS_CURRENT_TOPIC'		=> 'Stai leggendo i log di:',
	'LOGIN_EXPLAIN_MCP'			=> 'Devi essere loggato per moderare questo forum.',
	'LOGVIEW_VIEWTOPIC'			=> 'Leggi argomento',
	'LOGVIEW_VIEWLOGS'			=> 'Leggi log argomento',
	'LOGVIEW_VIEWFORUM'			=> 'Leggi forum',
	'LOOKUP_ALL'				=> 'Dettagli di tutti gli IP',
	'LOOKUP_IP'					=> 'Dettagli IP',

	'MARKED_NOTES_DELETED'		=> 'Sono state rimosse le note utente selezionate.',

	'MCP_ADD'						=> 'Invia richiamo',

	'MCP_BAN'					=> 'Azioni di Ban',
	'MCP_BAN_EMAILS'			=> 'Ban e-mail',
	'MCP_BAN_IPS'				=> 'Ban IP',
	'MCP_BAN_USERNAMES'			=> 'Ban nome utente',

	'MCP_LOGS'						=> 'Log moderatore',
	'MCP_LOGS_FRONT'				=> 'Prima pagina',
	'MCP_LOGS_FORUM_VIEW'			=> 'Log forum',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Log argomenti',

	'MCP_MAIN'						=> 'Principale',
	'MCP_MAIN_FORUM_VIEW'			=> 'Leggi forum',
	'MCP_MAIN_FRONT'				=> 'Prima pagina',
	'MCP_MAIN_POST_DETAILS'			=> 'Dettagli messaggio',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Leggi argomento',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Modifica in “Annuncio”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Sei sicuro di voler trasformare questo argomento in “Annuncio”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Modifica in “Annunci”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Sei sicuro di voler trasformare gli argomenti selezionati in “Annunci”?',
	'MCP_MAKE_GLOBAL'				=> 'Modifica in “Annuncio globale”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Sei sicuro di voler trasformare questo argomento in “Annuncio globale”?',
	'MCP_MAKE_GLOBALS'				=> 'Modifica in “Annunci globali”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Sei sicuro di voler trasformare gli argomenti selezionati in “Annunci globali”?',
	'MCP_MAKE_STICKY'				=> 'Modifica in “Importante”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Sei sicuro di voler trasformare questo argomento in “Importante”?',
	'MCP_MAKE_STICKIES'				=> 'Modifica in “Importanti”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Sei sicuro di voler trasformare gli argomenti selezionati in “Importanti”?',
	'MCP_MAKE_NORMAL'				=> 'Modifica in “Argomento semplice”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Sei sicuro di voler trasformare questo argomento in “Argomento semplice”?',
	'MCP_MAKE_NORMALS'				=> 'Modifica in “Argomenti semplici”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Sei sicuro di voler trasformare gli argomenti selezionati in “Argomenti semplici”?',

	'MCP_NOTES'						=> 'Note utente',
	'MCP_NOTES_FRONT'				=> 'Prima pagina',
	'MCP_NOTES_USER'				=> 'Dettagli utente',

	'MCP_POST_REPORTS'				=> 'Messaggi segnalati',

	'MCP_PM_REPORTS'				=> 'Messaggi privati segnalati',
	'MCP_PM_REPORT_DETAILS'			=> 'Dettagli segnalazione MP',
	'MCP_PM_REPORTS_CLOSED'			=> 'Segnalazioni MP chiuse',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'	=> 'Questa è una lista di tutte le segnalazioni sui messaggi privati che sono state precedentemente risolte.',
	'MCP_PM_REPORTS_OPEN'			=> 'Apri segnalazioni MP',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'	=> 'Questa è una lista di tutti i messaggi privati segnalati che devono ancora essere gestiti.',
	'MCP_REPORTS'					=> 'Messaggi segnalati',
	'MCP_REPORT_DETAILS'			=> 'Dettagli segnalazioni',
	'MCP_REPORTS_CLOSED'			=> 'Segnalazioni chiuse',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Questa è la lista delle segnalazioni risolte.',
	'MCP_REPORTS_OPEN'				=> 'Segnalazioni aperte',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Questa è la lista delle segnalazioni ancora in corso.',

	'MCP_QUEUE'								=> 'Coda di moderazione',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Dettagli approvazione',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Messaggi in attesa di approvazione',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Questa è la lista dei messaggi che sono in attesa di approvazione prima di essere visibili a tutti gli utenti.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Argomenti in attesa di approvazione',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Questa è la lista degli argomenti che sono in attesa di approvazione prima di essere visibili a tutti gli utenti.',

	'MCP_VIEW_USER'			=> 'Vedi richiami per utente specifico',

	'MCP_WARN'				=> 'Richiami',
	'MCP_WARN_FRONT'		=> 'Prima pagina',
	'MCP_WARN_LIST'			=> 'Lista richiami',
	'MCP_WARN_POST'			=> 'Richiama per messaggio specifico',
	'MCP_WARN_USER'			=> 'Richiama utente',

	'MERGE_POSTS'			=> 'Unisci messaggi',
	'MERGE_POSTS_CONFIRM'	=> 'Sei sicuro di voler unire i messaggi selezionati?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Utilizzando il seguente form puoi unire ad un argomento i messaggi selezionati. I messaggi saranno inseriti come nuovi messaggi dell’autore originale.<br />Inserisci ID dell’argomento di destinazione o clicca il bottone per cercarne uno.',
	'MERGE_TOPIC_ID'		=> 'ID dell’argomento di destinazione',
	'MERGE_TOPICS'			=> 'Unisci argomenti',
	'MERGE_TOPICS_CONFIRM'	=> 'Sei sicuro di voler unire gli argomenti selezionati?',
	'MODERATE_FORUM'		=> 'Modera forum',
	'MODERATE_TOPIC'		=> 'Modera argomento',
	'MODERATE_POST'			=> 'Modera messaggio',
	'MOD_OPTIONS'			=> 'Opzioni moderatore',
	'MORE_INFO'				=> 'Ulteriori informazioni',
	'MOST_WARNINGS'			=> 'Utenti con più richiami',
	'MOVE_TOPIC_CONFIRM'	=> 'Sei sicuro di voler spostare l’argomento in un nuovo forum?',
	'MOVE_TOPICS'			=> 'Sposta gli argomenti selezionati',
	'MOVE_TOPICS_CONFIRM'	=> 'Sei sicuro di voler spostare gli argomenti selezionati in un nuovo forum?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Notificare l’approvazione all’autore?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Notificare la disapprovazione all’autore?',
	'NOTIFY_USER_WARN'				=> 'Notificare i richiami all’utente?',
	'NOT_MODERATOR'					=> 'Non sei moderatore di questo forum.',
	'NO_DESTINATION_FORUM'			=> 'Seleziona una sezione di destinazione.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Non sono disponibili forum di destinazione.',
	'NO_ENTRIES'					=> 'Nessun log per questo periodo.',
	'NO_FEEDBACK'					=> 'Nessun feedback per questo utente.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Devi selezionare un argomento di destinazione a cui unire il messaggio.',
	'NO_MATCHES_FOUND'				=> 'Nessun riscontro trovato.',
	'NO_POST'						=> 'Devi selezionare un messaggio per poter inviare un richiamo all’utente.',
	'NO_POST_REPORT'				=> 'Questo messaggio non ha ricevuto segnalazioni.',
	'NO_POST_SELECTED'				=> 'Devi selezionare almeno un messaggio per poter effettuare l’azione.',
	'NO_REASON_DISAPPROVAL'			=> 'Inserisci una ragione appropriata per la disapprovazione.',
	'NO_REPORT'						=> 'Nessuna segnalazione',
	'NO_REPORTS'					=> 'Nessuna segnalazione trovata',	
	'NO_REPORT_SELECTED'			=> 'Devi selezionare almeno una segnalazione per poter effettuare l’azione.',
	'NO_TOPIC_ICON'					=> 'Nessuna',
	'NO_TOPIC_SELECTED'				=> 'Devi selezionare almeno un argomento per poter effettuare l’azione.',
	'NO_TOPICS_QUEUE'				=> 'Non ci sono argomenti che attendono approvazione',

	'ONLY_TOPIC'			=> 'Solo gli argomenti “%s”',
	'OTHER_USERS'			=> 'L’utente invia i messaggi dall’IP',

	'PM_REPORT_CLOSED_SUCCESS'	=> 'La segnalazione selezionata del MP è stata chiusa.',
	'PM_REPORT_DELETED_SUCCESS'	=> 'La segnalazione selezionata del MP è stata eliminata.',
	'PM_REPORTED_SUCCESS'		=> 'E’ stata inviata una segnalazione per questo messaggio privato.',
	'PM_REPORT_TOTAL'			=> 'In totale c’è <strong>1</strong> segnalazione relativa a un MP da visionare.',
	'PM_REPORTS_TOTAL'			=> 'In totale ci sono <strong>%d</strong> segnalazioni relative a MP da visionare.',
	'PM_REPORTS_ZERO_TOTAL'		=> 'Non ci sono segnalazioni relative a MP da visionare.',
	'PM_REPORT_DETAILS'			=> 'Dettagli segnalazione messaggio privato',
	'POSTER'					=> 'Autore',
	'POSTS_APPROVED_SUCCESS'	=> 'I messaggi selezionati sono stati approvati.',
	'POSTS_DELETED_SUCCESS'		=> 'I messaggi selezionati sono stati rimossi dal database.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'I messaggi selezionati sono stati disapprovati.',
	'POSTS_LOCKED_SUCCESS'		=> 'I messaggi selezionati sono stati bloccati.',
	'POSTS_MERGED_SUCCESS'		=> 'I messaggi selezionati sono stati uniti.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'I messaggi selezionati sono stati sbloccati.',
	'POSTS_PER_PAGE'			=> 'Messaggi per pagina',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(scrivi 0 per vedere tutti i messaggi)',
	'POST_APPROVED_SUCCESS'		=> 'Il messaggio selezionato è stato approvato.',
	'POST_DELETED_SUCCESS'		=> 'Il messaggio selezionato è stato rimosso dal database.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Il messaggio selezionato è stato disapprovato.',
	'POST_LOCKED_SUCCESS'		=> 'Il messaggio selezionato è stato bloccato.',
	'POST_NOT_EXIST'			=> 'Il messaggio richiesto non esiste.',
	'POST_REPORTED_SUCCESS'		=> 'E’ stata inviata una segnalazione per questo messaggio.',
	'POST_UNLOCKED_SUCCESS'		=> 'Il messaggio selezionato è stato sbloccato.',

	'READ_USERNOTES'			=> 'Note utente',
	'READ_WARNINGS'				=> 'Richiami utente',
	'REPORTER'					=> 'Segnalatore',
	'REPORTED'					=> 'Segnalato',
	'REPORTED_BY'				=> 'Segnalato da',
	'REPORTED_ON_DATE'			=> 'il',
	'REPORTS_CLOSED_SUCCESS'	=> 'Le segnalazioni selezionate sono state chiuse.',
	'REPORTS_DELETED_SUCCESS'	=> 'Le segnalazioni selezionate sono state eliminate.',
	'REPORTS_TOTAL'				=> 'In totali ci sono <strong>%d</strong> segnalazioni da visionare.',
	'REPORTS_ZERO_TOTAL'		=> 'Non ci sono segnalazioni da visionare.',
	'REPORT_CLOSED'				=> 'Questa segnalazione è già stata chiusa.',
	'REPORT_CLOSED_SUCCESS'		=> 'La segnalazione selezionata è stata chiusa.',
	'REPORT_DELETED_SUCCESS'	=> 'La segnalazione selezionata è stata eliminata.',
	'REPORT_DETAILS'			=> 'Dettagli segnalazione',
	'REPORT_MESSAGE'			=> 'Invia una segnalazione per questo messaggio',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Usa questo modulo per segnalare il messaggio privato selezionato. Le segnalazioni vengono generalmente inviate per i messaggi che vanno contro le regole del forum. <strong>La segnalazione di un messaggio privato renderà visibile il suo contenuto a tutto lo Staff.</ strong>',
	'REPORT_NOTIFY'				=> 'Notifica',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Ricevi informazione quando la segnalazione verrà visionata.',
	'REPORT_POST_EXPLAIN'		=> 'Usa questo modulo per inviare agli amministratori una segnalazione per il messaggio selezionato. Le segnalazioni vengono generalmente inviate per i messaggi che vanno contro le regole del forum.',
	'REPORT_REASON'				=> 'Motivazione della segnalazione',
	'REPORT_TIME'				=> 'Ora della segnalazione',
	'REPORT_TOTAL'				=> 'In totale c’è <strong>1</strong> segnalazione da visionare.',
	'RESYNC'					=> 'Risincronizza',
	'RETURN_MESSAGE'			=> '%sTorna al messaggio%s',
	'RETURN_NEW_FORUM'			=> '%sVai al nuovo forum%s',
	'RETURN_NEW_TOPIC'			=> '%sVai al nuovo argomento%s',
	'RETURN_PM'					=> '%sVai al messaggio privato%s',
	
	'RETURN_POST'				=> '%sTorna al messaggio%s',
	'RETURN_QUEUE'				=> '%sTorna alla coda%s',
	'RETURN_REPORTS'			=> '%sTorna alle segnalazioni%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sTorna all’argomento%s',

	'SEARCH_POSTS_BY_USER'				=> 'Cerca messaggi per',
	'SELECT_ACTION'						=> 'Seleziona l’azione desiderata',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Seleziona il forum in cui vuoi che l’annuncio globale sia visibile.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Uno o più argomenti sono annunci globali. Seleziona i forum in cui vuoi che siano visibili.',
	'SELECT_MERGE'						=> 'Seleziona per unione',
	'SELECT_TOPICS_FROM'				=> 'Seleziona argomenti da',
	'SELECT_TOPIC'						=> 'Seleziona argomento',
	'SELECT_USER'						=> 'Seleziona utente',
	'SORT_ACTION'						=> 'Log azioni',
	'SORT_DATE'							=> 'Data',
	'SORT_IP'							=> 'Indirizzo IP',
	'SORT_WARNINGS'						=> 'Richiami',
	'SPLIT_AFTER'						=> 'Dividi l’argomento dal messaggio selezionato in avanti',
	'SPLIT_FORUM'						=> 'Forum per il nuovo argomento',
	'SPLIT_POSTS'						=> 'Dividi i messaggi selezionati',
	'SPLIT_SUBJECT'						=> 'Titolo del nuovo argomento',
	'SPLIT_TOPIC_ALL'					=> 'Dividi argomento dai messaggi selezionati',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Sei sicuro di voler dividere questo argomento?',
	'SPLIT_TOPIC_BEYOND'				=> 'Dividi l’argomento dal messaggio selezionato',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Sei sicuro di voler dividere l’argomento dal messaggio selezionato?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Usando il seguente modulo puoi dividere in due l’argomento, sia selezionando individualmente i messaggi da staccare che selezionando il messaggio da dove iniziare la separazione.',

	'THIS_POST_IP'				=> 'IP di questo messaggio',
	'TOPICS_APPROVED_SUCCESS'	=> 'Gli argomenti selezionati sono stati approvati.',
	'TOPICS_DELETED_SUCCESS'	=> 'Gli argomenti selezionati sono stati rimossi dal database.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Gli argomenti selezionati sono stati disapprovati.',
	'TOPICS_FORKED_SUCCESS'		=> 'Gli argomenti selezionati sono stati copiati.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Gli argomenti selezionati sono stati bloccati.',
	'TOPICS_MOVED_SUCCESS'		=> 'Gli argomenti selezionati sono stati spostati.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Gli argomenti selezionati sono stati risincronizzati.',
	'TOPICS_TYPE_CHANGED'		=> 'Il tipo di argomento è stato modificato.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Gli argomenti selezionati sono stati sbloccati.',
	'TOPIC_APPROVED_SUCCESS'	=> 'L’argomento selezionato è stato approvato.',
	'TOPIC_DELETED_SUCCESS'		=> 'L’argomento selezionato è stato rimosso dal database.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'L’argomento selezionato è stato disapprovato.',
	'TOPIC_FORKED_SUCCESS'		=> 'L’argomento selezionato è stato copiato.',
	'TOPIC_LOCKED_SUCCESS'		=> 'L’argomento selezionato è stato bloccato.',
	'TOPIC_MOVED_SUCCESS'		=> 'L’argomento selezionato è stato spostato.',
	'TOPIC_NOT_EXIST'			=> 'L’argomento selezionato non esiste.',
	'TOPIC_RESYNC_SUCCESS'		=> 'L’argomento selezionato è stato risincronizzato.',
	'TOPIC_SPLIT_SUCCESS'		=> 'L’argomento selezionato è stato diviso.',
	'TOPIC_TIME'				=> 'Ora dell’argomento',
	'TOPIC_TYPE_CHANGED'		=> 'Il tipo di argomento è stato modificato.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'L’argomento selezionato è stato sbloccato.',
	'TOTAL_WARNINGS'			=> 'Totale richiami',

	'UNAPPROVED_POSTS_TOTAL'		=> 'In totale ci sono <strong>%d</strong> messaggi in attesa di approvazione.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Non ci sono messaggi in attesa di approvazione.',
	'UNAPPROVED_POST_TOTAL'			=> 'In totale c’è <strong>1</strong> messaggio in attesa di approvazione.',
	'UNLOCK'						=> 'Sblocca',
	'UNLOCK_POST'					=> 'Sblocca messaggio',
	'UNLOCK_POST_EXPLAIN'			=> 'Permetti modifica.',
	'UNLOCK_POST_POST'				=> 'Sblocca messaggio',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Sei sicuro di voler permettere la modifica di questo messaggio?',
	'UNLOCK_POST_POSTS'				=> 'Sblocca i messaggi selezionati',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Sei sicuro di voler permettere la modifica dei messaggi selezionati?',
	'UNLOCK_TOPIC'					=> 'Sblocca argomento',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Sei sicuro di voler sbloccare questo argomento?',
	'UNLOCK_TOPICS'					=> 'Sblocca gli argomenti selezionati',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Sei sicuro di voler sbloccare questi argomenti?',
	'USER_CANNOT_POST'				=> 'Non puoi inviare messaggi in questo forum.',
	'USER_CANNOT_REPORT'			=> 'Non puoi inviare segnalazioni per questo forum.',
	'USER_FEEDBACK_ADDED'			=> 'Feedback utente aggiunto correttamente.',
	'USER_WARNING_ADDED'			=> 'Richiamo inviato correttamente.',

	'VIEW_DETAILS'			=> 'Visualizza dettagli',
	'VIEW_PM'				=> 'Visualizza messaggio privato',
	'VIEW_POST'				=> 'Visualizza messaggio',

	'WARNED_USERS'			=> 'Utenti richiamati',
	'WARNED_USERS_EXPLAIN'	=> 'Questa è una lista di utenti con richiami non scaduti.',
	'WARNING_PM_BODY'		=> 'Questo è un richiamo che ti è stato inviato da un moderatore o da un amministratore. [quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Richiamo',
	'WARNING_POST_DEFAULT'	=> 'Questo è un richiamo riferito al tuo messaggio: %s.',
	'WARNINGS_ZERO_TOTAL'	=> 'Non ci sono richiami.',

	'YOU_SELECTED_TOPIC'	=> 'Hai selezionato l’argomento numero %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Off-topic',
			'OTHER'		=> 'Altro',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Il messaggio contiene collegamenti a siti illegali o di pirateria.',
			'SPAM'		=> 'Il messaggio ha l’unico scopo di promuovere altri siti o attività commerciali.',
			'OFF_TOPIC'	=> 'Il messaggio è fuori tema con le argomentazioni trattate.',
			'OTHER'		=> 'Altre motivazioni, utilizza il campo apposito per la descrizione.',
		)
	),
));

?>