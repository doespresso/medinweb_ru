<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 17:14:31
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/form_builder/hooks/pages/tabs_content.post.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1156097313532ede3756c0a0-46763856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec321097cdb1899e32cf838160dfa9c0a5b51edc' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/form_builder/hooks/pages/tabs_content.post.tpl',
      1 => 1395142067,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '1156097313532ede3756c0a0-46763856',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_type' => 0,
    'form_submit_const' => 0,
    'form' => 0,
    'form_recipient_const' => 0,
    'form_secure_const' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532ede37664622_49904357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532ede37664622_49904357')) {function content_532ede37664622_49904357($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('form_submit_text','email_to','form_is_secure'));
?>
<?php if ($_smarty_tpl->tpl_vars['page_type']->value==@constant('PAGE_TYPE_FORM')) {?>
<div id="content_build_form">

    <div class="control-group">
        <label for="form_submit_text" class="control-label"><?php echo $_smarty_tpl->__("form_submit_text");?>
:</label>
        <?php $_smarty_tpl->tpl_vars["form_submit_const"] = new Smarty_variable(@constant('FORM_SUBMIT'), null, 0);?>
        <div class="controls">
            <textarea id="form_submit_text" class="cm-wysiwyg input-textarea-long" rows="5" cols="50" name="page_data[form][general][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_submit_const']->value, ENT_QUOTES, 'UTF-8');?>
]" rows="5"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['form_submit_const']->value], ENT_QUOTES, 'UTF-8');?>
</textarea>
        </div>
        
    </div>

    <div class="control-group">
        <label for="form_recipient" class="cm-required control-label"><?php echo $_smarty_tpl->__("email_to");?>
:</label>
        <?php $_smarty_tpl->tpl_vars["form_recipient_const"] = new Smarty_variable(@constant('FORM_RECIPIENT'), null, 0);?>
        <div class="controls">
            <input id="form_recipient" class="input-text" type="text" name="page_data[form][general][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_recipient_const']->value, ENT_QUOTES, 'UTF-8');?>
]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['form_recipient_const']->value], ENT_QUOTES, 'UTF-8');?>
">
        </div>
    </div>

    <div class="control-group">
        <label for="form_is_secure" class="control-label"><?php echo $_smarty_tpl->__("form_is_secure");?>
:</label>
        <?php $_smarty_tpl->tpl_vars["form_secure_const"] = new Smarty_variable(@constant('FORM_IS_SECURE'), null, 0);?>
        <div class="controls">
                <input type="hidden" name="page_data[form][general][<?php echo htmlspecialchars(@constant('FORM_IS_SECURE'), ENT_QUOTES, 'UTF-8');?>
]" value="N">
                <span class="checkbox">
                    <input type="checkbox" id="form_is_secure" value="Y" <?php if ($_smarty_tpl->tpl_vars['form']->value[$_smarty_tpl->tpl_vars['form_secure_const']->value]=="Y") {?>checked="checked"<?php }?> name="page_data[form][general][<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['form_secure_const']->value, ENT_QUOTES, 'UTF-8');?>
]">
                </span>
        </div>
    </div>

    <?php echo $_smarty_tpl->getSubTemplate ("addons/form_builder/views/pages/components/pages_form_elements.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


</div>
<?php }?><?php }} ?>
