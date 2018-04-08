<?php /* Smarty version Smarty-3.1.19, created on 2018-04-03 17:00:34
         compiled from "../../folder_app_ms-goen/application/smarty/templates/mail_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8408746425ac334a2025979-49968341%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e8337103f90c853e3ff6d11dc02edce67749c7b' => 
    array (
      0 => '../../folder_app_ms-goen/application/smarty/templates/mail_order.tpl',
      1 => 1522387636,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8408746425ac334a2025979-49968341',
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
  'unifunc' => 'content_5ac334a20682e2_19994694',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac334a20682e2_19994694')) {function content_5ac334a20682e2_19994694($_smarty_tpl) {?><?php echo $_smarty_tpl->tpl_vars['managerName']->value;?>
様よりQRコードの発注がありました。

担当者　：<?php echo $_smarty_tpl->tpl_vars['chargeName']->value;?>

葬家様　：<?php echo $_smarty_tpl->tpl_vars['souke']->value;?>

故人様　：<?php echo $_smarty_tpl->tpl_vars['deceasedName']->value;?>

発注日時：<?php echo $_smarty_tpl->tpl_vars['datetime']->value;?>

<?php }} ?>
