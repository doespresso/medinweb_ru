<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 22:06:33
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/views/debugger/components/config_tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:724031461532f22a957aab2-14459382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61bb3b7eb7b0ccd45420a82af822fb018b9fa34d' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/themes/basic/templates/views/debugger/components/config_tab.tpl',
      1 => 1395572330,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '724031461532f22a957aab2-14459382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'runtime' => 0,
    'config' => 0,
    'name' => 0,
    'value' => 0,
    'settings' => 0,
    'data' => 0,
    'auth' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532f22a98f50e0_21782423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532f22a98f50e0_21782423')) {function content_532f22a98f50e0_21782423($_smarty_tpl) {?><?php if (!is_callable('smarty_function_set_id')) include '/Users/jd/servers/LOCALHOST/medinweb.ru/public/app/functions/smarty_plugins/function.set_id.php';
?><?php if ($_smarty_tpl->tpl_vars['runtime']->value['customization_mode']['design']=="Y"&&@constant('AREA')=="C") {?><?php $_smarty_tpl->_capture_stack[0][] = array("template_content", null, null); ob_start(); ?><div class="deb-tab-content" id="DebugToolbarTabConfigContent">
    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabConfigConfig">Config</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigSettings">Settings</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigRuntime">Runtime</a></li>
        </ul>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigConfig">
        <table class="deb-table">
            <caption>Config</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['config']->value,"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td style="width: 200px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigSettings">
        <table class="deb-table">
            <caption>Settings</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['settings']->value,"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td style="width: 200px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigRuntime">
        <table class="deb-table">
            <caption>Runtime</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['data']->value['runtime'],"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td style="width: 200px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object'||$_smarty_tpl->tpl_vars['value']->value==='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource'||$_smarty_tpl->tpl_vars['value']->value==='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
<!--DebugToolbarTabConfigContent--></div><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><?php if (trim(Smarty::$_smarty_vars['capture']['template_content'])) {?><?php if ($_smarty_tpl->tpl_vars['auth']->value['area']=="A") {?><span class="cm-template-box template-box" data-ca-te-template="views/debugger/components/config_tab.tpl" id="<?php echo smarty_function_set_id(array('name'=>"views/debugger/components/config_tab.tpl"),$_smarty_tpl);?>
"><div class="cm-template-icon icon-edit hidden"></div><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<!--[/tpl_id]--></span><?php } else { ?><?php echo Smarty::$_smarty_vars['capture']['template_content'];?>
<?php }?><?php }?><?php } else { ?><div class="deb-tab-content" id="DebugToolbarTabConfigContent">
    <div class="deb-sub-tab">
        <ul>
            <li class="active"><a data-sub-tab-id="DebugToolbarSubTabConfigConfig">Config</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigSettings">Settings</a></li>
            <li><a data-sub-tab-id="DebugToolbarSubTabConfigRuntime">Runtime</a></li>
        </ul>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigConfig">
        <table class="deb-table">
            <caption>Config</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['config']->value,"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td style="width: 200px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>

    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigSettings">
        <table class="deb-table">
            <caption>Settings</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['settings']->value,"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td style="width: 200px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
    
    <div class="deb-sub-tab-content" id="DebugToolbarSubTabConfigRuntime">
        <table class="deb-table">
            <caption>Runtime</caption>
            <?php  $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable; $_smarty_tpl->tpl_vars["value"]->_loop = false;
 $_smarty_tpl->tpl_vars["name"] = new Smarty_Variable;
 $_from = fn_foreach_recursive($_smarty_tpl->tpl_vars['data']->value['runtime'],"."); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars["value"]->key => $_smarty_tpl->tpl_vars["value"]->value) {
$_smarty_tpl->tpl_vars["value"]->_loop = true;
 $_smarty_tpl->tpl_vars["name"]->value = $_smarty_tpl->tpl_vars["value"]->key;
?>
                <tr>
                    <td style="width: 200px;"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8');?>
</td>
                    <td>
                        <?php if (gettype($_smarty_tpl->tpl_vars['value']->value)=='boolean') {?>
                            <pre><code class="php"><?php if ($_smarty_tpl->tpl_vars['value']->value) {?>true<?php } else { ?>false<?php }?></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='NULL') {?>
                            <pre><code class="php">null</code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='object'||$_smarty_tpl->tpl_vars['value']->value==='object') {?>
                            <pre><code class="php"><span class="pseudo">Object</span></code></pre>
                        <?php } elseif (gettype($_smarty_tpl->tpl_vars['value']->value)=='resource'||$_smarty_tpl->tpl_vars['value']->value==='resource') {?>
                            <pre><code class="php"><span class="pseudo">Resource</span></code></pre>
                        <?php } else { ?>
                            <?php echo htmlspecialchars(strval($_smarty_tpl->tpl_vars['value']->value), ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
<!--DebugToolbarTabConfigContent--></div><?php }?><?php }} ?>
