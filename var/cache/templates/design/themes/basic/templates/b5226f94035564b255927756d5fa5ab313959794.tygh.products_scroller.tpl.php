<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 15:07:39
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/blocks/products/products_scroller.tpl" */ ?>
<?php /*%%SmartyHeaderCode:175864131532ec07b11aeb9-53899867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5226f94035564b255927756d5fa5ab313959794' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/blocks/products/products_scroller.tpl',
      1 => 1395572330,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '175864131532ec07b11aeb9-53899867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'block' => 0,
    'items' => 0,
    'product' => 0,
    'object_img' => 0,
    'quick_nav_ids' => 0,
    '_show_add_to_cart' => 0,
    '_hide_price' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532ec07b359e30_89078903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ec07b359e30_89078903')) {function content_532ec07b359e30_89078903($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_price']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars["_hide_price"] = new Smarty_variable(false, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["_hide_price"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>
    <div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel">
        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
            <div class="jscroll-item"> 
                <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable("scr_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>                
                <div class="center scroll-image">
                    <?php $_smarty_tpl->tpl_vars["object_img"] = new Smarty_variable($_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'no_ids'=>true), 0));?>

                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['object_img']->value;?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']=="Y") {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0);?>

                    <?php }?>
                </div>
                <div class="center compact">
                    <?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_trunc_name'=>true,'show_price'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'but_role'=>"action",'hide_price'=>$_smarty_tpl->tpl_vars['_hide_price']->value,'hide_qty'=>true), 0);?>

                </div>
            </div>              
        <?php } ?>
    </div>

<?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/products/products_scroller.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/products/products_scroller.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']=="Y") {?>
    <?php $_smarty_tpl->tpl_vars['quick_nav_ids'] = new Smarty_variable(fn_fields_from_multi_level($_smarty_tpl->tpl_vars['items']->value,"product_id","product_id"), null, 0);?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['hide_add_to_cart_button']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(false, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["_show_add_to_cart"] = new Smarty_variable(true, null, 0);?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['show_price']=="Y") {?>
        <?php $_smarty_tpl->tpl_vars["_hide_price"] = new Smarty_variable(false, null, 0);?>
    <?php } else { ?>
        <?php $_smarty_tpl->tpl_vars["_hide_price"] = new Smarty_variable(true, null, 0);?>
<?php }?>

<?php $_smarty_tpl->tpl_vars["obj_prefix"] = new Smarty_variable(((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000", null, 0);?>
    <div id="scroll_list_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['block_id'], ENT_QUOTES, 'UTF-8');?>
" class="owl-carousel">
        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
?>
            <div class="jscroll-item"> 
                <?php $_smarty_tpl->tpl_vars["obj_id"] = new Smarty_variable("scr_".((string)$_smarty_tpl->tpl_vars['block']->value['block_id'])."000".((string)$_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>                
                <div class="center scroll-image">
                    <?php $_smarty_tpl->tpl_vars["object_img"] = new Smarty_variable($_smarty_tpl->getSubTemplate ("common/image.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('images'=>$_smarty_tpl->tpl_vars['product']->value['main_pair'],'image_width'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'image_height'=>$_smarty_tpl->tpl_vars['block']->value['properties']['thumbnail_width'],'no_ids'=>true), 0));?>

                    <a href="<?php echo htmlspecialchars(fn_url("products.view?product_id=".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])), ENT_QUOTES, 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['object_img']->value;?>
</a>
                    <?php if ($_smarty_tpl->tpl_vars['block']->value['properties']['enable_quick_view']=="Y") {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("views/products/components/quick_view_link.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('quick_nav_ids'=>$_smarty_tpl->tpl_vars['quick_nav_ids']->value), 0);?>

                    <?php }?>
                </div>
                <div class="center compact">
                    <?php echo $_smarty_tpl->getSubTemplate ("blocks/list_templates/simple_list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'show_trunc_name'=>true,'show_price'=>true,'show_add_to_cart'=>$_smarty_tpl->tpl_vars['_show_add_to_cart']->value,'but_role'=>"action",'hide_price'=>$_smarty_tpl->tpl_vars['_hide_price']->value,'hide_qty'=>true), 0);?>

                </div>
            </div>              
        <?php } ?>
    </div>

<?php echo $_smarty_tpl->getSubTemplate ("common/scroller_init.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }?><?php }} ?>
