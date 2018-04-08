<?php /* Smarty version Smarty-3.1.19, created on 2017-09-08 12:50:51
         compiled from "../../folder_app_ms-kazuya/application/smarty/templates/mail_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29889089959b2139b05dae7-07041717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '962026977def20c6d9a771850e2ffec791a576fa' => 
    array (
      0 => '../../folder_app_ms-kazuya/application/smarty/templates/mail_order.tpl',
      1 => 1504834167,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29889089959b2139b05dae7-07041717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'managerName' => 0,
    'chargeName' => 0,
    'souke' => 0,
    'deceasedName' => 0,
    'datetime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59b2139b0a5135_27207531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59b2139b0a5135_27207531')) {function content_59b2139b0a5135_27207531($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['managerName']->value;?>
様よりQRコードの発注がありました。

担当者　：<?php echo $_smarty_tpl->tpl_vars['chargeName']->value;?>

葬家様　：<?php echo $_smarty_tpl->tpl_vars['souke']->value;?>

故人様　：<?php echo $_smarty_tpl->tpl_vars['deceasedName']->value;?>

発注日時：<?php echo $_smarty_tpl->tpl_vars['datetime']->value;?>

<?php }} ?>
