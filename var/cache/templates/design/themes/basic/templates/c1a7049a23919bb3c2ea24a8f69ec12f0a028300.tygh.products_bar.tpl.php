<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 16:53:50
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/blocks/products/products_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2050131946532ed95e3d8e69-33545374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1a7049a23919bb3c2ea24a8f69ec12f0a028300' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/blocks/products/products_bar.tpl',
      1 => 1395572330,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2050131946532ed95e3d8e69-33545374',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    '_show_add_to_cart' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532ed95e51a887_04576286',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ed95e51a887_04576286')) {function content_532ed95e51a887_04576286($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_block'=>$_smarty_tpl->tpl_vars['block']->value['name'],'products'=>$_smarty_tpl->tpl_vars['items']->value,'no_sorting'=>"Y",'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'show_trunc_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_add_to_cart'=>(($tmp = @$_smarty_tpl->tpl_vars['_show_add_to_cart']->value)===null||$tmp==='' ? true : $tmp),'but_role'=>'action'), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_bar.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_bar.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
<?php } else { ?>
    <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/products_bar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title_block'=>$_smarty_tpl->tpl_vars['block']->value['name'],'products'=>$_smarty_tpl->tpl_vars['items']->value,'no_sorting'=>"Y",'obj_prefix'=>((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000",'show_trunc_name'=>true,'show_old_price'=>true,'show_price'=>true,'show_clean_price'=>true,'show_add_to_cart'=>(($tmp = @$_smarty_tpl->tpl_vars['_show_add_to_cart']->value)===null||$tmp==='' ? true : $tmp),'but_role'=>'action'), 0);?>
<?php }?><?php }} ?>
