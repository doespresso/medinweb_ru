<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 17:22:03
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/pickers/products/picker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:454493318532edffbb87493-84528358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '598feccc37cc90983da9c160cf4adfe8e94b8de5' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/pickers/products/picker.tpl',
      1 => 1395572330,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '454493318532edffbb87493-84528358',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'view_mode' => 0,
    'display' => 0,
    'type' => 0,
    'data_id' => 0,
    'item_ids' => 0,
    'no_item_text' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
    'input_name' => 0,
    'product' => 0,
    'prod_opts' => 0,
    'product_name' => 0,
    'product_id' => 0,
    'extra_var' => 0,
    'no_container' => 0,
    'picker_view' => 0,
    'icon_plus' => 0,
    'picker_for' => 0,
    'checkbox_name' => 0,
    'aoc' => 0,
    'but_text' => 0,
    'but_role' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532edffc142809_57330412',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532edffc142809_57330412')) {function content_532edffc142809_57330412($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
if (!is_callable('smarty_function_set_id')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php
fn_preload_lang_vars(array('no_items','name','quantity','options','any_option_combinations','deleted_product','add_products','add_products','no_items','name','quantity','options','any_option_combinations','deleted_product','add_products','add_products'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["view_mode"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['view_mode']->value)===null||$tmp==='' ? "mixed" : $tmp), null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>
    <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("options", null, 0);?>
<?php }?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="button") {?>
<?php if ($_smarty_tpl->tpl_vars['type']->value=="table") {?>
    <p id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item" class="no-items<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> hidden<?php }?>"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['no_item_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("no_items") : $tmp);?>
</p>

    <table id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="table table-width<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> hidden<?php }?> cm-picker-options">
    <tr>
        <th style="width: 80%"><?php echo $_smarty_tpl->__("name");?>
</th>
        <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
    </tr>
    <?php echo $_smarty_tpl->getSubTemplate ("pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('clone'=>true,'options'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."options".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'root_id'=>$_smarty_tpl->tpl_vars['data_id']->value,'product'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'delete_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."delete_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'amount'=>1,'amount_input'=>"text",'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value)."[".((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value)."]"), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["product_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["product_id"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start(); ?>
                <?php $_smarty_tpl->tpl_vars["prod_opts"] = new Smarty_variable(fn_get_product_options($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['prod_opts']->value&&!$_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                    <strong><?php echo $_smarty_tpl->__("options");?>
: </strong>&nbsp;<?php echo $_smarty_tpl->__("any_option_combinations");?>

                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options_value']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options_value']), 0);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>fn_get_selected_product_options_info($_smarty_tpl->tpl_vars['product']->value['product_options'])), 0);?>

                    <?php }?>
                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                <?php $_smarty_tpl->tpl_vars["product_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product'], null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["product_name"] = new Smarty_variable((($tmp = @htmlspecialchars(fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") : $tmp), null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('options'=>Smarty::$_smarty_vars['capture']['product_options'],'root_id'=>$_smarty_tpl->tpl_vars['data_id']->value,'product'=>$_smarty_tpl->tpl_vars['product_name']->value,'delete_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'amount'=>$_smarty_tpl->tpl_vars['product']->value['amount'],'amount_input'=>"text",'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value)."[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'options_array'=>$_smarty_tpl->tpl_vars['product']->value['product_options']), 0);?>

        <?php } ?>
    <?php }?>
    </table>
<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="list") {?>

    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->tpl_vars["extra_var"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['extra_var']->value), null, 0);?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="buttons-container picker"><?php }?><?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>[<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['icon_plus']->value) {?><i class="icon-plus"></i><?php }?>
        <div>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>"products.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&aoc=".((string)$_smarty_tpl->tpl_vars['aoc']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_text'=>(($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_products") : $tmp),'but_role'=>(($tmp = @$_smarty_tpl->tpl_vars['but_role']->value)===null||$tmp==='' ? "add" : $tmp),'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener",'but_rel'=>"nofollow"), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>]<?php }?><?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>
    </div>

    <div class="hidden" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_products") : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    </div>

<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="pickers/products/picker.tpl" id="<?php echo smarty_function_set_id(array('name'=>"pickers/products/picker.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["view_mode"] = new Smarty_variable((($tmp = @$_smarty_tpl->tpl_vars['view_mode']->value)===null||$tmp==='' ? "mixed" : $tmp), null, 0);?>
<?php if (!$_smarty_tpl->tpl_vars['display']->value) {?>
    <?php $_smarty_tpl->tpl_vars["display"] = new Smarty_variable("options", null, 0);?>
<?php }?>

<?php echo smarty_function_script(array('src'=>"js/tygh/picker.js"),$_smarty_tpl);?>


<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="button") {?>
<?php if ($_smarty_tpl->tpl_vars['type']->value=="table") {?>
    <p id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
_no_item" class="no-items<?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?> hidden<?php }?>"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['no_item_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("no_items") : $tmp);?>
</p>

    <table id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" class="table table-width<?php if (!$_smarty_tpl->tpl_vars['item_ids']->value) {?> hidden<?php }?> cm-picker-options">
    <tr>
        <th style="width: 80%"><?php echo $_smarty_tpl->__("name");?>
</th>
        <th><?php echo $_smarty_tpl->__("quantity");?>
</th>
    </tr>
    <?php echo $_smarty_tpl->getSubTemplate ("pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('clone'=>true,'options'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."options".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'root_id'=>$_smarty_tpl->tpl_vars['data_id']->value,'product'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'delete_id'=>((string)$_smarty_tpl->tpl_vars['ldelim']->value)."delete_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value),'amount'=>1,'amount_input'=>"text",'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value)."[".((string)$_smarty_tpl->tpl_vars['ldelim']->value)."product_id".((string)$_smarty_tpl->tpl_vars['rdelim']->value)."]"), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['item_ids']->value) {?>
        <?php  $_smarty_tpl->tpl_vars["product"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["product"]->_loop = false;
 $_smarty_tpl->tpl_vars["product_id"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['item_ids']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["product"]->key => $_smarty_tpl->tpl_vars["product"]->value) {
$_smarty_tpl->tpl_vars["product"]->_loop = true;
 $_smarty_tpl->tpl_vars["product_id"]->value = $_smarty_tpl->tpl_vars["product"]->key;
?>
            <?php $_smarty_tpl->_capture_stack[0][] = array("product_options", null, null); ob_start(); ?>
                <?php $_smarty_tpl->tpl_vars["prod_opts"] = new Smarty_variable(fn_get_product_options($_smarty_tpl->tpl_vars['product']->value['product_id']), null, 0);?>
                <?php if ($_smarty_tpl->tpl_vars['prod_opts']->value&&!$_smarty_tpl->tpl_vars['product']->value['product_options']) {?>
                    <strong><?php echo $_smarty_tpl->__("options");?>
: </strong>&nbsp;<?php echo $_smarty_tpl->__("any_option_combinations");?>

                <?php } else { ?>
                    <?php if ($_smarty_tpl->tpl_vars['product']->value['product_options_value']) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>$_smarty_tpl->tpl_vars['product']->value['product_options_value']), 0);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSubTemplate ("common/options_info.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('product_options'=>fn_get_selected_product_options_info($_smarty_tpl->tpl_vars['product']->value['product_options'])), 0);?>

                    <?php }?>
                <?php }?>
            <?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['product']) {?>
                <?php $_smarty_tpl->tpl_vars["product_name"] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value['product'], null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["product_name"] = new Smarty_variable((($tmp = @htmlspecialchars(fn_get_product_name($_smarty_tpl->tpl_vars['product']->value['product_id']), ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? $_smarty_tpl->__("deleted_product") : $tmp), null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/products/js.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('options'=>Smarty::$_smarty_vars['capture']['product_options'],'root_id'=>$_smarty_tpl->tpl_vars['data_id']->value,'product'=>$_smarty_tpl->tpl_vars['product_name']->value,'delete_id'=>$_smarty_tpl->tpl_vars['product_id']->value,'product_id'=>$_smarty_tpl->tpl_vars['product']->value['product_id'],'amount'=>$_smarty_tpl->tpl_vars['product']->value['amount'],'amount_input'=>"text",'input_name'=>((string)$_smarty_tpl->tpl_vars['input_name']->value)."[".((string)$_smarty_tpl->tpl_vars['product']->value['product_id'])."]",'options_array'=>$_smarty_tpl->tpl_vars['product']->value['product_options']), 0);?>

        <?php } ?>
    <?php }?>
    </table>
<?php }?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['view_mode']->value!="list") {?>

    <?php if ($_smarty_tpl->tpl_vars['extra_var']->value) {?>
        <?php $_smarty_tpl->tpl_vars["extra_var"] = new Smarty_variable(rawurlencode($_smarty_tpl->tpl_vars['extra_var']->value), null, 0);?>
    <?php }?>

    <?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?><div class="buttons-container picker"><?php }?><?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>[<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['icon_plus']->value) {?><i class="icon-plus"></i><?php }?>
        <div>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_id'=>"opener_picker_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_href'=>"products.picker?display=".((string)$_smarty_tpl->tpl_vars['display']->value)."&picker_for=".((string)$_smarty_tpl->tpl_vars['picker_for']->value)."&extra=".((string)$_smarty_tpl->tpl_vars['extra_var']->value)."&checkbox_name=".((string)$_smarty_tpl->tpl_vars['checkbox_name']->value)."&aoc=".((string)$_smarty_tpl->tpl_vars['aoc']->value)."&data_id=".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_text'=>(($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_products") : $tmp),'but_role'=>(($tmp = @$_smarty_tpl->tpl_vars['but_role']->value)===null||$tmp==='' ? "add" : $tmp),'but_target_id'=>"content_".((string)$_smarty_tpl->tpl_vars['data_id']->value),'but_meta'=>"cm-dialog-opener",'but_rel'=>"nofollow"), 0);?>

    <?php if ($_smarty_tpl->tpl_vars['picker_view']->value) {?>]<?php }?><?php if (!$_smarty_tpl->tpl_vars['no_container']->value) {?></div><?php }?>
    </div>

    <div class="hidden" id="content_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data_id']->value, ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['but_text']->value)===null||$tmp==='' ? $_smarty_tpl->__("add_products") : $tmp), ENT_QUOTES, 'UTF-8');?>
">
    </div>

<?php }?><?php }?><?php }} ?>
