<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 21:42:40
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/addons/discussion/views/discussion/components/average_rating.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1020831954532f1d1069b8a5-65860993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '219ede4d7561fa16153c51d6993bd71a546fb1cf' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/addons/discussion/views/discussion/components/average_rating.tpl',
      1 => 1395572339,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1020831954532f1d1069b8a5-65860993',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'object_id' => 0,
    'object_type' => 0,
    'average_rating' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532f1d1076f363_22147870',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532f1d1076f363_22147870')) {function content_532f1d1076f363_22147870($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["average_rating"] = new Smarty_variable(fn_get_average_rating($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['average_rating']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['average_rating']->value),'is_link'=>true), 0);?>

<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/discussion/views/discussion/components/average_rating.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/discussion/views/discussion/components/average_rating.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["average_rating"] = new Smarty_variable(fn_get_average_rating($_smarty_tpl->tpl_vars['object_id']->value,$_smarty_tpl->tpl_vars['object_type']->value), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['average_rating']->value) {?>
<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion/components/stars.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('stars'=>fn_get_discussion_rating($_smarty_tpl->tpl_vars['average_rating']->value),'is_link'=>true), 0);?>

<?php }?><?php }?><?php }} ?>
