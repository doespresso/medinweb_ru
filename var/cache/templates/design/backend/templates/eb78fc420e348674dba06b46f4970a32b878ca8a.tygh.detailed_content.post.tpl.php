<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 17:14:31
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/seo/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:882937571532ede37405d07-03576551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb78fc420e348674dba06b46f4970a32b878ca8a' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/seo/hooks/pages/detailed_content.post.tpl',
      1 => 1395142067,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '882937571532ede37405d07-03576551',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532ede37492de5_34217040',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ede37492de5_34217040')) {function content_532ede37492de5_34217040($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('seo','seo_name'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
<?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("seo"),'target'=>"#acc_addon_seo"), 0);?>

<div id="acc_addon_seo" class="collapsed in">
	<div class="control-group">
        <label class="control-label" for="seo_name"><?php echo $_smarty_tpl->__("seo_name");?>
:</label>
        <div class="controls">
        	<input type="text" name="page_data[seo_name]" id="seo_name" size="55" maxlength="255" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page_data']->value['seo_name'], ENT_QUOTES, 'UTF-8');?>
" class="input-large" />
        </div>
    </div>
</div>
<?php }?><?php }} ?>
