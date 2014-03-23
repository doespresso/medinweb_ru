<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 17:05:45
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/buttons/search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1602024614532edc29ed61a8-28352103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fba2dfe202cec61ac825b9fdaa6acee8204e298e' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/buttons/search.tpl',
      1 => 1395142067,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1602024614532edc29ed61a8-28352103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'but_onclick' => 0,
    'but_href' => 0,
    'but_role' => 0,
    'but_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532edc29ef2513_32467669',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532edc29ef2513_32467669')) {function content_532edc29ef2513_32467669($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('search'));
?>

<?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_text'=>__("search"),'but_onclick'=>$_smarty_tpl->tpl_vars['but_onclick']->value,'but_href'=>$_smarty_tpl->tpl_vars['but_href']->value,'but_role'=>$_smarty_tpl->tpl_vars['but_role']->value,'but_name'=>$_smarty_tpl->tpl_vars['but_name']->value), 0);?>
<?php }} ?>
