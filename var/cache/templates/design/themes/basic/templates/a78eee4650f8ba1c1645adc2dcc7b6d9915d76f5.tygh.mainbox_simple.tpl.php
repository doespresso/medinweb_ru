<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 16:52:53
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/blocks/wrappers/mainbox_simple.tpl" */ ?>
<?php /*%%SmartyHeaderCode:985582904532ed92587a271-39434021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a78eee4650f8ba1c1645adc2dcc7b6d9915d76f5' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/blocks/wrappers/mainbox_simple.tpl',
      1 => 1395572330,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '985582904532ed92587a271-39434021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'content' => 0,
    'anchor' => 0,
    'hide_wrapper' => 0,
    'block' => 0,
    'content_alignment' => 0,
    'title' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532ed925a30529_04872584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ed925a30529_04872584')) {function content_532ed925a30529_04872584($_smarty_tpl) {?><?php if (!is_callable('smarty_block_hook')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/functions/smarty_plugins/block.hook.php';
if (!is_callable('smarty_function_set_id')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['anchor']->value) {?>
    <a name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['anchor']->value, ENT_QUOTES, 'UTF-8');?>
"></a>
    <?php }?>
    <div class="mainbox2-container<?php if (isset($_smarty_tpl->tpl_vars['hide_wrapper']->value)) {?> cm-hidden-wrapper<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_wrapper']->value) {?> hidden<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['content_alignment']->value=="RIGHT") {?> float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=="LEFT") {?> float-left<?php }?>">
        <h1 class="mainbox2-title clearfix">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"wrapper:mainbox_simple_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"wrapper:mainbox_simple_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (trim(Smarty::$_smarty_vars['capture']['title'])) {?>
                <?php echo Smarty::$_smarty_vars['capture']['title'];?>

            <?php } else { ?>
                <span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"wrapper:mainbox_simple_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </h1>
        <div class="mainbox2-body"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
        <div class="mainbox2-bottom"><span>&nbsp;</span></div>
    </div>
<?php }?><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="blocks/wrappers/mainbox_simple.tpl" id="<?php echo smarty_function_set_id(array('name'=>"blocks/wrappers/mainbox_simple.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php if (trim($_smarty_tpl->tpl_vars['content']->value)) {?>
    <?php if ($_smarty_tpl->tpl_vars['anchor']->value) {?>
    <a name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['anchor']->value, ENT_QUOTES, 'UTF-8');?>
"></a>
    <?php }?>
    <div class="mainbox2-container<?php if (isset($_smarty_tpl->tpl_vars['hide_wrapper']->value)) {?> cm-hidden-wrapper<?php }?><?php if ($_smarty_tpl->tpl_vars['hide_wrapper']->value) {?> hidden<?php }?><?php if ($_smarty_tpl->tpl_vars['block']->value['user_class']) {?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['block']->value['user_class'], ENT_QUOTES, 'UTF-8');?>
<?php }?><?php if ($_smarty_tpl->tpl_vars['content_alignment']->value=="RIGHT") {?> float-right<?php } elseif ($_smarty_tpl->tpl_vars['content_alignment']->value=="LEFT") {?> float-left<?php }?>">
        <h1 class="mainbox2-title clearfix">
            <?php $_smarty_tpl->smarty->_tag_stack[] = array('hook', array('name'=>"wrapper:mainbox_simple_title")); $_block_repeat=true; echo smarty_block_hook(array('name'=>"wrapper:mainbox_simple_title"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

            <?php if (trim(Smarty::$_smarty_vars['capture']['title'])) {?>
                <?php echo Smarty::$_smarty_vars['capture']['title'];?>

            <?php } else { ?>
                <span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
            <?php }?>
            <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_hook(array('name'=>"wrapper:mainbox_simple_title"), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);?>

        </h1>
        <div class="mainbox2-body"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
        <div class="mainbox2-bottom"><span>&nbsp;</span></div>
    </div>
<?php }?><?php }?><?php }} ?>
