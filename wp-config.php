<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'ezezezez' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'ez-user' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'yFB2S|TE*X(|' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '+5li]rbncwbSXTG4h1TiK?{M$~5{h}!!{YG14Or3;axoKJDRbShjk=4*ZHA`e6IQ' );
define( 'SECURE_AUTH_KEY',  '3.R=@TXHH;z*Xhc?nn}p6p]q7_0xG0.JsC`6$kVK7`J,$PK{~K 6|CEZ5)4v8]1p' );
define( 'LOGGED_IN_KEY',    'z~M[^Fw@u![`c]Iru_l7X+sz#Z%g&Cg%Pk7.+B<(GqV#Y2CP6(1HfqT];Dig=LTK' );
define( 'NONCE_KEY',        '>ab7&=k#wfNok1N^>|GM*T[kfU%*nt]57e+A;A Wi;xx8rH/~m(HT@m VGLY9-!|' );
define( 'AUTH_SALT',        'hS~:$`lv1 42)Zm|=G.N5&9Qs.OekNs^U-H,!l0Vm!h_H@y1Nm)LN^]OCls1l;I.' );
define( 'SECURE_AUTH_SALT', 'z.|&C2i-jdz v1 xF;kdi$]t2}DT};XRtYd{MZ=7;y,l6lV.TsU;JBSEF#A-yD@G' );
define( 'LOGGED_IN_SALT',   'Cm0sJ|KB-4bW(G?Wvvr7{A-Y;=ImDYb^e6^l<wDGYt(zrE~b-Dbw6i5F#VN&W8=(' );
define( 'NONCE_SALT',       '5tfE/Clfjjh_zp`}#]hnx8WMFO3v+=lB*dci/^0vi(d,]][6#xiOp[xoQ;`CYz;u' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'ezwp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );