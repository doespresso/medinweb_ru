<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 17:14:31
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/views/pages/components/parent_page_selector.tpl" */ ?>
<?php /*%%SmartyHeaderCode:774873248532ede371d3a56-56389282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44fa3eea225145819ce3fbadcbbae249598ee0dc' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/views/pages/components/parent_page_selector.tpl',
      1 => 1395142068,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '774873248532ede371d3a56-56389282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'parent_pages' => 0,
    'page_data' => 0,
    'page' => 0,
    'show_all' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532ede3729d315_18959191',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ede3729d315_18959191')) {function content_532ede3729d315_18959191($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('parent_page','root_level','root_page'));
?>
<div class="control-group" id="parent_page_selector">

    <label class="control-label cm-required" for="elm_parent_id"><?php echo $_smarty_tpl->__("parent_page");?>
:</label>
    <div class="controls">
        <?php if (!$_smarty_tpl->tpl_vars['parent_pages']->value) {?>
            <?php echo $_smarty_tpl->getSubTemplate ("pickers/pages/picker.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('data_id'=>"location_page",'input_name'=>"page_data[parent_id]",'item_ids'=>(($tmp = @$_smarty_tpl->tpl_vars['page_data']->value['parent_id'])===null||$tmp==='' ? "0" : $tmp),'hide_link'=>true,'hide_delete_button'=>true,'show_root'=>true,'default_name'=>__("root_level"),'display_input_id'=>"elm_parent_id",'except_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id'],'company_id'=>$_smarty_tpl->tpl_vars['page_data']->value['company_id'],'prepend'=>true), 0);?>

        <?php } else { ?>
            <select name="page_data[parent_id]" id="elm_parent_id">
                <option value="0">- <?php echo $_smarty_tpl->__("root_page");?>
 -</option>
                <?php  $_smarty_tpl->tpl_vars["page"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["page"]->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['parent_pages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["page"]->key => $_smarty_tpl->tpl_vars["page"]->value) {
$_smarty_tpl->tpl_vars["page"]->_loop = true;
?>
                <?php if ((strpos($_smarty_tpl->tpl_vars['page']->value['id_path'],((string)$_smarty_tpl->tpl_vars['page_data']->value['id_path'])."/")===false&&$_smarty_tpl->tpl_vars['page_data']->value['page_id']!=$_smarty_tpl->tpl_vars['page']->value['page_id'])||$_smarty_tpl->tpl_vars['show_all']->value) {?>
                    <option value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_id'], ENT_QUOTES, 'UTF-8');?>
" <?php if ($_smarty_tpl->tpl_vars['page']->value['page_id']==$_REQUEST['parent_id']||$_smarty_tpl->tpl_vars['page']->value['page_id']==$_smarty_tpl->tpl_vars['page_data']->value['parent_id']) {?>selected="selected"<?php }?>><?php echo preg_replace('!^!m',str_repeat("&#166;&nbsp;&nbsp;&nbsp;&nbsp;",$_smarty_tpl->tpl_vars['page']->value['level']),htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8', true));?>
</option>
                <?php }?>
                <?php } ?>
            </select>
        <?php }?>
    </div>
<!--parent_page_selector--></div>
<?php }} ?>
