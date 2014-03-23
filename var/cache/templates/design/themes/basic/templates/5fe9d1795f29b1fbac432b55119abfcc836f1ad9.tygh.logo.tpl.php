<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 15:07:37
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/blocks/static_templates/logo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:517469850532ec079482785-96081487%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fe9d1795f29b1fbac432b55119abfcc836f1ad9' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/blocks/static_templates/logo.tpl',
      1 => 1395572330,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '517469850532ec079482785-96081487',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'logos' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532ec079542e26_54413120',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ec079542e26_54413120')) {function content_532ec079542e26_54413120($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>
<div class="logo-container">
    <a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_path'], ENT_QUOTES, 'UTF-8');?>
" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_x'], ENT_QUOTES, 'UTF-8');?>
px; height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_y'], ENT_QUOTES, 'UTF-8');?>
px;" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
" class="logo">
    </a>
</div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/static_templates/logo.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/static_templates/logo.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>
<div class="logo-container">
    <a href="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
">
        <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_path'], ENT_QUOTES, 'UTF-8');?>
" style="width:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_x'], ENT_QUOTES, 'UTF-8');?>
px; height:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['image_y'], ENT_QUOTES, 'UTF-8');?>
px;" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['logos']->value['theme']['image']['alt'], ENT_QUOTES, 'UTF-8');?>
" class="logo">
    </a>
</div><?php }?><?php }} ?>
