<?php
/**
 * WordPress �̊�{�ݒ�
 *
 * ���̃t�@�C���́A�C���X�g�[������ wp-config.php �쐬�E�B�U�[�h�����p���܂��B
 * �E�B�U�[�h������ɂ��̃t�@�C���� "wp-config.php" �Ƃ������O�ŃR�s�[����
 * ���ڕҏW���Ēl����͂��Ă����܂��܂���B
 *
 * ���̃t�@�C���́A�ȉ��̐ݒ���܂݂܂��B
 *
 * * MySQL �ݒ�
 * * �閧��
 * * �f�[�^�x�[�X�e�[�u���ړ���
 * * ABSPATH
 *
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// ����:
// Windows �� "������" �ł��̃t�@�C����ҏW���Ȃ��ł������� !
// ���Ȃ��g����e�L�X�g�G�f�B�^
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF �Q��)
// ���g�p���A�K�� UTF-8 �� BOM �Ȃ� (UTF-8N) �ŕۑ����Ă��������B

// ** MySQL �ݒ� - ���̏��̓z�X�e�B���O�悩����肵�Ă��������B ** //
/** WordPress �̂��߂̃f�[�^�x�[�X�� */
define( 'DB_NAME', 'ezezezez' );

/** MySQL �f�[�^�x�[�X�̃��[�U�[�� */
define( 'DB_USER', 'ez-user' );

/** MySQL �f�[�^�x�[�X�̃p�X���[�h */
define( 'DB_PASSWORD', 'yFB2S|TE*X(|' );

/** MySQL �̃z�X�g�� */
define( 'DB_HOST', 'localhost' );

/** �f�[�^�x�[�X�̃e�[�u�����쐬����ۂ̃f�[�^�x�[�X�̕����Z�b�g */
define( 'DB_CHARSET', 'utf8mb4' );

/** �f�[�^�x�[�X�̏ƍ����� (�قƂ�ǂ̏ꍇ�ύX����K�v�͂���܂���) */
define( 'DB_COLLATE', '' );

/**#@+
 * �F�ؗp���j�[�N�L�[
 *
 * ���ꂼ����قȂ郆�j�[�N (���) �ȕ�����ɕύX���Ă��������B
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org �̔閧���T�[�r�X} �Ŏ����������邱�Ƃ��ł��܂��B
 * ��ł��ł��ύX���āA�����̂��ׂĂ� cookie �𖳌��ɂł��܂��B����ɂ��A���ׂẴ��[�U�[�������I�ɍă��O�C�������邱�ƂɂȂ�܂��B
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
 * WordPress �f�[�^�x�[�X�e�[�u���̐ړ���
 *
 * ���ꂼ��Ƀ��j�[�N (���) �Ȑړ�����^���邱�Ƃň�̃f�[�^�x�[�X�ɕ����� WordPress ��
 * �C���X�g�[�����邱�Ƃ��ł��܂��B���p�p�����Ɖ����݂̂��g�p���Ă��������B
 */
$table_prefix = 'ezwp_';

/**
 * �J���҂�: WordPress �f�o�b�O���[�h
 *
 * ���̒l�� true �ɂ���ƁA�J�����ɒ��� (notice) ��\�����܂��B
 * �e�[�}����уv���O�C���̊J���҂ɂ́A���̊J�����ɂ����Ă��� WP_DEBUG ���g�p���邱�Ƃ������������܂��B
 *
 * ���̑��̃f�o�b�O�ɗ��p�ł���萔�ɂ��Ă� Codex ���������������B
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define( 'WP_DEBUG', false );

/* �ҏW���K�v�Ȃ̂͂����܂łł� ! WordPress �ł̃p�u���b�V���O�����y���݂��������B */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );