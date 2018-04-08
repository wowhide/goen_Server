<?php /* Smarty version Smarty-3.1.19, created on 2018-04-02 18:37:28
         compiled from "../../folder_app_ms-goen/application/smarty/templates/include/mng_header.html" */ ?>
<?php /*%%SmartyHeaderCode:8310763185abdc3ec3c7b43-25002125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3bacb649f21c87f36b8c94843cca23bd74b95e8b' => 
    array (
      0 => '../../folder_app_ms-goen/application/smarty/templates/include/mng_header.html',
      1 => 1522661846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8310763185abdc3ec3c7b43-25002125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5abdc3ec3cafe8_94135519',
  'variables' => 
  array (
    'managerAuth' => 0,
    'morticianName' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abdc3ec3cafe8_94135519')) {function content_5abdc3ec3cafe8_94135519($_smarty_tpl) {?><!-- <h1>ご縁アプリ管理システム</h1>
 -->
    <?php if ($_smarty_tpl->tpl_vars['managerAuth']->value==1) {?>
    	<h1>デジタルスペースワウ＿ご縁アプリ管理システム_管理者権限での操作</h1>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['managerAuth']->value!=1) {?>
    	<?php if (empty($_smarty_tpl->tpl_vars['morticianName']->value)==false) {?>
    	<h1><?php echo $_smarty_tpl->tpl_vars['morticianName']->value;?>
様_ご縁アプリ管理システム</h1>
    	<?php }?>
    	<?php if (!empty($_smarty_tpl->tpl_vars['morticianName']->value)==false) {?>
    	<h1>ご縁アプリ管理システム</h1>
    	<?php }?>
    <?php }?>

<?php }} ?>
