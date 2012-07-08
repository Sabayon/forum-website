<?php
/**
*
* mcp [Bahasa Indonesia]
*
* @package language
* @version $Id: common.php 2009 Sastra Manurung
* @copyright (c) 2009 Zourbuth Studio
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
	'ACTION'				=> 'Tindakan',
	'ACTION_NOTE'			=> 'Tindakan/Catat',
	'ADD_FEEDBACK'			=> 'Berikan umpan balik',
	'ADD_FEEDBACK_EXPLAIN'	=> 'Jika anda ingin menambahkan laporan di sini, silahkan isi di bawah ini. Gunakanlah huruf terang; HTML, BBCode, dsb. tidak boleh digunakan.',
	'ADD_WARNING'			=> 'Tambahkan peringatan',
	'ADD_WARNING_EXPLAIN'	=> 'Untuk mengirim peringatan ke pengguna ini, silahkan isi di bawah ini. Gunakanlah huruf terang; HTML, BBCode, dsb. tidak boleh digunakan.',
	'ALL_ENTRIES'			=> 'Semua masukan',
	'ALL_NOTES_DELETED'		=> 'Berhasil menyingkirkan semua catatan pengguna.',
	'ALL_REPORTS'			=> 'Semua laporan',
	'ALREADY_REPORTED'		=> 'Post ini sudah dilaporkan.',
	'ALREADY_WARNED'		=> 'Sebuah peringatan sudah dikeluarkan untuk post ini.',
	'APPROVE'				=> 'Setujui',
	'APPROVE_POST'			=> 'Setujui post',
	'APPROVE_POST_CONFIRM'	=> 'Apakah anda yakin ingin menyetujui post ini?',
	'APPROVE_POSTS'			=> 'Setujui post-post',
	'APPROVE_POSTS_CONFIRM'	=> 'Apakah anda yakin ingin menyetujui post-post yang dipilih ini?',

	'CANNOT_MOVE_SAME_FORUM'=> 'Anda tidak dapat memindahkan sebuah topik ke forum yang sudah dimasukkan/ada.',
	'CANNOT_WARN_ANONYMOUS'	=> 'Anda tidak dapat memperingatkan tamu yang belum terdaftar.',
	'CANNOT_WARN_SELF'		=> 'Anda tidak dapat memperingatkan diri anda sendiri.',
	'CAN_LEAVE_BLANK'		=> 'Bisa dibiarkan kosong.',
	'CHANGE_POSTER'			=> 'Ubah yang mempost',
	'CLOSE_REPORT'			=> 'Tutup laporan',
	'CLOSE_REPORT_CONFIRM'	=> 'Apakah anda yakin ingin menutup laporan yang dipilih?',
	'CLOSE_REPORTS'			=> 'Tutup laporan-laporan',
	'CLOSE_REPORTS_CONFIRM'	=> 'Apakah anda yakin ingin menutup laporan-laporan yang dipilih?',

	'DELETE_POSTS'				=> 'Hapus post-post',
	'DELETE_POSTS_CONFIRM'		=> 'Apakah anda yakin ingin menghapus post-post ini?',
	'DELETE_POST_CONFIRM'		=> 'Apakah anda yakin ingin menghapus post ini?',
	'DELETE_REPORT'				=> 'Hapus laporan',
	'DELETE_REPORT_CONFIRM'		=> 'Apakah anda yakin ingin menghapus laporan yang dipilih?',
	'DELETE_REPORTS'			=> 'Hapus laporan-laporan',
	'DELETE_REPORTS_CONFIRM'	=> 'Apakah anda yakin ingin menghapus laporan-laporan yang dipilih?',
	'DELETE_SHADOW_TOPIC'		=> 'Hapus topik bayangan',
	'DELETE_TOPICS'				=> 'Hapus topik-topik yang dipilih',
	'DELETE_TOPICS_CONFIRM'		=> 'Apakah anda yankin ingin menghapus topik-topik yang dipilih?',
	'DELETE_TOPIC_CONFIRM'		=> 'Apakah anda yankin ingin menghapus topik yang dipilih?',
	'DISAPPROVE'				=> 'Tidak menyetujui',
	'DISAPPROVE_REASON'			=> 'Alasan untuk tidak menyetujui',
	'DISAPPROVE_POST'			=> 'Tidak menyetujui post',
	'DISAPPROVE_POST_CONFIRM'	=> 'Apakah anda yakin untuk tidak menyetujui post ini?',
	'DISAPPROVE_POSTS'			=> 'Tidak menyetujui post-post',
	'DISAPPROVE_POSTS_CONFIRM'	=> 'Apakah anda yakin untuk tidak menyetujui post-post ini?',
	'DISPLAY_LOG'				=> 'Tampilkan masukan-masukan sebelumnya',
	'DISPLAY_OPTIONS'			=> 'Tampilkan pilihan-pilihan',

	'EMPTY_REPORT'					=> 'Anda harus memasukkan gambaran pada saat memilih alasan ini.',
	'EMPTY_TOPICS_REMOVED_WARNING'	=> 'Harap dicatat bahwa satu atau beberapa topik telah disingkirkan dari database karena kosong atau sudah kosong.',

	'FEEDBACK'				=> 'Umpan balik',
	'FORK'					=> 'Salin',
	'FORK_TOPIC'			=> 'Salin topik',
	'FORK_TOPIC_CONFIRM'	=> 'Apakah anda yakin ingin menyalin topik ini?',
	'FORK_TOPICS'			=> 'Salin topik yang dipilih',
	'FORK_TOPICS_CONFIRM'	=> 'Apakah anda yakin ingin menyalin topik-topik yang dipilih?',
	'FORUM_DESC'			=> 'Gambaran',
	'FORUM_NAME'			=> 'Nama forum',
	'FORUM_NOT_EXIST'		=> 'Forum yang anda pilih tidak ada.',
	'FORUM_NOT_POSTABLE'	=> 'Forum yang anda pilih tidak dapat dipost.',
	'FORUM_STATUS'			=> 'Status forum',
	'FORUM_STYLE'			=> 'Gaya forum',

	'GLOBAL_ANNOUNCEMENT'	=> 'Pengumuman global',

	'IP_INFO'				=> 'Informasi alamat IP',
	'IPS_POSTED_FROM'		=> 'Alamat IP-kan pengguna ini sudah mempost dari',

	'LATEST_LOGS'				=> '5 tindakan terakhir yang dikeluarkan',
	'LATEST_REPORTED'			=> '5 laporan terakhir',
	'LATEST_UNAPPROVED'			=> '5 post terakhir yang menunggu persetujuan',
	'LATEST_WARNING_TIME'		=> 'Peringatan terakhir yang dikeluarkan',
	'LATEST_WARNINGS'			=> '5 pereinganan terakhir',
	'LEAVE_SHADOW'				=> 'Tinggalkan topik bayangan di tempatnya',
	'LIST_REPORT'				=> '1 laporan',
	'LIST_REPORTS'				=> '%d laporan',
	'LOCK'						=> 'Kunci',
	'LOCK_POST_POST'			=> 'Kunci post',
	'LOCK_POST_POST_CONFIRM'	=> 'Apakah anda yakin ingin mencegah pengubahan terhadap post ini?',
	'LOCK_POST_POSTS'			=> 'Kunci post-post yang dipilih',
	'LOCK_POST_POSTS_CONFIRM'	=> 'Apakah anda yakin ingin mencegah pengubahan terhadap post-post ini?',
	'LOCK_TOPIC_CONFIRM'		=> 'Apakah anda yakin ingin mengunci topik ini?',
	'LOCK_TOPICS'				=> 'Kunci topik yang dipilih',
	'LOCK_TOPICS_CONFIRM'		=> 'Apakah anda yakin ingin mengunci semua topik yang dipilih?',
	'LOGS_CURRENT_TOPIC'		=> 'Sekarang ini melihat log dari:',
	'LOGIN_EXPLAIN_MCP'			=> 'Untuk memoderasi forum ini anda harus login.',
	'LOGVIEW_VIEWTOPIC'			=> 'Lihat topik',
	'LOGVIEW_VIEWLOGS'			=> 'Tampilkan log topik',
	'LOGVIEW_VIEWFORUM'			=> 'Lihat forum',
	'LOOKUP_ALL'				=> 'Cari semua IP',
	'LOOKUP_IP'					=> 'Cari IP',

	'MARKED_NOTES_DELETED'		=> 'Berhasil menyingkirkan semua catatan pengguna yang ditandai.',

	'MCP_ADD'						=> 'Tambahkan sebuah peringatan',

	'MCP_BAN'					=> 'Larangan',
	'MCP_BAN_EMAILS'			=> 'Larang e-mail',
	'MCP_BAN_IPS'				=> 'Larang IP',
	'MCP_BAN_USERNAMES'			=> 'Larang nama pengguna',

	'MCP_LOGS'						=> 'Log Moderator',
	'MCP_LOGS_FRONT'				=> 'Halaman muka',
	'MCP_LOGS_FORUM_VIEW'			=> 'Log Forum',
	'MCP_LOGS_TOPIC_VIEW'			=> 'Log Topik',

	'MCP_MAIN'						=> 'Utama',
	'MCP_MAIN_FORUM_VIEW'			=> 'Lihat forum',
	'MCP_MAIN_FRONT'				=> 'Halaman muka',
	'MCP_MAIN_POST_DETAILS'			=> 'Keterangan post',
	'MCP_MAIN_TOPIC_VIEW'			=> 'Lihat topik',
	'MCP_MAKE_ANNOUNCEMENT'			=> 'Ubah menjadi “Pengumuman”',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'	=> 'Apakah anda yakin ingin mengubah topik ini menjadi “Pengumuman”?',
	'MCP_MAKE_ANNOUNCEMENTS'		=> 'Ubah menjadi “Pengumuman”',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'=> 'Apakah anda yakin ingin mengubah topik-topik ini menjadi “Pengumuman”?',
	'MCP_MAKE_GLOBAL'				=> 'Ubah menjadi “Pengumuman Global”',
	'MCP_MAKE_GLOBAL_CONFIRM'		=> 'Apakah anda yakin ingin mengubah topik ini menjadi “Pengumuman Global”?',
	'MCP_MAKE_GLOBALS'				=> 'Ubah menjadi “Pengumuman Global”',
	'MCP_MAKE_GLOBALS_CONFIRM'		=> 'Apakah anda yakin ingin mengubah topik-topik ini menjadi “Pengumuman Global”?',
	'MCP_MAKE_STICKY'				=> 'Ubah menjadi “Sticky”',
	'MCP_MAKE_STICKY_CONFIRM'		=> 'Apakah anda yakin ingin mengubah topik ini menjadi “Sticky”?',
	'MCP_MAKE_STICKIES'				=> 'Ubah menjadi “Stickies”',
	'MCP_MAKE_STICKIES_CONFIRM'		=> 'Apakah anda yakin ingin mengubah topik-topik ini menjadi “Stickies”?',
	'MCP_MAKE_NORMAL'				=> 'Ubah menjadi “Topik Standar”',
	'MCP_MAKE_NORMAL_CONFIRM'		=> 'Apakah anda yakin ingin mengubah topik ini menjadi “Topik Standar”?',
	'MCP_MAKE_NORMALS'				=> 'Ubah menjadi “Topik Standar”',
	'MCP_MAKE_NORMALS_CONFIRM'		=> 'Apakah anda yakin ingin mengubah topik-topik ini menjadi “Topik Standar”?',

	'MCP_NOTES'						=> 'Catat pengguna',
	'MCP_NOTES_FRONT'				=> 'Halaman muka',
	'MCP_NOTES_USER'				=> 'Keterngan pengguna',

	'MCP_POST_REPORTS'				=> 'Laporan-laporan yang dikeluarkan di post ini',

	'MCP_REPORTS'					=> 'Post-post yang dilaporkan',
	'MCP_REPORT_DETAILS'			=> 'Keterangan-keterangan laporan',
	'MCP_REPORTS_CLOSED'			=> 'Tutup laporan-laporan',
	'MCP_REPORTS_CLOSED_EXPLAIN'	=> 'Ini daftar dari semua laporan tentang post-post yang sebelumnya yang telah dipecahkan.',
	'MCP_REPORTS_OPEN'				=> 'Buka laporan-laporan',
	'MCP_REPORTS_OPEN_EXPLAIN'		=> 'Ini adalah daftar dari semua laporan yang masih ditangani.',

	'MCP_QUEUE'								=> 'Antrian moderasi',
	'MCP_QUEUE_APPROVE_DETAILS'				=> 'Setujui keterngan-keterangan',
	'MCP_QUEUE_UNAPPROVED_POSTS'			=> 'Post-post menunggu persetujuan',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Ini adalah daftar dari semua post yang membutuhkan persetujuan sebelum ditampilkan kepengguna.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'			=> 'Topik menunggu persetujuan',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Ini adalah daftar dari semua topik yang membutuhkan persetujuan sebelum ditampilkan kepengguna.',

	'MCP_VIEW_USER'			=> 'Lihat peringatan-peringatan untuk pengguna yang spesifik',

	'MCP_WARN'				=> 'Peringatan',
	'MCP_WARN_FRONT'		=> 'Halaman muka',
	'MCP_WARN_LIST'			=> 'Daftar peringatan-peringatan',
	'MCP_WARN_POST'			=> 'Peringatkan untuk post sepesifik',
	'MCP_WARN_USER'			=> 'Peringatkan pengguna',

	'MERGE_POSTS'			=> 'Gabungkan post-post',
	'MERGE_POSTS_CONFIRM'	=> 'Apakah anda yakin ingin menggabungkan post-post yang dipilih?',
	'MERGE_TOPIC_EXPLAIN'	=> 'Dengan menggunakan formulir berikut anda dapat menggabungkan post-post yang dipilih ke topik yang lain. Post-post ini tidak akan diurutkan dan akan ditampilkan jika pengguna mempost ke topik yang baru.<br />Silahkan tentukan id topik tujuan atau klik di “Pilih topik” untuk mencari.',
	'MERGE_TOPIC_ID'		=> 'Nomor identifiaksi topik tujuan',
	'MERGE_TOPICS'			=> 'Gabungkan topik-topik',
	'MERGE_TOPICS_CONFIRM'	=> 'Apakah anda yakin ingin menggabungkan topik-topik yang dipilih?',
	'MODERATE_FORUM'		=> 'Moderat forum',
	'MODERATE_TOPIC'		=> 'Moderat topik',
	'MODERATE_POST'			=> 'Moderat post',
	'MOD_OPTIONS'			=> 'Pilihan-pilihan moderator',
	'MORE_INFO'				=> 'Informasi lebih lanjut',
	'MOST_WARNINGS'			=> 'Pengguna dengan peringatan paling banyak',
	'MOVE_TOPIC_CONFIRM'	=> 'Apakah anda yakin ingin memindahkan topik ini ke forum yang baru?',
	'MOVE_TOPICS'			=> 'Pindahkan topik-topik yang dipilih',
	'MOVE_TOPICS_CONFIRM'	=> 'Apakah anda yakin ingin memindahkan topik-topik ini ke forum yang baru?',

	'NOTIFY_POSTER_APPROVAL'		=> 'Beritahukan poster tentang persetujuan?',
	'NOTIFY_POSTER_DISAPPROVAL'		=> 'Beritahukan poster tentang penolakan?',
	'NOTIFY_USER_WARN'				=> 'Beritahukan poster tentang peringatan?',
	'NOT_MODERATOR'					=> 'Anda bukan seorang moderator di forum ini.',
	'NO_DESTINATION_FORUM'			=> 'Silahkan pilih sebuah forum untuk tujuan.',
	'NO_DESTINATION_FORUM_FOUND'	=> 'Tidak ada forum tujuan yang tersedia.',
	'NO_ENTRIES'					=> 'Tidak ada log masukan di periode ini.',
	'NO_FEEDBACK'					=> 'Tidak ada umpan balik untuk pengguna ini.',
	'NO_FINAL_TOPIC_SELECTED'		=> 'Anda harus memilih sebuah topik tujuan untuk penggabungan post.',
	'NO_MATCHES_FOUND'				=> 'Tidak ditemukan yang cocok.',
	'NO_POST'						=> 'Anda harus memilih sebuah post untuk memperingatkan pengguna.',
	'NO_POST_REPORT'				=> 'Post ini tidak dilaporkan.',
	'NO_POST_SELECTED'				=> 'Anda harus memilih paling tidak satu post untuk melaksanakan tindakan ini.',
	'NO_REASON_DISAPPROVAL'			=> 'Mohon berikan alasan yang tepat untuk penolakan.',
	'NO_REPORT'						=> 'Tidak ada laporan ditemukan',
	'NO_REPORTS'					=> 'Tidak ada laporan-laporan ditemukan',
	'NO_REPORT_SELECTED'			=> 'Anda harus memilih paling sedilitnya satu laporan untuk melaksanakan tindakan ini.',
	'NO_TOPIC_ICON'					=> 'Tidak ada',
	'NO_TOPIC_SELECTED'				=> 'Anda harus memilih paling tidak satu topik untuk melaksakan tindakan ini.',
	'NO_TOPICS_QUEUE'				=> 'Tidak ada topik-topik yang menunggu persetujuan.',

	'ONLY_TOPIC'			=> 'Hanya topik “%s”',
	'OTHER_USERS'			=> 'Pengguna-pengguna yang lain mempost dari IP ini',

	'POSTER'					=> 'Poster',
	'POSTS_APPROVED_SUCCESS'	=> 'Post-post yang dipilih telah disetujui.',
	'POSTS_DELETED_SUCCESS'		=> 'Post-post yang dipilih telah berhasil disingkirkan dari database.',
	'POSTS_DISAPPROVED_SUCCESS'	=> 'Post-post yang dipilih telah ditolak.',
	'POSTS_LOCKED_SUCCESS'		=> 'Post-post yang dipilih telah berhasil dikunci.',
	'POSTS_MERGED_SUCCESS'		=> 'Post-post yang dipilih telah digabungkan.',
	'POSTS_UNLOCKED_SUCCESS'	=> 'Post-post yang dipilih telah berhasil dibuka.',
	'POSTS_PER_PAGE'			=> 'Post-post perhalaman',
	'POSTS_PER_PAGE_EXPLAIN'	=> '(Pilih ke 0 untuk melihat semua post.)',
	'POST_APPROVED_SUCCESS'		=> 'Post yang dipilih telah disetujui.',
	'POST_DELETED_SUCCESS'		=> 'Post yang dipilih telah berhasil disingkirkan dari database.',
	'POST_DISAPPROVED_SUCCESS'	=> 'Post yang dipilih telah ditolak.',
	'POST_LOCKED_SUCCESS'		=> 'Post berhasil dikunci.',
	'POST_NOT_EXIST'			=> 'Post yang anda minta tidak ada.',
	'POST_REPORTED_SUCCESS'		=> 'Post yang dipilih telah berhasil dilaporkan.',
	'POST_UNLOCKED_SUCCESS'		=> 'Post berhasil dikunci.',

	'READ_USERNOTES'			=> 'Catatan pengguna',
	'READ_WARNINGS'				=> 'Peringatan-peringatan pengguna',
	'REPORTER'					=> 'Pelapor',
	'REPORTED'					=> 'Dilaporkan',
	'REPORTED_BY'				=> 'Dilaporkan oleh',
	'REPORTED_ON_DATE'			=> 'pada',
	'REPORTS_CLOSED_SUCCESS'	=> 'Laporan yang dipilih telah berhasil dikunci.',
	'REPORTS_DELETED_SUCCESS'	=> 'Laporan-laporan yang dipilih telah berhasil dihapus.',
	'REPORTS_TOTAL'				=> 'Totalnya ada <strong>%d</strong> laporan untuk ditinjau.',
	'REPORTS_ZERO_TOTAL'		=> 'Tidak ada laporan-laporan yang ditinjau.',
	'REPORT_CLOSED'				=> 'Laporan ini sudah ditutup.',
	'REPORT_CLOSED_SUCCESS'		=> 'Laporan yang dipilih telah berhasil ditutup.',
	'REPORT_DELETED_SUCCESS'	=> 'Laporan yang dipilih telah berhasil dihapus.',
	'REPORT_DETAILS'			=> 'Keterangan laporan',
	'REPORT_MESSAGE'			=> 'Laporkan pesan ini',
	'REPORT_MESSAGE_EXPLAIN'	=> 'Gunakan halaman ini untuk melaporkan pesan yang dipilih. Pada dasarnya pelaporan harus digunakan apabila pesan tersebut diluar dari peraturan forum.',
	'REPORT_NOTIFY'				=> 'Beritahukan saya',
	'REPORT_NOTIFY_EXPLAIN'		=> 'Beritahukan saya apablia laporanku diatur.',
	'REPORT_POST_EXPLAIN'		=> 'Gunakan form ini untuk melaporkan post yang dipilih ke moderator-moderator forum dan administrator. Pada dasarnya pelaporan harus digunakan apabila pesan tersebut diluar dari peraturan forum.',
	'REPORT_REASON'				=> 'Alasan laporan',
	'REPORT_TIME'				=> 'Waktu laporan',
	'REPORT_TOTAL'				=> 'Totalnya ada <strong>1</strong> laporan untuk ditinjau.',
	'RESYNC'					=> 'Samakan kembali',
	'RETURN_MESSAGE'			=> '%sKembali kepesan%s',
	'RETURN_NEW_FORUM'			=> '%sPergi ke forum baru%s',
	'RETURN_NEW_TOPIC'			=> '%sPergi ke topik baru%s',
	'RETURN_POST'				=> '%sKembali ke post%s',
	'RETURN_QUEUE'				=> '%sKembali ke antrian%s',
	'RETURN_REPORTS'			=> '%sKembali ke laporan%s',
	'RETURN_TOPIC_SIMPLE'		=> '%sKEmbali ke topik%s',

	'SEARCH_POSTS_BY_USER'				=> 'Cari post-post berdasarkan',
	'SELECT_ACTION'						=> 'Pilih tindakan yang diinginkan',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Silahkan pilih forum yang anda inginkan untuk ditampilkan pengumuman global.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Satu atau lebih topik-topik yang dipilih adalah pengumuman global. Silahkan pilih forum yang anda inginkan untuk ditampilkan.',
	'SELECT_MERGE'						=> 'Pilih untuk digabungkan',
	'SELECT_TOPICS_FROM'				=> 'Pilih topik dari',
	'SELECT_TOPIC'						=> 'Pilih topik',
	'SELECT_USER'						=> 'Pilih user',
	'SORT_ACTION'						=> 'Log tindakan',
	'SORT_DATE'							=> 'Tanggal',
	'SORT_IP'							=> 'Alamat IP',
	'SORT_WARNINGS'						=> 'Peringatan-peringatan',
	'SPLIT_AFTER'						=> 'Pisahkan kedepan topik dari post yang dipilih',
	'SPLIT_FORUM'						=> 'Forum untuk topik baru',
	'SPLIT_POSTS'						=> 'Pisahkan post-post yang dipilih',
	'SPLIT_SUBJECT'						=> 'Judul topik baru',
	'SPLIT_TOPIC_ALL'					=> 'Pisahkan topik dari post-post yang dipilih',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Apakah anda yakin ingin memisahkan topik ini?',
	'SPLIT_TOPIC_BEYOND'				=> 'Pisahkan topik pada post yang dipilih',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Apakah anda yakin ingin memeisahkan topik ini pada post yang dipilih?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Dengan menggunakan formulir dibawah ini anda dapat memisahkan topik menjadi dua, dengan memilih post-post secara individu ataupun dengan memisahkan pada post yang dipilih.',

	'THIS_POST_IP'				=> 'IP untuk post ini',
	'TOPICS_APPROVED_SUCCESS'	=> 'Topik-topik yang dipilih telah disetujui.',
	'TOPICS_DELETED_SUCCESS'	=> 'Topik-topik yang dipilih telah berhasil disingkirkan dari database.',
	'TOPICS_DISAPPROVED_SUCCESS'=> 'Topik-topik yang dipilih telah ditolak.',
	'TOPICS_FORKED_SUCCESS'		=> 'Topik-topik yang dipilih telah berhasil disalin.',
	'TOPICS_LOCKED_SUCCESS'		=> 'Topik-topik yang dipilih telah dikunci.',
	'TOPICS_MOVED_SUCCESS'		=> 'Topik-topik yang dipilih telah berhasil dipindahkan.',
	'TOPICS_RESYNC_SUCCESS'		=> 'Topik-topik yang dipilih telah disamakan kembali.',
	'TOPICS_TYPE_CHANGED'		=> 'Jenis topik telah berhasil diubah.',
	'TOPICS_UNLOCKED_SUCCESS'	=> 'Topik-topik yang dipilih telah dibuka.',
	'TOPIC_APPROVED_SUCCESS'	=> 'Topik yang dipilih telah disetujui.',
	'TOPIC_DELETED_SUCCESS'		=> 'Topik yang dipilih telah berhasil disingkirkan dari database.',
	'TOPIC_DISAPPROVED_SUCCESS'	=> 'Topik yang dipilih telah ditolak.',
	'TOPIC_FORKED_SUCCESS'		=> 'Topik yang dipilih telah berhasil disalin.',
	'TOPIC_LOCKED_SUCCESS'		=> 'Topik yang dipilih telah berhasil dikunci.',
	'TOPIC_MOVED_SUCCESS'		=> 'Topik yang dipilih telah berhasil dipindahkan.',
	'TOPIC_NOT_EXIST'			=> 'Topik yang dipilih tidak ada.',
	'TOPIC_RESYNC_SUCCESS'		=> 'Topik yang dipilih telah disamakan kembali.',
	'TOPIC_SPLIT_SUCCESS'		=> 'Topik yang dipilih telah dipisahkan.',
	'TOPIC_TIME'				=> 'Waktu topik',
	'TOPIC_TYPE_CHANGED'		=> 'Jenis topik telah berhasil diubah.',
	'TOPIC_UNLOCKED_SUCCESS'	=> 'Topik yang dipilih telah dibuka.',
	'TOTAL_WARNINGS'			=> 'Total Peringatan',

	'UNAPPROVED_POSTS_TOTAL'		=> 'Totalnya ada <strong>%d</strong> post yang menunggu persetujuan.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'	=> 'Tidak ada post-post yang menunggu persetujuan.',
	'UNAPPROVED_POST_TOTAL'			=> 'Totalnya ada <strong>1</strong> post yang menunggu persetujuan.',
	'UNLOCK'						=> 'Dibuka',
	'UNLOCK_POST'					=> 'Post dibuka',
	'UNLOCK_POST_EXPLAIN'			=> 'Ijinkan pengubahan',
	'UNLOCK_POST_POST'				=> 'Buka post',
	'UNLOCK_POST_POST_CONFIRM'		=> 'Apakah anda yakin ingin mengijinkan pengubahan terhadap post ini?',
	'UNLOCK_POST_POSTS'				=> 'Buka post-post yang dilih',
	'UNLOCK_POST_POSTS_CONFIRM'		=> 'Apakah anda yakin ingin mengijinkan pengubahan terhadap post-post ini?',
	'UNLOCK_TOPIC'					=> 'Buka topik',
	'UNLOCK_TOPIC_CONFIRM'			=> 'Apakah anda yakin ingin membuka topik ini?',
	'UNLOCK_TOPICS'					=> 'Buka topik-topik yang dipilih',
	'UNLOCK_TOPICS_CONFIRM'			=> 'Apakah anda yakin ingin membuka semua topik yang dipilih?',
	'USER_CANNOT_POST'				=> 'Anda tidak dapat mempost di forum ini.',
	'USER_CANNOT_REPORT'			=> 'Anda tidak dapat melaporkan post-post di forum ini.',
	'USER_FEEDBACK_ADDED'			=> 'Umpan balik pengguna telah berhasil ditambakan.',
	'USER_WARNING_ADDED'			=> 'Pengguna telah berhasil diperingatkan.',

	'VIEW_DETAILS'			=> 'Lihat keterangan',
	'VIEW_POST'				=> 'LIhat post',

	'WARNED_USERS'			=> 'Pengguna yang diperingatkan',
	'WARNED_USERS_EXPLAIN'	=> 'Ini adalah daftar pengguna dengan peringatan yang belum habis waktunya.',
	'WARNING_PM_BODY'		=> 'Berikut ini adalah sebuah peringatan yang telah dikeluarkan kepada anda oleh administrator atau moserator situs ini.[quote]%s[/quote]',
	'WARNING_PM_SUBJECT'	=> 'Peringatan halaman dikeluarkan',
	'WARNING_POST_DEFAULT'	=> 'Ini adalah peringatan yang anda buat sehubungan dengan post berikut: %s .',
	'WARNINGS_ZERO_TOTAL'	=> 'Tidak ada peringatan.',

	'YOU_SELECTED_TOPIC'	=> 'Anda memilih topik nomor %d: %s.',

	'report_reasons'		=> array(
		'TITLE'	=> array(
			'WAREZ'		=> 'Warez',
			'SPAM'		=> 'Spam',
			'OFF_TOPIC'	=> 'Diluar topik',
			'OTHER'		=> 'Lainnya',
		),
		'DESCRIPTION' => array(
			'WAREZ'		=> 'Post ini mengandung links ke software ilegal atau bajakan.',
			'SPAM'		=> 'Post yang dilaporkan hanya memiliki tujuan untuk mengiklankan website atau produk lain.',
			'OFF_TOPIC'	=> 'Post yang dilaporkan di luar dari topik.',
			'OTHER'		=> 'Post yang dilaporkan tidak cocok ke kategori manapun, silahkan mengisi informasi lebih lanjut.',
		)
	),
));

?>