<?php /* Smarty version Smarty-3.1.15, created on 2014-03-24 12:37:45
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/categories/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1949413352532feed9e6ec91-97524884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a065080987fd6efc60d315b4ee06d8da6caeb93' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/categories/tabs_content.post.tpl',
      1 => 1395142066,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1949413352532feed9e6ec91-97524884',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532feed9e90ac4_58076526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532feed9e90ac4_58076526')) {function content_532feed9e90ac4_58076526($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||!fn_allowed_for("ULTIMATE")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_company_id'=>0), 0);?>

<?php }?><?php }} ?>
