<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 15:09:19
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/common/previewer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:699977454532ec0dfe96043-30789983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1b360d151af90a41813a6cec0ef0c39c156ff2d' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/common/previewer.tpl',
      1 => 1395142067,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '699977454532ec0dfe96043-30789983',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532ec0dfea5598_45512649',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ec0dfea5598_45512649')) {function content_532ec0dfea5598_45512649($_smarty_tpl) {?><?php if (!is_callable('smarty_function_script')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/functions/smarty_plugins/function.script.php';
?><?php echo smarty_function_script(array('src'=>"js/tygh/previewers/".((string)$_smarty_tpl->tpl_vars['settings']->value['Appearance']['default_image_previewer']).".previewer.js"),$_smarty_tpl);?>
<?php }} ?>
