<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 17:14:31
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/form_builder/hooks/pages/tools_list.pre.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1393975397532ede376fa419-31880619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b785ee75f9d9c7558db0fa019193e247a933059b' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/form_builder/hooks/pages/tools_list.pre.tpl',
      1 => 1395142067,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1393975397532ede376fa419-31880619',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532ede3770b936_75357469',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ede3770b936_75357469')) {function content_532ede3770b936_75357469($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('add_form'));
?>
<li><a href="<?php echo htmlspecialchars(fn_url("pages.add?page_type=F&parent_id=".((string)$_smarty_tpl->tpl_vars['id']->value)), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->__("add_form");?>
</a></li><?php }} ?>
