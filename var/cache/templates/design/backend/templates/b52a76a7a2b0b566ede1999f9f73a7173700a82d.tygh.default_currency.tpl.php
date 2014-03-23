<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 15:01:20
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/views/settings_wizard/components/default_currency.tpl" */ ?>
<?php /*%%SmartyHeaderCode:994187327532ebf008a3736-12380103%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b52a76a7a2b0b566ede1999f9f73a7173700a82d' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/views/settings_wizard/components/default_currency.tpl',
      1 => 1395142068,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '994187327532ebf008a3736-12380103',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'currencies' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532ebf00936b35_79177172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ebf00936b35_79177172')) {function content_532ebf00936b35_79177172($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('primary_currency'));
?>
<div class="control-group setting-wide">
    <label for="" class="control-label"><?php echo $_smarty_tpl->__("primary_currency");?>
:</label>
    <div class="controls">
        <select name="default_currency">
            <?php  $_smarty_tpl->tpl_vars["currency"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["currency"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['currencies']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["currency"]->key => $_smarty_tpl->tpl_vars["currency"]->value) {
$_smarty_tpl->tpl_vars["currency"]->_loop = true;
?>
                <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['currency_code'], ENT_QUOTES, 'UTF-8');?>
" <?php if (@constant('CART_PRIMARY_CURRENCY')==$_smarty_tpl->tpl_vars['currency']->value['currency_code']) {?>selected="selected"<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['description'], ENT_QUOTES, 'UTF-8');?>
</option>
            <?php } ?>
        </select>
    </div>
</div><?php }} ?>
