<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 21:56:25
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/views/block_manager/components/new_blocks_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:272791223532f204965c322-23179182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c1f70330b223534fc53a2594cfa8193ea3151051' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/views/block_manager/components/new_blocks_list.tpl',
      1 => 1395142068,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '272791223532f204965c322-23179182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'block_types' => 0,
    'manage' => 0,
    'type' => 0,
    'grid_id' => 0,
    'block' => 0,
    'block_description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532f20496c9be5_38187017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532f20496c9be5_38187017')) {function content_532f20496c9be5_38187017($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/lib/other/smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_truncate')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/functions/smarty_plugins/modifier.truncate.php';
?><?php  $_smarty_tpl->tpl_vars["block"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["block"]->_loop = false;
 $_smarty_tpl->tpl_vars["type"] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['block_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["block"]->key => $_smarty_tpl->tpl_vars["block"]->value) {
$_smarty_tpl->tpl_vars["block"]->_loop = true;
 $_smarty_tpl->tpl_vars["type"]->value = $_smarty_tpl->tpl_vars["block"]->key;
?>
    <div class="select-block cm-add-block bm-action-new-block <?php if ($_smarty_tpl->tpl_vars['manage']->value=="Y") {?>bm-manage<?php }?>">
        <input type="hidden" name="block_data[type]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['type']->value, ENT_QUOTES, 'UTF-8');?>
" />
        <input type="hidden" name="block_data[grid_id]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['grid_id']->value, ENT_QUOTES, 'UTF-8');?>
" />
        
        <div class="select-block-box">
            <div class="bmicon-<?php echo htmlspecialchars(smarty_modifier_replace($_smarty_tpl->tpl_vars['block']->value['type'],"_","-"), ENT_QUOTES, 'UTF-8');?>
"></div>
        </div>
                
        <div class="select-block-description">
            <strong title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['name'], ENT_QUOTES, 'UTF-8');?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['block']->value['name'],25,"&hellip;",true);?>
</strong>
            <?php $_smarty_tpl->tpl_vars["block_description"] = new Smarty_variable("block_".((string)$_smarty_tpl->tpl_vars['block']->value['type'])."_description", null, 0);?>
            <p><?php echo $_smarty_tpl->__($_smarty_tpl->tpl_vars['block_description']->value);?>
</p>
        </div>
    </div>
<?php } ?><?php }} ?>
