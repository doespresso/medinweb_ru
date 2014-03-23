<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 15:01:03
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/common/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1381612811532ebeef9e48e9-43211373%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '103ee96c649f4b88f4526bf0336a97c02737d612' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/common/tooltip.tpl',
      1 => 1395142068,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1381612811532ebeef9e48e9-43211373',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tooltip' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532ebeefa02095_92922391',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ebeefa02095_92922391')) {function content_532ebeefa02095_92922391($_smarty_tpl) {?>&nbsp;<?php if ($_smarty_tpl->tpl_vars['tooltip']->value) {?><a class="cm-tooltip<?php if ($_smarty_tpl->tpl_vars['params']->value) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['params']->value, ENT_QUOTES, 'UTF-8');?>
<?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tooltip']->value, ENT_QUOTES, 'UTF-8');?>
"><i class="icon-question-sign"></i></a><?php }?><?php }} ?>
