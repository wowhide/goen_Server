<?php
/**
 * 定数定義
 *
 * comDefine.php
 *
 * @copyright   2014 Digtalspace WOW CO.,Ltd
 * @license
 * @version     1.0.0
 * @link
 * @since       File availabel since Release 1.0.0
 *
 */

//定数
//Smartyテンプレートインクルードパス
/*Xサーバーでサブドメインの場合*/
define('SMARTY_TEMP_PATH', '../../folder_app_ms-goen/application/smarty/');
/**/
/*サブドメインでない場合
define('SMARTY_TEMP_PATH', '../application/smarty/');
/**/

//かずやアプリ故人データフォルダパス
/*Xサーバーでサブドメインの場合*/
define('APP_DATA_PATH','../../folder_app_ms-goen/deceased_data/');
/**/
/*サブドメインでない場合
define('APP_DATA_PATH','../deceased_data/');
/**/

//かずやアプリバックアップデータフォルダパス
/*Xサーバーでサブドメインの場合*/
define('APP_BACKUP_PATH','../../folder_app_ms-goen/backup_data/');
/**/
/*サブドメインでない場合
define('APP_BACKUP_PATH','../backup_data/');
/**/

//かずやアプリ通知情報画像一時フォルダパス
/*Xサーバーでサブドメインの場合*/
define('NOTICE_IMG_TEMP_PATH','../../folder_app_ms-goen/notice_info_temp_image/');
/**/
/*サブドメインでない場合
define('NOTICE_IMG_TEMP_PATH','../notice_info_temp_image/');
/**/

//かずやアプリ通知情報画像フォルダパス
/*Xサーバーでサブドメインの場合*/
define('NOTICE_IMG_PATH','../../folder_app_ms-goen/notice_info_image/');
/**/
/*サブドメインでない場合
define('NOTICE_IMG_PATH','../notice_info_image/');
/**/

//かずやアプリ故人画像一時フォルダパス
/*Xサーバーでサブドメインの場合*/
define('DECEASED_DATA_TEMP_PATH','../../folder_app_ms-goen/deceased_temp_data/');
/**/
/*サブドメインでない場合
define('DECEASED_DATA_TEMP_PATH','../deceased_temp_data/');
/**/

//かずやアプリ故人画像フォルダパス
/*Xサーバーでサブドメインの場合*/
define('DECEASED_DATA_PATH','../../folder_app_ms-goen/deceased_data/');
/**/
/*サブドメインでない場合
define('DECEASED_DATA_PATH','../deceased_data/');
/**/

//ライブラリパス
/*Xサーバーでサブドメインの場合*/
define('LIBRARY_PATH','../../library/');
/**/
/*サブドメインでない場合
define('LIBRARY_PATH','../library/');
/**/

//PDFパス
/*Xサーバーでサブドメインの場合*/
define('PDF_PATH','../../folder_app_ms-goen/pdf/');
/**/
/*サブドメインでない場合
define('PDF_PATH','../pdf/');
/**/

//登録方法
//入力
define('ENTRY_METHOD_INPUT', 1);
//URL
define('ENTRY_METHOD_URL', 2);

//発行状態コード
define('ISSUE_STATE_CODE_SUBMIT', 1);
define('ISSUE_STATE_CODE_IN', 2);
define('ISSUE_STATE_CODE_COMP', 3);
define('ISSUE_STATE_CODE_DEL', 4);

//画像有無
//有
define('IMAGE_EXISTENCE_FLG_YES', 1);

//PDFファイル名
define('PDF_FILE_NAME', 'かずやアプリのご案内_%s様.pdf');
