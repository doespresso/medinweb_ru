<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 15:07:34
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/addons/twigmo/hooks/index/scripts.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1800263443532ec0768ad743-43425896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cec33dca8511edec0e848b83ce0112cb9629cebb' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/addons/twigmo/hooks/index/scripts.post.tpl',
      1 => 1395572349,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1800263443532ec0768ad743-43425896',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'state' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532ec0769c2c62_09804336',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ec0769c2c62_09804336')) {function content_532ec0769c2c62_09804336($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><?php $_smarty_tpl->tpl_vars["state"] = new Smarty_variable($_SESSION['twg_state'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['state']->value['twg_can_be_used']&&!$_smarty_tpl->tpl_vars['state']->value['mobile_link_closed']) {?>
    <script>
    //<![CDATA[
    
    $(function () {
        $('#close_notification_mobile_avail_notice').bind('click', function (e) {
            $(e.target).parents('div.mobile-avail-notice').hide();
            $.ajax({
                url: '<?php echo fn_url("twigmo.post&close_notice=1");?>
',
                dataType: 'json'
            });
        });
        if(window.devicePixelRatio && window.devicePixelRatio > 1) {
            changeSizes();
        }
        function changeSizes(){
            var scale = 1,
                buttonsHeight = <?php if ($_smarty_tpl->tpl_vars['state']->value['device']=="ipad") {?>54<?php } else { ?>80<?php }?>,
                fontSize = <?php if ($_smarty_tpl->tpl_vars['state']->value['device']=="ipad") {?>30<?php } else { ?>34<?php }?>,
                crossWidth = 30,
                textPadding = <?php if ($_smarty_tpl->tpl_vars['state']->value['device']=="ipad") {?>'0 1% 0 1%'<?php } else { ?>'0 2% 0 2%'<?php }?>;

            if (typeof window.orientation !== 'undefined' && Math.abs(window.orientation) === 90) {
                scale = 0.7;
                textPadding = '0 1% 0 1%';
            }
            $('.mobile-avail-notice a').css({'height': buttonsHeight * scale + 'px', 'line-height': buttonsHeight * scale + 'px', 'font-size': fontSize * scale + 'px', 'padding': textPadding});
            $('.mobile-avail-notice img').css({'width': crossWidth * scale + 'px !important', 'height': crossWidth * scale + 'px !important', 'margin-top': -1 * (crossWidth * scale/2) + 'px'});
        }
        window.onorientationchange = function () {
            changeSizes();
        };
        changeSizes();
    });
    
    //]]>
    </script>
<?php }?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="addons/twigmo/hooks/index/scripts.post.tpl" id="<?php echo smarty_function_set_id(array('name'=>"addons/twigmo/hooks/index/scripts.post.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><?php $_smarty_tpl->tpl_vars["state"] = new Smarty_variable($_SESSION['twg_state'], null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['state']->value['twg_can_be_used']&&!$_smarty_tpl->tpl_vars['state']->value['mobile_link_closed']) {?>
    <script>
    //<![CDATA[
    
    $(function () {
        $('#close_notification_mobile_avail_notice').bind('click', function (e) {
            $(e.target).parents('div.mobile-avail-notice').hide();
            $.ajax({
                url: '<?php echo fn_url("twigmo.post&close_notice=1");?>
',
                dataType: 'json'
            });
        });
        if(window.devicePixelRatio && window.devicePixelRatio > 1) {
            changeSizes();
        }
        function changeSizes(){
            var scale = 1,
                buttonsHeight = <?php if ($_smarty_tpl->tpl_vars['state']->value['device']=="ipad") {?>54<?php } else { ?>80<?php }?>,
                fontSize = <?php if ($_smarty_tpl->tpl_vars['state']->value['device']=="ipad") {?>30<?php } else { ?>34<?php }?>,
                crossWidth = 30,
                textPadding = <?php if ($_smarty_tpl->tpl_vars['state']->value['device']=="ipad") {?>'0 1% 0 1%'<?php } else { ?>'0 2% 0 2%'<?php }?>;

            if (typeof window.orientation !== 'undefined' && Math.abs(window.orientation) === 90) {
                scale = 0.7;
                textPadding = '0 1% 0 1%';
            }
            $('.mobile-avail-notice a').css({'height': buttonsHeight * scale + 'px', 'line-height': buttonsHeight * scale + 'px', 'font-size': fontSize * scale + 'px', 'padding': textPadding});
            $('.mobile-avail-notice img').css({'width': crossWidth * scale + 'px !important', 'height': crossWidth * scale + 'px !important', 'margin-top': -1 * (crossWidth * scale/2) + 'px'});
        }
        window.onorientationchange = function () {
            changeSizes();
        };
        changeSizes();
    });
    
    //]]>
    </script>
<?php }?>
<?php }?><?php }} ?>
