<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 17:14:31
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1326906545532ede373e4c03-17117452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11a0bed5a9b8ff1e042c4881b4ec0adf7ac814fb' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/social_buttons/hooks/pages/detailed_content.post.tpl',
      1 => 1395142067,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1326906545532ede373e4c03-17117452',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'addons' => 0,
    'page_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532ede37401630_91000568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ede37401630_91000568')) {function content_532ede37401630_91000568($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['addons']->value['social_buttons']['facebook_enable']=="Y") {?>
    <?php echo $_smarty_tpl->getSubTemplate ("addons/social_buttons/common/facebook_types.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('object_type'=>"page_data",'object_data'=>$_smarty_tpl->tpl_vars['page_data']->value), 0);?>

<?php }?>
<?php }} ?>
