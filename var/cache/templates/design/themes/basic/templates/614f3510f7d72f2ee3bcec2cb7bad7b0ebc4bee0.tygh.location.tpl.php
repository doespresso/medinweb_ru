<?php /* Smarty version Smarty-3.1.15, created on 2014-03-24 00:39:49
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/views/block_manager/render/location.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1983452648532f1d11d769e2-06493874%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '614f3510f7d72f2ee3bcec2cb7bad7b0ebc4bee0' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/views/block_manager/render/location.tpl',
      1 => 1395607142,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1983452648532f1d11d769e2-06493874',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532f1d11e259c7_57757253',
  'variables' => 
  array (
    'containers' => 0,
    'show_entry_page' => 0,
    'ldelim' => 0,
    'rdelim' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532f1d11e259c7_57757253')) {function content_532f1d11e259c7_57757253($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('choose_your_country'));
?>
<div class="top-header">
<?php if ($_smarty_tpl->tpl_vars['containers']->value['top_panel']) {?>
    <div class="tygh-top-panel clearfix">
        <?php echo $_smarty_tpl->tpl_vars['containers']->value['top_panel'];?>

    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['header']) {?>
    <div class="tygh-header clearfix">
        <?php echo $_smarty_tpl->tpl_vars['containers']->value['header'];?>

    </div>
<?php }?>
</div>

<div id="full-slider" class="full-slider">

</div>
<?php if ($_smarty_tpl->tpl_vars['containers']->value['content']) {?>
    <div class="tygh-content clearfix">
        <?php echo $_smarty_tpl->tpl_vars['containers']->value['content'];?>

    </div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['containers']->value['footer']) {?>
<div class="tygh-footer clearfix" id="tygh_footer">
    <?php echo $_smarty_tpl->tpl_vars['containers']->value['footer'];?>

</div>
<?php }?>

<?php if (fn_allowed_for("ULTIMATE")) {?>
    
    <?php if ($_smarty_tpl->tpl_vars['show_entry_page']->value) {?>
        <div id="entry_page"></div>
            <script type="text/javascript">
                $('#entry_page').ceDialog('open', <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ldelim']->value, ENT_QUOTES, 'UTF-8');?>
href: fn_url('companies.entry_page'), resizable: false, title: '<?php echo $_smarty_tpl->__("choose_your_country");?>
', width: 325, height: 420, dialogClass: 'entry-page'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rdelim']->value, ENT_QUOTES, 'UTF-8');?>
);
            </script>
    <?php }?>
<?php }?>

<?php if (fn_check_meta_redirect($_REQUEST['meta_redirect_url'])) {?>
    <meta http-equiv="refresh" content="1;url=<?php echo htmlspecialchars(fn_url(fn_check_meta_redirect($_REQUEST['meta_redirect_url'])), ENT_QUOTES, 'UTF-8');?>
" />
<?php }?><?php }} ?>
