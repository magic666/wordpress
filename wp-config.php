<?php
/**
 * Podstawowa konfiguracja WordPressa.
 *
 * Ten plik zawiera konfiguracje: ustawień MySQL-a, prefiksu tabel
 * w bazie danych, tajnych kluczy i ABSPATH. Więcej informacji
 * znajduje się na stronie
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Kodeksu. Ustawienia MySQL-a możesz zdobyć
 * od administratora Twojego serwera.
 *
 * Ten plik jest używany przez skrypt automatycznie tworzący plik
 * wp-config.php podczas instalacji. Nie musisz korzystać z tego
 * skryptu, możesz po prostu skopiować ten plik, nazwać go
 * "wp-config.php" i wprowadzić do niego odpowiednie wartości.
 *
 * @package WordPress
 */

// ** Ustawienia MySQL-a - możesz uzyskać je od administratora Twojego serwera ** //
/** Nazwa bazy danych, której używać ma WordPress */
define('DB_NAME', 'word-press');

/** Nazwa użytkownika bazy danych MySQL */
define('DB_USER', 'root');

/** Hasło użytkownika bazy danych MySQL */
define('DB_PASSWORD', '');

/** Nazwa hosta serwera MySQL */
define('DB_HOST', 'localhost');

/** Kodowanie bazy danych używane do stworzenia tabel w bazie danych. */
define('DB_CHARSET', 'utf8');

/** Typ porównań w bazie danych. Nie zmieniaj tego ustawienia, jeśli masz jakieś wątpliwości. */
define('DB_COLLATE', '');

/**#@+
 * Unikatowe klucze uwierzytelniania i sole.
 *
 * Zmień każdy klucz tak, aby był inną, unikatową frazą!
 * Możesz wygenerować klucze przy pomocy {@link https://api.wordpress.org/secret-key/1.1/salt/ serwisu generującego tajne klucze witryny WordPress.org}
 * Klucze te mogą zostać zmienione w dowolnej chwili, aby uczynić nieważnymi wszelkie istniejące ciasteczka. Uczynienie tego zmusi wszystkich użytkowników do ponownego zalogowania się.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ')FzJLV=DS.s&B{|wog`}:os?!6VRiE{,^3a#.<a9#@$nh>SPDPjY8AQ7*m4CTC+g');
define('SECURE_AUTH_KEY',  'x|AlzfIOG d7*35;KAn;Csi5^XWX*+cqZdya>>RxL$oZ4|BIT`.cm`p:O^4,B9b|');
define('LOGGED_IN_KEY',    'F)iZ})p%J8#=GwVnVLdJt4Nm(@FN{9$u)F|2B2p%R45a}8|8HJF8t@! 0NxF^=a6');
define('NONCE_KEY',        '=3yCQ+y?O0C2+_zwX;^Z-RLB,qz`+wRtAig?DgG-!:8a{u/ZrtE` $fHZAbVlc?(');
define('AUTH_SALT',        '}akL|[e>xEQ,W% Z.-%3VgbG0}!vM{Bt}[x8(Ob|O?@m?k7by5b#hH+t/^GD7j +');
define('SECURE_AUTH_SALT', 'X6B6 3k&-a!I$nheG,-(zseO}3Yd(!d[KB,UWCcCn49/-]Rd%*P*&K|p+k]nIkVv');
define('LOGGED_IN_SALT',   '`su<|jVjE(%i|(A?}-io9tO vZl|JGrr[4J)C#tSbwpxl]yxu}Gav5S}_9(@E|@6');
define('NONCE_SALT',       ')QI-fE8^Vsr37Ys>6$QEWU# :po]$CE[1UNB@qtMuK{eLdtLnZJw1kveGgkE^6}N');

/**#@-*/

/**
 * Prefiks tabel WordPressa w bazie danych.
 *
 * Możesz posiadać kilka instalacji WordPressa w jednej bazie danych,
 * jeżeli nadasz każdej z nich unikalny prefiks.
 * Tylko cyfry, litery i znaki podkreślenia, proszę!
 */
$table_prefix  = 'wp_';

/**
 * Dla programistów: tryb debugowania WordPressa.
 *
 * Zmień wartość tej stałej na true, aby włączyć wyświetlanie ostrzeżeń
 * podczas modyfikowania kodu WordPressa.
 * Wielce zalecane jest, aby twórcy wtyczek oraz motywów używali
 * WP_DEBUG w miejscach pracy nad nimi.
 */
define('WP_DEBUG', false);

/* To wszystko, zakończ edycję w tym miejscu! Miłego blogowania! */

/** Absolutna ścieżka do katalogu WordPressa. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Ustawia zmienne WordPressa i dołączane pliki. */
require_once(ABSPATH . 'wp-settings.php');
