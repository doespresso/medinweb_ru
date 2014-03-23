<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 15:08:27
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:632522606532ec0abd91c77-81384880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83421f6be96bde386093bceb5c7bd148471666bc' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/categories/fields_to_edit.post.tpl',
      1 => 1395142066,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '632522606532ec0abd91c77-81384880',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532ec0abd9bba2_17333168',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ec0abd9bba2_17333168')) {function content_532ec0abd9bba2_17333168($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('discussion_title_category'));
?>
<label for="discussion_type" class="checkbox">
<input type="checkbox" value="discussion_type" id="discussion_type" name="selected_fields[extra][]" checked="checked" class="cm-item-s" />
<?php echo $_smarty_tpl->__("discussion_title_category");?>
</label>
<?php }} ?>
