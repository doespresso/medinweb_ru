<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 17:14:31
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:873120342532ede374a2a80-95526687%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c757627a55f4cac652bedc4e7edeef5f29bb10e' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/discussion/hooks/pages/detailed_content.post.tpl',
      1 => 1395142066,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '873120342532ede374a2a80-95526687',
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
  'unifunc' => 'content_532ede37517f07_62452950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ede37517f07_62452950')) {function content_532ede37517f07_62452950($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('comments_and_reviews','discussion_title_page'));
?>
<?php if ($_smarty_tpl->tpl_vars['runtime']->value['company_id']&&fn_allowed_for("ULTIMATE")||fn_allowed_for("MULTIVENDOR")) {?>
    <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("comments_and_reviews"),'target'=>"#discussion_page_setting"), 0);?>

   <div id="discussion_page_setting" class="in collapse">
   		<fieldset>
   	    	<?php echo $_smarty_tpl->getSubTemplate ("addons/discussion/views/discussion_manager/components/allow_discussion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('prefix'=>"page_data",'object_id'=>$_smarty_tpl->tpl_vars['page_data']->value['page_id'],'object_type'=>"A",'title'=>__("discussion_title_page"),'non_editable'=>true), 0);?>

   		</fieldset>
   </div>
<?php }?><?php }} ?>
