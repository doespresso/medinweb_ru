<?php /* Smarty version Smarty-3.1.15, created on 2014-03-23 17:07:35
         compiled from "/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/store_import/views/store_import/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2099464450532edc97ae7318-29632246%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b2a8e292e8f00be6bdfcaa53628ae147f2e3e5c' => 
    array (
      0 => '/Users/jd/servers/LOCALHOST/medinweb.ru/public/design/backend/templates/addons/store_import/views/store_import/index.tpl',
      1 => 1395142067,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '2099464450532edc97ae7318-29632246',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'steps' => 0,
    'step' => 0,
    'step_number' => 0,
    'class' => 0,
    'step_data' => 0,
    'store_data' => 0,
    'text_from' => 0,
    'companies_count_from' => 0,
    'text_to' => 0,
    'config' => 0,
    'step4_notification' => 0,
    'langvar_name' => 0,
    'import_date' => 0,
    'date' => 0,
    'edition' => 0,
    'check_company_count_failed' => 0,
    'but_meta' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_532edc97eca959_58891025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532edc97eca959_58891025')) {function content_532edc97eca959_58891025($_smarty_tpl) {?><?php
fn_preload_lang_vars(array('import_data','go_back','congratulations'));
?>
<?php $_smarty_tpl->_capture_stack[0][] = array("mainbox", null, null); ob_start(); ?>
<div id="import_store">
    <ul class="import-progress"><?php  $_smarty_tpl->tpl_vars['step_data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['step_data']->_loop = false;
 $_smarty_tpl->tpl_vars['step_number'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['steps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['step_data']->key => $_smarty_tpl->tpl_vars['step_data']->value) {
$_smarty_tpl->tpl_vars['step_data']->_loop = true;
 $_smarty_tpl->tpl_vars['step_number']->value = $_smarty_tpl->tpl_vars['step_data']->key;
?><?php if ($_smarty_tpl->tpl_vars['step']->value>$_smarty_tpl->tpl_vars['step_number']->value) {?><?php $_smarty_tpl->tpl_vars["class"] = new Smarty_variable("done", null, 0);?><?php } elseif ($_smarty_tpl->tpl_vars['step']->value==$_smarty_tpl->tpl_vars['step_number']->value) {?><?php $_smarty_tpl->tpl_vars["class"] = new Smarty_variable("active", null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars["class"] = new Smarty_variable('', null, 0);?><?php }?><li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');?>
"><span class="import-progress-bg"></span><span class="import-progress-title"><?php if ($_smarty_tpl->tpl_vars['class']->value&&$_smarty_tpl->tpl_vars['class']->value!="active"&&$_smarty_tpl->tpl_vars['step_data']->value['href']) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['step_data']->value['href'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['step_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['step_data']->value['name'], ENT_QUOTES, 'UTF-8');?>
<?php }?></span></li><?php } ?></ul>

    <?php if ($_smarty_tpl->tpl_vars['step']->value==1) {?>
        <div id="import_step_1">
            <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="GET" name="import_step_1" enctype="multipart/form-data" class="form-horizontal">
               <div id="store_import_step_1">
                   <div class="control-group ">
                       <label class="control-label"><?php echo $_smarty_tpl->__("store_import.local_store");?>
 <a class="cm-tooltip" title="<?php echo $_smarty_tpl->__("store_import.local_store_tooltip");?>
"><i class="icon-question-sign"></i></a>:</label>
                       <div class="controls">
                            <input type="text" class="input-import" name="store_data[path]" id="store_data_path" size="44" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_data']->value['path'], ENT_QUOTES, 'UTF-8');?>
" placeholder="<?php echo $_smarty_tpl->__("store_import.full_path_installation_directory");?>
" />
                            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[store_import.index.step_2]",'but_text'=>__("store_import.select_store"),'but_role'=>"button_main"), 0);?>

                       </div>
                   </div>
               </div>
            </form>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['step']->value==2) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/store_import/views/store_import/components/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div id="import_step_2">
            <p><?php echo $_smarty_tpl->__("store_import.fill_form");?>
</p>
            <?php if ($_smarty_tpl->tpl_vars['store_data']->value['product_version']=='2.2.4'||$_smarty_tpl->tpl_vars['store_data']->value['product_version']=='2.2.5') {?>
                <p><?php echo $_smarty_tpl->__("store_import.second_step_22x_notice");?>
</p>
            <?php }?>
            <div class="import-from clearfix">
                <form action="<?php echo htmlspecialchars(fn_url(''), ENT_QUOTES, 'UTF-8');?>
" method="get" name="import_step_2" class="form-horizontal form-edit<?php if (@constant('DEVELOPMENT')!=true) {?> cm-ajax cm-comet<?php }?>" enctype="multipart/form-data">
                    <div class="pull-left import-cart" id="store_import_step_2_from">
                        <?php ob_start();?><?php echo $_smarty_tpl->__("store_import.from");?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_tmp1." ".((string)$_smarty_tpl->tpl_vars['text_from']->value)), 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['store_data']->value['product_edition']=='ULTIMATE') {?>
                            <div class="control-group">
                                <label class="control-label"><?php echo $_smarty_tpl->__("store_import.admin_url");?>
:</label>
                                <div class="controls">
                                    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_data']->value['admin_index'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo $_smarty_tpl->__("store_import.companies_count");?>
:</label>
                                <div class="controls">
                                    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['companies_count_from']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="control-group">
                                <label class="control-label"><?php echo $_smarty_tpl->__("store_import.storefront_url");?>
:</label>
                                <div class="controls">
                                    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_data']->value['storefront'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo $_smarty_tpl->__("store_import.secure_storefront_url");?>
:</label>
                                <div class="controls">
                                    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_data']->value['secure_storefront'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                                </div>
                            </div>
                        <?php }?>

                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("store_import.db_host");?>
:</label>
                            <div class="controls">
                                <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_data']->value['db_host'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("store_import.db_name");?>
:</label>
                            <div class="controls">
                                <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_data']->value['db_name'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("store_import.db_user");?>
:</label>
                            <div class="controls">
                                <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_data']->value['db_user'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("store_import.table_prefix");?>
:</label>
                            <div class="controls">
                                <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['store_data']->value['table_prefix'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                            </div>
                        </div>
                    </div>

                    <div class="pull-right import-cart" id="store_import_step_to">

                        <?php echo $_smarty_tpl->getSubTemplate ("common/subheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>$_smarty_tpl->tpl_vars['text_to']->value), 0);?>

                        <?php if ($_smarty_tpl->tpl_vars['store_data']->value['product_edition']=='ULTIMATE') {?>
                            <div class="control-group">
                                <label class="control-label"><?php echo $_smarty_tpl->__("store_import.admin_url");?>
:</label>
                                <div class="controls">
                                    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['http_location'], ENT_QUOTES, 'UTF-8');?>
/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['admin_index'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo $_smarty_tpl->__("store_import.companies_count");?>
:</label>
                                <div class="controls">
                                    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['companies_count_from']->value, ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                                </div>
                            </div>
                        <?php } else { ?>
                            <div class="control-group">
                                <label class="control-label"><?php echo $_smarty_tpl->__("store_import.storefront_url");?>
:</label>
                                <div class="controls">
                                    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['http_location'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"><?php echo $_smarty_tpl->__("store_import.secure_storefront_url");?>
:</label>
                                <div class="controls">
                                    <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['https_location'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                                </div>
                            </div>
                        <?php }?>

                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("store_import.db_host");?>
:</label>
                            <div class="controls">
                                <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['db_host'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("store_import.db_name");?>
:</label>
                            <div class="controls">
                                <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['db_name'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label"><?php echo $_smarty_tpl->__("store_import.db_user");?>
:</label>
                            <div class="controls">
                                <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['db_user'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                            </div>
                        </div>
                        <div class="control-group">
                           <label class="control-label"><?php echo $_smarty_tpl->__("store_import.table_prefix");?>
:</label>
                           <div class="controls">
                                <input type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['config']->value['table_prefix'], ENT_QUOTES, 'UTF-8');?>
" disabled="disabled" />
                           </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_name'=>"dispatch[store_import.index.step_3]",'but_text'=>__("import_data"),'but_target_form'=>"import_step_2",'but_role'=>"button_main"), 0);?>

                                <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"store_import.index.step_1",'but_text'=>__("go_back"),'but_role'=>"action"), 0);?>

                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['step']->value==4) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/store_import/views/store_import/components/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div id="import_step_4">
            <?php echo $_smarty_tpl->__("store_import.text_configuration");?>

            <?php echo $_smarty_tpl->tpl_vars['step4_notification']->value;?>

            <?php if (fn_allowed_for("MULTIVENDOR")) {?>
                <?php $_smarty_tpl->tpl_vars["langvar_name"] = new Smarty_variable("vendors", null, 0);?>
            <?php } else { ?>
                <?php $_smarty_tpl->tpl_vars["langvar_name"] = new Smarty_variable("stores", null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->__("store_import.text_configuration2",array("[storefronts_vendors]"=>__($_smarty_tpl->tpl_vars['langvar_name']->value)));?>

            <div><?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"store_import.index.step_5",'but_text'=>__("store_import.complete_configuration"),'but_role'=>"action",'but_meta'=>"btn-primary"), 0);?>
</div>
        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['step']->value==5) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/store_import/views/store_import/components/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div id="import_step_5">
            <div class="import-step-5">
                <?php $_smarty_tpl->tpl_vars["date"] = new Smarty_variable(fn_date_format($_smarty_tpl->tpl_vars['import_date']->value,"%d.%m.%Y, %H:%M"), null, 0);?>
                <?php $_smarty_tpl->tpl_vars["edition"] = new Smarty_variable(ucfirst(strtolower($_smarty_tpl->tpl_vars['store_data']->value['product_edition'])), null, 0);?>
                <?php echo $_smarty_tpl->__("store_import.actualize_data_text",array("[date]"=>$_smarty_tpl->tpl_vars['date']->value,"[version]"=>$_smarty_tpl->tpl_vars['store_data']->value['product_version'],"[edition]"=>$_smarty_tpl->tpl_vars['edition']->value));?>

            </div>

            <?php if (@constant('DEVELOPMENT')!=true) {?>
                <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable("cm-ajax cm-comet", null, 0);?>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['check_company_count_failed']->value) {?>
                <?php $_smarty_tpl->tpl_vars['but_meta'] = new Smarty_variable("disabled", null, 0);?>
            <?php }?>
            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"store_import.index.actualize",'but_text'=>__("store_import.actualize_data"),'but_role'=>"action",'but_meta'=>$_smarty_tpl->tpl_vars['but_meta']->value), 0);?>

            <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"store_import.index.step_6",'but_text'=>__("store_import.complete_store_import"),'but_role'=>"action",'but_meta'=>"btn-primary"), 0);?>

        </div>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['step']->value==6) {?>
        <?php echo $_smarty_tpl->getSubTemplate ("addons/store_import/views/store_import/components/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <h4><?php echo $_smarty_tpl->__("congratulations");?>
</h4>
        <?php echo $_smarty_tpl->__("store_import.completed");?>

        <?php if (fn_allowed_for('MULTIVENDOR')) {?>
            <?php echo $_smarty_tpl->__("store_import.completed_text_mve");?>

        <?php } else { ?>
            <?php echo $_smarty_tpl->__("store_import.completed_text_ult");?>

        <?php }?>
        <?php echo $_smarty_tpl->getSubTemplate ("buttons/button.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('but_href'=>"store_import.index.step_7",'but_text'=>__("store_import.start_new_store_import"),'but_role'=>"action",'but_meta'=>"btn-primary"), 0);?>

    <?php }?>
<!--import_store--></div>

<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ("common/mainbox.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('title'=>__("store_import.store_import"),'content'=>Smarty::$_smarty_vars['capture']['mainbox'],'title_extra'=>Smarty::$_smarty_vars['capture']['title_extra'],'sidebar'=>Smarty::$_smarty_vars['capture']['sidebar']), 0);?>

<?php }} ?>
