<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 21:42:37
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/blocks/smarty_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2108873826532f1d0d18a847-88270199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb60711f6d22606d36ffbe8f95f437c8b1f2481c' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/blocks/smarty_block.tpl',
      1 => 1395572330,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2108873826532f1d0d18a847-88270199',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'content' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532f1d0d1f1b86_45840313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532f1d0d1f1b86_45840313')) {function content_532f1d0d1f1b86_45840313($_smarty_tpl) {?><?php if (!is_callable('smarty_function_eval_string')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/functions/smarty_plugins/function.eval_string.php';
if (!is_callable('smarty_function_set_id')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="wysiwyg-content"><?php echo smarty_function_eval_string(array('var'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);?>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/smarty_block.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/smarty_block.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="wysiwyg-content"><?php echo smarty_function_eval_string(array('var'=>$_smarty_tpl->tpl_vars['content']->value),$_smarty_tpl);?>
</div><?php }?><?php }} ?>
